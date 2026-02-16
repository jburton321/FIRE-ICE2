<?php
$triggers = [
    'facebook' => [
        'step1' => '214c0f18-4cc3-11ee-b4be-f60a19ad53bd',
        'pixel' => '4ac3ca26-e9c0-11ed-9854-86789473f0e9'
    ],
    'npm' => [
        'step1' => '46e441b7-4cc7-11ee-b4be-f60a19ad53bd',
        'pixel' => '71763c8b-75cf-45fc-a6cd-bfab8ef9bab3'
    ]
];
$current_source = 'facebook';
$utm_source = $_REQUEST['utm_source'] ?? '';
$referrer = $_SERVER['HTTP_REFERER'] ?? '';

if (!empty($utm_source)) {
    if ($utm_source != 'facebook') {
        $current_source = 'npm';
    }
} else {
    if (!empty($referrer) && (str_contains($referrer, 'govipvacations.com') || str_contains($referrer, 'sandiego.com'))) {
        $current_source = 'npm';
    }
}

$trigger_step1 = $triggers[$current_source]['step1'];
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

	<meta name="facebook-domain-verification" content="s19tlwptrc4drypcxqf5z8ggdm6487" />

	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v16.0" nonce="vstxwiuW"></script>


	<script type="text/javascript" src="https://auto.myonedash.com/scripts/js/async" id="hookierFramework" crossorigin="anonymous"></script>
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

<body>

	<div class="page-wrap">
		<section class="note-bar">
			<div class="container">
				<div class="note-bar__inner">
					<span class="note-bar__icon">
						<img src="img/icon-tag.svg" alt="">
					</span>
					<!-- /.note-bar__icon -->
					<span class="note-bar__text">
						This Insane Cruise & Resort package <strong>will expire soon</strong> based on availability.
					</span>
					<!-- /.note-bar__text -->
				</div>
				<!-- /.note-bar__inner -->
			</div>
			<!-- /.container -->
		</section>
		<!-- /.note-bar -->

		<header class="site-header">
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

		<section class="site-hero">
			<div class="container">
				<div class="site-hero__inner">
					<div class="site-banner">
						<div class="site-banner__inner">
							<h1>
								<img srcset="img/main-banner.png 1x, img/main-banner@2x.png 2x, img/main-banner@3x.png 3x" alt="Fire & Ice Vacation Package | México Resort Stay & Alaska Cruise" class="img-responsive">
							</h1>
							<div class="mobile-show" style="text-align: center;">
								<a href="#formBox" class="primary-btn scrollTo">Get Info</a>
								<!-- /.primary-btn -->
							</div>
						</div>
						<!-- /.site-banner__inner -->
					</div>
					<!-- /.site-banner -->

					<div class="offer-box">
						<div class="offer-box__inner">
							<div class="offer-box__header">
								<div class="title">
									<h1><strong>Ultimate Bucket List</strong> Vacation Package</h1>
								</div>
								<!-- /.title -->

								<div class="offer-box__topBar">
									2-Epic Vacations <img src="img/icon-arrow.svg" alt=""> 1 Insane Price!
								</div>
								<!-- /.offer-box__topBar -->
							</div>
							<!-- /.offer-box__header -->

							<div class="offer-box__body">
								<div class="offer-box__includes">
									<ul>
										<li><span class="bullet">7</span> Night <a href="#alaska-cruise" class="scrollTo2">Alaska Cruise</a></li>
										<li><span class="bullet">5</span> Night Stay in <a href="#mexico-vacation" class="scrollTo3">Nuevo Vallarta</a></li>
									</ul>
								</div>
								<!-- /.offer-box__includes -->

								<div class="offer-box__price">
									<div class="retail-price">
										<s>$7,246</s>
									</div>

									<div class="offer-box__price--wrap">
										<div class="left from">From Only</div>
										<div class="center offer-price">
											<sup class="currency">$</sup>1,749<sup class="asterisk">*</sup>
										</div>
										<div class="right unit-price">Per Person</div>
									</div>
									<!-- /.offer-box__price--wrap -->
								</div>
								<!-- /.offer-box__price -->

								<div class="cta-btn">
									<a href="#formBox" class="primary-btn scrollTo">Get Info</a>
									<!-- /.primary-btn -->
								</div>
								<!-- /.cta-btn -->

								<div class="cta-note">
									<div class="cta-note__wrap">
										<div class="ico"><img src="img/icon-calendar.svg" alt=""></div>
										<div class="txt">Take these epic vacations together, or separately.</div>
									</div>
									<!-- /.cta-note__wrap -->
								</div>
								<!-- /.cta-note -->

								<div class="cta-note-2">
									*Based on double occupancy. Does not include taxes, fees or port expenses.
								</div>
								<!-- /.cta-note-2 -->
							</div>
							<!-- /.offer-box__body -->
						</div>
						<!-- /.offer-box__inner -->
					</div>
					<!-- /.offer-box -->
				</div>
				<!-- /.site-hero__inner -->
			</div>
			<!-- /.container -->

			<a href="#formBox" class="sticker scrollTo" title="Get Info">
				52%<br>
				OFF
			</a>
			<!-- /.sticker -->
		</section>
		<!-- /.site-hero -->

		<section id="alaska-cruise" class="offer-about">
			<div class="container">
				<div class="offer-about__header">
					<div class="offer-about__header--logo">
						<img srcset="img/logo-princess-2.png 1x, img/logo-princess-2.png 2x, img/logo-princess-2@2x.png 3x" alt="Princess">
					</div>
					<!-- /.offer-about__header--logo -->
					<h2>Alaska Cruise</h2>
					<h3>7-Night Princess Alaska Cruise Details</h3>
					<img src="img/curved-line.svg" alt="" class="img-responsive curved-line">
				</div>
				<!-- /.offer-about__header -->

				<div class="offer-about__body">
					<p style="max-width: 1000px;">On every Princess ship, you’ll find so many ways to play, day or night. Explore The Shops of Princess, celebrate
					cultures or learn a new talent — our onboard activities will keep you engaged every moment of your cruise vacation.
					Undoubtedly the best way to enjoy the natural and cultural wonders, on land and sea, on your trip to Alaska.</p>
				</div>
				<!-- /.offer-about__body -->

				<div class="offer-about__btn mobile-show">
					<a href="#formBox" class="primary-btn scrollTo">Get Info</a>
					<!-- /.primary-btn -->
				</div>
				<!-- /.offer-about__btn mobile-show -->

				<div class="other-cruises">
					<div class="other-cruises__title">Other Alaska cruise itineraries are available through:</div>
					<!-- /.other-cruises__title -->

					<div class="other-cruises__logos">
						<div><img srcset="img/other-cruises-logos/logo-03.png 1x, img/other-cruises-logos/logo-03@2x.png 2x, img/other-cruises-logos/logo-03@3x.png 3x" alt=""></div>
						<div><img srcset="img/other-cruises-logos/logo-02.png 1x, img/other-cruises-logos/logo-02@2x.png 2x, img/other-cruises-logos/logo-02@3x.png 3x" alt=""></div>
						<div><img srcset="img/other-cruises-logos/logo-04.png 1x, img/other-cruises-logos/logo-04@2x.png 2x, img/other-cruises-logos/logo-04@3x.png 3x" alt=""></div>
						<div><img srcset="img/other-cruises-logos/logo-05.png 1x, img/other-cruises-logos/logo-05@2x.png 2x, img/other-cruises-logos/logo-05@3x.png 3x" alt=""></div>
					</div>
					<!-- /.other-cruises__logos -->
				</div>
				<!-- /.other-cruises -->

				<div class="offer-about__footer">
					<div class="video-box">
						<a href="media/Cruise_Video.mp4" class="glightbox" data-gallery="Cruise_Video">
							<img src="img/video-preview.jpg" alt="" class="img-responsive video-preview">
							<img src="img/icon-play.svg" alt="" class="play-btn">
						</a>
					</div>
					<!-- /.video-box -->
				</div>
				<!-- /.offer-about__footer -->
			</div>
			<!-- /.container -->
		</section>
		<!-- /.offer-about -->

		<section class="offer-grid">
			<div class="container">
				<div class="offer-grid__header">
					<div class="title">
						<h2>Welcome Aboard the Discovery <img srcset="img/logo-princess-3.png 1x, img/logo-princess-3@2x.png 2x, img/logo-princess-3@3x.png 3x"" alt=""></h2>
					</div>
					<!-- /.title -->
				</div>
				<!-- /.offer-grid__header -->

				<div class=" offer-grid__body">
							<div class="amenity-box">
								<div class="amenity-box__media" style="background-image: url(img/cruise-amenities/img-01.jpg);"></div>
								<!-- /.amenity-box__media -->

								<div class="amenity-box__text">
									<h3>The Piazza</h3>
									<p><strong>Discover Old World charm as you stroll through our breathtaking Piazza</strong> — a hub of activity, inspired by the vibrant
										squares of Europe.</p>
									<a href="#formBox" class="primary-btn scrollTo">Get Info</a>
								</div>
								<!-- /.amenity-box__text -->
							</div>
							<!-- /.amenity-box -->

							<div class="amenity-box">
								<div class="amenity-box__media" style="background-image: url(img/cruise-amenities/img-02.jpg);"></div>
								<!-- /.amenity-box__media -->

								<div class="amenity-box__text">
									<h3>POOLS & TOP DECK</h3>
									<p><strong>So many cool places to unwind.</strong> Take a cool dip and lounge by a shimmering pool. Or soak away the day’s adventures in a
										soothing hot tub.</p>
									<a href="#formBox" class="primary-btn scrollTo">Get Info</a>
								</div>
								<!-- /.amenity-box__text -->
							</div>
							<!-- /.amenity-box -->

							<div class="amenity-box">
								<div class="amenity-box__media" style="background-image: url(img/cruise-amenities/img-03.jpg);"></div>
								<!-- /.amenity-box__media -->

								<div class="amenity-box__text">
									<h3>CASINO</h3>
									<p><strong>For novices, casual players, or high rollers.</strong> From gaming lessons to the latest slot machines to prize tournaments, our
										Casinos offer fun and excitement.</p>
									<a href="#formBox" class="primary-btn scrollTo">Get Info</a>
								</div>
								<!-- /.amenity-box__text -->
							</div>
							<!-- /.amenity-box -->

							<div class="amenity-box">
								<div class="amenity-box__media" style="background-image: url(img/cruise-amenities/img-04.jpg);"></div>
								<!-- /.amenity-box__media -->

								<div class="amenity-box__text">
									<h3>VISTA SHOW LOUNGE</h3>
									<p><strong>Top Notch Entertainment & Crafted Cocktails.</strong> The Vista Lounge features world-class entertainers on stage each night and
										hand crafted cocktails.</p>
									<a href="#formBox" class="primary-btn scrollTo">Get Info</a>
								</div>
								<!-- /.amenity-box__text -->
							</div>
							<!-- /.amenity-box -->

							<div class="amenity-box">
								<div class="amenity-box__media" style="background-image: url(img/cruise-amenities/img-05.jpg);"></div>
								<!-- /.amenity-box__media -->

								<div class="amenity-box__text">
									<h3>ENTERTAINMENT</h3>
									<p><strong>Live acts at sea.</strong> With dazzling stage sets, modern hits and timeless classics, the Princess Theater showcases lavish,
										original productions.</p>
									<a href="#formBox" class="primary-btn scrollTo">Get Info</a>
								</div>
								<!-- /.amenity-box__text -->
							</div>
							<!-- /.amenity-box -->

							<div class="amenity-box">
								<div class="amenity-box__media" style="background-image: url(img/cruise-amenities/img-06.jpg);"></div>
								<!-- /.amenity-box__media -->

								<div class="amenity-box__text">
									<h3>DINING</h3>
									<p><strong>Indulge your appetite.</strong> Every hour, our chefs are baking, grilling and sautéing great-tasting fare from scratch. Princess
										offers a wide range of culinary delights.</p>
									<a href="#formBox" class="primary-btn scrollTo">Get Info</a>
								</div>
								<!-- /.amenity-box__text -->
							</div>
							<!-- /.amenity-box -->
					</div>
					<!-- /.offer-grid__body -->
			</div>
			<!-- /.container -->
		</section>
		<!-- /.offer-grid -->

		<section class="cruise-itinerary">
			<div class="container">
				<h2>Sample Alaska Cruise Itinerary</h2>

				<div class="cruise-itinerary__table">
					<div class="cruise-itinerary__list col">
						<div class="header header-1">
							<div class="th title-1">
								<h4>Day</h4>
							</div>
							<div class="th title-2">
								<h4>Port</h4>
							</div>
						</div>
						<!-- /.header -->

						<div class="body">
							<div class="tr odd">
								<div class="td cell-1">
									<div class="day-label">Day 1</div>
								</div>
								<!-- /.td cell-1 -->

								<div class="td cell-2">
									<div class="destination">
										<img src="img/icon-marker.svg" alt="">
										Seattle, Washington
									</div>
								</div>
								<!-- /.td cell-2 -->
							</div>
							<!-- /.tr -->

							<div class="tr even">
								<div class="td cell-1">
									<div class="day-label">Day 2</div>
								</div>
								<!-- /.td cell-1 -->

								<div class="td cell-2">
									<div class="destination">
										<img src="img/icon-marker.svg" alt="">
										At Sea
									</div>
								</div>
								<!-- /.td cell-2 -->
							</div>
							<!-- /.tr -->

							<div class="tr odd">
								<div class="td cell-1">
									<div class="day-label">Day 3-5</div>
								</div>
								<!-- /.td cell-1 -->

								<div class="td cell-2">
									<div class="destination">
										<img src="img/icon-marker.svg" alt="">
										Alaska
									</div>
								</div>
								<!-- /.td cell-2 -->
							</div>
							<!-- /.tr -->

							<div class="tr even">
								<div class="td cell-1">
									<div class="day-label">Day 6</div>
								</div>
								<!-- /.td cell-1 -->

								<div class="td cell-2">
									<div class="destination">
										<img src="img/icon-marker.svg" alt="">
										At Sea
									</div>
								</div>
								<!-- /.td cell-2 -->
							</div>
							<!-- /.tr -->

							<div class="tr odd">
								<div class="td cell-1">
									<div class="day-label">Day 7</div>
								</div>
								<!-- /.td cell-1 -->

								<div class="td cell-2">
									<div class="destination">
										<img src="img/icon-marker.svg" alt="">
										Victoria, Canada
									</div>
								</div>
								<!-- /.td cell-2 -->
							</div>
							<!-- /.tr -->

							<div class="tr even">
								<div class="td cell-1">
									<div class="day-label">Day 8</div>
								</div>
								<!-- /.td cell-1 -->

								<div class="td cell-2">
									<div class="destination">
										<img src="img/icon-marker.svg" alt="">
										Seattle, Washington
									</div>
								</div>
								<!-- /.td cell-2 -->
							</div>
							<!-- /.tr -->
						</div>
						<!-- /.body -->
					</div>
					<!-- /.cruise-itinerary__list -->

					<div class="cruise-itinerary__map col">
						<div class="header header-2">
							<div class="th title-3">
								<h4>Overview & Map</h4>
							</div>
						</div>
						<!-- /.header -->

						<div class="body">
							<div class="map"><img src="img/map.jpg" alt="" class="img-responsive"></div>
						</div>
						<!-- /.body -->
					</div>
					<!-- /.cruise-itinerary__map -->
				</div>
				<!-- /.cruise-itinerary__table -->

				<div class="cruise-itinerary__note">
					*These are sample cruise itineraries. Cruises are variable and based on seasonality and availability. Your cruise agent
					will work with you to find the perfect sailing when you call to book!
				</div>
				<!-- /.cruise-itinerary__note -->
			</div>
			<!-- /.container -->
		</section>
		<!-- /.cruise-itinerary -->

		<section id="mexico-vacation" class="offer-about about-2">
			<div class="container">
				<div class="other-cruises">
					<div class="other-cruises__title">Other Alaska cruise itineraries are available through:</div>
					<!-- /.other-cruises__title -->

					<div class="other-cruises__logos">
						<div><img srcset="img/other-cruises-logos/logo-03.png 1x, img/other-cruises-logos/logo-03@2x.png 2x, img/other-cruises-logos/logo-03@3x.png 3x" alt=""></div>
						<div><img srcset="img/other-cruises-logos/logo-02.png 1x, img/other-cruises-logos/logo-02@2x.png 2x, img/other-cruises-logos/logo-02@3x.png 3x" alt=""></div>
						<div><img srcset="img/other-cruises-logos/logo-04.png 1x, img/other-cruises-logos/logo-04@2x.png 2x, img/other-cruises-logos/logo-04@3x.png 3x" alt=""></div>
						<div><img srcset="img/other-cruises-logos/logo-05.png 1x, img/other-cruises-logos/logo-05@2x.png 2x, img/other-cruises-logos/logo-05@3x.png 3x" alt=""></div>
					</div>
					<!-- /.other-cruises__logos -->
				</div>
				<!-- /.other-cruises -->

				<div class="offer-banner">
					<div class="offer-banner__pricing">
						<div class="retail-price"><s>$7,246</s></div>
						<div class="offer-banner__pricing--wrap">
							<div class="from">From Only</div>
							<div class="offer-price">
								<sup class="currency">$</sup>1,749<sup class="asterisk">*</sup>
							</div>
							<div class="unit-price">PER PERSON</div>
						</div>
						<!-- /.offer-banner__pricing--wrap -->
					</div>
					<!-- /.offer-banner__pricing -->

					<div class="offer-banner__content">
						<div class="info">
							<h3>2-Epic Vacations, <br class="tablet-show"><span class="text-nowrap">1 Insane Price!</span></h3>

							<div class="includes">
								<ul>
									<li><span class="bullet">7</span> Night Alaska Cruise</li>
									<li><span class="bullet">5</span> Night Stay in Nuevo Vallarta</li>
								</ul>
							</div>
							<!-- /.includes -->
						</div>
						<!-- /.info -->

						<div class="button">
							<a href="#formBox" class="primary-btn scrollTo">Get Info</a>

							<div class="cta">
								<img src="img/icon-phone-2.svg" alt="">
								Call For Details <a href="tel:888-270-9126">888-270-9126</a>
							</div>
							<!-- /.cta -->
						</div>
						<!-- /.button -->
					</div>
					<!-- /.offer-banner__content -->
				</div>
				<!-- /.offer-banner -->

				<div class="offer-about__header">
					<h2>Luxury Mexico Vacation</h2>
					<h3>5-Night Stay in <br class="mobile-show">Nuevo Vallarta</h3>
					<img src="img/curved-line.svg" alt="" class="img-responsive curved-line">
				</div>
				<!-- /.offer-about__header -->

				<div class="offer-about__body">
					<p><strong>At this insane rate, we can’t publish the name of this luxury resort.</strong> But, as one of Travel + Leisure’s top-rated
					resorts in the world, we’re sure you won’t be disappointed. This luxury resort provides high-end experiences full of
					options, including endless restaurants and lounges, three golf courses, a shopping plaza, countless pools, and the
					all-new Beachland.</p>

					<div class="mobile-show" style="padding-top: 30px;">
						<a href="#formBox" class="primary-btn scrollTo" style="border: 0;">Get Info</a>
					</div>
					<!-- /.mobile-show -->
				</div>
				<!-- /.offer-about__body -->

				<div class="offer-about__footer">
					<div class="video-box">
						<a href="media/Mexico_Video.mp4" class="glightbox" data-gallery="Mexico_Video">
							<img src="img/video-preview-vacation.jpg" alt="" class="img-responsive video-preview">
							<img src="img/icon-play.svg" alt="" class="play-btn">
						</a>
					</div>
					<!-- /.video-box -->
				</div>
				<!-- /.offer-about__footer -->
			</div>
			<!-- /.container -->
		</section>
		<!-- /.offer-about -->

		<section class="offer-grid grid-2">
			<div class="container">
				<div class="offer-grid__header">
					<div class="title">
						<h2>Welcome to Complete Luxury Vacationing</h2>
					</div>
					<!-- /.title -->
				</div>
				<!-- /.offer-grid__header -->

				<div class="offer-grid__body">
					<div class="amenity-box">
						<div class="amenity-box__media" style="background-image: url(img/vacation-amenities/img-01.jpg);"></div>
						<!-- /.amenity-box__media -->

						<div class="amenity-box__text">
							<h3>ACCOMMODATIONS</h3>
							<p><strong>Stay in a deluxe studio unit with a balcony.</strong> Breathtaking panoramic views on property of the beach and Ameca river.
								Beach access available.</p>
							<a href="#formBox" class="primary-btn scrollTo">Get Info</a>
						</div>
						<!-- /.amenity-box__text -->
					</div>
					<!-- /.amenity-box -->

					<div class="amenity-box">
						<div class="amenity-box__media" style="background-image: url(img/vacation-amenities/img-02.jpg);"></div>
						<!-- /.amenity-box__media -->

						<div class="amenity-box__text">
							<h3>restaurants & lounges</h3>
							<p><strong>Over 40 restaurants and lounges onsite</strong> - without ever leaving the resort property (food, beverages and taxes are not
								included).</p>
							<a href="#formBox" class="primary-btn scrollTo">Get Info</a>
						</div>
						<!-- /.amenity-box__text -->
					</div>
					<!-- /.amenity-box -->

					<div class="amenity-box">
						<div class="amenity-box__media" style="background-image: url(img/vacation-amenities/img-03.jpg);"></div>
						<!-- /.amenity-box__media -->

						<div class="amenity-box__text">
							<h3>POOLS & AQUAPARK</h3>
							<p><strong>5 impressive pool complexes</strong> with poolside cocktail service, a Mayan Pyramid waterslide and a huge Aquapark with lazy
								river.</p>
							<a href="#formBox" class="primary-btn scrollTo">Get Info</a>
						</div>
						<!-- /.amenity-box__text -->
					</div>
					<!-- /.amenity-box -->

					<div class="amenity-box">
						<div class="amenity-box__media" style="background-image: url(img/vacation-amenities/img-04.jpg);"></div>
						<!-- /.amenity-box__media -->

						<div class="amenity-box__text">
							<h3>LIVE ENTERTAINMENT</h3>
							<p><strong>Live music every night</strong> in resort lounges featuring jazz, samba, acoustic guitar, classical & pop.</p>
							<a href="#formBox" class="primary-btn scrollTo">Get Info</a>
						</div>
						<!-- /.amenity-box__text -->
					</div>
					<!-- /.amenity-box -->

					<div class="amenity-box">
						<div class="amenity-box__media" style="background-image: url(img/vacation-amenities/img-05.jpg);"></div>
						<!-- /.amenity-box__media -->

						<div class="amenity-box__text">
							<h3>golf courses</h3>
							<p><strong>Two 18-hole golf courses</strong> and a 10-hole lake course, plus golf academy.</p>
							<a href="#formBox" class="primary-btn scrollTo">Get Info</a>
						</div>
						<!-- /.amenity-box__text -->
					</div>
					<!-- /.amenity-box -->

					<div class="amenity-box">
						<div class="amenity-box__media" style="background-image: url(img/vacation-amenities/img-06.jpg);"></div>
						<!-- /.amenity-box__media -->

						<div class="amenity-box__text">
							<h3>ONSITE ACTIVITIES</h3>
							<p><strong>Enjoy paddleboarding,</strong> Salsa lessons, Spanish lessons, guacamole making classes, water volleyball and a Kid’s Activity
								Center.</p>
							<a href="#formBox" class="primary-btn scrollTo">Get Info</a>
						</div>
						<!-- /.amenity-box__text -->
					</div>
					<!-- /.amenity-box -->
				</div>
				<!-- /.offer-grid__body -->
			</div>
			<!-- /.container -->
		</section>
		<!-- /.offer-grid -->

		<section class="note-bar-2">
			<div class="container">
				<div class="note-bar-2__inner">
					<span class="note-bar-2__icon">
						<img src="img/icon-tag-2.svg" alt="">
					</span>
					<!-- /.note-bar__icon -->
					<span class="note-bar-2__text">
						This Insane Cruise & Resort package <strong>will expire soon</strong> based on availability.
					</span>
					<!-- /.note-bar-2__text -->
				</div>
				<!-- /.note-bar-2__inner -->
			</div>
			<!-- /.container -->
		</section>
		<!-- /.note-bar-2 -->

		<section class="site-form">
			<div class="container">

				<div class="form-box" id="formBox">
					<div class="form-box__inner">
						<div class="steps-indicator">
							<div class="step">1</div>
							<div class="step">2</div>
							<div class="step">3</div>
						</div>
						<!-- /.steps-indicator -->

						<div class="form-box__header">
							<h3>Let’s Customize Your <img src="img/fire-ice-txt.svg" alt="Fire & Ice" class="decorated-text"> Vacation</h3>
							<p>There’s nothing to pay now.</p>
						</div>
						<!-- /.form-box__header -->

						<div class="form-box__body">
							<form action="steps.php" id="mainForm" method="post">
                                <input type="hidden" name="site_source" id="site_source" value="govipvacations.com" />
                                <input type="hidden" name="utm_source" id="utm_source" value="<?php echo htmlspecialchars($_REQUEST['utm_source'] ?? '') ?>" />
                                <input type="hidden" name="utm_medium" id="utm_medium" value="<?php echo htmlspecialchars($_REQUEST['utm_medium'] ?? '') ?>" />
                                <input type="hidden" name="utm_campaign" id="utm_campaign" value="fire-ice" />
                                <input type="hidden" name="utm_term" id="utm_term" value="<?php echo htmlspecialchars($_REQUEST['utm_term'] ?? '') ?>" />
                                <input type="hidden" name="utm_content" id="utm_content" value="<?php echo htmlspecialchars($_REQUEST['utm_content'] ?? '') ?>" />
                                <input type="hidden" name="utm_affiliate" id="utm_affiliate" value="<?php echo htmlspecialchars($_REQUEST['utm_affiliate'] ?? '') ?>" />
                                <input type="hidden" name="opt_in_campaign_name" id="opt_in_campaign_name" value="Fire&Ice" />
								<input type="hidden" name="UID" id="UID" value="" />
								<input type="hidden" name="phoneLookup" id="phoneLookup" value="" />
								<fieldset>
									<div class="row row-2">
										<div class="col">
											<div class="form-group">
												<input type="text" class="form-control" id="fname" name="fname" placeholder="First Name*" required>
											</div>
											<!-- /.form-group -->
										</div>
										<!-- /.col -->

										<div class="col">
											<div class="form-group">
												<input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name*" required>
											</div>
											<!-- /.form-group -->
										</div>
										<!-- /.col -->
									</div>
									<!-- /.row -->

									<div class="row row-2">
										<div class="col">
											<div class="form-group">
												<input type="email" class="form-control" id="email" name="email" placeholder="Email*" required>
											</div>
											<!-- /.form-group -->
										</div>
										<!-- /.col -->

										<div class="col">
											<div class="form-group">
												<input type="text" class="form-control" id="phone" name="phone" placeholder="Phone*" maxlength="14" required>
											</div>
											<!-- /.form-group -->
										</div>
										<!-- /.col -->
									</div>
									<!-- /.row -->
								</fieldset>

								<div class="form-footer">
									<div class="row">
										<div class="col-8">
											<div class="form-check">
												<input class="form-check-input" type="checkbox" id="tcpa" name="tcpa" required>
												<label class="form-check-label" for="tcpa">
													By clicking here you consent to the <a href="#" data-bs-toggle="modal" data-bs-target="#tcModal">terms and conditions</a> of this promotion and to receive promotional emails, SMS texts
													and calls, including pre-recorded messages and/or calls or texts made from an Auto-dial telephone dialing system from
													<a href="https://guestbookings.com" target="_blank">guestbookings.com</a>, and its affiliates, parents and subsidiaries (text/data and other charges may apply) at the
													address/numbers provided regardless of that number being on any Do not Call Registry. Your consent is not a condition of
													any purchase or receiving any services.
												</label>
											</div>
											<!-- .form-check -->
										</div>
										<!-- /.col-8 -->

										<div class="col-4">
											<button type="submit" class="primary-btn">SUBMIT <span class="loading_spin"></span></button>

											<div class="form-secure">
												<img src="img/icon-lock.svg" alt=""> Your information is secure
											</div>
											<!-- /.form-secure -->
										</div>
										<!-- /.col-4 -->
									</div>
									<!-- /.row -->
								</div>
								<!-- /.form-footer -->
							</form>
						</div>
						<!-- /.form-box__body -->
					</div>
					<!-- /.form-box__inner -->
				</div>
				<!-- /.form-box -->

			</div>
			<!-- /.container -->
		</section>
		<!-- /.site-form -->

		<section class="footer-banner">
			<div class="container">
				<h3>2024 Itineraries are now available</h3>
			</div>
			<!-- /.container -->
		</section>
		<!-- /.footer-banner -->

		<footer class="site-footer">
			<div class="container">

				<div class="footer-logos">
					<div><img srcset="img/footer-logo.png 1x, img/footer-logo@2x.png 2x, img/footer-logo@3x.png 3x" alt="govipvacations.com" class="img-responsive"></div>
					<div><img srcset="img/site-logo-2.png 1x, img/site-logo-2@2x.png 2x, img/site-logo-2@3x.png 3x" alt="guestbookings.com" class="img-responsive"></div>
				</div>
				<!-- /.footer-logos -->

				<p style="max-width: 100%;">
					*Cruise and resort offer only available for new bookings subject to availability and may not be combined with other
					offers or promotions. Other exclusions may apply; void were prohibited. Changes or refunds may not be permitted. Cruise
					and resort offer must be booked within 18 months and travel must be completed within 24 months. The Offer and its parts
					are not transferable, not substitutable, and not redeemable for cash. All determinations of whether a Consumer is
					eligible and qualifies for the Offer and a Certificate shall be determined by Guestbookings.com at their sole
					discretion. Individual cruise and resort terms apply. Vacations fulfilled by GuestBookings.com. Based on double
					occupancy. <br>
					Does not include taxes, fees or port expenses.
				</p>

				<hr>

				<p>
					Vacations fulfilled by Guestbookings.com<br>
					Seller of Travel Ref. No.: FL ST43631 | CA 2150115-70 | Hawaii No. 7452<br>
					Copyright © <?php echo date("Y") + 1; ?> | All Rights Reserved.
				</p>
			</div>
			<!-- /.container -->
		</footer>
		<!-- /.site-footer -->
	</div>
	<!-- /.page-wrap -->

	<!-- Modal -->
	<div class="modal fade" id="tcModal" tabindex="-1" aria-labelledby="tcModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h1 class="modal-title fs-5" id="tcModalLabel">Terms & Conditions</h1>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<p>Dated May 22, 2023</p>
					<p>These terms and conditions (“Terms and Conditions”) for the Fire and Ice promotion (“Promotion”) provided by Guestbookings.com LLC (“Guestbookings”) set forth a legally binding agreement between Guestbookings and the purchaser (“purchaser,” “you” or “your”) who purchases products and/or services through Guestbookings. Please review these Terms and Conditions thoroughly as well as all terms and conditions and policies and procedures supplied by the provider of any product or service (“Provider”) offered through the Promotion (“Provider Terms”). To the extent of a conflict between these Terms and Conditions and Provider Terms, these Terms and Conditions shall govern and control. By purchasing products and/or services through the Promotion, you acknowledge and agree to be bound by these Terms and Conditions, the Privacy Policy, and Provider Terms, which are incorporated herein and you accept these Terms and Conditions on the behalf of any traveling companions, users of any product or service purchased through the Promotion, and/or guests (including minors and those under any disability) (collectively with you, “Customers”). Additionally, you agree that it is your sole responsibility to inform any Customer of the contents of these Terms and Conditions and all applicable Provider Terms.</p>
					<p>In some instances, both these Terms and Conditions and separate guidelines, rules, or terms of service, setting forth additional or different terms and/or conditions will apply to your use of the Promotion (in each such instance, and collectively, “Additional Terms”). For example, in addition to these Terms and Conditions, any contest, sweepstakes or other promotion we offer as part of the Promotion or to Promotion purchasers, is and will also be subject to separate official rules and terms (“Official Rules”), which will be posted in the Promotion materials during the applicable promotion period and which will govern Customer’s participation, and our execution, of each such promotion. To the extent there is a conflict between these Terms and Conditions and any Additional Terms, these Terms and Conditions will control unless the Additional Terms expressly state otherwise.</p>
					<p>The Promotion is a limited time promotion for a special vacation package (the “Package”), which includes a 7-night cruise and 5-night luxury resort stay in Mexico. The Package is not redeemable for cash and is non-transferrable, and valid on new bookings only. The Package cannot be combined with any other offers. All upgrades are based on availability and current fees at time of booking.</p>
					<h4>Cruise</h4>
					<p>Your Package purchase covers cruise fare only with select Providers and includes all regular onboard meals and entertainment. The Package does not include taxes, fees and port expenses, gratuities, alcoholic beverages, baggage fees, upgrades, additional guests, travel expenses (airlines, ground transfers), onboard expenditures, and any other expenses not specified as being included. The cruise is subject to the terms and conditions of the cruise line’s passage contract.</p>
					<p>Cruise guests (if Purchaser chooses to add a guest to the booking) must meet all eligibility requirements to sail as described on the cruise line’s website as of the date of departure unless the cruise guest is the child of the Purchaser (in which case such minor guests must be accompanied at all times during the cruise by the Purchaser). All cruise travelers must have all necessary identification and/or cruise documents (including but not limited to a valid passport, visa (if applicable) and all other necessary travel documents, which include any health certifications/proofs of vaccination that are required by the cruise line and/or applicable governments/ports) required for the cruise. As set forth in more detail in the passage contract, the cruise line reserves the right to refuse to embark any traveler, at any time if, in the sole opinion of the cruise line, a traveler is unfit for any reason for the cruise. The cruise line shall not be responsible for any cancellations, delays, diversions or substitution or any acts or omissions whatsoever by cruise operators or any other persons providing any cruise-related services or accommodations. Purchaser and any guests are also responsible for obtaining travel insurance (and all other forms of insurance) at their option and hereby acknowledge that the cruise line has not and will not obtain or provide travel insurance or any other form of insurance.</p>

					<h4>Resort</h4>
					<p>Your Package purchase covers the cost of the resort room on a room only basis (unless noted otherwise) and does not cover any local taxes or charges, upgrades, travel, transfers, travel insurance or other related costs for which you are liable.</p>
					<p>Extra nights’ accommodation, all-inclusive fees, room upgrades, board upgrades, additional guests, special facilities or any other such supplements are chargeable and are to be paid by you, at the time of the booking or upon check-in based on the resort’s terms and conditions.</p>

					<p><strong>AVAILABILITY; MODIFICATIONS TO PRICES OR BILING TERMS</strong></p>
					<p>All products and services offered in the Promotion (including travel products such as cruise, resort, hotel, air and ground transportation, tours, etc.) are capacity controlled and subject to availability. Such products and services included in the Promotion are not guaranteed until confirmation is received from the Provider through Guestbookings.</p>
					<p>Availability may be limited during key periods throughout the year such as (but not limited to), Valentine’s Day, Mother’s/Father’s Day, school holidays, public holidays and the month of December.</p>
					<p>Products and services included in the Promotion may not be available at all times and may be substituted or discontinued at any time. We reserve the right, at any time, to change prices and billing methods for products and services sold, effective immediately upon posting on the products and services or by e-mail delivery to you. Providers retain certain rights to increase fares and rates (including, without limitation, taxes, service charges, airport charges, and government fees), modify itineraries, change availability, and change and/or discontinue promotions and/or special offers, at any time for any reason. Any increase in price or rate imposed by the Provider will be passed on to purchaser, and purchaser agrees to such increase, unless otherwise stated in the Provider Terms related to the individual transaction.</p>

					<p><strong>NO RESPONSIBILITY TO SELL MISPRICED PRODUCTS OR SERVICES</strong></p>
					<p>We do our best to describe every item, product or service offered through the Promotion as accurately as possible. However, we do not warrant that specifications or pricing on the website is complete, accurate, reliable, current, or error-free. In the event of any errors relating to the pricing or specifications of any item, product or service, we shall have the right to refuse or cancel any orders in our sole discretion. If we charged your credit card or other account prior to cancellation, we will issue a credit to your account in the amount of the charge.</p>

					<p><strong>BOOKING CANCELLATION/CHANGES</strong></p>
					<p>The fees assessed by Guestbookings and/or Provider as a result of a cancellation or change are set forth on the Booking Confirmation and apply to all transactions purchased through us. Each Provider has specific cancellation policies and penalties separate and apart from Guestbookings. Provider Terms may treat name changes and departure date changes as cancellations.</p>
					<p>If transportation or other services are canceled by the Provider, all sums paid to the Provider for services not performed in accordance with the contract between the Provider and you will be refunded within thirty (30) days of receiving the funds from the Provider with whom the services were arranged, or if the funds were not sent to the Provider, the funds shall be returned within fourteen (14) days after cancellation by the Provider to you unless you request the Provider to apply the money to another travel product and/or date.</p>

					<p><strong>Your Rights After Purchase</strong></p>
					<p>
						Florida Residents:<br>
						If you are a legal resident of the State of Florida, you have a 30 day right of cancellation. That means if you purchase a Package, you will have thirty (30) days from your purchase date to cancel and rescind your purchase and obtain a full refund of any payments you have made to us. To exercise this right, you must call us at the number above or provide us written notice of your cancellation by midnight of the 30th calendar day from the date of your purchase (“Florida Cancellation Date”) by sending the notice to:
					</p>

					<p>
						Attention: Guestbookings.com Package Cancellations<br>
						30 N Gould St, Suite N<br>
						Sheridan, WY 82801
					</p>

					<p>Your request to cancel your Package purchase must either be received by us by the Florida Cancellation Date, if delivered personally or by delivery service that authenticates and confirms the date of actual delivery or is postmarked on, or before the Florida Cancellation Date. If you are a legal resident of Florida, any cancellation requests received or postmarked after the Florida Cancellation Date will not be honored, your Package purchase will be final and any amounts you paid will be non-refundable.</p>

					<p>Washington Residents:</p>
					<p>If you are a legal resident of the State of Washington, you may cancel the Package without any cancellation fee or other penalty, or stated reason for doing so, by sending notice of cancellation by certified mail, return receipt requested, to Guestbookings.com Package Cancellations, at the address indicated below. The notice must be postmarked by midnight of the fifteenth (15th) calendar day following the day on which this Agreement is signed by you, or the day all membership materials are received by you, whichever is later (the “Washington Cancellation Date”). However, if the day on which this Agreement was signed is not included as a "calendar day," and if the fifteenth (15th) calendar day falls on a Sunday or legal holiday, then the right to cancel this Agreement expires on the day immediately following that Sunday or legal holiday. TO CANCEL THIS AGREEMENT, SEND A COPY OF THIS NOTICE OF CANCELLATION OR OTHER WRITTEN NOTICE OF CANCELLATION TO:</p>

					<p>
						Attention: Guestbookings.com Package Cancellations<br>
						30 N Gould St, Suite N<br>
						Sheridan, WY 82801
					</p>

					<p>and the words: I HEREBY CANCEL THIS AGREEMENT. You must sign the cancellation notice, print your name legibly under your signature, include the date and your address.</p>

					<p>Other Residents:</p>
					<p>If you are not a legal resident of the States of Florida or Washington, you have a 7 day right of cancellation. That means if you purchase a Package, you will have seven (7) days from your purchase date to cancel and rescind your purchase and obtain a full refund of any payments you have made to us. To exercise this right, you must call us at the number above or provide us written notice of your cancellation by midnight of the 7th calendar day from the date of your purchase (“Non-Florida Cancellation Date”) by sending the notice to: </p>

					<p>
						Attention: Guestbookings.com Package Cancellations<br>
						30 N Gould St, Suite N<br>
						Sheridan, WY 82801
					</p>

					<p>Your request to cancel your Package purchase must either be received by us by the Non-Florida Cancellation Date, if delivered personally or by delivery service that authenticates and confirms the date of actual delivery or is postmarked on or before the Non-Florida Cancellation Date. Except for legal residents of the State of Florida as referenced above, if your cancellation request is received or postmarked after the Non-Florida Cancellation Date it will not be honored, your Package purchase will be final and any amounts you paid will be non-refundable.</p>
				</div>
			</div>
		</div>
	</div>

	<script src="js/scripts.min.js"></script>
	<script src="js/common.js"></script>

	<script type="text/javascript" src="https://auto.myonedash.com/api/pixel?ID=<?php echo $pixel ?>&FBPID=976394883417959"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.20/dist/sweetalert2.min.css" rel="stylesheet">

	<script>
		Hookier.load(function() {
			Hookier.debugger = false;
			Hookier.consoleLogs = false;
			//
            let phoneValidation = new HookierAutomation({
                id: "6c09458a-4447-407f-8e1b-40bc42f83e0d",
                listenEvents: true,
                onBeforeSend: function() {
                    //
                },
                onRequestSent: function() {
                    //
                },
                onAutomationQueued: function() {
                    //
                },
                onAutomationStarted: function() {
                    //
                },
                onAutomationFinished: function() {
                    try {

                        let $response = event.detail;

                        console.log("automation-finished", $response);
                        //
                        console.log($response);
                        var typePhone = 'failed';
                        if ($response.event_data.hasOwnProperty('eval')) {
                            let phoneLookup = findVal($response.event_data, 'twilio_carrier_info');
                            if (phoneLookup) {
                                typePhone = phoneLookup.result.carrier.type || null;
                            } else {
                                phoneLookup = findVal($response.event_data, 'icehook_scout');
                                if (phoneLookup) {
                                    typePhone = $response.event_data.eval.phone_lookup.add_ons.results.icehook_scout.result.line_type || null;
                                }
                            }
                            //
                            //Hookier.$("#phoneLookup").val(JSON.stringify(phoneLookup));
                        }
                        if (typePhone === 'fixed_or_mobile' || typePhone === 'mobile') {
                            Hookier.redirect('steps.php', {
                                payload: Hookier.$('#mainForm').serializeObject(),
                                response: $response
                            });
                        } else {
                            var number = $('#phone').val().replace(/^(\d{3})(\d{3})(\d{4}).*/, "($1)-$2-$3");
                            Swal.fire({
                                title: '',
                                html: `We are unable to verify your number ${number}. Please be sure to enter a valid mobile phone number. <br> Questions? Call <a href="tel:8885424142">888-542-4142</a> to speak with an agent.`,
                                icon: 'warning',
                                showDenyButton: true,
                                showCancelButton: false,
                                confirmButtonText: 'Change Number',
                                confirmButtonColor: '#e23a87',
                                denyButtonText: 'Call 888-291-8902 Now',
                                denyButtonColor: '#8c909d',
                                allowOutsideClick: false,
                                allowEscapeKey: false,
                            }).then((result) => {
                                if (result.isDenied) {
                                    window.location.href = 'tel:8882918902';
                                } else if (result.isConfirmed) {
                                    $('#phone').val("").focus();
                                    $('#mainForm').valid();
                                    $(':input[type="submit"]').prop('disabled', false);
                                }
                            });
                        }
                        //
                    } catch (e) {
                        //
                        Hookier.$('#phone').val("");
                        //Hookier.$('#mainForm').valid();
                    } finally {
                        Hookier.$(".loading_spin").css({
                            "display": "none"
                        });
                        Hookier.$(':input[type="submit"]').prop('disabled', false);
                    }
                },
                onError: function() {
                    console.log("error", JSON.stringify($response));
                }
            });
            //
			let optIn = new HookierAutomation({
				id: "<?php echo $trigger_step1 ?>",
				listenEvents: true,
				onBeforeSend: function() {
					console.log("before-send", event.detail);
					// Hookier.$('#success-msg').fadeIn('fast');
					Hookier.$(':submit').prop('disabled', true);
					//
					Hookier.$(".loading_spin").css({
						"display": "inline-block"
					});
				},
				onRequestSent: function() {
					// debugger;
					console.log("request-sent", event.detail);
					// Hookier.$(':submit').fadeOut('fast');
					Hookier.Pixel.triggerFBEvent('Lead', {});
				},
				onAutomationQueued: function() {
					console.log("automation-queued", event.detail);
				},
				onAutomationStarted: function() {
					console.log("automation-started", event.detail);
				},
				onAutomationFinished: function() {
					try {

						let $response = event.detail;

						console.log("automation-finished", $response);
						//
						Hookier.$("#UID").val($response.event_data.lead.lead_id);
						//
						if (typeof vgo === "function") {
							vgo("setEmail", $response.event_data.lead.lead_email);
							vgo("process");
						}
                        //
                        phoneValidation.payload = {
                            UID: $response.event_data.lead.lead_id,
                            phone: $('#phone').val()
                        };
                        phoneValidation.run();
						//
					} catch (e) {
						//
						Hookier.$('#phone').val("");
						Hookier.$('#mainForm').valid();
                        Hookier.$(':input[type="submit"]').prop('disabled', false);
                        Hookier.$(".loading_spin").css({
                            "display": "none"
                        });
					} finally {
						/*Hookier.$(".loading_spin").css({
							"display": "none"
						});
                        Hookier.$(':input[type="submit"]').prop('disabled', false);*/
					}
				},
				onError: function() {
					console.log("error", JSON.stringify($response));
				}
			});

			Hookier.$('#mainForm').on('submit', function(e) {
				e.preventDefault();
				e.stopPropagation();
				//
				// debugger;
				//
				if ($('#mainForm').valid() == true) {
					//
					// Set payload, you can use .payload or setPayload function or in the object constructor
					optIn.payload = Hookier.$('#mainForm').serializeObject();
					//
					// Run Automation
					optIn.run();
				}
				//
			});
			//
			function findVal(object, key) {
				var value;
				Object.keys(object).some(function(k) {
					if (k === key) {
						value = object[k];
						return true;
					}
					if (object[k] && typeof object[k] === 'object') {
						value = findVal(object[k], key);
						return value !== undefined;
					}
				});
				return value;
			}
			//
		});
	</script>
</body>

</html>