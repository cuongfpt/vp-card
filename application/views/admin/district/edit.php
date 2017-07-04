<section class="content-header">
    <h1>
        Chỉnh sửa quận huyện
    </h1>
</section>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <!-- /.box-header -->
                <form id="form" class="form" enctype="multipart/form-data" method="post" action="">
                    <fieldset>
                        <div class="box-body">
                            <div class="form-group ">
                                <div class="row">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Thành phố</label>

                                    <div class="col-sm-3">
                                        <select id="cityid" name="cityid" class="form-control required">
                                            <?php foreach ($list as $row): ?>
                                                <?php if ($info->cityid == $row->id) : ?>
                                                    <option value="<?php echo $row->id ?>"
                                                            selected><?php echo $row->cityName ?></option>
                                                <?php else: ?>
                                                    <option
                                                        value="<?php echo $row->id ?>"><?php echo $row->cityName ?></option>
                                                <?php endif ?>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Tên quận huyện:</label>

                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" name="districtname"
                                               value="<?php echo $info->districtName ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Thứ tự:</label>

                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" value="<?php echo $info->orderNo ?>"
                                               name="orderNo">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-3">
                                        <input type="submit" value="Cập nhật" name="submit"
                                               class="btn btn-primary pull-left">
                                    </div>
                                    <div class="col-sm-4"></div>
                                </div>
                            </div>

                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</section>
