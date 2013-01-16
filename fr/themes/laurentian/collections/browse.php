<?php
$pageTitle = __('Browse Collections');
head(array('title'=>$pageTitle,'bodyid'=>'collections','bodyclass' => 'browse'));
?>
<div id="browseCollectionsprimary">
    <h1 style="font-size:30px; text-align:center;"><?php echo $pageTitle; ?></h1>
    <div class="pagination"><?php echo pagination_links(); ?></div>

    <?php while (loop_collections()): ?>
    <div class="collection">

        <h2><?php echo link_to_collection(); ?></h2>

        <div class="element">
            <h3><?php echo __('Description'); ?></h3>
            <p style="font-size:15px"><?php echo collection('Description'); ?></p>
        </div>

        <?php if(collection_has_collectors()): ?>
        <div class="element">
            <h3><?php echo __('Collector(s)'); ?></h3>
            <div class="element-text">
                <p><?php echo collection('Collectors', array('delimiter'=>', ')); ?></p>
            </div>
        </div>
        <?php endif; ?>

        <p style="padding-left:20px" class="view-items-link"><?php echo link_to_browse_items(__('View the items in %s', collection('Name')), array('collection' => collection('id'))); ?></p>

        <?php echo plugin_append_to_collections_browse_each(); ?>

    </div><!-- end class="collection" -->
    <?php endwhile; ?>

    <?php echo plugin_append_to_collections_browse(); ?>

</div><!-- end primary -->

<div id="browseCollectionsSecondary">
	<h2><?php echo __('Note:'); ?></h2>
	<p><?php echo __("Les collections sont un moyen rapide pour obtenir un aperçu des éléments dans chaque pièce. Il n'y a pas grand détail fourni ici. Les détails de chaque élément se trouve dans l'exposition. Toutefois, les citations pour chaque élément se trouve ici ou en parcourant les articles."); ?></p>

</div><!-- end secondary -->

<?php foot(); ?>
