<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap 101 Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" />
    <style type="text/css">
            body { padding-top: 70px; }
    </style>
  </head>
  <body>
          
          
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                   <div class="container">
                           <div class="navbar-header">
                                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".nav-c">
                                    <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                              <a class="navbar-brand" href="../../">Final</a>
                        </div>
                
                        <div class="collapse navbar-collapse nav-c">
                    <ul class="nav navbar-nav">
                                                <li class="Items">
                                                        <a href="../Items/"> Products </a>
                                                </li>
                                                <li class="User">
                                                        <a href="../User/"> Users </a>
                                                </li>
                                                <li class="Supplier">
                                                        <a href="../Supplier/"> Supplier </a>
                                                </li>
                                                
                                                
                                        <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Other Options <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                          <li class="Orders"><a href="../Orders/index.php">Orders</a></li>
                                          <li class="Billing"><a href="../BillingAddress/">Billing Address</a></li>
                                          <li class="Categories"><a href="../Categories/">Categories</a></li>
                                          <li class="Comments"><a href="../Comments/">Comments</a></li>
                                          <li class="Contact"><a href="../Contact/">Contact Information</a></li>
                                          <li class="Card"><a href="../Card/">Credit Cards</a></li>
                                          <li class="Shipping"><a href="../Shipping/">Shipping Address</a></li>
                                          <li class="Viewing"><a href="../ViewHist/">Viewing History</a></li>
                                       <li>
									<a href="../OrderContents/">Order Contents</a>
									</li>
						</ul>
									</ul>		
                                      </li>
                              </ul>
                                <p class="navbar-text pull-right">Signed in as <a href="#" class="navbar-link">Brian Travis</a></p>
                        </div>
                </div>
        </div>

        <? include $view; ?>




    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="Scripts/main.js"></script>
    <? if(function_exists('Scripts')) Scripts(); ?>
 </body>
</html>