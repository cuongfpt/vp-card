<section class="content-header">
    <h1>
        Cập nhật quảng cáo
    </h1>
</section>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <!-- /.box-header -->
                <form id="form-news-add" class="form" enctype="multipart/form-data" method="post" action=""
                      novalidate="novalidate">
                    <div class="box-body">
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Tiêu đề:</label>

                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="title" name="title"
                                           value="<?php echo $info->title ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Đường dẫn:</label>

                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="link" name="link"
                                           value="<?php echo $info->link ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Thứ tự:</label>

                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="orderno" name="orderno"
                                           value="<?php echo $info->orderNo ?>">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Ví trí:</label>

                                <div class="col-sm-3">
                                    <select class="form-control" id="position" name="position">
                                        <?php if ($info->position == 1): ?>
                                            <option value="1" selected>Slider</option>
                                        <?php else: ?>
                                            <option value="1">Slider</option>
                                        <?php endif ?>
                                        <?php if ($info->position == 2): ?>
                                            <option value="2" selected>Đối tác</option>
                                        <?php else: ?>
                                            <option value="2">Đối tác</option>
                                        <?php endif ?>
                                        <?php if ($info->position == 3): ?>
                                            <option value="3" selected>Quảng cáo</option>
                                        <?php else: ?>
                                            <option value="3">Quảng cáo</option>
                                        <?php endif ?>

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Ảnh quảng cáo:</label>

                                <div class="col-sm-3">
                                    <div class="fileinput fileinput-new" data-provides="fileinput"><span
                                            class="btn btn-primary btn-file"><span
                                                class="fileinput-new">Chọn file </span> <span
                                                class="fileinput-exists">ảnh</span>
                                         <input type="file" id="images" name="images"><div class="ripple-wrapper"></div></span> <span
                                            class="fileinput-filename"></span></div>
                                    <?php if ($info->images != null): ?>
                                        <?php if ($info->position == 1): ?>
                                            <img id="imageselect"
                                                 src="<?php echo public_url("uploads/adv/slider/" . $info->images) ?>"
                                                 style="margin-top: 5px;width: 150px">
                                        <?php endif ?>
                                        <?php if ($info->position == 2): ?>
                                            <img id="imageselect"
                                                 src="<?php echo public_url("uploads/adv/partner/" . $info->images) ?>"
                                                 style="margin-top: 5px;width: 150px">
                                        <?php endif ?>
                                        <?php if ($info->position == 3): ?>
                                            <img id="imageselect"
                                                 src="<?php echo public_url("uploads/adv/adv/" . $info->images) ?>"
                                                 style="margin-top: 5px;width: 150px">
                                        <?php endif ?>
                                    <?php else: ?>
                                        <img id="imageselect" src="../../public/admin/images/no-image.png"
                                             style="margin-top: 5px;width: 150px">
                                    <?php endif; ?>
                                    <input type="hidden" name="imagevalue" value="<?php echo $info->images ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Trạng thái:</label>

                                <div class="col-sm-3">
                                    <select class="form-control" id="status" name="status">
                                        <?php if ($info->status == 0): ?>
                                            <option value="0" selected>Không hiển thị</option>
                                        <?php else: ?>
                                            <option value="0">Không hiển thị</option>
                                        <?php endif ?>
                                        <?php if ($info->status == 1): ?>
                                            <option value="1" selected>Hiển thị</option>
                                        <?php else: ?>
                                            <option value="1">Hiển thị</option>
                                        <?php endif ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-sm-3">
                                    <input type="submit" value="Cập nhật" name="addnews"
                                           class="btn btn-primary pull-right">
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            </form>
        </div>
    </div>
</section>
<script src="../../public/site/js/validate-adv.js"></script>
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#imageselect').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#images").change(function () {
        readURL(this);
    });

</script>