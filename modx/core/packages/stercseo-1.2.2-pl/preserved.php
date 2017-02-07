<?php return array (
  'f0b8d40b7c151516e1ddb3245d62f5fd' => 
  array (
    'criteria' => 
    array (
      'name' => 'stercseo',
    ),
    'object' => 
    array (
      'name' => 'stercseo',
      'path' => '{core_path}components/stercseo/',
      'assets_path' => '',
    ),
  ),
  '877850344da7f354badbbd2d552847ca' => 
  array (
    'criteria' => 
    array (
      'category' => 'StercSEO',
    ),
    'object' => 
    array (
      'id' => 1,
      'parent' => 0,
      'category' => 'StercSEO',
      'rank' => 0,
    ),
  ),
  '6f706509fee5c117f8197c0901281ab8' => 
  array (
    'criteria' => 
    array (
      'name' => 'StercSeoSiteMap',
    ),
    'object' => 
    array (
      'id' => 1,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'StercSeoSiteMap',
      'description' => 'Outputs the sitemap based on the page settings made in SEO-tab',
      'editor_type' => 0,
      'category' => 1,
      'cache_type' => 0,
      'snippet' => 'require_once $modx->getOption(\'stercseo.core_path\',null,$modx->getOption(\'core_path\').\'components/stercseo/\').\'model/stercseo/stercseo.class.php\';
$stercseo = new StercSeo($modx,$scriptProperties);
$allowSymlinks = (isset($allowSymlinks)) ? $allowSymlinks : 0;
$contexts = (isset($contexts)) ? explode(\',\',str_replace(\' \',\'\',$contexts)) : array($modx->resource->get(\'context_key\'));
return $stercseo->sitemap($contexts, \'sitemap/rowTpl\', \'sitemap/outerTpl\', $allowSymlinks);',
      'locked' => 0,
      'properties' => NULL,
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => 'require_once $modx->getOption(\'stercseo.core_path\',null,$modx->getOption(\'core_path\').\'components/stercseo/\').\'model/stercseo/stercseo.class.php\';
$stercseo = new StercSeo($modx,$scriptProperties);
$allowSymlinks = (isset($allowSymlinks)) ? $allowSymlinks : 0;
$contexts = (isset($contexts)) ? explode(\',\',str_replace(\' \',\'\',$contexts)) : array($modx->resource->get(\'context_key\'));
return $stercseo->sitemap($contexts, \'sitemap/rowTpl\', \'sitemap/outerTpl\', $allowSymlinks);',
    ),
  ),
  '92753ca83049c94032b30a5ad322b36e' => 
  array (
    'criteria' => 
    array (
      'name' => 'StercSEO',
    ),
    'object' => 
    array (
      'id' => 2,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'StercSEO',
      'description' => 'Plugin to render the seo tab and save all the data',
      'editor_type' => 0,
      'category' => 0,
      'cache_type' => 0,
      'plugincode' => '/**
 * StercSEO
 *
 * Copyright 2013 by Wieger Sloot, Sterc internet & marketing <modx@sterc.nl>
 *
 * This file is part of StercSEO.
 *
 * StercSEO is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * StercSEO is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * StercSEO; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package stercseo
 */
/**
 * StercSEO Plugin
 *
 *
 * Events:
 * OnDocFormPrerender,OnDocFormSave,OnHandleRequest,OnPageNotFound
 *
 * @author Wieger Sloot, Sterc internet & marketing <modx@sterc.nl>
 *
 * @package stercseo
 *
 */
$stercseo = $modx->getService(\'stercseo\',\'StercSEO\',$modx->getOption(\'stercseo.core_path\',null,$modx->getOption(\'core_path\').\'components/stercseo/\').\'model/stercseo/\',array());

if (!($stercseo instanceof StercSEO)) return;

switch ($modx->event->name) {
	case \'OnDocFormPrerender\':
		$resource =& $modx->event->params[\'resource\'];
		if($resource){
			//First check if SEOTab is allowed in this context
			if(!$stercseo->isAllowed($resource->get(\'context_key\'))) return;
			$properties = $resource->getProperties(\'stercseo\');
		}
		if(empty($properties)){
			$properties = array(
				\'index\' => $modx->getOption(\'stercseo.index\', null, \'1\'),
				\'follow\' => $modx->getOption(\'stercseo.follow\', null, \'1\'),
				\'sitemap\' => $modx->getOption(\'stercseo.sitemap\', null, \'1\'),
				\'priority\' => $modx->getOption(\'stercseo.priority\', null, \'0.5\'),
				\'changefreq\' => $modx->getOption(\'stercseo.changefreq\', null, \'weekly\'),
				//\'urls\' => $modx->fromJSON($_POST[\'urls\'])
			);
		}
		//$output .= \'<div id="stercseo-box">\'.$errorMessage.$outputLanguageItems.\'</div>\';
		//$modx->event->output($output);
		$modx->regClientStartupHTMLBlock(\'<script type="text/javascript">
        Ext.onReady(function() {
            StercSEO.config = \'.$modx->toJSON($stercseo->config).\';
            StercSEO.config.connector_url = "\'.$stercseo->config[\'connectorUrl\'].\'";
            StercSEO.record = \'.$modx->toJSON($properties).\';
        });
        </script>\');
	    $version = $modx->getVersionData();

		/* include CSS and JS*/
		if($version[\'version\'] == 2 && $version[\'major_version\'] == 2){
	    	$modx->regClientCSS($stercseo->config[\'cssUrl\'].\'stercseo.css\');
	    }
		$modx->regClientStartupScript($stercseo->config[\'jsUrl\'].\'mgr/stercseo.js\');
		$modx->regClientStartupScript($stercseo->config[\'jsUrl\'].\'mgr/sections/resource.js\');
		$modx->regClientStartupScript($stercseo->config[\'jsUrl\'].\'mgr/widgets/resource.grid.js\');
		$modx->regClientStartupScript($stercseo->config[\'jsUrl\'].\'mgr/widgets/resource.vtabs.js\');

		//add lexicon
		$modx->controller->addLexiconTopic(\'stercseo:default\');

		break;

	case \'OnBeforeDocFormSave\':
	        $oldResource = ($mode == \'upd\') ? $modx->getObject(\'modResource\',$resource->get(\'id\')) : $resource;
			if(!$stercseo->isAllowed($oldResource->get(\'context_key\'))) return;
			$properties = $oldResource->getProperties(\'stercseo\');
			if($_POST[\'urls\'] != \'false\' && isset($_POST[\'urls\'])){
				if($mode == \'upd\'){
					$newProperties = array(
						\'index\' => (isset($_POST[\'index\']) ? $_POST[\'index\'] : $properties[\'index\']),
						\'follow\' => (isset($_POST[\'follow\']) ? $_POST[\'follow\'] : $properties[\'follow\']),
						\'sitemap\' => (isset($_POST[\'sitemap\']) ? $_POST[\'sitemap\'] : $properties[\'sitemap\']),
						\'priority\' => (isset($_POST[\'priority\']) ? $_POST[\'priority\'] : $properties[\'priority\']),
						\'changefreq\' => (isset($_POST[\'changefreq\']) ? $_POST[\'changefreq\'] : $properties[\'changefreq\']),
						\'urls\' => $modx->fromJSON($_POST[\'urls\'])
					);
				}else{
					$newProperties = array(
						\'index\' => (isset($_POST[\'index\']) ? $_POST[\'index\'] : $modx->getOption(\'stercseo.index\', null, \'1\')),
						\'follow\' => (isset($_POST[\'follow\']) ? $_POST[\'follow\'] : $modx->getOption(\'stercseo.follow\', null, \'1\')),
						\'sitemap\' => (isset($_POST[\'sitemap\']) ? $_POST[\'sitemap\'] : $modx->getOption(\'stercseo.sitemap\', null, \'1\')),
						\'priority\' => (isset($_POST[\'priority\']) ? $_POST[\'priority\'] : $modx->getOption(\'stercseo.priority\', null, \'0.5\')),
						\'changefreq\' => (isset($_POST[\'changefreq\']) ? $_POST[\'changefreq\'] : $modx->getOption(\'stercseo.changefreq\', null, \'weekly\')),
						\'urls\' => $modx->fromJSON($_POST[\'urls\'])
					);
				}
			}else{
			   	if($mode == \'upd\'){
					$newProperties = array(
						\'index\' => (isset($_POST[\'index\']) ? $_POST[\'index\'] : $properties[\'index\']),
						\'follow\' => (isset($_POST[\'follow\']) ? $_POST[\'follow\'] : $properties[\'follow\']),
						\'sitemap\' => (isset($_POST[\'sitemap\']) ? $_POST[\'sitemap\'] : $properties[\'sitemap\']),
						\'priority\' => (isset($_POST[\'priority\']) ? $_POST[\'priority\'] : $properties[\'priority\']),
						\'changefreq\' => (isset($_POST[\'changefreq\']) ? $_POST[\'changefreq\'] : $properties[\'changefreq\']),
						\'urls\' => $properties[\'urls\']
					);
				}else{
					$newProperties = array(
						\'index\' => (isset($_POST[\'index\']) ? $_POST[\'index\'] : $modx->getOption(\'stercseo.index\', null, \'1\')),
						\'follow\' => (isset($_POST[\'follow\']) ? $_POST[\'follow\'] : $modx->getOption(\'stercseo.follow\', null, \'1\')),
						\'sitemap\' => (isset($_POST[\'sitemap\']) ? $_POST[\'sitemap\'] : $modx->getOption(\'stercseo.sitemap\', null, \'1\')),
						\'priority\' => (isset($_POST[\'priority\']) ? $_POST[\'priority\'] : $modx->getOption(\'stercseo.priority\', null, \'0.5\')),
						\'changefreq\' => (isset($_POST[\'changefreq\']) ? $_POST[\'changefreq\'] : $modx->getOption(\'stercseo.changefreq\', null, \'weekly\')),
						\'urls\' => $properties[\'urls\']
					);
				}
			}
			if($oldResource->get(\'uri\') != $resource->get(\'uri\') && $oldResource->get(\'uri\') != \'\'){
//$modx->log(modX::LOG_LEVEL_ERROR, \'OLD: \'.$oldResource->get(\'uri\').\' - NEW: \'. $resource->get(\'uri\'));
				$newProperties[\'urls\'][] = array(\'url\' => $oldResource->get(\'uri\'));
			}

        	$resource->setProperties($newProperties,\'stercseo\');
		break;
	case \'OnLoadWebDocument\':
		if($modx->resource){
			if(!$stercseo->isAllowed($modx->resource->get(\'context_key\'))) return;
			$properties = $modx->resource->getProperties(\'stercseo\');
			$metaContent = array(\'noopd\', \'noydir\');
			if(!$properties[\'index\']) $metaContent[] = \'noindex\';
			if(!$properties[\'follow\']) $metaContent[] = \'nofollow\';
			$modx->setPlaceholder(\'seoTab.robotsTag\',implode(\',\', $metaContent));
		}
		break;

	case \'OnPageNotFound\':
		$url = $_REQUEST[$modx->getOption(\'request_param_alias\', null, \'q\')];
		$convertedUrl = str_replace(\'/\', \'_/\', ltrim($url, \'/\'));
		$w = array(
			\'properties:LIKE\' => \'%"\'.$convertedUrl.\'"%\'
		);
		if($modx->getOption(\'stercseo.context-aware-alias\', null, \'0\')){
			$w[\'context_key\'] = $modx->context->key;
		}
		$alreadyExists = $modx->getObject(\'modResource\', $w);
		if($alreadyExists){
			$id = $modx->makeUrl($alreadyExists->get(\'id\'));
			$modx->sendRedirect($id, 0, \'REDIRECT_HEADER\', \'HTTP/1.1 301 Moved Permanently\');
		}
		break;
	case \'OnResourceBeforeSort\':
		foreach($nodes as $node) {
			$oldResource = $modx->getObject(\'modResource\',$node[\'id\']);
			$resource 	 = $modx->getObject(\'modResource\',$node[\'id\']);
			$resource->set(\'parent\', $node[\'parent\']);

			if(!$stercseo->isAllowed($resource->get(\'context_key\'))) return;

			if($oldResource->get(\'uri\') != $resource->getAliasPath($resource->get(\'alias\')) && $oldResource->get(\'uri\') != \'\'){
				$newProperties = $oldResource->getProperties(\'stercseo\');
				$newProperties[\'urls\'][] = array(\'url\' => $oldResource->get(\'uri\'));
				$oldResource->setProperties($newProperties,\'stercseo\');
				$oldResource->save();
			}
		}
		break;
	case \'OnResourceDuplicate\':
		if(!$stercseo->isAllowed($newResource->get(\'context_key\'))) return;
		$props = $newResource->getProperties(\'stercseo\');
		$props[\'urls\'] = array();
		$newResource->setProperties($props,\'stercseo\');
		$newResource->save();
		break;

}
return;',
      'locked' => 0,
      'properties' => NULL,
      'disabled' => 0,
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * StercSEO
 *
 * Copyright 2013 by Wieger Sloot, Sterc internet & marketing <modx@sterc.nl>
 *
 * This file is part of StercSEO.
 *
 * StercSEO is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * StercSEO is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * StercSEO; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package stercseo
 */
/**
 * StercSEO Plugin
 *
 *
 * Events:
 * OnDocFormPrerender,OnDocFormSave,OnHandleRequest,OnPageNotFound
 *
 * @author Wieger Sloot, Sterc internet & marketing <modx@sterc.nl>
 *
 * @package stercseo
 *
 */
$stercseo = $modx->getService(\'stercseo\',\'StercSEO\',$modx->getOption(\'stercseo.core_path\',null,$modx->getOption(\'core_path\').\'components/stercseo/\').\'model/stercseo/\',array());

if (!($stercseo instanceof StercSEO)) return;

switch ($modx->event->name) {
	case \'OnDocFormPrerender\':
		$resource =& $modx->event->params[\'resource\'];
		if($resource){
			//First check if SEOTab is allowed in this context
			if(!$stercseo->isAllowed($resource->get(\'context_key\'))) return;
			$properties = $resource->getProperties(\'stercseo\');
		}
		if(empty($properties)){
			$properties = array(
				\'index\' => $modx->getOption(\'stercseo.index\', null, \'1\'),
				\'follow\' => $modx->getOption(\'stercseo.follow\', null, \'1\'),
				\'sitemap\' => $modx->getOption(\'stercseo.sitemap\', null, \'1\'),
				\'priority\' => $modx->getOption(\'stercseo.priority\', null, \'0.5\'),
				\'changefreq\' => $modx->getOption(\'stercseo.changefreq\', null, \'weekly\'),
				//\'urls\' => $modx->fromJSON($_POST[\'urls\'])
			);
		}
		//$output .= \'<div id="stercseo-box">\'.$errorMessage.$outputLanguageItems.\'</div>\';
		//$modx->event->output($output);
		$modx->regClientStartupHTMLBlock(\'<script type="text/javascript">
        Ext.onReady(function() {
            StercSEO.config = \'.$modx->toJSON($stercseo->config).\';
            StercSEO.config.connector_url = "\'.$stercseo->config[\'connectorUrl\'].\'";
            StercSEO.record = \'.$modx->toJSON($properties).\';
        });
        </script>\');
	    $version = $modx->getVersionData();

		/* include CSS and JS*/
		if($version[\'version\'] == 2 && $version[\'major_version\'] == 2){
	    	$modx->regClientCSS($stercseo->config[\'cssUrl\'].\'stercseo.css\');
	    }
		$modx->regClientStartupScript($stercseo->config[\'jsUrl\'].\'mgr/stercseo.js\');
		$modx->regClientStartupScript($stercseo->config[\'jsUrl\'].\'mgr/sections/resource.js\');
		$modx->regClientStartupScript($stercseo->config[\'jsUrl\'].\'mgr/widgets/resource.grid.js\');
		$modx->regClientStartupScript($stercseo->config[\'jsUrl\'].\'mgr/widgets/resource.vtabs.js\');

		//add lexicon
		$modx->controller->addLexiconTopic(\'stercseo:default\');

		break;

	case \'OnBeforeDocFormSave\':
	        $oldResource = ($mode == \'upd\') ? $modx->getObject(\'modResource\',$resource->get(\'id\')) : $resource;
			if(!$stercseo->isAllowed($oldResource->get(\'context_key\'))) return;
			$properties = $oldResource->getProperties(\'stercseo\');
			if($_POST[\'urls\'] != \'false\' && isset($_POST[\'urls\'])){
				if($mode == \'upd\'){
					$newProperties = array(
						\'index\' => (isset($_POST[\'index\']) ? $_POST[\'index\'] : $properties[\'index\']),
						\'follow\' => (isset($_POST[\'follow\']) ? $_POST[\'follow\'] : $properties[\'follow\']),
						\'sitemap\' => (isset($_POST[\'sitemap\']) ? $_POST[\'sitemap\'] : $properties[\'sitemap\']),
						\'priority\' => (isset($_POST[\'priority\']) ? $_POST[\'priority\'] : $properties[\'priority\']),
						\'changefreq\' => (isset($_POST[\'changefreq\']) ? $_POST[\'changefreq\'] : $properties[\'changefreq\']),
						\'urls\' => $modx->fromJSON($_POST[\'urls\'])
					);
				}else{
					$newProperties = array(
						\'index\' => (isset($_POST[\'index\']) ? $_POST[\'index\'] : $modx->getOption(\'stercseo.index\', null, \'1\')),
						\'follow\' => (isset($_POST[\'follow\']) ? $_POST[\'follow\'] : $modx->getOption(\'stercseo.follow\', null, \'1\')),
						\'sitemap\' => (isset($_POST[\'sitemap\']) ? $_POST[\'sitemap\'] : $modx->getOption(\'stercseo.sitemap\', null, \'1\')),
						\'priority\' => (isset($_POST[\'priority\']) ? $_POST[\'priority\'] : $modx->getOption(\'stercseo.priority\', null, \'0.5\')),
						\'changefreq\' => (isset($_POST[\'changefreq\']) ? $_POST[\'changefreq\'] : $modx->getOption(\'stercseo.changefreq\', null, \'weekly\')),
						\'urls\' => $modx->fromJSON($_POST[\'urls\'])
					);
				}
			}else{
			   	if($mode == \'upd\'){
					$newProperties = array(
						\'index\' => (isset($_POST[\'index\']) ? $_POST[\'index\'] : $properties[\'index\']),
						\'follow\' => (isset($_POST[\'follow\']) ? $_POST[\'follow\'] : $properties[\'follow\']),
						\'sitemap\' => (isset($_POST[\'sitemap\']) ? $_POST[\'sitemap\'] : $properties[\'sitemap\']),
						\'priority\' => (isset($_POST[\'priority\']) ? $_POST[\'priority\'] : $properties[\'priority\']),
						\'changefreq\' => (isset($_POST[\'changefreq\']) ? $_POST[\'changefreq\'] : $properties[\'changefreq\']),
						\'urls\' => $properties[\'urls\']
					);
				}else{
					$newProperties = array(
						\'index\' => (isset($_POST[\'index\']) ? $_POST[\'index\'] : $modx->getOption(\'stercseo.index\', null, \'1\')),
						\'follow\' => (isset($_POST[\'follow\']) ? $_POST[\'follow\'] : $modx->getOption(\'stercseo.follow\', null, \'1\')),
						\'sitemap\' => (isset($_POST[\'sitemap\']) ? $_POST[\'sitemap\'] : $modx->getOption(\'stercseo.sitemap\', null, \'1\')),
						\'priority\' => (isset($_POST[\'priority\']) ? $_POST[\'priority\'] : $modx->getOption(\'stercseo.priority\', null, \'0.5\')),
						\'changefreq\' => (isset($_POST[\'changefreq\']) ? $_POST[\'changefreq\'] : $modx->getOption(\'stercseo.changefreq\', null, \'weekly\')),
						\'urls\' => $properties[\'urls\']
					);
				}
			}
			if($oldResource->get(\'uri\') != $resource->get(\'uri\') && $oldResource->get(\'uri\') != \'\'){
//$modx->log(modX::LOG_LEVEL_ERROR, \'OLD: \'.$oldResource->get(\'uri\').\' - NEW: \'. $resource->get(\'uri\'));
				$newProperties[\'urls\'][] = array(\'url\' => $oldResource->get(\'uri\'));
			}

        	$resource->setProperties($newProperties,\'stercseo\');
		break;
	case \'OnLoadWebDocument\':
		if($modx->resource){
			if(!$stercseo->isAllowed($modx->resource->get(\'context_key\'))) return;
			$properties = $modx->resource->getProperties(\'stercseo\');
			$metaContent = array(\'noopd\', \'noydir\');
			if(!$properties[\'index\']) $metaContent[] = \'noindex\';
			if(!$properties[\'follow\']) $metaContent[] = \'nofollow\';
			$modx->setPlaceholder(\'seoTab.robotsTag\',implode(\',\', $metaContent));
		}
		break;

	case \'OnPageNotFound\':
		$url = $_REQUEST[$modx->getOption(\'request_param_alias\', null, \'q\')];
		$convertedUrl = str_replace(\'/\', \'_/\', ltrim($url, \'/\'));
		$w = array(
			\'properties:LIKE\' => \'%"\'.$convertedUrl.\'"%\'
		);
		if($modx->getOption(\'stercseo.context-aware-alias\', null, \'0\')){
			$w[\'context_key\'] = $modx->context->key;
		}
		$alreadyExists = $modx->getObject(\'modResource\', $w);
		if($alreadyExists){
			$id = $modx->makeUrl($alreadyExists->get(\'id\'));
			$modx->sendRedirect($id, 0, \'REDIRECT_HEADER\', \'HTTP/1.1 301 Moved Permanently\');
		}
		break;
	case \'OnResourceBeforeSort\':
		foreach($nodes as $node) {
			$oldResource = $modx->getObject(\'modResource\',$node[\'id\']);
			$resource 	 = $modx->getObject(\'modResource\',$node[\'id\']);
			$resource->set(\'parent\', $node[\'parent\']);

			if(!$stercseo->isAllowed($resource->get(\'context_key\'))) return;

			if($oldResource->get(\'uri\') != $resource->getAliasPath($resource->get(\'alias\')) && $oldResource->get(\'uri\') != \'\'){
				$newProperties = $oldResource->getProperties(\'stercseo\');
				$newProperties[\'urls\'][] = array(\'url\' => $oldResource->get(\'uri\'));
				$oldResource->setProperties($newProperties,\'stercseo\');
				$oldResource->save();
			}
		}
		break;
	case \'OnResourceDuplicate\':
		if(!$stercseo->isAllowed($newResource->get(\'context_key\'))) return;
		$props = $newResource->getProperties(\'stercseo\');
		$props[\'urls\'] = array();
		$newResource->setProperties($props,\'stercseo\');
		$newResource->save();
		break;

}
return;',
    ),
  ),
  '8c213b6aa4efb8fafcfd4754bfe6a8e5' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 2,
      'event' => 'OnDocFormPrerender',
    ),
    'object' => 
    array (
      'pluginid' => 2,
      'event' => 'OnDocFormPrerender',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '965895fb8d0421521330f899392b9118' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 2,
      'event' => 'OnBeforeDocFormSave',
    ),
    'object' => 
    array (
      'pluginid' => 2,
      'event' => 'OnBeforeDocFormSave',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '0ec1b71a9af04df14f75f750c2932916' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 2,
      'event' => 'OnLoadWebDocument',
    ),
    'object' => 
    array (
      'pluginid' => 2,
      'event' => 'OnLoadWebDocument',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  'a216eee8d4c1be71f8151e2efb628107' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 2,
      'event' => 'OnPageNotFound',
    ),
    'object' => 
    array (
      'pluginid' => 2,
      'event' => 'OnPageNotFound',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  'a48c0c0939eb6908868c2c25123141ca' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 2,
      'event' => 'OnResourceDuplicate',
    ),
    'object' => 
    array (
      'pluginid' => 2,
      'event' => 'OnResourceDuplicate',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '0d655f1a040a3e6f06914046ee8efa5b' => 
  array (
    'criteria' => 
    array (
      'key' => 'stercseo.context-aware-alias',
    ),
    'object' => 
    array (
      'key' => 'stercseo.context-aware-alias',
      'value' => '0',
      'xtype' => 'combo-boolean',
      'namespace' => 'stercseo',
      'area' => 'general',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '925ee8f93bfbb1f348a9721ba97404f2' => 
  array (
    'criteria' => 
    array (
      'key' => 'stercseo.index',
    ),
    'object' => 
    array (
      'key' => 'stercseo.index',
      'value' => '1',
      'xtype' => 'combo-boolean',
      'namespace' => 'stercseo',
      'area' => 'general',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '16a020a993e7205bb9fe6902c51e3a31' => 
  array (
    'criteria' => 
    array (
      'key' => 'stercseo.follow',
    ),
    'object' => 
    array (
      'key' => 'stercseo.follow',
      'value' => '1',
      'xtype' => 'combo-boolean',
      'namespace' => 'stercseo',
      'area' => 'general',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '8d753e03af1ca4bd4f15e1eb8fd88eac' => 
  array (
    'criteria' => 
    array (
      'key' => 'stercseo.sitemap',
    ),
    'object' => 
    array (
      'key' => 'stercseo.sitemap',
      'value' => '1',
      'xtype' => 'combo-boolean',
      'namespace' => 'stercseo',
      'area' => 'general',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '861ff0565b52c6bf6d465f319134fc61' => 
  array (
    'criteria' => 
    array (
      'key' => 'stercseo.priority',
    ),
    'object' => 
    array (
      'key' => 'stercseo.priority',
      'value' => '0.5',
      'xtype' => 'textfield',
      'namespace' => 'stercseo',
      'area' => 'general',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '3200bca6bfab32c84acb0108d476f61a' => 
  array (
    'criteria' => 
    array (
      'key' => 'stercseo.changefreq',
    ),
    'object' => 
    array (
      'key' => 'stercseo.changefreq',
      'value' => 'weekly',
      'xtype' => 'textfield',
      'namespace' => 'stercseo',
      'area' => 'general',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '1a368d7c99be73ca4be75d2ee91f08a9' => 
  array (
    'criteria' => 
    array (
      'key' => 'stercseo.allowed_contexts',
    ),
    'object' => 
    array (
      'key' => 'stercseo.allowed_contexts',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'stercseo',
      'area' => 'general',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
);