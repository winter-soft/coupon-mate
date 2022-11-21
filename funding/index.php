<?php
$headerTitle = "펀딩 <span class='cafe-ft font-italic sm-txt text-primary'>for friends</span>";
include "../template/header.php"
?>
<div>
    <p class="i-title mt-3 txt-black mb-1">곧 생일인 친구들의 위시리스트에요!</p>
    <!-- Card Overlay Carousel -->
    <div class="cardOverlayCarousel owl-carousel mt-2 mb-4">
		<?php
		for ($i = 0; $i < 5; $i++) {
			?>
            <!-- item -->
            <div class="item">
                <a href="" class="card card-overlay text-white wish-card">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcStUq9NCVQxz92vWEfUvOGGSiCT0-bMf9GK8I_Ans3sA9zM03UCWSIALMeqf0xA8THEDPE&usqp=CAU"
                         class="card-img img-fluid" alt="image">
                    <div class="card-img-overlay">
                        <div class="header row">
                            <div class="col-8 title">구지원님의 PICK!<br>다이슨 헤어드라이기</div>
                        </div>
                        <div class="content">
                            <h1></h1>
                            <footer>
                                <div class="date">
                                    달성까지 10만원 남았어요!
                                </div>
                            </footer>
                        </div>
                    </div>
                </a>
            </div>
            <!-- * item -->
			<?php
		}
		?>
    </div>
</div>

<div>
    <p class="i-title mt-3 txt-black mb-1">친구를 맺어보세요 :)</p>
    <form action="">
        <div class="form-group row p-1">
            <input class="form-control p-input mr-1" name="phoneNumber" type="text" placeholder="ex) 010-1234-5678">
            <button class="btn btn-primary col-3 h-05">신청</button>
        </div>
    </form>
</div>
<div class="friend-list" id="friendList">

</div>

<?php
$_GET['jsFile'] = ["api", "funding"];
include "../template/footer.php";
?>
