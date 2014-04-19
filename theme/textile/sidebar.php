<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); } ?>

<aside id="sidebar">

<?php $children = getChildren(get_page_slug(false));
    if (count($children) > 0): ?>
	    <div class="section">
		    <h2><?php echo get_page_title(); ?></h2>
            <ul>
		    <?php $pagesSorted = subval_sort($children,'pubdate');
                foreach ($children as $subpage):
                    $title = returnPageField($subpage,'menu');
                    $url = returnPageField($subpage,'slug'); ?>
                    <li><a href="/<?php echo $url; ?>"><?php echo $title; ?></a></li>
		        <?php endforeach; ?>
            </ul>
	     </div>
    <?php endif; ?>
	
	<div class="section">
        <h2>Наши партнёры</h2>
        <ul>
            <li><a href="http://zerecom.kz" target="_blank" />
                <b>Компания &laquo;Зере&raquo;</b> &mdash; Строительство модульных зданий, блок-контейнеров</a></li>
        <ul>
	</div>
</aside>
