<?php
  // Start the session
  session_start();

  if (!empty($_POST)) {
    //set the values to what was in the form
    
    if (isset($_POST["color"])) {
      $_SESSION["favcolor"] = $_POST["color"];
    } 
    

    if (isset($_POST["animal"])) {
      $_SESSION["favanimal"] = $_POST["animal"];
    }

  }
  else{
    //user didn't fill the form, using default
    $_SESSION["favcolor"] = "blue";
    $_SESSION["favanimal"] = "giraffe";
  }
?>

<!DOCTYPE html>
<html>
<body>
  <h2>Demo sessions 1: </h2>
  <form method="post">
    <label for="color">Favorite color:</label>
    <input type="text" name="color" /><br />
    <label for="animal">Favorite animal:</label>
    <input type="text" name="animal" /><br /><br/>

    <input type="submit" value="Submit" name="submit" /><br/><br/>
    <input type="submit" value="What was recorded?" formaction="color_animal_session.php"/>
  </form>
</body>
</html>