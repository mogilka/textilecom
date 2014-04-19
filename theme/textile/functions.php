<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 			functions.php
* @Package:		GetSimple
* @Action:		Innovation theme for GetSimple CMS
*
*****************************************************/

/**
 * Innovation Parent Link
 *
 * This creates a link for a parent for the breadcrumb feature of this theme
 *
 * @param string $name - This is the slug of the link you want to create
 * @return string
 */
function Innovation_Parent_Link($name) {
	$file = GSDATAPAGESPATH . $name .'.xml';
	if (file_exists($file)) {
		$p = getXML($file);
		$title = $p->title;
		$parent = $p->parent;
		$slug = $p->slug;
		echo '<a href="'. find_url($name,'') .'">'. $title .'</a> &nbsp;&nbsp;&#149;&nbsp;&nbsp; ';
	}
}

/**
 * Innovation Settings
 *
 * This defines variables based on the theme plugin's settings
 *
 * @return bool
 */
function Innovation_Settings() {
	$file = GSDATAOTHERPATH . 'InnovationSettings.xml';
	if (file_exists($file)) {
		$p = getXML($file);
		if ($p->facebook != '' ) define('FACEBOOK', $p->facebook);
		if ($p->twitter != '' ) define('TWITTER', $p->twitter);
		if ($p->linkedin != '' ) define('LINKEDIN', $p->linkedin);
		if ($p->webfont != '' ) define('WEBFONT', $p->webfont);
		return true;
	} else {
		return false;
	}
}

/**
 * Определение заголовка галереи по имени
 * @param string $gcode ключевое слово галереи
 * @todo надо через API узнавать, тогда для старых и новых галерей всё будет автоматом
 */ 
function getGalleryTitle($gcode) {
    switch ($gcode) {
    case 'blanket':
        return 'Одеяла';
    case 'carpet':
        return 'Курак-корпе';
    case 'cover':
        return 'Чехлы для мягкой мебели';
    case 'curtain':
        return 'Шторы, гардины, ламбрекены';
    case 'pillow':
        return 'Пэчворк';
    case 'fabric':
        return 'Ткани';
    default:
        return 'Галерея';
    }

}

/**
 * 
 */
function getSubMenu($page){
     $children=getChildren($page);
     $pagesSorted = subval_sort($children,'pubdate'); // select which field to sort on. 
     foreach ($pagesSorted as $subpage){
         $title=returnPageField($subpage,'menu');
         $url=returnPageField($subpage,'slug');
         echo '<li><a href="index.php?id='.$url.'">'.$title.'</a></li>';
         // or use below if you have fancy urls on
          //echo '<li><a href="/'.$url.'">'.$title.'</a></li>';
     }    
 }
