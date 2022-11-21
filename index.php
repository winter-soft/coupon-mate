<?php
$isLogo = true;
$isSearchBox = true;
include "template/header.php"
?>

<div>
    <p class="i-title mt-3 txt-black mb-1">선물할 친구의 번호를 입력해보세요!</p>
    <p>쿠폰메이트가 선물을 추천해드릴께요 :)</p>
    <form action="">
        <div class="form-group row p-1">
            <input class="form-control p-input mr-1" name="phoneNumber" type="text"
                   placeholder="ex) 010-1234-5678" id="phoneNumber">
            <button type="button" class="btn btn-primary col-3 h-05" onclick="follow()">신청</button>
        </div>
    </form>
</div>
<div>
	<?php
	for ($i = 0; $i < 3; $i++) {
		?>
        <div class="f-card">
            <a href="menu/index.php">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcStUq9NCVQxz92vWEfUvOGGSiCT0-bMf9GK8I_Ans3sA9zM03UCWSIALMeqf0xA8THEDPE&usqp=CAU"
                     alt="">
                <span>달성까지<br>10만원</span>
            </a>
        </div>
		<?php
	}
	?>
    <a href="funding/index.php">
        <span class="text-underline text-primary float-right f-card-description">→ 더 자세히 보러가기</span>
    </a>
</div>

<div>
    <p class="i-title mt-3 txt-black mb-1">많이 선물한 상품들이에요!</p>
    <div class="store-menu-list">
        <div class="menu-box">
			<?php
			for ($i = 0; $i < 5; $i++) {
				?>
                <a href="">
                    <div class="menu row">
                        <div class="ranking"><span><?php echo $i + 1; ?></span></div>
                        <div class="menu-img">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRssgmb1BOFUf4e_8cCF3oF1QPAjNUNDZYVTg&usqp=CAU"
                                 alt="">
                        </div>
                        <div class="content">
                            <p class="brand txt-dark-gray">풍년제과</p>
                            <p class="name font-weight-bold">[수능 응원] 합격기원 수제초코 파이 15입</p>
                            <p class="price">19,800원</p>
                        </div>
                    </div>
                    <hr>
                </a>
				<?php
			}
			?>
        </div>
    </div>


</div>


<?php
$_GET['jsFile'] = ["api", "index"];
include "template/footer.php";
?>
