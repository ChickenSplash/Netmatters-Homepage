<?php require __DIR__ . "/envloader.php"; ?>
<?php require __DIR__ . "/includes/layout/head.php"; ?>
<body>
    <?php require __DIR__ . "/includes/layout/side-menu.php"; ?>
    <div class="main-content">
        <?php require __DIR__ . "/includes/layout/header.php"; ?>
        <div class="current-page">
            <div class="container">
                <p><a href="/">Home</a> / Our Offices</p>
            </div>
        </div>
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
            <div class="contact">
                <div class="info">
                    <p class="important">Email us on:</p>
                    <a href="#">sales@netmatters.com</a>
                    <p class="important">Speak to Sales on:</p>
                    <a href="#">01603 515007</a>
                    <p class="important">Business hours:</p>
                    <p class="important">Monday - Friday 07:00 - 18:00</p>
                    <p class="important" id="dropdown-link">Out of Hours IT Support</p>
                    <div class="dropdown-box">
                        <p class="light">Netmatters IT are offering an Out of Hours service for Emergency and Critical tasks.</p>
                        <p class="important">Monday - Friday 18:00 - 22:00 Saturday 08:00 - 16:00<br>
                        Sunday 10:00 - 18:00</p>
                        <p class="light">To log a critical task, you will need to call our main line number and select Option 2 to leave an Out of Hours  voicemail. A technician will contact you on the number provided within 45 minutes of your call.</p>
                    </div>
                </div>
                <form onsubmit="return validateForm()">
                    <div class="grid-container">
                        <div class="input">
                            <label for="name" class="required">Your Name</label>
                            <input id="name">
                        </div>
                        <div class="input">
                            <label for="company">Company Name</label>
                            <input id="company">
                        </div>
                        <div class="input">
                            <label for="email" class="required">Your Email</label>
                            <input id="email">
                        </div>
                        <div class="input">
                            <label for="phone" class="required">Your Telephone Number</label>
                            <input id="phone">
                        </div>
                    </div>
                    <div class="input">
                        <label for="message" class="required">Message</label>
                        <textarea id="message"></textarea>
                    </div>
                    <div class="checkbox">
                        <div class="box">
                            <input type="checkbox" id="marketing-info">
                        </div>
                        <label for="marketing-info">Please tick this box if you wish to receive marketing information from us. Please see our <a href="#">Privacy Policy</a> for more information on how we keep your data safe.</label>              
                    </div>
                    <div class="action">
                        <button type="submit" class="btn-general">Send Enquiry</button>
                        <p class="required">Fields Required</p>
                    </div>
                </form>
            </div>
        </div>
        <?php require __DIR__ . "/includes/layout/footer.php"; ?>
    </div>
    <?php require __DIR__ . "/includes/layout/cookies.php"; ?>
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/slick/slick.min.js"></script>
    <script src="js/app.js"></script>
</body>