<html>
<head>
	<title>PHP Snippets - Array recursion to build a tree structure</title>

	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
</head>
<body>
	<h3>Array recursion to build a tree structure</h3>

	<?php 
		require 'functions/tree.php';

		$tree = array(
			'core' => array(
				'init.php'
			),
			'classes' => array(
				'User.php',
				'Session.php',
				'Item.php'
			),
			'functions' => array(
				'security.php',
				'controller.php'
			),
			'template' => array(
				'index.template.php',
				'includes' => array(
					'header.template.php',
					'footer.template.php',
					'positions.template.php' => array(
						'top',
						'right',
						'bottom',
						'left'
					)
				)
			),
			'index.php',
			'login.php',
			'register.php'
		);

		echo treeOut($tree);

	?>

</body>
</html>





<style type="text/css">
	h3 {
		text-decoration: underline;
	}

	.dir {
		list-style: none;
	}

	.dir li.folder {
		font-weight: bold;
		color: #996BB4;
		cursor: pointer;
	}

	.file {
		font-weight: normal;
		color: #333;
	}
</style>