<section class="content-header">
    <h1>
        Quản lý quảng cáo
    </h1>
</section>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group has-success successful">
                                <?php if (isset($message) && $message): ?>
                                    <?php echo $message ?>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tiêu đề</th>
                                    <th>Vị trí</th>
                                    <th>Hành động</th>
                                </tr>
                                </thead>

                                <?php $i = 1; ?>
                                <?php foreach ($list as $row): ?>
                                    <tr>
                                        <td><?php echo $i ?></td>
                                        <td><?php echo $row->title ?></td>
                                        <td><?php
                                            if($row->position==1){
                                                echo "Slider";
                                            }
                                           else if($row->position==2){
                                                echo "Đối tác";
                                            }
                                           else if($row->position==3){
                                                echo "Quảng cáo";
                                            }

                                            ?></td>
                                        <td>
                                            <a href="<?php echo admin_url('adv/edit/' . $row->id) ?>">
                                                <img src="<?php echo public_url('admin') ?>/images/edit.png"/>
                                            </a>
                                            <a  class="verify_action" href="<?php echo admin_url('adv/delete/' . $row->id) ?>">
                                                <img src="<?php echo public_url('admin') ?>/images/delete.png"/>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div id="dialog-confirm" title="Xóa quảng cáo?">
    <p><span class="ui-icon ui-icon-alert" style="float:left; margin:4px 12px 20px 0;"></span><span style="font-size: 15px;color: #ff0000">Bạn có chắc chắn muốn xóa quảng cáo này không ?</span> </p>
</div>
<script>
    $("#dialog-confirm").css("display","none");
    $(function() {
        $(".verify_action").click(function(e) {
            e.preventDefault();
            var link = $(this).attr("href");
            opendialog(link)
        });
    });
    function  opendialog($link){
        $("#dialog-confirm" ).dialog({
            resizable: false,
            height:160,
            modal: true,
            minWidth: 450,
            buttons: {
                "OK": function() {
                    location.href=$link;
                },
                Cancel: function() {
                    $( this ).dialog( "close" );
                }
            }
        });
    }
</script>