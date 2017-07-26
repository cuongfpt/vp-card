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
            <div id="box_col_left" class="block_more_info">
            <div class="box_width_common">
                <div class="btn_control_col_left"><img class="m-expand icon_hambermenu"></div>
                <div class="block_scoll_menu">
                    <ul class="list_item_panel">
                       <li>
                           <a class="logo-mobile" href="<?php echo base_url("/")?>">
                             <img src="<?php echo public_url("/site/images/logo.png") ?>"></a>
                        </li>
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
            </div>
    </div>
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
<script type="text/javascript">
    $(".block_more_info").click(function() {
        if($(this).hasClass('open'))
        {
            $(this).addClass('close').removeClass('open');
        }
        else
        {
            $(this).addClass('open').removeClass('close');
        }

    });

</script>