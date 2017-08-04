

            <div class="topmenu">
                <div class="menu clearfix">
                    <a href="#menu" class="m-expand"></a>
                    <div class="logo">
                    <a  class="logo-desktop" href="<?php echo base_url("/")?>"><img src="<?php echo public_url("/site/images/logo.png") ?>"></a>
                    <a class="logo-mobile" href="<?php echo base_url("/")?>"><img src="<?php echo public_url("/site/images/logo.png") ?>"></a>
                    </div>
                    <div class="mdland-navigator">
                        <div class="menu-navigator clearfix">
                            <ul class="nav navbar-nav">
                               <?php foreach ($menufooter as $row): ?>
                                <?php if ($row->typepage == 1){ ?>
                                    <li>
                                        <a class="mn-desktop" href="<?php echo base_url('huong-dan/' . $row->seolink . '-' . $row->id) ?>"><?php echo $row->catname ?></a>
                                    </li>
                                <?php } else if ($row->typepage == 4){ ?>
                                    <li>
                                        <a  class="mn-desktop" href="<?php echo base_url('hoi-dap')?>"><?php echo $row->catname ?></a>
                                    </li>
                                        
                                <?php } else if ($row->typepage == 5){ ?>
                                    <li>
                                        <a class="mn-desktop" href="<?php echo base_url('lien-he') ?>"><?php echo $row->catname ?></a>
                                    </li>
                                <?php } else {?>
                                    <li>
                                        <a class="mn-desktop" href="<?php echo base_url('danh-muc/' . $row->seolink . '-' . $row->id) ?>"><?php echo $row->catname ?></a>
                                    </li>
                                <?php }?>
                            <?php endforeach ?>
                            </ul>
                            <div class="col-md-4" style="margin-top:20px;float:right;  ">
                    <a href="https://www.youtube.com/channel/UCxti6iKqWj7_vRQMqNEDA_g" target="_blank" class="btn-social btn-youtube"><i class="fa fa-youtube"></i></a>
                    <a href="https://www.facebook.com/vcardvn/" target="_blank" class="btn-social btn-facebook"><i class="fa fa-facebook"></i></a>
                    <a href="https://plus.google.com/107600997067656677331 " target="_blank" class="btn-social btn-google-plus"><i class="fa fa-google-plus"></i></a>
                </div>
                        </div>
                    </div>

                </div>
            </div>
            <script>
                $('#unset_notify').click(function () {
                    if (typeof $('#count_notify') != 'undefined') {
                        $.get("/home/notification/index.html", function (data) {
                            if (data == '0') {
                                $('#unset_notify').html('<i class="fa fa-bell-o"></i>');
                            }
                        });
                    }
                    return false;
                });
            </script>

            <!-- Content home -->
<div class="main-slider">
    <div id="heartslider" class="owl-carousel owl-theme owl-loaded">
    <?php if (!empty($listSlider)): ?>
            <?php foreach ($listSlider as $row): ?>
                <div class="h-item" data-dot="1">
                    <a href="<?php echo $row->link?>"><img src=<?php echo public_url('uploads/adv/slider/' . $row->images) ?> alt="" /></a>
                </div>
            <?php endforeach ?>
        <?php endif ?>
    </div>
</div>
<!-- main-slider -->
<script>
    $('#heartslider').owlCarousel({
        items:1,
        loop:true,
        margin:0,
        responsiveClass:false,
        nav:false,
        dots:true,
        autoplay:true,
        autoHeight:false,
        autoplayTimeout:8000,
        autoplayHoverPause:false,
    });
    $(".m-expand").click(function(){
        if($("html").hasClass('mm-opened mm-background mm-opening'))
        {
           $("html").removeClass("mm-opened mm-background mm-opening");
            $(".mm-menu.mm-offcanvas").css("display","none");
        }
        else
        {
              $("html").addClass("mm-opened mm-background mm-opening");
        $(".mm-menu.mm-offcanvas").css("display","block");
        }
        
    });
</script>