<?php
include_once __DIR__.'/../project/frontInclude.php';

use XCOMDatabank\Front\SoldierListPage;
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
				<div class="card page-head soldier-list-head">
					<div class="card-header bg-success text-white">Soldiers List</div>
				</div>
				<?php
                    $soldierList = New SoldierListPage;
                    $soldierList->getSoldierList();
				?>

			</div>
		</div>
	<?php include_once __DIR__.'/php/page-footer.php' ?>
	<?php include_once __DIR__.'/php/scripts-include.php' ?>
	</body>
</html>