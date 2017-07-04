<div class="contain">
    <div class="contain_left">
        <div class="game-card">
            <div class="bar-card">
                <div class="title">Game nạp thẻ vinplay
                    <span class="line"><span class="line2"></span></span>
                </div>
            </div>
            <div class="game_card_item">
                <?php if (!empty($listhome)): ?>
                    <ul>
                        <?php foreach ($listhome as $row): ?>
                            <li>
                                <div class="item_game">
                                    <a href="<?php echo base_url('bai-viet/' . $row->seolink . '-' . $row->id) ?>"><img
                                            src="<?php echo public_url('uploads/news/' . $row->images) ?>"></a>

                                    <div class="name_game"><a class="title_new"
                                                              href="<?php echo base_url('bai-viet/' . $row->seolink . '-' . $row->id) ?>"><?php echo $row->displayName ?></a>
                                    </div>
                                </div>
                            </li>
                        <?php endforeach ?>
                    </ul>
                <?php endif ?>
            </div>
        </div>
    </div>
    <?php $this->load->view('site/right') ?>
</div>
<?php $this->load->view('site/footer') ?>
