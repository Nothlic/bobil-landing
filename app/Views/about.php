<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-WLXFX77');
    </script>
    <!-- End Google Tag Manager -->

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

</head>

<body class="type-gradient">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WLXFX77" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div class="menu-mobile type-light" id="menuMobile">
        <div class="menu-content">
            <a href="<?= base_url() ?>/collections" class="menu-item">Collections</a>
            <a href="<?= base_url() ?>/coming-soon" class="menu-item">Marketplace</a>
            <a href="<?= base_url() ?>/about" class="menu-item">About Us</a>
            <a href="<?= base_url() ?>/station" class="menu-item">Station</a>
        </div>
    </div>


    <div id="about">
        <div class="navbar-mobile type-light" id="navbarMobile">
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

        <div class="about-banner">
            <div class="image-about-wrapper">
                <img src='<?= base_url('upload') ?>/about/<?= $json->banner ?>' alt="about-banner" />
                <div class="overlay"></div>
            </div>

            <div class="content-wrapper">
                <div class="caption"><?= $json->bannerSmallCaption ?></div>
                <div class="title"><?= $json->bannerTitle ?></div>
            </div>
        </div>

        <div class="default-section">
            <div class="container">
                <div class="about-content-wrapper">
                    <div class="about-content-title">
                        <div class="caption"><?= $json->aboutSmallLabel ?></div>
                        <div class="title"><?= $json->aboutTitle ?></div>
                    </div>
                    <div class="about-content">
                        <div class="description">
                            <?= $json->aboutDescription ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="default-section type-hide-mobile">
            <div class="slider-wrapper-section">
                <div class="slider-testi">
                    <?php foreach ($json->testimoni as $image) : ?>
                        <img src="<?= base_url('upload') ?>/about/<?= $image ?>" alt="slider-testi" />
                    <?php endforeach ?>
                </div>
                <div class="slider-testi-sync">
                    <?php foreach (array_reverse($json->testimoni) as $image) : ?>
                        <img src="<?= base_url('upload') ?>/about/<?= $image ?>" alt="slider-testi" />
                    <?php endforeach ?>
                </div>
            </div>
            <div class="slick-slider-dots"></div>
        </div>

        <?php if ($agent->isPhone()) : ?>
            <div class="default-section">
                <div class="mobile-slider-wrapper">
                    <div id="mobile-slider">
                        <?php foreach ($json->testimoni as $image) : ?>
                            <img src="<?= base_url('upload') ?>/about/<?= $image ?>" alt="slider-testi" />
                        <?php endforeach ?>
                    </div>
                </div>

            </div>
        <?php endif; ?>

        <div class="default-section">
            <div class="container">
                <div class="about-content-wrapper">
                    <div class="about-content-title">
                        <div class="caption"><?= $json->cultureCaption ?></div>
                        <div class="title"><?= $json->whyBobilTitle ?></div>
                        <div class="subtitle">
                            <?= $json->whyBobilSubtitles ?>
                        </div>
                    </div>
                    <div class="about-content type-grid">
                        <div class="grid-content-wrapper">
                            <div class="title"><?= $json->culturePointTitle1 ?></div>
                            <div class="description">
                                <?= $json->culturePointDesc1 ?>
                            </div>
                        </div>
                        <div class="grid-content-wrapper">
                            <div class="title"><?= $json->culturePointTitle2 ?></div>
                            <div class="description">
                                <?= $json->culturePointDesc2 ?>
                            </div>
                        </div>
                        <div class="grid-content-wrapper">
                            <div class="title"><?= $json->culturePointTitle3 ?></div>
                            <div class="description">
                                <?= $json->culturePointDesc3 ?>
                            </div>
                        </div>
                        <div class="grid-content-wrapper">
                            <div class="title"><?= $json->culturePointTitle4 ?></div>
                            <div class="description">
                                <?= $json->culturePointDesc4 ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="default-section">
            <div class="container">
                <div class="about-content-wrapper">
                    <div class="about-content-title">
                        <div class="caption"><?= $json->visonCaption ?></div>
                        <div class="title"><?= $json->visionTitle ?></div>
                        <div class="subtitle">
                            <?= $json->visionSubtitles ?>
                        </div>
                    </div>
                    <div class="about-content type-grid">
                        <div class="grid-content-wrapper">
                            <div class="title"><?= $json->visionPointTitle1 ?></div>
                            <div class="description">
                                <?= $json->visionPointDesc1 ?>
                            </div>
                        </div>
                        <div class="grid-content-wrapper">
                            <div class="title"><?= $json->visionPointTitle2 ?></div>
                            <div class="description">
                                <?= $json->visionPointDesc2 ?>
                            </div>
                        </div>
                        <div class="grid-content-wrapper">
                            <div class="title"><?= $json->visionPointTitle3 ?></div>
                            <div class="description">
                                <?= $json->visionPointDesc3 ?>
                            </div>
                        </div>
                        <div class="grid-content-wrapper">
                            <div class="title"><?= $json->visionPointTitle4 ?></div>
                            <div class="description">
                                <?= $json->visionPointDesc4 ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="default-section">
            <div class="container">
                <div class="about-content-wrapper type-image">
                    <div class="about-content-title">
                        <div class="caption"><?= $json->visonCaptionWithImage ?></div>
                        <div class="title"><?= $json->visionTitleWithImage ?></div>
                        <div class="subtitle">
                            <?= $json->visionSubtitlesWithImage ?>
                        </div>
                    </div>
                    <div class="about-content type-image">
                        <img src="<?= base_url('upload') ?>/about/<?= $json->visionImage ?>" alt="bobil-office" />
                    </div>
                </div>
            </div>
        </div>

        <div class="default-section">
            <div class="container">
                <div class="about-content-wrapper type-image type-reverse">
                    <div class="about-content-title">
                        <div class="caption"><?= $json->visonCaptionWithImage2 ?></div>
                        <div class="title"><?= $json->visionTitleWithImage2 ?></div>
                        <div class="subtitle">
                            <?= $json->visionSubtitlesWithImage2 ?>
                        </div>
                    </div>
                    <div class="about-content type-image">
                        <img src="<?= base_url('upload') ?>/about/<?= $json->visionImage2 ?>" alt="bobil-office" />
                    </div>
                </div>
            </div>
        </div>

        <div class="default-section">
            <div class="container">
                <div class="about-content-wrapper type-image">
                    <div class="about-content-title">
                        <div class="caption"><?= $json->visonCaptionWithImage3 ?></div>
                        <div class="title"><?= $json->visionTitleWithImage3 ?></div>
                        <div class="subtitle">
                            <?= $json->visionSubtitlesWithImage3 ?>
                        </div>
                    </div>
                    <div class="about-content type-image">
                        <img src="<?= base_url('upload') ?>/about/<?= $json->visionImage3 ?>" alt="bobil-office" />
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="highlight-section-wrapper">
                <div class="title-highlight">
                    <?= $json->titleHighlight ?>
                </div>
                <div class="slider-wrapper" id="slide-about">
                    <?php foreach ($json->highlights as $image) : ?>
                        <img src="<?= base_url('upload') ?>/about/<?= $image ?>" alt="slider" />
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>



    <div class="footer type-light">
        <div class="footer-content-wrapper">
            <?php if (!$agent->isPhone()) : ?>
                <div class="footer-content">
                    <div class="footer-title">Company</div>
                    <a href="<?= base_url() ?>/about" class="footer-link">About</a>
                    <a href="<?= base_url() ?>/station" class="footer-link">Contact Us</a>
                </div>
            <?php endif; ?>
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
                <?php if (!$agent->isPhone()) : ?>
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
                <?php endif; ?>
            </div>
        </div>
        <?php if ($agent->isPhone()) : ?>
            <div class="footer-icons-mobile-wrapper">
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
        <?php endif ?></php>
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
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <!--TODO UPDATE VERSION SLICK-->
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="<?= base_url('assets') ?>/plugins/lightslider/src/js/lightslider.js"></script>

    <script>
        function initWelcome() {
            gsap.from('.navbar-wrapper', {
                duration: 1,
                opacity: 0,
                delay: 0.5,
                ease: "back"
            });
            gsap.from('.about-banner', {
                duration: 1,
                opacity: 0,
                delay: 1,
                ease: "back"
            });
        }


        $(document).ready(function() {
            initWelcome();
            $("#mobile-slider").lightSlider({
                item: 1,
                loop: false,
                slideMove: 1,
                easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
                speed: 600,
            });

            $('#slide-about').slick({
                centerMode: true,
                centerPadding: '30rem',
                slidesToShow: 1,
                slidesToScroll: 1,
                prevArrow: "<button type='button' class='slick-prev pull-left slider-button-left'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
                nextArrow: "<button type='button' class='slick-next pull-right slider-button-right'><i class='fa fa-angle-right' aria-hidden='true'></i></button>",
            });

            $('.slider-testi').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                fade: true,
                lazyLoad: 'progressive',
                asNavFor: '.slider-testi-sync'
            });
            $('.slider-testi-sync').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                asNavFor: '.slider-testi',
                dots: false,
                fade: true,
                lazyLoad: 'progressive',
                appendDots: $('.slick-slider-dots'),
                prevArrow: "<button type='button' class='slick-prev pull-left slider-button-left'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
                nextArrow: "<button type='button' class='slick-next pull-right slider-button-right'><i class='fa fa-angle-right' aria-hidden='true'></i></button>",
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