<?php $isHomePage = basename($_SERVER['PHP_SELF']) === 'index.php'; ?>
<nav class="mainmenu-nav d-none d-lg-block<?php echo $isHomePage ? ' onepagenav' : ''; ?>">
                                <ul class="mainmenu">
                                    <li class="position-relative"><a class="onepage-external" href="index.php">Home</a>
                                    </li>
                                    <li><a href="<?php echo $isHomePage ? '#about' : 'index.php#about'; ?>">About</a></li>
                                    <li><a href="<?php echo $isHomePage ? '#services' : 'index.php#services'; ?>">Our Services</a>
                                    </li>
                                    <li><a class="onepage-external" href="contact.php">Contact</a></li>

                                </ul>







                            </nav>