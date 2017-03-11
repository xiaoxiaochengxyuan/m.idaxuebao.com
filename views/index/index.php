<?php
use app\utils\OssUtil;
use app\daos\ProductCat;
?>
<link href="<?=STATIC_CSS_URL?>/index.css" rel="stylesheet">
<script>
$(function(){
	$("#myCarousel").carousel({
		interval: 3000
	});
});
</script>
<div class="con">
	<div class="banner" id="banner">
		<div id="myCarousel" class="carousel slide">
			<!-- 轮播（Carousel）指标 -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
			</ol>   
			<!-- 轮播（Carousel）项目 -->
			<div class="carousel-inner">
				<?php $index = 0;?>
				<?php foreach ($collegeCarousels as $carousel):?>
					<div class="item <?php echo $index == 0 ? 'active' : ''?>">
						<a href="<?php echo $carousel['url']?>">
							<img src="<?=OssUtil::getOssImg($carousel['image_url'])?>" style="height: 16.1rem;">
						</a>
					</div>
					<?php $index++?>
				<?php endforeach;?>
			</div>
			<!-- 轮播（Carousel）导航 -->
			<!-- 轮播（Carousel）导航 -->
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div> 
	</div>
	<nav class=".bg-white index-nav">
		<ul class="index-nav-ul">
			<?php foreach ($topProductCats as $productCat):?>
				<li>
					<a href="/product-cat/<?=$productCat['en_name']?>.html">
						<img src="<?=OssUtil::getOssImg($productCat['icon'])?>" style="background: #<?=$productCat['icon_bgcolor']?>;">
						<p class="m-top04"><?=$productCat['name']?></p>
					</a>
				</li>
			<?php endforeach;?>
			
			<li><a href="index.php?r=category/index/products&amp;id=2"> <img
					src="http://www.360yhg.com/mobile/statics/img/Navpic-1479260459.png">
					<p class="m-top04">小家电</p>
			</a></li>
			<li><a href="index.php?r=category/index/products&amp;id=4"> <img
					src="http://www.360yhg.com/mobile/statics/img/Navpic-1479260599.png">
					<p class="m-top04">全球购</p>
			</a></li>
		</ul>
	</nav>

	<section class="top-border message-panel">
		<img src="http://www.360yhg.com/mobile/statics/img/new-icon.png" />
		<div class="more">
			<a href="http://www.tmall.com">更多 ></a>
		</div>
	</section>

	<div class="ms">
		<div class="ms-top">
			<h3 class="color-red">
				<span class="ms-title">限时秒杀</span> <span class="time"> <span
					class="time-span">07</span> : <span class="time-span">07</span> : <span
					class="time-span">07</span>
				</span> <a href="" class="more">更多 ></a>
			</h3>
		</div>
		<div class="ms-content">
			<ul>
				<li>
					<div>
						<a href="http://www.taobao.com"> <img
							src="http://www.360yhg.com/images/201612/thumb_img/3126_thumb_G_1480807432936.jpg" />
						</a>
					</div>
					<p style="color: #ec5151;">¥89.00</p> <del>¥128.00</del>
				</li>
				<li>
					<div>
						<a href="http://www.taobao.com"> <img
							src="http://www.360yhg.com/images/201612/thumb_img/3126_thumb_G_1480807432936.jpg" />
						</a>
					</div>
					<p style="color: #ec5151;">¥89.00</p> <del>¥128.00</del>
				</li>
				<li>
					<div>
						<a href="http://www.taobao.com"> <img
							src="http://www.360yhg.com/images/201612/thumb_img/3126_thumb_G_1480807432936.jpg" />
						</a>
					</div>
					<p style="color: #ec5151;">¥89.00</p> <del>¥128.00</del>
				</li>
			</ul>
		</div>
	</div>

	<div class="day-tj">
		<a href=""> <img
			src="http://www.360yhg.com/data/afficheimg/1479746711625588353.png" />
		</a>
	</div>


	<div class="prod-list">
		<div class="prod-list-top">
			<span class="top-left"> <span class="title">精品推荐</span>
			</span> <span class="top-right"> <a href="http://www.jd.com">更多 ></a>
			</span>
		</div>
		<div class="product-list-medium">
			<ul>
				<li><a href="http://www.ibeifeng.com">
						<div class="product-img">
							<img
								src="http://www.360yhg.com/images/201702/thumb_img/0_thumb_G_1488136392725.jpg" />
						</div>
						<div class="product-info">
							<div class="product-name">美的塔扇遥控电风扇家用静音宿舍落地扇台式无叶电扇</div>
							<div class="product-price color-red">¥89.00</div>
						</div>
				</a></li>
				<li><a href="http://www.ibeifeng.com">
						<div class="product-img">
							<img
								src="http://www.360yhg.com/images/201702/thumb_img/0_thumb_G_1488136392725.jpg" />
						</div>
						<div class="product-info">
							<div class="product-name">美的塔扇遥控电风扇家用静音宿舍落地扇台式无叶电扇</div>
							<div class="product-price color-red">¥89.00</div>
						</div>
				</a></li>
				<li><a href="http://www.ibeifeng.com">
						<div class="product-img">
							<img
								src="http://www.360yhg.com/images/201702/thumb_img/0_thumb_G_1488136392725.jpg" />
						</div>
						<div class="product-info">
							<div class="product-name">美的塔扇遥控电风扇家用静音宿舍落地扇台式无叶电扇</div>
							<div class="product-price color-red">¥89.00</div>
						</div>
				</a></li>
				<li><a href="http://www.ibeifeng.com">
						<div class="product-img">
							<img
								src="http://www.360yhg.com/images/201702/thumb_img/0_thumb_G_1488136392725.jpg" />
						</div>
						<div class="product-info">
							<div class="product-name">美的塔扇遥控电风扇家用静音宿舍落地扇台式无叶电扇</div>
							<div class="product-price color-red">¥89.00</div>
						</div>
				</a></li>
				<li><a href="http://www.ibeifeng.com">
						<div class="product-img">
							<img
								src="http://www.360yhg.com/images/201702/thumb_img/0_thumb_G_1488136392725.jpg" />
						</div>
						<div class="product-info">
							<div class="product-name">美的塔扇遥控电风扇家用静音宿舍落地扇台式无叶电扇</div>
							<div class="product-price color-red">¥89.00</div>
						</div>
				</a></li>
				<li><a href="http://www.ibeifeng.com">
						<div class="product-img">
							<img
								src="http://www.360yhg.com/images/201702/thumb_img/0_thumb_G_1488136392725.jpg" />
						</div>
						<div class="product-info">
							<div class="product-name">美的塔扇遥控电风扇家用静音宿舍落地扇台式无叶电扇</div>
							<div class="product-price color-red">¥89.00</div>
						</div>
				</a></li>
			</ul>
		</div>
	</div>

	<div class="day-tj">
		<a href=""> <img
			src="http://www.360yhg.com/data/afficheimg/1479746650507104454.png" />
		</a>
	</div>


	<div class="prod-list">
		<h3 class="h3-title">猜你喜欢</h3>
		<div class="product-list-medium">
			<ul>
				<li><a href="http://www.ibeifeng.com">
						<div class="product-img">
							<img
								src="http://www.360yhg.com/images/201702/thumb_img/0_thumb_G_1488136392725.jpg" />
						</div>
						<div class="product-info">
							<div class="product-name">美的塔扇遥控电风扇家用静音宿舍落地扇台式无叶电扇</div>
							<div class="product-price color-red">¥89.00</div>
						</div>
				</a></li>
				<li><a href="http://www.ibeifeng.com">
						<div class="product-img">
							<img
								src="http://www.360yhg.com/images/201702/thumb_img/0_thumb_G_1488136392725.jpg" />
						</div>
						<div class="product-info">
							<div class="product-name">美的塔扇遥控电风扇家用静音宿舍落地扇台式无叶电扇</div>
							<div class="product-price color-red">¥89.00</div>
						</div>
				</a></li>
				<li><a href="http://www.ibeifeng.com">
						<div class="product-img">
							<img
								src="http://www.360yhg.com/images/201702/thumb_img/0_thumb_G_1488136392725.jpg" />
						</div>
						<div class="product-info">
							<div class="product-name">美的塔扇遥控电风扇家用静音宿舍落地扇台式无叶电扇</div>
							<div class="product-price color-red">¥89.00</div>
						</div>
				</a></li>
				<li><a href="http://www.ibeifeng.com">
						<div class="product-img">
							<img
								src="http://www.360yhg.com/images/201702/thumb_img/0_thumb_G_1488136392725.jpg" />
						</div>
						<div class="product-info">
							<div class="product-name">美的塔扇遥控电风扇家用静音宿舍落地扇台式无叶电扇</div>
							<div class="product-price color-red">¥89.00</div>
						</div>
				</a></li>
				<li><a href="http://www.ibeifeng.com">
						<div class="product-img">
							<img
								src="http://www.360yhg.com/images/201702/thumb_img/0_thumb_G_1488136392725.jpg" />
						</div>
						<div class="product-info">
							<div class="product-name">美的塔扇遥控电风扇家用静音宿舍落地扇台式无叶电扇</div>
							<div class="product-price color-red">¥89.00</div>
						</div>
				</a></li>
				<li><a href="http://www.ibeifeng.com">
						<div class="product-img">
							<img
								src="http://www.360yhg.com/images/201702/thumb_img/0_thumb_G_1488136392725.jpg" />
						</div>
						<div class="product-info">
							<div class="product-name">美的塔扇遥控电风扇家用静音宿舍落地扇台式无叶电扇</div>
							<div class="product-price color-red">¥89.00</div>
						</div>
				</a></li>
			</ul>
		</div>
	</div>

	<div style="float: left; width: 100%; height: 4rem;"></div>
	<footer class="index-footer">
		<a href="/mobile/index.php?r=site" class="active"> <i class="i-home"></i><span
			class="footer-text">首页</span>
		</a> <a href="/mobile/index.php?r=site" class="active"> <i
			class="i-cat"></i><span class="footer-text">分类</span>
		</a> <a href="/mobile/index.php?r=site" class="active"> <i
			class="i-search"></i><span class="footer-text">搜索</span>
		</a> <a href="/mobile/index.php?r=site" class="active"> <i
			class="i-cart"></i><span class="footer-text">购入车</span>
		</a> <a href="/mobile/index.php?r=site" class="active"> <i
			class="i-user"></i><span class="footer-text">我</span>
		</a>
	</footer>
</div>