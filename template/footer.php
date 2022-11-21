<?php
function isActivePage($needle): string
{
	$currentPage = str_replace(basename($_SERVER["PHP_SELF"]), "", $_SERVER["REQUEST_URI"]);
	return ($currentPage == "/" && $needle == "/") || strpos($currentPage, $needle) ? "active" : "";
}

?>
</div>
</div>
<!-- appCapsule -->

<!-- App Bottom Menu -->
<div class="appBottomMenu">
    <div class="item <?php echo isActivePage("/"); ?>">
        <a href="../index.php">
            <p>
                <i class="icon ion-ios-home"></i>
                <span>홈</span>
            </p>
        </a>
    </div>
    <div class="item <?php echo isActivePage("funding"); ?>">
        <a href="../funding/index.php">
            <p>
                <ion-icon name="gift-outline"></ion-icon>
                <span>펀딩</span>
            </p>
        </a>
    </div>
    <div class="item <?php echo isActivePage("like"); ?>">
        <a href="../like/index.php">
            <p>
				<?php echo isActivePage("like") ? '<i class="icon ion-ios-heart txt-primary"></i>' : '<ion-icon name="heart-outline"></ion-icon>' ?>
                <span>즐겨찾기</span>
            </p>
        </a>
    </div>
    <div class="item <?php echo isActivePage("history"); ?>">
        <a href="../history/index.php">
            <p>
                <i class="icon ion-ios-list"></i>
                <span>구매내역</span>
            </p>
        </a>
    </div>
    <div class="item <?php echo isActivePage("mypage"); ?>">
        <a href="../mypage/index.php">
            <p>
                <ion-icon name="person-outline"></ion-icon>
                <span>MY</span>
            </p>
        </a>
    </div>
</div>
<!-- * App Bottom Menu -->

<!-- ///////////// Js Files ////////////////////  -->
<!-- Jquery -->
<script src="../assets/js/lib/jquery-3.4.1.min.js"></script>
<!-- Bootstrap-->
<script src="../assets/js/lib/popper.min.js"></script>
<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
<script src="../assets/js/lib/bootstrap.min.js"></script>
<!-- Owl Carousel -->
<script src="../assets/js/plugins/owl.carousel.min.js"></script>
<!-- Main Js File -->
<script src="../assets/js/app.js"></script>
<script src="../assets/js/common.js?<?php echo time(); ?>"></script>
<script src="../assets/js/api.js"></script>
<?php
$jsFileName = $_GET["jsFile"];
if (!empty($jsFileName)) {
	$currentTime = time();
	if (is_array($jsFileName) && sizeof($jsFileName) > 1) {
		foreach ($jsFileName as $fileName) {
			echo "<script src='../assets/js/{$fileName}.js?{$currentTime}'></script>";
		}
	} else {
		echo "<script src='../assets/js/{$jsFileName}.js?{$currentTime}'></script>";
	}
}
?>

</body>

</html>