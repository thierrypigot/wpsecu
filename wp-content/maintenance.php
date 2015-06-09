<?php
$admin_email	= null;
$admin_tel		= null;

/* Tell search engines that the site is temporarily unavailable */
$protocol = $_SERVER["SERVER_PROTOCOL"];
if ( 'HTTP/1.1' != $protocol && 'HTTP/1.0' != $protocol ) $protocol = 'HTTP/1.0';
header( "$protocol 503 Service Unavailable", true, 503 );
header( 'Content-Type: text/html; charset=utf-8' );
header( 'Retry-After: 600' );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Désolé ! Nous faisons une maintenance de routine.</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
	<script type="text/javascript" src="http://cdn.thierry-pigot.fr/js/jquery.cycle.lite.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#fade').cycle({
				fx:			'fade',
				speed:		3000,
				timeout:	8000
			});
		});
	</script>
	<style type="text/css">	
		html body,
		html {
			background:#92B7DE url('http://cdn.thierry-pigot.fr/images/maintenance/bg.png') repeat-y center top;
		}
		#content-outer {
			position: absolute;
			top: 50%;
			left: 0px;
			width: 100%;
			height: 1px;
			overflow: visible;
		}
		.coffee_machine {
			width:256px;
			height:256px;
			display:block;
			position:relative;
			left:450px;
			top:-50px;
			z-index:5;
		}
		#content {
			color:#605850;
			font:14px/1.6em "Lucida Grand", "Lucida Sans", "Lucida Sans Unicode", Arial;
			width:420px;
			height:auto;
			margin-left:-322px;
			position:absolute;
			left:50%;
			top:-150px;
			-moz-border-radius:11px;
			-khtml-border-radius:11px;
			-webkit-border-radius:11px;
			border-radius:11px;
			background:#fff;
			padding:25px 200px 10px 25px;
			-webkit-box-shadow: 0px 0px 9px rgba(50, 50, 50, 1);
			-moz-box-shadow:    0px 0px 9px rgba(50, 50, 50, 1);
			box-shadow:         0px 0px 9px rgba(50, 50, 50, 1);
		}
		#content h1 {
			line-height:1.2em;
			margin-top:-257px;
			color:#4792CF;
		}
		#content p {
			margin:0 0 1.2em;
		}
		h1,h2,h3 {
			font-family:Calibri, "Franklin Gothic", Arial;
			color:#4792CF;
		}
		h1 { margin: 0 0 .6em;  }
		h2 { margin: 1.07em 0 .535em; }
		h3 { margin: 1.14em 0 .57em; }
		h4 { margin: 1.23em 0 .615em; }
		h5 { margin: 1.33em 0 .67em; }
		h6 { margin: 1.6em 0 .8em; }
		span {
			color:#4792CF;
			font-weight:bold;
		}
		strong {
			color:#111;
		}
		a:link,
		a:visited {
			color:#4792CF;
			text-decoration:none;
			font-weight:bold;
		}
		a:hover,
		a:active {
			color:#56A5EC;
		}
	</style>
</head>
<body>
	<div id="content-outer">
		<div id="content">
			<img src="http://cdn.thierry-pigot.fr/images/maintenance/coffee_machine.png" class="coffee_machine" />
			<div id="fade">
				<div>
					<h1>Nous sommes en pause café !</h1>
					<p>Notre site fait l'objet d'une brève opération de maintenance qui va durer <span>5 minutes tout au plus</span>.</p>
					<p>Nous nous excusons pour la gêne occasionnée, nous faisons notre possible pour remettre les choses en état de marche pour vous.</p>
					<p><strong>Thierry Pigot - <a href="http://www.thierry-pigot.fr" target="_blank">Expert WordPress / Sécurité</a></strong></p>
					<?php if( $admin_email ): ?>
						<p><strong>Pour nous contacter : <a><a href="mailto:<?php echo $admin_email; ?>"><?php echo $admin_email; ?></a></strong></p>
					<?php endif; ?>
					<?php if( $admin_tel ): ?>
						<p>Tél : <?php echo $admin_tel; ?></p>
					<?php endif; ?>
				</div>
				<div>
					<h1>We're on a quick coffee break!</h1>
					<p>Our site is undergoing a brief bit of maintenance that will last <span>5 minutes at the very most</span>.</p>
					<p>We apologize for the inconvenience, we're doing out best to get things back to working order for you.</p>
					<p><strong>Thierry Pigot - <a href="http://www.thierry-pigot.fr" target="_blank">WordPress Expert / Security</a></strong></p>
					<?php if( $admin_email ): ?>
						<p><strong>Contact us: <a><a href="mailto:<?php echo $admin_email; ?>"><?php echo $admin_email; ?></a></strong></p>
					<?php endif; ?>
					<?php if( $admin_tel ): ?>
						<p>Phone: <?php echo $admin_tel; ?></p>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
<?php
/* This passes control back to the wordpress upgrade routine */
die();
/* Don't change this */
?>