<?php

session_start();
$email = $_SESSION["email"];
$query = $_POST['query'];
$servername = "localhost";
$username = "root";
$password = '';
$dbname = "user_info";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO contact (query, email)
VALUES ('$query','$email')";

if ($conn->query($sql) === FALSE) {
  echo "Error: " . $sql . "<br>" . $conn->error;
} 

$conn->close();


?>

<!DOCTYPE html>
<style>
.fon{
    font-size: 40px;
    
}
.btn {
  box-sizing: border-box;
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;

  border: 2px solid #e74c3c;
  border-radius: 0.6em;
  color: #e74c3c;
  cursor: pointer;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-align-self: center;
      -ms-flex-item-align: center;
          align-self: center;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1;
  margin: 20px;
  padding: 1.2em 2.8em;
  text-decoration: none;

  text-transform: uppercase;

  font-weight: 700;
}
.btn:hover, .btn:focus {
  color: black;
  outline: 0;
}
.third {
  border-color: DarkSlateGrey;
  color: #fff;
  box-shadow: 0 0 40px 40px #3498db inset, 0 0 0 0 #3498db;
  -webkit-transition: all 150ms ease-in-out;
  transition: all 150ms ease-in-out;
}
.third:hover {
  box-shadow: 0 0 10px 0 #3498db inset, 0 0 10px 4px #3498db;
}
</style>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
    <title>Conatct Info</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<body>
    <?php require 'partials/navigation_bar.php'?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
<body>
    
    <div class="contact-box">
        <form action=<?php echo $_SERVER['PHP_SELF']; ?> method="post">

       
        <input type="text" name="query" class="input-filed textarea-filed"  placeholder="Query">
        <button type="button" class="btn third">send message</button>
        </form>
        <form action="welcome.php">
    <button type="button" class="btn third">Go to Plants</button>
</form>
    </div>

    
    
  
        
</body>
</html> 

