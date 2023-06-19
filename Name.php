<!DOCTYPE html>

<html>

<head>

<title>PHP Form</title>

</head>

<body>

<?php

     if ($_SERVER["REQUEST_METHOD"] == "POST") {

       $username = test_input($_POST["username"]);

       if (!empty($username)) {

         echo "Thank you for submitting your name: " . $username;

       } else {

         echo "Please enter your name.";

       }

     }

 

     function test_input($data) {

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

     }

   ?>

 

<form method="post">

<fieldset>

<legend>NAME</legend>

     <input type="text" name="username" value="<?php echo isset($_POST['username']) ? $_POST['username'] : ''; ?>" /> <br />

<input type="submit" value="Submit">

</fieldset>

</form>

</body>

</html>