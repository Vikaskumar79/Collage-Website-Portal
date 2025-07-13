<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Principal's Desk - Islamia College of Commerce</title>

  <link rel="stylesheet" href="style.css" />
  <link rel="shortcut icon" href="images/logo1.png" type="image/x-icon" />

  <style>
    body {
      background-color: #ffffff;
      color: #2d2d2d;
      font-family: sans-serif;
      line-height: 1.6;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 3rem 1.5rem;
    }

    .flex-container {
      display: flex;
      flex-direction: column-reverse;
      align-items: center;
      gap: 2.5rem;
    }

    @media (min-width: 768px) {
      .flex-container {
        flex-direction: row-reverse;
        align-items: flex-start;
      }
    }

    .principal-photo {
      width: 100%;
      text-align: center;
    }

    @media (min-width: 768px) {
      .principal-photo {
        width: 50%;
        text-align: right;
      }
    }

    .principal-photo img {
      border-radius: 48%;
      height: 30rem;
      max-width: 100%;
    }

    .principal-photo h3 {
      font-size: 1.25rem;
      font-weight: 600;
      margin-top: 1rem;
    }

    .principal-photo p {
      font-size: 0.875rem;
      font-weight: 600;
    }

    .message {
      width: 100%;
    }

    @media (min-width: 768px) {
      .message {
        width: 50%;
      }
    }

    .message h2 {
      font-size: 2rem;
      font-weight: 700;
      margin-bottom: 1rem;
    }

    .message p {
      color: #4b5563;
      margin-bottom: 1rem;
    }
  </style>
</head>
<body>
  <?php require 'component/_nav.php';?>

  <!-- Manager's Desk -->
<section class="container">
  <div class="flex-container">

    <!-- Right Side: Manager's Photo -->
    <div class="principal-photo">
      <img src="images/director.jpeg" alt="Soheb Ahmed" class="img-principal">
      <h3>Mr. Shoeb Ahmed</h3>
      <p>DIRECTOR - Islamia College of Commerce</p>
    </div>

    <!-- Left Side: Message -->
    <div class="message">
      <h2>Manager's Message</h2>
      <p>
        It gives me immense pleasure to see the vision of empowering youth through quality education taking shape at Islamia College of Commerce, GIDA. With a focus on innovation, inclusiveness, and integrity, our institution is committed to creating future leaders who not only excel academically but also contribute meaningfully to society.
      </p>
      <p>
        Education today must cater to the dynamic needs of the modern world. We emphasize a holistic development approach—combining academic excellence with personality development, digital skills, ethical values, and community service. I strongly believe that when students are empowered with the right tools and environment, they can bring transformative change to society.
        <br><br>
        Our aim is to inspire young minds, ignite their curiosity, and encourage them to pursue excellence in all areas of life. Together, let us strive to build a generation of responsible and visionary citizens who will lead India toward a brighter future.
      </p>
    </div>
  </div>
</section>


  <?php require 'footer.php';?>

</body>
</html>
