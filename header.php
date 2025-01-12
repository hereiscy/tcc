<body class="background">
    <nav>
        <div class="logo">
        <?php
            if(isset($_SESSION['id']) && isset($_SESSION['roles'])) {
                if ($_SESSION['roles'] == 'Cust') {
                    echo '<a href="Custmain.php"><img src="Images/logo.png" alt=""></a>';
                } elseif ($_SESSION['roles'] == 'Admin') {
                    echo '<a href="Adminmain.php"><img src="Images/logo.png" alt=""></a>';
                } else {
                    echo '<a href="Mainpage.php"><img src="Images/logo.png" alt=""></a>';
                }
            } else {
                echo '<a href="Mainpage.php"><img src="Images/logo.png" alt=""></a>';
            }
            ?>
        </div>
        <div class="icon">
            <a href="login.php"><img src="Images/loginicon.png" alt=""></a>
        </div>  
        <div class="iconcart">
            <?php
            if(isset($_SESSION['id']) && isset($_SESSION['roles'])) {
                if ($_SESSION['roles'] == 'Cust' || $_SESSION['roles'] == 'Admin') {
                    echo '<a href="cart.php"><img src="Images/cart.png" alt=""></a>';
                } else {
                    echo '<a href="#" onclick="promptLogin()"><img src="Images/cart.png" alt=""></a>';
                }
            } else {
                echo '<a href="#" onclick="promptLogin()"><img src="Images/cart.png" alt=""></a>';
            }
        ?>
        </div>
        <script>
            function promptLogin() {
                var confirmLogin = confirm("Please login first. Do you want to proceed to login?");
                if (confirmLogin) {
                    window.location.href = "login.php";
                }
            }
        </script>
        <div class="iconquestion">
            <a href="faq.php"><img src="Images/questionmark.png" alt=""></a>
        </div>  
        <ul>
            <li>
                 Cuisine
                <ul>
                    <li><a href="menu.php">Menu</a></li>
                    <li><a href="recommend.php">Offer & Recommendation</a></li>
                </ul>
            </li>
            <li>
                About
                <ul>
                    <li><a href="aboutus.php">About Us</a></li>
                    <li><a href="ourchef.php">Our Chefs</a></li>
                </ul>
            </li>
            <?php
                if(isset($_SESSION['roles']) && $_SESSION['roles'] == 'Admin') {
                    echo '<li>
                            Admin
                            <ul>
                                <li><a href="adminlist.php">Manage User</a></li>
                            </ul>
                        </li>';
                }
            ?>
        </ul>
</nav>