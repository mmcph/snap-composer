<?php
// Initialize your autoloader (this example is using composer)
require 'vendor/autoload.php';

// Instantiate the Highlighter.
$hl = new Highlight\Highlighter();

// Set the languages you want to detect automatically.
$hl->setAutodetectLanguages(array('php'));

// Highlight some code.
$r = $hl->highlightAuto(file_get_contents('test-function.php'));

// Output the code using the default stylesheet:
?>

<html>
	<head>
		<!-- Link to the stylesheets: -->
		<link rel="stylesheet" type="text/css" href="styles/default.css">
	</head>
	<body>
		<!-- Print the highlighted code: -->
		<pre class="hljs <?= $r->language ?>">
      <?= $r->value ?>
    </pre>
	</body>
</html>

