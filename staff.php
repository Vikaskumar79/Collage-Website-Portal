<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/logo1.png" type="image/x-icon" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Staff</title>

    <style>
        body {
            background-color: #f8f9fa;
            /* Bootstrap bg-light */
        }

        .staff-card {
            background-color: #fff;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
            border-radius: 1rem;
            padding: 1.5rem;
            text-align: center;
            height: 100%;
            border: 0.5px solid black;
        }

        .staff-card img {
            width: 8rem;
            height: 8rem;
            border: 1px solid pink;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 1rem;
        }

        .staff-card h3 {
            font-size: 1.25rem;
            font-weight: 600;
            color: #333;
        }

        .staff-card p {
            font-size: 0.875rem;
            color: #666;
            margin-bottom: 0.25rem;
        }
    </style>
</head>

<body>

    <?php require 'component/_nav.php'; ?>

    <!-- Body Banner Start-->
    <div class="all-title-box">
        <div class="container text-center">
            <h1>Meet Our Faculty<span class="m_1"></span></h1>
        </div>
    </div>
    <!-- Banner End -->


    <!-- Staff Section -->
    <section class="py-5 px-3">
        <div class="container text-center">
            <!-- <h2 class="mb-5 fw-bold text-dark">Meet Our Staff</h2> -->
            <div class="row g-4">

                <!-- Staff Member 1
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="staff-card">
                        <img src="images/principal.jpg" alt="Dr. Vishwajit Singh" >
                        <h3>Dr. Vishwajit Singh</h3>
                        <p>Principal</p>
                        <p>ICC GIDA</p>
                    </div>
                </div> -->

                <!-- Staff Member 1 -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="staff-card">
                        <img src="images/manjula3.png" alt="Mrs. Manjula Yadav">
                        <h3>Mrs. Manjula Yadav</h3>
                        <p>Asst. Professor, HOD, BCA Dept.</p>
                        <p>ICC GIDA</p>
                    </div>
                </div>

                <!-- Staff Member 2 -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="staff-card">
                        <img src="images/garima3.png" alt="Ms. Garima">
                        <h3>Ms. Garima Singh</h3>
                        <p>Asst. Professor, BCA Dept.</p>
                        <p>ICC GIDA</p>
                    </div>
                </div>

                <!-- Staff Member 3 -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="staff-card">
                        <img src="images/shvam3.png" alt="Mr. Shivam Chaurasia">
                        <h3>Mr. Shivam Chaurasia</h3>
                        <p>Asst. Professor, BCA Dept.</p>
                        <p>ICC GIDA</p>
                    </div>
                </div>

                <!-- Staff Member 4 -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="staff-card">
                        <img src="images/10.png" alt="Mr. Animesh Sharma">
                        <h3>Mr. Animesh Sharma</h3>
                        <p>Asst. Professor, BCA Dept.</p>
                        <p>ICC GIDA</p>
                    </div>
                </div>

                <!-- Staff Member 4 -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="staff-card">
                        <img src="images/7.png" alt="Mr. Ashish Chaturvedi">
                        <h3>Mr. Ashish Chaturvedi </h3>
                        <p>Asst. Professor B.Com Dept.</p>
                        <p>ICC GIDA</p>
                    </div>
                </div>

                <!-- Staff Member 5 -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="staff-card">
                        <img src="images/9.png" alt="Dr. Shamim Alam">
                        <h3>Dr. Shamim Alam </h3>
                        <p>Asst. Professor BBA Dept.</p>
                        <p>ICC GIDA</p>
                    </div>
                </div>

                <!-- Staff Member 6 -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="staff-card">
                        <img src="images/8.png" alt="Dr. Ateeque Ahmad">
                        <h3>Dr. Ateeque Ahmad</h3>
                        <p>Asst. Professor B.Com Dept.</p>
                        <p>ICC GIDA</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <?php require 'footer.php';?>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>