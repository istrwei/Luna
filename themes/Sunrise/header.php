<?php
require ('header.php');

$body_classes = check_style_mode();
?>
<!DOCTYPE html>
<html class="<?php echo $body_classes ?>">
	<head>
		<?php load_meta(); ?>
		<link rel="stylesheet" href="include/css/bootstrap.min.css">
		<link rel="stylesheet" href="include/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="include/css/prism.css" />
		<?php load_css(); ?>
		<script src="include/js/vendor/jquery.js"></script>
		<script src="include/js/vendor/bootstrap.min.js"></script>
		<script src="include/js/vendor/prism.js"></script>
		<style>
		.emoji {
			font-size: <?php echo $luna_config['o_emoji_size'] ?>px;
		}
		body.js .hide-if-js, body.no-js .hide-if-no-js {
			display: none !important;
		}
		</style>
	</head>
	<body class="no-js">
		<script type="text/javascript">document.body.className = document.body.className.replace( 'no-js', 'js' );</script>
		<?php if ($luna_user['is_guest']): require load_page('login.php'); endif; ?>
		<div id="header">
			<div class="navbar navbar-default navbar-transparent navbar-static-top">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-primary-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="index.php"><?php echo $menu_title ?></a>
					</div>
					<div class="navbar-primary-collapse navbar-collapse collapse">
						<ul class="nav navbar-nav"><?php echo implode("\n\t\t\t\t", $links); ?></ul>
						<?php if ($luna_config['o_header_search'] && $luna_user['g_search'] == '1'): ?>
						<form id="search" class="navbar-form navbar-left hidden-xs" method="get" action="search.php?section=simple">
							<fieldset>
								<input type="hidden" name="action" value="search" />
								<div class="form-group">
									<div class="input-group">
										<input class="form-control" type="text" name="keywords" placeholder="<?php _e('Search in comments', 'luna') ?>" maxlength="100" />
										<span class="input-group-btn">
											<button class="btn btn-default btn-search" type="submit" name="search" accesskey="s">
												<span class="fa fa-fw fa-search"></span>
											</button>
										</span>
									</div>
								</div>
							</fieldset>
						</form>
						<?php endif; ?>
						<?php draw_user_nav_menu(); ?>
					</div>
				</div>
			</div>
			<div class="container board-head">
				<span class="hidden-xs">
					<h1><?php echo $menu_title ?></h1>
				</span>
				<p class="board-desc"><?php echo $luna_config['o_board_desc']; ?></p>
				<?php echo $tpl_temp ?>
<?php
	// Announcement
	if ($luna_config['o_announcement'] == '1') {
?>
<div class="alert alert-<?php echo $luna_config['o_announcement_type']; ?> announcement">
	<?php if (!empty($luna_config['o_announcement_title'])) { ?><h4><?php echo $luna_config['o_announcement_title']; ?></h4><?php } ?>
	<?php echo $luna_config['o_announcement_message']; ?>
</div>
<?php
}
?>
			</div>
		</div>
		<div class="container" id="main">
