<?php
$conn =
mysqli_connect("localhost","root","","library_db");
$name = $_POST['username'];
mysqli_query($conn, "INSERT INTO USERS(name) VALUES ('$name')");
echo "Thankyou $name for using our website! Click on the button to rent a Book!";
?>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button onclick="window.location.href='rentabook.html'">Rent a Book</button><br><br>
</body>
</html>