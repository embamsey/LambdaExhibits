<?php head(array('title' => item('Dublin Core', 'Title'), 'bodyid'=>'items','bodyclass' => 'show')); ?>

<div id="showItemsprimary">

    <!--<h1><?php echo item('Dublin Core', 'Title'); ?></h1>-->


    <div>
	<h3><?php echo ('Title'); ?></h3>
	<p><?php echo item('Dublin Core', 'Title'); ?></p>
    </div>

    <!-- The following returns all of the files associated with an item. -->
    <div id="itemfiles" class="element">
        <h3><?php echo __('Files'); ?></h3>
        <div class="element-text"><?php echo display_files_for_item(); ?>
	<p> <?php echo __("Cliquez pour voir l'image en complet"); ?></p>
</div>
    </div>

    <!-- If the item belongs to a collection, the following creates a link to that collection. -->
    <?php if (item_belongs_to_collection()): ?>
    <div id="collection" class="element">
        <h3><?php echo __('Collection'); ?></h3>
        <div class="element-text"><p><?php echo link_to_collection_for_item(); ?></p></div>
    </div>
    <?php endif; ?>

    <!-- The following prints a list of all tags associated with the item -->
    <!--<?php if (item_has_tags()): ?>
    <div id="item-tags" class="element">
        <h3><?php echo __('Tags'); ?></h3>
        <div class="element-text"><?php echo item_tags_as_string(); ?></div>
    </div>
    <?php endif;?>

    <!-- The following prints a citation for this item. -->
    <div id="item-citation" class="element">
        <h3><?php echo __('Citation'); ?></h3>
        <div class="element-text"><?php echo item_citation(); ?></div>
    </div>

    <?php echo plugin_append_to_items_show(); ?>
	<p><?php echo ("");?></p>
    <ul class="item-pagination navigation">
        <li style="font-size:1.5em" id="previous-item" class="previous"><?php echo link_to_previous_item(); ?></li>
        <li style="font-size:1.5em" id="next-item" class="next"><?php echo link_to_next_item(); ?></li>
    </ul>

</div><!-- end primary -->

<?php foot(); ?>
