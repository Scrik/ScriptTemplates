<?php
if(!defined('VOXILE_SETTINGS_INCLUSION_CHECK'))
{
	die("Access denied!");
}

/* ========== ========== ========== ========== ========== ========== ==========
 * Начало настраиваемой секции
 * ========== ========== ========== ========== ========== ========== ==========
 */
$voxileConfig = array(
	// Пятисимвольный код проекта
	'projectCode' => '<Project code>',
	// Ключевое слово (или фраза) вашего проекта
	'secretKeyword' => '<Some password>',

	// Путь к каталогу установленного XenForo
	'xenForoPath' => dirname(__FILE__) . "/../../voxile.ru/forum/",
);
/* ========== ========== ========== ========== ========== ========== ==========
 * Конец настраиваемой секции
 * ========== ========== ========== ========== ========== ========== ==========
 */