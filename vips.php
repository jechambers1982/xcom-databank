<?php
include_once __DIR__.'/../project/frontInclude.php';

use XCOMDatabank\Front\VIPPage;
?>

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
				<div class="card page-head vip-list-head">
					<div class="card-header bg-success text-white">XCOM VIPs</div>
				</div>
				<div class="row vip-main-row">
				<?php
                    $engineerVIP = new VIPPage('Engineer');
                    $scientistVIP = new VIPPage('Scientist');
                    $darkVIP = new VIPPage('Dark VIP');
                    $engineerVIP->getVIPS();
                    $scientistVIP->getVIPS();
                    $darkVIP->getVIPS();
				?>
				</div>
			</div>
		</div>
	<?php include_once __DIR__.'/php/page-footer.php' ?>
	<?php include_once __DIR__.'/php/scripts-include.php' ?>
	</body>
</html>