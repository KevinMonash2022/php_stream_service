<?php require "../includes/header.php"; ?>
<?php require "../config/config.php"; ?>
<?php
if(isset($_POST['submit'])){
         
    if(empty($_POST['email']) OR empty($_POST['password'])) {
        echo "<script>alert('one or more inputs are empty')</script>";
    } else {
        //get the data and do the query that the email
        $email = $_POST['email'];
        $password = $_POST['password'];
        $login = $conn->query("SELECT * FROM users WHERE email='$email'");        
        //fethc the data
        $fetch = $login->fetch(PDO::FETCH_ASSOC);
        //use the rowcount
         if($login->rowcount() > 0){
            if(password_verify($password, $fetch['password'])){
                //star sessions
                // header("location: ".APPURL."");
                echo "<script>alert('LOGGED IN')</script>";
            } else {
                echo "<script>alert('email or password is wrong')</script>";

            }
         } else{
             echo "<script>alert('email or password is wrong')</script>";
         }
        //check for the password               
    }
}
?>

    <!-- Normal Breadcrumb Begin -->
    <section class="normal-breadcrumb set-bg" data-setbg="<?php echo APPURL; ?>/img/normal-breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="normal__breadcrumb__text">
                        <h2>Login</h2>
                        <p>Welcome to the official Anime blog.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Normal Breadcrumb End -->

    <!-- Login Section Begin -->
    <section class="login spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="login__form">
                        <h3>Login</h3>
                        <form action="login.php" method="POST">
                            <div class="input__item">
                                <input name="email" type="text" placeholder="Email address">
                                <span class="icon_mail"></span>
                            </div>
                            <div class="input__item">
                                <input name="password" type="password" placeholder="Password">
                                <span class="icon_lock"></span>
                            </div>
                            <button name="submit" type="submit" class="site-btn">Login Now</button>
                        </form>
                        <!-- <a href="#" class="forget_pass">Forgot Your Password?</a> -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login__register">
                        <h3>Dont’t Have An Account?</h3>
                        <a href="signup.php" class="primary-btn">Register Now</a>
                    </div>
                </div>
            </div>
          
        </div>
    </section>
    <!-- Login Section End -->

<?php require "../includes/footer.php"; ?>

      <!-- Search model Begin -->
      <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch"><i class="icon_close"></i></div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/player.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>


</body>

</html>