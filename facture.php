<?php
	require 'connect.php';
	$sql = 'SELECT * FROM factures';
	$query = $dbh->prepare($sql);
	$query->execute(array());

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>breakinghabitshackathon</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="assets/style/css/style.css">
  <link rel="stylesheet" type="text/css" href="assets/style/css/styleFacture.css">
	<link rel="stylesheet" type="text/css" href="assets/style/bootstrap-4.0.0-dist/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<header class="index-header container-fluid">

		<div class="header-infos">
			<div class="app-title-wrapper">
				<h1 class="app-title">ING</h1>
			</div>
			<div class="wrapper_info-user">
				<!-- <div class="wrapper_name-number">
					<span>John Doe</span>
					<span class="index_bank-number">1457-8975-6587-6</span>
				</div> -->
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
				<li class="nav-elem">
					<a href="delay.php" class="" >Delay</a>
				</li>
			</ul>
		</nav>

	</header>
	<main>
    <div class="bills">
      <div class="bill container-fluid">
        <div class="row">
			<?php
      		    while($r = $query->fetch())
      		    {
      		?>
			<div class="col-12 d-flex">
			<div class="bill_pay col-2">
	            <span>Pay</span>
	          </div>
	          <div class="bill_wrapper-info col-8">
	            <p class="bill_name"><?php echo $r['compagnie']; ?><span class="bill_name-specific">(Gaz and Electricity)</span></p>
	            <div class="to_pay"><span class="to_pay"><?php echo $r['montant']. " € "; ?></span><span class="date">to pay before <?php echo $r['datefacture']; ?></span></div>
	          </div>
	          <div class="bill_delay col-2">
	            <span>Delay</span>
	          </div>
			</div>
			<?php } ?>
			</div>

        </div>
      </div>


    </div>
	</main>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="assets/js/main.js"></script>
</body>
</html>
