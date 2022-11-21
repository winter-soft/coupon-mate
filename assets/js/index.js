$(document).ready(function () {
    callFollowListApi();
    callItemApi();
});

function follow() {
    const phoneNumber = $("#phoneNumber").val();
    const response = callFollowApi(phoneNumber);
}