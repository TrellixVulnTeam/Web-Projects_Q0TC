
								<div class="container">
									<hr>
									
									<script src="js/jssor.slider-26.1.5.min.js" type="text/javascript"></script>
									<script type="text/javascript">
										jssor_1_slider_init = function() {

											var jssor_1_SlideshowTransitions = [
											{$Duration:1200,$Opacity:2}
											];

											var jssor_1_options = {
												$AutoPlay: 1,
												$SlideshowOptions: {
													$Class: $JssorSlideshowRunner$,
													$Transitions: jssor_1_SlideshowTransitions,
													$TransitionsOrder: 1
												},
												$ArrowNavigatorOptions: {
													$Class: $JssorArrowNavigator$
												},
												$BulletNavigatorOptions: {
													$Class: $JssorBulletNavigator$
												}
											};

											var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

											/*#region responsive code begin*/

											var MAX_WIDTH = 980;

											function ScaleSlider() {
												var containerElement = jssor_1_slider.$Elmt.parentNode;
												var containerWidth = containerElement.clientWidth;

												if (containerWidth) {

													var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

													jssor_1_slider.$ScaleWidth(expectedWidth);
												}
												else {
													window.setTimeout(ScaleSlider, 30);
												}
											}

											ScaleSlider();

											$Jssor$.$AddEvent(window, "load", ScaleSlider);
											$Jssor$.$AddEvent(window, "resize", ScaleSlider);
											$Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
											/*#endregion responsive code end*/
										};
									</script>
									<style>
										/* jssor slider loading skin spin css */
										.jssorl-009-spin img {
											animation-name: jssorl-009-spin;
											animation-duration: 1.6s;
											animation-iteration-count: infinite;
											animation-timing-function: linear;
										}

										@keyframes jssorl-009-spin {
											from {
												transform: rotate(0deg);
											}

											to {
												transform: rotate(360deg);
											}
										}


										.jssorb051 .i {position:absolute;cursor:pointer;}
										.jssorb051 .i .b {fill:#fff;fill-opacity:0.5;}
										.jssorb051 .i:hover .b {fill-opacity:.7;}
										.jssorb051 .iav .b {fill-opacity: 1;}
										.jssorb051 .i.idn {opacity:.3;}

										.jssora051 {display:block;position:absolute;cursor:pointer;}
										.jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
										.jssora051:hover {opacity:.8;}
										.jssora051.jssora051dn {opacity:.5;}
										.jssora051.jssora051ds {opacity:.3;pointer-events:none;}
									</style>

									<div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:380px;overflow:hidden;visibility:hidden;">
										<!-- Loading Screen -->
										<div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
											<img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
										</div>
										<div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
											<div>
												<img data-u="image" src="img/001.jpg" />
											</div>
											<div>
												<img data-u="image" src="img/002.jpg" />
											</div>


									

										</div>

										<!-- Bullet Navigator -->
										<div data-u="navigator" class="jssorb051" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
											<div data-u="prototype" class="i" style="width:16px;height:16px;">
												<svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
													<circle class="b" cx="8000" cy="8000" r="5800"></circle>
												</svg>
											</div>
										</div>

										<!-- Arrow Navigator -->
										<div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
											<svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
												<polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
											</svg>
										</div>
										<div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
											<svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
												<polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
											</svg>
										</div>
									</div>
									<script type="text/javascript">jssor_1_slider_init();</script>
									<!-- #endregion Jssor Slider End -->


								