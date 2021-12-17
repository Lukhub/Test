<?php
$servername = "localhost";
$database = "Company";
$username = "root";
$password = "123456";

//Connecting to the mysql database
$conn = mysqli_connect($servername,$username,$password,$database);

// Check Connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//Inserting New User to the database
if($stmt = $conn->prepare("INSERT INTO User(username, Password) VALUES (?, ?)")){
    //Hashing the password for security
    $pass = password_hash( $_POST["password"], 2);
    $stmt.bind_param($_POST["username"],$pass);
    //Executing the sql to the database
    $stmt.execute();
    $stmt.close();
    echo "successfull";
}


//Closing connection from the mysql database
mysqli_close($conn);


?>

