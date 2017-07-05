<div class="content_faq">
    <div class="bar-card mg">
        <div class="title">Liên hệ</div>
    </div>
    <div class="contain_faq mg">
        <div class="faq_left">
            <div class="faq_menu">
                <?php $i = 0; ?>
                <?php if ($menuContact != null): ?>
                    <ul>
                        <?php foreach ($menuContact as $row): ?>
                            <?php if($row->parent_id !=-1){?>
                                    <li class="cl1">
                                        <a href="<?php echo base_url('lien-he-dt/'.$row->seolink . '-' . $row->id) ?>"><?php echo $row->catname ?></a>
                                    </li>
                            <?php }?>
                        <?php endforeach ?>
                    </ul>
                <?php endif ?>
            </div>
        </div>
        <div class="faq_right">
            <div class="info-new-detail">
                <div class="cat-faq">
                    <?php if ($list != null): ?>
                        <ul>
                            <?php foreach ($list as $row): ?>
                                <li>
                                    <?php echo $row->description?>
                                </li>
                            <?php endforeach ?>
                        </ul>
                    <?php else:?>
                        <p>Dữ liệu đang cập nhật</p>
                    <?php endif?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('site/footer') ?>