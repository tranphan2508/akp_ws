	<?php 
		$curlang = pll_current_language();
		$curlang_link = $curlang=='en'?'':('-'.$curlang);
	?>
	<!-- footer -->
	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<h4>
						<?php if($curlang == "vi") :?>
							Công ty
						<?php elseif($curlang == "ja") :?>
							会社
						<?php else:?>
							Company
						<?php endif;?>
					</h4>
					<ul class="contact">
						<li><p>
							<a href="/<?php echo $curlang?>/why-vinasaver<?php echo $curlang_link;?>/competitive-cost">
							<?php if($curlang == "vi") :?>
								Chọn Vina Saver?
							<?php elseif($curlang == "ja") :?>
								我々を選ぶ理由
							<?php else:?>
								Why Vinasaver
							<?php endif;?>
							</a>
							</p></li>
						<li><p><a href="/<?php echo $curlang?>/services<?php echo $curlang_link;?>/">
							<?php if($curlang == "vi") :?>
								Dịch vụ
							<?php elseif($curlang == "ja") :?>
								サービス
							<?php else:?>
								Services
							<?php endif;?>
						</a></p></li>
						<li><p><a href="/<?php echo $curlang?>/products<?php echo $curlang_link;?>/">
							<?php if($curlang == "vi") :?>
								Sản phẩm
							<?php elseif($curlang == "ja") :?>
								製品
							<?php else:?>
								Products
							<?php endif;?>
						</a></p></li>
					</ul>
				</div>
				<div class="col-md-3">
					<h4>
						<?php if($curlang == "vi") :?>
							Liên hệ
						<?php elseif($curlang == "ja") :?>
							お問合わせ
						<?php else:?>
							Contact Us
						<?php endif;?>
					</h4>
					<ul class="contact">
						<li><p>
							<a href="/<?php echo $curlang?>/contact-us<?php echo $curlang_link;?>/">
							<?php if($curlang == "vi") :?>
								Gửi yêu cầu
							<?php elseif($curlang == "ja") :?>
								私たちに書いてください
							<?php else:?>
								Write Us
							<?php endif;?>
							</a>
						</p></li>
						<li><p><a href="tel:+02363888773">+84.0236.3888773</a></p></li>
						<li><p><a href="mailto:vinasaver@saver.jp">vinasaver@saver.jp</a></p></li>
					</ul>
				</div>
				<div class="col-md-4">
				<h4>
					<?php if($curlang == "vi") :?>
						Theo dõi chúng tôi
					<?php elseif($curlang == "ja") :?>
						最新情報をチェックして！
					<?php else:?>
						Follow Us
					<?php endif;?>
				</h4>
				<a target="_blank" href="https://www.facebook.com/VinaSaver/"><img src="<?php bloginfo('stylesheet_directory')?>/images/ic-facebook.png"/></a>
				</div>
			</div>
		</div>
		<div class="footer-term">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-right">
						<nav id="sub-menu">
							<ul>
								<li><a href="#"><span>
									<?php if($curlang == "vi") :?>
										Điều khoản và điều kiện
									<?php elseif($curlang == "ja") :?>
										サイトのご利用について
									<?php else:?>
										Terms and Conditions
									<?php endif;?>
									</span></a></li>
								<li><a href="#"><span>
									<?php if($curlang == "vi") :?>
										Chính sách bảo mật
									<?php elseif($curlang == "ja") :?>
										プライバシーポリシー
									<?php else:?>
										Privacy Policy
									<?php endif;?>
									</span></a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-right">
						Copyright &copy;2015 VinaSaver
					</div>
                </div>
            </div>
        </div>
	</footer>
		
	<!--<a href="#"><img class="to_top hidden-sm" src="<?php bloginfo('stylesheet_directory')?>/images/to_top.png"/></a>-->
	</body>
</html>
