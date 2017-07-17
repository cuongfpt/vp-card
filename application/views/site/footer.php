<div class="contain_bottom">
    <div class="contain_content">

        <div class="item_bottom">
            <div class="title_bottom">Điểm bán thẻ vinplay</div>
            <div class="content_bottom">
                <img src="<?php echo public_url("/site/images/diem-ban.png") ?> ">
            </div>
        </div>
        <div class="item_bottom">
            <div class="title_bottom">Câu hỏi thường gặp</div>
            <div class="content_bottom">
                <?php if (!empty($faq)): ?>
                    <ul>
                        <?php foreach ($faq as $row): ?>

                            <li>
                                <a href="<?php echo base_url('hoi-dap/' . $row->seolink . '-' . $row->id) ?>"> <?php echo $row->question ?></a>
                            </li>
                        <?php endforeach ?>

                    </ul>
                <?php endif ?>
            </div>
        </div>
        <div class="item_bottom">
            <div class="title_bottom">Hướng dẫn</div>
            <div class="content_bottom">
                <?php if (!empty($guide)): ?>
                    <ul>
                        <?php foreach ($guide as $row): ?>
                            <li>
                                <a href="<?php echo base_url('huong-dan/' . $row->seolink . '-' . $row->id) ?>"><?php echo $row->title ?></a>
                            </li>
                        <?php endforeach ?>

                    </ul>
                <?php endif ?>
            </div>
        </div>
    </div>
</div>

<div class="contain_partner">
    <div class="payment">
        <div class="partner">
            <span class="support-payment">Đối tác thanh toán</span>

            <div class="paymentslider">
                <div id="paymentslider" class="owl-carousel">
                    <?php if (!empty($Partner)): ?>
                        <?php foreach ($Partner as $row): ?>
                            <div class="h-item" data-dot="1">
                                <a><img src=<?php echo public_url('uploads/adv/partner/' . $row->images) ?> alt=""/></a>
                            </div>
                        <?php endforeach ?>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer" align="center">
    <div class="menu_footer">
        <div class="menu-bottom-footer">
            <?php if (!empty($menufooter)): ?>
                <ul class="list-inline">
                    <li><a href="/">Trang chủ</a></li>
                    <?php foreach ($menufooter as $row): ?>
                        <?php if ($row->typepage == 1){ ?>
                            <li>
                                <a href="<?php echo base_url('huong-dan/' . $row->seolink . '-' . $row->id) ?>"><?php echo $row->catname ?></a>
                            </li>
                        <?php } else if ($row->typepage == 4){ ?>
                            <li>
                                <a href="<?php echo base_url('hoi-dap')?>"><?php echo $row->catname ?></a>
                            </li>
                                
                        <?php } else if ($row->typepage == 5){ ?>
                            <li>
                                <a href="<?php echo base_url('lien-he') ?>"><?php echo $row->catname ?></a>
                            </li>
                        <?php } else {?>
                            <li>
                                <a href="<?php echo base_url('danh-muc/' . $row->seolink . '-' . $row->id) ?>"><?php echo $row->catname ?></a>
                            </li>
                        <?php }?>
                    <?php endforeach ?>


                </ul>
            <?php endif ?>
        </div>
    </div>
    <div class="line_ft"><img src="<?php echo public_url("/site/images/line.jpg") ?> "></div>
    <div class="logo_footer"><a href="<?php echo base_url("/") ?>"><img
                src="<?php echo public_url("/site/images/logo.png") ?> "></a></div>
    <div id='fb-root'></div>
    <script>
        (function ($) {
            $(document).ready(function () {
                $('#hisella-minimize').click(function () {
                    if ($('#hisella-facebook').css('opacity') == 0) {
                        $('#hisella-facebook').css('opacity', 1);
                        $('.hisella-messages').animate({right: '0'}).animate({bottom: '0'});
                    } else {
                        $('.hisella-messages').animate({bottom: '-300px'}).animate({right: '0px'}, 400, function () {
                            $('#hisella-facebook').css('opacity', 0)
                        });
                    }
                })
            });
        })(jQuery);
        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <div class="hisella-messages">
        <div class="hisella-messages-outer">
            <div id="hisella-minimize">Live Chat Facebook</div>
            <div id="hisella-facebook" class='fb-page' data-adapt-container-width='true' data-height='300'
                 data-hide-cover='false' data-href='<?php echo $linkface?>' data-show-facepile='true'
                 data-show-posts='false' data-small-header='false' data-tabs='messages' data-width='250'></div>
        </div>
    </div>
</div>
<Script>
    $('#paymentslider').owlCarousel({
        items: 1,
        loop: true,
        margin: 0,
        responsiveClass: false,
        nav: false,
        dots: true,
        autoplay: false,
        autoHeight: false,
        autoplayTimeout: 4000,
        autoplayHoverPause: false,
        responsive: {
            0: {
                items: 2
            },
            481: {
                items: 3
            },
            534: {
                items: 4
            },
            767: {
                items: 5
            },
            1200: {
                items: 8
            }
        }
    });
</Script>