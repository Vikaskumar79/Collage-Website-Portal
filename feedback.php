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
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO `feedback`(`email`, `message`) VALUES ('$email', '$message')";
    $result = mysqli_query($conn, $sql);
    if($result){
        $insert = true;
    }

}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Site Icon -->
    <link rel="shortcut icon" href="images/logo1.png" type="image/x-icon" />

    <!-- Title -->
    <title>Feedback - Islamia College of Commerce</title>

    <!-- Custom CSS -->
    <style>
        body {
            background-color: #ffe5e5;
            color: #333;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        section.feedback-section {
            max-width: 700px;
            margin: 60px auto;
            padding: 40px 30px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        section h2 {
            font-size: 28px;
            color: #444;
            text-align: center;
            margin-bottom: 10px;
        }

        section p {
            text-align: center;
            color: #666;
            margin-bottom: 25px;
        }

        form label {
            display: block;
            font-weight: bold;
            margin-bottom: 8px;
            color: #555;
        }

        form input[type="email"],
        form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            font-size: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            resize: vertical;
        }

        form input[type="email"]:focus,
        form textarea:focus {
            border-color: #00aaff;
            outline: none;
            box-shadow: 0 0 5px rgba(0, 170, 255, 0.5);
        }

        .btn-submit {
            background-color: #00bcd4;
            color: white;
            font-weight: bold;
            padding: 10px 25px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .btn-submit:hover {
            background-color: #0097a7;
        }

        .text-center {
            text-align: center;
        }
    </style>
</head>

<body>

    <!-- Navigation -->
    <?php require 'component/_nav.php'; ?>

    <!-- Feedback Section -->
    <section class="feedback-section">
        <h2>We Value Your Feedback</h2>
        <p>Help us improve by sharing your thoughts.</p>

        <?php
        if ($insert) {
            echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
        <strong>Thank You!</strong> response sumbitted!!.
        <button role='button' type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>
        </button>
        </div>";
        }
        ?>

        <form action="/iccfinal/feedback.php" method="POST">
            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div>
                <label for="message">Your Feedback:</label>
                <textarea id="message" name="message" rows="4" required></textarea>
            </div>

            <div class="text-center">
                <button type="submit" class="btn-submit">Submit Feedback</button>
            </div>
        </form>
    </section>

    <!-- Footer -->
    <?php require 'footer.php'; ?>

</body>

</html>