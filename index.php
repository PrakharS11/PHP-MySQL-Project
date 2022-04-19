<?php
    
     session_start();
  
     $emailmsg="";
     $pasdmsg="";
     $msg="";
     $ademailmsg="";
     $adpasdmsg="";


    
     if(!empty($_REQUEST['ademailmsg'])){
         $ademailmsg=$_REQUEST['ademailmsg'];
     }

     if(!empty($_REQUEST['adpasdmsg'])){
         $adpasdmsg=$_REQUEST['adpasdmsg'];
     }

     if(!empty($_REQUEST['emailmsg'])){
         $emailmsg=$_REQUEST['emailmsg'];
     }

     if(!empty($_REQUEST['pasdmsg'])){
         $pasdmsg=$_REQUEST['pasdmsg'];
     }

     if(!empty($_REQUEST['msg'])){
         $msg=$_REQUEST['msg'];
     }


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="style.css">
    </head>
    
    <body>
       

        <div class="container login-container">
            <div class="row"><img class="imglogo" src="images/logo22.png"/></div>
            <div class="row"><h4><?php echo $msg?></h4></div>
                <div class="row">
                   
                <!-- Employee Login -->
                    <div class="col-md-6 login-form-1">
                        <h3>Employee Login</h3>
                        <form action="login_server_user.php" method="get">
                            
                            <div class="form-group">
                                <input type="email" class="form-control" name="login_email" placeholder="Email *" value="" />
                            </div>
                          
                            <div class="form-group">
                                <input type="password" class="form-control" name="login_pasword"  placeholder="Password *" value="" />
                            </div>
                           
                            <div class="form-group">
                                <input type="submit" class="btnSubmit" value="Login" />
                            </div>
                        </form>
                    </div>




                   

                <!-- Admin Login -->
                    <div class="col-md-6 login-form-2">
                        <h3>Admin Login</h3>
                        <form action="login_server_admin.php" method="get">
                            
                                <div class="form-group">
                                    <input type="email" class="form-control" name="login_email" placeholder="Email *" value="" />
                                </div>
                           
                            <div class="form-group">
                                <input type="password" class="form-control" name="login_pasword"  placeholder="Password *" value="" />
                            </div>

                            <div class="form-group">
                                <input type="submit" class="btnSubmit" value="Login" />
                            </div>
                        </form>
                    </div>

                </div>    
            </div>
        </div>

    </body>
</html>

