<div class="contain ">
    <div class="contain_left col-md-8">
        <div class="game-card">
            <div class="bar-card">
                <div class="title">Game nạp thẻ vinplay
                </div>
            </div>
            <div class="game_card_item">
                <?php if (!empty($listhome)): ?>
                    <ul>
                        <?php foreach ($listhome as $row): ?>
                            <li>
                                <div class="item_game col-sm-12 col-xs-12 col-md-12 ">
                                    <a href="<?php echo base_url('bai-viet/' . $row->seolink . '-' . $row->id) ?>"><img
                                            src="<?php echo public_url('uploads/news/' . $row->images) ?>"></a>
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
