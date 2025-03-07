const API_BASE_URL = "https://hongchanhui.shop";
const INDEX = "http://couponmate.wintersoft.kr";
const DOMAIN = location.protocol + '//' + location.host;

const REST_API_KEY = "736185ca23040004af6e2a692eceb91b";
const JAVASCRIPT_KEY = "a629d08b7d7047d271f39e94ef11b372";

const LOGOUT_REDIRECT_URL = `${DOMAIN}/auth/login.php`;
const LOGIN_URL = `${DOMAIN}/auth/login.php`;

const METHOD_POST = "POST";
const METHOD_GET = "GET";
const TYPE_JSON = "application/json; charset=utf-8";
const TYPE_FORM = "application/x-www-form-urlencoded; charset=utf-8";
let USER_INFO_API_URL = "/auth/infor";
let REFRESH_TOKEN_API_URL = "/auth/refresh";

const TOKEN_NAME = "eid";

let storeApiUrl = "/store";
let userInfo = {};

$(document).ready(function () {
    checkLogin();
});

function callApi(url, header, method, data) {
    return callCommonApi(`${API_BASE_URL}${url}`, header, method, data);
}

function callFormTypeApi(url, header, method, data) {
    return callFormTypeCommonApi(`${API_BASE_URL}${url}`, header, method, data);
}

function callExternalApi(url, header, method, data) {
    return callCommonApi(url, header, method, data);
}

function callFormTypeExternalApi(url, header, method, data) {
    return callFormTypeCommonApi(url, header, method, data);
}

function callCommonApi(url, header, method, data) {
    let result = "";
    let authHeader = header === '' ? '' : {'Authorization': `Bearer ${header}`};

    $.ajax(url, {
        headers: authHeader,
        dataType: "json",
        contentType: TYPE_JSON,
        data: JSON.stringify(data),
        method: method,
        async: false,
        success: function (resultData) {
            result = resultData;
        },
        fail: function (resultData) {
            result = resultData;
        }
    });

    return result;
}

function callFormTypeCommonApi(url, header, method, data) {
    let result = "";
    let authHeader = header === '' ? '' : {'Authorization': `Bearer ${header}`};

    $.ajax(url, {
        headers: authHeader,
        dataType: "json",
        contentType: TYPE_FORM,
        data: data,
        method: method,
        async: false,
        success: function (resultData) {
            result = resultData;
        },
        fail: function (resultData) {
            result = resultData;
        }
    });

    return result;
}

function redirectToIndex() {
    redirectToUrl(INDEX);
}

function redirectToUrl(url) {
    location.href = url;
}

function setCookie(name, value) {
    let expiredDays = 1;
    let expiredDate = new Date();
    expiredDate.setDate(expiredDate.getDate() + expiredDays);

    console.log(`document.cookie = ${name} + "=" + ${value} + "; expires=" + ${expiredDate.toUTCString()}`);
    document.cookie = name + "=" + value + "; expires=" + expiredDate.toUTCString();
}

function getCookie(name) {
    let x, y;
    let val = document.cookie.split(';');
    for (let i = 0; i < val.length; i++) {
        x = val[i].substr(0, val[i].indexOf('='));
        y = val[i].substr(val[i].indexOf('=') + 1);
        x = x.replace(/^\s+|\s+$/g, '');

        if (x == name) {
            return unescape(y);
        }
    }
}


function numberFormat(number, decimals, dec_point, thousands_sep) {
    number = (number + '').replace(',', '').replace(' ', '');
    var n = !isFinite(+number) ? 0 : +number,
        prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
        sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
        dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
        s = '',
        toFixedFix = function (n, prec) {
            var k = Math.pow(10, prec);
            return '' + Math.round(n * k) / k;
        };
    // Fix for IE parseFloat(0.55).toFixed(0) = 0;
    s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
    if (s[0].length > 3) {
        s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
    }
    if ((s[1] || '').length < prec) {
        s[1] = s[1] || '';
        s[1] += new Array(prec - s[1].length + 1).join('0');
    }
    return s.join(dec);
}

function getFormData($form) {
    let originalArray = $form.serializeArray();
    let indexedArray = {};

    $.map(originalArray, function (n, i) {
        indexedArray[n['name']] = n['value'];
    });

    return indexedArray;
}

function checkLogin() {
    if (!isLoginPage() && !getToken()) {
        location.href = LOGIN_URL;
    } else {
        if (!isLoginPage()) {
            userInfo = callUserInfoApi();
        }
    }
}

function isLoginPage() {
    const currentPath = window.location.pathname;
    return currentPath.includes("login") || currentPath.includes("loading");
}

function callUserInfoApi() {
    let response = callFormTypeApi(USER_INFO_API_URL, getToken(), METHOD_GET, {});
    if (!response) { // 토큰 만료
        const refreshToken = callRefreshTokenApi();
        if (refreshToken) {
            setToken(refreshToken);
        }
    }

    response = callFormTypeApi(USER_INFO_API_URL, getToken(), METHOD_GET, {})
    return response.data;
}

function callRefreshTokenApi() {
    const data = {
        "token": getToken()
    }
    const response = callApi(REFRESH_TOKEN_API_URL, '', METHOD_POST, data);
    return response.data.token;
}

function setToken(token) {
    window.localStorage.setItem(TOKEN_NAME, token);
}

function getToken() {
    return window.localStorage.getItem(TOKEN_NAME);
}

function removeEatdaToken() {
    window.localStorage.removeItem(TOKEN_NAME);
}

function logoutWithKakao() {
    removeEatdaToken();
    location.href = `https://kauth.kakao.com/oauth/logout?client_id=${REST_API_KEY}&logout_redirect_uri=${LOGOUT_REDIRECT_URL}`;
}

function logout() {
    removeEatdaToken();
    if (!isLoginPage()) {
        location.href = LOGIN_URL;
    }
}

function moveFundingPage(fundingId) {
    location.href = `http://couponmate.wintersoft.kr/menu/index.php?id=${fundingId}`;
}


function moveItemPage(itemId) {
    location.href = `http://couponmate.wintersoft.kr/menu/index.php?id=${itemId}`;
}

var clientKey = 'test_ck_O6BYq7GWPVvN9lbXLbnVNE5vbo1d'
var tossPayments = TossPayments(clientKey)

var button = document.getElementById('payment-button') // 결제하기 버튼

function payWithToss() {
    tossPayments.requestPayment('카드', {
        amount: 20000,
        orderId: 'Bd3V0mVTtXlrSJqlyIRQ4',
        orderName: "몽블랑",
        customerName: '구지뽕',
        successUrl: `http://couponmate.wintersoft.kr/`,
        failUrl: 'http://couponmate.wintersoft.kr/',
    })
}