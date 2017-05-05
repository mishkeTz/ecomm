<div id="sticky-main">
	<?php foreach($data['mainCategories'] as $mainCategory) : ?>
		<div class="sticky-category">
			<p><a href="<?php echo BASE_ROOT ?>/show/category/<?php echo $mainCategory->mainId ?>"><?php echo $mainCategory->mainCategory; ?></a></p>
		</div>
	<?php endforeach; ?>
</div>

<div id="categories">
	<?php foreach($data['categories'] as $category) : ?>
		<div class="subcategory">
			<p><a href="<?php echo BASE_ROOT; ?>/show/items/<?php echo strtolower($category->categoryId); ?>"><?php echo $category->categoryName; ?></a></p>
		</div>
	<?php endforeach; ?>
</div>