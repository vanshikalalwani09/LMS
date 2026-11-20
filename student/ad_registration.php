<?php
  include "connection.php";
  include "navbar.php";
?>

<!DOCTYPE html>
<html>
<head>

  <title>Admin Registration</title>
  <link rel="stylesheet" type="text/css" href="Style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    
    <script>
            function formvalidation() {
                var name =document.forms.Registration.first.value;
                var lname =document.forms.Registration.last.value;
                var email =document.forms.Registration.email.value;
                var phone =document.forms.Registration.contact.value;
                var password =document.forms.Registration.password.value;
                var username =document.forms.Registration.username.value;
                var regEmail=/^\w+([\.-]?\w+)@\w+([\.-]?\w+)(\.\w{2,3})+$/g;  //Javascript reGex for Email Validation.
                var regPhone=/^\d{10}$/;                                        // Javascript reGex for Phone Number validation.
                var regName = /\d+$/g;                                    // Javascript reGex for Name validation
 
                if (name == "" || regName.test(name)) {
                    window.alert("Please enter your name properly.");
                    name.focus();
                    return false;
                }
                if (lname == "" || regName.test(name)) {
                    window.alert("Please enter your name properly.");
                    lname.focus();
                    return false;
                }
 
                 
                if (email == "" || !regEmail.test(email)) {
                    window.alert("Please enter a valid e-mail address.");
                    email.focus();
                    return false;
                }
              
 
                if(password.length <6){
                    alert("Password should be atleast 6 character long");
                    password.focus();
                    return false;
 
                }
                if (phone == "" || !regPhone.test(phone)) {
                    alert("Please enter valid phone number.");
                    phone.focus();
                    return false;
                }
 
                
 
                return true;
            }
        </script>

  <style type="text/css">
    section
    {
      margin-top: -20px;
    }
  </style>   
</head>
<body>

<section>
  <div class="reg_img">

    <div class="box2">
        <h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;"> &nbsp &nbsp &nbsp Dept.Library Portal</h1>
        <h1 style="text-align: center; font-size: 25px;">User Registration Form</h1>

      <form name="Registration" return="" method="post">
      
        
        <div class="login">
          <input class="form-control" type="text" name="first" placeholder="First Name" required=""> <br>
          <input class="form-control" type="text" name="last" placeholder="Last Name" required=""> <br>
          <input class="form-control" type="text" name="username" placeholder="Username" required=""> <br>
          <input class="form-control" type="password" name="password" placeholder="Password" required=""> <br>
    
          <input class="form-control" type="text" name="email" placeholder="Email" required=""><br>
          <input class="form-control" type="text" name="contact" placeholder="Phone No" required=""><br>

          <input class="btn btn-default" type="submit" name="submit" value="Sign Up" style="color: black; width: 70px; height: 30px"> </div>
      </form>
     
    </div>
  </div>
</section>

    <?php
      
      if (!preg_match ("/^[a-zA-z]*$/", $_POST ["first"]) ) {  
          $ErrMsg = "Only alphabets and whitespace are allowed.";
                   echo $ErrMsg;  
      }
      
      if(isset($_POST['submit']))
      {
        $count=0;
        $sql="SELECT username from `student`";
        $res=mysqli_query($db,$sql);

        while($row=mysqli_fetch_assoc($res));
       
        {
          if($row['Username']==$_POST['username'])
          {
            $count=$count+1;
          }
        }
        if($count==0)
        {
          mysqli_query($db,"INSERT INTO `ADMIN` VALUES('$_POST[first]', '$_POST[last]', '$_POST[username]', '$_POST[password]', '$_POST[email]', '$_POST[contact]');");
        ?>
          <script type="text/javascript">
           alert("Registration successful");
          </script>
        <?php
        }
        else
        {

          ?>
            <script type="text/javascript">
              alert("The username already exist.");
            </script>
          <?php

        }

  
      }

    ?>

</body>
</html>