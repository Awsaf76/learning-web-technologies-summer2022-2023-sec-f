<!DOCTYPE html>
<html>
<head>
<title>PHP Form</title>
</head>
<body>
<?php
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
       $degrees = $_POST["degree"];
       if (!empty($degrees)) {
         echo "Thank you for submitting your degrees: " . implode(", ", $degrees);
       } else {
         echo "Please select at least one degree.";
       }
     }
   ?>

<form method="post">
<fieldset>
<legend>Sign up</legend>
       Degree:
<label>
<input type="checkbox" name="degree[]" value="SSC" <?php echo isset($_POST['degree']) && in_array('SSC', $_POST['degree']) ? 'checked' : ''; ?>> SSC
</label>
<label>
<input type="checkbox" name="degree[]" value="HSC" <?php echo isset($_POST['degree']) && in_array('HSC', $_POST['degree']) ? 'checked' : ''; ?>> HSC
</label>
<label>
<input type="checkbox" name="degree[]" value="BSC" <?php echo isset($_POST['degree']) && in_array('BSC', $_POST['degree']) ? 'checked' : ''; ?>> BSC
</label>
<br />
<input type="submit" value="Submit">
</fieldset>
</form>
</body>
</html>