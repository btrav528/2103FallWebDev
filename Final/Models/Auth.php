<?
        const ADMIN = 1;

        class Auth
        {
                public static function IsLoggedIn()
                {
                        return self::GetUser() != null;
                }
                
                public static function GetUser()
                {
                        if(isset($_SESSION['User']))
                        {
                                return $_SESSION['User'];
                        }
                        
                        else return null;
                        
                }

                public static function LogIn($userName, $password)
                {
                        $sql = "        SELECT *FROM 2013Fall_Users 
                                                     WHERE U.LastName='$userName'
                                        ";
                        $user = Fetch_One($sql);
                        if($user == null)
                        {        
                                $_SESSION['loginUserError'] = "That User Doesn't Exist";
                                unset($_SESSION['loginPasswordError']);
                                header("Location: ?action=login");
                        }
                        else if($user['Password'] == $password)
                        {
                                $_SESSION['User'] = $user;        
                                unset($_SESSION['loginPasswordError']);
                        }
                        else
                        {
                                unset($_SESSION['loginUserError']);
                                $_SESSION['loginPasswordError'] = "Password is incorrect";        
                                header("Location: ?action=login");
                        }
                        
                }                
                
                public static function Secure()
                {
                        if(!self::IsLoggedIn())
                        {
                                header('Location: ' . "../Auth?action=login");
                                die();
                        }
                        
                        $user=Auth::GetUser();
                        
                        if(isset($user) && $user['Name'] == 'Customers')
                        {
                                header('Location: ' . "../Home");
                                die();
                        }
                }
                
                public static function HomeSecure()
                {
                        if(!self::IsLoggedIn())
                        {
                                header('Location: ' . "../Home?action=login");
                                die();
                        }
                }
        }

?>