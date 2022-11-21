let friendList = {};
$(document).ready(function () {
    friendList = callFollowListApi().data;
    setFriendList();
});

function setFriendList() {
    let friendListHtml = "";
    $.each(friendList, function (index, data) {
        friendListHtml += `<div>
            <img src="${data.user.profile_image_url}" alt="">
            <p>${data.user.username}</p>
        </div>`;
    });

    $("#friendList").html(friendListHtml);
}