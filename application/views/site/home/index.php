<div class="news clearfix">
    <div class="slider-news col-md-8">
    <div class="title-news-sale" style="padding-left: 20px;">
        <h1 class="h1GameNapThe">
                <a href="#" style="font-weight: bold;">ĐỐI TÁC PHÂN PHỐI THẺ VINPLAY CARD
                    <i class="fa fa-angle-right"></i></a>
            </h1>
    </div>
    <div id="con">
            <div id="gallery-it">
                <?php if (!empty($listhome)): ?>
                     <?php foreach ($listhome as $row): ?>
                         <?php if($row->description=="" || $row->body==""):?>
                            <a href="#"><img src="<?php echo public_url('uploads/news/' . $row->images) ?>"><span> </span></a>
                        <?php else:?>
                             <a href="<?php echo base_url('bai-viet/' . $row->seolink . '-' . $row->id) ?>">
                             <img src="<?php echo public_url('uploads/news/' . $row->images) ?>"><span> </span></a>
                         <?php endif?> 
                     <?php endforeach ?>
                <?php endif ?>
            </div>
        </div>
    </div>
    <?php $this->load->view('site/right') ?>
</div>
<?php $this->load->view('site/footer') ?>
