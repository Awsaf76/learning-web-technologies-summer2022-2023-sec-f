<!DOCTYPE html>
<html>
<head>
<title>PHP Form</title>
</head>
<body>
<?php
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
       $gender = $_POST["gender"];
       if (!empty($gender)) {
         echo "Thank you for submitting your gender: " . $gender;
       } else {
         echo "Please select your gender.";
       }
     }
   ?>

<form method="post">
<fieldset>
<legend>Sign up</legend>
       Gender:
<label>
<input type="radio" name="gender" value="male" <?php echo isset($_POST['gender']) && $_POST['gender'] == 'male' ? 'checked' : ''; ?>> Male
</label>
<label>
<input type="radio" name="gender" value="female" <?php echo isset($_POST['gender']) && $_POST['gender'] == 'female' ? 'checked' : ''; ?>> Female
</label>
<label>
<input type="radio" name="gender" value="other" <?php echo isset($_POST['gender']) && $_POST['gender'] == 'other' ? 'checked' : ''; ?>> Other
</label>
<br />
<input type="submit" value="Submit">
</fieldset>
</form>
</body>
</html>