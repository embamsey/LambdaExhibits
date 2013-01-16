<?php
$title = __('Browse Exhibits');
head(array('title'=>$title, 'bodyid' => 'exhibit', 'bodyclass'=>'browse'));
?>
<div id="primary">

	<?php if (count($exhibits) > 0): ?> 
    <div class="pagination"><?php echo pagination_links(); ?></div>
	
    <div id="exhibits">	
    
    
    <?php $exhibitCount = 0; ?>
    <?php while(loop_exhibits()): ?>
    	<?php $exhibitCount++; ?>
    	<div class="exhibit <?php if ($exhibitCount%2==1) echo ' even'; else echo ' odd'; ?>">
    		<h2><?php echo link_to_exhibit(); ?></h2>
    		
		<?php $exhibit = exhibit('title'); ?>
		<?php img($file, $dir = 'images'); ?>
		<img src="<?php echo img($exhibit . '-view.jpeg'); ?>" width="125" height="175"/>
		
    		<p class="tags"><?php echo tag_string(get_current_exhibit(), uri('exhibits/browse/tag/')); ?></p>
    	</div>
    <?php endwhile; ?>
    </div>
    
    <div class="pagination"><?php echo pagination_links(); ?></div>

    <?php else: ?>
	<p><?php echo __('There are no exhibits available yet.'); ?></p>
	<?php endif; ?>
</div>

<div id="secondary">
	
    <?php if (get_theme_option('Homepage Text')): ?>
    <p><?php echo get_theme_option('Homepage Text'); ?></p>
    <?php endif; ?>

</div><!-- end secondary -->
<?php foot(); ?>
