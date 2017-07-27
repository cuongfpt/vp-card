
<div class="content-user clearfix">
    <div class="container news-content">
        <div class="items-left">
            <div class="slider-left info-new-detail">
                <h1 class="tittle_news">
                    <span><?php echo $info->title ?></span>
                </h1>
                <div class="text-detail">
                 <p><?php echo $info->description ?></p>
                    <p><?php echo $info->content ?></p>
                </div>
            </div>
        </div>
        <div class="items-right">
        <div class="app-right">
             <?php $this->load->view('site/right-cat') ?>
        </div>
        </div>
    </div>
</div>
<?php $this->load->view('site/footer') ?>
