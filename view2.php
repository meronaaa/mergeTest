test입니다
test입니다
test입니다
test입니다
test입니다
test입니다
test입니다
test입니다
test입니다
test입니다
test입니다
<body>
<div id="wrap">
	<div id="header_wrap">
<?php
	$current_gnb = 'gnb02';
	require_once ($_SERVER["DOCUMENT_ROOT"]. "/include/gnb.php");
?>
	</div><!-- // header_wrap -->

	<div id="container_wrap">
		<div id="visual_wrap">
			<div id="visual">
				<img src="/images/sub/sub01_top_img.jpg" alt="" />
			</div>
		</div><!--visual_wrap--->

		
		<div id="container" class="clearfix">
<?php
	$current_lnb = 'lnb01';
	require_once ($_SERVER["DOCUMENT_ROOT"]. "/include/lnb_sub05.php");
?>

			<div id="content">
				<ul class="path clearfix">
					<li><a href="/index.php"><img src="/images/misc/home.png" alt="" /></a></li>
					<?if($codelen == "3"){?>
					<li>Products</a></li>
					<li><span>
						<?if($code_a == "001"){?>ON GRID INVERTER<?}?>
						<?if($code_a == "002"){?>ON GRID INVERTER<?}?>
						<?if($code_a == "003"){?>PUMPING INVERTER<?}?>
						<?if($code_a == "004"){?>EV CHARGER<?}?>
						<?if($code_a == "005"){?>UPS<?}?>
					</span></li>
					<?}?>
					<?if($codelen == "6"){?>
					<li>Products</a></li>
					<li>
						<?if($code_a == "001"){?>ON GRID INVERTER<?}?>
						<?if($code_a == "002"){?>ON GRID INVERTER<?}?>
						<?if($code_a == "003"){?>PUMPING INVERTER<?}?>
						<?if($code_a == "004"){?>EV CHARGER<?}?>
						<?if($code_a == "005"){?>UPS<?}?>
					</li>
					<li><span>
						<?if($code == "001001"){?>Sunleaf: single phase 1 MPPT<?}?>
						<?if($code == "001002"){?>Sunseed: Single phase 2 MPPT<?}?>
						<?if($code == "001003"){?>Suntree: Three phase 2 MPPT<?}?>
						<?if($code == "001004"){?>JSI: Single phase 1 MPPT<?}?>
						<?if($code == "001005"){?>Suntwins: Single phase 2 MPPT<?}?>
						<?if($code == "001006"){?>Sunforest: three phase central<?}?>
						<?if($code == "001007"){?>PV combiner box<?}?>
						<?if($code == "001008"){?>Monitoring - Wifi plug<?}?>
						<?if($code == "001009"){?>Monitoring - Wifi kit<?}?>
						<?if($code == "001010"){?>Monitoring - Solar dog<?}?>
						<?if($code == "001011"){?>Power distribution box<?}?>
						<?if($code == "002001"){?>ICXEED: SINGLE PHASE HIGH<?}?>
						<?if($code == "002002"){?>XPI: SINGLE PHASE LOW<?}?>
						<?if($code == "002003"){?>ESS: SINGLE PHASE LOW<?}?>
						<?if($code == "002004"){?>ETS: 10K-60K<?}?>
						<?if($code == "002005"){?>IPS: 80K-160K<?}?>
						<?if($code == "002006"){?>HSC CONTROLLER<?}?>
						<?if($code == "002007"){?>SUNMAX: CONTROLLER<?}?>
						<?if($code == "002008"){?>SCM: CONTROLLER<?}?>
						<?if($code == "004001"){?>CSI SERIES: 45KW-180KW<?}?>
						<?if($code == "004002"){?>CSI SERIES: 240KW<?}?>
						<?if($code == "004003"){?>CSF SERIES: 300KW<?}?>
						<?if($code == "004004"){?>CSP SERIES: PORTABLE DC<?}?>
						<?if($code == "004005"){?>CSW SERIES: WALL MOUNTED<?}?>
						<?if($code == "004006"){?>ECM/ECH MODULE:15KW<?}?>
						<?if($code == "004007"){?>EVC CHARGER: 3.3KW, 6.6KW<?}?>
						<?if($code == "004008"){?>EVD DC/DC CONVERTER<?}?>
						<?if($code == "005001"){?>HIGH FREQUENCY ONLINE<?}?>
						<?if($code == "005002"){?>HIGH FREQUENCY ONLINE UPS<?}?>
						<?if($code == "005003"){?>LOW FREQUENCY ONLINE UPS<?}?>
						<?if($code == "005004"){?>OFFLINE UPS<?}?>
					</span></li>
					<?}?>
				</ul>
				<p class="title_cont">
					<?if($code == "001"){?>ON GRID INVERTER<?}?>
					<?if($code == "001001"){?>Sunleaf: single phase 1 MPPT<?}?>
					<?if($code == "001002"){?>Sunseed: Single phase 2 MPPT<?}?>
					<?if($code == "001003"){?>Suntree: Three phase 2 MPPT<?}?>
					<?if($code == "001004"){?>JSI: Single phase 1 MPPT<?}?>
					<?if($code == "001005"){?>Suntwins: Single phase 2 MPPT<?}?>
					<?if($code == "001006"){?>Sunforest: three phase central<?}?>
					<?if($code == "001007"){?>PV combiner box<?}?>
					<?if($code == "001008"){?>Monitoring - Wifi plug<?}?>
					<?if($code == "001009"){?>Monitoring - Wifi kit<?}?>
					<?if($code == "001010"){?>Monitoring - Solar dog<?}?>
					<?if($code == "001011"){?>Power distribution box<?}?>
					<?if($code == "002"){?>ON GRID INVERTER<?}?>
					<?if($code == "002001"){?>ICXEED: SINGLE PHASE HIGH<?}?>
					<?if($code == "002002"){?>XPI: SINGLE PHASE LOW<?}?>
					<?if($code == "002003"){?>ESS: SINGLE PHASE LOW<?}?>
					<?if($code == "002004"){?>ETS: 10K-60K<?}?>
					<?if($code == "002005"){?>IPS: 80K-160K<?}?>
					<?if($code == "002006"){?>HSC CONTROLLER<?}?>
					<?if($code == "002007"){?>SUNMAX: CONTROLLER<?}?>
					<?if($code == "002008"){?>SCM: CONTROLLER<?}?>
					<?if($code == "003"){?>PUMPING INVERTER<?}?>
					<?if($code == "004"){?>EV CHARGER<?}?>
					<?if($code == "004001"){?>CSI SERIES: 45KW-180KW<?}?>
					<?if($code == "004002"){?>CSI SERIES: 240KW<?}?>
					<?if($code == "004003"){?>CSF SERIES: 300KW<?}?>
					<?if($code == "004004"){?>CSP SERIES: PORTABLE DC<?}?>
					<?if($code == "004005"){?>CSW SERIES: WALL MOUNTED<?}?>
					<?if($code == "004006"){?>ECM/ECH MODULE:15KW<?}?>
					<?if($code == "004007"){?>EVC CHARGER: 3.3KW, 6.6KW<?}?>
					<?if($code == "004008"){?>EVD DC/DC CONVERTER<?}?>
					<?if($code == "005"){?>UPS<?}?>
					<?if($code == "005001"){?>HIGH FREQUENCY ONLINE<?}?>
					<?if($code == "005002"){?>HIGH FREQUENCY ONLINE UPS<?}?>
					<?if($code == "005003"){?>LOW FREQUENCY ONLINE UPS<?}?>
					<?if($code == "005004"){?>OFFLINE UPS<?}?>
				</p>
				<div id="inner_content" style="min-height: 500px;">

<?if($gidx == "1"){?>
	101
	<div class="product_detail_wrap">
						<section class="sec01 clearfix">
							<div class="prod_slide sec_left">
								<img src="/images/sub/p101.jpg" alt="슬라이드1">
								
							</div>
							<div class="sec_right">
								<h3 class="prod_name">제품명</h3>
								<span class="desc">설명</span>
								<p class="desc_small">
									상세설명
								</p>
								<a href="/contact/contact.php" class="contact">CONTACT</a>
								<div class="prod_slide_nav">
									<img class="psn" src="/images/sub/p101.jpg" alt="슬라이드1">
									
								</div>
							</div>							
						</section>	

							<section class="sec02">
							<h3 class="">인증현황</h3>
							<p>
                            내용<br>내용내용내용내용내용<br>내용내용내용내용내용<br>내용내용내용내용내용<br>내용내용내용내용내용<br>내용내용내용내용내용<br>내용내용내용내용내용
							</p>
							<div class="sec02_bg_area">
								<style>
									.sec02_bg_area {background-image:url(/images/sub/product_certificate.jpg);}
								</style>
							</div>
						</section>

						<section class="sec03">
							<h3 class="feature_title">특성
                                <span class="feature_subtitle">특성부제목</span>
                            </h3>
							<div class="sec03_cont clearfix">
								<div class="left">
									<p class="title">안전성 :</p>
									<p class="cont">
										안전성내용
									</p>
									<p class="title">유연성 :</p>
									<p class="cont">
										유연성내용
									</p>
								</div>
								<div class="right">
									<p class="title">우수한 적응성 :</p>
									<p class="cont">
										적응성내용										
									</p>
								</div>
							</div>							
						</section>

						<section class="sec04">
							<h3>기술적 사양</h3>
							<table>
								<tr>
									<td>모델</td>
									<td>1100TL</td>
									<td>1500TL</td>
									<td>2000TL</td>
									<td>2500TL</td>
									<td>3000TL</td>
									<td>3600TL</td>
									<td>4000TL</td>
									<td>5000TL</td>
								</tr>
								<tr class="bn">
									<td>항목</td>
									<td colspan="8"></td>	
								</tr>
								<tr>
									<td>항목</td>
									<td>1250</td>
									<td>1600</td>
									<td>2200</td>
									<td>2700</td>
									<td>3300</td>
									<td>3960</td>
									<td>4400</td>
									<td>5500</td>
								</tr>

								<tr>
									<td>항목</td>
									<td colspan="4">450</td>
									<td colspan="4">500</td>
								</tr>

								<tr>
									<td>항목</td>
									<td>60</td>
									<td colspan="7">150</td>
								</tr>

								<tr>
									<td>항목</td>
									<td>50~450</td>
									<td colspan="3">100~450</td>
									<td colspan="4">100~500</td>
								</tr>

								<tr>
									<td>항목</td>
									<td colspan="5">1</td>	
									<td colspan="3">2</td>
								</tr>

								<tr>
									<td>항목</td>
									<td colspan="8">1</td>
								</tr>

								<tr>
									<td>항목</td>
									<td colspan="3">1</td>
									<td>12</td>
									<td>15</td>
									<td colspan="3">22</td>
								</tr>

								<tr class="bn">
									<td>항목</td>
									<td colspan="8"></td>
								</tr>

								<tr>
									<td>항목</td>
									<td>1100</td>
									<td>1500</td>
									<td>2000</td>
									<td>2500</td>
									<td>3000</td>
									<td>3600</td>
									<td>4000</td>
									<td>5000</td>
								</tr>
								<tr>
									<td>항목</td>
									<td>1100</td>
									<td>1500</td>
									<td>2000</td>
									<td>2500</td>
									<td>3000</td>
									<td>3600</td>
									<td>4000</td>
									<td>5000</td>
								</tr>
								<tr>
									<td>항목</td>
									<td>4.7</td>
									<td>6.5</td>
									<td>8.6</td>
									<td>10.8</td>
									<td>13</td>
									<td>15.7</td>
									<td>17.4</td>
									<td>21.5</td>
								</tr>
								<tr>
									<td>항목</td>
									<td>5.3</td>
									<td>7.9</td>
									<td>10.5</td>
									<td>12.5</td>
									<td>15</td>
									<td>17.3</td>
									<td>20</td>
									<td>25</td>
								</tr>

								<tr>
									<td>항목</td>
									<td colspan="8">230</td>
								</tr>

								<tr>
									<td>항목</td>
									<td colspan="4">170~280</td>
									<td colspan="4">180~280</td>
								</tr>

								<tr>
									<td>항목</td>
									<td colspan="8">50/60±5</td>
								</tr>

								<tr>
									<td>항목</td>
									<td colspan="8">Default 1 lagging, adjustable 0.8 (leading)~0.8 (lagging)</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="8"> < 3% (at nominal output power) </td>
								</tr>
								<tr class="bn">
									<td>항목</td>
									<td colspan="8"></td>
								</tr>

								<tr>
									<td>항목</td>
									<td>96.5%</td>
									<td>96.5%</td>
									<td>97.0%</td>
									<td>97.0%</td>
									<td>97.2%</td>
									<td>97.3%</td>
									<td>97.6%</td>
									<td>97.6%</td>
								</tr>
								
								<tr>
									<td>항목</td>
									<td>95.5%</td>
									<td>95.5%</td>
									<td>96.2%</td>
									<td>96.1%</td>
									<td>96.4%</td>
									<td>96.5%</td>
									<td>97.0%</td>
									<td>97.1%</td>
								</tr>
								
								<tr>
									<td>항목</td>
									<td>99.8%</td>
									<td>99.8%</td>
									<td>99.6%</td>
									<td>99.8%</td>
									<td>99.6%</td>
									<td>99.6%</td>
									<td>99.6%</td>
									<td>99.6%</td>
								</tr>
								
								<tr>
									<td>항목</td>
									<td colspan="8">-25~+60</td>
								</tr>

								<tr>
									<td>항목</td>
									<td colspan="8">≤25</td>
								</tr>

								<tr>
									<td>항목</td>
									<td colspan="8">0</td>
								</tr>

								<tr>
									<td>항목</td>
									<td colspan="8">Transformerless</td>
								</tr>
								
								<tr>
									<td>항목</td>
									<td colspan="8">Natural cooling</td>
								</tr>
								
								<tr>
									<td>항목</td>
									<td colspan="8">IP65</td>
								</tr>
								
								<tr>
									<td>항목</td>
									<td colspan="8">RS232 (WiFi optional)</td>
								</tr>
								
								<tr>
									<td>항목</td>
									<td colspan="3">290*140*295</td>
									<td colspan="2">340*450*350</td>
									<td colspan="3">364*164*390</td>
								</tr>
								
								<tr>
									<td>항목</td>
									<td colspan="3">7.5</td>
									<td colspan="2">12</td>
									<td>13.5</td>
									<td>14</td>
									<td>14.5</td>
								</tr>
							</table>
						</section>
					</div>
	
<?}?>

<?if($gidx == "2"){?>
 					<div class="product_detail_wrap">
						<section class="sec01 clearfix">
							<div class="prod_slide sec_left">
								<img src="/images/sub/p102.jpg" alt="슬라이드1">
								
							</div>
							<div class="sec_right">
								<h3 class="prod_name">제품명</h3>
								<span class="desc">설명</span>
								<p class="desc_small">
									상세설명
								</p>
								<a href="/contact/contact.php" class="contact">CONTACT</a>
								<div class="prod_slide_nav">
									<img class="psn" src="/images/sub/p102.jpg" alt="슬라이드1">
									
								</div>
							</div>							
						</section>	

							<section class="sec02">
							<h3 class="">인증현황</h3>
							<p>
                            내용<br>내용내용내용내용내용<br>내용내용내용내용내용<br>내용내용내용내용내용<br>내용내용내용내용내용<br>내용내용내용내용내용<br>내용내용내용내용내용
							</p>
							<div class="sec02_bg_area">
								<style>
									.sec02_bg_area {background-image:url(/images/sub/product_certificate.jpg);}
								</style>
							</div>
						</section>

						<section class="sec03">
							<h3 class="feature_title">특성
                                <span class="feature_subtitle">특성부제목</span>
                            </h3>
							<div class="sec03_cont clearfix">
								<div class="left">
									<p class="title">안전성 :</p>
									<p class="cont">
										안전성내용
									</p>
									<p class="title">유연성 :</p>
									<p class="cont">
										유연성내용
									</p>
								</div>
								<div class="right">
									<p class="title">우수한 적응성 :</p>
									<p class="cont">
										적응성내용										
									</p>
								</div>
							</div>							
						</section>

						<section class="sec04">
							<h3>기술적 사양</h3>
							<table>
								<tr>
									<td>모델</td>
									<td>3000TL</td>
									<td>4000TL</td>
									<td>5000TL</td>									
								</tr>
								<tr class="bn">
									<td>항목</td>
									<td colspan="3"></td>	
								</tr>
								<tr>
									<td>항목</td>
									<td>3120</td>
									<td>4160</td>
									<td>5200</td>									
								</tr>

								<tr>
									<td>항목</td>
									<td colspan="3">500</td>									
								</tr>
								
								<tr>
									<td>항목</td>
									<td colspan="3">150</td>									
								</tr>
								
								<tr>
									<td>항목</td>
									<td colspan="3">100~450</td>									
								</tr>
								
								<tr>
									<td>항목</td>
									<td colspan="3">2</td>									
								</tr>
								
								<tr>
									<td>항목</td>
									<td colspan="3">2</td>									
								</tr>
								
								<tr>
									<td>항목</td>
									<td>2000</td>
									<td>2300</td>
									<td>3000</td>
								</tr>

								<tr>
									<td>항목</td>
									<td>IN1:11.3/IN2:11.3</td>
									<td>IN1:13.0/IN2:13.0</td>
									<td>IN1:15.0/IN2:15.0</td>
								</tr>

								<tr class="bn">
									<td>항목</td>
									<td colspan="3"></td>	
								</tr>

								<tr>
									<td>항목</td>
									<td>3300</td>
									<td>4000</td>
									<td>5000/4950</td>
								</tr>
								
								<tr>
									<td>항목</td>
									<td>3300</td>
									<td>4000</td>
									<td>5000/4950</td>
								</tr>

								<tr>
									<td>항목</td>
									<td>13</td>
									<td>17.4</td>
									<td>21.5</td>
								</tr>

								<tr>
									<td>항목</td>
									<td>15</td>
									<td>20</td>
									<td>25</td>
								</tr>

								<tr>
									<td>항목</td>
									<td colspan="3">230</td>
								</tr>
								
								<tr>
									<td>항목</td>
									<td colspan="3">185~265</td>
								</tr>
								
								<tr>
									<td>항목</td>
									<td colspan="3">50</td>
								</tr>
								
								<tr>
									<td>항목</td>
									<td colspan="3">50±5</td>
								</tr>
								
								<tr>
									<td>항목</td>
									<td colspan="3">50±5</td>
								</tr>
								
								<tr>
									<td>항목</td>
									<td colspan="3">Default 1 lagging, adjustable 0.8 (leading)~0.8 (lagging)</td>
								</tr>

								<tr>
									<td>항목</td>
									<td colspan="3">< 3% (at nominal output power)</td>
								</tr>

								<tr class="bn">
									<td>항목</td>
									<td colspan="3"></td>	
								</tr>

								<tr>
									<td>항목</td>
									<td>97.0%</td>
									<td>97.1%</td>
									<td>97.2%</td>
								</tr>

								<tr>
									<td>항목</td>
									<td>96.4%</td>
									<td>96.5%</td>
									<td>96.5%</td>
								</tr>

								<tr>
									<td>항목</td>
									<td>99.8%</td>
									<td>99.8%</td>
									<td>99.6%</td>
								</tr>

								<tr class="bn">
									<td>항목</td>
									<td colspan="3">-25~+60</td>
								</tr>

								<tr>
									<td>항목</td>
									<td colspan="3">≤25</td>
								</tr>
								
								<tr>
									<td>항목</td>
									<td colspan="3">0</td>
								</tr>
								
								<tr>
									<td>항목</td>
									<td colspan="3">Transformerless</td>
								</tr>
								
								<tr>
									<td>항목</td>
									<td colspan="3">Natural cooling</td>
								</tr>
								
								<tr>
									<td>항목</td>
									<td colspan="3">IP65</td>
								</tr>
								
								<tr>
									<td>항목</td>
									<td colspan="3">RS232 (WiFi optional)</td>
								</tr>
								
								<tr>
									<td>항목</td>
									<td colspan="3">358*145*380</td>
								</tr>
								
								<tr>
									<td>항목</td>
									<td>14</td>
									<td>14.5</td>
									<td>15</td>
								</tr>
							</table>
						</section>
					</div>
<?}?>

<?if($gidx == "3"){?>
 103-01
	<div class="product_detail_wrap">
						<section class="sec01 clearfix">
							<div class="prod_slide sec_left">
								<img src="/images/sub/p103_01_01.jpg" alt="슬라이드1">
								
							</div>
							<div class="sec_right">
								<h3 class="prod_name">제품명</h3>
								<span class="desc">설명</span>
								<p class="desc_small">
									상세설명
								</p>
								<a href="/contact/contact.php" class="contact">CONTACT</a>
								<div class="prod_slide_nav">
									<img class="psn" src="/images/sub/p103_01_01.jpg" alt="슬라이드1">
									
								</div>
							</div>							
						</section>	

						<section class="sec03">
							<h3 class="feature_title">특성
                                <span class="feature_subtitle">특성부제목</span>
                            </h3>
							<div class="sec03_cont clearfix">
								<div class="left">
									<p class="title">안전성 :</p>
									<p class="cont">
								    안전성내용
									</p>
									<p class="title">유연성 :</p>
									<p class="cont">
                                    유연성내용
									</p>
								</div>
								<div class="right">
									<p class="title">우수한 적응성 :</p>
									<p class="cont">
									적응성내용
									</p>
								</div>
							</div>							
						</section>

						<section class="sec02">
							<h3 class="">인증현황</h3>
							<p>
                            내용<br>내용내용내용내용내용<br>내용내용내용내용내용<br>내용내용내용내용내용<br>내용내용내용내용내용<br>내용내용내용내용내용<br>내용내용내용내용내용
							</p>
							<div class="sec02_bg_area">
								<style>
									.sec02_bg_area {background-image:url(/images/sub/product_certificate.jpg);}
								</style>
							</div>
						</section>
						<section class="sec04">
							<h3>기술적 사양</h3>
                            <table>
                                <tr>
                                    <td>Model<br>(SUNLEAF)</td>
                                    <td style="width:240px;">3000TL</td>
                                    <td style="width:240px;">4000TL</td>
                                    <td style="width:240px;">5000TL</td>
                                </tr>
                                <tr>
                                    <td colspan="4">Input(DC Side)</td>
                                </tr>
                                <tr>
                                    <td>Max.DC input<br>Power (W)</td>
                                    <td>3120</td>
                                    <td>4160</td>
                                    <td>5200</td>
                                </tr>
                                <tr>
                                    <td>Max.DC voltage (Vdc)</td> 
                                    <td colspan="3">500</td>
                                </tr>
                                <tr>
                                    <td>Start voltage (Vdc)</td>
                                    <td colspan="3">150</td>
                                </tr>
                                <tr>
                                    <td>MPPT operating<br>range (Vdc)</td>
                                    <td colspan="3">100~450</td>

                                </tr>
                                <tr>
                                    <td>Number of<br>parallel inputs</td>
                                    <td colspan="3">2</td>
                                </tr>
                                <tr>
                                    <td>Number of<br>MPP trackers</td>
                                    <td colspan="3">2</td>
                                </tr>
                                <tr>
                                    <td>Max.input power<br>per MPPT (W)</td>
                                    <td>2000</td>
                                    <td>2300</td>
                                    <td>3000</td>
                                </tr>
                                <tr>
                                    <td>Max. input current (A)</td>
                                    <td>IN1:11.3/IN2:11.3</td>
                                    <td>IN1:13.0/IN2:13.0</td>
                                    <td>IN1:15.0/IN2:15.0</td>
                                </tr>
                                <tr>
                                    <td colspan="4">Output Data (AC side)</td>
                                </tr>
                                <tr>
                                    <td>Nominal output<br>power</td>
                                    <td>3300</td>
                                    <td>4000</td>
                                    <td>5000/4950</td>
                                </tr>
                                <tr>
                                    <td>Max. Output<br>power</td>
                                    <td>3300</td>
                                    <td>4000</td>
                                    <td>5000/4950</td>
                                </tr>
                                <tr>
                                    <td>Nominal output<br>current (A)</td>
                                    <td>13</td>
                                    <td>17.4</td>
                                    <td>21.5</td>
                                </tr>
                                <tr>
                                    <td>Max. output<br>current (A)</td>
                                    <td>15</td>
                                    <td>20</td>
                                    <td>25</td>
                                </tr>
                                <tr>
                                    <td>Nominal AC<br>voltage (Vac)</td>
                                    <td colspan="3">230</td>
                                </tr>
                                <tr>
                                    <td>AC voltage<br>range (Vac)*</td>
                                    <td colspan="3">185~265</td>
                                </tr>
                                <tr>
                                    <td>Nominal AC grid<br>frequency (Hz)</td>
                                    <td colspan="3">50</td>
                                </tr>
                                <tr>
                                    <td> AC grid frequency<br>range (Hz)*</td>
                                    <td colspan="3">50±5</td>
                                </tr>
                                <tr>
                                    <td>Power factor<br>(cos φ)</td>
                                    <td colspan="3">Default 1 lagging, adjustable 0.8 (leading)~0.8 (lagging)</td>
                                </tr>
                                <tr>
                                    <td>Harmonic<br>distortion(THDI)</td>
                                    <td colspan="3"><3% (at nominal output power)</td>
                                </tr>
                                <tr>
                                    <td colspan="4">Efficiency</td>
                                </tr>    
                                <tr>
                                    <td>Max.efficiency</td>
                                    <td>97.0%</td>
                                    <td>97.1%</td>
                                    <td>97.2%</td>
                                </tr>
                                <tr>
                                    <td>Euro.efficiency</td>
                                    <td>96.4%</td>
                                    <td>96.5%</td>
                                    <td>96.5%</td>
                                </tr>
                                <tr>
                                    <td>MPPT.efficiency</td>
                                    <td>99.8%</td>
                                    <td>99.8</td>
                                    <td>99.6</td>
                                </tr>
                                <tr>
                                    <td colspan="4">Genaral data</td>
                                </tr>
                                <tr>
                                    <td>Operating temperature<br>range (°C)</td>
                                    <td colspan="3">-25~+60</td> 
                                </tr>
                                <tr>
                                    <td>Noise emission<br>(typical) [dB (A)]</td>
                                    <td colspan="3">≤25</td>
                                </tr>
                                <tr>
                                    <td>Power consumption<br>at night (W)</td>
                                    <td colspan="3">0</td>
                                </tr>
                                <tr>
                                    <td>Electrical isolation</td>
                                    <td colspan="3">Transformerless</td>
                                </tr>
                                <tr>
                                    <td>Cooling concept</td>
                                    <td colspan="3">Natural cooling</td>
                                </tr>
                                <tr>
                                    <td>Degree of protection</td>
                                    <td colspan="3">IP65</td>
                                </tr>
                                <tr>
                                    <td>Communication</td>
                                    <td colspan="3">RS232 (WiFi optional)</td>
                                </tr>
                                <tr>
                                    <td>Dimension<br>(W*D*H mm)</td>
                                    <td colspan="3">358*145*380</td>
                                </tr>
                                <tr>
                                    <td>Weight (kg)</td>
                                    <td>14</td>
                                    <td>14.5</td>
                                    <td>15</td>
                                </tr>

                            </table>  
						</section>
					</div>
<?}?>

<?if($gidx == "4"){?>
 103-02
 					<div class="product_detail_wrap">
						<section class="sec01 clearfix">
							<div class="prod_slide sec_left">
								<img src="/images/sub/p103_02_01.jpg" alt="슬라이드1">
								<img src="/images/sub/p103_02_02.jpg" alt="슬라이드1">		
								<img src="/images/sub/p103_02_03.jpg" alt="슬라이드1">		
							</div>
							<div class="sec_right">
								<h3 class="prod_name">제품명</h3>
								<span class="desc">설명</span>
								<p class="desc_small">
									상세설명
								</p>
								<a href="/contact/contact.php" class="contact">CONTACT</a>
								<div class="prod_slide_nav">
									<img class="psn" src="/images/sub/p103_02_01.jpg" alt="슬라이드1">
									<img class="psn" src="/images/sub/p103_02_02.jpg" alt="슬라이드1">		
									<img class="psn" src="/images/sub/p103_02_03.jpg" alt="슬라이드1">	
								</div>
							</div>							
						</section>	

						<section class="sec03">
							<h3 class="feature_title">특성
                                <span class="feature_subtitle">특성부제목</span>
                            </h3>
							<div class="sec03_cont clearfix">
								<div class="left">
									<p class="title">안전성 :</p>
									<p class="cont">
								    안전성내용
									</p>
									<p class="title">유연성 :</p>
									<p class="cont">
                                    유연성내용
									</p>
								</div>
								<div class="right">
									<p class="title">우수한 적응성 :</p>
									<p class="cont">
									적응성내용
									</p>
								</div>
							</div>							
						</section>

						<section class="sec02">
							<h3 class="">인증현황</h3>
							<p>
                            내용<br>내용내용내용내용내용<br>내용내용내용내용내용<br>내용내용내용내용내용<br>내용내용내용내용내용<br>내용내용내용내용내용<br>내용내용내용내용내용
							</p>
							<div class="sec02_bg_area">
								<style>
									.sec02_bg_area {background-image:url(/images/sub/product_certificate.jpg);}
								</style>
							</div>
						</section>
						<section class="sec04">
							<h3>기술적 사양</h3>
                            <table>
                                <tr>
                                    <td>Model<br>(SUNLEAF)</td>
                                    <td>5000TL</td>
                                    <td>6000TL</td>
                                    <td>8000TL</td>
                                    <td>10000TL</td>
                                    <td>12000TL</td>
                                    <td>15000TL</td>
                                </tr>
                                <tr class="bn">
                                    <td>Input Data(DC Side)</td>
                                    <td colspan="6"></td>
                                </tr>
                                <tr>
                                    <td>Max.DC input<br>Power (W)</td>
                                    <td>5150</td>
                                    <td>6150</td>
                                    <td>8200</td>
                                    <td>11200</td>
                                    <td>13300</td>
                                    <td>16500</td>
                                </tr>
                                <tr>
                                    <td>Max.DC voltage (Vdc)</td> 
                                    <td colspan="3">900</td>
                                    <td colspan="3">1000</td>
                                </tr>
                                <tr>
                                    <td>Start voltage (Vdc)</td>
                                    <td colspan="6">250</td>
                                </tr>
                                <tr>
                                    <td>MPPT operating<br>range (Vdc)</td>
                                    <td colspan="3">250~720</td>
                                    <td colspan="3">250~800</td>
                                </tr>
                                <tr>
                                    <td>Number of inputs</td>
                                    <td colspan="3">2</td>
                                    <td colspan="3">4</td>
                                </tr>
                                <tr>
                                    <td>Number of<br>MPP Trackers</td>
                                    <td colspan="6">2</td>
                                </tr>
                                <tr>
                                    <td>Max.input power<br>per MPPT</td>
                                    <td>3500</td>
                                    <td>4000</td>
                                    <td>5000</td>
                                    <td>6000</td>
                                    <td>7000</td>
                                    <td>8500</td>
                                </tr>
                                <tr>
                                    <td>Max. input current (A)</td>
                                    <td colspan="3">2*10.5</td>
                                    <td>2*11</td>
                                    <td>2*18</td>
                                    <td>2*24</td>
                                </tr>
                                <tr>
                                    <td class="bn">Output Data (AC side)</td>
                                    <td colspan="6"> </td>
                                </tr>
                                <tr>
                                    <td>Nominal output<br>power (W)</td>
                                    <td>5000</td>
                                    <td>6000</td>
                                    <td>8000</td>
                                    <td>10000</td>
                                    <td>12000</td>
                                    <td>15000</td>
                                </tr>
                                <tr>
                                    <td>Max. Output<br>power (W)</td>
                                    <td>5000</td>
                                    <td>6000</td>
                                    <td>8000</td>
                                    <td>10000</td>
                                    <td>12000</td>
                                    <td>15000</td>
                                </tr>
                                <tr>
                                    <td>Nominal output<br>current (A)</td>
                                    <td>7.6</td>
                                    <td>9.1</td>
                                    <td>12.1</td>
                                    <td>15.2</td>
                                    <td>18.2</td>
                                    <td>22.7</td>
                                </tr>
                                <tr>
                                    <td>Max. output<br>current (A)</td>
                                    <td>8.4</td>
                                    <td>10</td>
                                    <td>13.3</td>
                                    <td>16.7</td>
                                    <td>20</td>
                                    <td>25</td>
                                </tr>
                                <tr>
                                    <td>Nominal output<br>voltage (Vac)</td>
                                    <td colspan="6">400/380</td>
                                </tr>
                                <tr>
                                    <td>Output voltage<br>range (Vac)*</td>
                                    <td colspan="6">360~440</td>
                                </tr>
                                <tr>
                                    <td>Grid frequency<br>range (Hz)*</td>
                                    <td colspan="6">50/60±5</td>
                                </tr>
                                <tr>
                                    <td>Power factor<br>(cos φ)</td>
                                    <td colspan="6">Default 1 lagging, adjustable 0.9 (leading)~0.9 (lagging)</td>
                                </tr>
                                <tr>
                                    <td>THDI
                                    </td>
                                    <td colspan="6"><3% (at nominal output power)</td>
                                </tr>
                                <tr class="bn">
                                    <td>Efficiency</td>
                                    <td colspan="6"></td>
                                </tr>    
                                <tr>
                                    <td>Max.efficiency</td>
                                    <td>97.70%</td>
                                    <td>97.80%</td>
                                    <td>98.00%</td>
                                    <td>98.10%</td>
                                    <td>98.10%</td>
                                    <td>98.10%</td>
                                </tr>
                                <tr>
                                    <td>Euro.efficiency</td>
                                    <td>96.80%</td>
                                    <td>96.90%</td>
                                    <td>97.30%</td>
                                    <td>97.50%</td>
                                    <td>97.60%</td>
                                    <td>97.50%</td>
                                </tr>
                                <tr>
                                    <td>MPPT.efficiency</td>
                                    <td>99.60%</td>
                                    <td>99.60%</td>
                                    <td>99.60%</td>
                                    <td>99.60%</td>
                                    <td>99.60%</td>
                                    <td>99.60%</td>              
                                </tr>
                                <tr>
                                    <td>System</td>
                                    <td colspan="6"></td>
                                </tr>  
                                <tr>
                                    <td>Operation<br>temperature (℃)</td>
                                    <td colspan="6">-25~+60</td> 
                                </tr>
                                <tr>
                                    <td>Noise [dB (A)]</td>
                                    <td colspan="6">≤25</td>
                                </tr>
                                <tr>
                                    <td>Consumption<br>at night (W)</td>
                                    <td colspan="6">0</td>
                                </tr>   
                                <tr>
                                    <td>Electrical Isolation</td>
                                    <td colspan="6">Transformerless</td>
                                </tr>
                                <tr>
                                    <td>Cooling concept</td>
                                    <td colspan="6">Natural cooling</td>
                                </tr>
                                <tr>
                                    <td>Degree of protection</td>
                                    <td colspan="6">IP65</td>
                                </tr>
                                <tr>
                                    <td>Communication</td>
                                    <td colspan="3">RS232 (RS485/WiFi optional)</td>
                                    <td colspan="3">RS485/RS232 (WiFi optional)</td>
                                </tr>
                                <tr>
                                    <td>Dimension<br>(W*D*H mm)</td>
                                    <td colspan="3">450*355*180</td>
                                    <td colspan="2">528*411*209</td>
                                    <td>688*486*259</td>
                                </tr>
                                <tr>
                                    <td>Weight (kg)</td>
                                    <td colspan="3">18</td>
                                    <td colspan="2">24.5</td>
                                    <td>50</td>
                                </tr>
                            </table>

                            <table style="margin-top:-100px;">
                                <tr>
                                    <td>Model<br>(SUNLEAF)</td>
                                    <td>17000TL+</td>
                                    <td>20000TL+</td>
                                    <td>25000TL+</td>
                                    <td>30000TL+</td>
                                    <td>50000TL+</td>
                                    <td>28000TL+</td>
                                </tr>
                                <tr class="bn">
                                    <td>Input Data(DC Side)</td>
                                    <td colspan="6"></td>
                                </tr>
                                <tr>
                                    <td>Max.DC input<br>Power (W)</td>
                                    <td>19000</td>
                                    <td>22000</td>
                                    <td>27000</td>
                                    <td>33000</td>
                                    <td>40000</td>
                                    <td>30000</td>
                                </tr>
                                <tr>
                                    <td>Max.DC voltage (Vdc)</td> 
                                    <td colspan="6">1000</td>
                                </tr>
                                <tr>
                                    <td>Start voltage (Vdc)</td>
                                    <td colspan="6">250</td>
                                </tr>
                                <tr>
                                    <td>MPPT operating<br>range (Vdc)</td>
                                    <td colspan="6">250~800</td>
                                </tr>
                                <tr>
                                    <td>Number of inputs</td>
                                    <td colspan="2">4</td>
                                    <td colspan="2">6</td>
                                    <td>8</td>
                                    <td>6</td>
                                </tr>
                                <tr>
                                    <td>Number of<br>MPP Trackers</td>
                                    <td colspan="2">2</td>
                                    <td colspan="2">3</td>
                                    <td>4</td>
                                    <td>3</td>                               
                                </tr>
                                <tr>
                                    <td>Max.input power<br>per MPPT</td>
                                    <td>9500</td>
                                    <td>11000</td>
                                    <td>13500</td>
                                    <td>9500</td>
                                    <td>11000</td>
                                    <td>11000</td>
                                </tr>
                                <tr>
                                    <td>Max. input current (A)</td>
                                    <td>2*25</td>
                                    <td>2*22</td>
                                    <td>3*18</td>
                                    <td>3*18</td>
                                    <td>4*20</td>
                                    <td>3*18</td>
                                </tr>
                                <tr>
                                    <td class="bn">Output Data (AC side)</td>
                                    <td colspan="6"></td>
                                </tr>
                                <tr>
                                    <td>Nominal output<br>power (W)</td>
                                    <td>17000</td>
                                    <td>20000</td>
                                    <td>25000</td>
                                    <td>30000</td>
                                    <td>50000</td>
                                    <td>28000</td>
                                </tr>
                                <tr>
                                    <td>Max. Output<br>power (W)</td>
                                    <td>17000</td>
                                    <td>20000</td>
                                    <td>25000</td>
                                    <td>30000</td>
                                    <td>50000</td>
                                    <td>28000</td>
                                </tr>
                                <tr>
                                    <td>Nominal output<br>current (A)</td>
                                    <td>25.8</td>
                                    <td>30.3</td>
                                    <td>38</td>
                                    <td>45.6</td>
                                    <td>76</td>
                                    <td>33.7</td>
                                </tr>
                                <tr>
                                    <td>Max. output<br>current (A)</td>
                                    <td>28.4</td>
                                    <td>33.3</td>
                                    <td>41.8</td>
                                    <td>50.2</td>
                                    <td>83.6</td>
                                    <td>37.1</td>
                                </tr>
                                <tr>
                                    <td>Nominal output<br>voltage (Vac)</td>
                                    <td colspan="5">400/380</td>
                                    <td>480</td>
                                </tr>
                                <tr>
                                    <td>Output voltage<br>range (Vac)*</td>
                                    <td colspan="5">360~440</td>
                                    <td>432~528</td>
                                </tr>
                                <tr>
                                    <td>Grid frequency<br>range (Hz)*</td>
                                    <td colspan="6">50/60±5</td>
                                </tr>
                                <tr>
                                    <td>Power factor<br>(cos φ)</td>
                                    <td colspan="6">Default 1 lagging, adjustable 0.9 (leading)~0.9 (lagging)</td>
                                </tr>
                                <tr>
                                    <td>THDI
                                    </td>
                                    <td colspan="6"><3% (at nominal output power)</td>
                                </tr>
                                <tr class="bn">
                                    <td>Efficiency</td>
                                    <td colspan="6"></td>
                                </tr>    
                                <tr>
                                    <td>Max.efficiency</td>
                                    <td>98.10%</td>
                                    <td>98.20%</td>
                                    <td>98.20%</td>
                                    <td>98.20%</td>
                                    <td>98.10%</td>
                                    <td>98.10%</td>
                                </tr>
                                <tr>
                                    <td>Euro.efficiency</td>
                                    <td>97.60%</td>
                                    <td>97.60%</td>
                                    <td>97.50%</td>
                                    <td>97.60%</td>
                                    <td>97.60%</td>
                                    <td>97.50%</td>                   
                                </tr>
                                <tr>
                                    <td>MPPT.efficiency</td>
                                    <td>99.60%</td>
                                    <td>99.60%</td>
                                    <td>99.60%</td>
                                    <td>99.60%</td>
                                    <td>99.60%</td>
                                    <td>99.60%</td>              
                                </tr>
                                <tr>
                                    <td>System</td>
                                    <td colspan="6"></td>
                                </tr>  
                                <tr>
                                    <td>Operation<br>temperature (℃)</td>
                                    <td colspan="6">-25~+60</td> 
                                </tr>
                                <tr>
                                    <td>Noise [dB (A)]</td>
                                    <td colspan="6">≤25</td>
                                </tr>
                                <tr>
                                    <td>Consumption<br>at night (W)</td>
                                    <td colspan="6">0</td>
                                </tr>   
                                <tr>
                                    <td>Electrical Isolation</td>
                                    <td colspan="6">Transformerless</td>
                                </tr>
                                <tr>
                                    <td>Cooling concept</td>
                                    <td colspan="6">Natural cooling</td>
                                </tr>
                                <tr>
                                    <td>Degree of protection</td>
                                    <td colspan="6">IP65</td>
                                </tr>
                                <tr>
                                    <td>Communication</td>
                                    <td colspan="6">RS485/RS232 (WiFi optional)</td>
                                </tr>
                                <tr>
                                    <td>Dimension<br>(W*D*H mm)</td>
                                    <td colspan="2">688*486*259</td>
                                    <td>801.5*501*259</td>
                                    <td>786.5*476*277.3</td>
                                    <td>950*560*290</td>
                                    <td>801.5*501*259</td>
                                </tr>
                                <tr>
                                    <td>Weight (kg)</td>
                                    <td colspan="2">50</td>
                                    <td>60</td>
                                    <td>55</td>
                                    <td>68</td>
                                    <td>60</td>
                                </tr>
                            </table>
						</section>
					</div>
<?}?>

<?if($gidx == "5"){?>
 104
			<div class="product_detail_wrap">
						<section class="sec01 clearfix">
							<div class="prod_slide sec_left">
								<img src="/images/sub/p104.jpg" alt="슬라이드1">
								<img src="/images/sub/p104_02.jpg" alt="슬라이드1">
							</div>
							<div class="sec_right">
								<h3 class="prod_name">제품명</h3>
								<span class="desc">설명</span>
								<p class="desc_small">
									상세설명
								</p>
								<a href="/contact/contact.php" class="contact">CONTACT</a>
								<div class="prod_slide_nav">
									<img class="psn" src="/images/sub/p104.jpg" alt="슬라이드1">
									<img class="psn" src="/images/sub/p104_02.jpg" alt="슬라이드1">
								</div>
							</div>							
						</section>	

							<section class="sec02">
							<h3 class="">인증현황</h3>
							<p>
                            내용<br>내용내용내용내용내용<br>내용내용내용내용내용<br>내용내용내용내용내용<br>내용내용내용내용내용<br>내용내용내용내용내용<br>내용내용내용내용내용
							</p>
							<div class="sec02_bg_area">
								<style>
									.sec02_bg_area {background-image:url(/images/sub/product_certificate.jpg);}
								</style>
							</div>
						</section>

						<section class="sec03">
							<h3 class="feature_title">특성
                                <span class="feature_subtitle">특성부제목</span>
                            </h3>
							<div class="sec03_cont clearfix">
								<div class="left">
									<p class="title">안전성 :</p>
									<p class="cont">
										안전성내용
									</p>
									<p class="title">유연성 :</p>
									<p class="cont">
										유연성내용
									</p>
								</div>
								<div class="right">
									<p class="title">우수한 적응성 :</p>
									<p class="cont">
										적응성내용										
									</p>
								</div>
							</div>							
						</section>

						<section class="sec04">
							<h3>기술적 사양</h3>
							<table>
								<tr>
									<td>항목</td>
									<td>750TL</td>
									<td>1100TL</td>
									<td>1500TL</td>
									<td>2000TL</td>
									<td>2500TL</td>
									<td>3000TL</td>
									<td>3600TL</td>
									<td>5000TL</td>
								</tr>
								<tr class="bn">
									<td>항목</td>
									<td colspan="8"></td>								
								</tr>
                                <tr>
                                    <td>항목</td>
                                    <td>900</td>
                                    <td>1300</td>
                                    <td>1720</td>
                                    <td>2300</td>
                                    <td>2620</td>
                                    <td>3550</td>
                                    <td>3750</td>
                                    <td>5200</td>
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td colspan="3">450</td>
                                    <td colspan="4">500</td>
                                    <td colspan="1">550</td>
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td colspan="2">60</td>
                                    <td colspan="6">150</td>
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td colspan="2">50~450</td>
                                    <td colspan="4">100~450</td>
                                    <td colspan="2">100~500</td>
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td colspan="3">1</td>
                                    <td colspan="3">2</td>
                                    <td colspan="2">3</td>
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td colspan="8">1</td>
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td>10</td>
                                    <td>10</td>
                                    <td>12</td>
                                    <td>13</td>
                                    <td>14.5</td>
                                    <td>20</td>
                                    <td>21</td>
                                    <td>22.5</td>
                                </tr>
                                <tr class="bn">
                                    <td>항목</td>
                                    <td colspan="8"></td>
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td>750</td>
                                    <td>1100</td>
                                    <td>1500</td>
                                    <td>2000</td>
                                    <td>2500</td>
                                    <td>3000</td>
                                    <td>3600</td>
                                    <td>5000</td>
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td>1100</td>
                                    <td>1100</td>
                                    <td>1650</td>
                                    <td>2200</td>
                                    <td>2500</td>
                                    <td>3200</td>
                                    <td>3600</td>
                                    <td>5000</td>
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td>3.3</td>
                                    <td>4.8</td>
                                    <td>6.5</td>
                                    <td>8.7</td>
                                    <td>10.8</td>
                                    <td>13</td>
                                    <td>15.7</td>
                                    <td>21.7</td>                                
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td>4</td>
                                    <td>5.7</td>
                                    <td>7.9</td>
                                    <td>10.5</td>
                                    <td>12.5</td>
                                    <td>15.7</td>
                                    <td>16</td>
                                    <td>24</td>                                
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td colspan="8">230</td>
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td colspan="8">185~265</td>
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td colspan="8">50±5</td>
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td colspan="8">>0.99</td>
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td colspan="8"><3% (at nominal output power)</td>
                                </tr>
                                <tr class="bn">
                                    <td>항목</td>
                                    <td colspan="8"></td>
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td>96.5%</td>
                                    <td>96.5%</td>
                                    <td>96.5%</td>
                                    <td>97.0%</td>
                                    <td>97.0%</td>
                                    <td>97.2%</td>
                                    <td>97.3%</td>
                                    <td>97.6%</td>
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td>95.4%</td>
                                    <td>95.4%</td>
                                    <td>95.5%</td>
                                    <td>96.2%</td>
                                    <td>96.1%</td>
                                    <td>96.4%</td>
                                    <td>96.5%</td>
                                    <td>97.0%</td>
                                </tr>

                                <tr>
                                    <td>항목</td>
                                    <td>99.6%</td>
                                    <td>99.6%</td>
                                    <td>99.6%</td>
                                    <td>99.6%</td>
                                    <td>99.6%</td>
                                    <td>99.6%</td>
                                    <td>99.6%</td>
                                    <td>99.6%</td>
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td colspan="8">-25~+60</td>
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td colspan="8">≤20</td>
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td colspan="8">0</td>
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td colspan="8">Transformerless</td>
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td colspan="8">Natural cooling </td>
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td colspan="8">IP65</td>
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td colspan="8">RS232 (WiFi optional)</td>
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td colspan="2">290*150*295</td>
                                    <td>345*152*315</td>
                                    <td colspan="2">345*152*355</td>
                                    <td colspan="2">345*152*385</td>
                                    <td>345*152*505</td>
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td>7</td>
                                    <td>7.5</td>
                                    <td>12</td>
                                    <td colspan="2">13</td>
                                    <td colspan="2">15</td>
                                    <td>19</td>
                                </tr>
							</table>
						</section>
					</div>
<?}?>

<?if($gidx == "6"){?>
 105
 			<div class="product_detail_wrap">
						<section class="sec01 clearfix">
							<div class="prod_slide sec_left">
								<img src="/images/sub/p105.jpg" alt="슬라이드1">
								
							</div>
							<div class="sec_right">
								<h3 class="prod_name">제품명</h3>
								<span class="desc">설명</span>
								<p class="desc_small">
									상세설명
								</p>
								<a href="/contact/contact.php" class="contact">CONTACT</a>
								<div class="prod_slide_nav">
									<img class="psn" src="/images/sub/p105.jpg" alt="슬라이드1">
									
								</div>
							</div>							
						</section>	

							<section class="sec02">
							<h3 class="">인증현황</h3>
							<p>
                            내용<br>내용내용내용내용내용<br>내용내용내용내용내용<br>내용내용내용내용내용<br>내용내용내용내용내용<br>내용내용내용내용내용<br>내용내용내용내용내용
							</p>
							<div class="sec02_bg_area">
								<style>
									.sec02_bg_area {background-image:url(/images/sub/product_certificate.jpg);}
								</style>
							</div>
						</section>

						<section class="sec03">
							<h3 class="feature_title">특성
                                <span class="feature_subtitle">특성부제목</span>
                            </h3>
							<div class="sec03_cont clearfix">
								<div class="left">
									<p class="title">안전성 :</p>
									<p class="cont">
										안전성내용
									</p>
									<p class="title">유연성 :</p>
									<p class="cont">
										유연성내용
									</p>
								</div>
								<div class="right">
									<p class="title">우수한 적응성 :</p>
									<p class="cont">
										적응성내용										
									</p>
								</div>
							</div>							
						</section>

						<section class="sec04">
							<h3>기술적 사양</h3>
							<table>
								<tr>
									<td>아이템</td>
									<td>3300TL</td>
									<td>4000TL</td>
									<td>5000TL</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="3"></td>								
								</tr>
								<tr>
									<td>항목</td>
									<td>3450</td>
									<td>4160</td>
									<td>5200</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="3">500</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="3">150</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="3">100~450</td>
								</tr>
								
								<tr>
									<td>항목</td>
									<td colspan="3">2</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="3">2</td>
								</tr>
								<tr>
									<td>항목</td>
									<td>2000</td>
									<td>2300</td>
									<td>3000</td>
								</tr>
								<tr>
									<td>항목</td>
									<td>2*10</td>
									<td>2*13</td>
									<td>2*15</td>
								</tr>
								<tr class="bn">
									<td>항목</td>
									<td colspan="3"></td>								
								</tr>
								<tr>
									<td>항목</td>
									<td>3300</td>
									<td>4000</td>
									<td>5000</td>
								</tr>
								<tr>
									<td>항목</td>
									<td>3300</td>
									<td>4000</td>
									<td>5000</td>
								</tr>
								<tr>
									<td>항목</td>
									<td>14.3</td>
									<td>17.4</td>
									<td>21.6</td>
								</tr>
								<tr>
									<td>항목</td>
									<td>16.5</td>
									<td>20</td>
									<td>25</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="3">230</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="3">185~265</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="3">50±5</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="3">>0.99</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="3"> < 3% (at nominal output power)</td>
								</tr>
								<tr class="bn">
									<td>항목</td>
									<td colspan="3"></td>
								</tr>
								<tr>
									<td>항목</td>
									<td>97.3%</td>
									<td>97.5%</td>
									<td>97.5%</td>
								</tr>
								<tr>
									<td>항목</td>
									<td>96.5%</td>
									<td>96.8%</td>
									<td>96.7%</td>
								</tr>
								<tr>
									<td>항목</td>
									<td>99.6%</td>
									<td>99.6%</td>
									<td>99.6%</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="3">-25~+60</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="3">	≤25</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="3">	0</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="3">	Transformerless</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="3">	Natural Cooling</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="3">	IP65</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="3">	RS232 (WiFi Optional)</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="3">345*152*435</td>
								</tr>
								<tr>
									<td>항목</td>
									<td>16.5</td>
									<td colspan="2">18</td>
								</tr>

							</table>
						</section>
					</div>
<?}?>

<?if($gidx == "7"){?>
 106
 <div class="product_detail_wrap">
						<section class="sec01 clearfix">
							<div class="prod_slide sec_left">
								<img src="/images/sub/p106.jpg" alt="슬라이드1">
								<img src="/images/sub/p106_02.jpg" alt="슬라이드1">
								<img src="/images/sub/p106_03.jpg" alt="슬라이드1">
								
							</div>
							<div class="sec_right">
								<h3 class="prod_name">제품명</h3>
								<span class="desc">설명</span>
								<p class="desc_small">
									상세설명
								</p>
								<a href="/contact/contact.php" class="contact">CONTACT</a>
								<div class="prod_slide_nav">
									<img class="psn" src="/images/sub/p106.jpg" alt="슬라이드1">
									<img class="psn" src="/images/sub/p106_02.jpg" alt="슬라이드1">
									<img class="psn" src="/images/sub/p106_03.jpg" alt="슬라이드1">
									
								</div>
							</div>							
						</section>	

							<section class="sec02">
							<h3 class="">인증현황</h3>
							<p>
                            내용<br>내용내용내용내용내용<br>내용내용내용내용내용<br>내용내용내용내용내용<br>내용내용내용내용내용<br>내용내용내용내용내용<br>내용내용내용내용내용
							</p>
							<div class="sec02_bg_area">
								<style>
									.sec02_bg_area {background-image:url(/images/sub/sec02_js.jpg);}
								</style>
							</div>
						</section>

						<section class="sec03">
							<h3 class="feature_title">특성
                                <span class="feature_subtitle">특성부제목</span>
                            </h3>
							<div class="sec03_cont clearfix">
								<div class="left">
									<p class="title">안전성 :</p>
									<p class="cont">
										안전성내용
									</p>
									<p class="title">유연성 :</p>
									<p class="cont">
										유연성내용
									</p>
								</div>
								<div class="right">
									<p class="title">우수한 적응성 :</p>
									<p class="cont">
										적응성내용										
									</p>
								</div>
							</div>							
						</section>

						<section class="sec04">
							<h3>기술적 사양</h3>
							<table>
								<tr>
									<td>아이템</td>
									<td style="width: 100px;" colspan="2">50KT</td>
									<td style="width: 100px;" colspan="2">75KT</td>
									<td style="width: 100px;" colspan="2">100KT</td>
									<td style="width: 100px;">150KT</td>
									<td style="width: 100px;">175KT</td>
								</tr>
								<tr class="bn">
									<td>항목</td>
									<td colspan="8"></td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="2">58</td>								
									<td colspan="2">87</td>								
									<td colspan="2">115</td>								
									<td colspan="">172</td>								
									<td colspan="">202</td>								
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="8">1000</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="8">450~820 (Start voltage 470Vdc)</td>

								</tr>
								<tr>
									<td>항목</td>
									<td colspan="6">2</td>
									<td colspan="2">4</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="8">1</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="2">128</td>								
									<td colspan="2">200</td>								
									<td colspan="2">250</td>								
									<td colspan="">380</td>								
									<td colspan="">500</td>								
								</tr>
								<tr class="bn">
									<td>항목</td>
									<td colspan="8"></td>
								</tr>
<!-- 								tr>td{항목}+td[colspan="2"]{}*3+td{}*2 -->
								<tr>
									<td>항목</td>
									<td colspan="2">50</td>
									<td colspan="2">75</td>
									<td colspan="2">100</td>
									<td>150</td>
									<td>175</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="2">55</td>
									<td colspan="2">82.5</td>
									<td colspan="2">110</td>
									<td>165</td>
									<td>192</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="2">72</td>
									<td colspan="2">108</td>
									<td colspan="2">144</td>
									<td>217</td>
									<td>254</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="2">80</td>
									<td colspan="2">120</td>
									<td colspan="2">158</td>
									<td>238</td>
									<td>280</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="8">400</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="8">360~440</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="8">	50±5</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="8">	0.9 (leding)~0.9 (lgging)</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="8">	< 3% (at nominal output power)</td>
								</tr>
								<tr class="bn">
									<td>항목</td>
									<td colspan="8"></td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="2">96.5%</td>
									<td colspan="2">96.8</td>
									<td colspan="2">97.1%</td>
									<td>97.2%</td>
									<td>97.2%</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="2">95.8%</td>
									<td colspan="2">96.2%</td>
									<td colspan="2">96.4%</td>
									<td>96.5%</td>
									<td>96.6%</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="2">99.9%</td>
									<td colspan="2">99.9%</td>
									<td colspan="2">99.9%</td>
									<td>99.9%</td>
									<td>99.9%</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="8">-25~+60 (derated power above 50℃)</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="8">6000 (derated power above 3000m)</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="8">≤65</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="8">	< 100</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="8">Transformer</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="8">Fan Cooling</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="8">IP20</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="8">RS485</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="2">600*650*1450</td>
									<td colspan="2">650*700*1550</td>
									<td colspan="2">800*700*1700</td>
									<td colspan="2">900*900*1850</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="2">520</td>
									<td colspan="2">650</td>
									<td colspan="2">810</td>
									<td>1100</td>
									<td>1150</td>
								</tr>
							</table>

							<table>
								<tr>
									<td>아이템</td>
									<td style="width: 100px;" colspan="2">50KT</td>
									<td style="width: 100px;" colspan="2">75KT</td>
									<td style="width: 100px;" colspan="4">100KT</td>
								</tr>
								<tr class="bn">
									<td>항목</td>
									<td colspan="8"></td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="2">285</td>								
									<td colspan="2">570</td>								
									<td colspan="4">715</td>							
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="8">1000</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="4">450~820 (Start voltage 470Vdc)</td>
									<td colspan="4">500~820 (Start voltage 520Vdc)</td>

								</tr>
								<tr>
									<td>항목</td>
									<td colspan="2">5</td>
									<td colspan="6">12</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="8">1</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="2">600</td>								
									<td colspan="2">1200</td>								
									<td colspan="4">1400</td>							
								</tr>
								<tr class="bn">
									<td>항목</td>
									<td colspan="8"></td>
								</tr>
<!-- 								tr>td{항목}+td[colspan="2"]{}*3+td{}*2 -->
								<tr>
									<td>항목</td>
									<td colspan="2">250</td>
									<td colspan="2">500</td>
									<td colspan="4">630</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="2">275</td>
									<td colspan="2">550</td>
									<td colspan="4">693</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="2">362</td>
									<td colspan="2">725</td>
									<td colspan="4">910</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="2">400</td>
									<td colspan="2">800</td>
									<td colspan="4">1000</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="8">400</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="8">360~440</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="8">	50±5</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="8">	0.9 (leding)~0.9 (lgging)</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="8">	< 3% (at nominal output power)</td>
								</tr>
								<tr class="bn">
									<td>항목</td>
									<td colspan="8"></td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="2">97.3%</td>
									<td colspan="2">97.3%</td>
									<td colspan="4">97.5%</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="2">96.8%</td>
									<td colspan="2">96.6%</td>
									<td colspan="4">97.0%</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="2">99.9%</td>
									<td colspan="2">99.9%</td>
									<td colspan="4">99.9%</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="8">-25~+60 (derated power above 50℃)</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="8">6000 (derated power above 3000m)</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="8">≤65</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="8">	< 100</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="8">Transformer</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="8">Fan Cooling</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="8">IP20</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="8">RS485</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="2">	1400*900*1850</td>
									<td colspan="2">	2700*900*2200</td>
									<td colspan="4">2900*900*1850</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="2">	1750</td>
									<td colspan="2">	3050</td>
									<td colspan="4">	3300</td>
								</tr>
							</table>

							<table>
								<tr>
									<td>아이템</td>
									<td style="width: 100px;" colspan="2">250KTL</td>
									<td style="width: 100px;" colspan="2">500KTL</td>
									<td style="width: 100px;" colspan="4">630KTL</td>
								</tr>
								<tr class="bn">
									<td>항목</td>
									<td colspan="8"></td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="2">285</td>								
									<td colspan="2">570</td>								
									<td colspan="4">715</td>							
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="8">1000</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="4">450~820 (Start voltage 470Vdc)</td>
									<td colspan="4">500~820 (Start voltage 520Vdc)</td>

								</tr>
								<tr>
									<td>항목</td>
									<td colspan="2">5</td>
									<td colspan="6">12</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="8">1</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="2">600</td>								
									<td colspan="2">1200</td>								
									<td colspan="4">1400</td>							
								</tr>
								<tr class="bn">
									<td>항목</td>
									<td colspan="8"></td>
								</tr>
<!-- 								tr>td{항목}+td[colspan="2"]{}*3+td{}*2 -->
								<tr>
									<td>항목</td>
									<td colspan="2">250</td>
									<td colspan="2">500</td>
									<td colspan="4">630</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="2">275</td>
									<td colspan="2">550</td>
									<td colspan="4">693</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="2">535</td>
									<td colspan="2">915</td>
									<td colspan="4">1155</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="2">589</td>
									<td colspan="2">1006</td>
									<td colspan="4">1270</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="2">270</td>
									<td colspan="6">315</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="2">243~297</td>
									<td colspan="6">283~347</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="8">	50±5</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="8">	0.9 (leding)~0.9 (lgging)</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="8">	< 3% (at nominal output power)</td>
								</tr>
								<tr class="bn">
									<td>항목</td>
									<td colspan="8"></td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="2">98.4%</td>
									<td colspan="2">98.5%</td>
									<td colspan="4">98.6%</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="2">98.0%</td>
									<td colspan="2">98.0%</td>
									<td colspan="4">98.2%</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="2">99.9%</td>
									<td colspan="2">99.9%</td>
									<td colspan="4">99.9%</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="8">-25~+60 (derated power above 50℃)</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="8">6000 (derated power above 3000m)</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="8">≤65</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="8">	< 100</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="8">Transformer</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="8">Fan Cooling</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="8">IP20</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="8">RS485</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="2">1000*900*1850</td>
									<td colspan="2">1700*900*1850</td>
									<td colspan="4">	1700*900*1850</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="2">		890</td>
									<td colspan="2">		1427</td>
									<td colspan="4">		1677</td>
								</tr>
							</table>
						</section>
					</div>
<?}?>

<?if($gidx == "8"){?>
 107
 <div class="product_detail_wrap">
						<section class="sec01 clearfix">
							<div class="prod_slide sec_left">
								<img src="/images/sub/p107.jpg" alt="슬라이드1">
								
							</div>
							<div class="sec_right">
								<h3 class="prod_name">제품명</h3>
								<span class="desc">설명</span>
								<p class="desc_small">
									상세설명
								</p>
								<a href="/contact/contact.php" class="contact">CONTACT</a>
								<div class="prod_slide_nav">
									<img class="psn" src="/images/sub/p107.jpg" alt="슬라이드1">
									
								</div>
							</div>							
						</section>	

							<section class="sec02">
							<h3 class="">인증현황</h3>
							<p>
                            내용<br>내용내용내용내용내용<br>내용내용내용내용내용<br>내용내용내용내용내용<br>내용내용내용내용내용<br>내용내용내용내용내용<br>내용내용내용내용내용
							</p>
							<div class="sec02_bg_area">
								<style>
									.sec02_bg_area {background-image:url(/images/sub/sec02_js.jpg);}
								</style>
							</div>
						</section>

						<section class="sec03">
							<h3 class="feature_title">특성
                                <span class="feature_subtitle">특성부제목</span>
                            </h3>
							<div class="sec03_cont clearfix">
								<div class="left">
									<p class="title">안전성 :</p>
									<p class="cont">
										안전성내용
									</p>
									<p class="title">유연성 :</p>
									<p class="cont">
										유연성내용
									</p>
								</div>
								<div class="right">
									<p class="title">우수한 적응성 :</p>
									<p class="cont">
										적응성내용										
									</p>
								</div>
							</div>							
						</section>

						<section class="sec04">
							<h3>기술적 사양</h3>
							<table>
								<tr>
									<td colspan="2">항목</td>
									<td>SCR/SDR-8</td>
									<td>SCR/SDR-10</td>
									<td>SCR/SDR-12</td>
									<td>SCR/SDR-14</td>
									<td>SCR/SDR-16</td>
									<td>SCR/SDR-18</td>
								</tr>
                                <tr>
                                    <td colspan="2">항목</td>
                                    <td colspan="6">1000</td>
                                </tr>
								<tr>
                                    <td colspan="2">항목</td>
									<td>8</td>
									<td>10</td>
									<td>12</td>
									<td>14</td>
									<td>16</td>
									<td>18</td>								
								</tr>
                                <tr>
                                    <td colspan="2">항목</td>
                                    <td colspan="6">15</td>
                                </tr>
                                <tr>
                                    <td colspan="2">항목</td>
                                    <td colspan="6">PG21</td>
                                </tr>
                                <tr>
                                    <td colspan="2">항목</td>
                                    <td colspan="6">IP65</td>
                                </tr>
                                <tr>
                                    <td colspan="2">항목</td>
                                    <td colspan="6">-25~60</td>
                                </tr>
                                <tr>
                                    <td colspan="2">항목</td>
                                    <td colspan="6">0~99%</td>
                                </tr>
                                <tr>
                                    <td colspan="2">항목</td>
                                    <td colspan="6">yes</td>
                                </tr>
                                <tr>
                                    <td colspan="2">항목</td>
                                    <td colspan="6">yes</td>
                                </tr>
                                <tr>
                                    <td colspan="2">항목</td>
                                    <td colspan="6">Diode (Optional)</td>
                                </tr>
                                <tr>
                                    <td colspan="2">항목</td>
                                    <td colspan="6">no</td>
                                </tr>
                                <tr>
                                    <td colspan="2">항목</td>
                                    <td>400*214*400 (SCR)</td>
                                    <td colspan="2">500*214*400 (SCR)</td>
                                    <td colspan="2">500*214*400 (SCR)</td>
                                    <td>600*214*400 (SCR)</td>
                                </tr>
                                <tr>
                                    <td colspan="2">항목</td>
                                    <td>420*218*480 (SDR)</td>
                                    <td colspan="2">469*224*480 (SDR)</td>
                                    <td colspan="2">599*225*500 (SDR)</td>
                                    <td>629*225*500 (SDR)</td>
                                </tr>
                                <tr>
                                    <td colspan="2">항목</td>
                                    <td>16 (SCR)/17 (SDR)</td>
                                    <td colspan="2">17 (SCR)/21 (SDR)</td>
                                    <td colspan="2">18 (SCR)/25 (SDR)</td>
                                    <td>19 (SCR)/26 (SDR)</td>
                                </tr>
                                <tr>
                                    <td colspan="8">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td colspan="2">항목</td>
                                    <td>SCR/SDR-8M</td>
                                    <td>SCR/SDR-10M</td>
                                    <td>SCR/SDR-12M</td>
                                    <td>SCR/SDR-14M</td>
                                    <td>SCR/SDR-16M</td>
                                    <td>SCR/SDR-18M</td>
                                </tr>
                                <tr>
                                    <td colspan="2">항목</td>
                                    <td colspan="6">1000</td>
                                </tr>
                                <tr>
                                    <td colspan="2">항목</td>
                                    <td>8</td>
                                    <td>10</td>
                                    <td>12</td>
                                    <td>14</td>
                                    <td>16</td>
                                    <td>18</td>
                                </tr>
                                <tr>
                                    <td colspan="2">항목</td>
                                    <td colspan="6">15</td>
                                </tr>
                                <tr>
                                    <td colspan="2">항목</td>
                                    <td colspan="6">PG21</td>
                                </tr>
                                <tr>
                                    <td colspan="2">항목</td>
                                    <td colspan="6">IP65</td>
                                </tr>
                                <tr>
                                    <td colspan="2">항목</td>
                                    <td colspan="6">-25~60</td>
                                </tr>
                                <tr>
                                    <td colspan="2">항목</td>
                                    <td colspan="6">0~99%</td>
                                </tr>
                                <tr>
                                    <td colspan="2">항목</td>
                                    <td colspan="6">yes</td>
                                </tr>
                                <tr>
                                    <td colspan="2">항목</td>
                                    <td colspan="6">yes</td>
                                </tr>
                                <tr>
                                    <td rowspan="3">대항목</td>
                                    <td>중항목</td>
                                    <td colspan="6">yes</td>
                                </tr>
                                <tr>
                                    <td>중항목</td>
                                    <td colspan="6">yes</td>
                                </tr>
                                <tr>
                                    <td >중항목</td>
                                    <td colspan="6">yes</td>
                                </tr>
                                <tr>
                                    <td colspan="2">항목</td>
                                    <td colspan="6">Diode (Optional)</td>
                                </tr>
                                <tr>
                                    <td colspan="2">항목</td>
                                    <td colspan="6">RS485</td>
                                </tr>
                                <tr>
                                    <td colspan="2" rowspan="2">항목</td>
                                    <td>430*213*500 (SCR)</td>
                                    <td colspan="2">480*214*500 (SCR)</td>
                                    <td colspan="2">550*213*500 (SCR)</td>
                                    <td>620*214*500 (SCR)</td>
                                </tr>
                                <tr>
                                    <td>500*225*550 (SDR)</td>
                                    <td colspan="2">540*225*550 (SDR)</td>
                                    <td colspan="2">620*225*550 (SDR)</td>
                                    <td>669*230*550 (SDR)</td>
                                </tr>
                                <tr>
                                    <td colspan="2">항목</td>
                                    <td>17 (SCR)/18 (SDR)</td>
                                    <td colspan="2">20 (SCR)/25 (SDR)</td>
                                    <td colspan="2">24 (SCR)/28 (SDR)</td>
                                    <td>25 (SCR)/31 (SDR)</td>
                                </tr>
							</table>
						</section>
					</div>
<?}?>

<?if($gidx == "9"){?>
 108-01
 	<div class="product_detail_wrap">
						<section class="sec01 clearfix">
							<div class="prod_slide sec_left">
								<img src="/images/sub/p108_01.jpg" alt="슬라이드1">
								
							</div>
							<div class="sec_right">
								<h3 class="prod_name">제품명</h3>
								<span class="desc">설명</span>
								<p class="desc_small">
									상세설명
								</p>
								<a href="/contact/contact.php" class="contact">CONTACT</a>
								<div class="prod_slide_nav">
									<img class="psn" src="/images/sub/p108_01.jpg" alt="슬라이드1">
									
								</div>
							</div>							
						</section>	

							<section class="sec02">
							<h3 class="">인증현황</h3>
							<p>
                            내용<br>내용내용내용내용내용<br>내용내용내용내용내용<br>내용내용내용내용내용<br>내용내용내용내용내용<br>내용내용내용내용내용<br>내용내용내용내용내용
							</p>
							<div class="sec02_bg_area">
								<style>
									.sec02_bg_area {background-image:url(/images/sub/sec02_js.jpg);}
								</style>
							</div>
						</section>

						<section class="sec03">
							<h3 class="feature_title">특성
                                <span class="feature_subtitle">특성부제목</span>
                            </h3>
							<div class="sec03_cont clearfix">
								<div class="left">
									<p class="title">안전성 :</p>
									<p class="cont">
										안전성내용
									</p>
									<p class="title">유연성 :</p>
									<p class="cont">
										유연성내용
									</p>
								</div>
								<div class="right">
									<p class="title">우수한 적응성 :</p>
									<p class="cont">
										적응성내용										
									</p>
								</div>
							</div>							
						</section>

						<section class="sec04">
							<h3>기술적 사양</h3>
                            <table>
                                <tr>
                                    <td>항목</td>
                                    <td>WiFi Plug</td>
                                </tr>
                                <tr class="bn">
                                    <td>항목</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td>RS232</td>
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td>WiFi (802.11 b/g/n)</td>
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td>1pc</td>
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td>9600</td>
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td>100m in outdoor open area without obstruction</td>
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td>5 (default)/1~15 (Optional)</td>
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td>Wireless</td>
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td>WiFi point-to-point/remote server</td>
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td>Web server</td>
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td>Powered by RS232 port on inverter</td>
                                </tr>
                                <tr class="bn">
                                    <td >항목</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td>-25~+60</td>
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td>-40~+80</td>
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td>IP65</td>
                                </tr>
                                <tr class="bn">
                                    <td>항목</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td>FCC\CE\C-tick</td>
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td>80*85*22</td>
                                </tr>
                            </table>
						</section>
					</div>
<?}?>

<?if($gidx == "10"){?>
 108-02
 <div class="product_detail_wrap">
						<section class="sec01 clearfix">
							<div class="prod_slide sec_left">
								<img src="/images/sub/p108_03.jpg" alt="슬라이드1">
								
							</div>
							<div class="sec_right">
								<h3 class="prod_name">제품명</h3>
								<span class="desc">설명</span>
								<p class="desc_small">
									상세설명
								</p>
								<a href="/contact/contact.php" class="contact">CONTACT</a>
								<div class="prod_slide_nav">
									<img class="psn" src="/images/sub/p108_03.jpg" alt="슬라이드1">
									
								</div>
							</div>							
						</section>	

							<section class="sec02">
							<h3 class="">인증현황</h3>
							<p>
                            내용<br>내용내용내용내용내용<br>내용내용내용내용내용<br>내용내용내용내용내용<br>내용내용내용내용내용<br>내용내용내용내용내용<br>내용내용내용내용내용
							</p>
							<div class="sec02_bg_area">
								<style>
									.sec02_bg_area {background-image:url(/images/sub/sec02_js.jpg);}
								</style>
							</div>
						</section>

						<section class="sec03">
							<h3 class="feature_title">특성
                                <span class="feature_subtitle">특성부제목</span>
                            </h3>
							<div class="sec03_cont clearfix">
								<div class="left">
									<p class="title">안전성 :</p>
									<p class="cont">
										안전성내용
									</p>
									<p class="title">유연성 :</p>
									<p class="cont">
										유연성내용
									</p>
								</div>
								<div class="right">
									<p class="title">우수한 적응성 :</p>
									<p class="cont">
										적응성내용										
									</p>
								</div>
							</div>							
						</section>

						<section class="sec04">
							<h3>기술적 사양</h3>
                            <table>
                                <tr>
                                    <td>항목</td>
                                    <td>RS485</td>
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td>WiFi (802.11 b/g)/Ethernet</td>
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td><1</td>
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td>9600</td>
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td>300m in outdoor open area without obstruction</td>
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td>2.4G</td>
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td>5minutes</td>
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td>Serial/Wireless</td>
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td>Serial/WiFi point-to-point/remote server</td>
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td>4LEDs</td>
                                </tr>
                                <tr class="bn">
                                    <td>항목</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td>DC5</td>
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td><1.6</td>
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td><2.5</td>
                                </tr>
                                <tr class="bn">
                                    <td>항목</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td>-10~+65</td>
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td>10%~90% Relative humidity, no condensation</td>
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td>-40~+85</td>
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td><40%</td>
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td>IP21</td>
                                </tr>
                                <tr class="bn">
                                    <td>항목</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td>Wall mounted or flat wise</td>
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td>FCC\CE\RoHS</td>
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td>110*80*26</td>
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td>108</td>
                                </tr>
                            </table>
						</section>
					</div>
<?}?>

<?if($gidx == "11"){?>
 108-03
 <div class="product_detail_wrap">
						<section class="sec01 clearfix">
							<div class="prod_slide sec_left">
								<img src="/images/sub/p108_02.jpg" alt="슬라이드1">
								
							</div>
							<div class="sec_right">
								<h3 class="prod_name">제품명</h3>
								<span class="desc">설명</span>
								<p class="desc_small">
									상세설명
								</p>
								<a href="/contact/contact.php" class="contact">CONTACT</a>
								<div class="prod_slide_nav">
									<img class="psn" src="/images/sub/p108_02.jpg" alt="슬라이드1">
									
								</div>
							</div>							
						</section>	

							<section class="sec02">
							<h3 class="">인증현황</h3>
							<p>
                            내용<br>내용내용내용내용내용<br>내용내용내용내용내용<br>내용내용내용내용내용<br>내용내용내용내용내용<br>내용내용내용내용내용<br>내용내용내용내용내용
							</p>
							<div class="sec02_bg_area">
								<style>
									.sec02_bg_area {background-image:url(/images/sub/sec02_js.jpg);}
								</style>
							</div>
						</section>

						<section class="sec03">
							<h3 class="feature_title">특성
                                <span class="feature_subtitle">특성부제목</span>
                            </h3>
							<div class="sec03_cont clearfix">
								<div class="left">
									<p class="title">안전성 :</p>
									<p class="cont">
										안전성내용
									</p>
									<p class="title">유연성 :</p>
									<p class="cont">
										유연성내용
									</p>
								</div>
								<div class="right">
									<p class="title">우수한 적응성 :</p>
									<p class="cont">
										적응성내용										
									</p>
								</div>
							</div>							
						</section>

						<section class="sec04">
							<h3>기술적 사양</h3>
                            <table>
                                <tr>
                                    <td>항목</td>
                                    <td>Receiver Unit</td>
                                    <td>Emitter Unit</td>
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td>AAA*3</td>
                                    <td>Powered by RS232 port on inverter</td>
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td><30</td>
                                    <td><120</td>
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td>433MHZ FSK</td>
                                    <td>433MHZ FSK</td>
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td>100</td>
                                    <td>100</td>
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td>90*76MM digital display</td>
                                    <td>\</td>
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td>\</td>
                                    <td>Plug on RS232 port on inverter, each EU per inverter</td>
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td>5</td>
                                    <td>\</td>
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td>5</td>
                                    <td>\</td>
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td>Yes</td>
                                    <td>\</td>
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td>Yes</td>
                                    <td>\</td>
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td>Yes</td>
                                    <td>\</td>
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td>D/M/Y</td>
                                    <td>\</td>
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td>Yes</td>
                                    <td>\</td>
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td>Yes/LCD display& warning buzzer</td>
                                    <td>\</td>
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td> < 1</td>
                                    <td>\</td>
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td>IP20 (Indoor type)</td>
                                    <td>IP65 (Outdoor type)</td>
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td>0~+50</td>
                                    <td>0~+50</td>
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td>2</td>
                                    <td>2</td>
                                </tr>
                            </table>
						</section>
					</div>
<?}?>

<?if($gidx == "12"){?>
 109
 	<div class="product_detail_wrap">
						<section class="sec01 clearfix">
							<div class="prod_slide sec_left">
								<img src="/images/sub/p109.jpg" alt="슬라이드1">
								
							</div>
							<div class="sec_right">
								<h3 class="prod_name">제품명</h3>
								<span class="desc">설명</span>
								<p class="desc_small">
									상세설명
								</p>
								<a href="/contact/contact.php" class="contact">CONTACT</a>
								<div class="prod_slide_nav">
									<img class="psn" src="/images/sub/p109.jpg" alt="슬라이드1">
									
								</div>
							</div>							
						</section>	

							<section class="sec02">
							<h3 class="">인증현황</h3>
							<p>
                            내용<br>내용내용내용내용내용<br>내용내용내용내용내용<br>내용내용내용내용내용<br>내용내용내용내용내용<br>내용내용내용내용내용<br>내용내용내용내용내용
							</p>
							<div class="sec02_bg_area">
								<style>
									.sec02_bg_area {background-image:url(/images/sub/sec02_js.jpg);}
								</style>
							</div>
						</section>

						<section class="sec03">
							<h3 class="feature_title">특성
                                <span class="feature_subtitle">특성부제목</span>
                            </h3>
							<div class="sec03_cont clearfix">
								<div class="left">
									<p class="title">안전성 :</p>
									<p class="cont">
										안전성내용
									</p>
									<p class="title">유연성 :</p>
									<p class="cont">
										유연성내용
									</p>
								</div>
								<div class="right">
									<p class="title">우수한 적응성 :</p>
									<p class="cont">
										적응성내용										
									</p>
								</div>
							</div>							
						</section>

						<section class="sec04">
							<h3>기술적 사양</h3>
                            <table>
                                <tr>
                                    <td>항목</td>
                                    <td>JFY-ACB300K</td>
                                    <td>JFY-ACB500K</td>
                                    <td>JFY-ACB1000K</td>
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td>3pcs*100kW</td>
                                    <td>2pcs*250kW</td>
                                    <td>2pcs*500kW</td>
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td>300</td>
                                    <td>500</td>
                                    <td>1000</td>
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td>476</td>
                                    <td>1200</td>
                                    <td>1800</td>
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td colspan="3">Copper Bars</td>
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td colspan="3">Superior SPD</td>
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td colspan="3">3000Vac, 1min</td>
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td colspan="3">IP20</td>
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td>900*600*1800</td>
                                    <td>1100*600*1800</td>
                                    <td>1300*600*1800</td>
                                </tr>
                                <tr>
                                    <td>항목</td>
                                    <td>155</td>
                                    <td>190</td>
                                    <td>250</td>
                                </tr>
                            </table>
						</section>
					</div>
<?}?>

<?if($gidx == "13"){?>
 201
<?}?>

<?if($gidx == "14"){?>
 202
<?}?>

<?if($gidx == "15"){?>
 203-01
<?}?>

<?if($gidx == "16"){?>
 203-02
<?}?>

<?if($gidx == "17"){?>
 204-01
<?}?>

<?if($gidx == "18"){?>
 204-02
<?}?>

<?if($gidx == "19"){?>
 205
<?}?>

<?if($gidx == "20"){?>
 206-01
<?}?>

<?if($gidx == "21"){?>
 206-02
<?}?>

<?if($gidx == "22"){?>
 206-03
<?}?>

<?if($gidx == "23"){?>
 207-01
<?}?>

<?if($gidx == "24"){?>
 207-02
<?}?>

<?if($gidx == "25"){?>
 208
<?}?>

<?if($gidx == "26"){?>
 301-01
<?}?>

<?if($gidx == "27"){?>
 301-02
<?}?>

<?if($gidx == "28"){?>
 301-03
<?}?>

<?if($gidx == "29"){?>
 301-04
<?}?>

<?if($gidx == "30"){?>

<?}?>

<?if($gidx == "31"){?>

<?}?>

<?if($gidx == "32"){?>
 	<div class="product_detail_wrap">
						<section class="sec01 clearfix">
							<div class="prod_slide sec_left">
								<img src="/images/sub/pr04_01.jpg" alt="슬라이드1">
								
							</div>
							<div class="sec_right">
								<h3 class="prod_name">제품명</h3>
								<span class="desc">설명</span>
								<p class="desc_small">
									상세설명
								</p>
								<a href="/contact/contact.php" class="contact">CONTACT</a>
								<div class="prod_slide_nav">
									<img class="psn" src="/images/sub/pr04_01.jpg" alt="슬라이드1">
									
								</div>
							</div>							
						</section>	

						<section class="sec02">
							<h3 class="">부제목</h3>
							<p>
                            내용
							</p>
							<div class="sec02_bg_area">
								<style>
									.sec02_bg_area {background-image:url(/images/sub/test.jpg);}
								</style>
							</div>
						</section>

						<section class="sec03">
							<h3>특성</h3>
							<div class="sec03_cont clearfix">
								<div class="left">
									<p class="title">안전성 :</p>
									<p class="cont">
								    안전성내용
									</p>
									<p class="title">유연성 :</p>
									<p class="cont">
                                    유연성내용
									</p>
								</div>
								<div class="right">
									<p class="title">우수한 적응성 :</p>
									<p class="cont">
									적응성내용
									</p>
								</div>
							</div>							
						</section>

						<section class="sec04">
							<h3>기술적 사양</h3>
                            <table>
                                <tr>
                                    <td>Item</td>
                                    <td style="width:188px;">CSP 30K750</td>
                                    <td style="width:188px;">CSP 15K750</td>
                                    <td style="width:396px">CSP 7K450</td>
                                </tr>
                                <tr>
                                    <td>Input Voltage</td>
                                    <td colspan="2">AC380V±15% (three-phase five-wire system)</td>
                                    <td>AC220V±15% (single phase three-wire system)</td>
                                </tr>
                                <tr>
                                    <td>Input Frequency</td>
                                    <td colspan="3">45Hz~65Hz</td>
                                </tr>
                                <tr>
                                    <td>Input power factor</td> 
                                    <td colspan="3">≥0.99</td>
                                </tr>
                                <tr>
                                    <td>Peak Efficiency</td>
                                    <td colspan="3">≥94%</td>
                                </tr>
                                <tr>
                                    <td>Output rating</td>
                                    <td>30KW</td>
                                    <td>15KW</td>
                                    <td>6.6KW</td>
                                </tr>
                                <tr>
                                    <td>Output voltage range</td>
                                    <td colspan="2">DC 200~750V</td>
                                    <td colspan="2">DC 270~750V</td>
                                </tr>
                                <tr>
                                    <td>Stable voltage<br>accuracy</td>
                                    <td colspan="3">≤±0.5%</td>
                                </tr>
                                <tr>
                                    <td>Stable current<br>accuracy</td>
                                    <td colspan="3">≤±0.5%</td>
                                </tr>
                                <tr>
                                    <td>Ripple Factor</td>
                                    <td colspan="3">≤1%</td>
                                </tr>
                                <tr>
                                    <td>Time of soft start</td>
                                    <td colspan="3">3~8s</td>
                                </tr>
                                <tr>
                                    <td>Operating<br>temperature</td>
                                    <td colspan="3">–30~+50°C</td>
                                </tr>
                                <tr>
                                    <td>Storage Temperature</td>
                                    <td colspan="3">–40~+70°C</td>
                                </tr>
                                <tr>
                                    <td>Operating humidity</td>
                                    <td colspan="3">5%~95%</td>
                                </tr>
                                <tr>
                                    <td>Interface for charging</td>
                                    <td colspan="3">1 (meet the national standard GB/T 20234.3)</td>
                                </tr>
                                <tr>
                                    <td>Communication<br>Protocol</td>
                                    <td colspan="3">GBT 27930-2011</td>
                                </tr>
                                <tr>
                                    <td>Communication<br>interface</td>
                                    <td colspan="3">Standard : RS485/LAN, optional : CAN/GPRS</td>
                                </tr>
                                <tr>
                                    <td>Noise</td>
                                    <td colspan="3">≤65dB</td>
                                </tr>
                                <tr>
                                    <td>Level of protection</td>
                                    <td colspan="3">IP54</td>
                                </tr>
                                <tr>
                                    <td>Protection Functions</td>
                                    <td colspan="3">Input over/undervoltage, output overvoltage, overcurrent, short circuit, leakage,<br>lightning protection, emergency stop and other protective features</td>
                                </tr>
                                <tr>
                                    <td>Dimension (W*D*H)</td>
                                    <td>530*200*752 mm</td>
                                    <td>530*170*752 mm</td>
                                    <td>400*190*416 mm</td>
                                </tr>
                            </table>  
						</section>
					</div>
<?}?>

<?if($gidx == "33"){?>

<?}?>

<?if($gidx == "34"){?>
401
 	<div class="product_detail_wrap">
						<section class="sec01 clearfix">
							<div class="prod_slide sec_left">
								<img src="/images/sub/prod0101_slide01.jpg" alt="슬라이드1">
								<img src="/images/sub/prod0101_slide01.jpg" alt="슬라이드1">
								<img src="/images/sub/prod0101_slide01.jpg" alt="슬라이드1">
							</div>
							<div class="sec_right">
								<h3 class="prod_name">CSI SERIES : 45KW-180KW</h3>
								<span class="desc">통합 스마트 DC 충전 파일</span>
								<p class="desc_small">
									광범위한 충전 전압 : 200-750VDC, 대용량 충전 :> 600V 최대 출력,<br>
600V 미만의 정전류 25V 출력 스마트 BMC 전원 공급 장치<br>
자체 적응 형 (12V / 24V)
								</p>
								<a href="/contact/contact.php" class="contact">CONTACT</a>
								<div class="prod_slide_nav">
									<img class="psn" src="/images/sub/prod0101_slide01.jpg" alt="슬라이드1">
									<img class="psn" src="/images/sub/prod0101_slide01.jpg" alt="슬라이드1">
									<img class="psn" src="/images/sub/prod0101_slide01.jpg" alt="슬라이드1">
								</div>
							</div>							
						</section>	

						<section class="sec02">
							<h3 class="">45KW/60KW/90KW/120KW/180KW</h3>
							<p>
								업계를 선도하는 "2 개의 콘센트가있는 1 개의 더미"충전 기술을 통해 CSI 시리즈<br>
통합 스마트 DC 충전 파일은 자동 배전을 통해 동시에 여러 EV를 충전 할 수 있음.<br>
좋은 인간 - 기계 상호 작용 인터페이스와 함께, 그것은 많은 종류의 충전 방법을 지원.<br>
전기 금액, 돈의 합계, 전력 및 자동 완전 충전 등. 또한 내장되어 있음.<br>
광고 디스플레이 기능, 고객을위한 부가 가치 서비스 제공; <br>
높은 수준의 보호 및 완벽한 기능, 그것은 버스 정류장, 고속도로, 주요 간선 도로,<br>
대형 주차장 및 빠른 충전을 위한 다른 장소.
							</p>
							<div class="sec02_bg_area">
								<style>
									.sec02_bg_area {background-image:url(/images/sub/test.jpg);}
								</style>
							</div>
						</section>

						<section class="sec03">
							<h3>Features</h3>
							<div class="sec03_cont clearfix">
								<div class="left">
									<p class="title">안정성 :</p>
									<p class="cont">
										충전 중에 능동적인 보호;<br>
입력 과전압 / 저전압, 비정상적인 연결 및<br>
긴급 차단 등과 같은 몇 가지 보호 기능이 있음. <br>
표준의 안전 요구 사항 충족;
									</p>
									<p class="title">유연성 :</p>
									<p class="cont">
										
구성에 편리한 모듈형 설계; <br>
충전 전력의 자동 분배; <br>
선택할 수 있는 몇 가지 충전 방법;
									</p>
								</div>
								<div class="right">
									<p class="title">우수한 적응성 :</p>
									<p class="cont">
									
극한의 조건에서 작동 할 수 있는 높은 수준의 보호.<br>
우수한 호환성을 갖춘 표준 요구 사항 충족 및 충전 보장 강화;<br>
빠른 충전을 위해 제공된 장소에 적용 가능
									</p>
								</div>
							</div>							
						</section>

						<section class="sec04">
							<h3>Technical data</h3>
							<table>
								<tr>
									<td>아이템</td>
									<td>CSI 45K750-1 <br>CSI 45K750-2</td>
									<td>CSI 60K750-2</td>
									<td>CSI 90K750-2</td>
									<td>CSI 120K750-2</td>
									<td>CSI 180K750-2</td>
								</tr>

								<tr>
									<td>입력 전압</td>
									<td colspan="5">AC380V+15% (삼-단계 five-와이어 시스템)</td>
								</tr>
								
								<tr>
									<td>입력 주파수</td>
									<td colspan="5">45Hz~65Hz</td>
								</tr>
								
								<tr>
									<td>입력 역률</td>
									<td colspan="5">≥0.99</td>
								</tr>
								
								<tr>
									<td>최대 효율</td>
									<td colspan="5">≥94%</td>
								</tr>

								<tr>
									<td>출력 범위</td>
									<td>45KW</td>
									<td>60KW</td>
									<td>90KW</td>
									<td>120KW</td>
									<td>180KW</td>
								</tr>
								
								<tr>
									<td>출력 전압범위</td>
									<td colspan="5">DC 200~750V</td>
								</tr>
								
								<tr>
									<td>안정 전압 정확도</td>
									<td colspan="5">≤±0.5%</td>
								</tr>
								
								<tr>
									<td>안정 전류 정확도</td>
									<td colspan="5">≤±0.5%</td>
								</tr>
								
								<tr>
									<td>맥동류</td>
									<td colspan="5">≤1%</td>
								</tr>
								
								<tr>
									<td>소프트 스타트 시간</td>
									<td colspan="5">3~8s</td>
								</tr>
								
								<tr>
									<td>작동 온도</td>
									<td colspan="5">–30~+50°C</td>
								</tr>
								
								<tr>
									<td>저장 온도</td>
									<td colspan="5">–40~+70°C</td>
								</tr>
								
								<tr>
									<td>작동 습도</td>
									<td colspan="5">5%~95%</td>
								</tr>
								
								<tr>
									<td>충전용 인터페이스</td>
									<td colspan="5">1 또는2 (국내 표준과 일치 GB/T 20234.3)</td>
								</tr>
								
								<tr>
									<td>커뮤니케이션 규정</td>
									<td colspan="5">GBT 27930-20 </td>
								</tr>
								
								<tr>
									<td>연장 인터페이스</td>
									<td colspan="5">표준: RS585/LAN, 선택: CAN/GPRS</td>
								</tr>
								
								<tr>
									<td>소음</td>
									<td colspan="5">≤65dB</td>
								</tr>
								
								<tr>
									<td>보호 레벨</td>
									<td colspan="5">IP54</td>
								</tr>
								
								<tr>
									<td>보호</td>
									<td colspan="5">입력 오버전압/언더전압, 출력 오버전압,오버전류, 짧은 회로, 전기 유출, 번개 보호, 비상상황 셧다운 및 기타 보호 기능</td>
								</tr>
								
								<tr>
									<td>크기 (W*D*H)</td>
									<td>600*420*1500 mm</td>
									<td>600*620*1560 mm</td>
									<td>700*650*1700 mm</td>
									<td>700*650*1900 mm</td>
									<td>650*750*1800 mm</td>
								</tr>

							</table>
						</section>
					</div>
<?}?>

<?if($gidx == "35"){?>
 402
 	<div class="product_detail_wrap">
						<section class="sec01 clearfix">
							<div class="prod_slide sec_left">
								<img src="/images/sub/pr02_01.jpg" alt="슬라이드1">
								
							</div>
							<div class="sec_right">
								<h3 class="prod_name">CSI SERIES: 240KW</h3>
								<span class="desc">통합 스마트 DC 충전 파일 240KW</span>
								<p class="desc_small">
									광범위한 충전 전압: 200-750VDC, 대용량 충전:> 600V 최대 출력,
600V 미만의 정전류 25V 출력 스마트 BMC 전원 공급 장치자체 적응형 (12V / 24V)
								</p>
								<a href="/contact/contact.php" class="contact">CONTACT</a>
								<div class="prod_slide_nav">
									<img class="psn" src="/images/sub/pr02_01.jpg" alt="슬라이드1">
									
								</div>
							</div>							
						</section>	

						<section class="sec02">
							<h3 class="">240KW</h3>
							<p>
							업계를 선도하는 "2 개의 콘센트가 있는 1 개의 더미" 충전 기술을 통해 CSI 시리즈<br>
통합 스마트 DC 충전 파일은 자동 배전을 통해 동시에 여러 EV를 충전할 수 있음.<br>
좋은 인간 - 기계 상호 작용 인터페이스와 함께, 많은 종류의 충전 방법을 지원.<br>
전기 금액, 돈의 합계, 전력 및 자동 완전 충전 등 또한 내장되어 있음.<br>
광고 디스플레이 기능, 고객을 위한 부가 가치 서비스 제공; <br>
높은 수준의 보호 및 완벽한 기능, 버스 정류장, 고속도로, 주요 간선 도로,<br>
대형 주차장 및 빠른 충전을 위한 다른 장소에서 사용가능.

							</p>
							<div class="sec02_bg_area">
								<style>
									.sec02_bg_area {background-image:url(/images/sub/test.jpg);}
								</style>
							</div>
						</section>

						<section class="sec03">
							<h3>특성</h3>
							<div class="sec03_cont clearfix">
								<div class="left">
									<p class="title">안전성 :</p>
									<p class="cont">
충전 중에 능동적인 보호;	<br>
입력 과전압 / 저전압, 비정상적인 연결 및<br>
긴급 차단 등과 같은 몇 가지 보호 기능이 있음. <br>
표준의 안전 요구 사항 충족;
									</p>
									<p class="title">유연성 :</p>
									<p class="cont">
구성에 편리한 모듈형 설계; <br>
충전 전력의 자동 분배; <br>
선택할 수 있는 몇 가지 충전 방법;
									</p>
								</div>
								<div class="right">
									<p class="title">우수한 적응성 :</p>
									<p class="cont">
극한의 조건에서 작동 할 수 있는 높은 수준의 보호.<br>
우수한 호환성을 갖춘 표준 요구 사항 충족 및 충전 보장 강화;<br>
빠른 충전을 위해 제공된 장소에 적용 가능
									</p>
								</div>
							</div>							
						</section>

						<section class="sec04">
							<h3>기술적 사양</h3>
							<table>
								<tr>
									<td>아이템</td>
									<td colspan="5">CSI 240K750-2</td>								
								</tr>

								<tr>
									<td>입력 전압</td>
									<td colspan="5">AC380V+15% (삼-단계 오-와이어 시스템)</td>
								</tr>
								
								<tr>
									<td>입력 주파수</td>
									<td colspan="5">45Hz~65Hz</td>
								</tr>
								
								<tr>
									<td>입력 역률</td>
									<td colspan="5">≥0.99</td>
								</tr>
								
								<tr>
									<td>최대 효율</td>
									<td colspan="5">≥94%</td>
								</tr>

								<tr>
									<td>출력 범위</td>
									<td colspan="5">240KW</td>									
								</tr>
								
								<tr>
									<td>출력 전압범위</td>
									<td colspan="5">DC 200~750V</td>
								</tr>
								
								<tr>
									<td>안정 전압 정확도</td>
									<td colspan="5">≤±0.5%</td>
								</tr>
								
								<tr>
									<td>안정 전류 정확도</td>
									<td colspan="5">≤±0.5%</td>
								</tr>
								
								<tr>
									<td>맥동류</td>
									<td colspan="5">≤1%</td>
								</tr>
								
								<tr>
									<td>소프트 스타트 시간</td>
									<td colspan="5">3~8s</td>
								</tr>
								
								<tr>
									<td>작동 온도</td>
									<td colspan="5">–30~+50°C</td>
								</tr>
								
								<tr>
									<td>저장 온도</td>
									<td colspan="5">–40~+70°C</td>
								</tr>
								
								<tr>
									<td>작동 습도</td>
									<td colspan="5">5%~95%</td>
								</tr>
								
								<tr>
									<td>충전용 인터페이스</td>
									<td colspan="5">2 (국내 표준과 일치 GB/T 20234.3)</td>
								</tr>
								
								<tr>
									<td>통신 인터페이스</td>
									<td colspan="5">표준: RS485/LAN, 선택: CAN/GPRS</td>
								</tr>
								
								<tr>
									<td>소음</td>
									<td colspan="5">≤65dB</td>
								</tr>
								
								<tr>
									<td>보호 레벨</td>
									<td colspan="5">IP54</td>
								</tr>
								
								<tr>
									<td>보호기능</td>
									<td colspan="5">입력 오버전압/언더전압, 출력 오버전압, 오버전류, 짧은 회로, 전기 유출, 번개 보호, 비상상황 격다운 및 기타 보호 기능</td>
								</tr>
								
								<tr>
									<td>크기 (W*D*H)</td>
									<td colspan="5">1100*700*1800 mm</td>									
								</tr>
							</table>
						</section>
					</div>
<?}?>

<?if($gidx == "36"){?>
 403
 <div class="product_detail_wrap">
						<section class="sec01 clearfix">
							<div class="prod_slide sec_left">
								<img src="/images/sub/pr03_01.jpg" alt="슬라이드1">
								
							</div>
							<div class="sec_right">
								<h3 class="prod_name"></h3>
								<span class="desc"></span>
								<p class="desc_small">
									
								</p>
								<a href="/contact/contact.php" class="contact">CONTACT</a>
								<div class="prod_slide_nav">
									<img class="psn" src="/images/sub/pr02_01.jpg" alt="슬라이드1">
									
								</div>
							</div>							
						</section>	

						<section class="sec02">
							<h3 class=""></h3>
							<p>
							
							</p>
							<div class="sec02_bg_area">
								<style>
									.sec02_bg_area {background-image:url(/images/sub/test.jpg);}
								</style>
							</div>
						</section>

						<section class="sec03">
							<h3>특성</h3>
							<div class="sec03_cont clearfix">
								<div class="left">
									<p class="title">안전성 :</p>
									<p class="cont">
										
									</p>
									<p class="title">유연성 :</p>
									<p class="cont">

									</p>
								</div>
								<div class="right">
									<p class="title">우수한 적응성 :</p>
									<p class="cont">
										
									</p>
								</div>
							</div>							
						</section>

						<section class="sec04">
							<h3>기술적 사양</h3>
							<table>
								<tr>
									<td>아이템</td>
									<td colspan="5">CSI 300K750-2</td>								
								</tr>

								<tr>
									<td>입력 전압</td>
									<td colspan="5">AC380V±15% (three-phase five-wire system)</td>
								</tr>
								
								<tr>
									<td>입력 주파수</td>
									<td colspan="5">45Hz~65Hz</td>
								</tr>
								
								<tr>
									<td>입력 역률</td>
									<td colspan="5">≥0.99</td>
								</tr>
								
								<tr>
									<td>최대 효율</td>
									<td colspan="5">≥94%</td>
								</tr>

								<tr>
									<td>출력 범위</td>
									<td colspan="5">300KW</td>									
								</tr>
								
								<tr>
									<td>출력 전압범위</td>
									<td colspan="5">DC 200~750V</td>
								</tr>
								
								<tr>
									<td>안정 전압 정확도</td>
									<td colspan="5">≤±0.5%</td>
								</tr>
								
								<tr>
									<td>안정 전류 정확도</td>
									<td colspan="5">≤±0.5%</td>
								</tr>
								
								<tr>
									<td>맥동률</td>
									<td colspan="5">≤1%</td>
								</tr>
								
								<tr>
									<td>소프트 스타트 시간</td>
									<td colspan="5">3~8s</td>
								</tr>
								
								<tr>
									<td>작동 온도</td>
									<td colspan="5">–30~+50°C</td>
								</tr>
								
								<tr>
									<td>저장 온도</td>
									<td colspan="5">–40~+70°C</td>
								</tr>
								
								<tr>
									<td>작동 습도</td>
									<td colspan="5">5%~95%</td>
								</tr>
								
								<tr>
									<td>충전용 인터페이스</td>
									<td colspan="5">2 (국내 표준과 일치 GB/T 20234.3)</td>
								</tr>
								
								<tr>
									<td>통신 프로토콜</td>
									<td colspan="5">GBT 27930-2011</td>
								</tr>

								<tr>
									<td>통신 인터페이스</td>
									<td colspan="5">표준: RS485/LAN, 선택: CAN/GPRS</td>
								</tr>
								
								<tr>
									<td>소음</td>
									<td colspan="5">≤65dB</td>
								</tr>
								
								<tr>
									<td>보호 레벨</td>
									<td colspan="5">IP54</td>
								</tr>
								
								<tr>
									<td>보호기능</td>
									<td colspan="5">입력 오버전압/언더전압, 출력 오버전압, 오버전류, 짧은 회로, 전기 유출, 번개 보호, 비상상황 격다운 및 기타 보호 기능</td>
								</tr>
								
								<tr>
									<td>크기 (W*D*H)</td>
									<td colspan="2">1100*700*2000 mm (cabinet)</td>		
									<td colspan="2">400*300*1460 mm (pile)</td>		
								</tr>
							</table>
						</section>
					</div>
<?}?>

<?if($gidx == "37"){?>
 404
 <div class="product_detail_wrap">
						<section class="sec01 clearfix">
							<div class="prod_slide sec_left">
								<img src="/images/sub/p404_01.jpg" alt="슬라이드1">
								<img src="/images/sub/p404_02.jpg" alt="슬라이드1">								
							</div>
							<div class="sec_right">
								<h3 class="prod_name">제품명</h3>
								<span class="desc">설명</span>
								<p class="desc_small">
									상세설명
								</p>
								<a href="/contact/contact.php" class="contact">CONTACT</a>
								<div class="prod_slide_nav">
									<img class="psn" src="/images/sub/p404_01.jpg" alt="슬라이드1">
									<img class="psn"src="/images/sub/p404_02.jpg" alt="슬라이드1">									
								</div>
							</div>							
						</section>	

						<section class="sec02">
							<h3 class="">부제목</h3>
							<p>
								내용
							</p>
							<div class="sec02_bg_area">
								<style>
									.sec02_bg_area {background-image:url(/images/sub/test.jpg);}
								</style>
							</div>
						</section>

						<section class="sec03">
							<h3>특성</h3>
							<div class="sec03_cont clearfix">
								<div class="left">
									<p class="title">안전성 :</p>
									<p class="cont">
										안정성내용
									</p>
									<p class="title">유연성 :</p>
									<p class="cont">
										유연성내용
									</p>
								</div>
								<div class="right">
									<p class="title">우수한 적응성 :</p>
									<p class="cont">
										적응성내용
									</p>
								</div>
							</div>							
						</section>

						<section class="sec04">
							<h3>기술적 사양</h3>
							<table>
								<tr>
									<td>아이템</td>
									<td colspan="5">CSI 240K750-2</td>								
								</tr>

								<tr>
									<td>입력 전압</td>
									<td colspan="5">AC380V+15% (삼-단계 오-와이어 시스템)</td>
								</tr>
								
								<tr>
									<td>입력 주파수</td>
									<td colspan="5">45Hz~65Hz</td>
								</tr>
								
								<tr>
									<td>입력 역률</td>
									<td colspan="5">≥0.99</td>
								</tr>
								
								<tr>
									<td>최대 효율</td>
									<td colspan="5">≥94%</td>
								</tr>

								<tr>
									<td>출력 범위</td>
									<td colspan="5">240KW</td>									
								</tr>
								
								<tr>
									<td>출력 전압범위</td>
									<td colspan="5">DC 200~750V</td>
								</tr>
								
								<tr>
									<td>안정 전압 정확도</td>
									<td colspan="5">≤±0.5%</td>
								</tr>
								
								<tr>
									<td>안정 전류 정확도</td>
									<td colspan="5">≤±0.5%</td>
								</tr>
								
								<tr>
									<td>맥동류</td>
									<td colspan="5">≤1%</td>
								</tr>
								
								<tr>
									<td>소프트 스타트 시간</td>
									<td colspan="5">3~8s</td>
								</tr>
								
								<tr>
									<td>작동 온도</td>
									<td colspan="5">–30~+50°C</td>
								</tr>
								
								<tr>
									<td>저장 온도</td>
									<td colspan="5">–40~+70°C</td>
								</tr>
								
								<tr>
									<td>작동 습도</td>
									<td colspan="5">5%~95%</td>
								</tr>
								
								<tr>
									<td>충전용 인터페이스</td>
									<td colspan="5">2 (국내 표준과 일치 GB/T 20234.3)</td>
								</tr>
								
								<tr>
									<td>통신 인터페이스</td>
									<td colspan="5">표준: RS485/LAN, 선택: CAN/GPRS</td>
								</tr>
								
								<tr>
									<td>소음</td>
									<td colspan="5">≤65dB</td>
								</tr>
								
								<tr>
									<td>보호 레벨</td>
									<td colspan="5">IP54</td>
								</tr>
								
								<tr>
									<td>보호기능</td>
									<td colspan="5">입력 오버전압/언더전압, 출력 오버전압, 오버전류, 짧은 회로, 전기 유출, 번개 보호, 비상상황 격다운 및 기타 보호 기능</td>
								</tr>
								
								<tr>
									<td>크기 (W*D*H)</td>
									<td colspan="5">1100*700*1800 mm</td>									
								</tr>
							</table>
						</section>
					</div>
<?}?>

<?if($gidx == "38"){?>
 406-01
 	<div class="product_detail_wrap">
						<section class="sec01 clearfix">
							<div class="prod_slide sec_left">
								<img src="/images/sub/p406_01.jpg" alt="슬라이드1">
	
							</div>
							<div class="sec_right">
								<h3 class="prod_name">제품명</h3>
								<span class="desc">설명</span>
								<p class="desc_small">
									상세설명
								</p>
								<a href="/contact/contact.php" class="contact">CONTACT</a>
								<div class="prod_slide_nav">
									<img class="psn" src="/images/sub/p406_01.jpg" alt="슬라이드1">
		
								</div>
							</div>							
						</section>	

						<section class="sec02">
							<h3 class="">부제목</h3>
							<p>
								내용
							</p>
							<div class="sec02_bg_area">
								<style>
									.sec02_bg_area {background-image:url(/images/sub/test.jpg);}
								</style>
							</div>
						</section>

						<section class="sec03">
							<h3>특성</h3>
							<div class="sec03_cont clearfix">
								<div class="left">
									<p class="title">안전성 :</p>
									<p class="cont">
										안정성내용
									</p>
									<p class="title">유연성 :</p>
									<p class="cont">
										유연성내용
									</p>
								</div>
								<div class="right">
									<p class="title">우수한 적응성 :</p>
									<p class="cont">
										적응성내용
									</p>
								</div>
							</div>							
						</section>

						<section class="sec04">
							<h3>기술적 사양</h3>
							<table>
								<tr>
									<td>아이템</td>
									<td colspan="2">ECM 15K500B / ECM 15K750B</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="2">260~456VAC(50% 310V or less output power derating)</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="2">45Hz~65Hz</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="2">≥0.995</td>	
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="2">≤5%</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="2">≥95%</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="2">15KW</td>
								</tr>
								<tr>
									<td rowspan="4">항목</td>
									<td rowspan="2">200V~500VDC</td>
									<td>400V~500V: 15KW Max</td>
								</tr>
								<tr>
									<td>200V~400V：37.5A Max</td>
								</tr>
								<tr>
									<td rowspan="2">250~750VDC</td>
									<td>600V~750V：15KW Max</td>
								</tr>
								<tr>
									<td>250V~600V: 25A Max</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="2">≤±0.5%</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="2">≤±0.5%</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="2">≤±0.2%</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="2">≤±1%</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="2">≥30A：less than±1%；< 30A：less than ±0.3A</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="2">≤55dB</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="2">–40~+65°C</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="2">–40~+70°C</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="2"> ≤95%, no condensing</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="2">CAN </td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="2"> IP20</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="2">Forced air cooling </td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="2"> ≤15kg</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="2"> Input overvoltage/undervoltage, output overvoltage, overcurrent, short circuit, electric leakage,<br>
lightning protection, emergency shutdown and other protective functions</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="2">462.6*379.4*86 mm </td>
								</tr>
								
							</table>
						</section>
					</div>
<?}?>

<?if($gidx == "39"){?>
	<div class="product_detail_wrap">
						<section class="sec01 clearfix">
							<div class="prod_slide sec_left">
								<img src="/images/sub/p406_01.jpg" alt="슬라이드1">
	
							</div>
							<div class="sec_right">
								<h3 class="prod_name">제품명</h3>
								<span class="desc">설명</span>
								<p class="desc_small">
									상세설명
								</p>
								<a href="/contact/contact.php" class="contact">CONTACT</a>
								<div class="prod_slide_nav">
									<img class="psn" src="/images/sub/p406_01.jpg" alt="슬라이드1">
		
								</div>
							</div>							
						</section>	

						<section class="sec02">
							<h3 class="">부제목</h3>
							<p>
								내용
							</p>
							<div class="sec02_bg_area">
								<style>
									.sec02_bg_area {background-image:url(/images/sub/test.jpg);}
								</style>
							</div>
						</section>

						<section class="sec03">
							<h3>특성</h3>
							<div class="sec03_cont clearfix">
								<div class="left">
									<p class="title">안전성 :</p>
									<p class="cont">
										안정성내용
									</p>
									<p class="title">유연성 :</p>
									<p class="cont">
										유연성내용
									</p>
								</div>
								<div class="right">
									<p class="title">우수한 적응성 :</p>
									<p class="cont">
										적응성내용
									</p>
								</div>
							</div>							
						</section>

						<img src="/images/sub/p406_02_cont.jpg" alt="" style="margin: auto;display: block;margin-bottom: 80px;border-bottom: 1px solid #ccc;padding-bottom: 80px;width: 100%;"	>

						<section class="sec04">
							<h3>기술적 사양</h3>
							<table>
								<tr>
									<td>아이템</td>
									<td colspan="2">ECM 15K500B / ECM 15K750B</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="2">260~456VAC(50% 310V or less output power derating)</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="2">45Hz~65Hz</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="2">≥0.995</td>	
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="2">≤5%</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="2">≥95%</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="2">15KW</td>
								</tr>
								<tr>
									<td rowspan="4">항목</td>
									<td rowspan="2">200V~500VDC</td>
									<td>400V~500V: 15KW Max</td>
								</tr>
								<tr>
									<td>200V~400V：37.5A Max</td>
								</tr>
								<tr>
									<td rowspan="2">250~750VDC</td>
									<td>600V~750V：15KW Max</td>
								</tr>
								<tr>
									<td>250V~600V: 25A Max</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="2">≤±0.5%</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="2">≤±0.5%</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="2">≤±0.2%</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="2">≤±1%</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="2">≥30A：less than±1%；< 30A：less than ±0.3A</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="2">≤55dB</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="2">–40~+65°C</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="2">–40~+70°C</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="2"> ≤95%, no condensing</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="2">CAN </td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="2"> IP20</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="2">Forced air cooling </td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="2"> ≤15kg</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="2"> Input overvoltage/undervoltage, output overvoltage, overcurrent, short circuit, electric leakage,<br>
lightning protection, emergency shutdown and other protective functions</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="2">462.6*379.4*86 mm </td>
								</tr>
								
							</table>
						</section>
					</div>
<?}?>

<?if($gidx == "40"){?>
	<div class="product_detail_wrap">
						<section class="sec01 clearfix">
							<div class="prod_slide sec_left">
								<img src="/images/sub/p407_01.jpg" alt="슬라이드1">
								<img src="/images/sub/p407_02.jpg" alt="슬라이드2">
								
							</div>
							<div class="sec_right">
								<h3 class="prod_name">제품명</h3>
								<span class="desc">설명</span>
								<p class="desc_small">
									상세설명
								</p>
								<a href="/contact/contact.php" class="contact">CONTACT</a>
								<div class="prod_slide_nav">
									<img class="psn" src="/images/sub/p407_01.jpg" alt="슬라이드1">
									<img class="psn" src="/images/sub/p407_02.jpg" alt="슬라이드2">
									
								</div>
							</div>							
						</section>	

						<section class="sec02">
							<h3 class="">부제목</h3>
							<p>
                            내용
							</p>
							<div class="sec02_bg_area">
								<style>
									.sec02_bg_area {background-image:url(/images/sub/test.jpg);}
								</style>
							</div>
						</section>

						<section class="sec03">
							<h3>특성</h3>
							<div class="sec03_cont clearfix">
								<div class="left">
									<p class="title">안전성 :</p>
									<p class="cont">
								    안전성내용
									</p>
									<p class="title">유연성 :</p>
									<p class="cont">
                                    유연성내용
									</p>
								</div>
								<div class="right">
									<p class="title">우수한 적응성 :</p>
									<p class="cont">
									적응성내용
									</p>
								</div>
							</div>							
						</section>

						<section class="sec04">
							<h3>기술적 사양</h3>
                            <table>   
                                <tr>
                                    <td>Item</td>
                                    <td style="width:365px;">CSP 30K750</td>
                                    <td style="width:365px;">CSP 15K750</td>
                                </tr>
                                <tr>
                                    <td>Input Voltage</td>
                                    <td colspan="2">AC380V±15% (three-phase five-wire system)</td>
                                </tr>
                                <tr>
                                    <td>Input Frequency</td>
                                    <td colspan="3">45Hz~65Hz</td>
                                </tr>
                                <tr>
                                    <td>Input power factor</td> 
                                    <td colspan="3">≥0.99</td>
                                </tr>
                                <tr>
                                    <td>Peak Efficiency</td>
                                    <td colspan="3">≥93%（Rated input,Rated output）</td>
                                </tr>
                                <tr>
                                    <td>Output Voltage</td>
                                    <td>200~420VDC</td>
                                    <td>200~450VDC（can be customized）</td>
                                </tr>
                                <tr>
                                    <td>Output Current</td>
                                    <td>10A Max</td>
                                    <td>20A Max</td>
                                </tr>
                                <tr>
                                    <td>Output Power</td>
                                    <td>3.3kW Max</td>
                                    <td>6.6kW Max</td>
                                </tr>
                                <tr>
                                    <td>Voltage accuracy</td>
                                    <td colspan="2">±1%</td>
                                </tr>
                                <tr>
                                    <td>Current accuracy</td>
                                    <td colspan="2">±3%（>5A）</td>
                                </tr>
                                <tr>
                                    <td>Operating Temperature</td>
                                    <td colspan="2">-40~+60℃</td>
                                </tr>
                                <tr>
                                    <td>Storage Temperature</td>
                                    <td colspan="2">-40~+90℃</td>
                                </tr>
                                <tr>
                                    <td>Relative Humidity</td>
                                    <td colspan="2">5%~95%, No condensing</td>
                                </tr>
                                <tr>
                                    <td>Communication<br>Interface</td>
                                    <td colspan="2">CAN</td>
                                </tr>
                                <tr>
                                    <td>Level of protection</td>
                                    <td colspan="2">IP66</td>
                                </tr>
                                <tr>
                                    <td>Way of cooling</td>
                                    <td colspan="2">Forced air cooling</td>
                                </tr>
                                <tr>
                                    <td>Weight</td>
                                    <td>≤8.5kg</td>
                                    <td>≤14.5kg</td>
                                </tr>
                                <tr>
                                    <td>Protection Function</td>
                                    <td colspan="2">Output overvoltage/undervoltage, output overvoltage/undervoltage, overcurrent, short circuit,<br>overtemperature, battery polarity reverse and other protective functions</td>
                                </tr>
                                <tr>
                                    <td>Dimension(W*D*H)</td>
                                    <td>293*200*147.5 mm</td>
                                    <td>480*2</td>
                                </tr>
                                   
                            </table>  
						</section>
					</div>
<?}?>

<?if($gidx == "41"){?>
<div class="product_detail_wrap">
						<section class="sec01 clearfix">
							<div class="prod_slide sec_left">
								<img src="/images/sub/p408.jpg" alt="슬라이드1">

							</div>
							<div class="sec_right">
								<h3 class="prod_name">제품명</h3>
								<span class="desc">설명</span>
								<p class="desc_small">
									상세설명
								</p>
								<a href="/contact/contact.php" class="contact">CONTACT</a>
								<div class="prod_slide_nav">
									<img class="psn" src="/images/sub/p408.jpg" alt="슬라이드1">

								</div>
							</div>							
						</section>	

						<section class="sec02">
							<h3 class="">부제목</h3>
							<p>
								내용
							</p>
							<div class="sec02_bg_area">
								<style>
									.sec02_bg_area {background-image:url(/images/sub/test.jpg);}
								</style>
							</div>
						</section>

						<section class="sec03">
							<h3>특성</h3>
							<div class="sec03_cont clearfix">
								<div class="left">
									<p class="title">안전성 :</p>
									<p class="cont">
										안정성내용
									</p>
									<p class="title">유연성 :</p>
									<p class="cont">
										유연성내용
									</p>
								</div>
								<div class="right">
									<p class="title">우수한 적응성 :</p>
									<p class="cont">
										적응성내용
									</p>
								</div>
							</div>							
						</section>

						<section class="sec04">
							<h3>기술적 사양</h3>
							<table>
								<tr>
									<td>아이템</td>
									<td >EVD 142340-12M</td>
									<td >EVD 302540-24M</td>
								</tr>
								<tr>
									<td>항목</td>
									<td>200~450VDC</td>
									<td>400~700VDC</td>					
								</tr>
								<tr>
									<td>항목</td>
									<td>340V</td>
									<td>540V</td>					
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="2">< 10A</td>
								</tr>
								<tr>
									<td>항목</td>
									<td>≥93%</td>
									<td>≥95%</td>
								</tr>
								<tr>
									<td>항목</td>
									<td>14±0.2VDC</td>
									<td>27.5±0.3VDC</td>
								</tr>
								
								<tr>
									<td>항목</td>
									<td>14VDC</td>
									<td>27.5VDC</td>
								</tr>
								<tr>
									<td>항목</td>
									<td>100A</td>
									<td>115A</td>
								</tr>
								<tr>
									<td>항목</td>
									<td>1.4KW</td>
									<td>3KW</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="2">≤±1%</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="2">≤±0.02%/℃</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="2">-40~+85℃</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="2">-40~+85℃</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="2">5%~95%, no condensing</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="2">CAN</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="2">Aluminum based conduction heat（External dissipater needed）</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="2">≤3kg</td>
								</tr>
								<tr>
									<td>항목</td>
									<td colspan="2">Output overvoltage/undervoltage, input reverse connection; output overvoltage,<br>
										overcurrent,short circuit, overtemperature and other protective functions</td>
								</tr>
								<tr>
									<td>항목</td>
									<td>276*126*55 mm</td>
									<td>276*154*55 mm</td>
								</tr>
								</table>
						</section>
					</div>
<?}?>

<?if($gidx == "42"){?>
 501
<?}?>

<?if($gidx == "43"){?>
 502-01
<?}?>

<?if($gidx == "44"){?>
 502-02
<?}?>

<?if($gidx == "45"){?>
 503-01
<?}?>

<?if($gidx == "46"){?>
 503-02
<?}?>

<?if($gidx == "47"){?>
 503-03
<?}?>

<?if($gidx == "48"){?>
 503-04
<?}?>

<?if($gidx == "49"){?>
 503-05
<?}?>

<?if($gidx == "50"){?>
 504-01
<?}?>

<?if($gidx == "51"){?>
 504-02
<?}?>



				</div><!-- // inner_content -->

			</div><!-- // content -->
		</div><!-- // container -->
	</div><!-- // container_wrap -->

	<div id="footer_wrap">
<?php require_once ($_SERVER["DOCUMENT_ROOT"]. "/include/footer.php"); ?>
	</div><!-- // footer_wrap -->
</div><!-- // wrap -->
</body>
</html>
