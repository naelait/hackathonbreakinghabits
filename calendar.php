
<!DOCTYPE html>
<html>

<head>
	<title>Delay</title>
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<meta content="Chrissy Collins" name="author">
	<meta content="A pure vanilla JS calendar by @chrisssycollins" name="description">
	<link href="dist/vanillaCalendar.css" rel="stylesheet">
	<style>
	.confirm{
		padding:15px;
		border:1px solid lightgrey;
		
	}
	.confirm a{
		text-decoration:none;
	}
	</style>
</head>

<body>
	<div class="container">
		<h2>Pick your deadline</h2>
		<p>It's your last deadline</p>
		<div id="v-cal">
			<div class="vcal-header">
				<button class="vcal-btn" data-calendar-toggle="previous">
					<svg height="24" version="1.1" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
						<path d="M20,11V13H8L13.5,18.5L12.08,19.92L4.16,12L12.08,4.08L13.5,5.5L8,11H20Z"></path>
					</svg>
				</button>

				<div class="vcal-header__label" data-calendar-label="month">
					March 2017
				</div>


				<button class="vcal-btn" data-calendar-toggle="next">
					<svg height="24" version="1.1" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
						<path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path>
					</svg>
				</button>
			</div>
			<div class="vcal-week">
				<span>Mon</span>
				<span>Tue</span>
				<span>Wed</span>
				<span>Thu</span>
				<span>Fri</span>
				<span>Sat</span>
				<span>Sun</span>
			</div>
			<div class="vcal-body" data-calendar-area="month"></div>
		</div>

		<p class="demo-picked">
			Date picked:
			<span data-calendar-label="picked"></span>
		</p>

		<footer>
			<div class="confirm">
				<a href="facture2.php">Confirm</a>
			</div> 
			
		</footer>
	</div>
	<script src="dist/vanillaCalendar.js" type="text/javascript"></script>
	<script>
		window.addEventListener('load', function () {
			vanillaCalendar.init({
				disablePastDays: true
			});
		})
	</script>
</body>

</html>