
<div class="content-user clearfix">
    <div class="container news-content clearfix">
        <h3 style="color: #fff; background: #1b1464; border-radius: 3px; padding:5px">LIÊN HỆ</h3>
        <div class="col-sm-3 col-md-3" style="padding-right: 0; padding-left: 0;">
         <?php if ($menuContact != null): ?>
            <?php foreach ($menuContact as $row): ?>
                <?php if($row->parent_id !=-1){?>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                           <a href="<?php echo base_url('lien-he-dt/'.$row->seolink . '-' . $row->id) ?>"><?php echo $row->catname ?></a>
                        </h4>
                    </div>
                 </div>
                 <?php }?>
              <?php endforeach ?>
         <?php endif ?>
        </div>
    <div class="col-sm-9 col-md-9" style="padding-right: 0;">
    <div class="cat-faq">
                    <?php $i=1;?>
                    <?php if ($list != null): ?>
                        <ul>
                            <?php foreach ($list as $row): ?>
                                 <?php if($row->parent_id !=-1){?>
                                 <?php if($i==1){?>
                                <li>
                                    <?php echo $row->description?>
                                </li>
                                 <?php }?>
                               <?php } $i++;?>
                            <?php endforeach ?>
                        </ul>
                    <?php else:?>
                        <p>Dữ liệu đang cập nhật</p>
                    <?php endif?>
                </div>
    </div>
</div>
</div>
<?php $this->load->view('site/footer') ?>