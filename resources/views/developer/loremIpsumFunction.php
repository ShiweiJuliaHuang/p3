<html>
	<head>
	</head>
	<body>

	<?php

	$generator = new Badcow\LoremIpsum\Generator();
	$paragraphs = $generator->getParagraphs(5);
	echo implode('<p>', $paragraphs);

	?>

	</body>
</html>
