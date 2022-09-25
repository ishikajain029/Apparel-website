<?php

session_start();


if(isset($_SESSION['username']))
{
    header("location: cart.php");
    exit;
}
require_once "config.php";

$username = $password = "";
$err = "";


if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty(trim($_POST['username'])) || empty(trim($_POST['password'])))
    {
        $err = "Please enter username + password";
    }
    else{
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
    }


if(empty($err))
{
    $sql = "SELECT id, username, password FROM users WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $param_username);
    $param_username = $username;
    
    
   
    if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_store_result($stmt);
        if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt))
                    {
                        if(password_verify($password, $hashed_password))
                        {
                            
                            session_start();
                            $_SESSION["username"] = $username;
                            $_SESSION["id"] = $id;
                            $_SESSION["loggedin"] = true;

                            
                            header("location: cart.php");
                            
                        }
                    }

                }

    }
}    


}


?>

<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
   

    <title>PHP login system!</title>
    <style>
      *{
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;

}
      body{
   display: grid; 
  height: 90vh;
  width:100%;
   /* place-items: center; */
  
  background: -webkit-linear-gradient(left, #5145b2,#fa4299);
}

.form-inner{
  margin:auto;
  padding-bottom:70px;
  width: 25vw;
  /* display: flex;
  flex-direction: column;
  align-items: center; 
  justify-content: center;
  
  flex-wrap: wrap; */
/*   
  margin-top:-120px;
  margin-left:120%;  */
  
}
.pic1{
  display:flex;
  justify-content: center;
  height:20vh;
  /* margin-left:120%;  */
  margin-top:30px;
  align-items:center;
} 

h3{
  font-size:20px;
  
}

      .form-inner form .field{
  height: 50px;
  width: 100%;
  margin-top:10px;
}
      .form-inner form .field input{
  height: 78%;
  width: 100%;
  outline: none;
  padding-left: 15px;
  
  border-radius: 5px;
  border: 1px solid lightgrey;
  border-bottom-width: 2px;
  font-size: 17px;
  transition: all 0.3s ease;
}
.form-inner form .field input:focus{
  border-color: #fc83bb;
  /* box-shadow: inset 0 0 3px #fb6aae; */
}
.form-inner form .field input::placeholder{
  color: #999;
  transition: all 0.3s ease;
}
form .field input:focus::placeholder{
  color: #b3b3b3;
}
.form-inner form .pass-link{
  margin-top: 5px;
}
.form-inner form .signup-link{
  
  margin-top: 29px;
}
.form-inner form .pass-link a{

  color: #0e060a;
  text-decoration: none;
}
.form-inner form .signup-link a{
  color: #dbfd74;
  text-decoration: none;

}
.form-inner form .pass-link a:hover,
.form-inner form .signup-link a:hover{
  text-decoration: underline;
}


.regbtn{
  font-size:14px;
    font-weight:600;
    padding:10px 23px;
    color: #000;
    background-color: #f5e8de;
    border-radius:4px;
    cursor:pointer; 
    border:none;
    outline: none;
    transition: 0.2s;
    margin-top:10px;
    cursor: pointer;
}

@media (max-width:800px){
    .form-inner{
        margin: auto;
        padding-bottom: 70px;
        width: 60vw;
    }
    .pic1{
      margin-top: 50px;
    }
    .logo{
      height:70px;
    }
  }


    </style>
  </head>
  <body>
  <div class="pic1">
    <a href="#"><img src="img1/logo2.png" class="logo" alt="" height=50px></a> 
    </div>
    
    <div class="form-inner">
    <h3>Please Login Here:</h3>
<form action="" method="post">
  <div class="field">
    
    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username">
    
  </div>
  <div class="field">
    
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password">
   
  </div>
  <div class="pass-link">
                     <a href="#">Forgot password?</a>
                  </div>
                  
  <button type="submit" class="regbtn">Submit</button>
  <div class="signup-link">
                     Not a member? <a href="signup.php">Signup now</a>
                  </div>
</form>
</div>



    
  </body>
</html>
