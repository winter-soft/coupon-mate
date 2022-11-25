$(document).ready(function () {
    callFollowListApi();
    setItemList();
});

function follow() {
    const phoneNumber = $("#phoneNumber").val();
    const response = callFollowApi(phoneNumber);
    if (response.status === 200) {
        alert("팔로우 완료!");
        setFriendWishList();
    } else {
        alert("입력하신 번호의 친구는 쿠폰메이트에 가입하지 않았어요 ㅠ.ㅠ");
    }
}

function setItemList() {
    const itemList = callItemApi().data;
    let itemListHtml = "";
    $.each(itemList, function (index, item) {
        itemListHtml += `<a href="http://couponmate.wintersoft.kr/menu/index.php?id=3">
        <div class="menu row" >
            <div class="ranking"><span>${index + 1}</span></div>
            <div class="menu-img">
                <img
                    src="${item.item_image_url}"
                    alt="">
            </div>
            <div class="content">
                <p class="brand txt-dark-gray">${item.item_brand}</p>
                <p class="name font-weight-bold">${item.item_name}</p>
                <p class="price">${numberFormat(item.item_price)}원</p>
            </div>
        </div>
        <hr>
    </a>`;
    });
    $(".store-menu-list .menu-box").html(itemListHtml);
}

function setFriendWishList() {
    const response = callFriendWishListApi();
    let wishListHtml = "";
    $.each(response.data, function (index, wish) {
        if (wish.fund.remaining_price === undefined) {
            return true;
        }
        wishListHtml += `<div class="f-card">
            <a href="http://couponmate.wintersoft.kr/menu/index.php?id=${wish.fund.fund_id}">
                <img src="${wish.wish.item.item_image_url}"
                     alt="">
                <span>달성까지<br>${parseInt(wish.fund.remaining_price / 10000)}만원</span>
            </a>
        </div>`;
    });

    wishListHtml += `
     <a href="funding/index.php">
        <span class="text-underline text-primary float-right f-card-description">→ 더 자세히 보러가기</span>
    </a>
    `;

    $("#friendWishList").html(wishListHtml);
}
