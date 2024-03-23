<!DOCTYPE html>
<html>
<head>
    <title>Acceleration Calculator - Cool Web, Inc.</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>
        <img src="logo.png" alt="Cool Web, Inc. Logo">
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="velocity_form.php">Velocity Calculator</a></li>
                <!-- <li><a href="acceleration_form.php">Acceleration Calculator</a></li> -->
            </ul>
        </nav>
    </header>
  <?php 
  if(isset($_POST['velocity']) && isset($_POST['time'])) {
  $velocity = $_POST['velocity'];
  $time = $_POST['time'];
  }
  else{
    $velocity = 0.0; 
    $time = 1;
  }
  $acceleration = $velocity / $time;

  ?>

    <div class="content">
        <h1>Acceleration Calculator</h1>
        <form method="POST" action="acceleration_form.php">

            <label for="velocity">Velocity:</label>
            <input type="number" id="velocity" style='width:130px;'
              name="velocity" required>
            <label for="time">Time:</label>
            <input type="number" id="time" name="time" style='width:130px;' required>
            <br>

          <button type="submit">Calculate</button>
          </form>
      &nbsp
          <br>
             <?php 

            if(isset($_POST['velocity']) && isset($_POST['time'])) {
              ECHO('Acceleration: '); 
              echo $acceleration . ' m/s^2';
            }

            ?>
          <br>
              <br>



    </div>
</body>
</html>