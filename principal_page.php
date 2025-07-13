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

  <!-- Principal's Desk -->
  <section class="container">
    <div class="flex-container">

      <!-- Right Side: Principal's Photo -->
      <div class="principal-photo">
        <img src="images/principal.JPG" alt="Dr. Vishwajit Singh" class="img-principal">
        <h3>Dr. Vishwajit Singh</h3>
        <p>PRINCIPAL ICC GIDA Campus</p>
      </div>

      <!-- Left Side: Message -->
      <div class="message">
        <h2>Principal's Message</h2>
        <p>
          The entire intellectual community of the world has woken up to the reality that India is a treasure-house of talent and intelligence. The youth of today are taking India to unparalleled heights of prosperity. The only raw material essential to this great turnaround is EDUCATION, because knowledge is power. Keeping in mind, I assure the students joining ICC Campus, that they will be given the best education to enable them to learn and lead the future with confidence as responsible citizens of the country.
        </p>
        <p>
          Islamia College of Commerce, Gida, Gorakhpur, has been renowned for its academic excellence and quality in the fields of commerce and science for many years, consistently spreading its reputation through exceptional services. In line with this, considering the importance of technology and commerce, Islamia College of Commerce, Gida, was established last year with the primary objective of motivating local youth in higher education and fostering a competitive mindset.
          <br><br>
          The college has already started offering courses in (link unavailable), BCA, and BBA. In this changing environment, the college is moving towards the all-round development of students by implementing the new education policy.
          <br><br>
          Due to being academically backward, unemployment, illiteracy, and social evils are prevalent here, which we aim to eradicate by motivating youth to pursue education and training, and it is also a unique effort to accept social responsibility. To achieve this, students are encouraged to participate in sports, literary, and cultural programs, as well as various competitions, along with their academic pursuits.
        </p>
      </div>
    </div>
  </section>

  <?php require 'footer.php';?>

</body>
</html>
