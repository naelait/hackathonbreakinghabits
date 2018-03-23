<!DOCTYPE html>
<html>
<head>
	<title>breakinghabitshackathon</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="assets/style/bootstrap-4.0.0-dist/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="assets/style/css/style.css">
  <link rel="stylesheet" type="text/css" href="assets/style/css/styleFACTURE.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <script defer src="assets/style/fontawesome-free-5.0.4/svg-with-js/js/fontawesome-all.js"></script>
    <style>
        #popup{
            height: 100%;
            position: fixed;
            background-color: rgba(255,255,255, 1);
            width: 100%;
            display:flex;
            justify-content:center;
            align-items:center;
        }
        #contPopup{
            margin-top: 7%;
            width: 50%;
            margin-left: 25%;
            margin-right: 25%;
            text-align: center; 
        }
       .contbtn{
        width:50%; 
        height:30px;
        background-color:#FE7A22; 
        color:black; 
        border:none;
        margin:0 auto;
       }
       .contbtn a{
           width:100%;
           height:100%;
       }
    </style>

</head>
<body>
    <div id="popup">
           <div id="contPopup">
                <p><strong>the request as been sent</strong></p>
                <div class="contbtn">
                  <a href="delayADDED.php">ok</a>
                </div> 
           </div>
            
        </div>
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
				<li class="nav-elem">
					<a href="index.php" class="">Bills</a>
				</li>
				<li class="nav-elem nav-elem-active">
					<a href="delay.php" class="" >Delay</a>
				</li>
			</ul>
		</nav>

	</header>

	<main>
    <div class="bill">
          
          <div class="bill_wrapper-info " style="margin-left:25%;">
            <p class="bill_name">Electrabel<span class="bill_name-specific">(Gaz and Electricity)</span></p>
                <div class="to_pay">
                    <span class="to_pay">50 €</span><span class="date"> <strong>Reporté au 26/03/2018</strong></span>
                </div>
          </div>
          
		</div>
		<div class="bill">
          <div class="bill_button  bill_pay ">
						<i class="far fa-credit-card"></i>
            <span>Always</span>
          </div>
          <div class="bill_wrapper-info ">
            <p class="bill_name">Electrabel<span class="bill_name-specific">(Gaz and Electricity)</span></p>
						<div class="to_pay">
							<span class="to_pay">50 €</span><span class="date">pay the 18 November 2018</span>
						</div>
          </div>
          <div class="bill_button bill_delay ">
						<i class="far fa-clock"></i>
            <span>One time</span>
          </div>
		</div>
		<div class="bill">
          <div class="bill_button  bill_pay ">
						<i class="far fa-credit-card"></i>
            <span>Always</span>
          </div>
          <div class="bill_wrapper-info ">
            <p class="bill_name">Electrabel<span class="bill_name-specific">(Gaz and Electricity)</span></p>
						<div class="to_pay">
							<span class="to_pay">50 €</span><span class="date">pay the 18 November 2018</span>
						</div>
          </div>
          <div class="bill_button bill_delay ">
						<i class="far fa-clock"></i>
            <span>One time</span>
          </div>
		</div>
		<div class="bill">
          <div class="bill_button  bill_pay ">
						<i class="far fa-credit-card"></i>
            <span>Always</span>
          </div>
          <div class="bill_wrapper-info ">
            <p class="bill_name">Electrabel<span class="bill_name-specific">(Gaz and Electricity)</span></p>
						<div class="to_pay">
							<span class="to_pay">50 €</span><span class="date">pay the 18 November 2018</span>
						</div>
          </div>
          <div class="bill_button bill_delay ">
						<i class="far fa-clock"></i>
            <span>One time</span>
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
