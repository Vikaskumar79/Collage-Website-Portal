<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!-- Site Icons -->
      <link rel="shortcut icon" href="images/logo1.png" type="image/x-icon" />
  <title>Computer Science Department</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f9f9f9;
    }

    .cs-department {
      max-width: 1000px;
      margin: 50px auto;
      background: #fff;
      border-radius: 12px;
      padding: 30px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    }

    .cs-department h2 {
      font-size: 32px;
      color: #2c3e50;
      margin-bottom: 20px;
      border-left: 5px solid #3498db;
      padding-left: 15px;
    }

    .cs-department p {
      line-height: 1.8;
      font-size: 17px;
      color: #444;
      margin-bottom: 20px;
    }

    .cs-department ul {
      list-style-type: disc;
      padding-left: 25px;
      color: #2c3e50;
    }

    .cs-department ul li {
      margin-bottom: 10px;
    }
  </style>
</head>

<body>

  <?php require 'component/_nav.php'; ?>
  <section class="cs-department">
    <h2>Department of Computer Science</h2>
    <p>
      The Department of Computer Science is dedicated to nurturing innovative thinkers and skilled professionals in the
      ever-evolving field of information technology. Our mission is to equip students with strong theoretical
      foundations and hands-on experience in software development, data science, networking, cybersecurity, and
      artificial intelligence.
    </p>
    <p>
      Our curriculum is regularly updated to match industry standards and emerging technologies. We emphasize both
      academic excellence and practical skills through project-based learning, workshops, seminars, and industry
      interaction.
    </p>
    <p>
      With a team of qualified faculty, modern laboratories, and access to cutting-edge tools and resources, the
      department aims to foster a passion for computing and prepare students to contribute meaningfully to society and
      the tech industry.
    </p>

    <h3>Key Highlights:</h3>
    <ul>
      <li>Well-equipped computer labs with high-speed internet</li>
      <li>Regular seminars, coding competitions, and hackathons</li>
      <li>Industry collaboration and internship opportunities</li>
      <li>Focus on emerging technologies like AI, ML, and Cloud Computing</li>
      <li>Experienced and dedicated faculty members</li>
    </ul>
  </section>

  <?php require 'footer.php';?>

</body>

</html>