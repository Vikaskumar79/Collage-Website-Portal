<?php
$servername = "localhost:3303"; // Make sure the port is correct
$username = "root"; // Your database username
$password = "Vikas@961656"; // Your database password
$dbname = "clgadmin";// Your database name
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection Error -->" . $conn->connect_error);
} else {
    // echo"connection SuccessFull";
}


$insert = false;
// ====== Inserting Record in database ======
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $stdcourse = $_POST['stdcourse'];
    $message = $_POST['message'];

    $sql = "INSERT INTO `contact`(`fullname`, `phone`, `course`, `message`) VALUES 
    ('$name', '$phone', '$stdcourse', '$message')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $insert = true;
    }

}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us </title>
    <!-- <link rel="stylesheet" href="style2.css" /> -->

     <!-- Site Icons -->
     <link rel="shortcut icon" href="images/logo1.png" type="image/x-icon" />

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .contact-container {
            max-width: 600px;
            margin: 60px auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        .contact-container h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .contact-form label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .contact-form button {
            padding: 10px 20px;
            background: #0077cc;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .contact-form button:hover {
            background: #005fa3;
        }

        .contact-form select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-family: Arial, sans-serif;
            font-size: 16px;
            background-color: white;
            color: #333;
        }
    </style>

</head>

<body>
    <!-- Header -->
    <?php require 'component/_nav.php'; ?>
    <!-- End Header -->
    <div class="contact-container">
        <?php
        if ($insert) {
            echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
        <strong>Success!</strong> form sumbitted!!.
        <button role='button' type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>
        </button>
        </div>";
        }
        ?>
        <h2>Contact Us</h2>
        <form action="/iccfinal/contact.php" method="POST" class="contact-form">
            <label for="name">Your Name</label>
            <input type="text" id="name" name="name" required>

            <label for="phone">Your Phone</label>
            <input type="number" id="phone" name="phone" required>

            <label for="stdcourse">Select Course</label>
            <select required name="stdcourse" id="stdcourse">
                <option disabled selected>Select Course</option>
                <option>BCA</option>
                <option>B.Com</option>
                <option>BBA</option>
            </select>


            <label for="message">Message</label>
            <textarea id="message" name="message" rows="5" required></textarea>

            <button type="submit">Submit</button>
            <button type="button" onclick="document.location= '/iccfinal/index.php'"
                style="background: #6c757d;">Back</button>
        </form>
    </div>

    <!-- Start Footer -->

    <?php require 'footer.php'; ?>

    <!-- End Footer -->

</body>

</html>