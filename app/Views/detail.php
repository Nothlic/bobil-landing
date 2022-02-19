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
    <link href="<?= base_url('assets') ?>/plugins/lightslider/src/css/lightslider.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.3.2/css/lightgallery.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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



    <div id="detail">

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
                    <a href="<?= base_url() ?>/about" class="navbar-item">
                        About Us
                    </a>
                    <a href="<?= base_url() ?>/station" class="navbar-item">Station</a>
                </div>
            </div>
        </div>

        <div class="default-section type-detail">
            <div class="container">
                <div class="detail-wrapper">
                    <?php if (!$agent->isMobile()) : ?>
                        <ul id="imageGallery" class="detail-gallery">
                            <?php foreach ($json->images as $image) : ?>
                                <li data-thumb="<?= base_url('upload') ?>/car/<?= $image ?>" data-src="<?= base_url('upload') ?>/car/<?= $image ?>">
                                    <img src="<?= base_url('upload') ?>/car/<?= $image ?>" />
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php elseif ($agent->isTablet()) : ?>
                        <div class="slider-tablet">
                            <div class="item">
                                <div class="clearfix detail-gallery">
                                    <ul id="image-gallery-tablet" class="gallery list-unstyled cS-hidden">
                                        <?php foreach ($json->images as $image) : ?>
                                            <li data-thumb="<?= base_url('upload') ?>/car/<?= $image ?>" data-src="<?= base_url('upload') ?>/car/<?= $image ?>">
                                                <img src="<?= base_url('upload') ?>/car/<?= $image ?>" />
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php else : ?>
                        <div class="demo">
                            <div class="item">
                                <div class="clearfix detail-gallery">
                                    <ul id="image-gallery" class=" gallery list-unstyled cS-hidden">
                                        <?php foreach ($json->images as $image) : ?>
                                            <li data-thumb="<?= base_url('upload') ?>/car/<?= $image ?>" data-src="<?= base_url('upload') ?>/car/<?= $image ?>">
                                                <img src="<?= base_url('upload') ?>/car/<?= $image ?>" />
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php endif ?>
                    <div class="detail-information">
                        <div class="detail-name"><?= $json->name ?></div>
                        <div class="detail-year"><?= $json->year ?></div>
                        <div class="detail-description">
                            <?= $json->description ?>
                        </div>
                        <div class="detail-price-wrapper">
                            <div class="price">IDR: <?= number_format($json->price, 0, ",", ".") ?></div>
                            <div class="button-price-wrapper">
                                <div class="icon-price">
                                    <i class="fab fa-whatsapp"></i>
                                </div>
                                <div class="button-label">CONTACT US</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="strike">
            <span>SPECIFICATIONS</span>
        </div>

        <div class="default-section type-last">
            <div class="container">
                <div class="specification-wrapper">
                    <div class="speciifiication-content">
                        <div class="specification-title">Exterior :</div>
                        <div class="specification-description">
                            <?= $json->exterior ?>
                        </div>
                    </div>
                    <div class="speciifiication-content">
                        <div class="specification-title">Interior :</div>
                        <div class="specification-description">
                            <?= $json->interior ?>
                        </div>
                    </div>
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
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/ScrollToPlugin3.min.js"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/ScrollTrigger.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="<?= base_url('assets') ?>/plugins/lightslider/src/js/lightslider.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.3.2/js/lightgallery.js"></script>
    <script>
        $(document).ready(function() {
            $('#imageGallery').lightSlider({
                gallery: true,
                item: 1,
                loop: true,
                thumbItem: 9,
                slideMargin: 0,
                enableDrag: false,
                currentPagerPosition: 'left',
                onSliderLoad: function(el) {
                    el.lightGallery({
                        selector: '#imageGallery .lslide'
                    });
                }
            });
            $('#image-gallery').lightSlider({
                gallery: true,
                item: 1,
                thumbItem: 6,
                slideMargin: 0,
                speed: 500,
                auto: false,
                loop: true,
                onSliderLoad: function(el) {
                    $('#image-gallery').removeClass('cS-hidden');
                    el.lightGallery({
                        selector: '#image-gallery .lslide'
                    });
                }
            });
            $('#image-gallery-tablet').lightSlider({
                gallery: true,
                item: 1,
                thumbItem: 6,
                slideMargin: 0,
                speed: 500,
                auto: false,
                loop: true,
                onSliderLoad: function(el) {
                    $('#image-gallery-tablet').removeClass('cS-hidden');
                    el.lightGallery({
                        selector: '#image-gallery-tablet .lslide'
                    });
                }
            });
        });

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