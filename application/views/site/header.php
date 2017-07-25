<div class="header">
    <div class="contain">
        <div class="header_left">
            <div class="logo"><a href="<?php echo base_url("/")?>"><img src="<?php echo public_url("/site/images/logo.png") ?>" style="height: 105px"></a></div>
        </div>
        <div class="header_right">
            <div class="menu">
                <ul>
                    <li class="current"><a href="<?php echo base_url("/")?>">Mua mã thẻ</a></li>
                    <li><a href="<?php echo base_url("/the-vinplay")?>">Thẻ vinplay</a></li>
                </ul>
            </div>
            
        </div>
    </div>
    <div class="topmenu">
                <div class="menu_mobie clearfix">
                    <a href="#menu" class="m-expand"></a>
                    <div class="logo">
                        <a class="logo-mobile" href="<?php echo base_url("/")?>">
                            <img src="<?php echo public_url("/site/images/logo.png") ?>"></a>
                    </div>
                    <div class="mdland-navigator">
                        <div class="menu-navigator clearfix">
                            <ul class="nav navbar-nav">
                                
                                <li>
                                    <a href="https://v-card.vn/diem-ban/" class="mn-desktop">MUA MÃ THẺ </a>
                                </li>
                                <li>
                                    <a href="https://v-card.vn/gioi-thieu-the-vcard/" class="mn-desktop">THẺ VCARD </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
</div>
<div class="slider">
    <div id="heartslider" class="owl-carousel">

        <?php if (!empty($listSlider)): ?>
            <?php foreach ($listSlider as $row): ?>
                <div class="h-item" data-dot="1">
                    <a href="<?php echo $row->link?>"><img src=<?php echo public_url('uploads/adv/slider/' . $row->images) ?> alt="" /></a>
                </div>
            <?php endforeach ?>
        <?php endif ?>


    </div>
</div>
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
</script>