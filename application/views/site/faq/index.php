<div class="content_faq">
    <div class="bar-card mg">
        <div class="title">Hỏi đáp</div>
    </div>
    <div class="contain_faq mg">
        <div class="faq_left">
            <div class="faq_menu">
                <?php $i = 0; ?>
                <?php if ($menufaq != null): ?>
                    <ul>
                        <?php foreach ($menufaq as $row): ?>
                            <?php if ($row->parent_id != -1): ?>
                                <?php if ($i == 1): ?>
                                    <li class="cl1">
                                        <a href="<?php echo base_url('hoi-dap-l/'.$row->seolink . '-' . $row->id) ?>"><?php echo $row->catname ?></a>
                                    </li>
                                <?php endif ?>
                                <?php if ($i == 2): ?>
                                    <li class="cl2">
                                        <a href="<?php echo base_url('hoi-dap-l/'.$row->seolink . '-' . $row->id) ?>"><?php echo $row->catname ?></a>
                                    </li>
                                <?php endif ?>
                                <?php if ($i == 3): ?>
                                    <li class="cl3">
                                        <a href="<?php echo base_url('hoi-dap-l/'.$row->seolink . '-' . $row->id) ?>"><?php echo $row->catname ?></a>
                                    </li>
                                <?php endif ?>
                                <?php if ($i == 4): ?>
                                    <li class="cl4">
                                        <a href="<?php echo base_url('hoi-dap-l/'.$row->seolink . '-' . $row->id) ?>"><?php echo $row->catname ?></a>
                                    </li>
                                <?php endif ?>

                            <?php endif ?>
                            <?php $i++; ?>
                        <?php endforeach ?>
                    </ul>
                <?php endif ?>
            </div>
        </div>
        <div class="faq_right">
            <div class="info-new-detail">
                <h1 class="tittle_news"><?php echo $info->question?> </h1>

                <div class="text-detail">
                    <p><?php echo  $info->answer ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('site/footer') ?>