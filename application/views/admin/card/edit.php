<section class="content-header">
    <h1>
        Chỉnh sửa điểm bán thẻ vinplay card
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
                                    <label for="inputEmail3" class="col-sm-2 control-label">Tên thành phố:</label>
                                    <div class="col-sm-3">
                                        <select id="cityid" name="cityid" class="form-control required" onchange="GetDistrictByCityId()">
                                            <?php foreach ($list as $row): ?>
                                                <option value="<?php echo $row->id?>" ><?php echo $row->cityName ?></option>
                                            <?php endforeach?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Tên Quận/Huyện:</label>
                                    <div class="col-sm-3">
                                        <select id="districtid" name="districtid" class="form-control required">
                                            <?php foreach ($listdistrict as $row): ?>
                                                <?php if ($row->id == $info->districtid ) : ?>
                                                    <option value="<?php echo $row->id ?>"
                                                            selected><?php echo $row->districtName ?></option>
                                                <?php else: ?>
                                                    <option
                                                        value="<?php echo $row->id ?>"><?php echo $row->districtName ?></option>
                                                <?php endif ?>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group ">
                                <div class="row">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Tên đường:</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" name="streetName" value="<?php echo $info->streetName?>">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Tên điểm bán thẻ</label>

                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" name="fullName" value="<?php echo $info->fullName?>">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Số điện thoại:</label>

                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" name="phone" value="<?php echo $info->phone?>">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Thứ tự:</label>

                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" name="orderNo" value="<?php echo $info->orderNo?>">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-3">
                                        <input type="submit" value="Cập nhật" name="submit" class="btn btn-primary pull-left">
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
<script>

    function  GetDistrictByCityId(){
        var opt='';
        $.ajax({
            url : "../getDistrictByCityId",
            type : "GET",
            data : {
                id : $("#cityid").val()
            },
            dataType: "json",
            success : function (data){
                $.each( data, function( key, value ) {
                    opt+='<option value='+value.id+' >'+value.districtName+'</option>';
                });
                $("#districtid").html(opt);
            }
        });
    }
</script>