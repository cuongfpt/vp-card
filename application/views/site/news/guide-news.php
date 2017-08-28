
<div class="content-user clearfix">
    <div class="container news-content clearfix">
        <h3 style="color: #fff; background: #1b1464; border-radius: 3px; padding:5px">HƯỚNG DẪN</h3>
        <div class="col-sm-3 col-md-3" style="padding-right: 0; padding-left: 0;">
         <?php if ($listcat != null): ?>
            <?php foreach ($listcat as $row): ?>
                <?php if ($row->parent_id != "-1"): ?>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse8" id="<?php echo $row->id?>" class="collapsed" aria-expanded="false"><span class=""></span><?php echo $row->catname?></a>
                        </h4>
                    </div>
                    <div id="collapse8" class="panel-collapse collapse" aria-expanded="false" style="height: 646px;">
                    </div>
                 </div>
               <?php endif ?>
              <?php endforeach ?>
         <?php endif ?>
        </div>
    <div class="col-sm-9 col-md-9" style="padding-right: 0;">
        <div class="well" style="background: #fff;">
             <?php $i=1;?>
                    <?php if ($info != null): ?>
                        <ul>
                            <?php foreach ($info as $row): ?>
                                 <?php if($i==1){?>
                                  <h1>
                                        <span ><?php echo $row->title ?></span></h1>
                                    <div class="text-detail">
                                         <p><?php echo $row->content ?></p>
                                    </div>
                               <?php }
                                $i++;?>
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
                        ht+='      <a href="../huong-dan-dt/'+value.seoLink+'-'+value.id+'">'+value.title+'</a>';
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