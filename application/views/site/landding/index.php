<?php $i = 1; ?>
<?php foreach ($list as $row): ?>
    <?php if ($i == 1): ?>
        <div class="slider">
        <img src="<?php echo public_url("uploads/landding/" . $row->bg1) ?>" style="width: 100%">
        <div class="reason" id="reason">
            <div class="reason_text">
                <div class="content">
                    <p><span class="n1"></span> <span style="color: #F7931E;font-weight: bold">4 lý do</span> bạn </p>

                    <p>nên chọn thẻ </p>

                    <p style="color: #2E3192;font-weight: bold">vinplay-card<span class="n2"></span></p>
                </div>
            </div>
            <div class="option_card">
                <ul>
                    <li>
                        <div class="item_option1">
                           
                        </div>
                    </li>    
                    <li>
                        <div class="item_option">
                            <div class="top_option1"><span><?php echo $row->titlers1 ?></span></div>
                            <div class="mid_option1"><span><?php echo $row->textrs1 ?></span>
                            </div>
                            <div class="bot_option1"></div>
                        </div>
                    </li>
                    <li>
                        <div class="item_option">
                            <div class="top_option2"><span><?php echo $row->titlers2 ?></span></div>
                            <div class="mid_option2"><span><?php echo $row->textrs2 ?></span>
                            </div>
                            <div class="bot_option2"></div>
                        </div>
                    </li>
                    <li>
                        <div class="item_option">
                            <div class="top_option3"><span><?php echo $row->titlers3 ?></span></div>
                            <div class="mid_option3"><span><?php echo $row->textrs3 ?></span>
                            </div>
                            <div class="bot_option3"></div>
                        </div>
                    </li>
                    <li>
                        <div class="item_option">
                            <div class="top_option4"><span>MỆNH GIÁ THẺ ĐA DẠNG VÀ CÓ GIÁ TRỊ LỚN</span></div>
                            <div class="mid_option4">
                                <div class="top_text">các mệnh giá bao gồm</div>
                                    <div class="old">
                                        <a>#20.000 VND</a>
                                        <div class="icon-check"></div>
                                    </div>
                                    <div class="event"><a>#50.000 VND</a>

                                        <div class="icon-check"></div>
                                    </div>
                                    <div class="old"><a>#100.000 VND</a>

                                        <div class="icon-check"></div>
                                    </div>
                                    <div class="event"><a>#200.000 VND</a>

                                        <div class="icon-check"></div>
                                    </div>
                                    <div class="old"><a>#500.000 VND</a>

                                        <div class="icon-check"></div>
                                    </div>
                                    <div class="event"><a>#1.000.000 VND</a>

                                        <div class="icon-check"></div>
                                    </div>
                                    <div class="old"><a>#2.000.000 VND</a>

                                        <div class="icon-check"></div>
                                    </div>
                            </div>
                            <div class="bot_option4"></div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="guide" id="guide" style="background-image: url(<?php echo public_url("uploads/landding/" . $row->bg2);?>)">
            <div class="guide_text"><?php echo $row->titleguide ?>
                <div class="line_ft"><img src="<?php echo public_url("/site/images/line.jpg") ?> "></div>
            </div>
            <div class="guide_content">
                <ul>
                    <li>
                        <div class="guide_item">
                            <div class="guide_title"><?php echo $row->titlebuy ?></div>
                            <div class="guide_item">
                                <img src="<?php echo public_url("uploads/landding/" . $row->imagesBuy) ?>"
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="guide_item">
                            <div class="guide_title"><?php echo $row->titlelocaltion ?></div>
                            <div class="guide_item">
                                <img src="<?php echo public_url("uploads/landding/" . $row->imagesLocation) ?>"
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="guide_item">
                            <div class="guide_title"><?php echo $row->titleweb ?></div>
                            <div class="guide_item">
                                <img src="<?php echo public_url("uploads/landding/" . $row->imagesWeb) ?>"
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="line_ft"><img src="<?php echo public_url("/site/images/line.jpg") ?> "></div>
            </div>
            <div class="phone">
                <div class="phone_content">
                    <img src="<?php echo public_url("/site/images/phone.png") ?> ">
                </div>
                <div class="phone_text">
                    Gọi điện trực tiếp
                </div>
                <div class="phone_text1">
                    hotline <?php echo $row->hotline ?>
                </div>
            </div>
        </div>
        <div class="vincard" id="vincard" style="background-image: url(<?php echo public_url("uploads/landding/" . $row->bg3);?>)">
                <img src="<?php echo public_url("uploads/landding/" . $row->imagescard) ?>">
            <div class="vincard_text">
                <?php echo $row->titlevincard ?>
            </div>
            <div class="btn_xem">
                <a href="<?php echo $row->link ?>"><img src="<?php echo public_url("/site/images/xem.png") ?> "></a>
            </div>
        </div>
        <div class="contact" id="contact" style="background-image: url(<?php echo public_url("uploads/landding/" . $row->bg4);?>)">
            <div class="contact_text"> Liên hệ với chúng tôi
                <div class="line_ft"><img src="<?php echo public_url("/site/images/line.jpg") ?> ">
                </div>
            </div>
            <div class="contact_form">
                <table>
                    <tr>
                        <td><input type="text" placeholder="Tên bạn .." id="txtfullname"></td>
                        <td><input type="text"  placeholder="Email.." id="txtemail"></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <textarea cols="10" rows="5" placeholder="Lời nhắn ..." id="txtcontent"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <img src="<?php echo public_url("/site/images/send.png") ?> " id="btnsend" style="cursor: pointer">
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    <?php endif ?>
    <?php $i++; ?>
<?php endforeach ?>
<script>
    $("#btnsend").click(function(){
        if($("#txtfullname").val()!="")
        {
            alert("Tên bạn không được để trống");
            $("#txtfullname").focus();
            return false;
        }
        else if($("#email").val()!=""){
            alert("Email không được để trống");
            $("#txtfullname").focus();
            return false;
        }
        else{
        $.ajax({
            url : "<?php echo base_url('landding/addContact'); ?>",
            type : "GET",
            data : {
                fullname : $("#txtfullname").val(),
                email : $("#txtemail").val(),
                content : $("#txtcontent").val()
            },
            dataType: "text",
            success : function (data){
               alert(data);
            }
        });
        }
    });
</script>
