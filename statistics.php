<?php

include_once __DIR__.'/../project/frontInclude.php';

use XCOMDatabank\Front\Statistics;
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
                <div class="card page-head stats-head">
                    <div class="card-header bg-success text-white">Statistics Summary</div>
                </div>
                <div class="row mb-3 mx-0">
                    <div class="card col-12 col-md-6 col-lg-3 px-0 me-2 border-success">
                        <?php Statistics::getSoldierSummary(); ?>
                    </div>
                    <div class="card col-12 col-md-6 col-lg-3 px-0 mx-2 border-primary">
                        <?php Statistics::getMissionSummary(); ?>
                    </div>
                    <div class="card col-12 col-md-6 col-lg-3 px-0 mx-2 border-warning">
                        <?php Statistics::getCovertSummary(); ?>
                    </div>
                    <div class="card col-12 col-md-6 col-lg-3 px-0 ms-2 border-danger">
                        <?php Statistics::getAlienSummary(); ?>
                    </div>
                </div>

                <div class="card page-head stats-head">
                    <div class="card-header bg-success text-white">Soldier Statistics</div>
                </div>
                <div class="row mb-3 mx-0">
                    <div class="col-12 col-md-6 col-lg-3 ps-0">
                        <?php Statistics::getTopSoldiers(); ?>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <?php Statistics::getSoldierMVPs(); ?>
                    </div>
                    <div class="col-12 col-lg-4">
                        <?php Statistics::getClassBySoldiers(); ?>
                    </div>
                    <div class="col-12 col-md-6 col-lg-2 pe-0">
                        <?php Statistics::getRanksBySoldiers(); ?>
                    </div>
                </div>

                <div class="card page-head stats-head">
                    <div class="card-header bg-success text-white">Mission Statistics</div>
                </div>
                <div class="row mb-3 mx-0">
                    <div class="col-12 col-lg-6 ps-0">
                        <?php Statistics::getMissionTypes(); ?>
                    </div>
                    <div class="col-12 col-lg-3">
                        <?php Statistics::getBattleStats(); ?>
                        <?php Statistics::getChosenEncounters(); ?>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 pe-0">
                        <?php Statistics::getMissionRatings(); ?>
                        <?php Statistics::getMissionDifficulty(); ?>
                    </div>
                </div>

                <div class="card page-head stats-head">
                    <div class="card-header bg-success text-white">Covert Statistics</div>
                </div>
                <div class="row mb-3 mx-0">
                    <div class="col-12 col-md-6 col-lg-3 ps-0">
                        <?php Statistics::getActionsBySoldier(); ?>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <?php Statistics::getActionsByType(); ?>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <?php Statistics::getChainsByType(); ?>
                    </div>
                    <div class="col-12 col-md-6 col-lg-2 pe-0">
                        <?php Statistics::getActionsByFaction(); ?>
                        <?php Statistics::getChainsByStatus(); ?>
                    </div>
                </div>
                <div class="card page-head stats-head">
                    <div class="card-header bg-success text-white">Alien Statistics</div>
                </div>
                <div class="row mb-3 mx-0">
                    <div class="col-12 ps-0">
                        <?php Statistics::getAliensByType(); ?>
                    </div>
                </div>
                <div class="row mb-3 mx-0">
                    <div class="col-12 ps-0">
                        <?php Statistics::getAliensByUnit(); ?>
                    </div>
                </div>
			</div>
		</div>
	<?php include_once __DIR__.'/php/page-footer.php' ?>
	<?php include_once __DIR__.'/php/scripts-include.php' ?>
	</body>
</html>