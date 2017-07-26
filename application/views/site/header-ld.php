<div class="header">
    <div class="contain-ld">
        <div class="header_left">
            <div class="logo"><a href="<?php echo base_url("/")?>"><img src="<?php echo public_url("/site/images/logo.png") ?>" style="height: 105px"></a></div>
        </div>
        <div class="header_right">
             <div class="menu-ld">
                <ul>
                    <li class="current"><a href="#home">Thẻ Vinplay Card</a></li>
                   <li class=""><a href="#reason">Lý do chọn thẻ vinplay card</a></li>
                   <li class=""><a href="#guide">Mua thẻ</a></li>
                   <li class=""><a href="#vincard">Game nạp thẻ</a></li>
                   <li class=""><a href="#contact">Liên hệ</a></li>
                 
                </ul>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    jQuery(function($){
  $('.menu-ld a').bind('click',function(event){
    var anchor = $(this);

    $('html, body').stop().animate({
        scrollTop: $(anchor.attr('href')).offset().top
    }, 1500);

    event.preventDefault();
  });
});
</script>