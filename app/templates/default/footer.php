

    <div id="shadow-layer"></div>

    <div id="cart">
        <h2>Cart</h2>
        <ul class="cart-items">
        </ul> <!-- cart-items -->

        <div class="cart-total">
            <p>Subtotal <span class="subtotalTotal">$0.00</span></p>
            <p>Tax <span class="taxes">$0.00</span></p>
            <p>Shipping <span class="shipping">$0.00</span></p>
            <p>Total <span class="finalTotal">$0.00</span></p>
        </div> <!--cart-total -->

            <a href="#" class="checkout-btn dialog__trigger">Checkout</a>
            <p class="error"></p>
            <p class="go-to-cart"><a href="#">Go to cart page</a></p>
    </div> <!-- cart -->

<span class="Top"><i class="fa fa-chevron-up"></i></span>

</div> <!-- wrapper -->

<div class="footer">
        <a href="#f-home-link" class="f-home-link">&nbsp;</a>
        <div class="center clearfix">
            <div class="f-about left">
                <h5 class="f-title">Little about us</h5>
                <p><b>Sed posuere</b> consectetur  est at. 
                Nulla vitae elit libero, a pharetra. 
                Lorem ipsum <b>dolor sit</b> amet, conse
                ctetuer adipiscing elit.</p>
                <h5 class="f-title">Socialize with us</h5>
                <div class="social">
                    <a href="#" class="f-s-fb">&nbsp;</a>
                    <a href="#" class="f-s-dribble">&nbsp;</a>
                    <a href="#" class="f-s-tw">&nbsp;</a>
                    <a href="#" class="f-s-mail">&nbsp;</a>
                    <a href="#" class="f-s-vimeo">&nbsp;</a>
                </div>
            </div>
            <div class="f-archives left">
                <h5 class="f-title">Our Archives</h5>
                <ul class="f-list">
                    <li><a href="#">March 2012</a></li>
                    <li><a href="#">February 2012</a></li>
                    <li><a href="#">January 2012</a></li>
                    <li><a href="#">December 2011</a></li>
                </ul>
            </div>
            <div class="f-populars left">
                <h5 class="f-title">Popular Posts</h5>
                <div class="s-products-item clearfix">
                    <div class="s-products-img">
                        <a href="#">
                            <img src="<?php echo url::get_template_path();?>assets/img/item2.jpg" alt="">
                        </a>
                    </div>
                    <div class="s-product-info">
                        <h6><a href="">Great Albom</a></h6>

                        <span><i class="ic-comment-white"></i> 12 comments</span>
                    </div>
                </div>

                <div class="s-products-item clearfix">
                    <div class="s-products-img">
                        <a href="#">
                            <img src="<?php echo url::get_template_path();?>assets/img/item5.jpg" alt="">
                        </a>
                    </div>
                    <div class="s-product-info">
                        <h6><a href="">Great Albom</a></h6>

                        <span><i class="ic-comment-white"></i> 12 comments</span>
                    </div>
                </div>
            </div>
            <div class="f-search right">
                <h5 class="f-title">Popular Posts</h5>
                <form action="#" class="f-search-inp">
                    <input type="text" placeholder="Enter Search ..."/>
                </form>
                <h5 class="f-title">Tag Cloud</h5>
                <a href="#" class="tags">Audio CD</a>
                <a href="#" class="tags">Video</a>
                <a href="#" class="tags">Playlist</a>
                <a href="#" class="tags">Avantgarade</a>
                <a href="#" class="tags">Melancholic</a>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="center">
                <a href="#">Home</a>
                <a href="#">Portfolio</a>
                <a href="#">Sitemap</a>
                <a href="#">Contact</a>
                
                <p class="right">Musica @2013 by PremiumCoding | All Rights Reserved</p>
            </div>
        </div>
    </div>


<script src="<?php echo url::get_template_path();?>assets/js/jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function () {

    var $cart = $('.cart-items');
    var menu_navigation = $('#main-nav'),
          $L = 900,
          cart_trigger = $('#cart-trigger'),
          hamburger_icon = $('#hamburger-menu'),
          cart = $('#cart'),
          shadow_layer = $('#shadow-layer');

    cart_trigger.on('click', function () {
        menu_navigation.removeClass('speed-in');
        toggle_panel_visibility(cart, shadow_layer, $('body'));
    });

    shadow_layer.on('click', function () {
        cart.removeClass('speed-in');
        menu_navigation.removeClass('speed-in');
        shadow_layer.removeClass('is-visible');
        $('body').removeClass('overflow-hidden');
    });

    hamburger_icon.on('click', function () {
        cart.removeClass('speed-in');
        toggle_panel_visibility(menu_navigation, shadow_layer, $('body'));
    });

    move_navigation(menu_navigation, $L);

    $(window).on('resize', function () {
        move_navigation(menu_navigation, $L);
        if ($(window).width() >= $L && menu_navigation.hasClass('speed-in')) {
            menu_navigation.removeClass('speed-in');
            shadow_layer.removeClass('is-visible');
            $('body').removeClass('overflow-hidden');
        }
    });

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

    $('.drop-down').on('click', function () {
        $('.mega-menu').toggleClass('mega_show');
    });

    $('#close-menu').on('click', function () {
        $('.mega-menu').removeClass('mega_show');
    });

    $('.form').find('input, textarea').on('keyup blur focus', function (e) {
        var $this = $(this), label = $this.prev('label');
        if (e.type === 'keyup') {
            if ($this.val() === '') {
                label.removeClass('active highlight');
            } else {
                label.addClass('active highlight');
            }
        } else if (e.type === 'blur') {
            if ($this.val() === '') {
                label.removeClass('active highlight');
            } else {
                label.removeClass('highlight');
            }
        } else if (e.type === 'focus') {
            if ($this.val() === '') {
                label.removeClass('highlight');
            } else if ($this.val() !== '') {
                label.addClass('highlight');
            }
        }
    });

});
function toggle_panel_visibility(panel, background_layer, body) {
    if (panel.hasClass('speed-in')) {
        panel.removeClass('speed-in');
        background_layer.removeClass('is-visible');
        body.removeClass('overflow-hidden');
    } else {
        panel.addClass('speed-in');
        background_layer.addClass('is-visible');
        body.addClass('overflow-hidden');
    }
}

function move_navigation(navigation, $MQ) {
    if ($(window).width() >= $MQ) {
        navigation.detach();
        navigation.appendTo('header');
    } else {
        navigation.detach();
        navigation.insertAfter('header');
    }
}

</script>
</body>
</html>
