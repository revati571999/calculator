<?php
error_reporting(0);
//define variables 
$emailE=$usernameE=$passE=$cpassE=$genE=$cityE=$fbE="";
if(isset($_POST['submit'])){
    $email=input_field($_POST['Email']);
    $uname=input_field($_POST['uname']);
    $pass=$_POST['password'];
    $cpass=$_POST['cpassword'];
    $gen=$_POST['gender'];
    $city=$_POST['City'];
    $fb=$_POST['feedb'];
    //Validate email
    if(empty($email))
     {
         $emailE="Email is required";
     }
     else {
         if(!preg_match ("/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i",$email)){
            $emailE="Invalid Email";
         }
     }
     //Validate user name
     if(empty($uname))
     {
        $usernameE="User name is required";
     }
     else {
         if(!preg_match("/^[a-zA-Z ]+$/",$uname)){
            $usernameE="Only alphabate allow";
         }
     }
     //Validate password
     if(empty($pass))
     {
        $passE="Password is required";
     }
     else {
        if(!preg_match("/^[a-zA-Z0-9 ]{8,24}$/",$uname)){
           $usernameE="Range between 8-24";
        }
    }
    //Validate confirm password
    if(empty($cpass))
    {
        $cpassE="Confirm Password is required";
    }
    else{
        if($pass!==$cpass)
        {
            $cpassE="password and confirm password did not match";
        }
    }

    //Validate Gender
    if(empty($gen))
    {
        $genE="Select Gender";
    }

    //VAlidate City
    if(empty($city))
    {
        $cityE="Select City";
    }

    //Validate Feedback
    if(empty($fb))
    {
        $fbE="Please give your feedback";
    }

    if($emailE=="" && $usernameE=="" && $passE=="" && $cpassE=="" && $genE=="" && $cityE=="" && $fbE==""){
        $success= "Data Submitted Successfully!!!";
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
<link rel="stylesheet" href="assets/css/style.css">
<title>Contact Page</title>
    <style>
             .error{color:red}
             /* #form{
                     background-color: aqua;
                    font-size: large;
                    width:auto;
                } */
                #fields{
                    background-color: grey;
                    justify-content: center;
                    font-size: large;
                    width:700px;
                    color:white;
                    margin-left:420px;
                    border-radius: 20px 20px 20px 20px;
                }
            #form h2{
                color:Red;
                margin-top:20px;
                padding:10px;
                text-align: center;
                font-size:30px;
            }
            #tab{
                margin-left: 200px;
                margin-top: 50px;
                margin-bottom: 50px;
                font-size:20px;
            }
            #tab input{
                font-size:20px;
            }
            #tab input[type='submit']{
                width:150px;
                font-size:20px;
                border-radius: 10px 10px 10px 10px;
                background-color:rgb(233, 211, 223);
            }
            .text{
                font-size:23px
            }
    </style>
    <!-- <link rel="stylesheet" href="style.css"> -->
    
</head>
<body>
    <header>
        <?php
        include("nav.php");
        ?>
    </header>
    <section class="p-2"></section>
    <form method="post" class="p-3 m-2" id="form">
        <h2>Contact Us</h2>
        <fieldset id="fields">

            <table id="tab">
                <tr>
                    <td>
                        Email: 
                    </td>
                    <td>
                        <input type="email" name="Email">
                    </td>
                </tr>
                <tr><td colspan=2>
                    <span class="error"><?php echo $emailE;?></span>
                </td></tr>
                <tr>
                    <td>User name: </td>
                    <td>
                        <input type="text" name="uname" id="uname">
                    </td>
                </tr>
                <tr>
                    <td colspan=2>
                        <span class="error"><?php echo $usernameE;?></span>
                    </td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td>
                        <input type="password" name="password" id="pass">
                    </td>
                </tr>
                <tr>
                    <td colspan=2>
                        <span class="error"><?php echo $passE;?></span>
                    </td>
                </tr>
                <tr>
                    <td>
                        Confirm Password:
                    </td>
                    <td>
                        <input type="password" name="cpassword" id="cpass">
                    </td>
                </tr>
                <tr>
                    <td colspan=2>
                        <span class="error"><?php echo $cpassE;?></span>
                    </td>
                </tr>
                <tr>
                    <td>
                        Gender:
                    </td>
                    <td>
                        <input type="radio" name="gender" value="female">Female
                        <input type="radio" name="gender" value="male">male
                    </td>
                </tr>
                <tr>
                    <td colspan=2>
                        <span class="error"><?php echo $genE;?></span>
                    </td>
                </tr>
                <tr>
                    <td>City:</td>
                    <td>           
                        <select name="City">
                            <option value=" " disabled selected>--select--</option>
                            <option value="Mumbai">Mumbai</option>
                            <option value="Pune">Pune</option>
                            <option value="Chennai">Chennai</option>
                            <option value="Delhi">Delhi</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td colspan=2>
                            <span class="error"><?php echo $cityE;?></span>
                        </td>
                    </tr>
                    <tr>
                        <td>Feedback:</td>
                        <td>
                            <textarea name="feedb" id="fb" cols="30" rows="5"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td colspan=2>
                            <span class="error"><?php echo $fbE;?></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" value="submit" name="submit">
                            
                        </td>
                        
                    </tr>
                    
                </table>
            </fieldset>
        </form>
        <p class="text-success m-1 p-1 text-center text"><?php echo $success;?></p>

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