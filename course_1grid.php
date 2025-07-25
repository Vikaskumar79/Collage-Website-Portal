<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/logo1.png" type="image/x-icon" />
    
    <title>Bachelor of Computer Application (BCA)</title>
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

        .cs-department h3 {
            font-size: 24px;
            color: #c1d8ee;
            margin-top: 25px;
            margin-bottom: 15px;
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

        .course-details {
            margin-top: 30px;
            padding: 20px;
            border: 1px solid #f9f8f8;
            border-radius: 8px;
            background-color: #ededed;
        }

        .course-details h4 {
            font-size: 20px;
            color: #3498db;
            margin-bottom: 10px;
        }

        .course-details ul {
            list-style-type: square;
            padding-left: 25px;
            color: #555;
        }

        .course-details ul li {
            margin-bottom: 8px;
        }
    </style>
</head>

<body>
    <?php require 'component/_nav.php'; ?>

    <section class="cs-department">

        <div class="course-details">
            <h4>Bachelor of Computer Application (BCA)</h4>
            <p>
                The Bachelor of Computer Application (BCA) is a three-year undergraduate degree program designed to
                provide students with a comprehensive understanding of computer applications and information technology.
                This program focuses on developing practical skills in software development, database management, web
                technologies, and computer networking.
            </p>
            <p>
                The curriculum is structured to provide a strong foundation in computer science principles while
                emphasizing application-oriented learning. Students gain hands-on experience through lab sessions,
                projects, and assignments.
            </p>

            <h5>Program Objectives:</h5>
            <ul>
                <li>To provide a strong foundation in the fundamental concepts of computer science and information
                    technology.</li>
                <li>To develop practical skills in software development using various programming languages.</li>
                <li>To impart knowledge of database management systems and web development technologies.</li>
                <li>To familiarize students with the basics of computer networks and cybersecurity.</li>
                <li>To enhance problem-solving and analytical skills necessary for the IT industry.</li>
                <li>To foster professional ethics and teamwork abilities.</li>
            </ul>

            <h5>Career Opportunities:</h5>
            <ul>
                <li>Software Developer</li>
                <li>Web Developer</li>
                <li>Database Administrator</li>
                <li>Network Administrator</li>
                <li>IT Support Specialist</li>
                <li>System Analyst</li>
                <li>Quality Assurance Tester</li>
                <li>Technical Writer</li>
            </ul>
        </div>
    </section>
    <?php require 'footer.php'; ?>

</body>

</html>