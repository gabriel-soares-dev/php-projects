<!DOCTYPE html>
<html>
<head>
   <title></title>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
   <!-- HTML form with POST method -->
   <form method='POST'>
      <h2>Please input your name:</h2>
      <!-- Text input field for the name -->
      <input type="text" name="name">
      <!-- Submit button to submit the form -->
      <input type="submit" value="Submit Name">
   </form>
   <?php
   // Check if the form is submitted and 'name' is set in $_POST
   if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['name'])) {
      // Retrieve name from the form and store it in a local variable
      $name = $_POST['name'];
      // Display a greeting message with the entered name
      echo "<h3> Hello $name </h3>";
   }
   ?>
</body>
</html>