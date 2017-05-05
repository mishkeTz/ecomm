<div id="main">
	<?php foreach($data['mainCategories'] as $mainCategory) : ?>
		<div id="<?php echo strtolower($mainCategory->mainCategory); ?>">
			<p><a href="<?php echo BASE_ROOT; ?>/show/category/<?php echo $mainCategory->mainId; ?>"><?php echo $mainCategory->mainCategory; ?></a></p>
		</div>
	<?php endforeach; ?>
</div>