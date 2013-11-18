<?php
include_once '../../inc/_global.php';

@$action = $_REQUEST['action'];
@$format = $_REQUEST['format'];

switch ($action) {
        case 'details':
                $model  = Contact::Get($_REQUEST['id']);
                $view         = 'details.php';
                $title        = "Edit: ".$model['User_Id'];        
                break;
                
        case 'new':
                $model = Contact::Blank();
                $view         = 'edit.php';                
                $title        = "Create New Contact"        ;        
                break;
        
  
         case 'save':
                $errors = Contact::Validate($_REQUEST);
                if(!$errors){
                        $errors = Contact::Save($_REQUEST);                        
                }
                if(!$errors){
                        header("Location: ?status=Saved&Id=".$_REQUEST['Id']);
                        die();
                }                        
                        $model = $_REQUEST;
                        $view = 'edit.php';
                        $title        = "Edit: " .$model['Id'] ;        
                break;
                
        case 'edit':
                $model  = Contact::Get($_REQUEST['id']);
                $view         = 'edit.php';                
                $title        = "Edit:".$model['User_Id'];        
                break;
                
        case 'delete':
                if(isset($_POST['id'])){
                        $errors = Contact::Delete($_REQUEST['id']);                        
                        if(!$errors){
                                header("Location: ?");
                                die();
                        }                                                        
                }
                $model  = Contact::Get($_REQUEST['id']);
                $view         = 'delete.php';                                        
                $title        = "Edit:".$model['User_Id'] ;        
                break;
        
        default:
                $model  = Contact::Get();
                $view         = 'List.php';
                $title        = 'Contact';                
                break;
}

switch ($format) {
        case 'dialog':
                include '../Shared/_Dialog.php';                                
                break;
         case 'plain':
                include $view;
                break;
        default:
                include '../Shared/_Layout.php';                
                break;
}
