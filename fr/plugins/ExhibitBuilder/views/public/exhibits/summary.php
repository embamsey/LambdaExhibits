<?php head(array('title' => html_escape('Summary of ' . exhibit('title')),'bodyid'=>'exhibit','bodyclass'=>'summary')); ?>
<div id="summaryprimary">
<h1 style="font-size:2em"><?php echo html_escape(exhibit('title')); ?></h1>

<div id="exhibit-sections">	
	<?php set_exhibit_sections_for_loop_by_exhibit(get_current_exhibit()); ?>
	<h2><?php echo __('Sections'); ?></h2>
	<?php while(loop_exhibit_sections()): ?>
	<?php if (exhibit_builder_section_has_pages()): ?>
    <h3><a href="<?php echo exhibit_builder_exhibit_uri(get_current_exhibit(), get_current_exhibit_section()); ?>"><?php echo html_escape(exhibit_section('title')); ?></a></h3>
	<?php $section = exhibit_section('title'); ?>
	<?php img($file, $dir = 'images'); ?>
	<img src="<?php echo img($section . '-coverpage.jpeg'); ?>" width="125" height="175"/>
	<?php endif; ?>
	<?php endwhile; ?>
</div>
</div>
<div id="summarysecondary">
<h2><?php echo __('Description'); ?></h2>
<p style="font-size:1.5em;"><?php echo exhibit('description'); ?></p>
</div>

<?php foot(); ?>
