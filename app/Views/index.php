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

    <div id="landing">
        <div class="navbar-mobile">
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
                <div id="menu"></div>
            </div>
        </div>

        <div class="navbar-wrapper  animate-this">
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


        <div class="landing-section  animate-this" id="section1">
            <img src="<?= base_url('upload') ?>/landing/<?= $json->image1 ?>" alt="section-1" class="type-first mb--10" />
            <div class="section1-wrapper">
                <div class="caption">BOSS MOBIL</div>
                <div class="title">Indonesia's Finest</div>
                <div class="subtitle">Digital Car Platform</div>
            </div>
        </div>

        <div class="landing-section" id="section2">
            <img src="<?= base_url('upload') ?>/landing/<?= $json->image2 ?>" alt="section-2" class="" />
            <div class="section2-wrapper">
                <div class="title">One-stop platform for</div>
                <div class="subtitle">all your car needs</div>
            </div>
        </div>

        <div class="landing-section" id="section3">
            <img src="<?= base_url('upload') ?>/landing/<?= $json->image3 ?>" alt="section-3" class="mb--10" />
            <div class="section3-wrapper">
                <div class="title">Easiest way to sell your car</div>
            </div>
        </div>

        <div class="landing-section" id="section4">
            <img src="<?= base_url('upload') ?>/landing/<?= $json->image4 ?>" alt="section-4" class="type-last" class="" />
            <div class="section4-wrapper">
                <div class="title">Let us do the work, sit</div>
                <div class="subtitle">back and relax</div>
            </div>
        </div>

        <div class="default-section type-last" id="section5">
            <div class="slider-content-wrapper">
                <div class="small-title">Our Vision</div>
                <div class="big-title">Provide The Finest Platform</div>
                <div class="caption">We are comitted to be the leading digital marketplace for the automotive industry</div>
                <div class="button-sell">Sell Your Car</div>
            </div>
        </div>
    </div>
    <div class="footer">
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
                <div class="footer-title">Garage</div>
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

    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/gsap-latest-beta.min.js"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/ScrollToPlugin3.min.js"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/ScrollTrigger.min.js"></script>
    <script src="https://unpkg.com/@barba/core"></script>
    <script src="<?= base_url() ?>/assets/js/transition.js"></script>

    <script>
        gsap.registerPlugin(ScrollTrigger);
        selectAll = e => document.querySelectorAll(e);

        function getCookie(name) {
            let value = `; ${document.cookie}`;
            let parts = value.split(`; ${name}=`);
            if (parts.length === 2) return parts.pop().split(';').shift();
        }

        function initWelcome() {
            gsap.from('.navbar-landing', {
                duration: 1,
                opacity: 0,
                delay: 0.5,
                ease: "back"
            });
            gsap.from('#section1 img', {
                duration: 1,
                opacity: 0,
                delay: 1,
                ease: "back"
            });
            gsap.from('.section1-wrapper .caption', {
                duration: 1,
                opacity: 0,
                delay: 1.5,
                ease: "back"
            });
            gsap.from('.section1-wrapper .title', {
                duration: 1,
                opacity: 0,
                delay: 2,
                ease: "back"
            });
            gsap.from('.section1-wrapper .subtitle', {
                duration: 1,
                opacity: 0,
                delay: 2,
                ease: "back"
            });
        }

        function initParallax() {
            gsap.fromTo('#section1 img', {
                y: "0"
            }, {
                y: "50vh",
                scrollTrigger: {
                    trigger: "#section2",
                    scrub: true,
                    start: "top bottom", // position of trigger meets the scroller position
                    snap: {
                        snapTo: 0.5, // 0.5 'cause the scroll animation range is 200vh for parallax effect
                        duration: 1,
                        ease: 'power4.inOut'
                    }
                },
                ease: 'none'
            });

            gsap.fromTo('#section2 img', {
                y: "0"
            }, {
                y: "50vh",
                scrollTrigger: {
                    trigger: "#section3",
                    scrub: true,
                    start: "top bottom", // position of trigger meets the scroller position
                    snap: {
                        snapTo: 0.5, // 0.5 'cause the scroll animation range is 200vh for parallax effect
                        duration: 1,
                        ease: 'power4.inOut'
                    }
                },
                ease: 'none'
            });

            gsap.fromTo('#section3 img', {
                y: "0"
            }, {
                y: "50vh",
                scrollTrigger: {
                    trigger: "#section4",
                    scrub: true,
                    start: "top bottom", // position of trigger meets the scroller position
                    snap: {
                        snapTo: 0.5, // 0.5 'cause the scroll animation range is 200vh for parallax effect
                        duration: 1,
                        ease: 'power4.inOut'
                    }
                },
                ease: 'none'
            });
        }

        window.onload = () => {
            initWelcome();
            <?php if (!$agent->isTablet()) : ?>
                initParallax();
            <?php endif; ?>

            var haloBobil = getCookie('bobil');

            if (!haloBobil) {
                window.location.href = "<?= base_url() ?>/welcome";
            }
        };

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