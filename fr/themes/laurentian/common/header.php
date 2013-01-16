<!DOCTYPE html>
<html lang="<?php echo get_html_lang(); ?>" class="<?php echo get_theme_option('Style Sheet'); ?>">
<head>
    <meta charset="utf-8">
    <?php if ( $description = settings('description')): ?>
    <meta name="description" content="<?php echo $description; ?>" />
    <?php endif; ?>

    <title><?php echo settings('site_title'); echo isset($title) ? ' | ' . strip_formatting($title) : ''; ?></title>

    <?php echo auto_discovery_link_tags(); ?>

    <!-- Plugin Stuff -->
    <?php plugin_header(); ?>

    <!-- Stylesheets -->
    <?php
    queue_css('style');
    display_css();
    ?>

    <!-- JavaScripts -->
    <?php display_js(); ?>
</head>

<?php echo body_tag(array('id' => @$bodyid, 'class' => @$bodyclass)); ?>
    <?php plugin_body(); ?>
    <div id="wrap">

        <div id="header">
            <?php plugin_page_header(); ?>
		
		<div id="header-top">
	 
			<div style="text-align:center" id="site-title"><?php echo link_to_home_page(custom_display_logo()); ?>
			</div><!-- end #site-title -->
		</div>
        
		<div id="header-bottomleft">
	    
       	    		<li class="navigation">
            		<?php echo nav(array(__('Home') => uri(''), __('Browse Items') => uri('items'), __('Browse Collections') => uri('collections'))); ?>
			<?php $current = str_replace("omekaFR","omeka",LU_curPageURL()); ?>
			<a href="<?php echo html_escape($current); ?>">English</a>
            		</li>
        
		</div><!-- end header-bottomleft -->
		<div id="header-bottomright">
	    		<div id="searchwarp">
                		<?php echo simple_search(); ?>
                		<?php echo link_to_advanced_search(); ?>
            		</div><!-- end searchwrap -->
		</div><!-- end #header-bottomright -->    
	</div><!-- end header -->    
        
	<div id="content">
		
		<?php plugin_page_content(); ?> 

