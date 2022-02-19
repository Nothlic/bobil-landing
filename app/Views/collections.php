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
</head>

<body>

    <div class="menu-mobile" id="menuMobile">
        <div class="menu-content">
            <a href="<?= base_url() ?>/collections" class="menu-item">Collections</a>
            <a href="<?= base_url() ?>/coming-soon" class="menu-item">Marketplace</a>
            <a href="<?= base_url() ?>/about" class="menu-item">About Us</a>
            <a href="<?= base_url() ?>/station" class="menu-item">Station</a>
        </div>
    </div>


    <div id="collections">

        <div class="navbar-mobile type-collection">
            <div class="icon">
                <a href="<?= base_url() ?>">
                    <img src="<?= base_url('assets') ?>/images/logo-white.png" alt="bobil-white-logo" />
                </a>
            </div>
            <div id="menuToggle">
                <input type="checkbox" id="menu-mobile-btn" />
                <span></span>
                <span></span>
                <span></span>
                <ul id="menu" class="type-collection">
                </ul>
            </div>
        </div>

        <div class="navbar-wrapper type-custom">
            <div class="navbar-landing">
                <div class="navbar-list">
                    <a href="<?= base_url() ?>/collections" class="navbar-item">Collection</a>
                    <a href="<?= base_url() ?>/coming-soon" class=" navbar-item">Marketplace</a>
                </div>
                <div class="navbar-icon">
                    <a href="<?= base_url() ?>">
                        <img src="<?= base_url('assets') ?>/images/logo-white.png" alt="bobil-white-logo" />
                    </a>
                </div>
                <div class="navbar-list">
                    <a href="<?= base_url() ?>/about" class="navbar-item">About Us</a>
                    <a href="<?= base_url() ?>/station" class="navbar-item">Station</a>
                </div>
            </div>
        </div>

        <div class="collections-content-wrapper">
            <div class="collections-slider">
                <?php foreach ($json->sliders as $slider) : ?>
                    <img src="<?= base_url('upload') ?>/collections/<?= $slider ?>" alt="collections-slider" />
                <?php endforeach ?>
            </div>
        </div>


        <div class="default-section type-custom">
            <div class="container">
                <div class="title-collections"><?= $json->titleCollections ?></div>
                <div class="collections-wrapper">
                    <?php foreach ($cars as $car) : ?>
                        <a href="<?= base_url() ?>/detail/<?= $car->id ?>" class="collections-content">
                            <img src="<?= base_url('upload') ?>/car/<?= json_decode($car->json)->images[0] ?>" alt="collection" />
                            <div class="collection-info-wrapper">
                                <div class="collection-name"><?= json_decode($car->json)->name ?></div>
                                <div class="collection-logo">
                                    <img src="<?= base_url('upload/' . $car->image) ?>" alt="collection-logo" />
                                </div>
                            </div>
                        </a>
                    <?php endforeach ?>

                </div>
            </div>
        </div>
    </div>

    <div class="footer">
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

    <div class="recommendation-section-wrapper">
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
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script>
        function initWelcome() {
            gsap.from('.navbar-wrapper', {
                duration: 1,
                opacity: 0,
                delay: 0.5,
                ease: "back"
            });
            gsap.from('.collections-content-wrapper', {
                duration: 1,
                opacity: 0,
                delay: 1,
                ease: "back"
            });
            gsap.from('.default-section', {
                duration: 1,
                opacity: 0,
                delay: 1.5,
                ease: "back"
            });
        }


        $(document).ready(function() {
            initWelcome();

            $('.collections-slider').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                fade: false,
                lazyLoad: 'progressive',
            });
        })

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