<div class="content-user clearfix">
    <div class="container news-content">
        <div class="items-left">
            <ul class="tabs-menu">
                        <?php $i = 1; ?>
                        <?php if (!empty($listcat)): ?>
                            <?php foreach ($listcat as $row): ?>
                                <?php if ($i == 1): ?>
                                    <li class="activetab"><a href="#tab-<?php echo $i ?>"
                                                           id="<?php echo $row->id ?>"><?php echo $row->catname ?></a>
                                    </li>
                                <?php else: ?>
                                    <li><a href="#tab-<?php echo $i ?>"
                                           id="<?php echo $row->id ?>"><?php echo $row->catname ?></a></li>
                                <?php endif ?>
                                <?php $i++; ?>
                            <?php endforeach ?>
                        <?php endif ?>
                    </ul>
                    <div class="tab">
                        <?php $i = 1; ?>
                        <?php if (!empty($listcat)): ?>
                            <?php foreach ($listcat as $row): ?>
                                <div id="tab-<?php echo $i ?>" class="tab-content">

                                </div>
                                <?php $i++; ?>
                            <?php endforeach ?>
                        <?php endif ?>
                    </div>
        </div>

        <div class="items-right">
            <div class="app-right">
                 <?php $this->load->view('site/right') ?>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('site/footer') ?>
<script>
    $(document).ready(function () {
        listnew($(".activetab a").attr('id'));
        $(".tabs-menu a").click(function (event) {
            event.preventDefault();
            $(this).parent().addClass("activetab");
            $(this).parent().siblings().removeClass("activetab");
            var tab = $(this).attr("href");
            $(".tab-content").not(tab).css("display", "none");
            $(tab).fadeIn();
            listnew($(this).attr("id"));

        });
        function listnew($catid){
            var itemnews = '';
            $.ajax({
                url: "<?php echo base_url('news/get_list_new_by_cat'); ?>",
                type: "GET",
                data: {
                    catid: $catid,
                },
                dataType: "text",
                success: function (data) {
                    $.each(JSON.parse(data), function(k, value) {
                        itemnews += '<div class="well">';
                        itemnews += '<div class="media">';
                        itemnews += ' <a class="pull-left" href="../bai-viet/'+value.seoLink+'-'+value.id+'">';
                        itemnews += '<img alt="img_news" src="../public/uploads/news/'+value.images+'">';
                        itemnews += '</a>';
                        itemnews += '<div class="media-body">';
                        itemnews += ' <h1 class="media-heading"><a href="../bai-viet/'+value.seoLink+'-'+value.id+'">';
                        itemnews += value.title;
                        itemnews += '</a></h1>';
                        itemnews += ' <p>';
                        itemnews += value.description;
                        itemnews += '</p>';
                        itemnews += '<ul class="list-inline list-unstyled">';
                        itemnews += '<li><span>'+value.createTime+'</span></li>';
                        itemnews += ' <li>|</li>';
                        itemnews += '  <span><a href="../bai-viet/'+value.seoLink+'-'+value.id+'">Chi Tiết&gt;&gt;</a></span>';
                        itemnews += '</ul>';
                        itemnews += '  </div>';
                        itemnews += '  </div>';
                        itemnews += ' </div>';

                    });
                    $(".tab-content").html(itemnews);

                }
            });
        }
    });
</script>