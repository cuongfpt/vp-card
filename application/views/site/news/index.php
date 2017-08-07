
<div class="content-user clearfix">
    <div class="container news-content">
        <div class="items-left">
            <div class="slider-left info-new-detail">
                <h1 class="tittle_news">
                    <span><?php echo $info->title ?></span>
                </h1>
                <p class="share">
                    <span class="text-small">
                        <span><?php $date = new DateTime($info->createtime); echo $date->format('d/m/Y')  ?></span></span>
                </p>
                <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                <div class="text-detail">
                 <p><?php echo $info->description ?></p>
                    <p><?php echo $info->content ?></p>
                </div>
            </div>
        </div>
       
             <?php $this->load->view('site/right-cat') ?>
       
    </div>
</div>
<?php $this->load->view('site/footer') ?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.10";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>