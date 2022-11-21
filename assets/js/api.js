let itemApiUrl = "/item/";
let followApiUrl = "/follow/";
let followListApiUrl = "/follow/following/";

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