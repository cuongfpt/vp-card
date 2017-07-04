<div class="content_faq">
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
</div>
<?php $this->load->view('site/footer') ?>
<script>
    $(document).ready(function () {
        listnew($("#nav > li > a").attr('id'));
        $('#nav > li > a').click(function(){
            if ($(this).attr('class') != 'active'){
                $('#nav li ul').slideUp();
                $(this).next().slideToggle();
                $('#nav li a').removeClass('active');
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
                    ht+='<li>';
                    ht+='<a  href="../huong-dan/'+value.seoLink+'-'+value.id+'">';
                    ht+= value.title;
                    ht+= '</a>';
                    ht+='</li>';
                });

                $(".sub").html(ht);

            }
        });
    }
</script>