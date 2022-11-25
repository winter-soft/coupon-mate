$(document).ready(function () {
    setFriendList();
    // setFundingList();
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

function setFriendList() {
    let friendList = callFollowListApi().data;
    let friendListHtml = "";

    $.each(friendList, function (index, data) {
        friendListHtml += `<div>
            <img src="${data.user.profile_image_url}" alt="">
            <p>${data.user.username}</p>
        </div>`;
    });

    $("#friendList").html(friendListHtml);
}

function setFundingList() {
    const response = callFriendWishListApi();
    let fundingListHtml = "";
    $.each(response.data, function (index, funding) {
        if (!funding.fund) {
            return true;
        }
        console.log(funding);
        fundingListHtml += `
        <div class="item">
                <a href="" class="card card-overlay text-white wish-card">
                    <img src="${funding.wish.item.item_image_url}"
                         class="card-img img-fluid" alt="image">
                    <div class="card-img-overlay">
                        <div class="header row">
                            <div class="col-8 title">${funding.user.user_name}님의 PICK!<br>${funding.wish.item.item_name}</div>
                        </div>
                        <div class="content">
                            <h1></h1>
                            <footer>
                                <div class="date">   
                                    달성까지 ${parseInt(funding.remaining_price / 10000)}만원 남았어요!
                                </div>
                            </footer>
                        </div>
                    </div>
                </a>
            </div>
        `;
    });

    $("#fundingList").html(fundingListHtml);
}