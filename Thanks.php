<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank you</title>
    <link rel="stylesheet" href="Thanks.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">

</head>

<body>

    <div class="container">
        <header>
            <nav>
                <div class="logo">COWBOY.</div>
                <ul>
                    <li><a href="main.html">Home</a></li>
                    <li><a href="main.html">About Us</a></li>
                    <li><a href="Contact.html">Service & Support</a></li>
                    <li><a href="index.html">Logout</a></li>
                </ul>
            </nav>

        </header>
        <div class="main">
            <div class="icon">
                <i class="fa-sharp fa-regular fa-circle-check"></i>
            </div>


            <h1>Thank You</h1>
            <?php
             $name = $_GET['name'];
             $bicycle = $_GET['bicycle'];
             $bicycleLink = $_GET['bicycleLink'];
             ?>
            <p class="text">Dear <?php echo $name; ?>!,<br /> Thank you for registering a test drive
                request for The
                Cowboy
                3.<br /> Your request has been submitted successfully and our<br /> representative will contact you
                shortly.</p>
        </div>

        <div class="button-container">

            <a href="main.html"><button class="btn2">Back to Home</button></a>
            <a href="<?php echo $bicycleLink; ?>"><button class="btn3">Buy <?php echo $bicycle; ?></button></a>
        </div>



        <h1 class="watermark">COWBOY3</h1>
        <img class="image" src="bugcycke.png" alt="Bicycle">

        <footer>
            <nav>
                <ul>
                    <li><a href="#">Cowboy</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Privacy</a></li>
                </ul>
            </nav>
        </footer>


    </div>
    <!-- <script>
        const urlParams = new URLSearchParams(window.location.search);
        const name = urlParams.get('name');

        // Set the name in the HTML
        document.getElementById('name').innerText = name;
    </script> -->


</body>

</html>