<!DOCTYPE html>
<html>
<head>
	<title>breakinghabitshackathon</title>
	<meta charset="utf-8">
	<link rel="manifest" href="manifest.json">
	<link rel="apple-touch-icon" sizes="120x120" href="assets/img/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon-16x16.png">
	<link rel="mask-icon" href="assets/img/safari-pinned-tab.svg" color="#5bbad5">
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico" />
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="msapplication-config" content="assets/img/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">
	<link rel="stylesheet" type="text/css" href="assets/style/bootstrap-4.0.0-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/style/css/style.css">
  <link rel="stylesheet" type="text/css" href="assets/style/css/styleFACTURE.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script defer src="assets/style/fontawesome-free-5.0.4/svg-with-js/js/fontawesome-all.js"></script>
</head>
<body>
	<header class="index-header container-fluid">

		<div class="header-infos">
			<div class="app-title-wrapper">
				<h1 class="app-title">ING</h1>
			</div>
			<div class="wrapper_info-user">
				<div class="wrapper_info-money">
					<div class="account-balance">
						<span class="text-before-number">Account balance </span>
						<span class="index-number index_total-due">4450</span>
					</div>
					<div class="total-due">
						<span class="text-before-number">Total bills </span>
						<span class="index-number index_total-due">450</span>
					</div>
				</div>
			</div>
		</div>

		<nav class="index-nav">
			<ul>
				<li class="nav-elem">
					<a href="historique.php" class="">History</a>
				</li>
				<li class="nav-elem nav-elem-active">
					<a href="facture.php" class="">Bills</a>
				</li>
				<li class="nav-elem ">
					<a href="delay.php" class="" >Delay</a>
				</li>
			</ul>
		</nav>

	</header>

	<main>
    <div class="bill">
          <div class="bill_button  bill_pay ">
						<i class="far fa-credit-card"></i>
            <span>Pay</span>
          </div>
          <a href="singlefacture.php" class="bill_wrapper-info ">
            <p class="bill_name">Electrabel<span class="bill_name-specific">(Gaz and Electricity)</span></p>
						<div class="to_pay">
							<span class="to_pay">50 €</span><span class="date">pay the 18 November 2018</span>
						</div>
          </a>
          <a href='calendar.php' class="bill_button bill_delay ">
						<i class="far fa-clock"></i>
            <span>Delay</span>
          </a>
		</div>
		<div class="bill">
          <div class="bill_button  bill_pay ">
						<i class="far fa-credit-card"></i>
            <span>Pay</span>
          </div>
          <div class="bill_wrapper-info ">
            <p class="bill_name">Electrabel<span class="bill_name-specific">(Gaz and Electricity)</span></p>
						<div class="to_pay">
							<span class="to_pay">50 €</span><span class="date">pay the 18 November 2018</span>
						</div>
          </div>
          <div class="bill_button bill_delay ">
						<i class="far fa-clock"></i>
            <span>Delay</span>
          </div>
		</div>
		<div class="bill">
          <div class="bill_button  bill_pay ">
						<i class="far fa-credit-card"></i>
            <span>Pay</span>
          </div>
          <div class="bill_wrapper-info ">
            <p class="bill_name">Electrabel<span class="bill_name-specific">(Gaz and Electricity)</span></p>
						<div class="to_pay">
							<span class="to_pay">50 €</span><span class="date">pay the 18 November 2018</span>
						</div>
          </div>
          <div class="bill_button bill_delay ">
						<i class="far fa-clock"></i>
            <span>Delay</span>
          </div>
		</div>
		<div class="bill">
          <div class="bill_button  bill_pay ">
						<i class="far fa-credit-card"></i>
            <span>Pay</span>
          </div>
          <div class="bill_wrapper-info ">
            <p class="bill_name">Electrabel<span class="bill_name-specific">(Gaz and Electricity)</span></p>
						<div class="to_pay">
							<span class="to_pay">50 €</span><span class="date">pay the 18 November 2018</span>
						</div>
          </div>
          <div class="bill_button bill_delay ">
						<i class="far fa-clock"></i>
            <span>Delay</span>
          </div>
    </div>

      <!-- <div class="bill container-fluid">
        <div class="row">
          <div class="bill_pay col-2">
            <span>Pay</span>
          </div>
          <div class="bill_wrapper-info col-8">
            <p class="bill_name">Proximus<span class="bill_name-specific">(Tv and Telecom)</span></p>
            <div class="to_pay"><span class="to_pay">90 €</span><span class="date">pay the 22 October 2018</span></div>
          </div>
          <div class="bill_delay col-2">
            <span>Delay</span>
          </div>
        </div>
      </div>

      <div class="bill container-fluid">
        <div class="row">
          <div class="bill_pay col-2">
            <span>Pay</span>
          </div>
          <div class="bill_wrapper-info col-8">
            <p class="bill_name">Sos PC<span class="bill_name-specific">(PC Repair)</span></p>
            <div class="to_pay"><span class="to_pay">310 €</span><span class="date">pay the 12 October 2018</span></div>
          </div>
          <div class="bill_delay col-2">
            <span>Delay</span>
          </div>
        </div>
      </div> -->

    </div>
	</main>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="assets/js/main.js"></script>
</body>
</html>
