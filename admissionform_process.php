<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "studentmanagement1";

$conn = new mysqli($hostname, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $stmt = $conn->prepare("INSERT INTO admissions (first_name, middle_name, surname, email, phone, house_address, nationality, state, lga, dob, blood_group, gender, class, fathers_name, mothers_name)
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    if ($stmt) {
        $stmt->bind_param("sssssssssssssss", $firstname, $middlename, $surname, $email, $phone, $address, $nationality, $state, $lga, $dob, $bloodgroup, $gender, $class, $fathersname, $mothersname);

        $firstname = $_POST["firstname"];
        $middlename = $_POST["middlename"];
        $surname = $_POST["surname"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $address = $_POST["address"];
        $nationality = $_POST["nationality"];
        $state = $_POST["state"];
        $lga = $_POST["lga"];
        $dob = $_POST["dob"];
        $bloodgroup = $_POST["bloodgroup"];
        $gender = $_POST["gender"];
        $class = $_POST["class"];
        $fathersname = $_POST["fathername"];
        $mothersname = $_POST["mothername"];

        if ($stmt->execute()) {
            $message = "Registration Successful!";

            // Redirect to admindashboard.php
        header("Location: admindashboard.php");
        } else {
            $message = "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        $message = "Error preparing statement: " . $conn->error;
    }

    $conn->close();
}
?>
