<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login Form</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="style.css">
    </head>
    <!-- background-image:url('https://images.unsplash.com/photo-1549675584-91f19337af3d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTJ8fGxpYnJhcnl8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60'); -->
    <style>
       

    body{
        margin: 0;
        padding: 0;
       
        background-image:url('https://images.unsplash.com/photo-1549675584-91f19337af3d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTJ8fGxpYnJhcnl8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60');
        /* background-position: center; */
        /* background-size: cover; */
        /* background-repeat: no-repeat; */
        
    }
    .container{
        align-items: center;
        background: rgba(148, 89, 89, 0.529);
        backdrop-filter: blur(3px);
        width: 100%;
        box-shadow: rgb(0, 0, 0) 0px 0px 22px,
                    rgb(56, 52, 49) 0px 0px 22px;
        border-top-left-radius: 4.1rem;
        border-bottom-right-radius: 4.1rem;
    }

/* .login-form-1{
    background: pink;
}
.login-form-3{
    background: rgb(71, 17, 65);
} */
.login-form-3 .btnSubmit {
    border: 1px solid rgb(255, 254, 254);
    background-color: brown;
    color: white;
    font-family: 'Courier New', Courier, monospace;
    
}
.login-form-1 .btnSubmit {
    border: 1px solid brown;
    background-color: rgb(248, 243, 243);
    color:brown;
    font-family: 'Courier New', Courier, monospace;
    
}
.login-form-1 input{
    margin-top: 20px;
    border-radius: 20px;
    padding: 9px;
    border: 2px solid brown;
    background: rgba(255, 255, 255, 0.386);
   
}
.login-form-3 input{
    margin-top: 20px;
    background: rgba(255, 255, 255, 0.386);
    border-radius: 20px;
    padding: 9px;
    border: 2px solid brown;

   
}


.login-form-3 h3 {
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    margin-top: 50px;
    font-size: 40px;
   color: aliceblue;
  
  text-shadow: -4px 4px 4px rgb(228, 8, 8);
   
}

.login-form-1 h3 {
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
   font-size: 40px;
   color: aliceblue;
   text-shadow: -4px 4px 4px rgb(228, 8, 8);
}

@media screen and (max-width: 600px) {
    h3{
        font-size: 20px;
    }
    
}

    </style>
    <body >

<?php
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



<div class="container login-container">
<div class="row"><h4><?php echo $msg?></h4></div>
            <div class="row">
 
                <div class="col-md-6 login-form-3">
                    <h3>Admin Login</h3>
                    <form action="loginadmin_server_page.php" method="get">
                        <div class="form-group">
                            <input type="text" class="form-control" name="login_email" placeholder="Your Email *" value="" />
                        </div>
                        <!-- <Label style="color:red">*<?php echo $ademailmsg?></label> -->
                        <div class="form-group">
                            <input type="password" class="form-control" name="login_pasword"  placeholder="Your Password *" value="" />
                        </div>
                        <!-- <Label style="color:red">*<?php echo $adpasdmsg?></label> -->
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Login" />
                        </div>
                        <!-- <div class="form-group">

                            <a href="#" class="ForgetPwd" value="Login">Forget Password?</a>
                        </div> -->
                    </form>
                </div>
                <div class="col-md-6 login-form-1">
                    <h3>Student Login</h3>
                    <form action="login_server_page.php" method="get">
                        <div class="form-group">
                            <input type="text" class="form-control" name="login_email" placeholder="Your Email *" value="" />
                        </div>
                        <!-- <Label style="color:red">*<?php echo $emailmsg?></label> -->
                        <div class="form-group">
                            <input type="password" class="form-control" name="login_pasword"  placeholder="Your Password *" value="" />
                        </div>
                        <!-- <Label style="color:red">*<?php echo $pasdmsg?></label> -->
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Login" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="" async defer></script>
    </body>
</html>