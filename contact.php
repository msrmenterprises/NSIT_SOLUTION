<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-style-mode" content="1">
    <title>Contact NS IT Solutions</title>
    <link rel="icon" type="image/png" href="assets/images/logo/nsit-logo.png">
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins/animation.css">
    <link rel="stylesheet" href="assets/css/plugins/feature.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        .page-wrapper > .header-top-bar { color: #fff; background: #0f0f11; border-bottom-color: #303034; }
        .page-wrapper > .header-top-bar p,
        .page-wrapper > .header-top-bar p a { color: #fff; }
        body .nsit-header.header-default { min-height: 96px; background: #fff !important; border-bottom: 1px solid #e5e7e9; }
        body .nsit-header.header-default.sticky { background: #fff !important; }
        .nsit-header .logo a { height: 96px; line-height: normal; }
        .nsit-header .logo a img { width: 100%; max-width: 238px; max-height: 88px; object-fit: contain; }
        .nsit-header .mainmenu-nav .mainmenu > li > a { color: #17191d !important; }
        .nsit-header .mainmenu-nav .mainmenu > li > a:hover { color: #d9232e !important; }
        .nsit-header .hamberger-button { color: #17191d; background: #f1f2f3; }
        .theme-mode-toggle { width: 40px; height: 40px; display: inline-flex; align-items: center; justify-content: center; margin-left: 12px; padding: 0; border: 1px solid #d9dcdf; border-radius: 50%; color: #17191d; background: #fff; cursor: pointer; }
        .theme-mode-toggle:hover, .theme-mode-toggle:focus-visible { color: #d9232e; border-color: #d9232e; }
        .contact-panel { max-width: 760px; margin: 0 auto; }
        .contact-panel .form-group { margin-bottom: 20px; }
        .contact-panel input, .contact-panel textarea { width: 100%; }
        @media only screen and (max-width: 767px) {
            body .nsit-header.header-default { min-height: 78px; }
            .nsit-header .logo a { height: 78px; }
            .nsit-header .logo a img { max-height: 70px; }
        }
    </style>
</head>
<body>
    <main class="page-wrapper">
        <?php include('utils/notification.php') ?>
        <header class="rainbow-header header-default header-sticky nsit-header">
            <div class="container position-relative">
                <div class="row align-items-center row--0">
                    <div class="col-lg-3 col-md-6 col-4">
                        <div class="logo">
                            <a href="index.php"><img class="logo-light" src="assets/images/logo/nsit-logo.png" alt="NS IT Solutions"><img class="logo-dark" src="assets/images/logo/nsit-logo.png" alt="NS IT Solutions"></a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-6 col-8 position-static">
                        <div class="header-right">
                            <?php include('utils/menu.php') ?>
                            <button type="button" class="theme-mode-toggle" data-theme-toggle aria-label="Switch to light mode" title="Switch to light mode"><i class="feather-sun" aria-hidden="true"></i></button>
                            <div class="mobile-menu-bar ml--5 d-block d-lg-none">
                                <div class="hamberger"><button class="hamberger-button" aria-label="Open menu"><i class="feather-menu"></i></button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="popup-mobile-menu"><?php include('utils/mobileMenu.php') ?></div>

        <section class="rainbow-contact-area rainbow-section-gap">
            <div class="container">
                <div class="section-title text-center mb--40">
                    <h4 class="subtitle"><span class="theme-gradient">Contact NS IT Solutions</span></h4>
                    <h1 class="title w-600 mb--15">Tell us what you need</h1>
                    <p class="description b1">Share your requirements and our team will get in touch.</p>
                </div>
                <div class="contact-panel rbt-border radius p-4 p-md-5">
                    <form id="contact-form" novalidate>
                        <div class="form-group">
                            <label for="contact-name">Name</label>
                            <input class="form-control" type="text" name="contact-name" id="contact-name" autocomplete="name" required>
                        </div>
                        <div class="form-group">
                            <label for="contact-phone">Phone</label>
                            <input class="form-control" type="tel" name="contact-phone" id="contact-phone" autocomplete="tel" required>
                        </div>
                        <div class="form-group">
                            <label for="contact-email">Email</label>
                            <input class="form-control" type="email" name="contact-email" id="contact-email" autocomplete="email" required>
                        </div>
                        <div class="form-group">
                            <label for="contact-message">How can we help?</label>
                            <textarea class="form-control" name="contact-message" id="contact-message" rows="5" required></textarea>
                        </div>
                        <input type="text" name="website" class="d-none" tabindex="-1" autocomplete="off" aria-hidden="true">
                        <button class="btn-default btn-large round" type="submit" id="contact-submit">Send enquiry <i class="feather-arrow-right"></i></button>
                        <p id="form-response" class="mt--20 mb--0" role="status" aria-live="polite"></p>
                    </form>
                </div>
                <div class="text-center mt--40">
                    <p class="mb--5"><strong>NS IT Solutions</strong></p>
                    <p class="mb--5"><a href="mailto:nsitlucknow@gmail.com">nsitlucknow@gmail.com</a> · <a href="mailto:contact@nsit.org.in">contact@nsit.org.in</a></p>
                    <p class="mb--0">Rajajipuram Lucknow Uttar Pradesh - 22601</p>
                </div>
            </div>
        </section>

        <footer class="rainbow-footer footer-style-default footer-style-1">
            <?php include('utils/footer.php') ?>
        </footer>
    </main>
    <script src="assets/js/vendor/modernizr.min.js"></script>
    <script src="assets/js/vendor/jquery.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/vendor/waypoint.min.js"></script>
    <script src="assets/js/vendor/wow.min.js"></script>
    <script src="assets/js/vendor/counterup.min.js"></script>
    <script src="assets/js/vendor/feather.min.js"></script>
    <script src="assets/js/vendor/sal.min.js"></script>
    <script src="assets/js/vendor/masonry.js"></script>
    <script src="assets/js/vendor/imageloaded.js"></script>
    <script src="assets/js/vendor/magnify.min.js"></script>
    <script src="assets/js/vendor/lightbox.js"></script>
    <script src="assets/js/vendor/slick.min.js"></script>
    <script src="assets/js/vendor/easypie.js"></script>
    <script src="assets/js/vendor/text-type.js"></script>
    <script src="assets/js/vendor/jquery.style.swicher.js"></script>
    <script src="assets/js/vendor/js.cookie.js"></script>
    <script src="assets/js/vendor/jquery-one-page-nav.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
        document.getElementById('contact-form').addEventListener('submit', async function (event) {
            event.preventDefault();
            const form = event.currentTarget;
            const response = document.getElementById('form-response');
            const button = document.getElementById('contact-submit');
            if (!form.reportValidity()) return;
            button.disabled = true;
            response.textContent = 'Sending your enquiry...';
            try {
                const result = await fetch('mail.php', { method: 'POST', body: new FormData(form) });
                const data = await result.json();
                response.textContent = data.code ? 'Thank you. Your enquiry has been sent.' : (data.err || 'We could not send your enquiry. Please try again.');
                if (data.code) form.reset();
            } catch (error) {
                response.textContent = 'We could not send your enquiry. Please try again later.';
            } finally {
                button.disabled = false;
            }
        });
    </script>
</body>
</html>
