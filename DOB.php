<!DOCTYPE html>
<html>
<head>
<title>PHP Form</title>
</head>
<body>
<?php
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
       $dob = $_POST["dob"];
       if (!empty($dob)) {
         echo "Thank you for submitting your date of birth: " . $dob;
       } else {
         echo "Please enter your date of birth.";
       }
     }
   ?>

<form method="post">
<fieldset>
<legend>Sign up</legend>
       Date Of Birth: <input type="date" name="dob" value="<?php echo $_POST['dob'] ?? ''; ?>" /> <br />
<input type="submit" value="Submit">
</fieldset>
</form>
</body>
</html>