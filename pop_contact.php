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
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Admission Enquiry Form</title>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
    }

    .popup-overlay {
      position: fixed;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background: rgba(255, 255, 255, 0.2);
      backdrop-filter: blur(3px);
      display: flex;
      align-items: center;
      justify-content: center;
      z-index: 1000;
    }

    .popup {
      background: #dbeafe;
      border-radius: 10px;
      padding: 20px;
      width: 90%;
      max-width: 800px;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      position: relative;
    }

    .popup .left,
    .popup .right {
      width: 100%;
    }

    @media(min-width: 768px) {
      .popup .left,
      .popup .right {
        width: 48%;
      }
    }

    .popup .close {
      position: absolute;
      top: 10px;
      right: 15px;
      font-size: 22px;
      color: red;
      cursor: pointer;
    }

    .header {
      text-align: center;
      color: #800080;
    }

    .top-bar {
      font-size: 14px;
      text-align: center;
      color: #800080;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .form-group {
      margin-bottom: 15px;
    }

    input, select, textarea {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .submit-btn {
      background-color: #800080;
      color: #fff;
      border: none;
      padding: 10px 25px;
      border-radius: 25px;
      cursor: pointer;
    }

    .submit-btn:hover {
      background-color: #5a005a;
    }
  </style>
</head>
<body>

<!-- Enquiry Popup -->
<div class="popup-overlay" id="enquiryPopup">
  <div class="popup">
    <span class="close" onclick="closePopup()"><i class="fa-regular fa-circle-xmark"></i></span>
    <div class="left">
      <div class="top-bar">📞 Admission Help Line : +91 8009902946</div>
      <h2 class="header">ICC GIDA</h2>
      <h3 class="header">Admission Enquiry Form</h3>
      <form action="/iccfinal/index.php" method="post">
        <div class="form-group">
          <input type="text" placeholder="Your Name" id="name" name="name" required>
        </div>
        <div class="form-group">
          <input type="text" placeholder="Contact No" id="phone" name="phone" required>
        </div>
        <div class="form-group">
          <select required name="stdcourse" id="stdcourse">
            <option disabled selected>--Select Courses--</option>
            <option>BCA</option>
            <option>B.Com</option>
            <option>BBA</option>
          </select>
        </div>
        <div class="form-group">
          <textarea rows="4" placeholder="Message" id="message" name="message"></textarea>
        </div>
        <button class="submit-btn">Submit</button>
      </form>
    </div>
    <div class="right">
      <img src="images/icc_contact.png" alt="Contact Banner" style="width: 100%; border-radius: 10px;">
    </div>
  </div>
</div>

<script>
  function closePopup() {
    document.getElementById("enquiryPopup").style.display = "none";
  }

  // Optional: Automatically show popup after delay (e.g., 1 second)
  window.onload = function() {
    document.getElementById("enquiryPopup").style.display = "flex";
  };
</script>

</body>
</html>
