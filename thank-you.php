<!DOCTYPE html>
<?php
$repoRoot = dirname(__FILE__, 3);
include_once "{$repoRoot}/common/hookier-header.php";

$triggers = [
    'facebook' => [
        'schedule' => '2143e4f8-4cc3-11ee-b4be-f60a19ad53bd',
        'campaign' => '21425ec6-4cc3-11ee-b4be-f60a19ad53bd',
        'pixel' => '4ac3ca26-e9c0-11ed-9854-86789473f0e9'
    ],
    'npm' => [
        'schedule' => '46e5d4ee-4cc7-11ee-b4be-f60a19ad53bd',
        'campaign' => '46e41a37-4cc7-11ee-b4be-f60a19ad53bd',
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

$trigger = $triggers[$current_source]['schedule'];
$campaign = $triggers[$current_source]['campaign'];
$pixel = $triggers[$current_source]['pixel'];

$already_booked = false;
$lead_first_name = $objLead->lead_first_name ?? '';

if (isset($_REQUEST['invitee_email']) && filter_var($_REQUEST['invitee_email'], FILTER_VALIDATE_EMAIL)) {
    $search_email = filter_var($_REQUEST['invitee_email'], FILTER_SANITIZE_EMAIL);
    $selected_date = new DateTime($_REQUEST['event_start_time']);
    //
    $client_id = '0dd73ef0-e9b6-11ed-9854-86789473f0e9'; // GuestBookings
    $request_signature = hash('sha512', base64_encode("$client_id:::$search_email"));
    //
    $search_request = hookier_curl (
            'api/leads/search',
            ['email' => $search_email, 'client_id' => $client_id, 'signature' => $request_signature],
            true
    );
    //
    if ($search_request->response->success && count($search_request->response->data) > 0) {
        $already_booked = true;
        $lead_first_name = $search_request->response->data[0]->lead_first_name ?? '';

        foreach ($search_request->response->data as $lead) {
            $payload = ['UID' => $lead->lead_id, 'scheduled_appointment' => $_REQUEST['event_start_time']];
            if (!empty($_REQUEST['answer_1'])) {
                $payload['scheduled_appointment_phone'] =  filter_var($_REQUEST['answer_1'], FILTER_SANITIZE_STRING);
            }
            //
            if (!empty($_REQUEST['answer_2'])) {
                $payload['scheduled_appointment_comments'] =  filter_var($_REQUEST['answer_2'], FILTER_SANITIZE_STRING);
            }
            //
            hookier_curl("api/hooks/catch/$campaign/$trigger", $payload);
        }
    }
}

function hookier_curl($endpoint, $payload, $auth = false)
{
    $ch = curl_init();

    if ($auth) {
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Authorization: Bearer YmE5OTQzMDYtNzY1MC00Y2Y4LThlMDEtNTdhMmRiNGViZGRl']);
    }

    $url = 'https://auto.myonedash.com/'. $endpoint;
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_USERAGENT, 'PHP-MCAPI/3.0');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_TIMEOUT, 0);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));
    curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);

    $request = new stdClass();
    $request->response = @(json_decode(curl_exec($ch)));
    $request->status_code = @curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $request->curl_errors = curl_error($ch);
    curl_close($ch);
    return $request;
}
?>
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

	<link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
	<script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" async></script>

	<?php require_once __DIR__ . "/../../common/guestbookings-ga-header.php" ?>

</head>

<body>

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

		<section class="ty-hero">
			<div class="container">
				<div class="ty-hero__inner">
					<div class="ty-hero__titles">
						<h1>
							Wow <?php echo $lead_first_name ?? '' ?>!<br>
							You’ve planned the vacation of a lifetime
						</h1>
						<img src="img/curved-line.svg" alt="" class="img-responsive curved-line">
					</div>
					<!-- /.ty-hero__titles -->

					<div class="ty-box">
						<div class="ty-box__top">
							<p><strong><em>A Vacation Concierge will be in touch with you to lock in this insane rate while it’s available.</em></strong></p>
							<p>Can’t wait? Call us now at <a href="tel:888-270-9126" class="text-nowrap">888-270-9126</a>. <!-- <?php if(!$already_booked): ?> or schedule an appointment to speak with your Vacation Concierge. <?php endif; ?>--></p>
						</div>
						<!-- /.ty-box__top -->

						<div class="ty-box__bottom" style="display: none !important;">
							<?php if (!$already_booked): ?>
                                <p><strong>Schedule an Appointment for a <br class="tablet-show">Call-Back from Your Vacation Concierge</strong></p>
                                <a href="#" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/fire-and-ice/60min?hide_gdpr_banner=1&email=<?php echo $objLead->lead_email ?? '' ?>&name=<?php echo $objLead->lead_full_name ?? '' ?>'});return false;" class="primary-btn">Schedule an Appointment</a>
							<?php else: ?>
                                <p><strong><?php echo "All Set! Let's chat on {$selected_date->format('l, F jS')}. An invite with instructions has been sent to your email.<br> Looking forward to chatting with you!" ?></strong></p>
                            <?php endif; ?>
                            <!-- /.primary-btn -->
						</div>
						<!-- /.ty-box__bottom -->
					</div>
					<!-- /.ty-box -->
				</div>
				<!-- /.ty-hero__inner -->
			</div>
			<!-- /.container -->
		</section>
		<!-- /.ty-hero -->

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

	<script type="text/javascript" src="https://auto.myonedash.com/api/pixel?ID=<?php echo $pixel; ?>&FBPID=976394883417959"></script>

    <?php if($already_booked): ?>
    <script>
       function waitPixel() {
           if(Hookier.Pixel.triggerFBEvent && typeof Hookier.Pixel.triggerFBEvent === "function" && Hookier.Pixel.jQuery) {
               Hookier.Pixel.triggerFBEvent('Schedule');
           } else {
               window.setTimeout(waitPixel, 100);
           }
       }
       waitPixel();
    </script>
    <?php endif ?>
</body>

</html>