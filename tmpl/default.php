<?php
/**
 * @author		Pedro Augusto Mendes e Silva		
 * @copyright	Copyright (C) 2013 Web Feroz.
 */
defined('_JEXEC') or die;
?>
<ul class="mostread<?php echo $moduleclass_sfx; ?>">
<?php foreach ($list as $key => $item) : ?>
	<li>
		<a class="article-popular<?php echo $key ?>" href="<?php echo $item->link; ?>">
			<?php echo $item->title; ?>
			<span class="count" ><?php echo $item->hits; ?></span>
		</a>
	</li>
<?php endforeach; ?>
</ul>