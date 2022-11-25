<?php
$isLogo = true;
$isSearchBox = true;
include "../template/header.php"
?>
<div class="detail-box">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcStUq9NCVQxz92vWEfUvOGGSiCT0-bMf9GK8I_Ans3sA9zM03UCWSIALMeqf0xA8THEDPE&usqp=CAU"
         alt="" id="menuImg">
    <div class="gauge">
        <div class="active w-50"></div>
        <span id="remainPrice">109,000원</span>
    </div>
</div>
<div class="mt-2">
    <p class="sm-txt font-weight-bold text-primary m-0" id="title">
        <ion-icon name="heart-outline" class="text-primary float-right lg-txt"></ion-icon>
    </p>
    <p class="lg-txt font-weight-bold txt-black mb-1" id="name">다이슨 드라이기 슈퍼소닉 HD03</p>
    <p class="m-0 font-weight-bold" id="price">499,000원</p>
</div>
<hr>
<div class="mt-2">
    <p class="font-weight-bold lg-txt txt-black mb-1">
        축하 메세지
        <span class="float-right sm-txt txt-dark-gray font-weight-normal">모두보기</span>
    </p>
	<?php
	for ($i = 0; $i < 3; $i++) {
		?>
        <div class="message">
            <img src="../assets/img/avatar/avatar1.png" alt="">
            <p>구*원</p>
            <div>지원아 너가 항상 노래를 부르던 ...</div>
        </div>
		<?php
	}
	?>
</div>
<hr>
<div id="description">
    플라이어웨이 노즐
    매끄러운 스타일링의 마무리를 위한 이상적인 노즐입니다.
    잔머리를 긴 모발 아래로 감춰주어, 바람만으로 매끄럽고
    윤기있게 마무리해 줍니다.

    스타일링 콘센트레이터
    더 넓고 얇게 재설계된2 스타일링 콘센트레이터는
    정교한 스타일링을 위해 고속의 바람을 만들어 줍니다.
    집중된 바람이 분사되기 때문에, 모발의 다른 부분을 건드리지 않고 한 번에 한 부분씩 스타일링 할 수 있습니다.
</div>

<!--<div class="c-modal">-->
<!--    <p class="title">-->
<!--        혼자서 남은 금액 158,000원을-->
<!--        모두 선물하실껀가요?-->
<!--    </p>-->
<!--    <p class="option active">넵! 제가 다 선물할께요-->
<!--        <ion-icon name="checkmark-outline" class="float-right lg-txt"></ion-icon>-->
<!--    </p>-->
<!--    <p class="option">아니요, 일부분만 선물할께요</p>-->
<!--</div>-->
<button class="bottom-btn" id="payment-button" onclick="payWithToss()">선물 펀딩 참여하기</button>
<?php
$_GET['jsFile'] = ["api", "menu"];
include "../template/order_footer.php";
?>
<script>
    let fundingId = <?php echo $_GET["id"] ?>;
    $(document).ready(function () {
        setFunding(fundingId);
        // setFundingList();
    });

</script>