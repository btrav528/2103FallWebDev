<?php
include_once '../../inc/_global.php';

@$action = $_REQUEST['action'];
@$format = $_REQUEST['format'];

switch ($action) {
        case 'details':
                $model  = OrderContents::Get($_REQUEST['id']);
                $view         = 'details.php';
       
                break;
                
        case 'new':
                $model = OrderContents::Blank();
                $view         = 'edit.php';                
                $title        = "Create New Order Content Entry"        ;        
                break;
        
  
         case 'save':
                $errors = OrderContents::Validate($_REQUEST);
                if(!$errors){
                        $errors = OrderContents::Save($_REQUEST);                        
                }
                if(!$errors){
                        header("Location: ?status=Saved&Id=".$_REQUEST['Id']);
                        die();
                }                        
                        $model = $_REQUEST;
                        $view = 'edit.php';
                               
                break;
                
        case 'edit':
                $model  = OrderContents::Get($_REQUEST['id']);
                $view         = 'edit.php';                
               
                break;
                
        case 'delete':
                if(isset($_POST['id'])){
                        $errors = OrderContents::Delete($_REQUEST['id']);                        
                        if(!$errors){
                                header("Location: ?");
                                die();
                        }                                                        
                }
                $model  = OrderContents::Get($_REQUEST['id']);
                $view         = 'delete.php';                                        
                       
                break;
        
        default:
                $model  = OrderContents::Get();
                $view         = 'List.php';
                $title        = 'Order Contents';                
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
