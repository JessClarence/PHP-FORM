<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="" method="POST">
    <label for="First name">First Name</label><br>
    <input type="text" name="firstName" value=""><br>
    <label for="Last name">Last name</label><br>
    <input type="text" name="lastName" value=""><br>
    <label for="Date of Birth">Date of Birth</label><br>
    <input type="date" name="DOB" value=""><br>
    <label for="Gender">Gender</label><br>
    <select name="gender" value="">
      <option value="none" selected>Gender</option>
      <option value="male">Male</option>
      <option value="female">Female</option>
      <option value="other">other</option>
    </select><br><br>
    <button type="submit" name="submit" value="Submit">Submit</button>
  </form><br>

  <?php
    echo '<p>Dummy ServerSide</p>';
    if (isset($_POST['submit'])){
      echo "First Name: ".$_POST['firstName'].'<br />';
      echo "Last Name: ".$_POST['lastName'].'<br />';
      echo "Date of Birth: ".$_POST['DOB'].'<br />';
      echo "Gender: ".$_POST['gender'].'<br />';
    }
?>

</body>
</html>

