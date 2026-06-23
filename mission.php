<?php include_once __DIR__.'/../project/frontInclude.php'; 

use XCOMDatabank\Front\MissionPage;
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

<?php
	if(isset($_GET['id'])) {
		$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
		if(is_numeric($id) and is_integer((int) $id)) {
			$getEpisode = new MissionPage('id', intval($id), null);
            $getEpisode->getEpisode();
		}
	}
	elseif(isset($_GET['name'])) {
		$name = $_GET['name'];
        $getEpisode = new MissionPage('name', null, $name);
		$getEpisode->getEpisode();
	}
	else { ?>
		<h2>So Commander, what exactly DID you do to humanity when ADVENT captured you?</h2>
		<p>There was an error attempting to retrieve that mission. </p>
		<?php
	}
?>
			</div>
		</div>
	<?php include_once __DIR__.'/php/page-footer.php' ?>
	<?php include_once __DIR__.'/php/scripts-include.php' ?>
	</body>
</html>