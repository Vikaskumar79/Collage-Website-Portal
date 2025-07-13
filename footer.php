<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/logo1.png" type="image/x-icon" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="tag2.css"> -->
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <style>
        #tagul {
            display: flex;
            gap: 10px;
        }

        #tag2li {
            list-style: none;
            --color: #ff0050;
        }

        #tag2a {
            display: flex;
            width: 2rem;
            height: 2rem;
            background:rgb(254, 254, 255);
            border-radius: 20%;
            box-shadow:
                -2px -2px 3px #ffffff0d,
                3px 3px 3px #00000033;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            transition: all .2s ease-in-out;

        }

        .fa-brands {
            font-size: 1.4rem;
            color: #555;
        }

        #tag2a:hover .fa-brands {
            color: var(--color);
            text-shadow: 0 0 30px var(--color);
        }

        #tag2li:nth-child(2) {
            --color: #1c7dd5;
        }

        #tag2li:nth-child(3) {
            --color: #d43256;
        }

        #tag2li:nth-child(4) {
            --color: #4cd137;
        }

        #tag2li:nth-child(5) {
            --color: #1c7dd5;
        }
    </style>
    <title>Document</title>
</head>

<body>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <img class="icclogo1" src="images/logo1.png" alt="" />
                        </div>

                        <address>
                            <i class="fa-solid fa-location-dot"></i>
                            ICC Gida Branch
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4532.680567106654!2d83.27333102260114!3d26.74045089097801!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399147531fa3d585%3A0x1d97a0c95274981b!2sIslamia%20College%20of%20Commerce%2C%20Gida!5e0!3m2!1sen!2sin!4v1744311626913!5m2!1sen!2sin"
                                width="270" height="120" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </address>

                        <!-- <p>Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus bibendum. Sed fermentum 
                        est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis dis montes.</p>    -->
                        <!-- Start Icons Tag footer -->
                        <div class="footer-right">

                            <ul id="tagul">
                                <li id="tag2li"><a id="tag2a"
                                        href="https://www.instagram.com/islamiacollegeofcommercegida?igsh=dXRpdmgzOGhyOXc1"><i
                                            class="fa-brands fa-instagram"></i></a></li>
                                <li id="tag2li"><a id="tag2a" href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                <li id="tag2li"><a id="tag2a" href="#"><i class="fa-brands fa-youtube"></i></a></li>
                                <li id="tag2li"><a id="tag2a" href="https://wa.me/+918009902946"><i
                                            class="fa-brands fa-whatsapp"></i></a></li>
                                <li id="tag2li"><a id="tag2a" href="https://www.facebook.com/share/1HPEvMkjni/"><i
                                            class="fa-brands fa-facebook"></i></a></li>
                            </ul>
                        </div> <!-- End icons -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->

                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Quick Links</h3>
                        </div>
                        <ul class="footer-links">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="academic.php">Academic Overview</a></li>
                            <li><a href="courses.php">Programmes Offered</a></li>
                            <li><a href="gallery.php">Photo Gallery</a></li>
                            <li><a href="contact.php">Contact Us</a></li>
                            <li><a href="feedback.php">Feedback</a></li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->

                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>CONTACT US :</h3>
                        </div>

                        <ul class="footer-links">
                            <li><a href="mailto:#">iccgida@gmail.com</a></li>
                            <li><a href="#">iccgida.edu.in</a></li>
                            <li>BL-02, SECTOR-7, GIDA, GORAKHPUR</li>
                            <li>+91 8009902946, +91 8417000192</li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->

            </div><!-- end row -->
        </div><!-- end container -->
    </footer><!-- end footer -->
</body>

</html>