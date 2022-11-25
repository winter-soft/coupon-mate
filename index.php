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
    <div id="friendWishList">
        <p class="text-center">번호를 입력해보세요!<br>친구가 즐겨찾기한 상품의 펀딩 목록을 볼 수 있어요 :)</p>
    </div>
</div>

<div>
    <p class="i-title mt-3 txt-black mb-1">많이 선물한 상품들이에요!</p>
    <div class="store-menu-list">
        <div class="menu-box">

        </div>
    </div>


</div>


<?php
$_GET['jsFile'] = ["api", "index"];
include "template/footer.php";
?>
