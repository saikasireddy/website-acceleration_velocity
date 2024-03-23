<!DOCTYPE html>
<html>
<head>
    <title>Velocity Calculator - Cool Web, Inc.</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>
        <img src="logo.png" alt="Cool Web, Inc. Logo">
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <!-- <li><a href="velocity_form.php">Velocity Calculator</a></li> -->
                <li><a href="acceleration_form.php">Acceleration Calculator</a></li>
            </ul>
        </nav>
    </header>

   <?php 
  if(isset($_GET["speed"]))
  {
    $speed = $_GET["speed"]; 
  }
  else
  {
    $speed = 0.0; 
  }

  if(isset($_GET["time"]))
  {
    $time = $_GET["time"]; 
  }
  else
  {
    $time = 1; 
  }

  $result = $speed / $time; 
  ?>

    <div class="content">
        <h1>Velocity Calculator</h1>
        <form method="GET" action="velocity_form.php">
            <label for="speed">Speed:</label>
            <input type="number" id="speed" name="speed" style='width:130px;' required>
            <label for="time">Time:</label>
            <input type="number" id="time" name="time" style='width:130px;' required><br>

           <button type="submit">Calculate</button>
        </form>
     <br>
      &nbsp
           <?php 

          if(isset($_GET['speed']) && isset($_GET['time'])) {
            echo('Velocity: ' . $result . ' m/s');}
        
      ?>

          <br>
          <br>


    </div>
</body>
</html>