function setFunding(id) {
    let funding = callFundingApi(id).data;

    $("#menuImg").attr("src", funding.item.item_image_url);
    $("#remainPrice").text(numberFormat(funding.remaining_price) + '원');
    $("#price").text(numberFormat(funding.item.item_price) + '원');
    $("#title").text(`홍찬희님을 위한 선물`);
    $("#name").text(funding.item.item_name);
}
