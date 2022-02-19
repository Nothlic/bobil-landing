<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/gsap-latest-beta.min.js"></script>
<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/ScrollToPlugin3.min.js"></script>
<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/ScrollTrigger.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript" src="<?= base_url('assets') ?>/plugins/lightslider/src/js/lightslider.js"></script>


<script>
    gsap.registerPlugin(ScrollTrigger);
    selectAll = e => document.querySelectorAll(e);

    $(document).ready(function() {
        $('#slide-about').slick({
            centerMode: true,
            centerPadding: '30rem',
            slidesToShow: 1,
            slidesToScroll: 1,
            lazyLoad: 'progressive',
            prevArrow: "<button type='button' class='slick-prev pull-left slider-button-left'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
            nextArrow: "<button type='button' class='slick-next pull-right slider-button-right'><i class='fa fa-angle-right' aria-hidden='true'></i></button>"
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
            nextArrow: "<button type='button' class='slick-next pull-right slider-button-right'><i class='fa fa-angle-right' aria-hidden='true'></i></button>"
        });

        $('.collections-slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: false,
            lazyLoad: 'progressive',
        });

        $('#imageGallery').lightSlider({
            gallery: true,
            item: 1,
            loop: true,
            thumbItem: 9,
            slideMargin: 0,
            enableDrag: false,
            currentPagerPosition: 'left',
        });
    });

    function getCookie(name) {
        let value = `; ${document.cookie}`;
        let parts = value.split(`; ${name}=`);
        if (parts.length === 2) return parts.pop().split(';').shift();
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
        // initParallax();

        var haloBobil = getCookie('bobil');

        if (!haloBobil) {
            window.location.href = "<?= base_url() ?>/welcome";
        }
    };
</script>
</body>

</html>