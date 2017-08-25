<div class="news-sale col-md-3">
    <div class="title-news-sale">
            <a href="/tin-tuc" style="color:#428bca">Tin tức - Khuyến mại <i class="fa fa-angle-right"></i></a>
        </div>
        <?php if (!empty($listsale)): ?>
        
           <?php foreach ($listsale as $row): ?>
            <ul class="list-unstyled" style="padding-bottom: 0px">
                    <li>
                        <a href="<?php echo base_url('bai-viet/' . $row->seolink . '-' . $row->id) ?>" class="info-news clearfix">
                            </a><div class="info-news-left"><a href="?page=news&amp;id=225" class="info-news clearfix">
                                </a><a href="<?php echo base_url('bai-viet/' . $row->seolink . '-' . $row->id) ?>">
                                    <img alt="" src="<?php echo public_url('uploads/news/' . $row->images) ?>" width="50" height="40"></a>
                            </div>
                            <div class="info-news-right">

                                <h3 class="h3TitleNews">
                                    <a href="<?php echo base_url('bai-viet/' . $row->seolink . '-' . $row->id) ?>">
                                        <?php echo $row->title ?>
                                    </a>
                                </h3>

                            </div>
                        
                    </li>
                     </ul>
                     <?php endforeach ?>
               
                 <?php endif ?>
    </div>
    <div class="news-sale col-md-3">
        <div class="fb-page" data-href="<?php echo $linkface ?>" data-small-header="false" data-width="220px"
             data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="false">
            <blockquote cite="<?php echo $linkface ?>" class="fb-xfbml-parse-ignore"><a
                    href="<?php echo $linkface ?>">VinPlay.com</a></blockquote>
        </div>
    </div>
    <div class="news-sale col-md-3">
         <?php if (!empty($adv)): ?>
        <?php foreach ($adv as $row): ?>
            <div style="padding: 10px 0px 0px 0px;">
                    <div class="content">
                         <a href="<?php echo base_url($row->link) ?>"><img
                        src="<?php echo public_url('uploads/adv/adv/' . $row->images) ?>"></a>
                    </div>
                
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

