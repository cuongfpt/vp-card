<section class="content-header">
    <h1>
        Thêm mới landding
    </h1>
</section>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <!-- /.box-header -->
                <form id="form-news-add" class="form" enctype="multipart/form-data" method="post" action=""
                      novalidate="novalidate">
                    <fieldset
                    <div class="box-body">
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Ảnh nền 1:</label>

                                <div class="col-sm-3">
                                    <div class="fileinput fileinput-new" data-provides="fileinput"><span
                                            class="btn btn-primary btn-file"><span
                                                class="fileinput-new">Chọn file </span> <span
                                                class="fileinput-exists">ảnh</span>
                                         <input type="file" id="imagesbg1" name="imagesbg1"><div
                                                class="ripple-wrapper"></div></span> <span
                                            class="fileinput-filename"></span></div>
                                    <input type="hidden" name="hdnimagesbg1" value="<?php echo $info->bg1 ?>">
                                    <?php if ($info->bg1 != null): ?>
                                        <img id="imageselectbg1"
                                             src="<?php echo public_url("uploads/landding/" . $info->bg1) ?>"
                                             style="margin-top: 5px;width: 150px">
                                    <?php else: ?>
                                        <img id="imageselectbg1" src="../../public/admin/images/no-image.png"
                                             style="margin-top: 5px;width: 150px">
                                    <?php endif ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Ảnh nền 2:</label>

                                <div class="col-sm-3">
                                    <div class="fileinput fileinput-new" data-provides="fileinput"><span
                                            class="btn btn-primary btn-file"><span
                                                class="fileinput-new">Chọn file </span> <span
                                                class="fileinput-exists">ảnh</span>
                                         <input type="file" id="imagesbg2" name="imagesbg2"><div
                                                class="ripple-wrapper"></div></span> <span
                                            class="fileinput-filename"></span></div>
                                    <input type="hidden" name="hdnimagesbg2" value="<?php echo $info->bg2 ?>">
                                    <?php if ($info->bg2 != null): ?>
                                        <img id="imageselectbg2"
                                             src="<?php echo public_url("uploads/landding/" . $info->bg2) ?>"
                                             style="margin-top: 5px;width: 150px">
                                    <?php else: ?>
                                        <img id="imageselectbg2" src="../../public/admin/images/no-image.png"
                                             style="margin-top: 5px;width: 150px">
                                    <?php endif ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Ảnh nền 3:</label>

                                <div class="col-sm-3">
                                    <div class="fileinput fileinput-new" data-provides="fileinput"><span
                                            class="btn btn-primary btn-file"><span
                                                class="fileinput-new">Chọn file </span> <span
                                                class="fileinput-exists">ảnh</span>
                                         <input type="file" id="imagesbg3" name="imagesbg3"><div
                                                class="ripple-wrapper"></div></span> <span
                                            class="fileinput-filename"></span></div>
                                    <input type="hidden" name="hdnimagesbg3" value="<?php echo $info->bg3 ?>">
                                    <?php if ($info->bg3 != null): ?>
                                        <img id="imageselectbg3"
                                             src="<?php echo public_url("uploads/landding/" . $info->bg3) ?>"
                                             style="margin-top: 5px;width: 150px">
                                    <?php else: ?>
                                        <img id="imageselectbg3" src="../../public/admin/images/no-image.png"
                                             style="margin-top: 5px;width: 150px">
                                    <?php endif ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Ảnh vinplay card:</label>

                                <div class="col-sm-3">
                                    <div class="fileinput fileinput-new" data-provides="fileinput"><span
                                            class="btn btn-primary btn-file"><span
                                                class="fileinput-new">Chọn file </span> <span
                                                class="fileinput-exists">ảnh</span>
                                         <input type="file" id="imagescard" name="imagescard"><div
                                                class="ripple-wrapper"></div></span> <span
                                            class="fileinput-filename"></span></div>
                                    <input type="hidden" name="hdnimagescard" value="<?php echo $info->imagescard ?>">
                                    <?php if ($info->imagescard != null): ?>
                                        <img id="imageselectbg3"
                                             src="<?php echo public_url("uploads/landding/" . $info->imagescard) ?>"
                                             style="margin-top: 5px;width: 150px">
                                    <?php else: ?>
                                        <img id="imageselectcard" src="../../public/admin/images/no-image.png"
                                             style="margin-top: 5px;width: 150px">
                                    <?php endif ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Ảnh nền 4:</label>

                                <div class="col-sm-3">
                                    <div class="fileinput fileinput-new" data-provides="fileinput"><span
                                            class="btn btn-primary btn-file"><span
                                                class="fileinput-new">Chọn file </span> <span
                                                class="fileinput-exists">ảnh</span>
                                         <input type="file" id="imagesbg4" name="imagesbg4"><div
                                                class="ripple-wrapper"></div></span> <span
                                            class="fileinput-filename"></span></div>
                                    <input type="hidden" name="hdnimagesbg4" value="<?php echo $info->bg4 ?>">
                                    <?php if ($info->bg4 != null): ?>
                                        <img id="imageselectbg4"
                                             src="<?php echo public_url("uploads/landding/" . $info->bg4) ?>"
                                             style="margin-top: 5px;width: 150px">
                                    <?php else: ?>
                                        <img id="imageselectbg4" src="../../public/admin/images/no-image.png"
                                             style="margin-top: 5px;width: 150px">
                                    <?php endif ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Tiêu đề chiết khấu:</label>

                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="titleck" name="titleck" value="<?php echo $info->titlers1?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Nội dung chiết khấu:</label>

                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="contentck" name="contentck" value="<?php echo $info->textrs1?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Tiêu đề nhà cung cấp:</label>

                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="titleagent" name="titleagent" value="<?php echo $info->titlers2?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Nội dung nhà cung cấp:</label>

                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="contentagent" name="contentagent"
                                           value="<?php echo $info->textrs2?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Tiêu đề chăm sóc:</label>

                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="titlesupport" name="titlesupport"
                                           value="<?php echo $info->titlers3?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Nội dung chăm sóc:</label>

                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="contentsupport" name="contentsupport"
                                           value="<?php echo $info->textrs3?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Tiêu đề hướng dẫn mua thẻ:</label>

                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="titleguide" name="titleguide" value="<?php echo $info->titleguide?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Tiêu đề mua online:</label>

                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="titlebuy" name="titlebuy" value="<?php echo $info->titlebuy?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Ảnh mua online:</label>

                                <div class="col-sm-3">
                                    <div class="fileinput fileinput-new" data-provides="fileinput"><span
                                            class="btn btn-primary btn-file"><span
                                                class="fileinput-new">Chọn file </span> <span
                                                class="fileinput-exists">ảnh</span>
                                         <input type="file" id="imagesbuy" name="imagesbuy"><div
                                                class="ripple-wrapper"></div></span> <span
                                            class="fileinput-filename"></span></div>
                                    <input type="hidden" name="hdnimagesbuy" value="<?php echo $info->imagesBuy ?>">
                                    <?php if ($info->imagesBuy != null): ?>
                                        <img id="imageselectbuy"
                                             src="<?php echo public_url("uploads/landding/" . $info->imagesBuy) ?>"
                                             style="margin-top: 5px;width: 150px">
                                    <?php else: ?>
                                        <img id="imageselectbuy" src="../../public/admin/images/no-image.png"
                                             style="margin-top: 5px;width: 150px">
                                    <?php endif ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Tiêu đề điểm bán thẻ:</label>

                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="titlelocation" name="titlelocation"
                                           value="<?php echo $info->titlelocaltion?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Ảnh điểm bán thẻ:</label>

                                <div class="col-sm-3">
                                    <div class="fileinput fileinput-new" data-provides="fileinput"><span
                                            class="btn btn-primary btn-file"><span
                                                class="fileinput-new">Chọn file </span> <span
                                                class="fileinput-exists">ảnh</span>
                                         <input type="file" id="imageslocation" name="imageslocation"><div
                                                class="ripple-wrapper"></div></span> <span
                                            class="fileinput-filename"></span></div>
                                    <input type="hidden" name="hdnimageslocation" value="<?php echo $info->imagesLocation ?>">
                                    <?php if ($info->imagesLocation != null): ?>
                                        <img id="imageselectlocaltion"
                                             src="<?php echo public_url("uploads/landding/" . $info->imagesLocation) ?>"
                                             style="margin-top: 5px;width: 150px">
                                    <?php else: ?>
                                        <img id="imageselectlocaltion" src="../../public/admin/images/no-image.png"
                                             style="margin-top: 5px;width: 150px">
                                    <?php endif ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Tiêu đề web bán thẻ:</label>

                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="titleweb" name="titleweb" value="<?php echo $info->titleweb?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Ảnh web bán thẻ:</label>

                                <div class="col-sm-3">
                                    <div class="fileinput fileinput-new" data-provides="fileinput"><span
                                            class="btn btn-primary btn-file"><span
                                                class="fileinput-new">Chọn file </span> <span
                                                class="fileinput-exists">ảnh</span>
                                         <input type="file" id="imagesweb" name="imagesweb"><div
                                                class="ripple-wrapper"></div></span> <span
                                            class="fileinput-filename"></span></div>
                                    <input type="hidden" name="hdnimagesweb" value="<?php echo $info->imagesWeb ?>">
                                    <?php if ($info->imagesWeb != null): ?>
                                        <img id="imageselectweb"
                                             src="<?php echo public_url("uploads/landding/" . $info->imagesWeb) ?>"
                                             style="margin-top: 5px;width: 150px">
                                    <?php else: ?>
                                        <img id="imageselectweb" src="../../public/admin/images/no-image.png"
                                             style="margin-top: 5px;width: 150px">
                                    <?php endif ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Hotline:</label>

                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="hotline" name="hotline" value="<?php echo $info->hotline?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Facebook:</label>

                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="facebook" name="facebook" value="<?php echo $info->facebook?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Email:</label>

                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="email" name="email" value="<?php echo $info->email?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Link xem:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="link" name="link" value="<?php echo $info->link?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Nội dung vinplay card:</label>

                                <div class="col-sm-8">
                                    <textarea id="contentcard" name="contentcard" rows="50" cols="80"><?php echo $info->titlevincard?>
                                    </textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Lý do chọn:</label>

                                <div class="col-sm-8">
                                    <textarea id="contentreason" name="contentreason" rows="50" cols="80"><?php echo $info->reason?>
                                    </textarea>
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
                </form>
            </div>
        </div>
</section>
<script>
    $(function () {
        CKEDITOR.replace('contentreason');
        CKEDITOR.replace('contentcard');
    });
    function readURL(input, id) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $(id).attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#imagesbg1").change(function () {
        readURL(this, "#imageselectbg1");
    });
    $("#imagesbg2").change(function () {
        readURL(this, "#imageselectbg2");
    });
    $("#imagesbg3").change(function () {
        readURL(this, "#imageselectbg3");
    });
    $("#imagesbg4").change(function () {
        readURL(this, "#imageselectbg4");
    });
    $("#imagesbuy").change(function () {
        readURL(this, "#imageselectbuy");
    });
    $("#imageslocation").change(function () {
        readURL(this, "#imageselectlocaltion");
    });
    $("#imagesweb").change(function () {
        readURL(this, "#imageselectweb");
    });
    $("#imagescard").change(function () {
        readURL(this,"#imageselectcard");
    });
</script>
