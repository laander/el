<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?> - RF El
	</title>
	<?php

		echo $this->Html->meta('icon');
		//echo $this->Html->css('cake.generic');

    echo $this->Html->css('style.css');
    echo $this->Html->css('datePicker.css');

	?>
</head>
<body>
	
	<div id="container">
		<div id="header">
			<div class="inside">
				<h1 style="float: left; margin-top: 3px;">
					<?php echo $this->Html->image('logo.png', array('alt' => "Roskilde Festival - EL Booking", 'border' => "0", 'url' => "/"));?>
				</h1>
				<div id="user" style="float: right; margin-right: -5px;">
					<?php echo $this->element('usermeta'); ?>
				</div>
				<ul id="menu" style="float: right; clear: right;">
					<?php echo $this->element('menu'); ?>
				</ul>
			</div>
		</div>
		<div id="subheader">
			<div class="inside">
				<h2 style="float: left;">
					<?php echo $title_for_layout; ?>
				</h2>
				<div style="float: right">
					<?php 
					echo $this->Session->flash();
					if ($this->params['action'] == 'login' && $this->Session->flash('auth')) { 
						echo
							'<div id="flashMessage" class="notice" style="display: none; ">
							Log ind i systemet herunder for at få adgang til dine projekter.</div>';
					} else {
						echo $this->Session->flash('auth');
					}
					?>
				</div>
			</div>
		</div>
		<div id="content">
			<div class="inside">
				<?php echo $content_for_layout; ?>
			</div>
		</div>
		<div id="footer">
			<div class="inside">
				<div style="float: left;">
					<div id="footer_object" class="button_beta">Alpha v 2.0</div>
				</div>
				<div style="float: right;">
					<div id="footer_text">RFIT El-system 2011</div>
				</div>
			</div>
		</div>		
	</div>
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
	<?php
  	echo $this->Html->script('global.js');
  	echo $this->Html->script('date.js');
  	echo $this->Html->script('jquery.datePicker.js');
  	echo $this->Html->script('cake.datePicker.js');
		echo $scripts_for_layout; 
	?>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>