<section class="content-header">
    <h1>
        Danh sách quận huyện
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
                                <?php if(isset($message) && $message):?>
                                    <?php echo $message?>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>

                                    <th>Tên quận huyện</th>
                                    <th>Tên thành phố</th>
                                    <th>Thứ tự</th>
                                    <th>Hành động</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tbody>
                                <?php foreach ($list as $row): ?>
                                    <tr>
                                        <td><?php echo $row->districtName ?></td>
                                        <td><?php echo $row->cityName ?></td>
                                        <td><?php echo $row->orderNo ?></td>
                                        <td><a href="<?php echo admin_url('district/edit/' . $row->id) ?>">
                                                <img src="<?php echo public_url('admin') ?>/images/edit.png"/>
                                            </a>
                                            <a class="verify_action" id="del_<?php echo $row->id?>" href="<?php echo admin_url('district/delete/' . $row->id) ?>">
                                                <img src="<?php echo public_url('admin') ?>/images/delete.png"/>

                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div id="dialog-confirm" title="Xóa danh mục Quận/Huyện ?">
    <p><span class="ui-icon ui-icon-alert" style="float:left; margin:4px 12px 20px 0;"></span><span style="font-size: 15px;color: #ff0000">Bạn có chắc chắn muốn xóa Quận/Huyện này không ?</span> </p>
</div>

<script>
    $(".successful").click(function(){
        $(".successful").hide();
    });
    $("#dialog-confirm").css("display", "none");
    $(function () {
        $(".verify_action").click(function (e) {
            e.preventDefault();
            var link = $(this).attr("href");
            opendialog(link)
        });
    });
    function opendialog($link) {
        $("#dialog-confirm").dialog({
            resizable: false,
            height: 160,
            modal: true,
            minWidth: 450,
            buttons: {
                "OK": function () {
                    location.href = $link;
                },
                Cancel: function () {
                    $(this).dialog("close");
                }
            }
        });
    }
</script>