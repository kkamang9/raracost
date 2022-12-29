<?php
include_once('./_common.php');

define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_PATH.'/head.php');
?>

    <h2 class="hidden">메인컨텐츠</h2>
    <section id="block" class="visual" data-vide-bg="/video/raravideo"></section>
    <section class="event inner sec">
        <div class="sec-header">
            <h3 class="tit">EVENT</h3>
            <p class="desc">혜택이 가득! 즐거움이 두배!<br>진행중인 이벤트를 확인하세요!</p>
        </div>
        <article class="event-latest">
            <?php echo latest('pic_block', 'event', 4, 23); ?>
        </article>
    </section>
    <section class="raracost sec">
        <div class="inner">
        <div class="sec-header">
            <h3 class="tit">RARACOST</h3>
            <p class="desc">즐거운 가격으로<br>패밀리 레스토랑의 문턱을 낮추다</p>
        </div>
        <div class="raracost-wrap">
            <article class="raracost-holiday">
                <figure><a href="#"><img src="/img/main/raracost-holiday.jpg" alt=""></a></figure>
                <a class="raracost-desc" href="#">
                    <h4>HAPPY HOLIDAY</h4>
                    <p>연말은 라라코스트에서<br>라라코스트와 행복한 시간 보내세요!</p>
                    <em>#크리스마스 #연말 #모임</em>
                </a>
            </article>
            <article class="raracost-home">
                <figure><a href="#"><img src="/img/main/raracost-home.jpg" alt=""></a></figure>
                <a class="raracost-desc" href="#">
                    <h4>집에서 즐기는 홈 레스토랑</h4>
                    <p>라라코스트가<br>배달의 민속 브랜드관에 입점 했습니다.</p>
                    <em>#배달의민족 #브랜드관 #아시안양식</em>
                </a>
            </article>
            <article class="raracost-kids">
                <figure><a href="#"><img src="/img/main/raracost-kids.jpg" alt=""></a></figure>
                <a class="raracost-desc" href="#">
                    <h4>라라코스트 키즈존</h4>
                    <p>아이들과 함께!<br>가족단위 고을 먼저 생각합니다.</p>
                    <em>#놀이방 #공기청정기 #안전점검</em>
                </a>
            </article>
        </div>
        </div>
    </section>
    <section class="menu sec">
        <div class="sec-header">
        <h3 class="tit">대표메뉴</h3>
        <p class="desc">라라코스트에서 만날 수 있는<br>다양하고 맛있는 요리들</p>
        </div>
        <div class="swiper mySwiper">
        <ul class="swiper-wrapper">
            <li class="swiper-slide slide1">
            <a href="/sub/sub2-1.php" class="menu-desc">
                <em>BLACK STONE STEAK</em>
                <strong>블랙 스톤 스테이크</strong>
            </a>
            </li>
            <li class="swiper-slide slide2">
            <a href="/sub/sub2-1.php" class="menu-desc">
                <em>HANDMADE HAMBURGER STEAK</em>
                <strong>수제 함박 스테이크</strong>
            </a>
            </li>
            <li class="swiper-slide slide3">
            <a href="/sub/sub2-1.php" class="menu-desc">
                <em>PORK CHOP RICE</em>
                <strong>포크 찹 라이스</strong>
            </a>
            </li>
            <li class="swiper-slide slide4">
            <a href="/sub/sub2-1.php" class="menu-desc">
                <em>BARBEQUE PORK RIB</em>
                <strong>바베큐 폭립 600g</strong>
            </a>
            </li>
            <li class="swiper-slide slide5">
            <a href="/sub/sub2-1.php" class="menu-desc">
                <em>SEAFOOD TOPOKKI</em>
                <strong>해물 떡볶이</strong>
            </a>
            </li>
            <li class="swiper-slide slide6">
            <a href="/sub/sub2-1.php" class="menu-desc">
                <em>OVEN CHICKEN PLATTER</em>
                <strong>오븐 치킨 플래터</strong>
            </a>
            </li>
            <li class="swiper-slide slide7">
            <a href="/sub/sub2-1.php" class="menu-desc">
                <em>HONEY GARLIC CHICKEN FONDUE</em>
                <strong>허니 갈릭 치킨 퐁듀</strong>
            </a>
            </li>
        </ul>
        </div>
    </section>
    <section class="franchise sec">
        <article class="inner">
        <div class="sec-header">
            <h3 class="tit">FRANCHISE</h3>
        </div>
        <div class="franchise-desc">
            <p>“합리적인 가격, <strong>그 이상의 가치!</strong>”</p>
            <em>창업, 멀리 볼수록 라라코스트가 정답입니다</em>
        </div>      
        <a class="franchise-btn" href="/sub/sub4-1.php">가맹점 개설 안내</a>
        </article>
    </section>
    <section class="notice inner sec">
        <div class="sec-header">
        <h3 class="tit">최신소식</h3>
        </div>
        <section class="notice-latest">
            <!-- 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수); -->
            <?php echo latest('pic_block', 'gallery', 4, 23); ?>
        </section>
    </section>

<?php
include_once(G5_PATH.'/tail.php');