<script type="text/javascript" src="js/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="js/hambarger.js"></script>
<script type="text/javascript" src="js/slick.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/scrollAnime.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<link href="js/owl.carousel.css" rel="stylesheet">
<link href="js/owl.theme.css" rel="stylesheet">
<script src="js/owl.carousel.js"></script>
<script src="js/init.js"></script>

<script>
    $(function() {
        var pagetop = $('#page_top');
        pagetop.hide();
        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                pagetop.fadeIn();
            } else {
                pagetop.fadeOut();
            }
        });
        pagetop.click(function () {
            $('body,html').animate({
                scrollTop: 0
            }, 500);
            return false;
        });
    });
</script>

