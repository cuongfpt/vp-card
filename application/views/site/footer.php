
  <div class="footer clearfix" style="">
                <div class="info-footer clearfix">
                    <div class="footer-left clearfix">

                        <ul class="list-inline">
                            <li>
                                <div class="hi-items">
                                    <p class="title">
                                        <strong>
                                            <a href="#" style="color: #592fa9">ĐIỂM BÁN THẺ VINPLAY CARD
                                            </a></strong>
                                    </p>
                                    <a href="#">
                                        <img src="<?php echo public_url("/site/images/diem-ban.png") ?> "></a>
                                </div>
                            </li>
                            <li>
                                <div class="hi-items">
                                    <p class="title">
                                        <strong style="color: #592fa9;">
                                            <a href="hoi-dap" style="color: #592fa9">CÂU HỎI THƯỜNG GẶP
                                            </a>
                                        </strong><i class="fa fa-plus"></i>
                                    </p>
                                    <?php if (!empty($faq)): ?>
                                         <?php foreach ($faq as $row): ?>
                                            <ul class="alias-footer">
                                                <li class="fa fa-caret-right">
                                                    <h3 class="h3TitleGuide">
                                                      <a href="<?php echo base_url('hoi-dap/' . $row->seolink . '-' . $row->id) ?>"><?php echo $row->question ?></a>
                                                    </h3>
                                                </li>
                                            </ul>
                                              <?php endforeach ?>
                                         <?php endif ?>
                                            
                                </div>
                            </li>
                            <li>
                                <div class="hi-items">
                                    <p class="title">
                                        <strong style="color: #592fa9;">
                                            <a href="https://v-card.vn/huong-dan/" style="color: #592fa9">HƯỚNG DẪN
                                            </a>
                                        </strong><i class="fa fa-plus"></i>
                                    </p>
                                    
                                             <?php if (!empty($guide)): ?>
                                         <?php foreach ($guide as $row): ?>
                                            <ul class="alias-footer">
                                                <li class="fa fa-caret-right">
                                                    <h3 class="h3TitleGuide">
                                                      <a href="<?php echo base_url('huong-dan/' . $row->seolink . '-' . $row->id) ?>"><p><?php echo $row->title ?></p></a>
                                                    </h3>
                                                </li>
                                            </ul>
                                              <?php endforeach ?>
                                         <?php endif ?>
                                        
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--end .footer-left -->
                </div>
            </div>
            <div class="payment clearfix">
                <div class="info-payment">
                    <span class="support-payment">Đối tác thanh toán</span>
                    <div class="paymentslider">
                        <div id="paymentslider" class="owl-carousel owl-theme owl-loaded">
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
            <div class="bottom-footer clearfix" align="center" style="padding-bottom: 40px;">

                <div class="info-bottom-footer clearfix">

                    <div class="menu-bottom-footer">
                        <ul class="list-inline">
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

                    </div>

                    <div class="footer-sologan" align="center">
                    </div>
                    <div class="row">
                        <div class="info-company box-list col-sm-4" align="center">
                        </div>
                        <!--end .menu-bottom-footer -->
                        <div class="col-sm-4 box-certificate box-list " style="width: 100%">
                            <div class="name-company">
                                <table cellspacing="0" cellpadding="0" style="text-align: center">
                                    <tbody><tr>
                                        <td>
                                            <img src="<?php echo public_url("/site/images/logo.png") ?>" width="120">
                                        </td>
                                    </tr> 
                                     
                                </tbody></table>
                            </div>
                        </div>
                        <!-- end .box-certificate-->
                        <div class="info-company box-list  col-sm-4" align="center">
                        </div>
                    </div>

                </div>
            </div>
            <div id="footer_hotline" style="position: fixed; bottom: 0px; left: 0px; color: rgb(77, 75, 75); z-index: 9998; width: 100%; height: 35px; line-height: 35px; background: #eeeeee;">
                <img style="float: left" src="<?php echo public_url("/site/images/phone_hotline.png") ?>" alt="hotline">
                <div>
                    <b><span style="color: red">HOTLINE</span></b>
                    &nbsp; &nbsp; &nbsp; &nbsp;  Hotline từ 8h00 – 17h: <b><span style="color: #2ba9c7; font-size: 13px">1900 68 96</span></b>. Từ 17h30- 22h00:</b>
                </div>
             <div class="hisella-messages">
                <div class="hisella-messages-outer">
                         <div id="hisella-minimize">Live Chat Facebook</div>
                        <div id="hisella-facebook" class='fb-page' data-adapt-container-width='true' data-height='300'
                 data-hide-cover='false' data-href='<?php echo $linkface?>' data-show-facepile='true'
                 data-show-posts='false' data-small-header='false' data-tabs='messages' data-width='250'></div>
                    </div>
             </div> 
            </div>
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
    $(".footer-left").find("li").click(function(){
      if($(this).find("i").hasClass("fa fa-plus")){
       $(this).find("i").removeClass("fa fa-plus");
        $(this).find("i").addClass("fa fa-minus");
        $(this).find(".alias-footer").css("display","block");
      }
      else{
         $(this).find("i").removeClass("fa fa-minus");
        $(this).find("i").addClass("fa fa-plus");
        $(this).find(".alias-footer").css("display","none");
      }
    });
</script>