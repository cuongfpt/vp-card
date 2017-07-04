<div class="content-user">
    <div class="contain_cat">
        <div class="contain_left">
            <div class="info-new-detail">
                <h1 class="tittle_news"><?php echo $info->title ?></h1>

                <div class="text-detail">
                    <p><?php echo $info->content ?></p>
                </div>
            </div>

        </div>
        <?php $this->load->view('site/right') ?>
    </div>
</div>
<?php $this->load->view('site/footer') ?>