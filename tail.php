<?php if (!defined('_GNUBOARD_')) exit; ?>
</main>
<!-- } 콘텐츠 끝 -->
<!-- 하단 시작 { -->
<footer id="footer">
    <div class="inner">
        <h2 class="f-logo"><a href="/">RARACOST</a></h2>
        <div class="f-wrap">
            <ul class="f-menu">
                <li><a href="<?php echo get_pretty_url('content', 'company'); ?>">가맹 상담 신청</a></li>
                <li><a href="<?php echo get_pretty_url('content', 'privacy'); ?>">개인정보 처리방침</a></li>
                <li><a href="<?php echo get_pretty_url('content', 'provision'); ?>">서비스이용약관</a></li>
            </ul>
            <p class="f-inquiry">문의전화<strong>070.8884.3235</strong></p>
            <div class="f-copy">
                <ul class="clearfix">
                    <li>상호명: ㈜라라에프앤비</li>
                    <li>F&B대표: 안영진</li>
                    <li>사업자등록번호: 552-88-00775</li>
                    <li>고객센터: 070-8884-3235</li>
                    <li>평일 09:00-17:50 점심 12:00-13:00</li>
                    <li>사업장소재지: <address>대구광역시 수성구 들안로 33-1 3층 일부, 4층</address></li>
                    <li>서울본부: <address>서울특별시 마포구 만리재로 14. 르네상스타워 16F 1609호</address></li>
                </ul>
                <p class="f-copy-copy">CopyrightⓒRARACOST All rights Reserved</p>
            </div>
        </div>
    </div>
</footer>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="/src/jquery.vide.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 160,
        autoplay: {
        delay: 3000,
        disableOnInteraction: false,
        
        },
        loop: true,
        observer: true,
        observeParents: true,
        pagination: {
        el: ".swiper-pagination",
        clickable: true,
        }
        });
    </script>
<div id="ft">
    <button type="button" id="top_btn">
    	<i class="fa fa-arrow-up" aria-hidden="true"></i><span class="sound_only">상단으로</span>
    </button>
    <script>
    $(function() {
        $("#top_btn").on("click", function() {
            $("html, body").animate({scrollTop:0}, '5000');
            return false;
        });
    });
    </script>
</div>

<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_PATH."/tail.sub.php");