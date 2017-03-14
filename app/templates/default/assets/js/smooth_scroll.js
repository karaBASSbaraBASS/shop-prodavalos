$(window).scroll(function () {
        if ($(this).scrollTop() >= 500) {
            $('.Top').fadeIn();
        } else {
            $('.Top').fadeOut();
        }
    });
    $('.Top').click(function () {
        $('html,body').stop().animate({ scrollTop: 0 });
    });

/*html*/
/* <span class="Top"><i class="f-home-link"></i></span>*/

/*css*/
/*.f-home-link {
	position: fixed;
	top: 400px;
	right: 30px;
	display: inline-block;
	height: 30px;
	width: 30px;
	z-index: 999;
	background: #cc3333 url(../img/arrow.png) no-repeat center;*/
