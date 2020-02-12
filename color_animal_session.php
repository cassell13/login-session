<?php
//Notice that session variables are not passed individually to each new page, instead they are retrieved from the session we open at the beginning of each page (session_start()).
session_start();
?>
<!DOCTYPE html>
<html>
<body>
	<h2>Example 1 Session variables in a new window: </h2>

<?php
// Echo session variables that were set on previous page
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".";

$home_url = 'http://' . $_SERVER["HTTP_HOST"] . dirname($_SERVER["PHP_SELF"]) . '/example1.php';

if(isset($_POST["destroy"])) { 
    // Delete the session vars by clearing the $_SESSION array
    $_SESSION = array();
    // Destroy the session
    session_destroy();

    // Redirect to the home page
  	header('Location: ' . $home_url); 
} 

if(isset($_POST["back"])) { 
    // Redirect them to the login page
    header('Location: ' . $home_url);  
} 
?>

<form method="post"> 
    <input type="submit" name="destroy"
            value="Destroy session"/> 
      
    <input type="submit" name="back"
            value="Back"/> 
</form> 

</body>
</html>
