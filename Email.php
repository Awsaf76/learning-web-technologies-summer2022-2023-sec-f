<!DOCTYPE html>
<html>
<head>
<title>PHP Form</title>
</head>
<body>
<?php
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
       $email = $_POST["email"];
       if (!empty($email)) {
         echo "Thank you for submitting your email address: " . $email;
       } else {
         echo "Please enter your email address.";
       }
     }
   ?>

<form method="post">
<fieldset>
<legend>Sign up</legend>
       Email: <input type="email" name="email" value="<?php echo $_POST['email'] ?? ''; ?>" /> <br />
<input type="submit" value="Submit">
</fieldset>
</form>
</body>
</html>