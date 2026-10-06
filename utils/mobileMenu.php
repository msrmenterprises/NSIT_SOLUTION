<div class="inner">
                <div class="header-top">
                    <div class="logo">
                        <a href="index.php">
                            <img class="logo-light" src="assets/images/logo/nsit-logo.png" alt="NS IT Solutions">
                            <img class="logo-dark" src="assets/images/logo/nsit-logo.png" alt="NS IT Solutions">
                        </a>
                    </div>
                    <div class="close-menu">
                        <button class="close-button">
                            <i class="feather-x"></i>
                        </button>
                    </div>
                </div>
                <?php $isHomePage = basename($_SERVER['PHP_SELF']) === 'index.php'; ?>
                <ul class="mainmenu<?php echo $isHomePage ? ' onepagenav' : ''; ?>">
                <li><a class="onepage-external" href="index.php">Home</a></li>
                <li><a href="<?php echo $isHomePage ? '#about' : 'index.php#about'; ?>">About Us</a></li>
                <li><a href="<?php echo $isHomePage ? '#services' : 'index.php#services'; ?>">Services</a></li>
                <li><a class="onepage-external" href="contact.php">Contact</a></li>
                </ul>







            </div>