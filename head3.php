<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

run_event('pre_head');

include_once(G5_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>

<link rel="stylesheet" href="/css/sub-common.css">
<link rel="stylesheet" href="/css/sub1.css">

<div id="skip_to_container"><a href="#container">본문 바로가기</a></div>
<!-- 상단 시작 -->
<header id="header">
    <div class="inner">
        <h1 class="logo"><a href="/">RARACOST</a></h1>
        <nav class="gnb">
            <h2 class="hidden">메인메뉴</h2>
            <ul>
                <li class="depth1">
                    <a href="/sub/sub1-1.php">라라코스트</a>
                    <ul class="depth2">
                        <li><a href="/sub/sub1-1.php">브랜드 소개</a></li>
                        <li><a href="/sub/sub1-2.php">회사 소개</a></li>
                        <li><a href="/sub/sub1-3.php">찾아오시는 길</a></li>
                        <li><a href="/sub/sub1-4.php">블로그</a></li>
                    </ul>
                </li>
                <li class="depth1">
                    <a href="/sub/sub2-1.php">메뉴소개</a>
                    <ul class="depth2">
                        <li><a href="/sub/sub2-1.php">NEW</a></li>
                        <li><a href="/sub/sub2-2.php">어린이 추천</a></li>
                        <li><a href="/sub/sub2-3.php">메인 메뉴</a></li>
                        <li><a href="/sub/sub2-4.php">사이드 메뉴</a></li>
                        <li><a href="/sub/sub2-5.php">원산지 정보</a></li>
                    </ul>
                </li>
                <li class="depth1">
                    <a href="/sub/sub3-1.php">커뮤니티</a>
                    <ul class="depth2">
                        <li><a href="/sub/sub3-1.php">공지사항</a></li>
                        <li><a href="/sub/sub3-2.php">언론보도</a></li>
                        <li><a href="http://jaehong.pe.kr/bbs/board.php?bo_table=event">진행중인 이벤트</a></li>
                        <li><a href="/sub/sub3-4.php">종료된 이벤트</a></li>
                    </ul>
                </li>
                <li class="depth1">
                    <a href="/sub/sub4-1.php">프랜차이즈</a>
                    <ul class="depth2">
                        <li><a href="/sub/sub4-1.php">개설 조건</a></li>
                        <li><a href="/sub/sub4-2.php">절차 및 비용</a></li>
                        <li><a href="/sub/sub4-3.php">자주묻는 질문</a></li>
                        <li><a href="/sub/sub4-4.php">구독&상담신청</a></li>
                        <li><a href="/sub/sub4-5.php">둘러보기</a></li>
                    </ul>
                </li>
                <li class="depth1">
                    <a href="/sub/sub5-1.php">고객지원</a>
                    <ul class="depth2">
                        <li><a href="/sub/sub5-1.php">고객센터</a></li>
                        <li><a href="/sub/sub5-2.php">신규 오픈 매장</a></li>
                        <li><a href="/sub/sub5-3.php">매장 찾기</a></li>
                    </ul>
                </li>
            </ul>
            <p class="gnb-bg"></p>
        </nav>
        <nav class="tnb">
            <ul class="tnb-login">        
                <?php if ($is_member) {  ?>
                <li><a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php">정보수정</a></li>
                <li><a href="<?php echo G5_BBS_URL ?>/logout.php">로그아웃</a></li>
                <?php if ($is_admin) {  ?>
                <li class="tnb_admin"><a href="<?php echo correct_goto_url(G5_ADMIN_URL); ?>">관리자</a></li>
                <?php }  ?>
                <?php } else {  ?>
                <li><a href="<?php echo G5_BBS_URL ?>/register.php">회원가입</a></li>
                <li><a href="<?php echo G5_BBS_URL ?>/login.php">로그인</a></li>
                <?php }  ?>
            </ul>
            <div class="all">
                <a href="#" class="all-btn">
                    <span class="all-btn-bar">전체메뉴</span>
                </a>
                <nav class="all-gnb">
                    <h2 class="hidden">메인메뉴</h2>
                    <ul>
                        <li class="depth1">
                            <a href="/sub/sub1-1.php">라라코스트</a>
                            <ul class="depth2">
                                <li><a href="/sub/sub1-1.php">브랜드 소개</a></li>
                                <li><a href="/sub/sub1-2.php">회사 소개</a></li>
                                <li><a href="/sub/sub1-3.php">찾아오시는 길</a></li>
                                <li><a href="/sub/sub1-4.php">블로그</a></li>
                            </ul>
                        </li>
                        <li class="depth1">
                            <a href="/sub/sub2-1.php">메뉴소개</a>
                            <ul class="depth2">
                                <li><a href="/sub/sub2-1.php">NEW</a></li>
                                <li><a href="/sub/sub2-2.php">어린이 추천</a></li>
                                <li><a href="/sub/sub2-3.php">메인 메뉴</a></li>
                                <li><a href="/sub/sub2-4.php">사이드 메뉴</a></li>
                                <li><a href="/sub/sub2-5.php">원산지 정보</a></li>
                            </ul>
                        </li>
                        <li class="depth1">
                            <a href="/sub/sub3-1.php">커뮤니티</a>
                            <ul class="depth2">
                                <li><a href="/sub/sub3-1.php">공지사항</a></li>
                                <li><a href="/sub/sub3-2.php">언론보도</a></li>
                                <li><a href="/sub/sub3-3.php">진행중인 이벤트</a></li>
                                <li><a href="/sub/sub3-4.php">종료된 이벤트</a></li>
                            </ul>
                        </li>
                        <li class="depth1">
                            <a href="/sub/sub4-1.php">프랜차이즈</a>
                            <ul class="depth2">
                                <li><a href="/sub/sub4-1.php">개설 조건</a></li>
                                <li><a href="/sub/sub4-2.php">절차 및 비용</a></li>
                                <li><a href="/sub/sub4-3.php">자주묻는 질문</a></li>
                                <li><a href="/sub/sub4-4.php">구독&상담신청</a></li>
                                <li><a href="/sub/sub4-5.php">둘러보기</a></li>
                            </ul>
                        </li>
                        <li class="depth1">
                            <a href="/sub/sub5-1.php">고객지원</a>
                            <ul class="depth2">
                                <li><a href="/sub/sub5-1.php">고객센터</a></li>
                                <li><a href="/sub/sub5-2.php">신규 오픈 매장</a></li>
                                <li><a href="/sub/sub5-3.php">매장 찾기</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
</header>
<main id="main">
    <section class="visual">
        <div class="inner">커뮤니티</div>
    </section>
    <nav class="lnb">
        <h3 class="hidden">로케이트 네비게이션</h3>
        <div class="inner">
            <ul class="lnb-list">
                <li class="on"><a href="/sub/sub1-1.php">공지사항</a></li>
                <li><a href="/sub/sub1-2.php">언론보도</a></li>
                <li><a href="http://jaehong.pe.kr/bbs/board.php?bo_table=event">진행중인 이벤트</a></li>
                <li><a href="/sub/sub1-4.php">종료된 이벤트</a></li>
            </ul>
        </div>
    </nav>
    <section class="sub inner">