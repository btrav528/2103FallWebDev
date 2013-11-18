<?php
include_once '../../inc/_global.php';

@$action = $_REQUEST['action'];
@$format = $_REQUEST['format'];

switch ($action) {
        case 'details':
                $model  = BillingAddress::Get($_REQUEST['id']);
                $view         = 'details.php';
                $title        = "Edit: ".$model['LineOne'] ;        
                break;
                
        case 'new':
                $model = BillingAddress::Blank();
                $view         = 'edit.php';                
                $title        = "Create New Billing Address"        ;        
                break;
        
  
         case 'save':
                $errors = BillingAddress::Validate($_REQUEST);
                if(!$errors){
                        $errors = BillingAddress::Save($_REQUEST);                        
                }
                if(!$errors){
                        header("Location: ?status=Saved&Id=".$_REQUEST['Id']);
                        die();
                }                        
                        $model = $_REQUEST;
                        $view = 'edit.php';
                        $title        = "Edit: " .$model['LineOne'] ;        
                break;
                
        case 'edit':
                $model  = BillingAddress::Get($_REQUEST['id']);
                $view         = 'edit.php';                
                $title        = "Edit:".$model['LineOne'] ;        
                break;
                
        case 'delete':
                if(isset($_POST['id'])){
                        $errors = BillingAddress::Delete($_REQUEST['id']);                        
                        if(!$errors){
                                header("Location: ?");
                                die();
                        }                                                        
                }
                $model  = BillingAddress::Get($_REQUEST['id']);
                $view         = 'delete.php';                                        
                $title        = "Edit:".$model['LineOne'];        
                break;
        
        default:
                $model  = BillingAddress::Get();
                $view         = 'List.php';
                $title        = 'BillingAddress';                
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
