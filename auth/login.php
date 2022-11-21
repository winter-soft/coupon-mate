<?php include "../template/login_header.php" ?>
    <div class="sectionTitle text-center mt-3 login-header">
        <div class="login-txt-box">
            <div class="lead mb-2">쉽고 빠르게 선물하세요</div>
            <div class="title login-title">
                <h1>쿠폰메이트</h1>
            </div>
            <div class="login-icon">
                <img alt="" src="../assets/img/login/gift-full.png">
            </div>
        </div>
    </div>

    <div class="mt-3 btn-box">
        <button class="btn btn-lg btn-block bg-kakao sns-btn" type="button" onclick="redirectToKakaoLogin()">
            <img src="../assets/img/login/kakao_logo.png">
            카카오로 로그인
        </button>
    </div>
<?php include "../template/login_footer.php"; ?>