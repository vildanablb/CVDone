<?php 
$conn = mysqli_connect('localhost:3308', 'root', '');
if (!$conn){
    die("Database Connection Failed" . mysqli_error($conn));
}
$select_db = mysqli_select_db($conn, 'resume');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($conn));
}   

if((isset($_POST['name'])) && (isset($_POST['email']))) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];


    $sql="INSERT INTO datas (name, email, message) VALUES ('$name','$email', '$message');";
    $result = mysqli_query($conn, $sql);

    if($result) {
        echo "Thank you for contacting us. You will get a response as soon as possible. Have a nice day!";
    }
    else {
        echo "Error. Please try again.";
    }    
}

?>