<!-- <div class="content_faq">
    <div class="bar-card mg">
        <div class="title">Hướng dẫn</div>
    </div>
    <div class="contain_faq mg">
        <div class="faq_left">
            <ul id="nav">
                <?php if ($listcat != null): ?>
                        <?php foreach ($listcat as $row): ?>
                            <li><a href="#" id="<?php echo $row->id?>"><?php echo $row->catname?></a>
                                <ul class="sub">

                                </ul>
                            </li>
                        <?php endforeach ?>
                <?php endif ?>
            </ul>
        </div>
        <div class="faq_right">
            <div class="info-new-detail">
                <h1 class="tittle_news"><?php echo $info->title ?></h1>
                <div class="text-detail">
                    <p><?php echo $info->content ?></p>
                </div>
            </div>
        </div>
    </div>
</div> -->
<div class="content-user clearfix">
    <div class="container news-content clearfix">
        <h3 style="color: #fff; background: #592fa9; border-radius: 3px; padding:5px">HƯỚNG DẪN</h3>
        <div class="col-sm-3 col-md-3" style="padding-right: 0; padding-left: 0;">
         <?php if ($listcat != null): ?>
            <?php foreach ($listcat as $row): ?>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse8" id="<?php echo $row->id?>" class="collapsed" aria-expanded="false"><span class=""></span><?php echo $row->catname?></a>
                        </h4>
                    </div>
                    <div id="collapse8" class="panel-collapse collapse" aria-expanded="false" style="height: 646px;">
                    </div>
                 </div>
              <?php endforeach ?>
         <?php endif ?>
        </div>
    <div class="col-sm-9 col-md-9" style="padding-right: 0;">
        <div class="well">
            <h1>
                <span ><?php echo $info->title ?></span></h1>
            <div class="text-detail">
                 <p><?php echo $info->content ?></p>
            </div>
        </div>
    </div>
</div>
</div>
<?php $this->load->view('site/footer') ?>
<script>
    $(document).ready(function () {
        listnew($(".panel-title > a").attr('id'));
        $('.panel-title > a').click(function(){
            if ($(this).attr('class') != 'active'){
                $('#collapse8').slideUp();
                $(this).next().slideToggle();
                $('panel-title > a').removeClass('active');
                $(this).addClass('active');
            }
            listnew($(this).attr('id'));
        });
    });
    function listnew($catid){
        var ht = '';
        $.ajax({
            url: "<?php echo base_url('news/get_list_new_by_cat'); ?>",
            type: "GET",
            data: {
                catid: $catid,
            },
            dataType: "text",
            success: function (data) {
                  
                    $.each(JSON.parse(data), function(k, value) {
                        ht+='<div class="panel-body">';
                        ht+='         <table class="table">';
                        ht+='           <tbody>';
                        ht+=' <tr>';
                        ht+='   <td>';
                        ht+='     <span class="text-primary"></span>';
                        ht+='      <a href="../huong-dan/'+value.seoLink+'-'+value.id+'">'+value.title+'</a>';
                        ht+='   </td>';
                        ht+=' </tr>';
                        ht+='           </tbody>';
                        ht+='        </table>';
                        ht+='</div>';
                    });
                   
                $("#collapse8").html(ht);
            }
        });
    }
</script>