<?php
$headerTitle = "펀딩 <span class='cafe-ft font-italic sm-txt text-primary'>for friends</span>";
include "../template/header.php"
?>
<div>
    <p class="i-title mt-3 txt-black mb-1">곧 생일인 친구들의 위시리스트에요!</p>
    <!-- Card Overlay Carousel -->
    <div class="cardOverlayCarousel owl-carousel mt-2 mb-4" id="fundingList">
        <!-- item -->
        <div class="item">
            <a href="http://couponmate.wintersoft.kr/menu/index.php?id=3"
               class="card card-overlay text-white wish-card">
                <img src="https://img1.kakaocdn.net/thumb/C276x276.q82/?fname=https%3A%2F%2Fst.kakaocdn.net%2Fproduct%2Fgift%2Fproduct%2F20200923142638_34b28e53a898467191796afc187c39fa.jpg"
                     class="card-img img-fluid" alt="image">
                <div class="card-img-overlay">
                    <div class="header row">
                        <div class="col-8 title">홍찬희님의 PICK!<br>몽블랑 픽스 블랙 볼펜 114797</div>
                    </div>
                    <div class="content">
                        <h1></h1>
                        <footer>
                            <div class="date">
                                달성까지 10만원 남았어요!
                            </div>
                        </footer>
                    </div>
                </div>
            </a>
        </div>
        <!-- item -->
        <div class="item">
            <a href="http://couponmate.wintersoft.kr/menu/index.php?id=3"
               class="card card-overlay text-white wish-card">
                <img src="https://img1.kakaocdn.net/thumb/C276x276.fwebp.q82/?fname=https%3A%2F%2Fst.kakaocdn.net%2Fproduct%2Fgift%2Fproduct%2F20210702110623_7d390103490d4f7abee977b22fb6a60b.jpg"
                     class="card-img img-fluid" alt="image">
                <div class="card-img-overlay">
                    <div class="header row">
                        <div class="col-8 title">홍찬희님의 PICK!<br>톰브라운 남성 미디엄 도큐먼트 클러치 MAC021L00198-001 라프리마</div>
                    </div>
                    <div class="content">
                        <h1></h1>
                        <footer>
                            <div class="date">
                                달성까지 10만원 남았어요!
                            </div>
                        </footer>
                    </div>
                </div>
            </a>
        </div>
        <!-- item -->
        <div class="item">
            <a href="http://couponmate.wintersoft.kr/menu/index.php?id=3"
               class="card card-overlay text-white wish-card">
                <img src="https://img1.kakaocdn.net/thumb/C276x276.q82/?fname=https%3A%2F%2Fst.kakaocdn.net%2Fproduct%2Fgift%2Fproduct%2FOjh0f1eyU5kdb0Qw_lDT7g%2FR5BTUndKrhgof93LE7oXSIbH3AclhtU_HT7xri9GhTg.jpg"
                     class="card-img img-fluid" alt="image">
                <div class="card-img-overlay">
                    <div class="header row">
                        <div class="col-8 title">홍찬희님의 PICK!<br>"단독 (선물포장)" FRED 포스텐 브레이슬릿 (L)</div>
                    </div>
                    <div class="content">
                        <h1></h1>
                        <footer>
                            <div class="date">
                                달성까지 10만원 남았어요!
                            </div>
                        </footer>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

<div>
    <p class="i-title mt-3 txt-black mb-1">친구를 맺어보세요 :)</p>
    <form action="">
        <div class="form-group row p-1">
            <input class="form-control p-input mr-1" id="phoneNumber" name="phoneNumber" type="text"
                   placeholder="ex) 010-1234-5678">
            <button class="btn btn-primary col-3 h-05" onclick="follow()">신청</button>
        </div>
    </form>
</div>
<div class="friend-list" id="friendList">

</div>

<?php
$_GET['jsFile'] = ["api", "funding"];
include "../template/footer.php";
?>
