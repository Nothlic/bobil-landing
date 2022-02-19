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

<body data-barba="wrapper">
    <div class="load-container">
        <div class="loading-screen"></div>
    </div>
    <div id="section-1" data-barba="container" data-barba-namespace="welcome-section">
        <video autoplay loop muted id="myVideo">
            <source src="<?= base_url('upload') ?>/welcome/<?= $json->video ?>" type="video/mp4">
            Your browser does not support HTML5 video.
        </video>
        <div id="content" class="animate-this">
            <div class="caption">INTRODUCING BOBIL</div>
            <h1>The Finest Car Platform</h1>
        </div>
        <a href="<?= base_url() ?>" id="button-go">
            <span class="label">GO</span>
            <i class="fas fa-chevron-right"></i>
        </a>
    </div>

    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/gsap-latest-beta.min.js"></script>
    <script src="https://unpkg.com/@barba/core"></script>
    <script src="<?= base_url() ?>/assets/js/transition.js"></script>
    <script>
        function getCookie(name) {
            let value = `; ${document.cookie}`;
            let parts = value.split(`; ${name}=`);
            if (parts.length === 2) return parts.pop().split(';').shift();
        }

        document.addEventListener("DOMContentLoaded", function() {
            var haloBobil = getCookie('bobil');
            if (!haloBobil) {
                document.cookie = `bobil=1; path=/; max-age=${60 * 60 * 24 * 14};`;
            } else {
                window.location.href = "<?= base_url() ?>";
            }
        });
    </script>
</body>

</html>