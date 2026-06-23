<?php
include_once __DIR__.'/../project/frontInclude.php';

use XCOMDatabank\Front\SoldierPage;
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
            $soldierPage = New SoldierPage("id", $id, null);
            $soldierPage->getSoldierPage();
		}
	}
	elseif(isset($_GET['name'])) {
		$name = $_GET['name'];
        $soldierPage = New SoldierPage("name", null, $name);
        $soldierPage->getSoldierPage();
	}
	else { ?>
		<h2>So Commander, what exactly DID you do to humanity after ADVENT captured you?</h2>
		<p>There was an error attempting to retrieve soldier data.</p>
		<?php
	}
?>
			</div>
		</div>
	<?php include_once __DIR__.'/php/page-footer.php' ?>
	<?php include_once __DIR__.'/php/scripts-include.php' ?>
	</body>
</html>