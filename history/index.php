<?php
$headerTitle = "구매내역";
include "../template/header.php"
?>
<div class="history-box">
	<?php
	for ($i = 0; $i < 4; $i++) {
		?>
        <div class="card mt-2 history-card">
            <div class="history-status">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcStUq9NCVQxz92vWEfUvOGGSiCT0-bMf9GK8I_Ans3sA9zM03UCWSIALMeqf0xA8THEDPE&usqp=CAU"
                     alt="" class="w-100">
            </div>

            <div class="p-1">
                <p class="sm-txt txt-dark-gray m-0 m-txt">2022/11/21(월)</p>
                <div class="lg-txt">
                <span class="font-weight-bold text-dark sm-txt">다이슨 헤어드라이기 <span
                            class="cafe-ft m-txt text-primary font-italic">for 구지원님</span></span>
                </div>
                <div class="mt-1 history-order">
                    <p class="sm-txt m-0">
                        <span>합계</span>
                        <span class="float-right">300,000원</span>
                    </p></div>
            </div>
        </div>
		<?php
	}
	?>
</div>

<?php
$_GET['jsFile'] = "";
include "../template/footer.php";
?>
