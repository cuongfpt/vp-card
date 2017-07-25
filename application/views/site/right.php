<div class="contain_right col-md-3 col-xs-12 col-sm-12">
    <div class="news">
        <div class="title-news"><span>Tin tức - khuyến mãi</span></div>
        <?php if (!empty($listsale)): ?>
            <ul>
                <?php foreach ($listsale as $row): ?>
                    <li>
                        <div class="item_news">
                            <div class="images_news"><a
                                    href="<?php echo base_url('bai-viet/' . $row->seolink . '-' . $row->id) ?>"><img
                                        src="<?php echo public_url('uploads/news/' . $row->images) ?>"></a></div>
                            <div class="description_news"><a class="title_new"
                                                             href="<?php echo base_url('bai-viet/' . $row->seolink . '-' . $row->id) ?>"><?php echo $row->title ?></a>
                            </div>
                        </div>
                    </li>
                <?php endforeach ?>
            </ul>
        <?php endif ?>
    </div>
    <div class="content_home_left">
        <div class="fb-page" data-href="<?php echo $linkface ?>" data-small-header="false"
             data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
            <blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore"><a
                    href="<?php echo $linkface ?>">VinPlay.com</a></blockquote>
        </div>
    </div>
    <?php if (!empty($adv)): ?>
        <?php foreach ($adv as $row): ?>
            <div class="adv">
                <a href="<?php echo base_url($row->link) ?>"><img
                        src="<?php echo public_url('uploads/adv/adv/' . $row->images) ?>"></a>
            </div>
        <?php endforeach ?>
    <?php endif ?>
</div>
<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8&appId=532997920162382";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

