<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>CalmVoyce Projects</title>
	<style>
		.projects {
			width: 100%;
			text-align: center;
		}
	</style>
</head>
<body>

<div class="projects">
<h1>Projects</h1>
<?php
/**
 * A convinient way to acess all the  projects installed
 * in the projects folder.
 *
 * @package escale
 */

foreach ( glob( dirname( __DIR__ ) . '/projects/*/.config/', GLOB_ONLYDIR ) as $config ) {
	$project = json_decode( file_get_contents( $config . 'project.json' ), true );

	echo '<h2>' . $project['project_name'] . '</h2>'; // phpcs:ignore
	echo '<p>';
	echo '<a target="_blank" href="' . $project['local'] . '"> Local Environment </a> | '; // phpcs:ignore
	echo '<a target="_blank" href="' . $project['development'] . '"> Development Environment </a> | '; // phpcs:ignore
	echo '<a target="_blank" href="' . $project['staging'] . '"> Staging Environment </a> | '; // phpcs:ignore
	echo '<a target="_blank" href="' . $project['production'] . '"> Production Environment </a>'; // phpcs:ignore
	echo '</p>';
}

?>
</div>
</body>
</html>
