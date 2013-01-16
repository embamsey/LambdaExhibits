        </div><!-- end content -->

        <div id="footer">
		<div id="footertop">
			<?php img($file, $dir = 'images'); ?>
			<img src="<?php echo img('LULOGO.JPG'); ?>" width="950" height="150" />
		</div><!-- end footertop -->
	    
	    	<div id="footer-bottomleft">
                	<?php if ((get_theme_option('Display Footer Copyright') == 1) && $copyright = settings('copyright')): ?>
                    		<p><?php echo $copyright; ?></p>
                	<?php endif; ?>
                	<?php echo __('Propulsé par: <a href="http://omeka.org">Omeka</a>'); ?>
            	</div><!-- end footer-bottomleft -->

		<div id="footer-bottomright">
			<?php echo __('Créé par: Miia Piironen et Emily Bamsey'); ?>
		</div><!-- end footer-bottomright -->
		
            <?php plugin_footer(); ?>

        </div><!-- end footer -->
    </div><!-- end wrap -->
</body>
</html>
