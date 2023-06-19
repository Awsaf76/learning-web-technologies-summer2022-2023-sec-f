<!DOCTYPE html>
<html>
<head>
<title>PHP Form</title>
</head>
<body>
<?php
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
       $bloodGroup = $_POST["bloodGroup"];
       if (!empty($bloodGroup)) {
         echo "Thank you for selecting your blood group: " . $bloodGroup;
       } else {
         echo "Please select a blood group.";
       }
     }
   ?>

<form method="post">
<fieldset>
<legend>Sign up</legend>
<label for="bloodGroup">Blood Group:</label>
<select id="bloodGroup" name="bloodGroup">
<option value="">-- Please select --</option>
<option value="A+">A+</option>
<option value="A-">A-</option>
<option value="B+">B+</option>
<option value="B-">B-</option>
<option value="O+">O+</option>
<option value="O-">O-</option>
<option value="AB+">AB+</option>
<option value="AB-">AB-</option>
</select>
<br />
<input type="submit" value="Submit">
</fieldset>
</form>
</body>
</html>