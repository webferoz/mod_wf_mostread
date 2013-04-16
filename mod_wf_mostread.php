<?php
/**
 * @author		Pedro Augusto Mendes e Silva
 * @copyright	Copyright (C) 2013 Web Feroz.
 */

// adiciona o css do módulo
$document = JFactory::getDocument();
$css = $params->get('style_css');
$document->addStyleSheet('modules/mod_wf_mostread/css/wf_mostread_'.$css.'.css');

defined('_JEXEC') or die;

// inclui funções auxiliares uma única x
require_once __DIR__ . '/helper.php';

$list = modWFMostReadHelper::getList($params);
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

require JModuleHelper::getLayoutPath('mod_wf_mostread', $params->get('layout', 'default'));
