<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php $this->load->view('partials/_breadcrumb'); ?>
<!-- page-header -->
<section id="who-we-are" class="page-section border-tb">
	<div class="container who-we-are">
		<div class="row">
			<div class="col-md-8">
				<div class="section-title text-left">
					<!-- Title -->
					<h2 class="title">CHÚNG TÔi LÀ AI?</h2>
				</div>
				<p class="description upper">Lời đầu tiên xin gửi tới Quý Khách hàng lời chào trân trọng cùng lời chúc sức khỏe và thành công.</p>
				<p>Công ty chúng tôi là đơn vị chuyên sản xuất và cung ứng các sản phẩm biển hiệu, biển quảng cáo các loại với công nghệ hiện đại nhập khẩu từ Đài Loan, Hàn Quốc. Chúng tôi đã và là đối tác cung cấp các sản phẩm. dịch vụ quảng cáo cho nhiều công ty, đối tác Công ty cổ phần xi măng Cẩm Phả, Tập đoàn Viettel.</p>
			</div>
			<script>

				function readMore(moreId, moreBtn, dotId) {
					var dots = document.getElementById(dotId);
					var moreText = document.getElementById(moreId);
					var btnText = document.getElementById(moreBtn);

					if (dots.style.display === "none") {
						dots.style.display = "inline";
						btnText.innerHTML = "Xem thêm";
						moreText.style.display = "none";
					} else {
						dots.style.display = "none";
						btnText.innerHTML = "Đóng";
						moreText.style.display = "inline";
					}
				}
			</script>
			<div class="col-md-4">
				<div class="item-box bottom-pad-10">
					<a>
						<i class="icon-star13 i-5x bg-color"></i>
						<h4>CHÚNG TA LÀM GÌ?</h4>
						<p>Trải qua hơn 13 năm, nỗ lực không ngừng. Chúng tôi tự hào là đơn vị có kinh nghiệm <span id="dotOne">. . .</span>
							<span id="moreOne">trong lĩnh vực Thi công biển, bảng quảng cáo. Cùng rất nhiều chất liệu khác nhau để mang đến những sản phẩm chất lương, tinh tế và đẹp mắt. Bên cạnh đó, giá cả từng sản phẩm của Chúng tôi phù hợp với từng quy mô, lĩnh vực kinh doanh và nhu cầu của quý khách hàng. Với tiêu chí “NÓI KHÔNG VỚI SẢN PHẨM KÉM CHẤT LƯỢNG” Luôn được đặt lên hàng đầu..
							<a class="readMore" id="moreBtnOne" onclick="readMore('moreOne', 'moreBtnOne', 'dotOne')">Xem thêm</a>
							</span>
						</p>
					</a>
					<a>
						<i class="icon-heart18 i-5x bg-color"></i>
						<h4>TẠI SAO MỌI NGƯỜI THÍCH CHÚNG TÔI?</h4>
						<p>Trên chặng đường đã qua, Chúng tôi không ngừng mở rộng quy mô phát triển <span id="dotTwo">. . .</span>
							<span id="moreTwo"> và củng cố hệ thống cơ sở vật chất. Bên cạnh đó, chúng tôi hội tụ đội ngũ nhân viên trẻ nhiệt huyết, sáng tạo. Đến nay, trở thành doanh nghiệp hàng đầu trong lĩnh vực dịch vụ quảng cáo.
							Chúng tôi đã và đang là đối tác tin cậy, thường xuyên của nhiều tập đoàn, thương hiệu hàng đầu Việt Nam như: Tập đoàn Viettel, Công ty Xi măng Cẩm Phả, Đài truyền hình VTV, Tập đoàn Vingroup… Và rất nhiều đối tác khác.<a class="readMore" id="moreBtnTwo" onclick="readMore('moreTwo', 'moreBtnTwo', 'dotTwo')">Xem thêm</a>
							</span>
						</p>

					</a>
					<a>
						<i class="icon-gift6 i-5x bg-color"></i>
						<h4>CHÚNG TÔI CUNG CẤP GÌ?</h4>
						<p>Tập trung hoạt động trong lĩnh vực kinh doanh các sản phẩm Biển Hiệu <span id="dotThree">. . .</span>
							<span id="moreThree">, Biển Quảng Cáo với công nghệ sản xuất hiện đại, tiên tiến. Hệ thống máy móc được nhập khẩu được nhập khẩu từ nhiều quốc gia trên thế giới. Chúng tôi không ngừng cập nhật hệ thống trang thiết bị hiện đại, máy móc, kỹ thuật tiên tiến. Nhằm mang đến những sản phẩm tốt nhất, chất lượng cao nhất đến với quý khách hàng.
							<a class="readMore" id="moreBtnThree" onclick="readMore('moreThree', 'moreBtnThree', 'dotThree')">Xem thêm</a>
							</span>
						</p>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- who-we-are -->
<section id="fun-factor" class="page-section light-bg  border-tb ">
	<div class="container">
		<div class="row text-right fact-counter">
			<div class="col-sm-6 col-md-3 bottom-xs-pad-30 fun-icon">
				<!-- Icon -->
				<div class="count-number text-color" data-count="92">
					<span class="counter"></span>
				</div>
				<!-- Title -->
				<h3>Dự án</h3>
			</div>
			<div class="col-sm-6 col-md-3 bottom-xs-pad-30">
				<!-- Icon -->
				<div class="count-number text-color" data-count="83">
					<span class="counter"></span>
				</div>
				<!-- Title -->
				<h3>KHÁCH HÀNG</h3>
			</div>
			<div class="col-sm-6 col-md-3 bottom-xs-pad-30">
				<!-- Icon -->
				<div class="count-number text-color" data-count="67">
					<span class="counter"></span>
				</div>
				<!-- Title -->
				<h3>GIẢI THƯỞNG</h3>
			</div>
			<div class="col-sm-6 col-md-3 bottom-xs-pad-30">
				<!-- Icon -->
				<div class="count-number text-color" data-count="36">
					<span class="counter"></span>
				</div>
				<!-- Title -->
				<h3>Thành phố</h3>
			</div>
		</div>
	</div>
</section>
<!--<section id="clients" class="page-section tb-pad-20 border-t">-->
<!--	<div class="container">-->
<!--		<div class="row">-->
<!--			<div class="col-md-12 text-center">-->
<!--				<div class="owl-carousel" data-pagination="false" data-items="6" data-autoplay="true"-->
<!--					 data-navigation="false">-->
<!--					<a href="#">-->
<!--						<img src="--><?php //echo base_url(); ?><!--assets/img/sections/clients/1.png" width="170" height="90" alt="" />-->
<!--						<img src="--><?php //echo base_url(); ?><!--assets/img/sections/clients/11.png" width="170" height="90" alt="" /></a>-->
<!--					<a href="#">-->
<!--						<img src="--><?php //echo base_url(); ?><!--assets/img/sections/clients/2.png" width="170" height="90" alt="" />-->
<!--						<img src="--><?php //echo base_url(); ?><!--assets/img/sections/clients/22.png" width="170" height="90" alt="" /></a>-->
<!--					<a href="#">-->
<!--						<img src="--><?php //echo base_url(); ?><!--assets/img/sections/clients/1.png" width="170" height="90" alt="" />-->
<!--						<img src="--><?php //echo base_url(); ?><!--assets/img/sections/clients/11.png" width="170" height="90" alt="" /></a>-->
<!--					<a href="#">-->
<!--						<img src="--><?php //echo base_url(); ?><!--assets/img/sections/clients/2.png" width="170" height="90" alt="" />-->
<!--						<img src="--><?php //echo base_url(); ?><!--assets/img/sections/clients/22.png" width="170" height="90" alt="" /></a>-->
<!--					<a href="#">-->
<!--						<img src="--><?php //echo base_url(); ?><!--assets/img/sections/clients/1.png" width="170" height="90" alt="" />-->
<!--						<img src="--><?php //echo base_url(); ?><!--assets/img/sections/clients/11.png" width="170" height="90" alt="" /></a>-->
<!--					<a href="#">-->
<!--						<img src="--><?php //echo base_url(); ?><!--assets/img/sections/clients/2.png" width="170" height="90" alt="" />-->
<!--						<img src="--><?php //echo base_url(); ?><!--assets/img/sections/clients/22.png" width="170" height="90" alt="" /></a>-->
<!--					<a href="#">-->
<!--						<img src="--><?php //echo base_url(); ?><!--assets/img/sections/clients/1.png" width="170" height="90" alt="" />-->
<!--						<img src="--><?php //echo base_url(); ?><!--assets/img/sections/clients/11.png" width="170" height="90" alt="" /></a>-->
<!--					<a href="#">-->
<!--						<img src="--><?php //echo base_url(); ?><!--assets/img/sections/clients/2.png" width="170" height="90" alt="" />-->
<!--						<img src="--><?php //echo base_url(); ?><!--assets/img/sections/clients/22.png" width="170" height="90" alt="" /></a></div>-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->
<!--</section>-->
