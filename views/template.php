<html>
<head>
	<meta charset="UTF-8">
	<title>Painel - <?php echo $viewData['company_name']; ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>/assets/css/template.css"/>
	<script type="text/javascript" src="<?php echo BASE_URL; ?>/assets/js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL; ?>/assets/js/script.js"></script>
</head>
<body>
	<div class="leftmenu">
		<div class="company_name">
			<?php echo $viewData['company_name']; ?>
		</div><!--company_name-->

		<div class="menuarea">
			<ul>
				<li><a href="<?php echo BASE_URL; ?>">Home</a></li>
				<li><a href="<?php echo BASE_URL; ?>/permissions">Permissões</a></li>
			</ul>
		</div><!--menuarea-->
	</div><!--leftmenu-->


	<div class="container">
		<div class="top">
			<div class="top_right"><a href="<?php echo BASE_URL.'/login/logout'; ?>">Sair</a></div>
			<div class="top_right"><?php echo $viewData['user_email']; ?></div>
		</div><!--top-->  

		<div class="area">
			<?php $this->loadViewInTemplate($viewName, $viewData); ?>
		</div><!--area-->		
	</div><!--container-->

	</body>
	</html>

	continua 10
