<?php
$repoRoot = dirname(__FILE__, 3);
include_once "{$repoRoot}/common/hookier-header.php";

$triggers = [
    'facebook' => [
        'step2' => '2142bbfc-4cc3-11ee-b4be-f60a19ad53bd',
        'step3' => '214eb2a1-4cc3-11ee-b4be-f60a19ad53bd',
        'step4' => '214e3928-4cc3-11ee-b4be-f60a19ad53bd',
        'pixel' => '4ac3ca26-e9c0-11ed-9854-86789473f0e9'
    ],
    'npm' => [
        'step2' => '46e6533b-4cc7-11ee-b4be-f60a19ad53bd',
        'step3' => '46e917b0-4cc7-11ee-b4be-f60a19ad53bd',
        'step4' => '46e6dbed-4cc7-11ee-b4be-f60a19ad53bd',
        'pixel' => '71763c8b-75cf-45fc-a6cd-bfab8ef9bab3'
    ]
];
$current_source = 'facebook';
$utm_source = $objLead->lead_utm->utm_source ?? '';
$referrer = $_SERVER['HTTP_REFERER'] ?? '';

if (!empty($utm_source)) {
    if ($utm_source != 'facebook') {
        $current_source = 'npm';
    }
}

$trigger_step2 = $triggers[$current_source]['step2'];
$trigger_step3 = $triggers[$current_source]['step3'];
$trigger_step4 = $triggers[$current_source]['step4'];
$pixel = $triggers[$current_source]['pixel'];
?>
<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<title>goVIPvacations | Fire & Ice Alaska Cruise & Mexico Vacation</title>
	<meta name="description" content="2 epic vacations, 1 low price! Only $1,749 per person!">
	<meta property="og:title" content="goVIPvacations | Fire & Ice Alaska Cruise & Mexico Vacation" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="https://cruises.govipvacations.com/1749-fire-ice" />
	<meta property="og:description" content="2 epic vacations, 1 low price! Only $1,749 per person!" />

	<link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
	<link rel="manifest" href="site.webmanifest">
	<link rel="mask-icon" href="safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#008577">
	<meta name="theme-color" content="#ffffff">

	<link rel="stylesheet" href="css/main.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v16.0" nonce="vstxwiuW"></script>

	<style>
		.loading_spin {
			display: none;
			width: 30px;
			height: 30px;
			border: 3px solid rgba(255, 255, 255, .3);
			border-radius: 50%;
			border-top-color: #fff;
			animation: spin 1s ease-in-out infinite;
			-webkit-animation: spin 0.9s ease-in-out infinite;
			margin-left: 0.5em;
		}

		@keyframes spin {
			to {
				-webkit-transform: rotate(360deg);
			}
		}

		@-webkit-keyframes spin {
			to {
				-webkit-transform: rotate(360deg);
			}
		}
	</style>

	<?php require_once __DIR__ . "/../../common/guestbookings-ga-header.php" ?>
	<?php require_once __DIR__ . "/../../common/guestbookings-caribbean-conquest-chat.php" ?>	

</head>

<body class="isSteps">

	<div class="page-wrap">
		<header class="site-header top-0">
			<div class="container">
				<div class="site-header__inner">
					<div class="site-logo">
						<img srcset="img/site-logo.png 1x, img/site-logo@2x.png 2x, img/site-logo@3x.png 3x" alt="govipvacations.com" class="img-responsive">
					</div>
					<!-- /.site-logo -->

					<div class="site-header__sidebar">
						<div class="site-header__cta">
							<div class="ico">
								<a href="tel:888-270-9126"><img src="img/icon-phone.svg" alt=""></a>
							</div>
							<div class="txt mobile-hide"><a href="tel:888-270-9126">888-270-9126</a></div>
						</div>
						<!-- /.site-header__cta -->

						<div class="site-header__like">
							<div class="fb-like" data-href="https://facebook.com/govipvacations.com" data-width="" data-layout="button_count" data-action="like" data-size="large" data-share="false"></div>
						</div>
						<!-- /.site-header__like -->
					</div>
					<!-- /.site-header__sidebar -->
				</div>
				<!-- /.site-header__inner -->
			</div>
			<!-- /.container -->
		</header>
		<!-- /.site-header -->

		<section class="steps-hero">
			<div class="steps-hero__bg bg-1"></div>
			<div class="steps-hero__bg bg-2" style="display: none;"></div>
			<div class="steps-hero__bg bg-3" style="display: none;"></div>


			<div class="container">
				<div class="steps-hero__inner">
					<div class="steps-banner">
						<div class="steps-banner__bg bg-1"></div>
						<div class="steps-banner__bg bg-2"></div>
						<div class="steps-banner__bg bg-3"></div>


						<div class="steps-banner__inner">
							<h1>
								<img srcset="img/main-banner.png 1x, img/main-banner@2x.png 2x, img/main-banner@3x.png 3x" alt="Fire & Ice Vacation Package | México Resort Stay & Alaska Cruise" class="img-responsive">
							</h1>
						</div>
						<!-- /.steps-banner__inner -->
					</div>
					<!-- /.steps-banner -->

					<div class="steps-box">
						<div class="steps-box__inner">
							<div class="steps-box__header">
								<div class="steps-box__topBar">
									<div class="text-1">
										2-Epic Vacations <img src="img/icon-arrow.svg" alt="" class="arrow"> 1 Insane Price!
									</div>
									<!-- /.text-1 -->

									<div class="text-2">
										$1,749* <small>Per Person | <strong>52% OFF</strong></small>
									</div>
									<!-- /.text-2 -->
								</div>
								<!-- /.steps-box__topBar -->
							</div>
							<!-- /.steps-box__header -->

							<div class="steps-box__body stepsWrapper">
								<!-- <form action="#" method="post" class="customize-form" id="custmizeForm"> -->
								<div class="steps-indicator">
									<div class="step step1 current">1</div>
									<div class="step step2">2</div>
									<div class="step step3">3</div>
								</div>
								<!-- /.steps-indicator -->

								<div class="customize-form__body">
									<form method="post" class="customize-form" id="step2Form">
										<fieldset class="fieldset-1">
											<div class="customize-form__titles">
												<h2>Let’s customize your Alaska Cruise</h2>
												<h3>When are we setting sail?</h3>
											</div>
											<!-- /.customize-form__titles -->

											<div class="step1-box">
												<div class="number-toogle-input">
													<div class="number-toogle-input__label">
														Number of Guests
													</div>
													<!-- /.number-toogle-input__label -->

													<div class="number-toogle-input__controls">
														<a href="#" class="btn-minus">-</a>
														<input type="text" name="guests" id="guests" value="2" readonly required>
														<a href="#" class="btn-plus">+</a>
													</div>
													<!-- /.number-toogle-input__controls -->
												</div>
												<!-- /.number-toogle-input -->

												<div class="travel-months-select">
													<select class="form-select" name="travel-month" id="travel-month" required>
														<option value="">Preferred Travel Months</option>
														<!-- <option value="1">January</option>
														<option value="2">February</option>
														<option value="3">March</option>
														<option value="4">April</option> -->
														<option value="5">May</option>
														<option value="6">June</option>
														<option value="7">July</option>
														<option value="8">August</option>
														<option value="9">September</option>
														<!-- <option value="10">October</option>
														<option value="11">November</option>
														<option value="12">December</option> -->
													</select>
												</div>
												<!-- /.travel-months-select -->
											</div>
											<!-- /.step1-box -->

											<!-- <a href="#step2" class="primary-btn step-btn" data-question-index="2" data-questions-set=".step1-box">Next</a> -->
											<button type="submit" class="primary-btn">Next <span class="loading_spin"></span></button>

										</fieldset>
										<!-- .fieldset-1 -->
									</form>

									<form method="post" class="customize-form" id="step3Form">
										<fieldset class="fieldset-2" id="step2" style="display: none;">
											<div class="customize-form__titles">
												<h2>Let’s customize your Alaska Cruise</h2>
												<h3>What do you want to experience on your Alaska cruise?</h3>
											</div>
											<!-- /.customize-form__titles -->

											<div class="custom-checkboxes checkboxes-alaska">
												<div class="item">
													<input type="checkbox" name="alaska-experience[]" id="alaska-experience-1" value="Chill & Relax">
													<label for="alaska-experience-1">Chill & Relax</label>
												</div>
												<!-- /.item -->

												<div class="item">
													<input type="checkbox" name="alaska-experience[]" id="alaska-experience-2" value="Mt Denali">
													<label for="alaska-experience-2">Mt Denali</label>
												</div>
												<!-- /.item -->

												<div class="item">
													<input type="checkbox" name="alaska-experience[]" id="alaska-experience-3" value="Bear Viewing">
													<label for="alaska-experience-3">Bear Viewing</label>
												</div>
												<!-- /.item -->

												<div class="item">
													<input type="checkbox" name="alaska-experience[]" id="alaska-experience-4" value="Photography">
													<label for="alaska-experience-4">Photography</label>
												</div>
												<!-- /.item -->

												<div class="item">
													<input type="checkbox" name="alaska-experience[]" id="alaska-experience-5" value="Dog Sledding">
													<label for="alaska-experience-5">Dog Sledding</label>
												</div>
												<!-- /.item -->

												<div class="item">
													<input type="checkbox" name="alaska-experience[]" id="alaska-experience-6" value="Salmon Fishing">
													<label for="alaska-experience-6">Salmon Fishing</label>
												</div>
												<!-- /.item -->

												<div class="item">
													<input type="checkbox" name="alaska-experience[]" id="alaska-experience-7" value="Hiking">
													<label for="alaska-experience-7">Hiking</label>
												</div>
												<!-- /.item -->

												<div class="item">
													<input type="checkbox" name="alaska-experience[]" id="alaska-experience-8" value="Shopping">
													<label for="alaska-experience-8">Shopping</label>
												</div>
												<!-- /.item -->

												<div class="item">
													<input type="checkbox" name="alaska-experience[]" id="alaska-experience-9" value="Glaciers">
													<label for="alaska-experience-9">Glaciers</label>
												</div>
												<!-- /.item -->

												<div class="item">
													<input type="checkbox" name="alaska-experience[]" id="alaska-experience-10" value="Gold Panning">
													<label for="alaska-experience-10">Gold Panning</label>
												</div>
												<!-- /.item -->

												<div class="item">
													<input type="checkbox" name="alaska-experience[]" id="alaska-experience-11" value="Rafting">
													<label for="alaska-experience-11">Rafting</label>
												</div>
												<!-- /.item -->

												<div class="item">
													<input type="checkbox" name="alaska-experience[]" id="alaska-experience-12" value="Northern Lights">
													<label for="alaska-experience-12">Northern Lights</label>
												</div>
												<!-- /.item -->

												<div class="item">
													<input type="checkbox" name="alaska-experience[]" id="alaska-experience-13" value="Whale Watching">
													<label for="alaska-experience-13">Whale Watching</label>
												</div>
												<!-- /.item -->

												<div class="item">
													<input type="checkbox" name="alaska-experience[]" id="alaska-experience-14" value="Native Culture">
													<label for="alaska-experience-14">Native Culture</label>
												</div>
												<!-- /.item -->

												<div class="item">
													<input type="checkbox" name="alaska-experience[]" id="alaska-experience-15" value="Alaska Railroad">
													<label for="alaska-experience-15">Alaska Railroad</label>
												</div>
												<!-- /.item -->

												<div class="item">
													<input type="checkbox" name="alaska-experience[]" id="alaska-experience-16" value="Gold Rush History">
													<label for="alaska-experience-16">Gold Rush History</label>
												</div>
												<!-- /.item -->
											</div>
											<!-- /.custom-checkboxes -->

											<!-- <a href="#step3" class="primary-btn step-btn" data-question-index="3" option-questions-set=".checkboxes-alaska">Next</a> -->
											<button type="submit" class="primary-btn">Next <span class="loading_spin"></span></button>
										</fieldset>
										<!-- .fieldset-2 -->
									</form>

									<form method="post" class="customize-form" id="step4Form">
										<fieldset class="fieldset-3" id="step3" style="display: none;">
											<div class="customize-form__titles">
												<h2>Let’s customize your
													Mexico <span class="text-nowrap">resort vacation</span></h2>
												<h3>What do you want to experience in Nuevo Vallarta?</h3>
											</div>
											<!-- /.customize-form__titles -->

											<div class="custom-checkboxes checkboxes-mexico">
												<div class="item">
													<input type="checkbox" name="mexico-vacation[]" id="mexico-vacation-1" value="Pool & Beach">
													<label for="mexico-vacation-1">Pool & Beach</label>
												</div>
												<!-- /.item -->

												<div class="item">
													<input type="checkbox" name="mexico-vacation[]" id="mexico-vacation-2" value="Golf">
													<label for="mexico-vacation-2">Golf</label>
												</div>
												<!-- /.item -->

												<div class="item">
													<input type="checkbox" name="mexico-vacation[]" id="mexico-vacation-3" value="Nightlife">
													<label for="mexico-vacation-3">Nightlife</label>
												</div>
												<!-- /.item -->

												<div class="item">
													<input type="checkbox" name="mexico-vacation[]" id="mexico-vacation-4" value="Local Culture">
													<label for="mexico-vacation-4">Local Culture</label>
												</div>
												<!-- /.item -->

												<div class="item">
													<input type="checkbox" name="mexico-vacation[]" id="mexico-vacation-5" value="Boat Tours">
													<label for="mexico-vacation-5">Boat Tours</label>
												</div>
												<!-- /.item -->

												<div class="item">
													<input type="checkbox" name="mexico-vacation[]" id="mexico-vacation-6" value="Wildlife">
													<label for="mexico-vacation-6">Wildlife</label>
												</div>
												<!-- /.item -->

												<div class="item">
													<input type="checkbox" name="mexico-vacation[]" id="mexico-vacation-7" value="Horseback Riding">
													<label for="mexico-vacation-7">Horseback Riding</label>
												</div>
												<!-- /.item -->

												<div class="item">
													<input type="checkbox" name="mexico-vacation[]" id="mexico-vacation-8" value="Dinner Shows">
													<label for="mexico-vacation-8">Dinner Shows</label>
												</div>
												<!-- /.item -->

												<div class="item">
													<input type="checkbox" name="mexico-vacation[]" id="mexico-vacation-9" value="Aqua Park">
													<label for="mexico-vacation-9">Aqua Park</label>
												</div>
												<!-- /.item -->

												<div class="item">
													<input type="checkbox" name="mexico-vacation[]" id="mexico-vacation-10" value="Zip Lining">
													<label for="mexico-vacation-10">Zip Lining</label>
												</div>
												<!-- /.item -->

												<div class="item">
													<input type="checkbox" name="mexico-vacation[]" id="mexico-vacation-11" value="AV Tour">
													<label for="mexico-vacation-11">AV Tour</label>
												</div>
												<!-- /.item -->

												<div class="item">
													<input type="checkbox" name="mexico-vacation[]" id="mexico-vacation-12" value="Dolphin Encounter">
													<label for="mexico-vacation-12">Dolphin Encounter</label>
												</div>
												<!-- /.item -->
											</div>
											<!-- /.custom-checkboxes -->

											<!-- <button type="submit" class="primary-btn" data-question-index="4" option-questions-set=".checkboxes-mexico">Finish</button> -->
											<button type="submit" class="primary-btn">Finish <span class="loading_spin"></span></button>
										</fieldset>
										<!-- .fieldset-3 -->
									</form>

								</div>
								<!-- /.customize-form__body -->

								<div class="customize-form__footer">
									<div class="form-secure">
										<img src="img/steps/form-secure-note.svg" alt="" class="img-responsive" style="margin-left: auto; margin-right: auto;">
									</div>
									<!-- /.form-secure -->
								</div>
								<!-- /.customize-form__footer -->
							</div>
							<!-- /.steps-box__body -->
						</div>
						<!-- /.steps-box__inner -->
					</div>
					<!-- /.steps-box -->
				</div>
				<!-- /.steps-hero__inner -->
			</div>
			<!-- /.container -->
		</section>
		<!-- /.steps-hero -->

		<section class="bottom-cta">
			<div class="container">
				<h3><em>This & Other Popular Vacation Packages Available</em></h3>
				<h4>Call <a href="tel:888-270-9126">888-270-9126</a> for details</h4>
			</div>
			<!-- /.container -->
		</section>
		<!-- /.bottom-cta -->

		<footer class="site-footer">
			<div class="container">

				<div class="footer-logos">
					<div><img srcset="img/footer-logo.png 1x, img/footer-logo@2x.png 2x, img/footer-logo@3x.png 3x" alt="govipvacations.com" class="img-responsive"></div>
					<div><img srcset="img/site-logo-2.png 1x, img/site-logo-2@2x.png 2x, img/site-logo-2@3x.png 3x" alt="guestbookings.com" class="img-responsive"></div>
				</div>
				<!-- /.footer-logos -->

				<p>
					*Based on Double Occupancy. Does not include Taxes, Fees, or Port Expenses.<br>
					Vacations fulfilled by Guestbookings.com<br>
					Seller of Travel Ref. No.: FL ST43631 | CA 2150115-70 | Hawaii No. 7452<br>
					Copyright ©
					<?php echo date("Y") + 1; ?> | All Rights Reserved.
				</p>

			</div>
			<!-- /.container -->
		</footer>
		<!-- /.site-footer -->
	</div>
	<!-- /.page-wrap -->

	<script src="js/scripts.min.js"></script>
	<script src="js/common.js"></script>

	<script type="text/javascript" src="https://auto.myonedash.com/api/pixel?ID=<?php echo $pixel ?>&FBPID=976394883417959"></script>
	<script type="text/javascript" src="https://auto.myonedash.com/scripts/js/async" id="hookierFramework" crossorigin="anonymous"></script>

	<script>
		let step2, step3, step4, currentStep, totalSteps;
		let leadId = '<?php echo $objLead->lead_id ?? null ?>';
		Hookier.load(function() {
			Hookier.debugger = false;
			Hookier.consoleLogs = true;
			//
			step2 = new HookierAutomation({
				id: "<?php echo $trigger_step2 ?>",
				listenEvents: true,
				onBeforeSend: function() {
					console.log("before-send", event.detail);
					// Hookier.$('#success-msg').fadeIn('fast');
					Hookier.$(':submit').prop('disabled', true);
					showLoading();
				},
				onRequestSent: function() {
					// debugger;
					console.log("request-sent", event.detail);
					// Hookier.$(':submit').fadeOut('fast');
					switchSteps();
					// Hookier.Pixel.triggerFBEvent('Lead', {});
				},
				onAutomationQueued: function() {
					console.log("automation-queued", event.detail);
				},
				onAutomationStarted: function() {
					console.log("automation-started", event.detail);
				},
				onAutomationFinished: function() {
					console.log("automation-finished", event.detail);
					//
					// Hookier.redirect('steps.php', {
					// 	payload: Hookier.$('#mainForm').serializeObject(),
					// 	response: event.detail
					// });
				},
				onError: function() {
					console.log("error", JSON.stringify(event.detail));
				}
			});
			step3 = new HookierAutomation({
				id: "<?php echo $trigger_step3 ?>",
				listenEvents: true,
				onBeforeSend: function() {
					console.log("before-send", event.detail);
					// Hookier.$('#success-msg').fadeIn('fast');
					Hookier.$(':submit').prop('disabled', true);
					showLoading();
				},
				onRequestSent: function() {
					// debugger;
					console.log("request-sent", event.detail);
					// Hookier.$(':submit').fadeOut('fast');
					// Hookier.Pixel.triggerFBEvent('Lead', {});
					switchSteps();
				},
				onAutomationQueued: function() {
					console.log("automation-queued", event.detail);
				},
				onAutomationStarted: function() {
					console.log("automation-started", event.detail);
				},
				onAutomationFinished: function() {
					console.log("automation-finished", event.detail);
					//
					// Hookier.redirect('steps.php', {
					// 	payload: Hookier.$('#mainForm').serializeObject(),
					// 	response: event.detail
					// });
				},
				onError: function() {
					console.log("error", JSON.stringify(event.detail));
				}
			});
			step4 = new HookierAutomation({
				id: "<?php echo $trigger_step4 ?>",
				listenEvents: true,
				onBeforeSend: function() {
					console.log("before-send", event.detail);
					// Hookier.$('#success-msg').fadeIn('fast');
					Hookier.$(':submit').prop('disabled', true);
					showLoading();
				},
				onRequestSent: function() {
					// debugger;
					console.log("request-sent", event.detail);
					// Hookier.$(':submit').fadeOut('fast');
					// Hookier.Pixel.triggerFBEvent('Lead', {});
				},
				onAutomationQueued: function() {
					console.log("automation-queued", event.detail);
				},
				onAutomationStarted: function() {
					console.log("automation-started", event.detail);
				},
				onAutomationFinished: function() {
					console.log("automation-finished", event.detail);
					//
					hideLoading();
					Hookier.redirect('thank-you.php', {
						payload: Hookier.$('#step4Form').serializeObject(),
						response: event.detail
					});
				},
				onError: function() {
					console.log("error", JSON.stringify(event.detail));
				}
			});
			//
			Hookier.$('.stepsWrapper').on('submit', '#step2Form', function(e) {
				e.preventDefault();
				e.stopPropagation();
				//
				//
				// if ($('#mainForm').valid() == true) {
				//
				step2.payload = Hookier.$('#step2Form').serializeObject();
				step2.payload.UID = leadId;
				step2.run();
				// }
				// 	//
			});
			//
			Hookier.$('.stepsWrapper').on('submit', '#step3Form', function(e) {
				e.preventDefault();
				e.stopPropagation();
				//
				//
				// if ($('#step3Form').valid() == true) {
				//
				// debugger;

				step3.payload = {
                    'alaska-experience': $('#step3Form input[type=checkbox]:checked').map(function(_, el) {
                        return $(el).val();
                    }).get().join(', '),
                    'UID': leadId
                };
                console.log("step3 payload", step3.payload);
				step3.payload = cleanPayload(step3.payload);
				step3.run();
				// }
				// 	//
			});
			//
			Hookier.$('.stepsWrapper').on('submit', '#step4Form', function(e) {
				e.preventDefault();
				e.stopPropagation();
				//
				//
				// if ($('#step4Form').valid() == true) {
				//

                step4.payload = {
                    'mexico-vacation': $('#step4Form input[type=checkbox]:checked').map(function(_, el) {
                        return $(el).val();
                    }).get().join(', '),
                    'UID': leadId
                };
				step4.payload = cleanPayload(step4.payload);
				step4.run();
				// }
				// 	//
			});
			//
			// Switch Customize Form Steps
			function initializeFormSteps() {
				currentStep = 1;
				totalSteps = $(".steps-indicator .step").length;
				//
				// Hide all fieldsets except the first one
				$(".customize-form fieldset:not(:first)").hide();
				//
				// When submitting the form, validate the input and submit it if it's valid
				// $("#custmizeForm").submit(function () {
				//   // Validate input here
				//   return true;
				// });
				Hookier.$(":submit").prop("disabled", false);
			}
			initializeFormSteps();
			//
			// When clicking the "Next" button, go to the next step
			function switchSteps() {
				// debugger;
				//
				// $btn=
				if (currentStep < totalSteps) {
					currentStep++;
					$(".steps-hero__bg.bg-" + currentStep).fadeIn(500);
					$(".steps-banner__bg.bg-" + currentStep).fadeIn(500);
					$(".steps-indicator .step" + currentStep)
						.addClass("current")
						.prev()
						.removeClass("current")
						.addClass("completed");
					$(".customize-form fieldset").hide();
					$("#step" + currentStep).fadeIn(400);
					$("#step" + currentStep).find(":submit").prop("disabled", false);
					hideLoading();
				}
				return false;
			}
			//
			function cleanPayload($payload) {
				// debugger;
				$arrays = [];
				for (const key in $payload) {
					if (Array.isArray($payload[key])) {
						$payload[key] = $payload[key].join(', ');
						$arrays.push(key);
					}
				}
				for (const $i in $arrays) {
					$payload[$arrays[$i].replace('[]', '')] = $payload[$arrays[$i]];
					delete $payload[$arrays[$i]]
				}
				//
				return $payload;
			}
			//
			function showLoading() {
				Hookier.$(".loading_spin").css({
					"display": "inline-block"
				});
			}
			//
			function hideLoading() {
				Hookier.$(".loading_spin").css({
					"display": "none"
				});
			}
		});
	</script>
</body>

</html>