<?php include_once __DIR__.'/../project/frontInclude.php' ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include_once __DIR__.'/php/ga.php' ?>
		<?php include_once __DIR__.'/php/header-include.php' ?>
	</head>
	<body>
		<div id="main">
			<div id="page-top">
				<?php include_once __DIR__.'/php/page-head.php' ?>
				<?php include_once __DIR__.'/php/page-nav.php' ?>
			</div>
			<div class="container">
				<div class="card page-head soldier-list-head">
					<div class="card-header bg-success text-white">Wolfeson's Bar Chart Races</div>
				</div>
				<div class="card mb-3">
					<div class="flourish-embed flourish-bar-chart-race" data-src="visualisation/7675262"><script src="https://public.flourish.studio/resources/embed.js"></script></div>
					<div class="card-body">
						<h5 class="card-title">Author Note</h5>
						<p>This chart shows the top soldiers at each episode number, across all 11 seasons that Chris has done (the big number in the bottom-right is the ep. number). One thing to keep in mind is that a lot of the bars will stop moving near the end, since some seasons ended earlier than others (most lasted into the 60s or early 70s). So at the very end, after episode 91, you can pause and see the top 20 all time for Total Kills. Enjoy!</p>
					</div>
				</div>
				
				<div class="card mb-3">
					<div class="flourish-embed flourish-bar-chart-race" data-src="visualisation/7703407"><script src="https://public.flourish.studio/resources/embed.js"></script></div>
					<div class="card-body">
						<h5 class="card-title">Author Note</h5>
						<p>KPM (limited to just the soldiers who finished with 100 or more total kills).</p>
					</div>
				</div>
				
				<div class="card mb-3">
					<div class="flourish-embed flourish-bar-chart-race" data-src="visualisation/7754161"><script src="https://public.flourish.studio/resources/embed.js"></script></div>
					<div class="card-body">
						<h5 class="card-title">Author Note</h5>
						<p>If you follow baseball and are familiar with stats like OPS+ and ERA+, this works exactly the same way. It takes the KPM stat and normalizes it against the average KPM for that season, which helps give a better comparison between seasons with different "scoring environments". For each season, 100 is average, a soldier KPM+ of 150 means they got 50% more kills per mission than the average for their season, etc.</p>
					</div>
				</div>
				
			</div>
		</div>
	<?php include_once __DIR__.'/php/page-footer.php' ?>
	<?php include_once __DIR__.'/php/scripts-include.php' ?>
	</body>
</html>