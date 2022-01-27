<?php

error_reporting(0);
$loginD=["username"=>"poorva","password"=>"Pass"];

$success=$error="";
if(isset($_POST["Submit"])){

    $uname=input_field($_POST['uname']);
    $pass=input_field($_POST['pass']);

    if(empty($uname) || empty($pass))
    {
        $error="Field empty";
    }
    else{
        if($uname==$loginD['username'] && $pass==$loginD['password'])
        {
            $success="Login Successful";
        }
        else{$error="Invalid credentials!!";}
    }
    
    }
    function input_field($data){
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<title>Nav Page</title>
<style>
    .error{color:red}
    #form{
        margin: 20px 500px;
        text-align: center;
    }
    h3{
        margin: 10px 600px;
    }
</style>
</head>
<body>
    <header>
    <?php
    include("nav.php");
    ?>
    </header>
    <section class="p-2"></section>
    
    <section>
        <h3>Login</h3>
        <form method="post" id="form">
            <table>
                <tr>
                    <td>Username:</td>
                    <td><input type="text" name="uname" id="uname"></td>
                </tr>
                <tr>
                    <td colspan=2>
                        <span class="error"><?php echo $usernameE;?></span>
                    </td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="pass" id="pass"></td>
                </tr>
                <tr>
                    <td colspan=2>
                        <span class="error"><?php echo $passE;?></span>
                    </td>
                </tr>
                <tr>
                    <td colspan=2><input type="submit" name="Submit" id="sub"></td>
                </tr>
                <tr>
                <td colspan=2>
                        <span class="text-danger"><?php echo $error;?></span>
                        <span class="text-success"><?php echo $success;?></span>

                    </td>
                </tr>
                
            </table>
        </form>
    </section>

    <footer>
        <?php
        include("foot.php");
        ?>
    </footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>