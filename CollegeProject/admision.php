<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $dob = htmlspecialchars($_POST['dob']);
    $address = htmlspecialchars($_POST['address']);
    $gender = htmlspecialchars($_POST['gender']);
    $course = htmlspecialchars($_POST['course']);

    // Here you would typically connect to a database and insert the form data
    // For example:
    // $conn = new mysqli($servername, $username, $password, $dbname);
    // if ($conn->connect_error) {
    //     die("Connection failed: " . $conn->connect_error);
    // }
    // $sql = "INSERT INTO admissions (name, email, phone, dob, address, gender, course)
    // VALUES ('$name', '$email', '$phone', '$dob', '$address', '$gender', '$course')";
    // if ($conn->query($sql) === TRUE) {
    //     echo "New record created successfully";
    // } else {
    //     echo "Error: " . $sql . "<br>" . $conn->error;
    // }
    // $conn->close();

    // For now, we'll just echo the data
    echo "Form submitted successfully.<br>";
    echo "Name: $name<br>";
    echo "Email: $email<br>";
    echo "Phone: $phone<br>";
    echo "Date of Birth: $dob<br>";
    echo "Address: $address<br>";
    echo "Gender: $gender<br>";
    echo "Preferred Course: $course<br>";
} else {
    echo "Invalid request method.";
}
?>
