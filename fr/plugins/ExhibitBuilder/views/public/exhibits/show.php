<?php head(array('title' => html_escape(exhibit('title') . ' : '. exhibit_page('title')), 'bodyid'=>'exhibit','bodyclass'=>'show')); ?>
<div id="showprimary">
    <div id="page-nav">
	<ul><?php echo exhibit_builder_page_nav(); echo link_to_exhibit();?></ul>
    </div>
 
	<!--<h1 style="font-size:1em;"></h1>
    
    <!--<div id="nav-container">
    	<?php echo exhibit_builder_section_nav();?>
    </div> -->
	
  
	<h2 style="text-align:center;font-size:3em;"><?php echo exhibit_page('title'); ?></h2>
	
	<?php exhibit_builder_render_exhibit_page(); ?>
	
	<div id="exhibit-page-navigation-next">
    		<?php echo exhibit_builder_link_to_next_exhibit_page(); ?>
	</div>

	<div id="exhibit-page-navigation-previous">
	   	<?php echo exhibit_builder_link_to_previous_exhibit_page(); ?>
    	</div>
</div>	
<?php foot(); ?>
