<?php require __DIR__ . "/envloader.php"; ?>
<?php require __DIR__ . "/includes/layout/head.php"; ?>
<body>
    <?php require __DIR__ . "/includes/layout/side-menu.php"; ?>
    <?php require __DIR__ . "/includes/layout/header.php"; ?>
        <div class="container">
            <h1 class="offices-header">Our Offices</h1>
            <div class="location-cards">
                <div class="card">
                    <img src="img/location-card/cambridge.jpg">
                    <div class="content">
                        <a class="header" href="#">Cambridge Office</a>
                        <p>
                            Unit 1.31,<br>
                            St John's Innovation Centre,<br>
                            Cowley Road, Milton,<br>
                            Cambridge,<br>
                            CB4 0WS
                        </p>
                        <a class="phone" href="#">01223 37 57 72</a>
                        <a class="btn-purple">View More</a>
                    </div>
                </div>
                <div class="card">
                    <img src="img/location-card/wymondham.jpg">
                    <div class="content">
                        <a class="header" href="#">Wymondham Office</a>
                        <p>
                            Unit 15,<br>
                            Penfold Drive,<br>
                            Gateway 11 Business Park,<br>
                            Wymondham, Norfolk,<br>
                            NR18 0WZ<br>
                        </p>
                        <a class="phone" href="#">01603 70 40 20</a>
                        <a class="btn-purple">View More</a>
                    </div>
                </div>
                <div class="card">
                    <img src="img/location-card/yarmouth-2.jpg">
                    <div class="content">
                        <a class="header" href="#">Great Yarmouth Office</a>
                        <p>
                            Suite F23,<br>
                            Beacon Innovation Centre,<br>
                            Beacon Park, Gorleston,<br>
                            Great Yarmouth, Norfolk,<br>
                            NR31 7RA<br>
                        </p>
                        <a class="phone" href="#">01493 60 32 04</a>
                        <a class="btn-purple">View More</a>
                    </div>
                </div>
            </div>
        </div>
        <?php require __DIR__ . "/includes/layout/footer.php"; ?>
    <?php require __DIR__ . "/includes/layout/cookies.php"; ?>
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/slick/slick.min.js"></script>
    <script src="js/app.js"></script>
</body>