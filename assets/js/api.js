let itemApiUrl = "/item/";
let followApiUrl = "/follow/";
let followListApiUrl = "/follow/following/";
let friendWishListApi = "/wish/explore/";
let fundingApi = "/fund/funding/";


function callItemApi() {
    return callFormTypeApi(itemApiUrl, getToken(), METHOD_GET, {});
}

function callFollowApi(phoneNumber) {
    const data = {
        "phoneNumber": phoneNumber
    };

    return callApi(followApiUrl, getToken(), METHOD_POST, data);
}

function callFollowListApi() {
    return callFormTypeApi(followListApiUrl, getToken(), METHOD_GET, {});
}

function callFriendWishListApi() {
    return callFormTypeApi(friendWishListApi, getToken(), METHOD_GET, {});
}

function callFundingApi(fundId) {
    return callFormTypeApi(`${fundingApi}${fundId}`, getToken(), METHOD_GET, {});
}