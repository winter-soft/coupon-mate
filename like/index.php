<?php
$headerTitle = "즐겨찾기";
include "../template/header.php"
?>
<div class="history-box">
	<?php
	for ($i = 0; $i < 4; $i++) {
		?>
        <div class="card mt-2 like-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcStUq9NCVQxz92vWEfUvOGGSiCT0-bMf9GK8I_Ans3sA9zM03UCWSIALMeqf0xA8THEDPE&usqp=CAU"
                 alt="" class="w-100">
            <i class="icon ion-ios-heart text-white like-icon"></i>
        </div>
		<?php
	}
	?>
</div>

<?php
$_GET['jsFile'] = "";
include "../template/footer.php";
?>
