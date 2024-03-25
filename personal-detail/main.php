<?php
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $skills = isset($_POST['skills']) ? $_POST['skills'] : array();
    $address = $_POST['address'];

    echo "Name: " . $name . "<br>";
    echo "Phone Number: " . $phone . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Gender: " . $gender . "<br>";
    echo "Skills: ";
    foreach ($skills as $skill) {
        echo $skill . ", ";
    }
    echo "<br>";
    echo "Address: " . $address . "<br>";

?>
