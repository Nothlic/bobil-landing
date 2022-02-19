<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bobil Indonesia – Indonesia’s Finest Digital Car Platform</title>
    <meta name="description" content="Bobil Indonesia – Indonesia’s Finest Digital Car Platform">
    <meta name="og:title" property="og:title" content="Bobil Indonesia – Indonesia’s Finest Digital Car Platform">
    <meta name="robots" content="index, follow">
    <link rel="shortcut icon" href="<?= base_url() ?>/favicon.ico">
    <link href="<?= base_url('assets') ?>/css/landing/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link href="<?= base_url('assets') ?>/plugins/toastr/css/toastr.min.css" rel="stylesheet" type="text/css" />

</head>

<body class="type-gradient">
    <div class="menu-mobile type-light" id="menuMobile">
        <div class="menu-content">
            <a href="<?= base_url() ?>/collections" class="menu-item">Collections</a>
            <a href="<?= base_url() ?>/coming-soon" class="menu-item">Marketplace</a>
            <a href="<?= base_url() ?>/about" class="menu-item">About Us</a>
            <a href="<?= base_url() ?>/station" class="menu-item">Station</a>
        </div>
    </div>


    <div id="station">
        <div class="navbar-mobile type-light type-station" id="navbarMobile">
            <div class="icon">
                <a href="<?= base_url() ?>">
                    <img src="<?= base_url('assets') ?>/images/logo-dark.png" alt="bobil-dark-logo" />
                </a>
            </div>
            <div id="menuToggle" class="type-light">
                <input type="checkbox" id="menu-mobile-btn" />
                <span></span>
                <span></span>
                <span></span>
                <ul id="menu" class="type-collection type-light">
                </ul>
            </div>
        </div>

        <div class="navbar-wrapper type-custom">
            <div class="navbar-landing type-light">
                <div class="navbar-list">
                    <a href="<?= base_url() ?>/collections" class="navbar-item">Collection</a>
                    <a href="<?= base_url() ?>/coming-soon" class=" navbar-item">Marketplace</a>
                </div>
                <div class="navbar-icon">
                    <a href="<?= base_url() ?>">
                        <img src="<?= base_url('assets') ?>/images/logo-dark.png" alt="bobil-dark-logo" />
                    </a>
                </div>
                <div class="navbar-list">
                    <a href="<?= base_url() ?>/about" class="navbar-item">About Us</a>
                    <a href="<?= base_url() ?>/station" class="navbar-item">Station</a>
                </div>
            </div>
        </div>

        <div class="default-section">
            <div class="container">
                <div class="station-content-wrapper">
                    <div class="station-content-title">
                        <div class="caption"><?= $json->smallLabelStation ?></div>
                        <div class="title"><?= $json->titleLabelStation ?></div>
                    </div>
                    <div class="station-content type-grid">
                        <div class="grid-content-wrapper">
                            <div class="title">Address</div>
                            <div class="description">
                                <?= $json->addressStation ?>
                            </div>
                        </div>
                        <div class="grid-content-wrapper">
                            <div class="title">Contact</div>
                            <div class="description">
                                official@bobil.com
                                <br />
                                (021) 12345
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="default-section">
            <div class="station-image-wrapper">
                <img src="<?= base_url('assets') ?>/images/office-bobil.png" alt="bobil" class="station-image-big" />
                <img src="<?= base_url('assets') ?>/images/ferari.jpeg" alt="bobil" class="station-image-small" />
            </div>
        </div>


        <div class="default-section type-station">
            <div class="container">
                <div class="station-content-wrapper type-center">
                    <div class="station-content-title">
                        <div class="caption"> <?= $json->subscribeLabel ?></div>
                        <div class="title"><?= $json->subscribeTitle ?></div>
                        <div class="subtitle">
                            <?= $json->subscribeSubtitle ?>
                        </div>
                    </div>
                    <div class="station-content type-form">
                        <form action="/subscribe" method="post">
                            <div class="input-form">
                                <input type="email" name="email" placeholder="EMAIL ADDRESS" id="email" required />
                            </div>
                            <button type="submit" class="button-form">
                                Submit
                                <i class="fas fa-chevron-right"></i>
                            </button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer type-light">
        <div class="footer-content-wrapper">
            <div class="footer-content">
                <div class="footer-title">Company</div>
                <a href="<?= base_url() ?>/about" class="footer-link">About</a>
                <div class="footer-link">How it works</div>
                <div class="footer-link">Contact Us</div>
            </div>
            <div class="footer-content">
                <div class="footer-title">Support</div>
                <div class="footer-link">Help</div>
                <div class="footer-link">Livechat</div>
                <div class="footer-link">Terms & Privacy</div>
            </div>
            <div class="footer-content">
                <div class="footer-title">Links</div>
                <div class="footer-link">News</div>
                <div class="footer-link">Buy</div>
                <div class="footer-link">Sell</div>
            </div>
            <div class="footer-content">
                <div class="footer-title">Location</div>
                <div class="footer-link">PIK Golf Island</div>
                <div class="footer-link">RGIE No.102</div>
                <div class="footer-link">Jakarta Utara</div>
            </div>
            <div class="footer-content">
                <div class="footer-title">Contact</div>
                <div class="footer-link">support@bobil.com</div>
                <div class="footer-link">(928) 344-1480</div>
                <div class="footer-icons-wrapper">
                    <div class="footer-icon">
                        <i class="fab fa-instagram"></i>
                    </div>
                    <div class="footer-icon">
                        <i class="fab fa-twitter"></i>
                    </div>
                    <div class="footer-icon">
                        <i class="fab fa-facebook-f"></i>
                    </div>
                </div>
            </div>
        </div>
        <hr />
        <div class="copyright-wrapper">
            <div>Boss Mobil</div>
            <div>&copy; <script>
                    document.write(new Date().getFullYear())
                </script> Bobil Indonesia. All Rights Reserved</div>
        </div>
    </div>

    <div class="recommendation-section-wrapper type-light">
        <div class="recommendation-section">
            <div class="recommendation-content-wrapper">
                <div class="recommendation-content">
                    <div class="caption">NEXT :</div>
                    <div class="title">COLLECTIONS</div>
                </div>

                <div class="recommendation-icon">
                    <i class="fas fa-chevron-down"></i>
                </div>
            </div>
        </div>
    </div>

    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/gsap-latest-beta.min.js"></script>
    <script src="<?= base_url('assets') ?>/js/jquery-3.3.1.min.js"></script>
    <script src="<?= base_url('assets') ?>/plugins/toastr/js/toastr.min.js"></script>
    <script>
        function initWelcome() {
            gsap.from('.navbar-wrapper', {
                duration: 1,
                opacity: 0,
                delay: 0.5,
                ease: "back"
            });
            gsap.from('.default-section', {
                duration: 1,
                opacity: 0,
                delay: 1,
                ease: "back"
            });
        }

        $(document).ready(function() {
            initWelcome();
        });


        function showNotification(type, message, title) {
            toastr[type](message, title);
        }

        <?php if (session()->getFlashdata('toastr')) : ?>
            showNotification('<?= session()->getFlashdata("toastr")['type'] ?>', '<?= session()->getFlashdata("toastr")['msg'] ?>', '<?= session()->getFlashdata("toastr")['title'] ?>')
        <?php endif; ?>

        document.addEventListener("DOMContentLoaded", function() {
            var menuMobileBtn = document.getElementById('menu-mobile-btn');
            var menuMobile = document.getElementById('menuMobile');

            menuMobileBtn.addEventListener('change', (event) => {
                if (event.target.checked) {
                    menuMobile.classList.add('open');
                    document.body.style.overflow = "hidden";
                } else {
                    menuMobile.classList.remove('open');
                    document.body.style.overflow = "unset";
                }
            })
        });
    </script>
</body>

</html>