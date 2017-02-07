<?php return array (
  '9c40c587aac0fcd17c0c0faf1d9c3740' => 
  array (
    'criteria' => 
    array (
      'name' => 'mycomponent',
    ),
    'object' => 
    array (
      'name' => 'mycomponent',
      'path' => '{core_path}components/mycomponent/',
      'assets_path' => '{assets_path}components/mycomponent/',
    ),
  ),
  '154a65d6ce688172ccbba6827c3f0979' => 
  array (
    'criteria' => 
    array (
      'pagetitle' => 'MyComponent',
    ),
    'object' => 
    array (
      'id' => 13,
      'type' => 'document',
      'contentType' => 'text/html',
      'pagetitle' => 'MyComponent',
      'longtitle' => 'MyComponent Control Center',
      'description' => 'MyComponent Control Center',
      'alias' => 'mycomponent',
      'link_attributes' => '',
      'published' => 1,
      'pub_date' => 0,
      'unpub_date' => 0,
      'parent' => 0,
      'isfolder' => 0,
      'introtext' => NULL,
      'content' => '<div id="my_component">

    [[!MyComponent]]


</div>',
      'richtext' => 0,
      'template' => 2,
      'menuindex' => 10,
      'searchable' => 1,
      'cacheable' => 1,
      'createdby' => 1,
      'createdon' => 1436810249,
      'editedby' => 0,
      'editedon' => 0,
      'deleted' => 0,
      'deletedon' => 0,
      'deletedby' => 0,
      'publishedon' => 0,
      'publishedby' => 0,
      'menutitle' => '',
      'donthit' => 0,
      'privateweb' => 0,
      'privatemgr' => 0,
      'content_dispo' => 0,
      'hidemenu' => 1,
      'class_key' => 'modDocument',
      'context_key' => 'web',
      'content_type' => 1,
      'uri' => 'mycomponent.html',
      'uri_override' => 0,
      'hide_children_in_tree' => 0,
      'show_in_tree' => 1,
      'properties' => '',
    ),
  ),
  'd4cdd8da2336e293b42c1019c3a3e781' => 
  array (
    'criteria' => 
    array (
      'category' => 'MyComponent',
    ),
    'object' => 
    array (
      'id' => 15,
      'parent' => 0,
      'category' => 'MyComponent',
      'rank' => 0,
    ),
  ),
  'b01271655e9081254fadb4b3b06c0c7b' => 
  array (
    'criteria' => 
    array (
      'name' => 'user.input.php',
    ),
    'object' => 
    array (
      'id' => 8,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'user.input.php',
      'description' => 'Chunk',
      'editor_type' => 0,
      'category' => 15,
      'cache_type' => 0,
      'snippet' => '<?php

/**
 * Script to interact with user during [[+packageName]] package install
 *
 * Copyright [[+copyright]] by [[+author]] [[+email]]
 * Created on [[+createdon]]
 *
[[+license]]
 *
 * @package [[+packageNameLower]]
 */

/**
 * Description: Script to interact with user during [[+packageName]] package install
 * @package [[+packageNameLower]]
 * @subpackage build
 */

/* The return value from this script should be an HTML form (minus the
 * <form> tags and submit button) in a single string.
 *
 * The form will be shown to the user during install
 *
 * This example presents an HTML form to the user with two input fields
 * (you can have as many as you like).
 *
 * The user\'s entries in the form\'s input field(s) will be available
 * in any php resolvers with $modx->getOption(\'field_name\', $options, \'default_value\').
 *
 * You can use the value(s) to set system settings, snippet properties,
 * chunk content, etc. based on the user\'s preferences.
 *
 * One common use is to use a checkbox and ask the
 * user if they would like to install a resource for your
 * component (usually used only on install, not upgrade).
 */

/* This is an example. Modify it to meet your needs.
 * The user\'s input would be available in a resolver like this:
 *
 * $changeSiteName = (! empty($modx->getOption(\'change_sitename\', $options, \'\'));
 * $siteName = $modx->getOption(\'sitename\', $options, \'\').
 *
 * */

$output = \'<p>&nbsp;</p>
<p>Setting this option will do nothing because there is no resolver that acts on it.</p>
<label for="sitename">The value here could be used to set the site_name system setting on install.</label>
<p>&nbsp;</p>
<input type="text" name="sitename" id="sitename" value="" align="left" size="40" maxlength="60" />
<p>&nbsp;</p>
<input type="checkbox" name="change_sitename" id="change_sitename" checked="checked" value="1" align="left" />&nbsp;&nbsp;
<label for="change_sitename">Set site name on install</label>
<p>&nbsp;</p>\';


return $output;',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => '',
      'content' => '<?php

/**
 * Script to interact with user during [[+packageName]] package install
 *
 * Copyright [[+copyright]] by [[+author]] [[+email]]
 * Created on [[+createdon]]
 *
[[+license]]
 *
 * @package [[+packageNameLower]]
 */

/**
 * Description: Script to interact with user during [[+packageName]] package install
 * @package [[+packageNameLower]]
 * @subpackage build
 */

/* The return value from this script should be an HTML form (minus the
 * <form> tags and submit button) in a single string.
 *
 * The form will be shown to the user during install
 *
 * This example presents an HTML form to the user with two input fields
 * (you can have as many as you like).
 *
 * The user\'s entries in the form\'s input field(s) will be available
 * in any php resolvers with $modx->getOption(\'field_name\', $options, \'default_value\').
 *
 * You can use the value(s) to set system settings, snippet properties,
 * chunk content, etc. based on the user\'s preferences.
 *
 * One common use is to use a checkbox and ask the
 * user if they would like to install a resource for your
 * component (usually used only on install, not upgrade).
 */

/* This is an example. Modify it to meet your needs.
 * The user\'s input would be available in a resolver like this:
 *
 * $changeSiteName = (! empty($modx->getOption(\'change_sitename\', $options, \'\'));
 * $siteName = $modx->getOption(\'sitename\', $options, \'\').
 *
 * */

$output = \'<p>&nbsp;</p>
<p>Setting this option will do nothing because there is no resolver that acts on it.</p>
<label for="sitename">The value here could be used to set the site_name system setting on install.</label>
<p>&nbsp;</p>
<input type="text" name="sitename" id="sitename" value="" align="left" size="40" maxlength="60" />
<p>&nbsp;</p>
<input type="checkbox" name="change_sitename" id="change_sitename" checked="checked" value="1" align="left" />&nbsp;&nbsp;
<label for="change_sitename">Set site name on install</label>
<p>&nbsp;</p>\';


return $output;',
    ),
  ),
  'd876fca85fa349bb8fff6afa5776199f' => 
  array (
    'criteria' => 
    array (
      'name' => 'tvresolver.php',
    ),
    'object' => 
    array (
      'id' => 9,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'tvresolver.php',
      'description' => 'Chunk',
      'editor_type' => 0,
      'category' => 15,
      'cache_type' => 0,
      'snippet' => '<?php
/**
* Resolver to connect TVs to templates for [[+packageName]] extra
*
* Copyright [[+copyright]] by [[+author]] [[+email]]
* Created on [[+createdon]]
*
[[+license]]
* @package [[+packageNameLower]]
* @subpackage build
*/

/* @var $object xPDOObject */
/* @var $modx modX */
/* @var $parentObj modResource */
/* @var $templateObj modTemplate */

/* @var array $options */

if (!function_exists(\'checkFields\')) {
    function checkFields($required, $objectFields) {
        global $modx;
        $fields = explode(\',\', $required);
        foreach ($fields as $field) {
            if (!isset($objectFields[$field])) {
                $modx->log(modX::LOG_LEVEL_ERROR, \'[TV Resolver] Missing field: \' . $field);
                return false;
            }
        }
        return true;
    }
}

if ($object->xpdo) {
    $modx =& $object->xpdo;
    switch ($options[xPDOTransport::PACKAGE_ACTION]) {
        case xPDOTransport::ACTION_INSTALL:
        case xPDOTransport::ACTION_UPGRADE:

            $intersects = \'[[+intersects]]\';

            if (is_array($intersects)) {
                foreach ($intersects as $k => $fields) {
                    /* make sure we have all fields */
                    if (!checkFields(\'tmplvarid,templateid\', $fields)) {
                        continue;
                    }
                    $tv = $modx->getObject(\'modTemplateVar\', array(\'name\' => $fields[\'tmplvarid\']));
                    if ($fields[\'templateid\'] == \'default\') {
                        $template = $modx->getObject(\'modTemplate\', $modx->getOption(\'default_template\'));
                    } else {
                        $template = $modx->getObject(\'modTemplate\', array(\'templatename\' => $fields[\'templateid\']));
                    }
                    if (!$tv || !$template) {
                        $modx->log(xPDO::LOG_LEVEL_ERROR, \'Could not find Template and/or TV \' .
                            $fields[\'templateid\'] . \' - \' . $fields[\'tmplvarid\']);
                        continue;
                    }
                    $tvt = $modx->getObject(\'modTemplateVarTemplate\', array(\'templateid\' => $template->get(\'id\'), \'tmplvarid\' => $tv->get(\'id\')));
                    if (! $tvt) {
                        $tvt = $modx->newObject(\'modTemplateVarTemplate\');
                    }
                    if ($tvt) {
                        $tvt->set(\'tmplvarid\', $tv->get(\'id\'));
                        $tvt->set(\'templateid\', $template->get(\'id\'));
                        if (isset($fields[\'rank\'])) {
                            $tvt->set(\'rank\', $fields[\'rank\']);
                        } else {
                            $tvt->set(\'rank\', 0);
                        }
                        if (!$tvt->save()) {
                            $modx->log(xPDO::LOG_LEVEL_ERROR, \'Unknown error creating templateVarTemplate for \' .
                                $fields[\'templateid\'] . \' - \' . $fields[\'tmplvarid\']);
                        }
                    } else {
                        $modx->log(xPDO::LOG_LEVEL_ERROR, \'Unknown error creating templateVarTemplate for \' .
                            $fields[\'templateid\'] . \' - \' . $fields[\'tmplvarid\']);
                    }


                }

            }
            break;

        case xPDOTransport::ACTION_UNINSTALL:
            break;
    }
}

return true;',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => '',
      'content' => '<?php
/**
* Resolver to connect TVs to templates for [[+packageName]] extra
*
* Copyright [[+copyright]] by [[+author]] [[+email]]
* Created on [[+createdon]]
*
[[+license]]
* @package [[+packageNameLower]]
* @subpackage build
*/

/* @var $object xPDOObject */
/* @var $modx modX */
/* @var $parentObj modResource */
/* @var $templateObj modTemplate */

/* @var array $options */

if (!function_exists(\'checkFields\')) {
    function checkFields($required, $objectFields) {
        global $modx;
        $fields = explode(\',\', $required);
        foreach ($fields as $field) {
            if (!isset($objectFields[$field])) {
                $modx->log(modX::LOG_LEVEL_ERROR, \'[TV Resolver] Missing field: \' . $field);
                return false;
            }
        }
        return true;
    }
}

if ($object->xpdo) {
    $modx =& $object->xpdo;
    switch ($options[xPDOTransport::PACKAGE_ACTION]) {
        case xPDOTransport::ACTION_INSTALL:
        case xPDOTransport::ACTION_UPGRADE:

            $intersects = \'[[+intersects]]\';

            if (is_array($intersects)) {
                foreach ($intersects as $k => $fields) {
                    /* make sure we have all fields */
                    if (!checkFields(\'tmplvarid,templateid\', $fields)) {
                        continue;
                    }
                    $tv = $modx->getObject(\'modTemplateVar\', array(\'name\' => $fields[\'tmplvarid\']));
                    if ($fields[\'templateid\'] == \'default\') {
                        $template = $modx->getObject(\'modTemplate\', $modx->getOption(\'default_template\'));
                    } else {
                        $template = $modx->getObject(\'modTemplate\', array(\'templatename\' => $fields[\'templateid\']));
                    }
                    if (!$tv || !$template) {
                        $modx->log(xPDO::LOG_LEVEL_ERROR, \'Could not find Template and/or TV \' .
                            $fields[\'templateid\'] . \' - \' . $fields[\'tmplvarid\']);
                        continue;
                    }
                    $tvt = $modx->getObject(\'modTemplateVarTemplate\', array(\'templateid\' => $template->get(\'id\'), \'tmplvarid\' => $tv->get(\'id\')));
                    if (! $tvt) {
                        $tvt = $modx->newObject(\'modTemplateVarTemplate\');
                    }
                    if ($tvt) {
                        $tvt->set(\'tmplvarid\', $tv->get(\'id\'));
                        $tvt->set(\'templateid\', $template->get(\'id\'));
                        if (isset($fields[\'rank\'])) {
                            $tvt->set(\'rank\', $fields[\'rank\']);
                        } else {
                            $tvt->set(\'rank\', 0);
                        }
                        if (!$tvt->save()) {
                            $modx->log(xPDO::LOG_LEVEL_ERROR, \'Unknown error creating templateVarTemplate for \' .
                                $fields[\'templateid\'] . \' - \' . $fields[\'tmplvarid\']);
                        }
                    } else {
                        $modx->log(xPDO::LOG_LEVEL_ERROR, \'Unknown error creating templateVarTemplate for \' .
                            $fields[\'templateid\'] . \' - \' . $fields[\'tmplvarid\']);
                    }


                }

            }
            break;

        case xPDOTransport::ACTION_UNINSTALL:
            break;
    }
}

return true;',
    ),
  ),
  '9c7bd113a0376ba6f0d1b491c7d0f2de' => 
  array (
    'criteria' => 
    array (
      'name' => 'transportfile.php',
    ),
    'object' => 
    array (
      'id' => 10,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'transportfile.php',
      'description' => 'Chunk',
      'editor_type' => 0,
      'category' => 15,
      'cache_type' => 0,
      'snippet' => '<?php
/**
 * [[+elementType]] transport file for [[+packageName]] extra
 *
 * Copyright [[+copyright]] by [[+author]] [[+email]]
 * Created on [[+createdon]]
 *
 * @package [[+packageNameLower]]
 * @subpackage build
 */

if (! function_exists(\'stripPhpTags\')) {
    function stripPhpTags($filename) {
        $o = file_get_contents($filename);
        $o = str_replace(\'<\' . \'?\' . \'php\', \'\', $o);
        $o = str_replace(\'?>\', \'\', $o);
        $o = trim($o);
        return $o;
    }
}
/* @var $modx modX */
/* @var $sources array */
',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => '',
      'content' => '<?php
/**
 * [[+elementType]] transport file for [[+packageName]] extra
 *
 * Copyright [[+copyright]] by [[+author]] [[+email]]
 * Created on [[+createdon]]
 *
 * @package [[+packageNameLower]]
 * @subpackage build
 */

if (! function_exists(\'stripPhpTags\')) {
    function stripPhpTags($filename) {
        $o = file_get_contents($filename);
        $o = str_replace(\'<\' . \'?\' . \'php\', \'\', $o);
        $o = str_replace(\'?>\', \'\', $o);
        $o = trim($o);
        return $o;
    }
}
/* @var $modx modX */
/* @var $sources array */
',
    ),
  ),
  'c239c188c688bf9c835d5885c6325065' => 
  array (
    'criteria' => 
    array (
      'name' => 'tutorial.html.tpl',
    ),
    'object' => 
    array (
      'id' => 11,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'tutorial.html.tpl',
      'description' => 'Chunk',
      'editor_type' => 0,
      'category' => 15,
      'cache_type' => 0,
      'snippet' => '<p>[[+packageDescription]]</p>

<p>(Jump to <a href="[[~[[*id]]]]#propertiesTable">Properties Table</a>.)</p>

<h3>Installing [[+packageName]]</h3>

<p>
Go to System | Package Management on the main menu in the MODX Manager and click on the &quot;Download Extras&quot; button. That will take you to the
Revolution Repository (AKA Web Transport Facility). Put [[+packageName]] in the search box and press Enter. Click on the &quot;Download&quot; button, and once the package is downloaded,
 click on the &quot;Back to Package Manager&quot; button. That should bring you back to your Package Management grid. Click on the
&quot;Install&quot; button next to [[+packageName]] in the grid. The [[+packageName]] package should now be installed.</p>

<h3>Usage</h3>




<a name="propertiesTable"></a>

<h3>[[+packageName]] Properties</h3>',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => '',
      'content' => '<p>[[+packageDescription]]</p>

<p>(Jump to <a href="[[~[[*id]]]]#propertiesTable">Properties Table</a>.)</p>

<h3>Installing [[+packageName]]</h3>

<p>
Go to System | Package Management on the main menu in the MODX Manager and click on the &quot;Download Extras&quot; button. That will take you to the
Revolution Repository (AKA Web Transport Facility). Put [[+packageName]] in the search box and press Enter. Click on the &quot;Download&quot; button, and once the package is downloaded,
 click on the &quot;Back to Package Manager&quot; button. That should bring you back to your Package Management grid. Click on the
&quot;Install&quot; button next to [[+packageName]] in the grid. The [[+packageName]] package should now be installed.</p>

<h3>Usage</h3>




<a name="propertiesTable"></a>

<h3>[[+packageName]] Properties</h3>',
    ),
  ),
  '252c4fb4f57b44b7047fe563673344ce' => 
  array (
    'criteria' => 
    array (
      'name' => 'resourceresolver.php',
    ),
    'object' => 
    array (
      'id' => 12,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'resourceresolver.php',
      'description' => 'Chunk',
      'editor_type' => 0,
      'category' => 15,
      'cache_type' => 0,
      'snippet' => '<?php
/**
* Resource resolver  for [[+packageName]] extra.
* Sets template, parent, and (optionally) TV values
*
* Copyright [[+copyright]] by [[+author]] [[+email]]
* Created on [[+createdon]]
*
[[+license]]
* @package [[+packageNameLower]]
* @subpackage build
*/

/* @var $object xPDOObject */
/* @var $modx modX */
/* @var $parentObj modResource */
/* @var $templateObj modTemplate */

/* @var array $options */

if (!function_exists(\'checkFields\')) {
    function checkFields($required, $objectFields) {
        global $modx;
        $fields = explode(\',\', $required);
        foreach ($fields as $field) {
            if (! isset($objectFields[$field])) {
                $modx->log(modX::LOG_LEVEL_ERROR, \'[Resource Resolver] Missing field: \' . $field);
                return false;
            }
        }
        return true;
    }
}
if($object->xpdo) {
    $modx =& $object->xpdo;
    switch ($options[xPDOTransport::PACKAGE_ACTION]) {
        case xPDOTransport::ACTION_INSTALL:
        case xPDOTransport::ACTION_UPGRADE:

            $intersects = \'[[+intersects]]\';

            if (is_array($intersects)) {
                foreach ($intersects as $k => $fields) {
                    /* make sure we have all fields */
                    if (! checkFields(\'pagetitle,parent,template\', $fields)) {
                        continue;
                    }
                    $resource = $modx->getObject(\'modResource\', array(\'pagetitle\' => $fields[\'pagetitle\']));
                    if (! $resource) {
                        continue;
                    }
                    if ($fields[\'template\'] == \'default\') {
                        $resource->set(\'template\', $modx->getOption(\'default_template\'));
                    } else {
                        $templateObj = $modx->getObject(\'modTemplate\', array(\'templatename\' => $fields[\'template\']));
                        if ($templateObj) {
                            $resource->set(\'template\', $templateObj->get(\'id\'));
                        } else {
                            $modx->log(modX::LOG_LEVEL_ERROR, \'[Resource Resolver] Could not find template: \' . $fields[\'template\']);
                        }
                    }
                    if (!empty($fields[\'parent\'])) {
                        if ($fields[\'parent\'] != \'default\') {
                            $parentObj = $modx->getObject(\'modResource\', array(\'pagetitle\' => $fields[\'parent\']));
                            if ($parentObj) {
                                $resource->set(\'parent\', $parentObj->get(\'id\'));
                            } else {
                                $modx->log(modX::LOG_LEVEL_ERROR, \'[Resource Resolver] Could not find parent: \' . $fields[\'parent\']);
                            }
                        }
                    }

                    if (isset($fields[\'tvValues\'])) {
                        foreach($fields[\'tvValues\'] as $tvName => $value) {
                            $resource->setTVValue($tvName, $value);
                        }

                    }
                    $resource->save();
                }

            }
            break;

        case xPDOTransport::ACTION_UNINSTALL:
            break;
    }
}

return true;',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => '',
      'content' => '<?php
/**
* Resource resolver  for [[+packageName]] extra.
* Sets template, parent, and (optionally) TV values
*
* Copyright [[+copyright]] by [[+author]] [[+email]]
* Created on [[+createdon]]
*
[[+license]]
* @package [[+packageNameLower]]
* @subpackage build
*/

/* @var $object xPDOObject */
/* @var $modx modX */
/* @var $parentObj modResource */
/* @var $templateObj modTemplate */

/* @var array $options */

if (!function_exists(\'checkFields\')) {
    function checkFields($required, $objectFields) {
        global $modx;
        $fields = explode(\',\', $required);
        foreach ($fields as $field) {
            if (! isset($objectFields[$field])) {
                $modx->log(modX::LOG_LEVEL_ERROR, \'[Resource Resolver] Missing field: \' . $field);
                return false;
            }
        }
        return true;
    }
}
if($object->xpdo) {
    $modx =& $object->xpdo;
    switch ($options[xPDOTransport::PACKAGE_ACTION]) {
        case xPDOTransport::ACTION_INSTALL:
        case xPDOTransport::ACTION_UPGRADE:

            $intersects = \'[[+intersects]]\';

            if (is_array($intersects)) {
                foreach ($intersects as $k => $fields) {
                    /* make sure we have all fields */
                    if (! checkFields(\'pagetitle,parent,template\', $fields)) {
                        continue;
                    }
                    $resource = $modx->getObject(\'modResource\', array(\'pagetitle\' => $fields[\'pagetitle\']));
                    if (! $resource) {
                        continue;
                    }
                    if ($fields[\'template\'] == \'default\') {
                        $resource->set(\'template\', $modx->getOption(\'default_template\'));
                    } else {
                        $templateObj = $modx->getObject(\'modTemplate\', array(\'templatename\' => $fields[\'template\']));
                        if ($templateObj) {
                            $resource->set(\'template\', $templateObj->get(\'id\'));
                        } else {
                            $modx->log(modX::LOG_LEVEL_ERROR, \'[Resource Resolver] Could not find template: \' . $fields[\'template\']);
                        }
                    }
                    if (!empty($fields[\'parent\'])) {
                        if ($fields[\'parent\'] != \'default\') {
                            $parentObj = $modx->getObject(\'modResource\', array(\'pagetitle\' => $fields[\'parent\']));
                            if ($parentObj) {
                                $resource->set(\'parent\', $parentObj->get(\'id\'));
                            } else {
                                $modx->log(modX::LOG_LEVEL_ERROR, \'[Resource Resolver] Could not find parent: \' . $fields[\'parent\']);
                            }
                        }
                    }

                    if (isset($fields[\'tvValues\'])) {
                        foreach($fields[\'tvValues\'] as $tvName => $value) {
                            $resource->setTVValue($tvName, $value);
                        }

                    }
                    $resource->save();
                }

            }
            break;

        case xPDOTransport::ACTION_UNINSTALL:
            break;
    }
}

return true;',
    ),
  ),
  '16d5dc303d536cc3582463a74d356174' => 
  array (
    'criteria' => 
    array (
      'name' => 'readme.md.tpl',
    ),
    'object' => 
    array (
      'id' => 13,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'readme.md.tpl',
      'description' => 'Chunk',
      'editor_type' => 0,
      'category' => 15,
      'cache_type' => 0,
      'snippet' => '[[+packageName]] Extra for MODx Revolution
=======================================


**Author:** [[+author]] [[+email]] [[[+authorSiteName]]]([[+authorUrl]])

Documentation is available at [[[+authorSiteName]]]([[+packageUrl]])

[[+packageDescription]]
',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => '',
      'content' => '[[+packageName]] Extra for MODx Revolution
=======================================


**Author:** [[+author]] [[+email]] [[[+authorSiteName]]]([[+authorUrl]])

Documentation is available at [[[+authorSiteName]]]([[+packageUrl]])

[[+packageDescription]]
',
    ),
  ),
  '582d20d72c42803c5a3a86feab803cd8' => 
  array (
    'criteria' => 
    array (
      'name' => 'readme.txt.tpl',
    ),
    'object' => 
    array (
      'id' => 14,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'readme.txt.tpl',
      'description' => 'Chunk',
      'editor_type' => 0,
      'category' => 15,
      'cache_type' => 0,
      'snippet' => '
[[+packageName]]


Author: [[+author]] [[+email]]
Copyright [[+copyright]]

Official Documentation: [[+packageUrl]]

Bugs and Feature Requests: https://github.com:[[+gitHubUsername]]/[[+gitHubRepository]]

Questions: http://forums.modx.com

Created by MyComponent
',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => '',
      'content' => '
[[+packageName]]


Author: [[+author]] [[+email]]
Copyright [[+copyright]]

Official Documentation: [[+packageUrl]]

Bugs and Feature Requests: https://github.com:[[+gitHubUsername]]/[[+gitHubRepository]]

Questions: http://forums.modx.com

Created by MyComponent
',
    ),
  ),
  '8ab230ef8b1f4db4342d478deddf917c' => 
  array (
    'criteria' => 
    array (
      'name' => 'removenewevents.php',
    ),
    'object' => 
    array (
      'id' => 15,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'removenewevents.php',
      'description' => 'Chunk',
      'editor_type' => 0,
      'category' => 15,
      'cache_type' => 0,
      'snippet' => '<?php
            /* Remove new System Events created during install */

            $events = \'[[+newEvents]]\';
            $events = empty($events)? array() : explode(\',\', $events);
            /* @var $e modEvent */
            foreach ($events as $event) {
                $e = $modx->getObject(\'modEvent\', array(\'name\' => $event));
                if ($e) {
                    $e->remove();
                }
            }',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => '',
      'content' => '<?php
            /* Remove new System Events created during install */

            $events = \'[[+newEvents]]\';
            $events = empty($events)? array() : explode(\',\', $events);
            /* @var $e modEvent */
            foreach ($events as $event) {
                $e = $modx->getObject(\'modEvent\', array(\'name\' => $event));
                if ($e) {
                    $e->remove();
                }
            }',
    ),
  ),
  '74b49f04b4603454bf39ad5108b1bc8d' => 
  array (
    'criteria' => 
    array (
      'name' => 'propertiesfile.php',
    ),
    'object' => 
    array (
      'id' => 16,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'propertiesfile.php',
      'description' => 'Chunk',
      'editor_type' => 0,
      'category' => 15,
      'cache_type' => 0,
      'snippet' => '<?php
/**
 * Properties file for [[+element]] [[+elementType]]
 *
 * Copyright [[+copyright]] by [[+author]] [[+email]]
 * Created on [[+createdon]]
 *
 * @package [[+packageNameLower]]
 * @subpackage build
 */


',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => '',
      'content' => '<?php
/**
 * Properties file for [[+element]] [[+elementType]]
 *
 * Copyright [[+copyright]] by [[+author]] [[+email]]
 * Created on [[+createdon]]
 *
 * @package [[+packageNameLower]]
 * @subpackage build
 */


',
    ),
  ),
  '817cc3d7cfbd9fc3ea57b7dbc3501db1' => 
  array (
    'criteria' => 
    array (
      'name' => 'propertysetresolver.php',
    ),
    'object' => 
    array (
      'id' => 17,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'propertysetresolver.php',
      'description' => 'Chunk',
      'editor_type' => 0,
      'category' => 15,
      'cache_type' => 0,
      'snippet' => '<?php
/**
* Resolver to connect Property Sets to Elements for [[+packageName]] extra
*
* Copyright [[+copyright]] by [[+author]] [[+email]]
* Created on [[+createdon]]
*
[[+license]]
* @package [[+packageNameLower]]
* @subpackage build
*/

/* @var $object xPDOObject */
/* @var $propertySetObj modPropertySet */
/* @var $elementObj modElement */
/* @var $elementPropertySet modElementPropertySet */

/* @var array $options */
if (!function_exists(\'getNameAlias\')) {
    function getNameAlias($elementType)
    {
        switch ($elementType) {
            case \'modTemplate\':
                $nameAlias = \'templatename\';
                break;
            case \'modCategory\':
                $nameAlias = \'category\';
                break;
            case \'modResource\':
                $nameAlias = \'pagetitle\';
                break;
            default:
                $nameAlias = \'name\';
                break;
        }
        return $nameAlias;

    }
}

if (!function_exists(\'checkFields\')) {
    function checkFields($required, $objectFields) {
        global $modx;
        $fields = explode(\',\', $required);
        foreach ($fields as $field) {
            if (!isset($objectFields[$field])) {
                $modx->log(modX::LOG_LEVEL_ERROR, \'[PropertySet Resolver] Missing field: \' . $field);
                return false;
            }
        }
        return true;
    }
}
if ($object->xpdo) {
    $modx =& $object->xpdo;
    switch ($options[xPDOTransport::PACKAGE_ACTION]) {
        case xPDOTransport::ACTION_INSTALL:
        case xPDOTransport::ACTION_UPGRADE:
        $intersects = \'[[+intersects]]\';

        if (is_array($intersects)) {
            foreach ($intersects as $k => $fields) {
                /* make sure we have all fields */
                if (!checkFields(\'element,element_class,property_set\', $fields)) {
                    continue;
                }
                $elementObj = $modx->getObject($fields[\'element_class\'],
                    array(getNameAlias($fields[\'element_class\']) => $fields[\'element\']));

                $propertySetObj = $modx->getObject(\'modPropertySet\', array(\'name\' => $fields[\'property_set\']));

                if (!$elementObj || !$propertySetObj) {
                    $modx->log(xPDO::LOG_LEVEL_ERROR, \'Could not find Element and/or Property Set \' .
                        $fields[\'element\'] . \' - \' . $fields[\'property_set\']);
                    continue;
                }
                $fields[\'element\'] = $elementObj->get(\'id\');
                $fields[\'property_set\'] = $propertySetObj->get(\'id\');

                $tvt = $modx->getObject(\'modElementPropertySet\', $fields);
                if (!$tvt) {
                    $tvt = $modx->newObject(\'modElementPropertySet\');
                }
                if ($tvt) {
                    foreach($fields as $key => $value) {
                        $tvt->set($key, $value);
                    }
                    if (!$tvt->save()) {
                        $modx->log(xPDO::LOG_LEVEL_ERROR, \'Unknown error creating elementPropertySet intersect for \' .
                            $fields[\'element\'] . \' - \' . $fields[\'property_set\']);
                    }

                } else {
                    $modx->log(xPDO::LOG_LEVEL_ERROR, \'Unknown error creating elementPropertySet intersect for \' .
                        $fields[\'element\'] . \' - \' . $fields[\'property_set\']);
                }
            }
        }
            break;

        case xPDOTransport::ACTION_UNINSTALL:
            break;
    }
}

return true;',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => '',
      'content' => '<?php
/**
* Resolver to connect Property Sets to Elements for [[+packageName]] extra
*
* Copyright [[+copyright]] by [[+author]] [[+email]]
* Created on [[+createdon]]
*
[[+license]]
* @package [[+packageNameLower]]
* @subpackage build
*/

/* @var $object xPDOObject */
/* @var $propertySetObj modPropertySet */
/* @var $elementObj modElement */
/* @var $elementPropertySet modElementPropertySet */

/* @var array $options */
if (!function_exists(\'getNameAlias\')) {
    function getNameAlias($elementType)
    {
        switch ($elementType) {
            case \'modTemplate\':
                $nameAlias = \'templatename\';
                break;
            case \'modCategory\':
                $nameAlias = \'category\';
                break;
            case \'modResource\':
                $nameAlias = \'pagetitle\';
                break;
            default:
                $nameAlias = \'name\';
                break;
        }
        return $nameAlias;

    }
}

if (!function_exists(\'checkFields\')) {
    function checkFields($required, $objectFields) {
        global $modx;
        $fields = explode(\',\', $required);
        foreach ($fields as $field) {
            if (!isset($objectFields[$field])) {
                $modx->log(modX::LOG_LEVEL_ERROR, \'[PropertySet Resolver] Missing field: \' . $field);
                return false;
            }
        }
        return true;
    }
}
if ($object->xpdo) {
    $modx =& $object->xpdo;
    switch ($options[xPDOTransport::PACKAGE_ACTION]) {
        case xPDOTransport::ACTION_INSTALL:
        case xPDOTransport::ACTION_UPGRADE:
        $intersects = \'[[+intersects]]\';

        if (is_array($intersects)) {
            foreach ($intersects as $k => $fields) {
                /* make sure we have all fields */
                if (!checkFields(\'element,element_class,property_set\', $fields)) {
                    continue;
                }
                $elementObj = $modx->getObject($fields[\'element_class\'],
                    array(getNameAlias($fields[\'element_class\']) => $fields[\'element\']));

                $propertySetObj = $modx->getObject(\'modPropertySet\', array(\'name\' => $fields[\'property_set\']));

                if (!$elementObj || !$propertySetObj) {
                    $modx->log(xPDO::LOG_LEVEL_ERROR, \'Could not find Element and/or Property Set \' .
                        $fields[\'element\'] . \' - \' . $fields[\'property_set\']);
                    continue;
                }
                $fields[\'element\'] = $elementObj->get(\'id\');
                $fields[\'property_set\'] = $propertySetObj->get(\'id\');

                $tvt = $modx->getObject(\'modElementPropertySet\', $fields);
                if (!$tvt) {
                    $tvt = $modx->newObject(\'modElementPropertySet\');
                }
                if ($tvt) {
                    foreach($fields as $key => $value) {
                        $tvt->set($key, $value);
                    }
                    if (!$tvt->save()) {
                        $modx->log(xPDO::LOG_LEVEL_ERROR, \'Unknown error creating elementPropertySet intersect for \' .
                            $fields[\'element\'] . \' - \' . $fields[\'property_set\']);
                    }

                } else {
                    $modx->log(xPDO::LOG_LEVEL_ERROR, \'Unknown error creating elementPropertySet intersect for \' .
                        $fields[\'element\'] . \' - \' . $fields[\'property_set\']);
                }
            }
        }
            break;

        case xPDOTransport::ACTION_UNINSTALL:
            break;
    }
}

return true;',
    ),
  ),
  '4ac5b70c0237c4599586f2f6fc81b5f9' => 
  array (
    'criteria' => 
    array (
      'name' => 'genericresolver.php',
    ),
    'object' => 
    array (
      'id' => 18,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'genericresolver.php',
      'description' => 'Chunk',
      'editor_type' => 0,
      'category' => 15,
      'cache_type' => 0,
      'snippet' => '<?php
/**
 * Resolver for [[+packageName]] extra
 *
 * Copyright [[+copyright]] by [[+author]] [[+email]]
 * Created on [[+createdon]]
 *
[[+license]]
 * @package [[+packageNameLower]]
 * @subpackage build
 */

/* @var $object xPDOObject */
/* @var $modx modX */

/* @var array $options */

if ($object->xpdo) {
    $modx =& $object->xpdo;
    switch ($options[xPDOTransport::PACKAGE_ACTION]) {
        case xPDOTransport::ACTION_INSTALL:
        case xPDOTransport::ACTION_UPGRADE:
            /* [[+code]] */
            break;

        case xPDOTransport::ACTION_UNINSTALL:
            break;
    }
}

return true;',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => '',
      'content' => '<?php
/**
 * Resolver for [[+packageName]] extra
 *
 * Copyright [[+copyright]] by [[+author]] [[+email]]
 * Created on [[+createdon]]
 *
[[+license]]
 * @package [[+packageNameLower]]
 * @subpackage build
 */

/* @var $object xPDOObject */
/* @var $modx modX */

/* @var array $options */

if ($object->xpdo) {
    $modx =& $object->xpdo;
    switch ($options[xPDOTransport::PACKAGE_ACTION]) {
        case xPDOTransport::ACTION_INSTALL:
        case xPDOTransport::ACTION_UPGRADE:
            /* [[+code]] */
            break;

        case xPDOTransport::ACTION_UNINSTALL:
            break;
    }
}

return true;',
    ),
  ),
  '3a77e2b3569befa79ce849e6a3d70f40' => 
  array (
    'criteria' => 
    array (
      'name' => 'genericvalidator.php',
    ),
    'object' => 
    array (
      'id' => 19,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'genericvalidator.php',
      'description' => 'Chunk',
      'editor_type' => 0,
      'category' => 15,
      'cache_type' => 0,
      'snippet' => '<?php
/**
 * Validator for [[+packageName]] extra
 *
 * Copyright [[+copyright]] by [[+author]] [[+email]]
 * Created on [[+createdon]]
 *
[[+license]]
 * @package [[+packageNameLower]]
 * @subpackage build
 */

/* @var $object xPDOObject */
/* @var $modx modX */
/* @var array $options */

if ($object->xpdo) {
    $modx =& $object->xpdo;
    switch ($options[xPDOTransport::PACKAGE_ACTION]) {
        case xPDOTransport::ACTION_INSTALL:
            /* return false if conditions are not met */

            /* [[+code]] */
            break;
        case xPDOTransport::ACTION_UPGRADE:
            /* return false if conditions are not met */
            /* [[+code]] */
            break;

        case xPDOTransport::ACTION_UNINSTALL:
            break;
    }
}

return true;',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => '',
      'content' => '<?php
/**
 * Validator for [[+packageName]] extra
 *
 * Copyright [[+copyright]] by [[+author]] [[+email]]
 * Created on [[+createdon]]
 *
[[+license]]
 * @package [[+packageNameLower]]
 * @subpackage build
 */

/* @var $object xPDOObject */
/* @var $modx modX */
/* @var array $options */

if ($object->xpdo) {
    $modx =& $object->xpdo;
    switch ($options[xPDOTransport::PACKAGE_ACTION]) {
        case xPDOTransport::ACTION_INSTALL:
            /* return false if conditions are not met */

            /* [[+code]] */
            break;
        case xPDOTransport::ACTION_UPGRADE:
            /* return false if conditions are not met */
            /* [[+code]] */
            break;

        case xPDOTransport::ACTION_UNINSTALL:
            break;
    }
}

return true;',
    ),
  ),
  '6d24dbb8ce02a46ffd09f87f14b835a0' => 
  array (
    'criteria' => 
    array (
      'name' => 'js.tpl',
    ),
    'object' => 
    array (
      'id' => 20,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'js.tpl',
      'description' => 'Chunk',
      'editor_type' => 0,
      'category' => 15,
      'cache_type' => 0,
      'snippet' => '/** 
 * JS file for [[+packageName]] extra
 * 
 * Copyright [[+copyright]] by [[+author]] [[+email]]
 * Created on [[+createdon]]
 *
[[+license]]
 * @package [[+packageNameLower]]
 */',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => '',
      'content' => '/** 
 * JS file for [[+packageName]] extra
 * 
 * Copyright [[+copyright]] by [[+author]] [[+email]]
 * Created on [[+createdon]]
 *
[[+license]]
 * @package [[+packageNameLower]]
 */',
    ),
  ),
  'da10fbf6d55b3aae9aeb1e664f2b5b2e' => 
  array (
    'criteria' => 
    array (
      'name' => 'license.tpl',
    ),
    'object' => 
    array (
      'id' => 21,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'license.tpl',
      'description' => 'Chunk',
      'editor_type' => 0,
      'category' => 15,
      'cache_type' => 0,
      'snippet' => ' * [[+packageName]] is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * [[+packageName]] is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * [[+packageName]]; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => '',
      'content' => ' * [[+packageName]] is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * [[+packageName]] is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * [[+packageName]]; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA',
    ),
  ),
  '15b1073fc323ee75fd792d7a3e77b360' => 
  array (
    'criteria' => 
    array (
      'name' => 'license.txt.tpl',
    ),
    'object' => 
    array (
      'id' => 22,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'license.txt.tpl',
      'description' => 'Chunk',
      'editor_type' => 0,
      'category' => 15,
      'cache_type' => 0,
      'snippet' => 'GNU GENERAL PUBLIC LICENSE
   Version 2, June 1991
--------------------------

Copyright (C) 1989, 1991 Free Software Foundation, Inc.
59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

Everyone is permitted to copy and distribute verbatim copies
of this license document, but changing it is not allowed.

Preamble
--------

  The licenses for most software are designed to take away your
freedom to share and change it.  By contrast, the GNU General Public
License is intended to guarantee your freedom to share and change free
software--to make sure the software is free for all its users.  This
General Public License applies to most of the Free Software
Foundation\'s software and to any other program whose authors commit to
using it.  (Some other Free Software Foundation software is covered by
the GNU Library General Public License instead.)  You can apply it to
your programs, too.

  When we speak of free software, we are referring to freedom, not
price.  Our General Public Licenses are designed to make sure that you
have the freedom to distribute copies of free software (and charge for
this service if you wish), that you receive source code or can get it
if you want it, that you can change the software or use pieces of it
in new free programs; and that you know you can do these things.

  To protect your rights, we need to make restrictions that forbid
anyone to deny you these rights or to ask you to surrender the rights.
These restrictions translate to certain responsibilities for you if you
distribute copies of the software, or if you modify it.

  For example, if you distribute copies of such a program, whether
gratis or for a fee, you must give the recipients all the rights that
you have.  You must make sure that they, too, receive or can get the
source code.  And you must show them these terms so they know their
rights.

  We protect your rights with two steps: (1) copyright the software, and
(2) offer you this license which gives you legal permission to copy,
distribute and/or modify the software.

  Also, for each author\'s protection and ours, we want to make certain
that everyone understands that there is no warranty for this free
software.  If the software is modified by someone else and passed on, we
want its recipients to know that what they have is not the original, so
that any problems introduced by others will not reflect on the original
authors\' reputations.

  Finally, any free program is threatened constantly by software
patents.  We wish to avoid the danger that redistributors of a free
program will individually obtain patent licenses, in effect making the
program proprietary.  To prevent this, we have made it clear that any
patent must be licensed for everyone\'s free use or not licensed at all.

  The precise terms and conditions for copying, distribution and
modification follow.


GNU GENERAL PUBLIC LICENSE
TERMS AND CONDITIONS FOR COPYING, DISTRIBUTION AND MODIFICATION
---------------------------------------------------------------

  0. This License applies to any program or other work which contains
a notice placed by the copyright holder saying it may be distributed
under the terms of this General Public License.  The "Program", below,
refers to any such program or work, and a "work based on the Program"
means either the Program or any derivative work under copyright law:
that is to say, a work containing the Program or a portion of it,
either verbatim or with modifications and/or translated into another
language.  (Hereinafter, translation is included without limitation in
the term "modification".)  Each licensee is addressed as "you".

Activities other than copying, distribution and modification are not
covered by this License; they are outside its scope.  The act of
running the Program is not restricted, and the output from the Program
is covered only if its contents constitute a work based on the
Program (independent of having been made by running the Program).
Whether that is true depends on what the Program does.

  1. You may copy and distribute verbatim copies of the Program\'s
source code as you receive it, in any medium, provided that you
conspicuously and appropriately publish on each copy an appropriate
copyright notice and disclaimer of warranty; keep intact all the
notices that refer to this License and to the absence of any warranty;
and give any other recipients of the Program a copy of this License
along with the Program.

You may charge a fee for the physical act of transferring a copy, and
you may at your option offer warranty protection in exchange for a fee.

  2. You may modify your copy or copies of the Program or any portion
of it, thus forming a work based on the Program, and copy and
distribute such modifications or work under the terms of Section 1
above, provided that you also meet all of these conditions:

    a) You must cause the modified files to carry prominent notices
    stating that you changed the files and the date of any change.

    b) You must cause any work that you distribute or publish, that in
    whole or in part contains or is derived from the Program or any
    part thereof, to be licensed as a whole at no charge to all third
    parties under the terms of this License.

    c) If the modified program normally reads commands interactively
    when run, you must cause it, when started running for such
    interactive use in the most ordinary way, to print or display an
    announcement including an appropriate copyright notice and a
    notice that there is no warranty (or else, saying that you provide
    a warranty) and that users may redistribute the program under
    these conditions, and telling the user how to view a copy of this
    License.  (Exception: if the Program itself is interactive but
    does not normally print such an announcement, your work based on
    the Program is not required to print an announcement.)

These requirements apply to the modified work as a whole.  If
identifiable sections of that work are not derived from the Program,
and can be reasonably considered independent and separate works in
themselves, then this License, and its terms, do not apply to those
sections when you distribute them as separate works.  But when you
distribute the same sections as part of a whole which is a work based
on the Program, the distribution of the whole must be on the terms of
this License, whose permissions for other licensees extend to the
entire whole, and thus to each and every part regardless of who wrote it.

Thus, it is not the intent of this section to claim rights or contest
your rights to work written entirely by you; rather, the intent is to
exercise the right to control the distribution of derivative or
collective works based on the Program.

In addition, mere aggregation of another work not based on the Program
with the Program (or with a work based on the Program) on a volume of
a storage or distribution medium does not bring the other work under
the scope of this License.

  3. You may copy and distribute the Program (or a work based on it,
under Section 2) in object code or executable form under the terms of
Sections 1 and 2 above provided that you also do one of the following:

    a) Accompany it with the complete corresponding machine-readable
    source code, which must be distributed under the terms of Sections
    1 and 2 above on a medium customarily used for software interchange; or,

    b) Accompany it with a written offer, valid for at least three
    years, to give any third party, for a charge no more than your
    cost of physically performing source distribution, a complete
    machine-readable copy of the corresponding source code, to be
    distributed under the terms of Sections 1 and 2 above on a medium
    customarily used for software interchange; or,

    c) Accompany it with the information you received as to the offer
    to distribute corresponding source code.  (This alternative is
    allowed only for noncommercial distribution and only if you
    received the program in object code or executable form with such
    an offer, in accord with Subsection b above.)

The source code for a work means the preferred form of the work for
making modifications to it.  For an executable work, complete source
code means all the source code for all modules it contains, plus any
associated interface definition files, plus the scripts used to
control compilation and installation of the executable.  However, as a
special exception, the source code distributed need not include
anything that is normally distributed (in either source or binary
form) with the major components (compiler, kernel, and so on) of the
operating system on which the executable runs, unless that component
itself accompanies the executable.

If distribution of executable or object code is made by offering
access to copy from a designated place, then offering equivalent
access to copy the source code from the same place counts as
distribution of the source code, even though third parties are not
compelled to copy the source along with the object code.

  4. You may not copy, modify, sublicense, or distribute the Program
except as expressly provided under this License.  Any attempt
otherwise to copy, modify, sublicense or distribute the Program is
void, and will automatically terminate your rights under this License.
However, parties who have received copies, or rights, from you under
this License will not have their licenses terminated so long as such
parties remain in full compliance.

  5. You are not required to accept this License, since you have not
signed it.  However, nothing else grants you permission to modify or
distribute the Program or its derivative works.  These actions are
prohibited by law if you do not accept this License.  Therefore, by
modifying or distributing the Program (or any work based on the
Program), you indicate your acceptance of this License to do so, and
all its terms and conditions for copying, distributing or modifying
the Program or works based on it.

  6. Each time you redistribute the Program (or any work based on the
Program), the recipient automatically receives a license from the
original licensor to copy, distribute or modify the Program subject to
these terms and conditions.  You may not impose any further
restrictions on the recipients\' exercise of the rights granted herein.
You are not responsible for enforcing compliance by third parties to
this License.

  7. If, as a consequence of a court judgment or allegation of patent
infringement or for any other reason (not limited to patent issues),
conditions are imposed on you (whether by court order, agreement or
otherwise) that contradict the conditions of this License, they do not
excuse you from the conditions of this License.  If you cannot
distribute so as to satisfy simultaneously your obligations under this
License and any other pertinent obligations, then as a consequence you
may not distribute the Program at all.  For example, if a patent
license would not permit royalty-free redistribution of the Program by
all those who receive copies directly or indirectly through you, then
the only way you could satisfy both it and this License would be to
refrain entirely from distribution of the Program.

If any portion of this section is held invalid or unenforceable under
any particular circumstance, the balance of the section is intended to
apply and the section as a whole is intended to apply in other
circumstances.

It is not the purpose of this section to induce you to infringe any
patents or other property right claims or to contest validity of any
such claims; this section has the sole purpose of protecting the
integrity of the free software distribution system, which is
implemented by public license practices.  Many people have made
generous contributions to the wide range of software distributed
through that system in reliance on consistent application of that
system; it is up to the author/donor to decide if he or she is willing
to distribute software through any other system and a licensee cannot
impose that choice.

This section is intended to make thoroughly clear what is believed to
be a consequence of the rest of this License.

  8. If the distribution and/or use of the Program is restricted in
certain countries either by patents or by copyrighted interfaces, the
original copyright holder who places the Program under this License
may add an explicit geographical distribution limitation excluding
those countries, so that distribution is permitted only in or among
countries not thus excluded.  In such case, this License incorporates
the limitation as if written in the body of this License.

  9. The Free Software Foundation may publish revised and/or new versions
of the General Public License from time to time.  Such new versions will
be similar in spirit to the present version, but may differ in detail to
address new problems or concerns.

Each version is given a distinguishing version number.  If the Program
specifies a version number of this License which applies to it and "any
later version", you have the option of following the terms and conditions
either of that version or of any later version published by the Free
Software Foundation.  If the Program does not specify a version number of
this License, you may choose any version ever published by the Free Software
Foundation.

  10. If you wish to incorporate parts of the Program into other free
programs whose distribution conditions are different, write to the author
to ask for permission.  For software which is copyrighted by the Free
Software Foundation, write to the Free Software Foundation; we sometimes
make exceptions for this.  Our decision will be guided by the two goals
of preserving the free status of all derivatives of our free software and
of promoting the sharing and reuse of software generally.

NO WARRANTY
-----------

  11. BECAUSE THE PROGRAM IS LICENSED FREE OF CHARGE, THERE IS NO WARRANTY
FOR THE PROGRAM, TO THE EXTENT PERMITTED BY APPLICABLE LAW.  EXCEPT WHEN
OTHERWISE STATED IN WRITING THE COPYRIGHT HOLDERS AND/OR OTHER PARTIES
PROVIDE THE PROGRAM "AS IS" WITHOUT WARRANTY OF ANY KIND, EITHER EXPRESSED
OR IMPLIED, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF
MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE.  THE ENTIRE RISK AS
TO THE QUALITY AND PERFORMANCE OF THE PROGRAM IS WITH YOU.  SHOULD THE
PROGRAM PROVE DEFECTIVE, YOU ASSUME THE COST OF ALL NECESSARY SERVICING,
REPAIR OR CORRECTION.

  12. IN NO EVENT UNLESS REQUIRED BY APPLICABLE LAW OR AGREED TO IN WRITING
WILL ANY COPYRIGHT HOLDER, OR ANY OTHER PARTY WHO MAY MODIFY AND/OR
REDISTRIBUTE THE PROGRAM AS PERMITTED ABOVE, BE LIABLE TO YOU FOR DAMAGES,
INCLUDING ANY GENERAL, SPECIAL, INCIDENTAL OR CONSEQUENTIAL DAMAGES ARISING
OUT OF THE USE OR INABILITY TO USE THE PROGRAM (INCLUDING BUT NOT LIMITED
TO LOSS OF DATA OR DATA BEING RENDERED INACCURATE OR LOSSES SUSTAINED BY
YOU OR THIRD PARTIES OR A FAILURE OF THE PROGRAM TO OPERATE WITH ANY OTHER
PROGRAMS), EVEN IF SUCH HOLDER OR OTHER PARTY HAS BEEN ADVISED OF THE
POSSIBILITY OF SUCH DAMAGES.

---------------------------
END OF TERMS AND CONDITIONS',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => '',
      'content' => 'GNU GENERAL PUBLIC LICENSE
   Version 2, June 1991
--------------------------

Copyright (C) 1989, 1991 Free Software Foundation, Inc.
59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

Everyone is permitted to copy and distribute verbatim copies
of this license document, but changing it is not allowed.

Preamble
--------

  The licenses for most software are designed to take away your
freedom to share and change it.  By contrast, the GNU General Public
License is intended to guarantee your freedom to share and change free
software--to make sure the software is free for all its users.  This
General Public License applies to most of the Free Software
Foundation\'s software and to any other program whose authors commit to
using it.  (Some other Free Software Foundation software is covered by
the GNU Library General Public License instead.)  You can apply it to
your programs, too.

  When we speak of free software, we are referring to freedom, not
price.  Our General Public Licenses are designed to make sure that you
have the freedom to distribute copies of free software (and charge for
this service if you wish), that you receive source code or can get it
if you want it, that you can change the software or use pieces of it
in new free programs; and that you know you can do these things.

  To protect your rights, we need to make restrictions that forbid
anyone to deny you these rights or to ask you to surrender the rights.
These restrictions translate to certain responsibilities for you if you
distribute copies of the software, or if you modify it.

  For example, if you distribute copies of such a program, whether
gratis or for a fee, you must give the recipients all the rights that
you have.  You must make sure that they, too, receive or can get the
source code.  And you must show them these terms so they know their
rights.

  We protect your rights with two steps: (1) copyright the software, and
(2) offer you this license which gives you legal permission to copy,
distribute and/or modify the software.

  Also, for each author\'s protection and ours, we want to make certain
that everyone understands that there is no warranty for this free
software.  If the software is modified by someone else and passed on, we
want its recipients to know that what they have is not the original, so
that any problems introduced by others will not reflect on the original
authors\' reputations.

  Finally, any free program is threatened constantly by software
patents.  We wish to avoid the danger that redistributors of a free
program will individually obtain patent licenses, in effect making the
program proprietary.  To prevent this, we have made it clear that any
patent must be licensed for everyone\'s free use or not licensed at all.

  The precise terms and conditions for copying, distribution and
modification follow.


GNU GENERAL PUBLIC LICENSE
TERMS AND CONDITIONS FOR COPYING, DISTRIBUTION AND MODIFICATION
---------------------------------------------------------------

  0. This License applies to any program or other work which contains
a notice placed by the copyright holder saying it may be distributed
under the terms of this General Public License.  The "Program", below,
refers to any such program or work, and a "work based on the Program"
means either the Program or any derivative work under copyright law:
that is to say, a work containing the Program or a portion of it,
either verbatim or with modifications and/or translated into another
language.  (Hereinafter, translation is included without limitation in
the term "modification".)  Each licensee is addressed as "you".

Activities other than copying, distribution and modification are not
covered by this License; they are outside its scope.  The act of
running the Program is not restricted, and the output from the Program
is covered only if its contents constitute a work based on the
Program (independent of having been made by running the Program).
Whether that is true depends on what the Program does.

  1. You may copy and distribute verbatim copies of the Program\'s
source code as you receive it, in any medium, provided that you
conspicuously and appropriately publish on each copy an appropriate
copyright notice and disclaimer of warranty; keep intact all the
notices that refer to this License and to the absence of any warranty;
and give any other recipients of the Program a copy of this License
along with the Program.

You may charge a fee for the physical act of transferring a copy, and
you may at your option offer warranty protection in exchange for a fee.

  2. You may modify your copy or copies of the Program or any portion
of it, thus forming a work based on the Program, and copy and
distribute such modifications or work under the terms of Section 1
above, provided that you also meet all of these conditions:

    a) You must cause the modified files to carry prominent notices
    stating that you changed the files and the date of any change.

    b) You must cause any work that you distribute or publish, that in
    whole or in part contains or is derived from the Program or any
    part thereof, to be licensed as a whole at no charge to all third
    parties under the terms of this License.

    c) If the modified program normally reads commands interactively
    when run, you must cause it, when started running for such
    interactive use in the most ordinary way, to print or display an
    announcement including an appropriate copyright notice and a
    notice that there is no warranty (or else, saying that you provide
    a warranty) and that users may redistribute the program under
    these conditions, and telling the user how to view a copy of this
    License.  (Exception: if the Program itself is interactive but
    does not normally print such an announcement, your work based on
    the Program is not required to print an announcement.)

These requirements apply to the modified work as a whole.  If
identifiable sections of that work are not derived from the Program,
and can be reasonably considered independent and separate works in
themselves, then this License, and its terms, do not apply to those
sections when you distribute them as separate works.  But when you
distribute the same sections as part of a whole which is a work based
on the Program, the distribution of the whole must be on the terms of
this License, whose permissions for other licensees extend to the
entire whole, and thus to each and every part regardless of who wrote it.

Thus, it is not the intent of this section to claim rights or contest
your rights to work written entirely by you; rather, the intent is to
exercise the right to control the distribution of derivative or
collective works based on the Program.

In addition, mere aggregation of another work not based on the Program
with the Program (or with a work based on the Program) on a volume of
a storage or distribution medium does not bring the other work under
the scope of this License.

  3. You may copy and distribute the Program (or a work based on it,
under Section 2) in object code or executable form under the terms of
Sections 1 and 2 above provided that you also do one of the following:

    a) Accompany it with the complete corresponding machine-readable
    source code, which must be distributed under the terms of Sections
    1 and 2 above on a medium customarily used for software interchange; or,

    b) Accompany it with a written offer, valid for at least three
    years, to give any third party, for a charge no more than your
    cost of physically performing source distribution, a complete
    machine-readable copy of the corresponding source code, to be
    distributed under the terms of Sections 1 and 2 above on a medium
    customarily used for software interchange; or,

    c) Accompany it with the information you received as to the offer
    to distribute corresponding source code.  (This alternative is
    allowed only for noncommercial distribution and only if you
    received the program in object code or executable form with such
    an offer, in accord with Subsection b above.)

The source code for a work means the preferred form of the work for
making modifications to it.  For an executable work, complete source
code means all the source code for all modules it contains, plus any
associated interface definition files, plus the scripts used to
control compilation and installation of the executable.  However, as a
special exception, the source code distributed need not include
anything that is normally distributed (in either source or binary
form) with the major components (compiler, kernel, and so on) of the
operating system on which the executable runs, unless that component
itself accompanies the executable.

If distribution of executable or object code is made by offering
access to copy from a designated place, then offering equivalent
access to copy the source code from the same place counts as
distribution of the source code, even though third parties are not
compelled to copy the source along with the object code.

  4. You may not copy, modify, sublicense, or distribute the Program
except as expressly provided under this License.  Any attempt
otherwise to copy, modify, sublicense or distribute the Program is
void, and will automatically terminate your rights under this License.
However, parties who have received copies, or rights, from you under
this License will not have their licenses terminated so long as such
parties remain in full compliance.

  5. You are not required to accept this License, since you have not
signed it.  However, nothing else grants you permission to modify or
distribute the Program or its derivative works.  These actions are
prohibited by law if you do not accept this License.  Therefore, by
modifying or distributing the Program (or any work based on the
Program), you indicate your acceptance of this License to do so, and
all its terms and conditions for copying, distributing or modifying
the Program or works based on it.

  6. Each time you redistribute the Program (or any work based on the
Program), the recipient automatically receives a license from the
original licensor to copy, distribute or modify the Program subject to
these terms and conditions.  You may not impose any further
restrictions on the recipients\' exercise of the rights granted herein.
You are not responsible for enforcing compliance by third parties to
this License.

  7. If, as a consequence of a court judgment or allegation of patent
infringement or for any other reason (not limited to patent issues),
conditions are imposed on you (whether by court order, agreement or
otherwise) that contradict the conditions of this License, they do not
excuse you from the conditions of this License.  If you cannot
distribute so as to satisfy simultaneously your obligations under this
License and any other pertinent obligations, then as a consequence you
may not distribute the Program at all.  For example, if a patent
license would not permit royalty-free redistribution of the Program by
all those who receive copies directly or indirectly through you, then
the only way you could satisfy both it and this License would be to
refrain entirely from distribution of the Program.

If any portion of this section is held invalid or unenforceable under
any particular circumstance, the balance of the section is intended to
apply and the section as a whole is intended to apply in other
circumstances.

It is not the purpose of this section to induce you to infringe any
patents or other property right claims or to contest validity of any
such claims; this section has the sole purpose of protecting the
integrity of the free software distribution system, which is
implemented by public license practices.  Many people have made
generous contributions to the wide range of software distributed
through that system in reliance on consistent application of that
system; it is up to the author/donor to decide if he or she is willing
to distribute software through any other system and a licensee cannot
impose that choice.

This section is intended to make thoroughly clear what is believed to
be a consequence of the rest of this License.

  8. If the distribution and/or use of the Program is restricted in
certain countries either by patents or by copyrighted interfaces, the
original copyright holder who places the Program under this License
may add an explicit geographical distribution limitation excluding
those countries, so that distribution is permitted only in or among
countries not thus excluded.  In such case, this License incorporates
the limitation as if written in the body of this License.

  9. The Free Software Foundation may publish revised and/or new versions
of the General Public License from time to time.  Such new versions will
be similar in spirit to the present version, but may differ in detail to
address new problems or concerns.

Each version is given a distinguishing version number.  If the Program
specifies a version number of this License which applies to it and "any
later version", you have the option of following the terms and conditions
either of that version or of any later version published by the Free
Software Foundation.  If the Program does not specify a version number of
this License, you may choose any version ever published by the Free Software
Foundation.

  10. If you wish to incorporate parts of the Program into other free
programs whose distribution conditions are different, write to the author
to ask for permission.  For software which is copyrighted by the Free
Software Foundation, write to the Free Software Foundation; we sometimes
make exceptions for this.  Our decision will be guided by the two goals
of preserving the free status of all derivatives of our free software and
of promoting the sharing and reuse of software generally.

NO WARRANTY
-----------

  11. BECAUSE THE PROGRAM IS LICENSED FREE OF CHARGE, THERE IS NO WARRANTY
FOR THE PROGRAM, TO THE EXTENT PERMITTED BY APPLICABLE LAW.  EXCEPT WHEN
OTHERWISE STATED IN WRITING THE COPYRIGHT HOLDERS AND/OR OTHER PARTIES
PROVIDE THE PROGRAM "AS IS" WITHOUT WARRANTY OF ANY KIND, EITHER EXPRESSED
OR IMPLIED, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF
MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE.  THE ENTIRE RISK AS
TO THE QUALITY AND PERFORMANCE OF THE PROGRAM IS WITH YOU.  SHOULD THE
PROGRAM PROVE DEFECTIVE, YOU ASSUME THE COST OF ALL NECESSARY SERVICING,
REPAIR OR CORRECTION.

  12. IN NO EVENT UNLESS REQUIRED BY APPLICABLE LAW OR AGREED TO IN WRITING
WILL ANY COPYRIGHT HOLDER, OR ANY OTHER PARTY WHO MAY MODIFY AND/OR
REDISTRIBUTE THE PROGRAM AS PERMITTED ABOVE, BE LIABLE TO YOU FOR DAMAGES,
INCLUDING ANY GENERAL, SPECIAL, INCIDENTAL OR CONSEQUENTIAL DAMAGES ARISING
OUT OF THE USE OR INABILITY TO USE THE PROGRAM (INCLUDING BUT NOT LIMITED
TO LOSS OF DATA OR DATA BEING RENDERED INACCURATE OR LOSSES SUSTAINED BY
YOU OR THIRD PARTIES OR A FAILURE OF THE PROGRAM TO OPERATE WITH ANY OTHER
PROGRAMS), EVEN IF SUCH HOLDER OR OTHER PARTY HAS BEEN ADVISED OF THE
POSSIBILITY OF SUCH DAMAGES.

---------------------------
END OF TERMS AND CONDITIONS',
    ),
  ),
  'fc9bf744444bedc4eedc0e8107f001ce' => 
  array (
    'criteria' => 
    array (
      'name' => 'modchunk.tpl',
    ),
    'object' => 
    array (
      'id' => 23,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'modchunk.tpl',
      'description' => 'Chunk',
      'editor_type' => 0,
      'category' => 15,
      'cache_type' => 0,
      'snippet' => '<p>Chunk content goes here</p>',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => '',
      'content' => '<p>Chunk content goes here</p>',
    ),
  ),
  '17dcf43764ccfbb55178bbdcf891d4a9' => 
  array (
    'criteria' => 
    array (
      'name' => 'modresource.tpl',
    ),
    'object' => 
    array (
      'id' => 24,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'modresource.tpl',
      'description' => 'Chunk',
      'editor_type' => 0,
      'category' => 15,
      'cache_type' => 0,
      'snippet' => '<p>Content goes here</p>',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => '',
      'content' => '<p>Content goes here</p>',
    ),
  ),
  '393d8ac6ac28ba1fe9067860a236f6d9' => 
  array (
    'criteria' => 
    array (
      'name' => 'modtemplate.tpl',
    ),
    'object' => 
    array (
      'id' => 25,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'modtemplate.tpl',
      'description' => 'Chunk',
      'editor_type' => 0,
      'category' => 15,
      'cache_type' => 0,
      'snippet' => '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <title>[[++site_name]] - [[*pagetitle]]</title>
        <base href="[[++site_url]]"/>
    </head>
    <body>
        [[*content]]
    </body>
</html>',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => '',
      'content' => '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <title>[[++site_name]] - [[*pagetitle]]</title>
        <base href="[[++site_url]]"/>
    </head>
    <body>
        [[*content]]
    </body>
</html>',
    ),
  ),
  'be891ea9e15f56a4770ace9ce77ad3f8' => 
  array (
    'criteria' => 
    array (
      'name' => 'phpfile.php',
    ),
    'object' => 
    array (
      'id' => 26,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'phpfile.php',
      'description' => 'Chunk',
      'editor_type' => 0,
      'category' => 15,
      'cache_type' => 0,
      'snippet' => '<?php
/**
 * [[+elementName]] [[+elementType]] for [[+packageName]] extra
 *
 * Copyright [[+copyright]] by [[+author]] [[+email]]
 * Created on [[+createdon]]
 *
[[+license]]
 *
 * @package [[+packageNameLower]]
 */

/**
 * Description
 * -----------
 * [[+description]]
 *
 * Variables
 * ---------
 * @var $modx modX
 * @var $scriptProperties array
 *
 * @package [[+packageNameLower]]
 **/

',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => '',
      'content' => '<?php
/**
 * [[+elementName]] [[+elementType]] for [[+packageName]] extra
 *
 * Copyright [[+copyright]] by [[+author]] [[+email]]
 * Created on [[+createdon]]
 *
[[+license]]
 *
 * @package [[+packageNameLower]]
 */

/**
 * Description
 * -----------
 * [[+description]]
 *
 * Variables
 * ---------
 * @var $modx modX
 * @var $scriptProperties array
 *
 * @package [[+packageNameLower]]
 **/

',
    ),
  ),
  'ee0934cf9028e88ab94b759d38c36c7e' => 
  array (
    'criteria' => 
    array (
      'name' => 'pluginresolver.php',
    ),
    'object' => 
    array (
      'id' => 27,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'pluginresolver.php',
      'description' => 'Chunk',
      'editor_type' => 0,
      'category' => 15,
      'cache_type' => 0,
      'snippet' => '<?php
/**
* Resolver to connect plugins to system events for [[+packageName]] extra
*
* Copyright [[+copyright]] by [[+author]] [[+email]]
* Created on [[+createdon]]
*
[[+license]]
* @package [[+packageNameLower]]
* @subpackage build
*/
/* @var $object xPDOObject */
/* @var $pluginObj modPlugin */
/* @var $mpe modPluginEvent */
/* @var xPDOObject $object */
/* @var array $options */
/* @var $modx modX */
/* @var $pluginObj modPlugin */
/* @var $pluginEvent modPluginEvent */
/* @var $newEvents array */

if (!function_exists(\'checkFields\')) {
    function checkFields($required, $objectFields) {

        global $modx;
        $fields = explode(\',\', $required);
        foreach ($fields as $field) {
            if (!isset($objectFields[$field])) {
                $modx->log(modX::LOG_LEVEL_ERROR, \'[Plugin Resolver] Missing field: \' . $field);
                return false;
            }
        }
        return true;
    }
}


$newEvents = \'[[+newEvents]]\';


if ($object->xpdo) {
    $modx =& $object->xpdo;
    switch ($options[xPDOTransport::PACKAGE_ACTION]) {
        case xPDOTransport::ACTION_INSTALL:
        case xPDOTransport::ACTION_UPGRADE:

            foreach($newEvents as $k => $fields) {

                $event = $modx->getObject(\'modEvent\', array(\'name\' => $fields[\'name\']));
                if (!$event) {
                    $event = $modx->newObject(\'modEvent\');
                    if ($event) {
                        $event->fromArray($fields, "", true, true);
                        $event->save();
                    }
                }
            }

            $intersects = \'[[+intersects]]\';

            if (is_array($intersects)) {
                foreach ($intersects as $k => $fields) {
                    /* make sure we have all fields */
                    if (!checkFields(\'pluginid,event,priority,propertyset\', $fields)) {
                        continue;
                    }
                    $event = $modx->getObject(\'modEvent\', array(\'name\' => $fields[\'event\']));

                    $plugin = $modx->getObject(\'modPlugin\', array(\'name\' => $fields[\'pluginid\']));
                    $propertySetObj = null;
                    if (!empty($fields[\'propertyset\'])) {
                        $propertySetObj = $modx->getObject(\'modPropertySet\',
                            array(\'name\' => $fields[\'propertyset\']));
                    }
                    if (!$plugin || !$event) {
                        $modx->log(xPDO::LOG_LEVEL_ERROR, \'Could not find Plugin and/or Event \' .
                            $fields[\'plugin\'] . \' - \' . $fields[\'event\']);
                        continue;
                    }
                    $pluginEvent = $modx->getObject(\'modPluginEvent\', array(\'pluginid\'=>$plugin->get(\'id\'),\'event\' => $fields[\'event\']) );
                    
                    if (!$pluginEvent) {
                        $pluginEvent = $modx->newObject(\'modPluginEvent\');
                    }
                    if ($pluginEvent) {
                        $pluginEvent->set(\'event\', $fields[\'event\']);
                        $pluginEvent->set(\'pluginid\', (integer) $plugin->get(\'id\'));
                        $pluginEvent->set(\'priority\', (integer) $fields[\'priority\']);
                        if ($propertySetObj) {
                            $pluginEvent->set(\'propertyset\', (integer) $propertySetObj->get(\'id\'));
                        } else {
                            $pluginEvent->set(\'propertyset\', 0);
                        }

                    }
                    if (! $pluginEvent->save()) {
                        $modx->log(xPDO::LOG_LEVEL_ERROR, \'Unknown error saving pluginEvent for \' .
                            $fields[\'plugin\'] . \' - \' . $fields[\'event\']);
                    }
                }
            }
            break;

        case xPDOTransport::ACTION_UNINSTALL:
            foreach($newEvents as $k => $fields) {
                $event = $modx->getObject(\'modEvent\', array(\'name\' => $fields[\'name\']));
                if ($event) {
                    $event->remove();
                }
            }
            break;
    }
}

return true;',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => '',
      'content' => '<?php
/**
* Resolver to connect plugins to system events for [[+packageName]] extra
*
* Copyright [[+copyright]] by [[+author]] [[+email]]
* Created on [[+createdon]]
*
[[+license]]
* @package [[+packageNameLower]]
* @subpackage build
*/
/* @var $object xPDOObject */
/* @var $pluginObj modPlugin */
/* @var $mpe modPluginEvent */
/* @var xPDOObject $object */
/* @var array $options */
/* @var $modx modX */
/* @var $pluginObj modPlugin */
/* @var $pluginEvent modPluginEvent */
/* @var $newEvents array */

if (!function_exists(\'checkFields\')) {
    function checkFields($required, $objectFields) {

        global $modx;
        $fields = explode(\',\', $required);
        foreach ($fields as $field) {
            if (!isset($objectFields[$field])) {
                $modx->log(modX::LOG_LEVEL_ERROR, \'[Plugin Resolver] Missing field: \' . $field);
                return false;
            }
        }
        return true;
    }
}


$newEvents = \'[[+newEvents]]\';


if ($object->xpdo) {
    $modx =& $object->xpdo;
    switch ($options[xPDOTransport::PACKAGE_ACTION]) {
        case xPDOTransport::ACTION_INSTALL:
        case xPDOTransport::ACTION_UPGRADE:

            foreach($newEvents as $k => $fields) {

                $event = $modx->getObject(\'modEvent\', array(\'name\' => $fields[\'name\']));
                if (!$event) {
                    $event = $modx->newObject(\'modEvent\');
                    if ($event) {
                        $event->fromArray($fields, "", true, true);
                        $event->save();
                    }
                }
            }

            $intersects = \'[[+intersects]]\';

            if (is_array($intersects)) {
                foreach ($intersects as $k => $fields) {
                    /* make sure we have all fields */
                    if (!checkFields(\'pluginid,event,priority,propertyset\', $fields)) {
                        continue;
                    }
                    $event = $modx->getObject(\'modEvent\', array(\'name\' => $fields[\'event\']));

                    $plugin = $modx->getObject(\'modPlugin\', array(\'name\' => $fields[\'pluginid\']));
                    $propertySetObj = null;
                    if (!empty($fields[\'propertyset\'])) {
                        $propertySetObj = $modx->getObject(\'modPropertySet\',
                            array(\'name\' => $fields[\'propertyset\']));
                    }
                    if (!$plugin || !$event) {
                        $modx->log(xPDO::LOG_LEVEL_ERROR, \'Could not find Plugin and/or Event \' .
                            $fields[\'plugin\'] . \' - \' . $fields[\'event\']);
                        continue;
                    }
                    $pluginEvent = $modx->getObject(\'modPluginEvent\', array(\'pluginid\'=>$plugin->get(\'id\'),\'event\' => $fields[\'event\']) );
                    
                    if (!$pluginEvent) {
                        $pluginEvent = $modx->newObject(\'modPluginEvent\');
                    }
                    if ($pluginEvent) {
                        $pluginEvent->set(\'event\', $fields[\'event\']);
                        $pluginEvent->set(\'pluginid\', (integer) $plugin->get(\'id\'));
                        $pluginEvent->set(\'priority\', (integer) $fields[\'priority\']);
                        if ($propertySetObj) {
                            $pluginEvent->set(\'propertyset\', (integer) $propertySetObj->get(\'id\'));
                        } else {
                            $pluginEvent->set(\'propertyset\', 0);
                        }

                    }
                    if (! $pluginEvent->save()) {
                        $modx->log(xPDO::LOG_LEVEL_ERROR, \'Unknown error saving pluginEvent for \' .
                            $fields[\'plugin\'] . \' - \' . $fields[\'event\']);
                    }
                }
            }
            break;

        case xPDOTransport::ACTION_UNINSTALL:
            foreach($newEvents as $k => $fields) {
                $event = $modx->getObject(\'modEvent\', array(\'name\' => $fields[\'name\']));
                if ($event) {
                    $event->remove();
                }
            }
            break;
    }
}

return true;',
    ),
  ),
  '3bb7dbe1331efdb5a8f4296b0f01274a' => 
  array (
    'criteria' => 
    array (
      'name' => 'build.config.php',
    ),
    'object' => 
    array (
      'id' => 28,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'build.config.php',
      'description' => 'Chunk',
      'editor_type' => 0,
      'category' => 15,
      'cache_type' => 0,
      'snippet' => '<?php

  /* next line require only for operating outside of MODX
    Create a file outside of the MODX web root with this content:
     <?php
     $fields = array();
     $fields[\'username\'] = \'your_MODX_username\';
     $fields[\'password\'] = \'your_MODX_password\';
     $fields[\'login_context\'] = \'mgr\';
     $fields[\'add_contexts\'] = \'mgr\';

     Put the full path to the file in the next line
  */


/* Define the MODX path constants necessary for connecting to your core and other directories.
 * If you have not moved the core, the current values should work.
 * In some cases, you may have to hard-code the full paths */
if (!defined(\'MODX_CORE_PATH\')) {
    define(\'MODX_CORE_PATH\', dirname(dirname(dirname(dirname(dirname(__FILE__))))) . \'/core/\');
    define(\'MODX_BASE_PATH\', dirname(dirname(dirname(dirname(dirname(__FILE__))))) . \'/\');
    define(\'MODX_MANAGER_PATH\', MODX_BASE_PATH . \'manager/\');
    define(\'MODX_CONNECTORS_PATH\', MODX_BASE_PATH . \'connectors/\');
    define(\'MODX_ASSETS_PATH\', MODX_BASE_PATH . \'assets/\');
}

/* not used -- here to prevent E_NOTICE warnings */
if (!defined(\'MODX_BASE_URL\')) {
    define(\'MODX_BASE_URL\', \'http://localhost/addons/\');
    define(\'MODX_MANAGER_URL\', \'http://localhost/addons/manager/\');
    define(\'MODX_ASSETS_URL\', \'http://localhost/addons/assets/\');
    define(\'MODX_CONNECTORS_URL\', \'http://localhost/addons/connectors/\');
}

',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => '',
      'content' => '<?php

  /* next line require only for operating outside of MODX
    Create a file outside of the MODX web root with this content:
     <?php
     $fields = array();
     $fields[\'username\'] = \'your_MODX_username\';
     $fields[\'password\'] = \'your_MODX_password\';
     $fields[\'login_context\'] = \'mgr\';
     $fields[\'add_contexts\'] = \'mgr\';

     Put the full path to the file in the next line
  */


/* Define the MODX path constants necessary for connecting to your core and other directories.
 * If you have not moved the core, the current values should work.
 * In some cases, you may have to hard-code the full paths */
if (!defined(\'MODX_CORE_PATH\')) {
    define(\'MODX_CORE_PATH\', dirname(dirname(dirname(dirname(dirname(__FILE__))))) . \'/core/\');
    define(\'MODX_BASE_PATH\', dirname(dirname(dirname(dirname(dirname(__FILE__))))) . \'/\');
    define(\'MODX_MANAGER_PATH\', MODX_BASE_PATH . \'manager/\');
    define(\'MODX_CONNECTORS_PATH\', MODX_BASE_PATH . \'connectors/\');
    define(\'MODX_ASSETS_PATH\', MODX_BASE_PATH . \'assets/\');
}

/* not used -- here to prevent E_NOTICE warnings */
if (!defined(\'MODX_BASE_URL\')) {
    define(\'MODX_BASE_URL\', \'http://localhost/addons/\');
    define(\'MODX_MANAGER_URL\', \'http://localhost/addons/manager/\');
    define(\'MODX_ASSETS_URL\', \'http://localhost/addons/assets/\');
    define(\'MODX_CONNECTORS_URL\', \'http://localhost/addons/connectors/\');
}

',
    ),
  ),
  '2cb025757eba80b15b6daae968af64bf' => 
  array (
    'criteria' => 
    array (
      'name' => 'build.transport.php',
    ),
    'object' => 
    array (
      'id' => 29,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'build.transport.php',
      'description' => 'Chunk',
      'editor_type' => 0,
      'category' => 15,
      'cache_type' => 0,
      'snippet' => '<?php
/**
 * Important: You should almost never need to edit this file,
 * except to add components that it won\'t handle (e.g., permissions,
 * users, policies, policy templates, ACL entries, and Form
 * Customization rules), and most of those might better be handled
 * in a script resolver, which you can add without editing this file.
 *
 * Important note: MyComponent never updates this file, so any changes
 * you make will be permanent.
 *
 * Build Script for MyComponent extra
 *
 * Copyright 2012-2013 by Bob Ray <http://bobsguides.com>
 * Created on 10-23-2012
 *
 * MyComponent is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * MyComponent is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * MyComponent; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package mycomponent
 * @subpackage build
 */

/**
 * This is the template for the build script, which creates the
 * transport.zip file for your extra.
 *

 */
/* See the tutorial at http://http://bobsguides.com/mycomponent-tutorial.html
 * for more detailed information about using the package.
 */

/* config file must be retrieved in a class */
if (!class_exists(\'BuildHelper\')) {
    class BuildHelper {
        /** @var $modx modX */
        protected $modx;

        /** @var $files array - array of files; created by dir_walk */
        protected $files = array();

        /** @var $props array - properties array */
        protected $props = array();

        public function __construct(&$modx) {
            /* @var $modx modX */
            $this->modx =& $modx;
        }

        public function getProps($configPath) {
            $properties = @include $configPath;
            $this->props = $properties;
            return $properties;
        }

        public function sendLog($level, $message) {
            $msg = \'\';
            if ($level == modX::LOG_LEVEL_ERROR) {
                $msg .= $this->modx->lexicon(\'mc_error\')
                    . \' -- \';
            }
            $msg .= $message;
            $msg .= "\\n";
            if (php_sapi_name() != \'cli\') {
                $msg = nl2br($msg);
            }
            echo $msg;
        }

        /**
         * Recursively search directories for certain file types
         * Adapted from boen dot robot at gmail dot com\'s code on the scandir man page
         * @param $dir - dir to search (no trailing slash)
         * @param mixed $types - null for all files, or a comma-separated list of strings
         *                       the filename must include (e.g., \'.php,.class\')
         * @param bool $recursive - if false, only searches $dir, not it\'s descendants
         * @param string $baseDir - used internally -- do not send
         */
        public function dirWalk($dir, $types = null, $recursive = false, $baseDir = \'\') {

            if ($dh = opendir($dir)) {
                while (($file = readdir($dh)) !== false) {
                    if ($file === \'.\' || $file === \'..\') {
                        continue;
                    }
                    // $this->output .= "\\n" , $dir;
                    //$this->output .= "\\n", $file;
                    if (is_file($dir . \'/\' . $file)) {
                        if ($types !== null) {
                            $found = false;
                            $typeArray = explode(\',\', $types);
                            foreach ($typeArray as $type) {
                                if (strstr($file, $type)) {
                                    $found = true;
                                }
                            }
                            if (!$found) continue;
                        }
                        // $this->{$callback}($dir, $file);
                        $this->addFile($dir, $file);
                    } elseif ($recursive && is_dir($dir . \'/\' . $file)) {
                        $this->dirWalk($dir . \'/\' . $file, $types, $recursive, $baseDir . \'/\' . $file);
                    }
                }
                closedir($dh);
            }
        }

        /**
         * Used by dirWalk() to add files to $this->files
         * @param $dir string - directory of file (no trailing slash)
         * @param $file string - filename of file
         */
        public function addFile($dir, $file) {
            $this->files[$file] = $dir;
        }

        /**
         * Empties $this->files prior to dirWalk
         */
        public function resetFiles() {
            $this->files = array();
        }

        /**
         * Get files found by dirWalk
         *
         * @return array
         */
        public function getFiles() {
            return $this->files;
        }

        /**
         * @param $minimizerFile string - Which minimizer: JSMinPlus or JSMin
         * @param $dir string - dir to search (no trailing slash)
         * @param bool $createJsAll - If true, create packageNameLower . \'-all-min.js\'
         */
        public function mc_minify($minimizerFile, $dir, $createJsAll = false) {
            $dir = rtrim($dir, \'/\');
            $this->resetFiles();
            $all = \'\';
            $this->dirWalk($dir , \'.js\', true);
            $usePlus = stripos($minimizerFile, \'plus\') !== false;
            $minClass = $usePlus? \'JSMinPlus\' : \'JSMin\';
            $files = $this->getFiles();
            require dirname(__FILE__) . \'/utilities/\' . $minimizerFile;

            $this->sendLog(modX::LOG_LEVEL_INFO,
                $this->modx->lexicon(\'mc_creating_js_min_files\') .
                \' (\' . $this->modx->lexicon(\'mc_using\') .
                \' \' . $minClass . \')\');

            foreach ($files as $fileName => $path) {
                /* don\'t minify minimized files */
                if (strpos($fileName, \'min.js\') !== false) {
                    continue;
                }
                $code = file_get_contents($path . \'/\' . $fileName);
                $code = $usePlus
                    ? $minClass::minify($code, $fileName)
                    : $minClass::minify($code);
                if ($createJsAll) {
                    /* JSMin writes its own "\\n" */
                    $jend = $usePlus? "\\n" : \'\';
                    /* Add filename in comment for debugging */
                    $all .= "\\n/* " . $fileName . \'*/\' . $jend . $code;
                }

                $outFile = $path . \'/\' . str_ireplace(\'.js\', \'-min.js\', $fileName);
                $fp = fopen($outFile, \'w\');
                if ($fp) {
                    fwrite($fp, $code);
                    fclose($fp);
                    $this->sendLog(modX::LOG_LEVEL_INFO,
                        $this->modx->lexicon(\'mc_updated\')
                        . \': \' . $outFile);
                } else {
                    $this->sendLog(modX::LOG_LEVEL_ERROR,
                        $this->modx->lexicon(\'mc_could_not_open\')
                        . \': \' . $outFile);
                }
            }
            if ($createJsAll) {
                $pnl = $this->modx->getOption(\'packageNameLower\', $this->props, \'jsfile\');
                $allFile = $pnl . \'-all-min.js\';
                $outFile = $dir . \'/\' . $allFile;
                $fp = fopen($outFile, \'w\');
                if ($fp) {
                    fwrite($fp, $all);
                    $this->sendLog(modX::LOG_LEVEL_INFO,
                        $this->modx->lexicon(\'mc_updated\')
                        . \': \' . $outFile);
                    fclose($fp);
                } else {
                    $this->sendLog(modX::LOG_LEVEL_ERROR,
                        $this->modx->lexicon(\'mc_could_not_open\')
                        . \': \' . $outFile);
                }
            }
        }
    }
}

/* set start time */
$mtime = microtime();
$mtime = explode(" ", $mtime);
$mtime = $mtime[1] + $mtime[0];
$tstart = $mtime;
set_time_limit(0);


/* Instantiate MODx -- if this require fails, check your
 * _build/build.config.php file
 */
require_once dirname(dirname(__FILE__)) . \'/_build/build.config.php\';

if ( (! isset($modx)) || (! $modx instanceof modX) ) {
    require_once MODX_CORE_PATH . \'model/modx/modx.class.php\';
    $modx = new modX();
    $modx->initialize(\'mgr\');
    $modx->getService(\'error\', \'error.modError\', \'\', \'\');
}
$modx->lexicon->load(\'mycomponent:default\');
$modx->setLogLevel(xPDO::LOG_LEVEL_INFO);
$modx->setLogTarget(XPDO_CLI_MODE
    ? \'ECHO\'
    : \'HTML\');

if (!defined(\'MODX_CORE_PATH\')) {
    session_write_close();
    die(\'build.config.php is not correct\');
}

@include dirname(__FILE__) . \'/config/current.project.php\';

if (!$currentProject) {
    session_write_close();
    die(\'Could not get current project\');
}

$helper = new BuildHelper($modx);

$modx->lexicon->load(\'mycomponent:default\');

$props = $helper->getProps(dirname(__FILE__) . \'/config/\' . $currentProject . \'.config.php\');

if (!is_array($props)) {
    session_write_close();
    die($modx->lexicon(\'mc_no_config_file\'));
}

$criticalSettings = array(
    \'packageNameLower\',
    \'packageName\',
    \'version\',
    \'release\'
);

foreach ($criticalSettings as $setting) {
    if (!isset($setting)) {
        session_write_close();
        die($modx->lexicon(\'mc_critical_setting_not_set\')
            . \': \' . $setting);
    }
}


if (strpos($props[\'packageNameLower\'], \'-\') || strpos($props[\'packageNameLower\'], \' \')) {
    session_write_close();
    die ($modx->lexicon("mc_space_hyphen_warning"));
}
/* Set package info. These are initially set from the the the project config
 * but feel free to hard-code them for future versions */

define(\'PKG_NAME\', $props[\'packageName\']);
define(\'PKG_NAME_LOWER\', $props[\'packageNameLower\']);
define(\'PKG_VERSION\', $props[\'version\']);
define(\'PKG_RELEASE\', $props[\'release\']);


/* define sources */
$root = dirname(dirname(__FILE__)) . \'/\';
$sources = array(
    \'root\' => $root,
    \'build\' => $root . \'_build/\',
    \'config\' => $root . \'_build/config/\',
    \'utilities\' => $root . \'_build/utilities/\',
    /* note that the next two must not have a trailing slash */
    \'source_core\' => $root . \'core/components/\' . PKG_NAME_LOWER,
    \'source_assets\' => $root . \'assets/components/\' . PKG_NAME_LOWER,
    \'resolvers\' => $root . \'_build/resolvers/\',
    \'validators\' => $root . \'_build/validators/\',
    \'data\' => $root . \'_build/data/\',
    \'docs\' => $root . \'core/components/\' . PKG_NAME_LOWER . \'/docs/\',
    \'install_options\' => $root . \'_build/install.options/\',
    \'subpackages\' => $root . \'_build/subpackages/\',

);
unset($root);


$categories = include $sources[\'build\'] . \'config/categories.php\';

if (empty ($categories) || (!is_array($categories))) {
    session_write_close();
    die ($modx->lexicon(\'no_categories\'));
}

/* Set package options - you can set these manually, but it\'s
 * recommended to let them be generated automatically
 */

$hasAssets = is_dir($sources[\'source_assets\']); /* Transfer the files in the assets dir. */
$hasCore = is_dir($sources[\'source_core\']); /* Transfer the files in the core dir. */

$hasContexts = file_exists($sources[\'data\'] . \'transport.contexts.php\');
$hasResources = file_exists($sources[\'data\'] . \'transport.resources.php\');
$hasValidators = is_dir($sources[\'build\'] . \'validators\'); /* Run a validators before installing anything */
$hasResolvers = is_dir($sources[\'build\'] . \'resolvers\');
$hasSetupOptions = is_dir($sources[\'install_options\']); /* HTML/PHP script to interact with user */
$hasMenu = file_exists($sources[\'data\'] . \'transport.menus.php\'); /* Add items to the MODx Top Menu */
$hasSettings = file_exists($sources[\'data\'] . \'transport.settings.php\'); /* Add new MODx System Settings */
$hasContextSettings = file_exists($sources[\'data\'] . \'transport.contextsettings.php\');
$hasSubPackages = is_dir($sources[\'subpackages\']);
$minifyJS = $modx->getOption(\'minifyJS\', $props, false);

$helper->sendLog(modX::LOG_LEVEL_INFO, "\\n" . $modx->lexicon(\'mc_project\')
    . \': \' . $currentProject);
$helper->sendLog(modX::LOG_LEVEL_INFO, $modx->lexicon(\'mc_action\')
    . \': \' . $modx->lexicon(\'mc_build\')
);
$helper->sendLog(modX::LOG_LEVEL_INFO, $modx->lexicon(\'mc_created_package\')
    . \': \' . PKG_NAME_LOWER . \'-\' . PKG_VERSION . \'-\' . PKG_RELEASE);
$helper->sendLog(modX::LOG_LEVEL_INFO, "\\n" . $modx->lexicon(\'mc_created_namespace\')
    . \': \' . PKG_NAME_LOWER);
/* load builder */
$modx->setLogLevel(modX::LOG_LEVEL_ERROR);
$modx->loadClass(\'transport.modPackageBuilder\', \'\', false, true);
$builder = new modPackageBuilder($modx);
$builder->createPackage(PKG_NAME_LOWER, PKG_VERSION, PKG_RELEASE);

$assetsPath = $hasAssets
    ? \'{assets_path}components/\' . PKG_NAME_LOWER . \'/\'
    : \'\';
$builder->registerNamespace(PKG_NAME_LOWER, false, true, \'{core_path}components/\' . PKG_NAME_LOWER . \'/\', $assetsPath);
$modx->setLogLevel(modX::LOG_LEVEL_INFO);

/* Transport Contexts */

if ($hasContexts) {
    $contexts = include $sources[\'data\'] . \'transport.contexts.php\';
    if (!is_array($contexts)) {
        $helper->sendLog(modX::LOG_LEVEL_ERROR, $modx->lexicon(\'mc_contexts_not_an_array\'));
    } else {
        $attributes = array(
            xPDOTransport::UNIQUE_KEY => \'key\',
            xPDOTransport::PRESERVE_KEYS => true,
            xPDOTransport::UPDATE_OBJECT => true,
        );
        foreach ($contexts as $context) {
            $vehicle = $builder->createVehicle($context, $attributes);
            $builder->putVehicle($vehicle);
        }
        $helper->sendLog(modX::LOG_LEVEL_INFO, $modx->lexicon(\'mc_packaged\')
            . \' \' .
            count($contexts) . \' \' . $modx->lexicon(\'mc_new_contexts\')
            . \'.\');
        unset($contexts, $context, $attributes);
    }
}


/* Transport Resources */

if ($hasResources) {
    $resources = include $sources[\'data\'] . \'transport.resources.php\';
    if (!is_array($resources)) {
        $helper->sendLog(modX::LOG_LEVEL_ERROR, $modx->lexicon(\'mc_resources_not_an_array\')
            . \'.\');
    } else {
        $attributes = array(
            xPDOTransport::PRESERVE_KEYS => false,
            xPDOTransport::UPDATE_OBJECT => true,
            xPDOTransport::UNIQUE_KEY => \'pagetitle\',
            xPDOTransport::RELATED_OBJECTS => true,
            xPDOTransport::RELATED_OBJECT_ATTRIBUTES => array(
                \'ContentType\' => array(
                    xPDOTransport::PRESERVE_KEYS => false,
                    xPDOTransport::UPDATE_OBJECT => true,
                    xPDOTransport::UNIQUE_KEY => \'name\',
                ),
            ),
        );
        foreach ($resources as $resource) {
            $vehicle = $builder->createVehicle($resource, $attributes);
            $builder->putVehicle($vehicle);
        }
        $helper->sendLog(modX::LOG_LEVEL_INFO, $modx->lexicon(\'mc_packaged\')
            . \' \' . count($resources) . \' \' . $modx->lexicon(\'mc_resources\')
            . \'.\');
    }
    unset($resources, $resource, $attributes);
}

/* load new system settings */
if ($hasSettings) {
    $settings = include $sources[\'data\'] . \'transport.settings.php\';
    if (!is_array($settings)) {
        $helper->sendLog(modX::LOG_LEVEL_ERROR, $modx->lexicon(\'mc_settings_not_an_array\')
            . \'.\');
    } else {
        $attributes = array(
            xPDOTransport::UNIQUE_KEY => \'key\',
            xPDOTransport::PRESERVE_KEYS => true,
            xPDOTransport::UPDATE_OBJECT => false,
        );
        foreach ($settings as $setting) {
            $vehicle = $builder->createVehicle($setting, $attributes);
            $builder->putVehicle($vehicle);
        }
        $helper->sendLog(modX::LOG_LEVEL_INFO, $modx->lexicon(\'mc_packaged\')
            . \' \' . count($settings) .
            \' \' . $modx->lexicon(\'mc_new_system_settings\')
            . \'.\');
        unset($settings, $setting, $attributes);
    }
}

/* load new context settings */
if ($hasContextSettings) {
    $settings = include $sources[\'data\'] . \'transport.contextsettings.php\';
    if (!is_array($settings)) {
        $helper->sendLog(modX::LOG_LEVEL_ERROR, $modx->lexicon(\'mc_context_settings_not_an_array\')
            . \'.\');
    } else {
        $attributes = array(
            xPDOTransport::UNIQUE_KEY => \'key\',
            xPDOTransport::PRESERVE_KEYS => true,
            xPDOTransport::UPDATE_OBJECT => false,
        );
        foreach ($settings as $setting) {
            $vehicle = $builder->createVehicle($setting, $attributes);
            $builder->putVehicle($vehicle);
        }
        $helper->sendLog(modX::LOG_LEVEL_INFO, $modx->lexicon(\'mc_packaged\')
            . \' \' . count($settings) .
            \' \' . $modx->lexicon(\'mc_context_settings\')
            . \'.\');
        unset($settings, $setting, $attributes);
    }
}

/* minify JS */

if ($minifyJS) {
    $helper->sendLog(modX::LOG_LEVEL_INFO, \'Creating js-min file(s)\');

    $usePlus = $modx->getOption(\'useJSMinPlus\', $props, false);
    $minimizer = $usePlus? \'jsminplus.class.php\' : \'jsmin.class.php\';
    $dir = $sources[\'source_assets\'] . \'/js\';
    $jsAll = $modx->getOption(\'createJSMinAll\', $props, false);
    $helper->mc_minify($minimizer, $dir, $jsAll);
}

/* Create each Category and its Elements */

$i = 0;
$count = count($categories);

foreach ($categories as $k => $categoryName) {
    /* @var $categoryName string */
    $categoryNameLower = strtolower($categoryName);

    /* See what we have based on the files */
    $hasSnippets = file_exists($sources[\'data\'] . $categoryNameLower . \'/transport.snippets.php\');
    $hasChunks = file_exists($sources[\'data\'] . $categoryNameLower . \'/transport.chunks.php\');
    $hasTemplates = file_exists($sources[\'data\'] . $categoryNameLower . \'/transport.templates.php\');
    $hasTemplateVariables = file_exists($sources[\'data\'] . $categoryNameLower . \'/transport.tvs.php\');
    $hasPlugins = file_exists($sources[\'data\'] . $categoryNameLower . \'/transport.plugins.php\');
    $hasPropertySets = file_exists($sources[\'data\'] . $categoryNameLower . \'/transport.propertysets.php\');

    /* @var $category modCategory */
    $category = $modx->newObject(\'modCategory\');
    $i++; /* will be 1 for the first category */
    $category->set(\'id\', $i);
    $category->set(\'category\', $categoryName);
    $helper->sendLog(modX::LOG_LEVEL_INFO,
        $modx->lexicon(\'mc_creating_category\')
            . \': \' . $categoryName);
    $helper->sendLog(modX::LOG_LEVEL_INFO, $modx->lexicon(\'mc_processing_elements_in_category\')
        . \': \' . $categoryName);

    /* add snippets */
    if ($hasSnippets) {

        $snippets = include $sources[\'data\'] . $categoryNameLower  . \'/transport.snippets.php\';

        /* note: Snippets\' default properties are set in transport.snippets.php */
        if (is_array($snippets)) {
            if ($category->addMany($snippets, \'Snippets\')) {
                $helper->sendLog(modX::LOG_LEVEL_INFO, \'    \' .
                    $modx->lexicon(\'mc_packaged\')
                    . \' \' . count($snippets) . \' \' .
                    $modx->lexicon(\'mc_snippets\')
                    . \'.\');
            } else {
                $helper->sendLog(modX::LOG_LEVEL_FATAL, \'    \' . $modx->lexicon(\'mc_adding_snippets_failed\')
                    . \'.\');
            }
        } else {
            $helper->sendLog(modX::LOG_LEVEL_FATAL, \'    \' .
                $modx->lexicon(\'mc_non_array_in\')
                . \' transport.snippets.php\');
        }
    }

    if ($hasPropertySets) {
        $propertySets = include $sources[\'data\'] . $categoryNameLower .\'/transport.propertysets.php\';
        //  note: property set\' properties are set in transport.propertysets.php
        if (is_array($propertySets)) {
            if ($category->addMany($propertySets, \'PropertySets\')) {
                $helper->sendLog(modX::LOG_LEVEL_INFO, \'    \' .
                    $modx->lexicon(\'mc_packaged\')
                    . \' \' . count($propertySets) . \' \' .
                    $modx->lexicon(\'mc_property_sets\')
                    . \'.\');
            } else {
                $helper->sendLog(modX::LOG_LEVEL_FATAL, \'    \' .
                    $modx->lexicon(\'mc_adding_property_sets_failed\')
                    . \'.\');
            }
        } else {
            $helper->sendLog(modX::LOG_LEVEL_FATAL, \'    \' . $modx->lexicon(\'mc_non_array_in\')
                . \' transport.propertysets.php\');
        }
    }
    if ($hasChunks) { /* add chunks  */
        $helper->sendLog(modX::LOG_LEVEL_INFO, \'Adding Chunks.\');
        /* note: Chunks\' default properties are set in transport.chunks.php */
        $chunks = include $sources[\'data\'] . $categoryNameLower .\'/transport.chunks.php\';
        if (is_array($chunks)) {
            if ($category->addMany($chunks, \'Chunks\')) {
                $helper->sendLog(modX::LOG_LEVEL_INFO, \'    \' .
                    $modx->lexicon(\'mc_packaged\')
                    . \' \' . count($chunks) . \' \' .
                    $modx->lexicon(\'mc_chunks\')
                    . \'.\');
            } else {
                $helper->sendLog(modX::LOG_LEVEL_FATAL, \'    \' .
                    $modx->lexicon(\'mc_adding_chunks_failed\')
                    . \'.\');
            }
        } else {
            $helper->sendLog(modX::LOG_LEVEL_FATAL, \'    \' .
                $modx->lexicon(\'mc_non_array_in\')
                . \' transport.chunks.php\');
        }
    }


    if ($hasTemplates) { /* add templates  */
        $helper->sendLog(modX::LOG_LEVEL_INFO,
            $modx->lexicon(\'mc_adding_templates\')
                . \'.\');
        /* note: Templates\' default properties are set in transport.templates.php */
        $templates = include $sources[\'data\'] . $categoryNameLower .\'/transport.templates.php\';
        if (is_array($templates)) {
            if ($category->addMany($templates, \'Templates\')) {
                $helper->sendLog(modX::LOG_LEVEL_INFO, \'    \' .
                    $modx->lexicon(\'mc_packaged\')
                    . \' \' . count($templates) . \' \' .
                    $modx->lexicon(\'mc_templates\')
                    . \'.\');
            } else {
                $helper->sendLog(modX::LOG_LEVEL_FATAL, \'    \' .
                    $modx->lexicon(\'mc_adding_templates_failed\')
                    . \'.\');
            }
        } else {
            $helper->sendLog(modX::LOG_LEVEL_FATAL, \'    \' .
                $modx->lexicon(\'mc_non_array_in\')
                . \' transport.templates.php\');
        }
    }

    if ($hasTemplateVariables) { /* add template variables  */
        $helper->sendLog(modX::LOG_LEVEL_INFO,
            $modx->lexicon(\'mc_adding_template_variables\')
                . \'.\');
        /* note: Template Variables\' default properties are set in transport.tvs.php */
        $tvs = include $sources[\'data\'] . $categoryNameLower .\'/transport.tvs.php\';
        if (is_array($tvs)) {
            if ($category->addMany($tvs, \'TemplateVars\')) {
                $helper->sendLog(modX::LOG_LEVEL_INFO, \'    \' .
                    $modx->lexicon(\'mc_packaged\')
                    . \' \' . count($tvs) . \' \' .
                    $modx->lexicon(\'mc_tvs\')
                    . \'.\');
            } else {
                $helper->sendLog(modX::LOG_LEVEL_FATAL, \'    \' .
                    $modx->lexicon(\'mc_adding_tvs_failed\')
                    . \'.\');
            }
        } else {
            $helper->sendLog(modX::LOG_LEVEL_FATAL, \'    \' .
                $modx->lexicon(\'mc_non_array_in\')
                . \' transport.tvs.php\');
        }
    }


    if ($hasPlugins) {
        /* Plugins\' default properties are set in transport.plugins.php */
        $plugins = include $sources[\'data\'] . $categoryNameLower . \'/transport.plugins.php\';
        if (is_array($plugins)) {
            if ($category->addMany($plugins, \'Plugins\')) {
                $helper->sendLog(modX::LOG_LEVEL_INFO, \'    \' .
                    $modx->lexicon(\'mc_packaged\')
                    . \' \' . count($plugins) . \' \' .
                    $modx->lexicon(\'mc_plugins\')
                    . \'.\');
            } else {
                $helper->sendLog(modX::LOG_LEVEL_FATAL, \'    \' .
                    $modx->lexicon(\'mc_adding_plugins_failed\')
                    . \'.\');
            }
        } else {
            $helper->sendLog(modX::LOG_LEVEL_FATAL, \'    \' .
                $modx->lexicon(\'mc_non_array_in\')
                . \' transport.plugins.php\');
        }
    }

    /* Create Category attributes array dynamically
     * based on which elements are present
     */

    $attr = array(
        xPDOTransport::UNIQUE_KEY => \'category\',
        xPDOTransport::PRESERVE_KEYS => false,
        xPDOTransport::UPDATE_OBJECT => true,
        xPDOTransport::RELATED_OBJECTS => true,
    );

    /* Only add this on first pass if no subPackages */
    if ($hasValidators && ($i == 1) && (!$hasSubPackages)) {
        $attr[xPDOTransport::ABORT_INSTALL_ON_VEHICLE_FAIL] = true;
    }

    if ($hasSnippets) {
        $attr[xPDOTransport::RELATED_OBJECT_ATTRIBUTES][\'Snippets\'] = array(
            xPDOTransport::PRESERVE_KEYS => false,
            xPDOTransport::UPDATE_OBJECT => true,
            xPDOTransport::UNIQUE_KEY => \'name\',
        );
    }

    if ($hasPropertySets) {
        $attr[xPDOTransport::RELATED_OBJECT_ATTRIBUTES][\'PropertySets\'] = array(
            xPDOTransport::PRESERVE_KEYS => false,
            xPDOTransport::UPDATE_OBJECT => true,
            xPDOTransport::UNIQUE_KEY => \'name\',
        );
    }

    if ($hasChunks) {
        $attr[xPDOTransport::RELATED_OBJECT_ATTRIBUTES][\'Chunks\'] = array(
            xPDOTransport::PRESERVE_KEYS => false,
            xPDOTransport::UPDATE_OBJECT => true,
            xPDOTransport::UNIQUE_KEY => \'name\',
        );
    }

    if ($hasPlugins) {
        $attr[xPDOTransport::RELATED_OBJECT_ATTRIBUTES][\'Plugins\'] = array(
            xPDOTransport::PRESERVE_KEYS => false,
            xPDOTransport::UPDATE_OBJECT => true,
            xPDOTransport::UNIQUE_KEY => \'name\',
        );
    }

    if ($hasTemplates) {
        $attr[xPDOTransport::RELATED_OBJECT_ATTRIBUTES][\'Templates\'] = array(
            xPDOTransport::PRESERVE_KEYS => false,
            xPDOTransport::UPDATE_OBJECT => true,
            xPDOTransport::UNIQUE_KEY => \'templatename\',
        );
    }

    if ($hasTemplateVariables) {
        $attr[xPDOTransport::RELATED_OBJECT_ATTRIBUTES][\'TemplateVars\'] = array(
            xPDOTransport::PRESERVE_KEYS => false,
            xPDOTransport::UPDATE_OBJECT => true,
            xPDOTransport::UNIQUE_KEY => \'name\',
        );
    }

    /* create a vehicle for the category and all the things
     * we\'ve added to it.
     */
    $vehicle = $builder->createVehicle($category, $attr);

    if ($hasValidators && $i == 1) { /* only install these on first pass */
        $helper->sendLog(modX::LOG_LEVEL_INFO,
            $modx->lexicon(\'mc_processing_validators\'));
        $validators = empty($props[\'validators\'])
            ? array()
            : $props[\'validators\'];
        if (!empty($validators)) {
            foreach ($validators as $validator) {
                if ($validator == \'default\') {
                    $validator = PKG_NAME_LOWER;
                }
                $file = $sources[\'validators\'] . $validator . \'.validator.php\';
                if (file_exists($file)) {
                    $helper->sendLog(modX::LOG_LEVEL_INFO, \'    \' . $modx->lexicon(\'mc_packaging\')
                        . \' \' .
                        $validator . \' \' . $modx->lexicon(\'mc_validator\')
                        . \'.\');
                    $vehicle->validate(\'php\', array(
                        \'source\' => $file,
                    ));
                } else {
                    $helper->sendLog(modX::LOG_LEVEL_ERROR,
                        $modx->lexicon(\'mc_could_not_find_validator_file\')
                            . \': \' . $file);
                }
            }
        }
    }

    if ($hasCore && $i == 1) {
        $helper->sendLog(modX::LOG_LEVEL_INFO,
            $modx->lexicon(\'mc_packaged_core_files\'));
        $vehicle->resolve(\'file\', array(
                                       \'source\' => $sources[\'source_core\'],
                                       \'target\' => "return MODX_CORE_PATH . \'components/\';",
                                  ));
    }

    /* This section transfers every file in the local
       mycomponents/mycomponent/assets directory to the
       target site\'s assets/mycomponent directory on install.
     */

    if ($hasAssets && $i == 1) {
        $helper->sendLog(modX::LOG_LEVEL_INFO,
            $modx->lexicon(\'mc_packaged_assets_files\'));
        $vehicle->resolve(\'file\', array(
                                       \'source\' => $sources[\'source_assets\'],
                                       \'target\' => "return MODX_ASSETS_PATH . \'components/\';",
                                  ));
    }


    /* Package script resolvers, if any */
    if (($i == $count) && $hasResolvers) { /* add resolvers to last category only */
        $resolvers = empty($props[\'resolvers\'])
            ? array()
            : $props[\'resolvers\'];
        $resolvers = array_merge(array(
                  \'category\',
                  \'plugin\',
                  \'tv\',
                  \'resource\',
                  \'propertyset\'
             ), $resolvers);
        $helper->sendLog(modX::LOG_LEVEL_INFO,
            $modx->lexicon(\'mc_processing_resolvers\'));

        foreach ($resolvers as $resolver) {
            if ($resolver == \'default\') {
                $resolver = PKG_NAME_LOWER;
            }

            $file = $sources[\'resolvers\'] . $resolver . \'.resolver.php\';
            if (file_exists($file)) {
                $helper->sendLog(modX::LOG_LEVEL_INFO, \'    \' .
                    $modx->lexicon(\'mc_packaged\')
                    . \' \' . $resolver . \' \' .
                    $modx->lexicon(\'mc_resolver\')
                    . \'.\');
                $vehicle->resolve(\'php\', array(
                                              \'source\' => $sources[\'resolvers\'] . $resolver . \'.resolver.php\',
                                         ));
            } else {
                $helper->sendLog(modX::LOG_LEVEL_INFO, \'    \' .
                    $modx->lexicon(\'mc_no\')
                    . \' \' . $resolver . \' \' .
                    $modx->lexicon(\'mc_resolver\')
                    . \'.\');
            }
        }
    }

    /* Put the category vehicle (with all the stuff we added to the
     * category) into the package
     */
    $builder->putVehicle($vehicle);
}
/* Transport Menus */
if ($hasMenu) {
    /* load menu */
    $helper->sendLog(modX::LOG_LEVEL_INFO,
        $modx->lexicon(\'mc_packaging_menu\')
            . \'.\');
    $menus = include $sources[\'data\'] . \'transport.menus.php\';
    foreach ($menus as $menu) {
        if (empty($menu)) {
            $helper->sendLog(modX::LOG_LEVEL_ERROR,
                $modx->lexicon(\'mc_could_not_package_menu\')
                    . \'.\');
        } else {
            $vehicle = $builder->createVehicle($menu, array(
               xPDOTransport::PRESERVE_KEYS => true,
               xPDOTransport::UPDATE_OBJECT => true,
               xPDOTransport::UNIQUE_KEY => \'text\',
               xPDOTransport::RELATED_OBJECTS => true,
               xPDOTransport::RELATED_OBJECT_ATTRIBUTES => array(
                   \'Action\' => array(
                       xPDOTransport::PRESERVE_KEYS => false,
                       xPDOTransport::UPDATE_OBJECT => true,
                       xPDOTransport::UNIQUE_KEY => array(
                           \'namespace\',
                           \'controller\'
                        ),
                   ),
               ),
            ));
            $builder->putVehicle($vehicle);
            unset($vehicle, $menu);
        }
        $helper->sendLog(modX::LOG_LEVEL_INFO,
            $modx->lexicon(\'mc_packaged\')
                . \' \' . count($menus) . \' \' .
                $modx->lexicon(\'mc_menu_items\')
                . \'.\');
    }
    $helper->sendLog(modX::LOG_LEVEL_INFO, \'    \' .
        $modx->lexicon(\'mc_packaged\')
            . \' \' . count($menus) . \' \' .
            $modx->lexicon(\'mc_menu_items\')
            . \'.\');
}

/* Next-to-last step - pack in the license file, readme.txt, changelog,
 * and setup options 
 */
$attr = array(
    \'license\' => file_get_contents($sources[\'docs\'] . \'license.txt\'),
    \'readme\' => file_get_contents($sources[\'docs\'] . \'readme.txt\'),
    \'changelog\' => file_get_contents($sources[\'docs\'] . \'changelog.txt\'),
);

if ($hasSetupOptions && !empty($props[\'install.options\'])) {
    $attr[\'setup-options\'] = array(
        \'source\' => $sources[\'install_options\'] . \'user.input.php\',
    );
} else {
    $attr[\'setup-options\'] = array();
}
$builder->setPackageAttributes($attr);

/* Add subpackages */

if ($hasSubPackages) {
    $helper->sendLog(modX::LOG_LEVEL_INFO,
        $modx->lexicon(\'mc_packaging_subpackages\'));
    include $sources[\'data\'] . \'transport.subpackages.php\';
}


/* Last step - zip up the package */
$builder->pack();

/* report how long it took */
$mtime = microtime();
$mtime = explode(" ", $mtime);
$mtime = $mtime[1] + $mtime[0];
$tend = $mtime;
$totalTime = ($tend - $tstart);
$totalTime = sprintf("%2.4f s", $totalTime);

$helper->sendLog(xPDO::LOG_LEVEL_INFO, $modx->lexicon(\'mc_package_built\')
    . \'.\');
$helper->sendLog(xPDO::LOG_LEVEL_INFO, $modx->lexicon(\'mc_execution_time\')
    . \': \' . $totalTime);

return \'\';',
      'locked' => 0,
      'properties' => 'a:0:{}',
      'static' => 0,
      'static_file' => '',
      'content' => '<?php
/**
 * Important: You should almost never need to edit this file,
 * except to add components that it won\'t handle (e.g., permissions,
 * users, policies, policy templates, ACL entries, and Form
 * Customization rules), and most of those might better be handled
 * in a script resolver, which you can add without editing this file.
 *
 * Important note: MyComponent never updates this file, so any changes
 * you make will be permanent.
 *
 * Build Script for MyComponent extra
 *
 * Copyright 2012-2013 by Bob Ray <http://bobsguides.com>
 * Created on 10-23-2012
 *
 * MyComponent is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * MyComponent is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * MyComponent; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package mycomponent
 * @subpackage build
 */

/**
 * This is the template for the build script, which creates the
 * transport.zip file for your extra.
 *

 */
/* See the tutorial at http://http://bobsguides.com/mycomponent-tutorial.html
 * for more detailed information about using the package.
 */

/* config file must be retrieved in a class */
if (!class_exists(\'BuildHelper\')) {
    class BuildHelper {
        /** @var $modx modX */
        protected $modx;

        /** @var $files array - array of files; created by dir_walk */
        protected $files = array();

        /** @var $props array - properties array */
        protected $props = array();

        public function __construct(&$modx) {
            /* @var $modx modX */
            $this->modx =& $modx;
        }

        public function getProps($configPath) {
            $properties = @include $configPath;
            $this->props = $properties;
            return $properties;
        }

        public function sendLog($level, $message) {
            $msg = \'\';
            if ($level == modX::LOG_LEVEL_ERROR) {
                $msg .= $this->modx->lexicon(\'mc_error\')
                    . \' -- \';
            }
            $msg .= $message;
            $msg .= "\\n";
            if (php_sapi_name() != \'cli\') {
                $msg = nl2br($msg);
            }
            echo $msg;
        }

        /**
         * Recursively search directories for certain file types
         * Adapted from boen dot robot at gmail dot com\'s code on the scandir man page
         * @param $dir - dir to search (no trailing slash)
         * @param mixed $types - null for all files, or a comma-separated list of strings
         *                       the filename must include (e.g., \'.php,.class\')
         * @param bool $recursive - if false, only searches $dir, not it\'s descendants
         * @param string $baseDir - used internally -- do not send
         */
        public function dirWalk($dir, $types = null, $recursive = false, $baseDir = \'\') {

            if ($dh = opendir($dir)) {
                while (($file = readdir($dh)) !== false) {
                    if ($file === \'.\' || $file === \'..\') {
                        continue;
                    }
                    // $this->output .= "\\n" , $dir;
                    //$this->output .= "\\n", $file;
                    if (is_file($dir . \'/\' . $file)) {
                        if ($types !== null) {
                            $found = false;
                            $typeArray = explode(\',\', $types);
                            foreach ($typeArray as $type) {
                                if (strstr($file, $type)) {
                                    $found = true;
                                }
                            }
                            if (!$found) continue;
                        }
                        // $this->{$callback}($dir, $file);
                        $this->addFile($dir, $file);
                    } elseif ($recursive && is_dir($dir . \'/\' . $file)) {
                        $this->dirWalk($dir . \'/\' . $file, $types, $recursive, $baseDir . \'/\' . $file);
                    }
                }
                closedir($dh);
            }
        }

        /**
         * Used by dirWalk() to add files to $this->files
         * @param $dir string - directory of file (no trailing slash)
         * @param $file string - filename of file
         */
        public function addFile($dir, $file) {
            $this->files[$file] = $dir;
        }

        /**
         * Empties $this->files prior to dirWalk
         */
        public function resetFiles() {
            $this->files = array();
        }

        /**
         * Get files found by dirWalk
         *
         * @return array
         */
        public function getFiles() {
            return $this->files;
        }

        /**
         * @param $minimizerFile string - Which minimizer: JSMinPlus or JSMin
         * @param $dir string - dir to search (no trailing slash)
         * @param bool $createJsAll - If true, create packageNameLower . \'-all-min.js\'
         */
        public function mc_minify($minimizerFile, $dir, $createJsAll = false) {
            $dir = rtrim($dir, \'/\');
            $this->resetFiles();
            $all = \'\';
            $this->dirWalk($dir , \'.js\', true);
            $usePlus = stripos($minimizerFile, \'plus\') !== false;
            $minClass = $usePlus? \'JSMinPlus\' : \'JSMin\';
            $files = $this->getFiles();
            require dirname(__FILE__) . \'/utilities/\' . $minimizerFile;

            $this->sendLog(modX::LOG_LEVEL_INFO,
                $this->modx->lexicon(\'mc_creating_js_min_files\') .
                \' (\' . $this->modx->lexicon(\'mc_using\') .
                \' \' . $minClass . \')\');

            foreach ($files as $fileName => $path) {
                /* don\'t minify minimized files */
                if (strpos($fileName, \'min.js\') !== false) {
                    continue;
                }
                $code = file_get_contents($path . \'/\' . $fileName);
                $code = $usePlus
                    ? $minClass::minify($code, $fileName)
                    : $minClass::minify($code);
                if ($createJsAll) {
                    /* JSMin writes its own "\\n" */
                    $jend = $usePlus? "\\n" : \'\';
                    /* Add filename in comment for debugging */
                    $all .= "\\n/* " . $fileName . \'*/\' . $jend . $code;
                }

                $outFile = $path . \'/\' . str_ireplace(\'.js\', \'-min.js\', $fileName);
                $fp = fopen($outFile, \'w\');
                if ($fp) {
                    fwrite($fp, $code);
                    fclose($fp);
                    $this->sendLog(modX::LOG_LEVEL_INFO,
                        $this->modx->lexicon(\'mc_updated\')
                        . \': \' . $outFile);
                } else {
                    $this->sendLog(modX::LOG_LEVEL_ERROR,
                        $this->modx->lexicon(\'mc_could_not_open\')
                        . \': \' . $outFile);
                }
            }
            if ($createJsAll) {
                $pnl = $this->modx->getOption(\'packageNameLower\', $this->props, \'jsfile\');
                $allFile = $pnl . \'-all-min.js\';
                $outFile = $dir . \'/\' . $allFile;
                $fp = fopen($outFile, \'w\');
                if ($fp) {
                    fwrite($fp, $all);
                    $this->sendLog(modX::LOG_LEVEL_INFO,
                        $this->modx->lexicon(\'mc_updated\')
                        . \': \' . $outFile);
                    fclose($fp);
                } else {
                    $this->sendLog(modX::LOG_LEVEL_ERROR,
                        $this->modx->lexicon(\'mc_could_not_open\')
                        . \': \' . $outFile);
                }
            }
        }
    }
}

/* set start time */
$mtime = microtime();
$mtime = explode(" ", $mtime);
$mtime = $mtime[1] + $mtime[0];
$tstart = $mtime;
set_time_limit(0);


/* Instantiate MODx -- if this require fails, check your
 * _build/build.config.php file
 */
require_once dirname(dirname(__FILE__)) . \'/_build/build.config.php\';

if ( (! isset($modx)) || (! $modx instanceof modX) ) {
    require_once MODX_CORE_PATH . \'model/modx/modx.class.php\';
    $modx = new modX();
    $modx->initialize(\'mgr\');
    $modx->getService(\'error\', \'error.modError\', \'\', \'\');
}
$modx->lexicon->load(\'mycomponent:default\');
$modx->setLogLevel(xPDO::LOG_LEVEL_INFO);
$modx->setLogTarget(XPDO_CLI_MODE
    ? \'ECHO\'
    : \'HTML\');

if (!defined(\'MODX_CORE_PATH\')) {
    session_write_close();
    die(\'build.config.php is not correct\');
}

@include dirname(__FILE__) . \'/config/current.project.php\';

if (!$currentProject) {
    session_write_close();
    die(\'Could not get current project\');
}

$helper = new BuildHelper($modx);

$modx->lexicon->load(\'mycomponent:default\');

$props = $helper->getProps(dirname(__FILE__) . \'/config/\' . $currentProject . \'.config.php\');

if (!is_array($props)) {
    session_write_close();
    die($modx->lexicon(\'mc_no_config_file\'));
}

$criticalSettings = array(
    \'packageNameLower\',
    \'packageName\',
    \'version\',
    \'release\'
);

foreach ($criticalSettings as $setting) {
    if (!isset($setting)) {
        session_write_close();
        die($modx->lexicon(\'mc_critical_setting_not_set\')
            . \': \' . $setting);
    }
}


if (strpos($props[\'packageNameLower\'], \'-\') || strpos($props[\'packageNameLower\'], \' \')) {
    session_write_close();
    die ($modx->lexicon("mc_space_hyphen_warning"));
}
/* Set package info. These are initially set from the the the project config
 * but feel free to hard-code them for future versions */

define(\'PKG_NAME\', $props[\'packageName\']);
define(\'PKG_NAME_LOWER\', $props[\'packageNameLower\']);
define(\'PKG_VERSION\', $props[\'version\']);
define(\'PKG_RELEASE\', $props[\'release\']);


/* define sources */
$root = dirname(dirname(__FILE__)) . \'/\';
$sources = array(
    \'root\' => $root,
    \'build\' => $root . \'_build/\',
    \'config\' => $root . \'_build/config/\',
    \'utilities\' => $root . \'_build/utilities/\',
    /* note that the next two must not have a trailing slash */
    \'source_core\' => $root . \'core/components/\' . PKG_NAME_LOWER,
    \'source_assets\' => $root . \'assets/components/\' . PKG_NAME_LOWER,
    \'resolvers\' => $root . \'_build/resolvers/\',
    \'validators\' => $root . \'_build/validators/\',
    \'data\' => $root . \'_build/data/\',
    \'docs\' => $root . \'core/components/\' . PKG_NAME_LOWER . \'/docs/\',
    \'install_options\' => $root . \'_build/install.options/\',
    \'subpackages\' => $root . \'_build/subpackages/\',

);
unset($root);


$categories = include $sources[\'build\'] . \'config/categories.php\';

if (empty ($categories) || (!is_array($categories))) {
    session_write_close();
    die ($modx->lexicon(\'no_categories\'));
}

/* Set package options - you can set these manually, but it\'s
 * recommended to let them be generated automatically
 */

$hasAssets = is_dir($sources[\'source_assets\']); /* Transfer the files in the assets dir. */
$hasCore = is_dir($sources[\'source_core\']); /* Transfer the files in the core dir. */

$hasContexts = file_exists($sources[\'data\'] . \'transport.contexts.php\');
$hasResources = file_exists($sources[\'data\'] . \'transport.resources.php\');
$hasValidators = is_dir($sources[\'build\'] . \'validators\'); /* Run a validators before installing anything */
$hasResolvers = is_dir($sources[\'build\'] . \'resolvers\');
$hasSetupOptions = is_dir($sources[\'install_options\']); /* HTML/PHP script to interact with user */
$hasMenu = file_exists($sources[\'data\'] . \'transport.menus.php\'); /* Add items to the MODx Top Menu */
$hasSettings = file_exists($sources[\'data\'] . \'transport.settings.php\'); /* Add new MODx System Settings */
$hasContextSettings = file_exists($sources[\'data\'] . \'transport.contextsettings.php\');
$hasSubPackages = is_dir($sources[\'subpackages\']);
$minifyJS = $modx->getOption(\'minifyJS\', $props, false);

$helper->sendLog(modX::LOG_LEVEL_INFO, "\\n" . $modx->lexicon(\'mc_project\')
    . \': \' . $currentProject);
$helper->sendLog(modX::LOG_LEVEL_INFO, $modx->lexicon(\'mc_action\')
    . \': \' . $modx->lexicon(\'mc_build\')
);
$helper->sendLog(modX::LOG_LEVEL_INFO, $modx->lexicon(\'mc_created_package\')
    . \': \' . PKG_NAME_LOWER . \'-\' . PKG_VERSION . \'-\' . PKG_RELEASE);
$helper->sendLog(modX::LOG_LEVEL_INFO, "\\n" . $modx->lexicon(\'mc_created_namespace\')
    . \': \' . PKG_NAME_LOWER);
/* load builder */
$modx->setLogLevel(modX::LOG_LEVEL_ERROR);
$modx->loadClass(\'transport.modPackageBuilder\', \'\', false, true);
$builder = new modPackageBuilder($modx);
$builder->createPackage(PKG_NAME_LOWER, PKG_VERSION, PKG_RELEASE);

$assetsPath = $hasAssets
    ? \'{assets_path}components/\' . PKG_NAME_LOWER . \'/\'
    : \'\';
$builder->registerNamespace(PKG_NAME_LOWER, false, true, \'{core_path}components/\' . PKG_NAME_LOWER . \'/\', $assetsPath);
$modx->setLogLevel(modX::LOG_LEVEL_INFO);

/* Transport Contexts */

if ($hasContexts) {
    $contexts = include $sources[\'data\'] . \'transport.contexts.php\';
    if (!is_array($contexts)) {
        $helper->sendLog(modX::LOG_LEVEL_ERROR, $modx->lexicon(\'mc_contexts_not_an_array\'));
    } else {
        $attributes = array(
            xPDOTransport::UNIQUE_KEY => \'key\',
            xPDOTransport::PRESERVE_KEYS => true,
            xPDOTransport::UPDATE_OBJECT => true,
        );
        foreach ($contexts as $context) {
            $vehicle = $builder->createVehicle($context, $attributes);
            $builder->putVehicle($vehicle);
        }
        $helper->sendLog(modX::LOG_LEVEL_INFO, $modx->lexicon(\'mc_packaged\')
            . \' \' .
            count($contexts) . \' \' . $modx->lexicon(\'mc_new_contexts\')
            . \'.\');
        unset($contexts, $context, $attributes);
    }
}


/* Transport Resources */

if ($hasResources) {
    $resources = include $sources[\'data\'] . \'transport.resources.php\';
    if (!is_array($resources)) {
        $helper->sendLog(modX::LOG_LEVEL_ERROR, $modx->lexicon(\'mc_resources_not_an_array\')
            . \'.\');
    } else {
        $attributes = array(
            xPDOTransport::PRESERVE_KEYS => false,
            xPDOTransport::UPDATE_OBJECT => true,
            xPDOTransport::UNIQUE_KEY => \'pagetitle\',
            xPDOTransport::RELATED_OBJECTS => true,
            xPDOTransport::RELATED_OBJECT_ATTRIBUTES => array(
                \'ContentType\' => array(
                    xPDOTransport::PRESERVE_KEYS => false,
                    xPDOTransport::UPDATE_OBJECT => true,
                    xPDOTransport::UNIQUE_KEY => \'name\',
                ),
            ),
        );
        foreach ($resources as $resource) {
            $vehicle = $builder->createVehicle($resource, $attributes);
            $builder->putVehicle($vehicle);
        }
        $helper->sendLog(modX::LOG_LEVEL_INFO, $modx->lexicon(\'mc_packaged\')
            . \' \' . count($resources) . \' \' . $modx->lexicon(\'mc_resources\')
            . \'.\');
    }
    unset($resources, $resource, $attributes);
}

/* load new system settings */
if ($hasSettings) {
    $settings = include $sources[\'data\'] . \'transport.settings.php\';
    if (!is_array($settings)) {
        $helper->sendLog(modX::LOG_LEVEL_ERROR, $modx->lexicon(\'mc_settings_not_an_array\')
            . \'.\');
    } else {
        $attributes = array(
            xPDOTransport::UNIQUE_KEY => \'key\',
            xPDOTransport::PRESERVE_KEYS => true,
            xPDOTransport::UPDATE_OBJECT => false,
        );
        foreach ($settings as $setting) {
            $vehicle = $builder->createVehicle($setting, $attributes);
            $builder->putVehicle($vehicle);
        }
        $helper->sendLog(modX::LOG_LEVEL_INFO, $modx->lexicon(\'mc_packaged\')
            . \' \' . count($settings) .
            \' \' . $modx->lexicon(\'mc_new_system_settings\')
            . \'.\');
        unset($settings, $setting, $attributes);
    }
}

/* load new context settings */
if ($hasContextSettings) {
    $settings = include $sources[\'data\'] . \'transport.contextsettings.php\';
    if (!is_array($settings)) {
        $helper->sendLog(modX::LOG_LEVEL_ERROR, $modx->lexicon(\'mc_context_settings_not_an_array\')
            . \'.\');
    } else {
        $attributes = array(
            xPDOTransport::UNIQUE_KEY => \'key\',
            xPDOTransport::PRESERVE_KEYS => true,
            xPDOTransport::UPDATE_OBJECT => false,
        );
        foreach ($settings as $setting) {
            $vehicle = $builder->createVehicle($setting, $attributes);
            $builder->putVehicle($vehicle);
        }
        $helper->sendLog(modX::LOG_LEVEL_INFO, $modx->lexicon(\'mc_packaged\')
            . \' \' . count($settings) .
            \' \' . $modx->lexicon(\'mc_context_settings\')
            . \'.\');
        unset($settings, $setting, $attributes);
    }
}

/* minify JS */

if ($minifyJS) {
    $helper->sendLog(modX::LOG_LEVEL_INFO, \'Creating js-min file(s)\');

    $usePlus = $modx->getOption(\'useJSMinPlus\', $props, false);
    $minimizer = $usePlus? \'jsminplus.class.php\' : \'jsmin.class.php\';
    $dir = $sources[\'source_assets\'] . \'/js\';
    $jsAll = $modx->getOption(\'createJSMinAll\', $props, false);
    $helper->mc_minify($minimizer, $dir, $jsAll);
}

/* Create each Category and its Elements */

$i = 0;
$count = count($categories);

foreach ($categories as $k => $categoryName) {
    /* @var $categoryName string */
    $categoryNameLower = strtolower($categoryName);

    /* See what we have based on the files */
    $hasSnippets = file_exists($sources[\'data\'] . $categoryNameLower . \'/transport.snippets.php\');
    $hasChunks = file_exists($sources[\'data\'] . $categoryNameLower . \'/transport.chunks.php\');
    $hasTemplates = file_exists($sources[\'data\'] . $categoryNameLower . \'/transport.templates.php\');
    $hasTemplateVariables = file_exists($sources[\'data\'] . $categoryNameLower . \'/transport.tvs.php\');
    $hasPlugins = file_exists($sources[\'data\'] . $categoryNameLower . \'/transport.plugins.php\');
    $hasPropertySets = file_exists($sources[\'data\'] . $categoryNameLower . \'/transport.propertysets.php\');

    /* @var $category modCategory */
    $category = $modx->newObject(\'modCategory\');
    $i++; /* will be 1 for the first category */
    $category->set(\'id\', $i);
    $category->set(\'category\', $categoryName);
    $helper->sendLog(modX::LOG_LEVEL_INFO,
        $modx->lexicon(\'mc_creating_category\')
            . \': \' . $categoryName);
    $helper->sendLog(modX::LOG_LEVEL_INFO, $modx->lexicon(\'mc_processing_elements_in_category\')
        . \': \' . $categoryName);

    /* add snippets */
    if ($hasSnippets) {

        $snippets = include $sources[\'data\'] . $categoryNameLower  . \'/transport.snippets.php\';

        /* note: Snippets\' default properties are set in transport.snippets.php */
        if (is_array($snippets)) {
            if ($category->addMany($snippets, \'Snippets\')) {
                $helper->sendLog(modX::LOG_LEVEL_INFO, \'    \' .
                    $modx->lexicon(\'mc_packaged\')
                    . \' \' . count($snippets) . \' \' .
                    $modx->lexicon(\'mc_snippets\')
                    . \'.\');
            } else {
                $helper->sendLog(modX::LOG_LEVEL_FATAL, \'    \' . $modx->lexicon(\'mc_adding_snippets_failed\')
                    . \'.\');
            }
        } else {
            $helper->sendLog(modX::LOG_LEVEL_FATAL, \'    \' .
                $modx->lexicon(\'mc_non_array_in\')
                . \' transport.snippets.php\');
        }
    }

    if ($hasPropertySets) {
        $propertySets = include $sources[\'data\'] . $categoryNameLower .\'/transport.propertysets.php\';
        //  note: property set\' properties are set in transport.propertysets.php
        if (is_array($propertySets)) {
            if ($category->addMany($propertySets, \'PropertySets\')) {
                $helper->sendLog(modX::LOG_LEVEL_INFO, \'    \' .
                    $modx->lexicon(\'mc_packaged\')
                    . \' \' . count($propertySets) . \' \' .
                    $modx->lexicon(\'mc_property_sets\')
                    . \'.\');
            } else {
                $helper->sendLog(modX::LOG_LEVEL_FATAL, \'    \' .
                    $modx->lexicon(\'mc_adding_property_sets_failed\')
                    . \'.\');
            }
        } else {
            $helper->sendLog(modX::LOG_LEVEL_FATAL, \'    \' . $modx->lexicon(\'mc_non_array_in\')
                . \' transport.propertysets.php\');
        }
    }
    if ($hasChunks) { /* add chunks  */
        $helper->sendLog(modX::LOG_LEVEL_INFO, \'Adding Chunks.\');
        /* note: Chunks\' default properties are set in transport.chunks.php */
        $chunks = include $sources[\'data\'] . $categoryNameLower .\'/transport.chunks.php\';
        if (is_array($chunks)) {
            if ($category->addMany($chunks, \'Chunks\')) {
                $helper->sendLog(modX::LOG_LEVEL_INFO, \'    \' .
                    $modx->lexicon(\'mc_packaged\')
                    . \' \' . count($chunks) . \' \' .
                    $modx->lexicon(\'mc_chunks\')
                    . \'.\');
            } else {
                $helper->sendLog(modX::LOG_LEVEL_FATAL, \'    \' .
                    $modx->lexicon(\'mc_adding_chunks_failed\')
                    . \'.\');
            }
        } else {
            $helper->sendLog(modX::LOG_LEVEL_FATAL, \'    \' .
                $modx->lexicon(\'mc_non_array_in\')
                . \' transport.chunks.php\');
        }
    }


    if ($hasTemplates) { /* add templates  */
        $helper->sendLog(modX::LOG_LEVEL_INFO,
            $modx->lexicon(\'mc_adding_templates\')
                . \'.\');
        /* note: Templates\' default properties are set in transport.templates.php */
        $templates = include $sources[\'data\'] . $categoryNameLower .\'/transport.templates.php\';
        if (is_array($templates)) {
            if ($category->addMany($templates, \'Templates\')) {
                $helper->sendLog(modX::LOG_LEVEL_INFO, \'    \' .
                    $modx->lexicon(\'mc_packaged\')
                    . \' \' . count($templates) . \' \' .
                    $modx->lexicon(\'mc_templates\')
                    . \'.\');
            } else {
                $helper->sendLog(modX::LOG_LEVEL_FATAL, \'    \' .
                    $modx->lexicon(\'mc_adding_templates_failed\')
                    . \'.\');
            }
        } else {
            $helper->sendLog(modX::LOG_LEVEL_FATAL, \'    \' .
                $modx->lexicon(\'mc_non_array_in\')
                . \' transport.templates.php\');
        }
    }

    if ($hasTemplateVariables) { /* add template variables  */
        $helper->sendLog(modX::LOG_LEVEL_INFO,
            $modx->lexicon(\'mc_adding_template_variables\')
                . \'.\');
        /* note: Template Variables\' default properties are set in transport.tvs.php */
        $tvs = include $sources[\'data\'] . $categoryNameLower .\'/transport.tvs.php\';
        if (is_array($tvs)) {
            if ($category->addMany($tvs, \'TemplateVars\')) {
                $helper->sendLog(modX::LOG_LEVEL_INFO, \'    \' .
                    $modx->lexicon(\'mc_packaged\')
                    . \' \' . count($tvs) . \' \' .
                    $modx->lexicon(\'mc_tvs\')
                    . \'.\');
            } else {
                $helper->sendLog(modX::LOG_LEVEL_FATAL, \'    \' .
                    $modx->lexicon(\'mc_adding_tvs_failed\')
                    . \'.\');
            }
        } else {
            $helper->sendLog(modX::LOG_LEVEL_FATAL, \'    \' .
                $modx->lexicon(\'mc_non_array_in\')
                . \' transport.tvs.php\');
        }
    }


    if ($hasPlugins) {
        /* Plugins\' default properties are set in transport.plugins.php */
        $plugins = include $sources[\'data\'] . $categoryNameLower . \'/transport.plugins.php\';
        if (is_array($plugins)) {
            if ($category->addMany($plugins, \'Plugins\')) {
                $helper->sendLog(modX::LOG_LEVEL_INFO, \'    \' .
                    $modx->lexicon(\'mc_packaged\')
                    . \' \' . count($plugins) . \' \' .
                    $modx->lexicon(\'mc_plugins\')
                    . \'.\');
            } else {
                $helper->sendLog(modX::LOG_LEVEL_FATAL, \'    \' .
                    $modx->lexicon(\'mc_adding_plugins_failed\')
                    . \'.\');
            }
        } else {
            $helper->sendLog(modX::LOG_LEVEL_FATAL, \'    \' .
                $modx->lexicon(\'mc_non_array_in\')
                . \' transport.plugins.php\');
        }
    }

    /* Create Category attributes array dynamically
     * based on which elements are present
     */

    $attr = array(
        xPDOTransport::UNIQUE_KEY => \'category\',
        xPDOTransport::PRESERVE_KEYS => false,
        xPDOTransport::UPDATE_OBJECT => true,
        xPDOTransport::RELATED_OBJECTS => true,
    );

    /* Only add this on first pass if no subPackages */
    if ($hasValidators && ($i == 1) && (!$hasSubPackages)) {
        $attr[xPDOTransport::ABORT_INSTALL_ON_VEHICLE_FAIL] = true;
    }

    if ($hasSnippets) {
        $attr[xPDOTransport::RELATED_OBJECT_ATTRIBUTES][\'Snippets\'] = array(
            xPDOTransport::PRESERVE_KEYS => false,
            xPDOTransport::UPDATE_OBJECT => true,
            xPDOTransport::UNIQUE_KEY => \'name\',
        );
    }

    if ($hasPropertySets) {
        $attr[xPDOTransport::RELATED_OBJECT_ATTRIBUTES][\'PropertySets\'] = array(
            xPDOTransport::PRESERVE_KEYS => false,
            xPDOTransport::UPDATE_OBJECT => true,
            xPDOTransport::UNIQUE_KEY => \'name\',
        );
    }

    if ($hasChunks) {
        $attr[xPDOTransport::RELATED_OBJECT_ATTRIBUTES][\'Chunks\'] = array(
            xPDOTransport::PRESERVE_KEYS => false,
            xPDOTransport::UPDATE_OBJECT => true,
            xPDOTransport::UNIQUE_KEY => \'name\',
        );
    }

    if ($hasPlugins) {
        $attr[xPDOTransport::RELATED_OBJECT_ATTRIBUTES][\'Plugins\'] = array(
            xPDOTransport::PRESERVE_KEYS => false,
            xPDOTransport::UPDATE_OBJECT => true,
            xPDOTransport::UNIQUE_KEY => \'name\',
        );
    }

    if ($hasTemplates) {
        $attr[xPDOTransport::RELATED_OBJECT_ATTRIBUTES][\'Templates\'] = array(
            xPDOTransport::PRESERVE_KEYS => false,
            xPDOTransport::UPDATE_OBJECT => true,
            xPDOTransport::UNIQUE_KEY => \'templatename\',
        );
    }

    if ($hasTemplateVariables) {
        $attr[xPDOTransport::RELATED_OBJECT_ATTRIBUTES][\'TemplateVars\'] = array(
            xPDOTransport::PRESERVE_KEYS => false,
            xPDOTransport::UPDATE_OBJECT => true,
            xPDOTransport::UNIQUE_KEY => \'name\',
        );
    }

    /* create a vehicle for the category and all the things
     * we\'ve added to it.
     */
    $vehicle = $builder->createVehicle($category, $attr);

    if ($hasValidators && $i == 1) { /* only install these on first pass */
        $helper->sendLog(modX::LOG_LEVEL_INFO,
            $modx->lexicon(\'mc_processing_validators\'));
        $validators = empty($props[\'validators\'])
            ? array()
            : $props[\'validators\'];
        if (!empty($validators)) {
            foreach ($validators as $validator) {
                if ($validator == \'default\') {
                    $validator = PKG_NAME_LOWER;
                }
                $file = $sources[\'validators\'] . $validator . \'.validator.php\';
                if (file_exists($file)) {
                    $helper->sendLog(modX::LOG_LEVEL_INFO, \'    \' . $modx->lexicon(\'mc_packaging\')
                        . \' \' .
                        $validator . \' \' . $modx->lexicon(\'mc_validator\')
                        . \'.\');
                    $vehicle->validate(\'php\', array(
                        \'source\' => $file,
                    ));
                } else {
                    $helper->sendLog(modX::LOG_LEVEL_ERROR,
                        $modx->lexicon(\'mc_could_not_find_validator_file\')
                            . \': \' . $file);
                }
            }
        }
    }

    if ($hasCore && $i == 1) {
        $helper->sendLog(modX::LOG_LEVEL_INFO,
            $modx->lexicon(\'mc_packaged_core_files\'));
        $vehicle->resolve(\'file\', array(
                                       \'source\' => $sources[\'source_core\'],
                                       \'target\' => "return MODX_CORE_PATH . \'components/\';",
                                  ));
    }

    /* This section transfers every file in the local
       mycomponents/mycomponent/assets directory to the
       target site\'s assets/mycomponent directory on install.
     */

    if ($hasAssets && $i == 1) {
        $helper->sendLog(modX::LOG_LEVEL_INFO,
            $modx->lexicon(\'mc_packaged_assets_files\'));
        $vehicle->resolve(\'file\', array(
                                       \'source\' => $sources[\'source_assets\'],
                                       \'target\' => "return MODX_ASSETS_PATH . \'components/\';",
                                  ));
    }


    /* Package script resolvers, if any */
    if (($i == $count) && $hasResolvers) { /* add resolvers to last category only */
        $resolvers = empty($props[\'resolvers\'])
            ? array()
            : $props[\'resolvers\'];
        $resolvers = array_merge(array(
                  \'category\',
                  \'plugin\',
                  \'tv\',
                  \'resource\',
                  \'propertyset\'
             ), $resolvers);
        $helper->sendLog(modX::LOG_LEVEL_INFO,
            $modx->lexicon(\'mc_processing_resolvers\'));

        foreach ($resolvers as $resolver) {
            if ($resolver == \'default\') {
                $resolver = PKG_NAME_LOWER;
            }

            $file = $sources[\'resolvers\'] . $resolver . \'.resolver.php\';
            if (file_exists($file)) {
                $helper->sendLog(modX::LOG_LEVEL_INFO, \'    \' .
                    $modx->lexicon(\'mc_packaged\')
                    . \' \' . $resolver . \' \' .
                    $modx->lexicon(\'mc_resolver\')
                    . \'.\');
                $vehicle->resolve(\'php\', array(
                                              \'source\' => $sources[\'resolvers\'] . $resolver . \'.resolver.php\',
                                         ));
            } else {
                $helper->sendLog(modX::LOG_LEVEL_INFO, \'    \' .
                    $modx->lexicon(\'mc_no\')
                    . \' \' . $resolver . \' \' .
                    $modx->lexicon(\'mc_resolver\')
                    . \'.\');
            }
        }
    }

    /* Put the category vehicle (with all the stuff we added to the
     * category) into the package
     */
    $builder->putVehicle($vehicle);
}
/* Transport Menus */
if ($hasMenu) {
    /* load menu */
    $helper->sendLog(modX::LOG_LEVEL_INFO,
        $modx->lexicon(\'mc_packaging_menu\')
            . \'.\');
    $menus = include $sources[\'data\'] . \'transport.menus.php\';
    foreach ($menus as $menu) {
        if (empty($menu)) {
            $helper->sendLog(modX::LOG_LEVEL_ERROR,
                $modx->lexicon(\'mc_could_not_package_menu\')
                    . \'.\');
        } else {
            $vehicle = $builder->createVehicle($menu, array(
               xPDOTransport::PRESERVE_KEYS => true,
               xPDOTransport::UPDATE_OBJECT => true,
               xPDOTransport::UNIQUE_KEY => \'text\',
               xPDOTransport::RELATED_OBJECTS => true,
               xPDOTransport::RELATED_OBJECT_ATTRIBUTES => array(
                   \'Action\' => array(
                       xPDOTransport::PRESERVE_KEYS => false,
                       xPDOTransport::UPDATE_OBJECT => true,
                       xPDOTransport::UNIQUE_KEY => array(
                           \'namespace\',
                           \'controller\'
                        ),
                   ),
               ),
            ));
            $builder->putVehicle($vehicle);
            unset($vehicle, $menu);
        }
        $helper->sendLog(modX::LOG_LEVEL_INFO,
            $modx->lexicon(\'mc_packaged\')
                . \' \' . count($menus) . \' \' .
                $modx->lexicon(\'mc_menu_items\')
                . \'.\');
    }
    $helper->sendLog(modX::LOG_LEVEL_INFO, \'    \' .
        $modx->lexicon(\'mc_packaged\')
            . \' \' . count($menus) . \' \' .
            $modx->lexicon(\'mc_menu_items\')
            . \'.\');
}

/* Next-to-last step - pack in the license file, readme.txt, changelog,
 * and setup options 
 */
$attr = array(
    \'license\' => file_get_contents($sources[\'docs\'] . \'license.txt\'),
    \'readme\' => file_get_contents($sources[\'docs\'] . \'readme.txt\'),
    \'changelog\' => file_get_contents($sources[\'docs\'] . \'changelog.txt\'),
);

if ($hasSetupOptions && !empty($props[\'install.options\'])) {
    $attr[\'setup-options\'] = array(
        \'source\' => $sources[\'install_options\'] . \'user.input.php\',
    );
} else {
    $attr[\'setup-options\'] = array();
}
$builder->setPackageAttributes($attr);

/* Add subpackages */

if ($hasSubPackages) {
    $helper->sendLog(modX::LOG_LEVEL_INFO,
        $modx->lexicon(\'mc_packaging_subpackages\'));
    include $sources[\'data\'] . \'transport.subpackages.php\';
}


/* Last step - zip up the package */
$builder->pack();

/* report how long it took */
$mtime = microtime();
$mtime = explode(" ", $mtime);
$mtime = $mtime[1] + $mtime[0];
$tend = $mtime;
$totalTime = ($tend - $tstart);
$totalTime = sprintf("%2.4f s", $totalTime);

$helper->sendLog(xPDO::LOG_LEVEL_INFO, $modx->lexicon(\'mc_package_built\')
    . \'.\');
$helper->sendLog(xPDO::LOG_LEVEL_INFO, $modx->lexicon(\'mc_execution_time\')
    . \': \' . $totalTime);

return \'\';',
    ),
  ),
  'e1356ce32a30254ac38125c67dd5cbc1' => 
  array (
    'criteria' => 
    array (
      'name' => 'categoryresolver.php',
    ),
    'object' => 
    array (
      'id' => 30,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'categoryresolver.php',
      'description' => 'Chunk',
      'editor_type' => 0,
      'category' => 15,
      'cache_type' => 0,
      'snippet' => '<?php
/**
 * Category resolver  for [[+packageName]] extra.
 * Sets Category Parent
 *
 * Copyright [[+copyright]] by [[+author]] [[+email]]
 * Created on [[+createdon]]
 *
[[+license]]
 * @package [[+packageNameLower]]
 * @subpackage build
 */

/* @var $object xPDOObject */
/* @var $modx modX */
/* @var $parentObj modResource */
/* @var $templateObj modTemplate */

/* @var array $options */

if (!function_exists(\'checkFields\')) {
    function checkFields($required, $objectFields) {
        global $modx;
        $fields = explode(\',\', $required);
        foreach ($fields as $field) {
            if (!isset($objectFields[$field])) {
                $modx->log(modX::LOG_LEVEL_ERROR, \'[Category Resolver] Missing field: \' . $field);
                return false;
            }
        }
        return true;
    }
}
if ($object->xpdo) {
    $modx =& $object->xpdo;
    switch ($options[xPDOTransport::PACKAGE_ACTION]) {
        case xPDOTransport::ACTION_INSTALL:
        case xPDOTransport::ACTION_UPGRADE:

            $intersects = \'[[+intersects]]\';

            if (is_array($intersects)) {
                foreach ($intersects as $k => $fields) {
                    /* make sure we have all fields */
                    if (!checkFields(\'category,parent\', $fields)) {
                        continue;
                    }
                    $categoryObj = $modx->getObject(\'modCategory\', array(\'category\' => $fields[\'category\']));
                    if (!$categoryObj) {
                        continue;
                    }
                    $parentObj = $modx->getObject(\'modCategory\', array(\'category\' => $fields[\'parent\']));
                        if ($parentObj) {
                            $categoryObj->set(\'parent\', $parentObj->get(\'id\'));
                        }
                    $categoryObj->save();
                }
            }
            break;

        case xPDOTransport::ACTION_UNINSTALL:
            break;
    }
}

return true;',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => '',
      'content' => '<?php
/**
 * Category resolver  for [[+packageName]] extra.
 * Sets Category Parent
 *
 * Copyright [[+copyright]] by [[+author]] [[+email]]
 * Created on [[+createdon]]
 *
[[+license]]
 * @package [[+packageNameLower]]
 * @subpackage build
 */

/* @var $object xPDOObject */
/* @var $modx modX */
/* @var $parentObj modResource */
/* @var $templateObj modTemplate */

/* @var array $options */

if (!function_exists(\'checkFields\')) {
    function checkFields($required, $objectFields) {
        global $modx;
        $fields = explode(\',\', $required);
        foreach ($fields as $field) {
            if (!isset($objectFields[$field])) {
                $modx->log(modX::LOG_LEVEL_ERROR, \'[Category Resolver] Missing field: \' . $field);
                return false;
            }
        }
        return true;
    }
}
if ($object->xpdo) {
    $modx =& $object->xpdo;
    switch ($options[xPDOTransport::PACKAGE_ACTION]) {
        case xPDOTransport::ACTION_INSTALL:
        case xPDOTransport::ACTION_UPGRADE:

            $intersects = \'[[+intersects]]\';

            if (is_array($intersects)) {
                foreach ($intersects as $k => $fields) {
                    /* make sure we have all fields */
                    if (!checkFields(\'category,parent\', $fields)) {
                        continue;
                    }
                    $categoryObj = $modx->getObject(\'modCategory\', array(\'category\' => $fields[\'category\']));
                    if (!$categoryObj) {
                        continue;
                    }
                    $parentObj = $modx->getObject(\'modCategory\', array(\'category\' => $fields[\'parent\']));
                        if ($parentObj) {
                            $categoryObj->set(\'parent\', $parentObj->get(\'id\'));
                        }
                    $categoryObj->save();
                }
            }
            break;

        case xPDOTransport::ACTION_UNINSTALL:
            break;
    }
}

return true;',
    ),
  ),
  '47b875169f58b6612c0c8feb3ce8819b' => 
  array (
    'criteria' => 
    array (
      'name' => 'changelog.txt.tpl',
    ),
    'object' => 
    array (
      'id' => 31,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'changelog.txt.tpl',
      'description' => 'Chunk',
      'editor_type' => 0,
      'category' => 15,
      'cache_type' => 0,
      'snippet' => 'Changelog for [[+packageName]]

[[+packageName]] 1.0.0
---------------------------------
Initial Version',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => '',
      'content' => 'Changelog for [[+packageName]]

[[+packageName]] 1.0.0
---------------------------------
Initial Version',
    ),
  ),
  'cd5e8ddb2ba69949ab7d79cd67e93a33' => 
  array (
    'criteria' => 
    array (
      'name' => 'classfile.php',
    ),
    'object' => 
    array (
      'id' => 32,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'classfile.php',
      'description' => 'Chunk',
      'editor_type' => 0,
      'category' => 15,
      'cache_type' => 0,
      'snippet' => '<?php
/**
 * [[+className]] class file for [[+packageName]] extra
 *
 * Copyright [[+copyright]] by [[+author]] [[+email]]
 * Created on [[+createdon]]
 *
[[+license]]
 *
 * @package [[+packageNameLower]]
 */


class MyClass {
    /** @var $modx modX */
    public $modx;
    /** @var $props array */
    public $props;

    function __construct(&$modx, &$config = array()) {
        $this->modx =& $modx;
        $this->props =& $config;
    }

    /* [[+code]] */

}',
      'locked' => 0,
      'properties' => 'a:0:{}',
      'static' => 0,
      'static_file' => '',
      'content' => '<?php
/**
 * [[+className]] class file for [[+packageName]] extra
 *
 * Copyright [[+copyright]] by [[+author]] [[+email]]
 * Created on [[+createdon]]
 *
[[+license]]
 *
 * @package [[+packageNameLower]]
 */


class MyClass {
    /** @var $modx modX */
    public $modx;
    /** @var $props array */
    public $props;

    function __construct(&$modx, &$config = array()) {
        $this->modx =& $modx;
        $this->props =& $config;
    }

    /* [[+code]] */

}',
    ),
  ),
  '08559c1269943442f7a24f113b92701b' => 
  array (
    'criteria' => 
    array (
      'name' => 'css.tpl',
    ),
    'object' => 
    array (
      'id' => 33,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'css.tpl',
      'description' => 'Chunk',
      'editor_type' => 0,
      'category' => 15,
      'cache_type' => 0,
      'snippet' => '/**
 * CSS file for [[+packageName]] extra
 *
 * Copyright [[+copyright]] by [[+author]] [[+email]]
 * Created on [[+createdon]]
 *
 * @package [[+packageNameLower]]
 */',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * CSS file for [[+packageName]] extra
 *
 * Copyright [[+copyright]] by [[+author]] [[+email]]
 * Created on [[+createdon]]
 *
 * @package [[+packageNameLower]]
 */',
    ),
  ),
  '08c5d13ac0aa0ba3861122676eaa126f' => 
  array (
    'criteria' => 
    array (
      'name' => 'example.config.php',
    ),
    'object' => 
    array (
      'id' => 34,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'example.config.php',
      'description' => 'Chunk',
      'editor_type' => 0,
      'category' => 15,
      'cache_type' => 0,
      'snippet' => '<?php

$packageNameLower = \'example\'; /* No spaces, no dashes */

$components = array(
    /* These are used to define the package and set values for placeholders */
    \'packageName\' => \'Example\',  /* No spaces, no dashes */
    \'packageNameLower\' => $packageNameLower,
    \'packageDescription\' => \'Example project for MyComponent extra\',
    \'version\' => \'1.0.0\',
    \'release\' => \'beta1\',
    \'author\' => \'Bob Ray\',
    \'email\' => \'<http://bobsguides.com>\',
    \'authorUrl\' => \'http://bobsguides.com\',
    \'authorSiteName\' => "Bob\'s Guides",
    \'packageDocumentationUrl\' => \'http://bobsguides.com/example-tutorial.html\',
    \'copyright\' => \'2014\',

    /* no need to edit this except to change format */
    \'createdon\' => strftime(\'%m-%d-%Y\'),

    \'gitHubUsername\' => \'BobRay\',
    \'gitHubRepository\' => \'Example\',

    /* two-letter code of your primary language */
    \'primaryLanguage\' => \'en\',

    /* Set directory and file permissions for project directories */
    \'dirPermission\' => 0755,  /* No quotes!! */
    \'filePermission\' => 0644, /* No quotes!! */

    /* Define source and target directories */

    /* path to MyComponent source files */
    \'mycomponentRoot\' => $this->modx->getOption(\'mc.root\', null,
        MODX_CORE_PATH . \'components/mycomponent/\'),

    /* path to new project root */
    \'targetRoot\' => MODX_ASSETS_PATH . \'mycomponents/\' . $packageNameLower . \'/\',


    /* *********************** NEW SYSTEM SETTINGS ************************ */

    /* If your extra needs new System Settings, set their field values here.
     * You can also create or edit them in the Manager (System -> System Settings),
     * and export them with exportObjects. If you do that, be sure to set
     * their namespace to the lowercase package name of your extra */

    \'newSystemSettings\' => array(
        \'example_system_setting1\' => array( // key
            \'key\' => \'example_system_setting1\',
            \'name\' => \'Example Setting One\',
            \'description\' => \'Description for setting one\',
            \'namespace\' => \'example\',
            \'xtype\' => \'textfield\',
            \'value\' => \'value1\',
            \'area\' => \'area1\',
        ),
        \'example_system_setting2\' => array( // key
            \'key\' => \'example_system_setting2\',
            \'name\' => \'Example Setting Two\',
            \'description\' => \'Description for setting two\',
            \'namespace\' => \'example\',
            \'xtype\' => \'combo-boolean\',
            \'value\' => true,
            \'area\' => \'area2\',
        ),
    ),

    /* ************************ NEW SYSTEM EVENTS ************************* */

    /* Array of your new System Events (not default
     * MODX System Events). Listed here so they can be created during
     * install and removed during uninstall.
     *
     * Warning: Do *not* list regular MODX System Events here !!! */

    \'newSystemEvents\' => array(
        \'OnMyEvent1\' => array(
            \'name\' => \'OnMyEvent1\',
        ),
        \'OnMyEvent2\' => array(
            \'name\' => \'OnMyEvent2\',
            \'groupname\' => \'Example\',
            \'service\' => 1,
        ),
    ),

    /* ************************ NAMESPACE(S) ************************* */
    /* (optional) Typically, there\'s only one namespace which is set
     * to the $packageNameLower value. Paths should end in a slash
    */

    \'namespaces\' => array(
        \'example\' => array(
            \'name\' => \'example\',
            \'path\' => \'{core_path}components/example/\',
            \'assets_path\' => \'{assets_path}components/example/\',
        ),

    ),

    /* ************************ CONTEXT(S) ************************* */
    /* (optional) List any contexts other than the \'web\' context here
    */

    \'contexts\' => array(
        \'example\' => array(
            \'key\' => \'example\',
            \'description\' => \'example context\',
            \'rank\' => 2,
        )
    ),

    /* *********************** CONTEXT SETTINGS ************************ */

    /* If your extra needs Context Settings, set their field values here.
     * You can also create or edit them in the Manager (Edit Context -> Context Settings),
     * and export them with exportObjects. If you do that, be sure to set
     * their namespace to the lowercase package name of your extra.
     * The context_key should be the name of an actual context.
     * */

    \'contextSettings\' => array(
        \'example_context_setting1\' => array(
            \'context_key\' => \'example\',
            \'key\' => \'example_context_setting1\',
            \'name\' => \'Example Setting One\',
            \'description\' => \'Description for setting one\',
            \'namespace\' => \'example\',
            \'xtype\' => \'textfield\',
            \'value\' => \'value1\',
            \'area\' => \'example\',
        ),
        \'example_context_setting2\' => array(
            \'context_key\' => \'example\',
            \'key\' => \'example_context_setting2\',
            \'name\' => \'Example Setting Two\',
            \'description\' => \'Description for setting two\',
            \'namespace\' => \'example\',
            \'xtype\' => \'combo-boolean\',
            \'value\' => true,
            \'area\' => \'example\',
        ),
    ),

    /* ************************* CATEGORIES *************************** */
    /* (optional) List of categories. This is only necessary if you
     * need to categories other than the one named for packageName
     * or want to nest categories.
    */

    \'categories\' => array(
        \'Example\' => array(
            \'category\' => \'Example\',
            \'parent\' => \'\',  /* top level category */
        ),
        \'category2\' => array(
            \'category\' => \'Category2\',
            \'parent\' => \'Example\', /* nested under Example */
        )
    ),

    /* *************************** MENUS ****************************** */

    /* If your extra needs Menus, you can create them here
     * or create them in the Manager, and export them with exportObjects.
     * Be sure to set their namespace to the lowercase package name
     * of your extra.
     *
     * Every menu should have exactly one action */

    \'menus\' => array(
        \'Example\' => array(
            \'text\' => \'Example\',
            \'parent\' => \'components\',
            \'description\' => \'ex_menu_desc\',
            \'icon\' => \'\',
            \'menuindex\' => 0,
            \'params\' => \'\',
            \'handler\' => \'\',
            \'permissions\' => \'\',

            \'action\' => array(
                \'id\' => \'\',
                \'namespace\' => \'example\',
                \'controller\' => \'index\',
                \'haslayout\' => true,
                \'lang_topics\' => \'example:default\',
                \'assets\' => \'\',
            ),
        ),
    ),


    /* ************************* ELEMENTS **************************** */

    /* Array containing elements for your extra. \'category\' is required
       for each element, all other fields are optional.
       Property Sets (if any) must come first!

       The standard file names are in this form:
           SnippetName.snippet.php
           PluginName.plugin.php
           ChunkName.chunk.html
           TemplateName.template.html

       If your file names are not standard, add this field:
          \'filename\' => \'actualFileName\',
    */


    \'elements\' => array(

        \'propertySets\' => array( /* all three fields are required */
            \'PropertySet1\' => array(
                \'name\' => \'PropertySet1\',
                \'description\' => \'Description for PropertySet1\',
                \'category\' => \'Example\',
            ),
            \'PropertySet2\' => array(
                \'name\' => \'PropertySet2\',
                \'description\' => \'Description for PropertySet2\',
                \'category\' => \'Example\',
            ),
        ),

        \'snippets\' => array(
            \'Snippet1\' => array(
                \'category\' => \'Example\',
                \'description\' => \'Description for Snippet one\',
                \'static\' => true,
            ),

            \'Snippet2\' => array( /* example with static and property set(s)  */
                \'category\' => \'Category2\',
                \'description\' => \'Description for Snippet two\',
                \'static\' => false,
                \'propertySets\' => array(
                    \'PropertySet1\',
                    \'PropertySet2\'
                ),
            ),

        ),
        \'plugins\' => array(
            \'Plugin1\' => array( /* minimal example */
                \'category\' => \'Example\',
            ),
            \'Plugin2\' => array( /* example with static, events, and property sets */
                \'category\' => \'Example\',
                \'description\' => \'Description for Plugin one\',
                \'static\' => false,
                \'propertySets\' => array( /* all property sets to be connected to element */
                    \'PropertySet1\',
                ),
                \'events\' => array(
                    /* minimal example - no fields */
                    \'OnUserFormSave\' => array(),
                    /* example with fields set */
                    \'OnMyEvent1\' => array(
                        \'priority\' => \'0\', /* priority of the event -- 0 is highest priority */
                        \'group\' => \'plugins\', /* should generally be set to \'plugins\' */
                        \'propertySet\' => \'PropertySet1\', /* property set to be used in this pluginEvent */
                    ),
                    \'OnMyEvent2\' => array(
                        \'priority\' => \'3\',
                        \'group\' => \'plugins\',
                        \'propertySet\' => \'\',
                    ),
                    \'OnDocFormSave\' => array(
                        \'priority\' => \'4\',
                        \'group\' => \'plugins\',
                        \'propertySet\' => \'\',
                    ),


                ),
            ),
        ),
        \'chunks\' => array(
            \'Chunk1\' => array(
                \'category\' => \'Example\',
            ),
            \'Chunk2\' => array(
                \'description\' => \'Description for Chunk two\',
                \'category\' => \'Example\',
                \'static\' => false,
                \'propertySets\' => array(
                    \'PropertySet2\',
                ),
            ),
        ),
        \'templates\' => array(
            \'Template1\' => array(
                \'category\' => \'Example\',
            ),
            \'Template2\' => array(
                \'category\' => \'Example\',
                \'description\' => \'Description for Template two\',
                \'static\' => false,
                \'propertySets\' => array(
                    \'PropertySet2\',
                ),
            ),
        ),
        \'templateVars\' => array(
            \'Tv1\' => array(
                \'category\' => \'Example\',
                \'description\' => \'Description for TV one\',
                \'caption\' => \'TV One\',
                \'default_text\' => \'Tv1 Default Text\',
                \'propertySets\' => array(
                    \'PropertySet1\',
                    \'PropertySet2\',
                ),
                \'templates\' => array(
                    \'default\' => 1,
                    \'Template1\' => 4,
                    \'Template2\' => 4,


                ),
            ),
            \'Tv2\' => array( /* example with templates, default, and static specified */
                \'category\' => \'Example\',
                \'description\' => \'Description for TV two\',
                \'caption\' => \'TV Two\',
                \'static\' => false,
                \'default_text\' => \'@INHERIT\',
                \'templates\' => array(
                    \'default\' => 3, /* second value is rank -- for ordering TVs when editing resource */
                    \'Template1\' => 4,
                    \'Template2\' => 1,
                ),
            ),
        ),
    ),
    /* (optional) will make all element objects static - \'static\' field above will be ignored */
    \'allStatic\' => false,


    /* ************************* RESOURCES ****************************
     Important: This list only affects Bootstrap. There is another
     list of resources below that controls ExportObjects.
     * ************************************************************** */
    /* Array of Resource pagetitles for your Extra; All other fields optional.
       You can set any resource field here */
    \'resources\' => array(
        \'Resource1\' => array( /* minimal example */
            \'pagetitle\' => \'Resource1\',
            \'alias\' => \'resource1\',
            \'context_key\' => \'example\',
        ),
        \'Resource2\' => array( /* example with other fields */
            \'pagetitle\' => \'Resource2\',
            \'alias\' => \'resource2\',
            \'context_key\' => \'example\',
            \'parent\' => \'Resource1\',
            \'template\' => \'Template2\',
            \'richtext\' => false,
            \'published\' => true,
            \'tvValues\' => array(
                \'Tv1\' => \'SomeValue\',
                \'Tv2\' => \'SomeOtherValue\',
            ),
        ),
    ),


    /* Array of languages for which you will have language files,
     *  and comma-separated list of topics
     *  (\'.inc.php\' will be added as a suffix). */
    \'languages\' => array(
        \'en\' => array(
            \'default\',
            \'properties\',
            \'forms\',
        ),
    ),
    /* ********************************************* */
    /* Define optional directories to create under assets.
     * Add your own as needed.
     * Set to true to create directory.
     * Set to hasAssets = false to skip.
     * Empty js and/or css files will be created.
     */
    \'hasAssets\' => true,

    \'assetsDirs\' => array(
        /* If true, a default (empty) CSS file will be created */
        \'css\' => true,

        /* If true, a default (empty) JS file will be created */
        \'js\' => true,

        \'images\' => true,
        \'audio\' => true,
        \'video\' => true,
        \'themes\' => true,
    ),
    /* minify any JS files */
    \'minifyJS\' => true,
    /* Create a single JS file from all JS files */
    \'createJSMinAll\' => true,
    /* if this is false, regular jsmin will be used.
       JSMinPlus is slower but more reliable */
    \'useJSMinPlus\' => true,

    /* These will automatically go under assets/components/yourcomponent/js/
       Format: directory:filename
       (no trailing slash on directory)
       if \'createCmpFiles is true, these will be ignored.
    */
    \'jsFiles\' => array(
        \'example.js\',
    ),

    /* Desired CSS files */
    \'cssFiles\' => array(
        \'example.css\',
    ),

    /* ********************************************* */
    /* Define basic directories and files to be created in project*/

    \'docs\' => array(
        \'readme.txt\',
        \'license.txt\',
        \'changelog.txt\',
        \'tutorial.html\'
    ),

    /* (optional) Description file for GitHub project home page */
    \'readme.md\' => true,
    /* assume every package has a core directory */
    \'hasCore\' => true,

    /* ********************************************* */
    /* (optional) Array of extra script resolver(s) to be run
     * during install. Note that resolvers to connect plugins to events,
     * property sets to elements, resources to templates, and TVs to
     * templates will be created automatically -- *don\'t* list those here!
     *
     * \'default\' creates a default resolver named after the package.
     * (other resolvers may be created above for TVs and plugins).
     * Suffix \'resolver.php\' will be added automatically */
    \'resolvers\' => array(
        \'default\',
        \'addUsers\'
    ),

    /* (optional) Validators can abort the install after checking
     * conditions. Array of validator names (no
     * prefix of suffix) or \'\' \'default\' creates a default resolver
     *  named after the package suffix \'validator.php\' will be added */

    \'validators\' => array(
        \'default\',
        \'hasGdLib\'
    ),

    /* (optional) install.options is needed if you will interact
     * with user during the install.
     * See the user.input.php file for more information.
     * Set this to \'install.options\' or \'\'
     * The file will be created as _build/install.options/user.input.php
     * Don\'t change the filename or directory name. */
    \'install.options\' => \'install.options\',


    /* Suffixes to use for resource and element code files (not implemented)  */
    \'suffixes\' => array(
        \'modPlugin\' => \'.php\',
        \'modSnippet\' => \'.php\',
        \'modChunk\' => \'.html\',
        \'modTemplate\' => \'.html\',
        \'modResource\' => \'.html\',
    ),


    /* ********************************************* */
    /* (optional) Only necessary if you will have class files.
     *
     * Array of class files to be created.
     *
     * Format is:
     *
     * \'ClassName\' => \'directory:filename\',
     *
     * or
     *
     *  \'ClassName\' => \'filename\',
     *
     * (\'.class.php\' will be appended automatically)
     *
     *  Class file will be created as:
     * yourcomponent/core/components/yourcomponent/model/[directory/]{filename}.class.php
     * Note: If a CMP is being created, classes containing the
     * project name will be ignored here.
     *
     * Set to array() if there are no classes. */
    \'classes\' => array(
        \'AnotherClass\' => \'example:anotherclass\',

        /* (optional) - Specify methods for each class.
           if \'function\' is missing, \'public function \' will
           be prepended. Curly braces will be added   */
        \'methods\' => array(
            /* Add one array here for each class with methods */
            \'AnotherClass\' => array(
                \'public function method1()\',
                \'method2($arg1, $arg2 = false)\',
            ),
        ),
    ),

    /* ************************************
     *  These values are for CMPs.
     *  Set any of these to an empty array if you don\'t need them.
     *  **********************************/

    /* If this is false, the rest of this section will be ignored */

    \'createCmpFiles\' => true,

    /* IMPORTANT: The array values in the rest of
       this section should be all lowercase */

    /* This is the main action file for your component.
       It will automatically go in core/component/yourcomponent/
    */

    \'actionFile\' => \'index.class.php\',

    /* CSS file for CMP */

    \'cssFile\' => \'mgr.css\',

    /* These will automatically go to core/components/yourcomponent/processors/
       format directory:filename
       \'.class.php\' will be appended to the filename

       Built-in processor classes include getlist, create, update, duplicate,
       import, and export. */

    \'processors\' => array(
        \'mgr/snippet:getlist\',
        \'mgr/snippet:changecategory\',
        \'mgr/snippet:remove\',

        \'mgr/chunk:getlist\',
        \'mgr/chunk:changecategory\',
        \'mgr/chunk:remove\',
    ),

    /* These will automatically go to core/components/yourcomponent/controllers[/directory]/filename
       Format: directory:filename */

    \'controllers\' => array(
        \':home.class.php\',
    ),

    /* These will automatically go in assets/components/yourcomponent/ */

    \'connectors\' => array(
        \'connector.php\'

    ),
    /* These will automatically go to assets/components/yourcomponent/js[/directory]/filename
       Format: directory:filename */

    \'cmpJsFiles\' => array(
        \':example.class.js\',
        \'sections:home.js\',
        \'widgets:home.panel.js\',
        \'widgets:snippet.grid.js\',
        \'widgets:chunk.grid.js\',
    ),

    /* These go to core/components/componentName/templates/
     * The format is:
     *    filename:content
     * content is optional
     */

    \'cmpTemplates\' => array (
         \'mgr:<div id="example-panel-home-div"></div>\',
    ),


    /* *******************************************
     * These settings control exportObjects.php  *
     ******************************************* */
    /* ExportObjects will update existing files. If you set dryRun
       to \'1\', ExportObjects will report what it would have done
       without changing anything. Note: On some platforms,
       dryRun is *very* slow  */

    \'dryRun\' => \'0\',

    /* Array of elements to export. All elements set below will be handled.
     *
     * To export resources, be sure to list pagetitles and/or IDs of parents
     * of desired resources
    */
    \'process\' => array(
        \'contexts\',
        \'snippets\',
        \'plugins\',
        \'templateVars\',
        \'templates\',
        \'chunks\',
        \'resources\',
        \'propertySets\',
        \'systemSettings\',
        \'contextSettings\',
        \'systemEvents\',
        \'menus\'
    ),
    /*  Array  of resources to process. You can specify specific resources
        or parent (container) resources, or both.

        They can be specified by pagetitle or ID, but you must use the same method
        for all settings and specify it here. Important: use IDs if you have
        duplicate pagetitles */
    \'getResourcesById\' => false,

    \'exportResources\' => array(
        \'Resource1\',
        \'Resource2\',
    ),
    /* Array of resource parent IDs to get children of. */
    \'parents\' => array(),
    /* Also export the listed parent resources
      (set to false to include just the children) */
    \'includeParents\' => false,


    /* ******************** LEXICON HELPER SETTINGS ***************** */
    /* These settings are used by LexiconHelper */
    \'rewriteCodeFiles\' => false,  /* remove ~~descriptions */
    \'rewriteLexiconFiles\' => true, /* automatically add missing strings to lexicon files */
    /* ******************************************* */

    /* Array of aliases used in code for the properties array.
     * Used by the checkproperties utility to check properties in code against
     * the properties in your properties transport files.
     * if you use something else, add it here (OK to remove ones you never use.
     * Search also checks with \'$this->\' prefix -- no need to add it here. */
    \'scriptPropertiesAliases\' => array(
        \'props\',
        \'sp\',
        \'config\',
        \'scriptProperties\'
    ),
);

return $components;',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => '',
      'content' => '<?php

$packageNameLower = \'example\'; /* No spaces, no dashes */

$components = array(
    /* These are used to define the package and set values for placeholders */
    \'packageName\' => \'Example\',  /* No spaces, no dashes */
    \'packageNameLower\' => $packageNameLower,
    \'packageDescription\' => \'Example project for MyComponent extra\',
    \'version\' => \'1.0.0\',
    \'release\' => \'beta1\',
    \'author\' => \'Bob Ray\',
    \'email\' => \'<http://bobsguides.com>\',
    \'authorUrl\' => \'http://bobsguides.com\',
    \'authorSiteName\' => "Bob\'s Guides",
    \'packageDocumentationUrl\' => \'http://bobsguides.com/example-tutorial.html\',
    \'copyright\' => \'2014\',

    /* no need to edit this except to change format */
    \'createdon\' => strftime(\'%m-%d-%Y\'),

    \'gitHubUsername\' => \'BobRay\',
    \'gitHubRepository\' => \'Example\',

    /* two-letter code of your primary language */
    \'primaryLanguage\' => \'en\',

    /* Set directory and file permissions for project directories */
    \'dirPermission\' => 0755,  /* No quotes!! */
    \'filePermission\' => 0644, /* No quotes!! */

    /* Define source and target directories */

    /* path to MyComponent source files */
    \'mycomponentRoot\' => $this->modx->getOption(\'mc.root\', null,
        MODX_CORE_PATH . \'components/mycomponent/\'),

    /* path to new project root */
    \'targetRoot\' => MODX_ASSETS_PATH . \'mycomponents/\' . $packageNameLower . \'/\',


    /* *********************** NEW SYSTEM SETTINGS ************************ */

    /* If your extra needs new System Settings, set their field values here.
     * You can also create or edit them in the Manager (System -> System Settings),
     * and export them with exportObjects. If you do that, be sure to set
     * their namespace to the lowercase package name of your extra */

    \'newSystemSettings\' => array(
        \'example_system_setting1\' => array( // key
            \'key\' => \'example_system_setting1\',
            \'name\' => \'Example Setting One\',
            \'description\' => \'Description for setting one\',
            \'namespace\' => \'example\',
            \'xtype\' => \'textfield\',
            \'value\' => \'value1\',
            \'area\' => \'area1\',
        ),
        \'example_system_setting2\' => array( // key
            \'key\' => \'example_system_setting2\',
            \'name\' => \'Example Setting Two\',
            \'description\' => \'Description for setting two\',
            \'namespace\' => \'example\',
            \'xtype\' => \'combo-boolean\',
            \'value\' => true,
            \'area\' => \'area2\',
        ),
    ),

    /* ************************ NEW SYSTEM EVENTS ************************* */

    /* Array of your new System Events (not default
     * MODX System Events). Listed here so they can be created during
     * install and removed during uninstall.
     *
     * Warning: Do *not* list regular MODX System Events here !!! */

    \'newSystemEvents\' => array(
        \'OnMyEvent1\' => array(
            \'name\' => \'OnMyEvent1\',
        ),
        \'OnMyEvent2\' => array(
            \'name\' => \'OnMyEvent2\',
            \'groupname\' => \'Example\',
            \'service\' => 1,
        ),
    ),

    /* ************************ NAMESPACE(S) ************************* */
    /* (optional) Typically, there\'s only one namespace which is set
     * to the $packageNameLower value. Paths should end in a slash
    */

    \'namespaces\' => array(
        \'example\' => array(
            \'name\' => \'example\',
            \'path\' => \'{core_path}components/example/\',
            \'assets_path\' => \'{assets_path}components/example/\',
        ),

    ),

    /* ************************ CONTEXT(S) ************************* */
    /* (optional) List any contexts other than the \'web\' context here
    */

    \'contexts\' => array(
        \'example\' => array(
            \'key\' => \'example\',
            \'description\' => \'example context\',
            \'rank\' => 2,
        )
    ),

    /* *********************** CONTEXT SETTINGS ************************ */

    /* If your extra needs Context Settings, set their field values here.
     * You can also create or edit them in the Manager (Edit Context -> Context Settings),
     * and export them with exportObjects. If you do that, be sure to set
     * their namespace to the lowercase package name of your extra.
     * The context_key should be the name of an actual context.
     * */

    \'contextSettings\' => array(
        \'example_context_setting1\' => array(
            \'context_key\' => \'example\',
            \'key\' => \'example_context_setting1\',
            \'name\' => \'Example Setting One\',
            \'description\' => \'Description for setting one\',
            \'namespace\' => \'example\',
            \'xtype\' => \'textfield\',
            \'value\' => \'value1\',
            \'area\' => \'example\',
        ),
        \'example_context_setting2\' => array(
            \'context_key\' => \'example\',
            \'key\' => \'example_context_setting2\',
            \'name\' => \'Example Setting Two\',
            \'description\' => \'Description for setting two\',
            \'namespace\' => \'example\',
            \'xtype\' => \'combo-boolean\',
            \'value\' => true,
            \'area\' => \'example\',
        ),
    ),

    /* ************************* CATEGORIES *************************** */
    /* (optional) List of categories. This is only necessary if you
     * need to categories other than the one named for packageName
     * or want to nest categories.
    */

    \'categories\' => array(
        \'Example\' => array(
            \'category\' => \'Example\',
            \'parent\' => \'\',  /* top level category */
        ),
        \'category2\' => array(
            \'category\' => \'Category2\',
            \'parent\' => \'Example\', /* nested under Example */
        )
    ),

    /* *************************** MENUS ****************************** */

    /* If your extra needs Menus, you can create them here
     * or create them in the Manager, and export them with exportObjects.
     * Be sure to set their namespace to the lowercase package name
     * of your extra.
     *
     * Every menu should have exactly one action */

    \'menus\' => array(
        \'Example\' => array(
            \'text\' => \'Example\',
            \'parent\' => \'components\',
            \'description\' => \'ex_menu_desc\',
            \'icon\' => \'\',
            \'menuindex\' => 0,
            \'params\' => \'\',
            \'handler\' => \'\',
            \'permissions\' => \'\',

            \'action\' => array(
                \'id\' => \'\',
                \'namespace\' => \'example\',
                \'controller\' => \'index\',
                \'haslayout\' => true,
                \'lang_topics\' => \'example:default\',
                \'assets\' => \'\',
            ),
        ),
    ),


    /* ************************* ELEMENTS **************************** */

    /* Array containing elements for your extra. \'category\' is required
       for each element, all other fields are optional.
       Property Sets (if any) must come first!

       The standard file names are in this form:
           SnippetName.snippet.php
           PluginName.plugin.php
           ChunkName.chunk.html
           TemplateName.template.html

       If your file names are not standard, add this field:
          \'filename\' => \'actualFileName\',
    */


    \'elements\' => array(

        \'propertySets\' => array( /* all three fields are required */
            \'PropertySet1\' => array(
                \'name\' => \'PropertySet1\',
                \'description\' => \'Description for PropertySet1\',
                \'category\' => \'Example\',
            ),
            \'PropertySet2\' => array(
                \'name\' => \'PropertySet2\',
                \'description\' => \'Description for PropertySet2\',
                \'category\' => \'Example\',
            ),
        ),

        \'snippets\' => array(
            \'Snippet1\' => array(
                \'category\' => \'Example\',
                \'description\' => \'Description for Snippet one\',
                \'static\' => true,
            ),

            \'Snippet2\' => array( /* example with static and property set(s)  */
                \'category\' => \'Category2\',
                \'description\' => \'Description for Snippet two\',
                \'static\' => false,
                \'propertySets\' => array(
                    \'PropertySet1\',
                    \'PropertySet2\'
                ),
            ),

        ),
        \'plugins\' => array(
            \'Plugin1\' => array( /* minimal example */
                \'category\' => \'Example\',
            ),
            \'Plugin2\' => array( /* example with static, events, and property sets */
                \'category\' => \'Example\',
                \'description\' => \'Description for Plugin one\',
                \'static\' => false,
                \'propertySets\' => array( /* all property sets to be connected to element */
                    \'PropertySet1\',
                ),
                \'events\' => array(
                    /* minimal example - no fields */
                    \'OnUserFormSave\' => array(),
                    /* example with fields set */
                    \'OnMyEvent1\' => array(
                        \'priority\' => \'0\', /* priority of the event -- 0 is highest priority */
                        \'group\' => \'plugins\', /* should generally be set to \'plugins\' */
                        \'propertySet\' => \'PropertySet1\', /* property set to be used in this pluginEvent */
                    ),
                    \'OnMyEvent2\' => array(
                        \'priority\' => \'3\',
                        \'group\' => \'plugins\',
                        \'propertySet\' => \'\',
                    ),
                    \'OnDocFormSave\' => array(
                        \'priority\' => \'4\',
                        \'group\' => \'plugins\',
                        \'propertySet\' => \'\',
                    ),


                ),
            ),
        ),
        \'chunks\' => array(
            \'Chunk1\' => array(
                \'category\' => \'Example\',
            ),
            \'Chunk2\' => array(
                \'description\' => \'Description for Chunk two\',
                \'category\' => \'Example\',
                \'static\' => false,
                \'propertySets\' => array(
                    \'PropertySet2\',
                ),
            ),
        ),
        \'templates\' => array(
            \'Template1\' => array(
                \'category\' => \'Example\',
            ),
            \'Template2\' => array(
                \'category\' => \'Example\',
                \'description\' => \'Description for Template two\',
                \'static\' => false,
                \'propertySets\' => array(
                    \'PropertySet2\',
                ),
            ),
        ),
        \'templateVars\' => array(
            \'Tv1\' => array(
                \'category\' => \'Example\',
                \'description\' => \'Description for TV one\',
                \'caption\' => \'TV One\',
                \'default_text\' => \'Tv1 Default Text\',
                \'propertySets\' => array(
                    \'PropertySet1\',
                    \'PropertySet2\',
                ),
                \'templates\' => array(
                    \'default\' => 1,
                    \'Template1\' => 4,
                    \'Template2\' => 4,


                ),
            ),
            \'Tv2\' => array( /* example with templates, default, and static specified */
                \'category\' => \'Example\',
                \'description\' => \'Description for TV two\',
                \'caption\' => \'TV Two\',
                \'static\' => false,
                \'default_text\' => \'@INHERIT\',
                \'templates\' => array(
                    \'default\' => 3, /* second value is rank -- for ordering TVs when editing resource */
                    \'Template1\' => 4,
                    \'Template2\' => 1,
                ),
            ),
        ),
    ),
    /* (optional) will make all element objects static - \'static\' field above will be ignored */
    \'allStatic\' => false,


    /* ************************* RESOURCES ****************************
     Important: This list only affects Bootstrap. There is another
     list of resources below that controls ExportObjects.
     * ************************************************************** */
    /* Array of Resource pagetitles for your Extra; All other fields optional.
       You can set any resource field here */
    \'resources\' => array(
        \'Resource1\' => array( /* minimal example */
            \'pagetitle\' => \'Resource1\',
            \'alias\' => \'resource1\',
            \'context_key\' => \'example\',
        ),
        \'Resource2\' => array( /* example with other fields */
            \'pagetitle\' => \'Resource2\',
            \'alias\' => \'resource2\',
            \'context_key\' => \'example\',
            \'parent\' => \'Resource1\',
            \'template\' => \'Template2\',
            \'richtext\' => false,
            \'published\' => true,
            \'tvValues\' => array(
                \'Tv1\' => \'SomeValue\',
                \'Tv2\' => \'SomeOtherValue\',
            ),
        ),
    ),


    /* Array of languages for which you will have language files,
     *  and comma-separated list of topics
     *  (\'.inc.php\' will be added as a suffix). */
    \'languages\' => array(
        \'en\' => array(
            \'default\',
            \'properties\',
            \'forms\',
        ),
    ),
    /* ********************************************* */
    /* Define optional directories to create under assets.
     * Add your own as needed.
     * Set to true to create directory.
     * Set to hasAssets = false to skip.
     * Empty js and/or css files will be created.
     */
    \'hasAssets\' => true,

    \'assetsDirs\' => array(
        /* If true, a default (empty) CSS file will be created */
        \'css\' => true,

        /* If true, a default (empty) JS file will be created */
        \'js\' => true,

        \'images\' => true,
        \'audio\' => true,
        \'video\' => true,
        \'themes\' => true,
    ),
    /* minify any JS files */
    \'minifyJS\' => true,
    /* Create a single JS file from all JS files */
    \'createJSMinAll\' => true,
    /* if this is false, regular jsmin will be used.
       JSMinPlus is slower but more reliable */
    \'useJSMinPlus\' => true,

    /* These will automatically go under assets/components/yourcomponent/js/
       Format: directory:filename
       (no trailing slash on directory)
       if \'createCmpFiles is true, these will be ignored.
    */
    \'jsFiles\' => array(
        \'example.js\',
    ),

    /* Desired CSS files */
    \'cssFiles\' => array(
        \'example.css\',
    ),

    /* ********************************************* */
    /* Define basic directories and files to be created in project*/

    \'docs\' => array(
        \'readme.txt\',
        \'license.txt\',
        \'changelog.txt\',
        \'tutorial.html\'
    ),

    /* (optional) Description file for GitHub project home page */
    \'readme.md\' => true,
    /* assume every package has a core directory */
    \'hasCore\' => true,

    /* ********************************************* */
    /* (optional) Array of extra script resolver(s) to be run
     * during install. Note that resolvers to connect plugins to events,
     * property sets to elements, resources to templates, and TVs to
     * templates will be created automatically -- *don\'t* list those here!
     *
     * \'default\' creates a default resolver named after the package.
     * (other resolvers may be created above for TVs and plugins).
     * Suffix \'resolver.php\' will be added automatically */
    \'resolvers\' => array(
        \'default\',
        \'addUsers\'
    ),

    /* (optional) Validators can abort the install after checking
     * conditions. Array of validator names (no
     * prefix of suffix) or \'\' \'default\' creates a default resolver
     *  named after the package suffix \'validator.php\' will be added */

    \'validators\' => array(
        \'default\',
        \'hasGdLib\'
    ),

    /* (optional) install.options is needed if you will interact
     * with user during the install.
     * See the user.input.php file for more information.
     * Set this to \'install.options\' or \'\'
     * The file will be created as _build/install.options/user.input.php
     * Don\'t change the filename or directory name. */
    \'install.options\' => \'install.options\',


    /* Suffixes to use for resource and element code files (not implemented)  */
    \'suffixes\' => array(
        \'modPlugin\' => \'.php\',
        \'modSnippet\' => \'.php\',
        \'modChunk\' => \'.html\',
        \'modTemplate\' => \'.html\',
        \'modResource\' => \'.html\',
    ),


    /* ********************************************* */
    /* (optional) Only necessary if you will have class files.
     *
     * Array of class files to be created.
     *
     * Format is:
     *
     * \'ClassName\' => \'directory:filename\',
     *
     * or
     *
     *  \'ClassName\' => \'filename\',
     *
     * (\'.class.php\' will be appended automatically)
     *
     *  Class file will be created as:
     * yourcomponent/core/components/yourcomponent/model/[directory/]{filename}.class.php
     * Note: If a CMP is being created, classes containing the
     * project name will be ignored here.
     *
     * Set to array() if there are no classes. */
    \'classes\' => array(
        \'AnotherClass\' => \'example:anotherclass\',

        /* (optional) - Specify methods for each class.
           if \'function\' is missing, \'public function \' will
           be prepended. Curly braces will be added   */
        \'methods\' => array(
            /* Add one array here for each class with methods */
            \'AnotherClass\' => array(
                \'public function method1()\',
                \'method2($arg1, $arg2 = false)\',
            ),
        ),
    ),

    /* ************************************
     *  These values are for CMPs.
     *  Set any of these to an empty array if you don\'t need them.
     *  **********************************/

    /* If this is false, the rest of this section will be ignored */

    \'createCmpFiles\' => true,

    /* IMPORTANT: The array values in the rest of
       this section should be all lowercase */

    /* This is the main action file for your component.
       It will automatically go in core/component/yourcomponent/
    */

    \'actionFile\' => \'index.class.php\',

    /* CSS file for CMP */

    \'cssFile\' => \'mgr.css\',

    /* These will automatically go to core/components/yourcomponent/processors/
       format directory:filename
       \'.class.php\' will be appended to the filename

       Built-in processor classes include getlist, create, update, duplicate,
       import, and export. */

    \'processors\' => array(
        \'mgr/snippet:getlist\',
        \'mgr/snippet:changecategory\',
        \'mgr/snippet:remove\',

        \'mgr/chunk:getlist\',
        \'mgr/chunk:changecategory\',
        \'mgr/chunk:remove\',
    ),

    /* These will automatically go to core/components/yourcomponent/controllers[/directory]/filename
       Format: directory:filename */

    \'controllers\' => array(
        \':home.class.php\',
    ),

    /* These will automatically go in assets/components/yourcomponent/ */

    \'connectors\' => array(
        \'connector.php\'

    ),
    /* These will automatically go to assets/components/yourcomponent/js[/directory]/filename
       Format: directory:filename */

    \'cmpJsFiles\' => array(
        \':example.class.js\',
        \'sections:home.js\',
        \'widgets:home.panel.js\',
        \'widgets:snippet.grid.js\',
        \'widgets:chunk.grid.js\',
    ),

    /* These go to core/components/componentName/templates/
     * The format is:
     *    filename:content
     * content is optional
     */

    \'cmpTemplates\' => array (
         \'mgr:<div id="example-panel-home-div"></div>\',
    ),


    /* *******************************************
     * These settings control exportObjects.php  *
     ******************************************* */
    /* ExportObjects will update existing files. If you set dryRun
       to \'1\', ExportObjects will report what it would have done
       without changing anything. Note: On some platforms,
       dryRun is *very* slow  */

    \'dryRun\' => \'0\',

    /* Array of elements to export. All elements set below will be handled.
     *
     * To export resources, be sure to list pagetitles and/or IDs of parents
     * of desired resources
    */
    \'process\' => array(
        \'contexts\',
        \'snippets\',
        \'plugins\',
        \'templateVars\',
        \'templates\',
        \'chunks\',
        \'resources\',
        \'propertySets\',
        \'systemSettings\',
        \'contextSettings\',
        \'systemEvents\',
        \'menus\'
    ),
    /*  Array  of resources to process. You can specify specific resources
        or parent (container) resources, or both.

        They can be specified by pagetitle or ID, but you must use the same method
        for all settings and specify it here. Important: use IDs if you have
        duplicate pagetitles */
    \'getResourcesById\' => false,

    \'exportResources\' => array(
        \'Resource1\',
        \'Resource2\',
    ),
    /* Array of resource parent IDs to get children of. */
    \'parents\' => array(),
    /* Also export the listed parent resources
      (set to false to include just the children) */
    \'includeParents\' => false,


    /* ******************** LEXICON HELPER SETTINGS ***************** */
    /* These settings are used by LexiconHelper */
    \'rewriteCodeFiles\' => false,  /* remove ~~descriptions */
    \'rewriteLexiconFiles\' => true, /* automatically add missing strings to lexicon files */
    /* ******************************************* */

    /* Array of aliases used in code for the properties array.
     * Used by the checkproperties utility to check properties in code against
     * the properties in your properties transport files.
     * if you use something else, add it here (OK to remove ones you never use.
     * Search also checks with \'$this->\' prefix -- no need to add it here. */
    \'scriptPropertiesAliases\' => array(
        \'props\',
        \'sp\',
        \'config\',
        \'scriptProperties\'
    ),
);

return $components;',
    ),
  ),
  'c391bdde09ccdc5bf0e68fbd1e948dee' => 
  array (
    'criteria' => 
    array (
      'name' => 'mycomponentform.tpl',
    ),
    'object' => 
    array (
      'id' => 35,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'mycomponentform.tpl',
      'description' => 'Chunk',
      'editor_type' => 0,
      'category' => 15,
      'cache_type' => 0,
      'snippet' => '<script type="text/javascript">
    function getRadioValue(formName, groupName) {
        var radioGroup = document[formName][groupName];
        for (var i=0; i<radioGroup.length; i++)  {
           if (radioGroup[i].checked)  {
           return radioGroup[i].value;
           }
        }
        return null;
    }

    function confirmSubmit() {
        val = getRadioValue(\'mc_form\', \'doit\');
        if (val == \'removeobjects\') {
            return confirm("[[+confirm_remove_objects]]");
        } else if (val == \'removeobjectsandfiles\') {
            return confirm("[[+confirm_remove_objects_and_files]]");
        } else {
            return true;
        }

    }

</script>



    <h3>MyComponent Actions</h3>



    <form id="mc_form" name="mc_form" method="post" action="[[~[[*id]]]]">
        <p>&nbsp;<b>[[+message]]</b></p>
        <label for="bootstrap">
        Current Project:
                    <input type="text" name="currentproject" value="[[+current_project]]" id="currentproject"/>

                </label><input type="submit" name="newproject" value="New Project">
                <br/><br />

                <label for="selectproject">

                   <select name="selectproject">
                      [[+projects]]
                   </select></label> <input type="submit" name="switchproject" value="Switch Project" id="selectproject">
                   <br />
                   <br />

        <label for="bootstrap">
            <input type="radio" name="doit" value="bootstrap" id="bootstrap"/>
            Bootstrap
        </label><br/><br />
        <label for="exportobjects"> <input type="radio" name="doit" value="exportobjects" id="exportobjects"/>
            ExportObjects</label><br/><br/>
        <label for="importobjects"> <input type="radio" name="doit" value="importobjects" id="importobjects"/>
                        ImportObjects</label><br/><br/>
        <label for="lexiconhelper"> <input type="radio" name="doit" value="lexiconhelper" id="lexiconhelper"/>
            LexiconHelper</label><br/><br/>
        <label for="checkproperties"> <input type="radio" name="doit" value="checkproperties" id="checkproperties"/>
            CheckProperties</label><br/><br/>
        <label for="build"> <input type="radio" name="doit" value="build" id="build"/>
            Build</label><br/><br/><br/><br/>
        <label for="removeobjects"> <input type="radio" name="doit" value="removeobjects" id="removeobjects"/>
            RemoveObjects</label><br/><br/>
            <label for="removeobjectsandfiles"> <input type="radio" name="doit" value="removeobjectsandfiles" id="removeobjectsandfiles"/>
                        RemoveObjects and Files</label><br/><br/><br/>

        <input type="submit" value="Submit" onclick="return confirmSubmit();">
    </form>
<br /><br/>


',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => '',
      'content' => '<script type="text/javascript">
    function getRadioValue(formName, groupName) {
        var radioGroup = document[formName][groupName];
        for (var i=0; i<radioGroup.length; i++)  {
           if (radioGroup[i].checked)  {
           return radioGroup[i].value;
           }
        }
        return null;
    }

    function confirmSubmit() {
        val = getRadioValue(\'mc_form\', \'doit\');
        if (val == \'removeobjects\') {
            return confirm("[[+confirm_remove_objects]]");
        } else if (val == \'removeobjectsandfiles\') {
            return confirm("[[+confirm_remove_objects_and_files]]");
        } else {
            return true;
        }

    }

</script>



    <h3>MyComponent Actions</h3>



    <form id="mc_form" name="mc_form" method="post" action="[[~[[*id]]]]">
        <p>&nbsp;<b>[[+message]]</b></p>
        <label for="bootstrap">
        Current Project:
                    <input type="text" name="currentproject" value="[[+current_project]]" id="currentproject"/>

                </label><input type="submit" name="newproject" value="New Project">
                <br/><br />

                <label for="selectproject">

                   <select name="selectproject">
                      [[+projects]]
                   </select></label> <input type="submit" name="switchproject" value="Switch Project" id="selectproject">
                   <br />
                   <br />

        <label for="bootstrap">
            <input type="radio" name="doit" value="bootstrap" id="bootstrap"/>
            Bootstrap
        </label><br/><br />
        <label for="exportobjects"> <input type="radio" name="doit" value="exportobjects" id="exportobjects"/>
            ExportObjects</label><br/><br/>
        <label for="importobjects"> <input type="radio" name="doit" value="importobjects" id="importobjects"/>
                        ImportObjects</label><br/><br/>
        <label for="lexiconhelper"> <input type="radio" name="doit" value="lexiconhelper" id="lexiconhelper"/>
            LexiconHelper</label><br/><br/>
        <label for="checkproperties"> <input type="radio" name="doit" value="checkproperties" id="checkproperties"/>
            CheckProperties</label><br/><br/>
        <label for="build"> <input type="radio" name="doit" value="build" id="build"/>
            Build</label><br/><br/><br/><br/>
        <label for="removeobjects"> <input type="radio" name="doit" value="removeobjects" id="removeobjects"/>
            RemoveObjects</label><br/><br/>
            <label for="removeobjectsandfiles"> <input type="radio" name="doit" value="removeobjectsandfiles" id="removeobjectsandfiles"/>
                        RemoveObjects and Files</label><br/><br/><br/>

        <input type="submit" value="Submit" onclick="return confirmSubmit();">
    </form>
<br /><br/>


',
    ),
  ),
  'f608d329f9c46e709b75aaed0b7d4207' => 
  array (
    'criteria' => 
    array (
      'name' => 'cmp.actionfile.php',
    ),
    'object' => 
    array (
      'id' => 36,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'cmp.actionfile.php',
      'description' => 'Chunk',
      'editor_type' => 0,
      'category' => 15,
      'cache_type' => 0,
      'snippet' => '<?php
/**
* Action file for [[+packageName]] extra
*
* Copyright [[+copyright]] by [[+author]] [[+email]]
* Created on [[+createdon]]
*
[[+license]]
*
* @package [[+packageNameLower]]
*/


abstract class mc_packageNameManagerController extends modExtraManagerController {
    /** @var mc_packageName $mc_packageNameLower */
    public $mc_packageNameLower = NULL;

    /**
     * Initializes the main manager controller.
     */
    public function initialize() {
        /* Instantiate the mc_packageName class in the controller */
        $path = $this->modx->getOption(\'mc_packageNameLower.core_path\',
                NULL, $this->modx->getOption(\'core_path\') .
                \'components/mc_packageNameLower/\') . \'model/mc_packageNameLower/\';
        require_once $path . \'mc_packageNameLower.class.php\';
        $this->mc_packageNameLower = new mc_packageName($this->modx);

        /* Optional alternative  - install PHP class as a service */

        /* $this->mc_packageNameLower = $this->modx->getService(\'mc_packageNameLower\',
             \'mc_packageName\', $path);*/

        /* Add the main javascript class and our configuration */
        $this->addJavascript($this->mc_packageNameLower->config[\'jsUrl\'] .
            \'mc_packageNameLower.class.js\');
        $this->addHtml(\'<script type="text/javascript">
        Ext.onReady(function() {
            mc_packageName.config = \' . $this->modx->toJSON($this->mc_packageNameLower->config) . \';
        });
        </script>\');
    }

    /**
     * Defines the lexicon topics to load in our controller.
     *
     * @return array
     */
    public function getLanguageTopics() {
        return array(\'mc_packageNameLower:default\');
    }

    /**
     * We can use this to check if the user has permission to see this
     * controller. We\'ll apply this in the admin section.
     *
     * @return bool
     */
    public function checkPermissions() {
        return true;
    }

    /**
     * The name for the template file to load.
     *
     * @return string
     */
    public function getTemplateFile() {
        return dirname(__FILE__) . \'/templates/mgr.tpl\';
        // return $this->mc_packageNameLower->config[\'templatesPath\'] . \'mgr.tpl\';
    }
}

/**
 * The Index Manager Controller is the default one that gets called when no
 * action is present.
 */
class IndexManagerController extends mc_packageNameManagerController {
    /**
     * Defines the name or path to the default controller to load.
     *
     * @return string
     */
    public static function getDefaultController() {
        return \'home\';
    }
}
',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => '',
      'content' => '<?php
/**
* Action file for [[+packageName]] extra
*
* Copyright [[+copyright]] by [[+author]] [[+email]]
* Created on [[+createdon]]
*
[[+license]]
*
* @package [[+packageNameLower]]
*/


abstract class mc_packageNameManagerController extends modExtraManagerController {
    /** @var mc_packageName $mc_packageNameLower */
    public $mc_packageNameLower = NULL;

    /**
     * Initializes the main manager controller.
     */
    public function initialize() {
        /* Instantiate the mc_packageName class in the controller */
        $path = $this->modx->getOption(\'mc_packageNameLower.core_path\',
                NULL, $this->modx->getOption(\'core_path\') .
                \'components/mc_packageNameLower/\') . \'model/mc_packageNameLower/\';
        require_once $path . \'mc_packageNameLower.class.php\';
        $this->mc_packageNameLower = new mc_packageName($this->modx);

        /* Optional alternative  - install PHP class as a service */

        /* $this->mc_packageNameLower = $this->modx->getService(\'mc_packageNameLower\',
             \'mc_packageName\', $path);*/

        /* Add the main javascript class and our configuration */
        $this->addJavascript($this->mc_packageNameLower->config[\'jsUrl\'] .
            \'mc_packageNameLower.class.js\');
        $this->addHtml(\'<script type="text/javascript">
        Ext.onReady(function() {
            mc_packageName.config = \' . $this->modx->toJSON($this->mc_packageNameLower->config) . \';
        });
        </script>\');
    }

    /**
     * Defines the lexicon topics to load in our controller.
     *
     * @return array
     */
    public function getLanguageTopics() {
        return array(\'mc_packageNameLower:default\');
    }

    /**
     * We can use this to check if the user has permission to see this
     * controller. We\'ll apply this in the admin section.
     *
     * @return bool
     */
    public function checkPermissions() {
        return true;
    }

    /**
     * The name for the template file to load.
     *
     * @return string
     */
    public function getTemplateFile() {
        return dirname(__FILE__) . \'/templates/mgr.tpl\';
        // return $this->mc_packageNameLower->config[\'templatesPath\'] . \'mgr.tpl\';
    }
}

/**
 * The Index Manager Controller is the default one that gets called when no
 * action is present.
 */
class IndexManagerController extends mc_packageNameManagerController {
    /**
     * Defines the name or path to the default controller to load.
     *
     * @return string
     */
    public static function getDefaultController() {
        return \'home\';
    }
}
',
    ),
  ),
  '011c6ec21c043ac1d8faffa7a62276c7' => 
  array (
    'criteria' => 
    array (
      'name' => 'cmp.changecategory.class.php',
    ),
    'object' => 
    array (
      'id' => 37,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'cmp.changecategory.class.php',
      'description' => 'Chunk',
      'editor_type' => 0,
      'category' => 15,
      'cache_type' => 0,
      'snippet' => '<?php
/**
 * Processor file for [[+packageName]] extra
 *
 * Copyright [[+copyright]] by [[+author]] [[+email]]
 * Created on [[+createdon]]
 *
[[+license]]
 *
 * @package [[+packageNameLower]]
 * @subpackage processors
 */

/* @var $modx modX */

// comment out the next line to make processor functional
class mc_ElementChangeCategoryProcessor extends modProcessor {
    public $classKey = \'modmc_Element\';
    public $languageTopics = array(\'[[+packageNameLower]]:default\');
    
    public function process() {

/* !!! Remove this line to make processor functional */
return $this->modx->error->success();

        if (!$this->modx->hasPermission(\'save_mc_element\')) {
            return $this->modx->error->failure($this->modx->lexicon(\'access_denied\'));
        }

        if (empty($scriptProperties[\'mc_elements\'])) {
            return $this->failure($this->modx->lexicon(\'mc_packageName.mc_elements_err_ns\'));
        }
        /* get parent */
        if (!empty($scriptProperties[\'category\'])) {
            $category = $this->modx->getObject(\'modCategory\',$scriptProperties[\'category\']);
            if (empty($category)) {
                return $this->failure($this->modx->lexicon(\'mc_element.category_err_nf\'));
            }
        }

        /* iterate over mc_elements */
        /** @var $mc_element modElement */
        $mc_elementIds = explode(\',\',$scriptProperties[\'mc_elements\']);
        foreach ($mc_elementIds as $mc_elementId) {
            $mc_element = $this->modx->getObject($this->classKey,$mc_elementId);
            if ($mc_element == null) continue;
        
            $mc_element->set(\'category\',$scriptProperties[\'category\']);
            $mc_element->save(3600);
        }
        return $this->success();
    }



}

return \'mc_ElementChangeCategoryProcessor\';',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => '',
      'content' => '<?php
/**
 * Processor file for [[+packageName]] extra
 *
 * Copyright [[+copyright]] by [[+author]] [[+email]]
 * Created on [[+createdon]]
 *
[[+license]]
 *
 * @package [[+packageNameLower]]
 * @subpackage processors
 */

/* @var $modx modX */

// comment out the next line to make processor functional
class mc_ElementChangeCategoryProcessor extends modProcessor {
    public $classKey = \'modmc_Element\';
    public $languageTopics = array(\'[[+packageNameLower]]:default\');
    
    public function process() {

/* !!! Remove this line to make processor functional */
return $this->modx->error->success();

        if (!$this->modx->hasPermission(\'save_mc_element\')) {
            return $this->modx->error->failure($this->modx->lexicon(\'access_denied\'));
        }

        if (empty($scriptProperties[\'mc_elements\'])) {
            return $this->failure($this->modx->lexicon(\'mc_packageName.mc_elements_err_ns\'));
        }
        /* get parent */
        if (!empty($scriptProperties[\'category\'])) {
            $category = $this->modx->getObject(\'modCategory\',$scriptProperties[\'category\']);
            if (empty($category)) {
                return $this->failure($this->modx->lexicon(\'mc_element.category_err_nf\'));
            }
        }

        /* iterate over mc_elements */
        /** @var $mc_element modElement */
        $mc_elementIds = explode(\',\',$scriptProperties[\'mc_elements\']);
        foreach ($mc_elementIds as $mc_elementId) {
            $mc_element = $this->modx->getObject($this->classKey,$mc_elementId);
            if ($mc_element == null) continue;
        
            $mc_element->set(\'category\',$scriptProperties[\'category\']);
            $mc_element->save(3600);
        }
        return $this->success();
    }



}

return \'mc_ElementChangeCategoryProcessor\';',
    ),
  ),
  '06c41fe1a766088614f73e92fdfe1671' => 
  array (
    'criteria' => 
    array (
      'name' => 'cmp.classfile.php',
    ),
    'object' => 
    array (
      'id' => 38,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'cmp.classfile.php',
      'description' => 'Chunk',
      'editor_type' => 0,
      'category' => 15,
      'cache_type' => 0,
      'snippet' => '<?php
/**
 * CMP class file for [[+packageName]] extra
 *
 * Copyright [[+copyright]] by [[+author]] [[+email]]
 * Created on [[+createdon]]
 *
[[+license]]
 *
 * @package [[+packageNameLower]]
 */


 class mc_packageName {
    /** @var $modx modX */
    public $modx;
    /** @var $props array */
    public $config;

    function __construct(modX &$modx,array $config = array()) {
        $this->modx =& $modx;
        $corePath = $modx->getOption(\'mc_packageNameLower.core_path\',null,
            $modx->getOption(\'core_path\').\'components/mc_packageNameLower/\');
        $assetsUrl = $modx->getOption(\'mc_packageNameLower.assets_url\',null,
            $modx->getOption(\'assets_url\').\'components/mc_packageNameLower/\');

        $this->config = array_merge(array(
            \'corePath\' => $corePath,
            \'chunksPath\' => $corePath.\'elements/chunks/\',
            \'modelPath\' => $corePath.\'model/\',
            \'processorsPath\' => $corePath.\'processors/\',
            \'templatesPath\' => $corePath . \'templates/\',

            \'assetsUrl\' => $assetsUrl,
            \'connector_url\' => $assetsUrl.\'connector.php\',
            \'cssUrl\' => $assetsUrl.\'css/\',
            \'jsUrl\' => $assetsUrl.\'js/\',
        ),$config);

        $this->modx->addPackage(\'mc_packageNameLower\',$this->config[\'modelPath\']);
        if ($this->modx->lexicon) {
            $this->modx->lexicon->load(\'mc_packageNameLower:default\');
        }
    }

    /**
     * Initializes mc_packageName based on a specific context.
     *
     * @access public
     * @param string $ctx The context to initialize in.
     * @return string The processed content.
     */
    public function initialize($ctx = \'mgr\') {
        $output = \'\';
        switch ($ctx) {
            case \'mgr\':
                if (!$this->modx->loadClass(\'mc_packageNameLower.request.mc_packageNameControllerRequest\',
                    $this->config[\'modelPath\'],true,true)) {
                        return \'Could not load controller request handler.\';
                }
                $this->request = new mc_packageNameControllerRequest($this);
                $output = $this->request->handleRequest();
                break;
        }
        return $output;
    }
}',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => '',
      'content' => '<?php
/**
 * CMP class file for [[+packageName]] extra
 *
 * Copyright [[+copyright]] by [[+author]] [[+email]]
 * Created on [[+createdon]]
 *
[[+license]]
 *
 * @package [[+packageNameLower]]
 */


 class mc_packageName {
    /** @var $modx modX */
    public $modx;
    /** @var $props array */
    public $config;

    function __construct(modX &$modx,array $config = array()) {
        $this->modx =& $modx;
        $corePath = $modx->getOption(\'mc_packageNameLower.core_path\',null,
            $modx->getOption(\'core_path\').\'components/mc_packageNameLower/\');
        $assetsUrl = $modx->getOption(\'mc_packageNameLower.assets_url\',null,
            $modx->getOption(\'assets_url\').\'components/mc_packageNameLower/\');

        $this->config = array_merge(array(
            \'corePath\' => $corePath,
            \'chunksPath\' => $corePath.\'elements/chunks/\',
            \'modelPath\' => $corePath.\'model/\',
            \'processorsPath\' => $corePath.\'processors/\',
            \'templatesPath\' => $corePath . \'templates/\',

            \'assetsUrl\' => $assetsUrl,
            \'connector_url\' => $assetsUrl.\'connector.php\',
            \'cssUrl\' => $assetsUrl.\'css/\',
            \'jsUrl\' => $assetsUrl.\'js/\',
        ),$config);

        $this->modx->addPackage(\'mc_packageNameLower\',$this->config[\'modelPath\']);
        if ($this->modx->lexicon) {
            $this->modx->lexicon->load(\'mc_packageNameLower:default\');
        }
    }

    /**
     * Initializes mc_packageName based on a specific context.
     *
     * @access public
     * @param string $ctx The context to initialize in.
     * @return string The processed content.
     */
    public function initialize($ctx = \'mgr\') {
        $output = \'\';
        switch ($ctx) {
            case \'mgr\':
                if (!$this->modx->loadClass(\'mc_packageNameLower.request.mc_packageNameControllerRequest\',
                    $this->config[\'modelPath\'],true,true)) {
                        return \'Could not load controller request handler.\';
                }
                $this->request = new mc_packageNameControllerRequest($this);
                $output = $this->request->handleRequest();
                break;
        }
        return $output;
    }
}',
    ),
  ),
  '6d98f1f648a5675651d024fb61868e9f' => 
  array (
    'criteria' => 
    array (
      'name' => 'cmp.connectorfile.tpl',
    ),
    'object' => 
    array (
      'id' => 39,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'cmp.connectorfile.tpl',
      'description' => 'Chunk',
      'editor_type' => 0,
      'category' => 15,
      'cache_type' => 0,
      'snippet' => '<?php
/**
* Connector file for [[+packageName]] extra
*
* Copyright [[+copyright]] by [[+author]] [[+email]]
* Created on [[+createdon]]
*
[[+license]]
*
* @package [[+packageNameLower]]
*/
/* @var $modx modX */

require_once dirname(dirname(dirname(dirname(__FILE__)))) . \'/config.core.php\';
require_once MODX_CORE_PATH . \'config/\' . MODX_CONFIG_KEY . \'.inc.php\';
require_once MODX_CONNECTORS_PATH . \'index.php\';

$[[+packageNameLower]]CorePath = $modx->getOption(\'[[+packageNameLower]].core_path\', null, $modx->getOption(\'core_path\') . \'components/[[+packageNameLower]]/\');
require_once $[[+packageNameLower]]CorePath . \'model/[[+packageNameLower]]/[[+packageNameLower]].class.php\';
$modx->[[+packageNameLower]] = new [[+packageName]]($modx);

$modx->lexicon->load(\'[[+packageNameLower]]:default\');

/* handle request */
$path = $modx->getOption(\'processorsPath\', $modx->[[+packageNameLower]]->config, $[[+packageNameLower]]CorePath . \'processors/\');
$modx->request->handleRequest(array(
    \'processors_path\' => $path,
    \'location\' => \'\',
));',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => '',
      'content' => '<?php
/**
* Connector file for [[+packageName]] extra
*
* Copyright [[+copyright]] by [[+author]] [[+email]]
* Created on [[+createdon]]
*
[[+license]]
*
* @package [[+packageNameLower]]
*/
/* @var $modx modX */

require_once dirname(dirname(dirname(dirname(__FILE__)))) . \'/config.core.php\';
require_once MODX_CORE_PATH . \'config/\' . MODX_CONFIG_KEY . \'.inc.php\';
require_once MODX_CONNECTORS_PATH . \'index.php\';

$[[+packageNameLower]]CorePath = $modx->getOption(\'[[+packageNameLower]].core_path\', null, $modx->getOption(\'core_path\') . \'components/[[+packageNameLower]]/\');
require_once $[[+packageNameLower]]CorePath . \'model/[[+packageNameLower]]/[[+packageNameLower]].class.php\';
$modx->[[+packageNameLower]] = new [[+packageName]]($modx);

$modx->lexicon->load(\'[[+packageNameLower]]:default\');

/* handle request */
$path = $modx->getOption(\'processorsPath\', $modx->[[+packageNameLower]]->config, $[[+packageNameLower]]CorePath . \'processors/\');
$modx->request->handleRequest(array(
    \'processors_path\' => $path,
    \'location\' => \'\',
));',
    ),
  ),
  'ad6f1d43e9be5777c1c471c41462bf0c' => 
  array (
    'criteria' => 
    array (
      'name' => 'cmp.controllerhome.tpl',
    ),
    'object' => 
    array (
      'id' => 40,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'cmp.controllerhome.tpl',
      'description' => 'Chunk',
      'editor_type' => 0,
      'category' => 15,
      'cache_type' => 0,
      'snippet' => '<?php
/**
 * Controller file for [[+packageName]] extra
 *
 * Copyright [[+copyright]] by [[+author]] [[+email]]
 * Created on [[+createdon]]
 *
[[+license]]
 *
 * @package [[+packageNameLower]]
 * @subpackage controllers
 */
/* @var $modx modX */

class mc_packageNameHomeManagerController extends mc_packageNameManagerController {
    /**
     * The pagetitle to put in the <title> attribute.
     *
     * @return null|string
     */
    public function getPageTitle() {
        return $this->modx->lexicon(\'mc_packageNameLower\');
    }

    /**
     * Register all the needed javascript files.
     */


    public function loadCustomCssJs() {
        $this->addJavascript($this->mc_packageNameLower->config[\'jsUrl\'] . \'widgets/chunk.grid.js\');
        $this->addJavascript($this->mc_packageNameLower->config[\'jsUrl\'] . \'widgets/snippet.grid.js\');
        $this->addJavascript($this->mc_packageNameLower->config[\'jsUrl\'] . \'widgets/home.panel.js\');
        $this->addLastJavascript($this->mc_packageNameLower->config[\'jsUrl\'] . \'sections/home.js\');

        $this->addCss($this->mc_packageNameLower->config[\'cssUrl\'] . \'mgr.css\');


    }
}',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => '',
      'content' => '<?php
/**
 * Controller file for [[+packageName]] extra
 *
 * Copyright [[+copyright]] by [[+author]] [[+email]]
 * Created on [[+createdon]]
 *
[[+license]]
 *
 * @package [[+packageNameLower]]
 * @subpackage controllers
 */
/* @var $modx modX */

class mc_packageNameHomeManagerController extends mc_packageNameManagerController {
    /**
     * The pagetitle to put in the <title> attribute.
     *
     * @return null|string
     */
    public function getPageTitle() {
        return $this->modx->lexicon(\'mc_packageNameLower\');
    }

    /**
     * Register all the needed javascript files.
     */


    public function loadCustomCssJs() {
        $this->addJavascript($this->mc_packageNameLower->config[\'jsUrl\'] . \'widgets/chunk.grid.js\');
        $this->addJavascript($this->mc_packageNameLower->config[\'jsUrl\'] . \'widgets/snippet.grid.js\');
        $this->addJavascript($this->mc_packageNameLower->config[\'jsUrl\'] . \'widgets/home.panel.js\');
        $this->addLastJavascript($this->mc_packageNameLower->config[\'jsUrl\'] . \'sections/home.js\');

        $this->addCss($this->mc_packageNameLower->config[\'cssUrl\'] . \'mgr.css\');


    }
}',
    ),
  ),
  'f65fc2a20bd0d5f57eb97f131952f74c' => 
  array (
    'criteria' => 
    array (
      'name' => 'cmp.defaultjs.tpl',
    ),
    'object' => 
    array (
      'id' => 41,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'cmp.defaultjs.tpl',
      'description' => 'Chunk',
      'editor_type' => 0,
      'category' => 15,
      'cache_type' => 0,
      'snippet' => '/**
* JS file for [[+packageName]] extra
*
* Copyright [[+copyright]] by [[+author]] [[+email]]
* Created on [[+createdon]]
*
[[+license]]
* @package [[+packageNameLower]]
*/
        
/* These are for LexiconHelper:
   $modx->lexicon->load(\'[[+packageNameLower]]:default\');
   include \'[[+packageNameLower]].class.php\'
 */
var [[+packageName]] = function (config) {
    config = config || {};
    [[+packageName]].superclass.constructor.call(this, config);
};
Ext.extend([[+packageName]], Ext.Component, {
    page: {}, window: {}, grid: {}, tree: {}, panel: {}, combo: {}, config: {}
});
Ext.reg(\'[[+packageNameLower]]\', [[+packageName]]);

var [[+packageName]] = new [[+packageName]]();',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => '',
      'content' => '/**
* JS file for [[+packageName]] extra
*
* Copyright [[+copyright]] by [[+author]] [[+email]]
* Created on [[+createdon]]
*
[[+license]]
* @package [[+packageNameLower]]
*/
        
/* These are for LexiconHelper:
   $modx->lexicon->load(\'[[+packageNameLower]]:default\');
   include \'[[+packageNameLower]].class.php\'
 */
var [[+packageName]] = function (config) {
    config = config || {};
    [[+packageName]].superclass.constructor.call(this, config);
};
Ext.extend([[+packageName]], Ext.Component, {
    page: {}, window: {}, grid: {}, tree: {}, panel: {}, combo: {}, config: {}
});
Ext.reg(\'[[+packageNameLower]]\', [[+packageName]]);

var [[+packageName]] = new [[+packageName]]();',
    ),
  ),
  '2f1eec5780dc3e3370f0669def6960de' => 
  array (
    'criteria' => 
    array (
      'name' => 'cmp.getlist.class.php',
    ),
    'object' => 
    array (
      'id' => 42,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'cmp.getlist.class.php',
      'description' => 'Chunk',
      'editor_type' => 0,
      'category' => 15,
      'cache_type' => 0,
      'snippet' => '<?php
/**
 * Processor file for [[+packageName]] extra
 *
 * Copyright [[+copyright]] by [[+author]] [[+email]]
 * Created on [[+createdon]]
 *
[[+license]]
 *
 * @package [[+packageNameLower]]
 * @subpackage processors
 */

/* @var $modx modX */


class mc_ProcessorTypeProcessor extends modObjectGetListProcessor {
    public $classKey = \'modmc_Element\';
    public $languageTopics = array(\'mc_packageNameLower:default\');
    public $defaultSortField = \'name\';
    public $defaultSortDirection = \'ASC\';


    /**
     * Convert category ID to category name for objects with a category.
     * Convert template ID to template name for objects with a template
     *
     * Note: It\'s much more efficient to do these with a join, but that can
     * only be done for objects known to have the field. This code can
     * be used on any object.
     *
     * @param xPDOObject $object
     * @return array
     */
    public function prepareRow(xPDOObject $object) {
        $fields = $object->toArray();
        if (array_key_exists(\'category\', $fields)) {
            if (!empty($fields[\'category\'])) {
                $categoryObj = $this->modx->getObject(\'modCategory\', $fields[\'category\']);
                if ($categoryObj) {
                    $fields[\'category\'] = $categoryObj->get(\'category\');
                } else {
                    $fields[\'category\'] = $this->modx->lexicon(\'invalid_category\');
                }
            } else {
                $fields[\'category\'] = $this->modx->lexicon(\'none\');
            }
        }
        if (array_key_exists(\'template\', $fields)) {
            if (!empty($fields[\'template\'])) {
                $templateObj = $this->modx->getObject(\'modTemplate\', $fields[\'template\']);
                if ($templateObj) {
                    $fields[\'template\'] = $templateObj->get(\'category\');
                } else {
                    $fields[\'template\'] = $this->modx->lexicon(\'invalid_template\');
                }
            } else {
                $fields[\'template\'] = $this->modx->lexicon(\'none\');
            }
        }


        return $fields;
    }
}
return \'mc_ProcessorTypeProcessor\';
',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => '',
      'content' => '<?php
/**
 * Processor file for [[+packageName]] extra
 *
 * Copyright [[+copyright]] by [[+author]] [[+email]]
 * Created on [[+createdon]]
 *
[[+license]]
 *
 * @package [[+packageNameLower]]
 * @subpackage processors
 */

/* @var $modx modX */


class mc_ProcessorTypeProcessor extends modObjectGetListProcessor {
    public $classKey = \'modmc_Element\';
    public $languageTopics = array(\'mc_packageNameLower:default\');
    public $defaultSortField = \'name\';
    public $defaultSortDirection = \'ASC\';


    /**
     * Convert category ID to category name for objects with a category.
     * Convert template ID to template name for objects with a template
     *
     * Note: It\'s much more efficient to do these with a join, but that can
     * only be done for objects known to have the field. This code can
     * be used on any object.
     *
     * @param xPDOObject $object
     * @return array
     */
    public function prepareRow(xPDOObject $object) {
        $fields = $object->toArray();
        if (array_key_exists(\'category\', $fields)) {
            if (!empty($fields[\'category\'])) {
                $categoryObj = $this->modx->getObject(\'modCategory\', $fields[\'category\']);
                if ($categoryObj) {
                    $fields[\'category\'] = $categoryObj->get(\'category\');
                } else {
                    $fields[\'category\'] = $this->modx->lexicon(\'invalid_category\');
                }
            } else {
                $fields[\'category\'] = $this->modx->lexicon(\'none\');
            }
        }
        if (array_key_exists(\'template\', $fields)) {
            if (!empty($fields[\'template\'])) {
                $templateObj = $this->modx->getObject(\'modTemplate\', $fields[\'template\']);
                if ($templateObj) {
                    $fields[\'template\'] = $templateObj->get(\'category\');
                } else {
                    $fields[\'template\'] = $this->modx->lexicon(\'invalid_template\');
                }
            } else {
                $fields[\'template\'] = $this->modx->lexicon(\'none\');
            }
        }


        return $fields;
    }
}
return \'mc_ProcessorTypeProcessor\';
',
    ),
  ),
  'd65af826010c4eb36ae63f0b48ffc796' => 
  array (
    'criteria' => 
    array (
      'name' => 'cmp.grid.tpl',
    ),
    'object' => 
    array (
      'id' => 43,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'cmp.grid.tpl',
      'description' => 'Chunk',
      'editor_type' => 0,
      'category' => 15,
      'cache_type' => 0,
      'snippet' => '/**
 * JS file for [[+packageName]] extra
 *
 * Copyright 2013 by Bob Ray <http://bobsguides.com>
 * Created on 04-13-2013
 *
 * [[+packageName]] is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * [[+packageName]] is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * [[+packageName]]; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 * @package [[+packageNameLower]]
 */
/* These are for LexiconHelper:
 $modx->lexicon->load(\'[[+packageNameLower]]:default\');
 include \'[[+packageNameLower]].class.php\'
 */

[[+packageName]].grid.[[+Element]]s = function (config) {
    config = config || {};
    this.sm = new Ext.grid.CheckboxSelectionModel();

    Ext.applyIf(config, {
        url: [[+packageName]].config.connector_url
        , baseParams: {
           action: \'mgr/[[+element]]/getlist\'
           ,thread: config.thread
        }
        , pageSize: 300
        , fields: [
            {name:\'id\', sortType: Ext.data.SortTypes.asInt}
            , {name: \'name\', sortType: Ext.data.SortTypes.asUCString}
            , {name: \'category\', sortType: Ext.data.SortTypes.asUCString}
            , {name: \'description\'}
         ]
        , paging: true
        , autosave: false
        , remoteSort: false
        , autoExpandColumn: \'description\'
        , cls: \'[[+packageNameLower]]-grid\'
        , sm: this.sm
        , columns: [this.sm, {
            header: _(\'id\')
            ,dataIndex: \'id\'
            ,sortable: true
            ,width: 50
        }, {
            header: _(\'name\')
            ,dataIndex: \'name\'
            ,sortable: true
            ,width: 100
                                                                                                           }, {
           header: _(\'category\'),
            dataIndex: \'category\',
            sortable: true,
            width: 120
        }, {
            header: _(\'description\')
            , dataIndex: \'description\'
            , sortable: false
            , width: 300
        }]
        ,viewConfig: {
            forceFit: true,
            enableRowBody: true,
            showPreview: true,
            getRowClass: function (rec, ri, p) {
                var cls = \'[[+packageNameLower]]-row\';

                if (this.showPreview) {
                    return cls + \' [[+packageNameLower]]-resource-expanded\';
                }
                return cls + \' [[+packageNameLower]]-resource-collapsed\';
            }
        }
        , tbar: [{
                text: \'Bulk Actions\'
                , menu: this.getBatchMenu()
            }
            ,{xtype: \'tbspacer\', width: 200}
            ,{
                xtype: \'button\'
                , id: \'[[+packageNameLower]]-[[+element]]s-reload\'
                , text: \'reload\'
                , listeners: {
                    \'click\': {fn: this.reload[[+Element]]s, scope: this}
                }
            }
        ]
    });
    [[+packageName]].grid.[[+Element]]s.superclass.constructor.call(this, config)
};
Ext.extend([[+packageName]].grid.[[+Element]]s, MODx.grid.Grid, {
     reload[[+Element]]s: function () {
        this.getStore().baseParams = {
            action: \'mgr/[[+element]]/getList\'
            ,orphanSearch: \'mod[[+Element]]\'
        };

        this.getBottomToolbar().changePage(1);
        this.refresh();

    }
    , _showMenu: function (g, ri, e) {
        e.stopEvent();
        e.preventDefault();
        this.menu.record = this.getStore().getAt(ri).data;
        if (!this.getSelectionModel().isSelected(ri)) {
            this.getSelectionModel().selectRow(ri);
        }
        this.menu.removeAll();

        var m = [];
        if (this.menu.record.menu) {
            m = this.menu.record.menu;
            if (m.length > 0) {
                this.addContextMenuItem(m);
                this.menu.show(e.target);
            }
        } else {
            var z = this.getBatchMenu();

            for (var zz = 0; zz < z.length; zz++) {
                this.menu.add(z[zz]);
            }
            this.menu.show(e.target);
        }
    }
    , getSelectedAsList: function () {
        var sels = this.getSelectionModel().getSelections();
        if (sels.length <= 0) return false;

        var cs = \'\';
        for (var i = 0; i < sels.length; i++) {
            cs += \',\' + sels[i].data.id;
        }
        cs = Ext.util.Format.substr(cs, 1);
        return cs;
    }

    , changeCategory: function (btn, e) {
        var cs = this.getSelectedAsList();
        if (cs === false) return false;

        var r = {ids: cs};
        if (!this.changeCategoryWindow) {
            this.changeCategoryWindow = MODx.load({
                  xtype: \'[[+packageNameLower]]-[[+element]]-window-change-category\'
                  , record: r
                  , listeners: {
                    \'success\': {fn: function (r) {
                        // this.refresh();
                        var sels = this.getSelectionModel().getSelections();
                        var cat = Ext.getCmp(\'[[+packageNameLower]]-[[+element]]-category-combo\').lastSelectionText;
                        var s = this.getStore();
                        for (var i = 0; i < sels.length; i = i + 1) {
                            var id = sels[i].get(\'id\');
                            var ri = id;
                            var record = s.getById(ri);
                            record.set("category", cat);
                            record.commit();
                        }
                        this.getSelectionModel().clearSelections(false);
                    }, scope: this}
                }
                                                  });
        }
        this.changeCategoryWindow.setValues(r);
        this.changeCategoryWindow.show(e.target);
        return true;
    }
    , [[+element]]Remove: function () {
        var cs = this.getSelectedAsList();
        if (cs === false) return false;
        MODx.msg.confirm({
             title: _(\'[[+packageNameLower]].delete\')
             , text: _(\'[[+packageNameLower]].confirm_delete\')
             , url: this.config.url
             , params: {
                action: \'mgr/[[+element]]/remove\'
                , ids: cs
            }
            , listeners: {
                \'success\': {fn: function (r) {
                    // this.refresh();
                    var sels = this.getSelectionModel().getSelections();
                    if (sels.length <= 0) return false;
                    var s = this.getStore();
                    for (var i = 0; i < sels.length; i = i + 1) {

                        var id = sels[i].get(\'id\');
                        var ri = id;
                        var record = s.getById(ri);
                        s.remove(record);
                    }
                }
                , scope: this}
                , \'failure\': {fn: function (r) {
                    MODx.msg.alert();
                }
                , scope: this}
            }
        });
        return true;
    }

    , getBatchMenu: function () {
        var bm = [];
        bm.push(
            {
                text: _(\'new_category\')
                , handler: this.changeCategory
                , scope: this
            }
            , \'-\'
            , {
                text: _(\'remove_[[+element]]\')+\'(s)\'
                ,handler: this.[[+element]]Remove
                , scope: this
            });
        return bm;
    }
});
Ext.reg(\'[[+packageNameLower]]-grid-[[+element]]\', [[+packageName]].grid.[[+Element]]s);


[[+packageName]].window.ChangeCategory = function (config) {
    config = config || {};
    Ext.applyIf(config, {
        title: _(\'new_category\')
        , url: [[+packageName]].config.connector_url
        , baseParams: {
            action: \'mgr/[[+element]]/changecategory\'
            }
        ,width: 400
        ,fields: [{
            xtype: \'hidden\'
            ,name: \'[[+element]]s\'
        },{
            xtype: \'modx-combo-category\'
            ,id: \'[[+packageNameLower]]-[[+element]]-category-combo\'
            ,fieldLabel: _(\'category\')
            ,name: \'category\'
            ,hiddenName: \'category\'
            ,anchor: \'90%\'
        }]
    });
    [[+packageName]].window.ChangeCategory.superclass.constructor.call(this, config);
};
Ext.extend([[+packageName]].window.ChangeCategory, MODx.Window);
Ext.reg(\'[[+packageNameLower]]-[[+element]]-window-change-category\', [[+packageName]].window.ChangeCategory);
',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * JS file for [[+packageName]] extra
 *
 * Copyright 2013 by Bob Ray <http://bobsguides.com>
 * Created on 04-13-2013
 *
 * [[+packageName]] is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * [[+packageName]] is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * [[+packageName]]; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 * @package [[+packageNameLower]]
 */
/* These are for LexiconHelper:
 $modx->lexicon->load(\'[[+packageNameLower]]:default\');
 include \'[[+packageNameLower]].class.php\'
 */

[[+packageName]].grid.[[+Element]]s = function (config) {
    config = config || {};
    this.sm = new Ext.grid.CheckboxSelectionModel();

    Ext.applyIf(config, {
        url: [[+packageName]].config.connector_url
        , baseParams: {
           action: \'mgr/[[+element]]/getlist\'
           ,thread: config.thread
        }
        , pageSize: 300
        , fields: [
            {name:\'id\', sortType: Ext.data.SortTypes.asInt}
            , {name: \'name\', sortType: Ext.data.SortTypes.asUCString}
            , {name: \'category\', sortType: Ext.data.SortTypes.asUCString}
            , {name: \'description\'}
         ]
        , paging: true
        , autosave: false
        , remoteSort: false
        , autoExpandColumn: \'description\'
        , cls: \'[[+packageNameLower]]-grid\'
        , sm: this.sm
        , columns: [this.sm, {
            header: _(\'id\')
            ,dataIndex: \'id\'
            ,sortable: true
            ,width: 50
        }, {
            header: _(\'name\')
            ,dataIndex: \'name\'
            ,sortable: true
            ,width: 100
                                                                                                           }, {
           header: _(\'category\'),
            dataIndex: \'category\',
            sortable: true,
            width: 120
        }, {
            header: _(\'description\')
            , dataIndex: \'description\'
            , sortable: false
            , width: 300
        }]
        ,viewConfig: {
            forceFit: true,
            enableRowBody: true,
            showPreview: true,
            getRowClass: function (rec, ri, p) {
                var cls = \'[[+packageNameLower]]-row\';

                if (this.showPreview) {
                    return cls + \' [[+packageNameLower]]-resource-expanded\';
                }
                return cls + \' [[+packageNameLower]]-resource-collapsed\';
            }
        }
        , tbar: [{
                text: \'Bulk Actions\'
                , menu: this.getBatchMenu()
            }
            ,{xtype: \'tbspacer\', width: 200}
            ,{
                xtype: \'button\'
                , id: \'[[+packageNameLower]]-[[+element]]s-reload\'
                , text: \'reload\'
                , listeners: {
                    \'click\': {fn: this.reload[[+Element]]s, scope: this}
                }
            }
        ]
    });
    [[+packageName]].grid.[[+Element]]s.superclass.constructor.call(this, config)
};
Ext.extend([[+packageName]].grid.[[+Element]]s, MODx.grid.Grid, {
     reload[[+Element]]s: function () {
        this.getStore().baseParams = {
            action: \'mgr/[[+element]]/getList\'
            ,orphanSearch: \'mod[[+Element]]\'
        };

        this.getBottomToolbar().changePage(1);
        this.refresh();

    }
    , _showMenu: function (g, ri, e) {
        e.stopEvent();
        e.preventDefault();
        this.menu.record = this.getStore().getAt(ri).data;
        if (!this.getSelectionModel().isSelected(ri)) {
            this.getSelectionModel().selectRow(ri);
        }
        this.menu.removeAll();

        var m = [];
        if (this.menu.record.menu) {
            m = this.menu.record.menu;
            if (m.length > 0) {
                this.addContextMenuItem(m);
                this.menu.show(e.target);
            }
        } else {
            var z = this.getBatchMenu();

            for (var zz = 0; zz < z.length; zz++) {
                this.menu.add(z[zz]);
            }
            this.menu.show(e.target);
        }
    }
    , getSelectedAsList: function () {
        var sels = this.getSelectionModel().getSelections();
        if (sels.length <= 0) return false;

        var cs = \'\';
        for (var i = 0; i < sels.length; i++) {
            cs += \',\' + sels[i].data.id;
        }
        cs = Ext.util.Format.substr(cs, 1);
        return cs;
    }

    , changeCategory: function (btn, e) {
        var cs = this.getSelectedAsList();
        if (cs === false) return false;

        var r = {ids: cs};
        if (!this.changeCategoryWindow) {
            this.changeCategoryWindow = MODx.load({
                  xtype: \'[[+packageNameLower]]-[[+element]]-window-change-category\'
                  , record: r
                  , listeners: {
                    \'success\': {fn: function (r) {
                        // this.refresh();
                        var sels = this.getSelectionModel().getSelections();
                        var cat = Ext.getCmp(\'[[+packageNameLower]]-[[+element]]-category-combo\').lastSelectionText;
                        var s = this.getStore();
                        for (var i = 0; i < sels.length; i = i + 1) {
                            var id = sels[i].get(\'id\');
                            var ri = id;
                            var record = s.getById(ri);
                            record.set("category", cat);
                            record.commit();
                        }
                        this.getSelectionModel().clearSelections(false);
                    }, scope: this}
                }
                                                  });
        }
        this.changeCategoryWindow.setValues(r);
        this.changeCategoryWindow.show(e.target);
        return true;
    }
    , [[+element]]Remove: function () {
        var cs = this.getSelectedAsList();
        if (cs === false) return false;
        MODx.msg.confirm({
             title: _(\'[[+packageNameLower]].delete\')
             , text: _(\'[[+packageNameLower]].confirm_delete\')
             , url: this.config.url
             , params: {
                action: \'mgr/[[+element]]/remove\'
                , ids: cs
            }
            , listeners: {
                \'success\': {fn: function (r) {
                    // this.refresh();
                    var sels = this.getSelectionModel().getSelections();
                    if (sels.length <= 0) return false;
                    var s = this.getStore();
                    for (var i = 0; i < sels.length; i = i + 1) {

                        var id = sels[i].get(\'id\');
                        var ri = id;
                        var record = s.getById(ri);
                        s.remove(record);
                    }
                }
                , scope: this}
                , \'failure\': {fn: function (r) {
                    MODx.msg.alert();
                }
                , scope: this}
            }
        });
        return true;
    }

    , getBatchMenu: function () {
        var bm = [];
        bm.push(
            {
                text: _(\'new_category\')
                , handler: this.changeCategory
                , scope: this
            }
            , \'-\'
            , {
                text: _(\'remove_[[+element]]\')+\'(s)\'
                ,handler: this.[[+element]]Remove
                , scope: this
            });
        return bm;
    }
});
Ext.reg(\'[[+packageNameLower]]-grid-[[+element]]\', [[+packageName]].grid.[[+Element]]s);


[[+packageName]].window.ChangeCategory = function (config) {
    config = config || {};
    Ext.applyIf(config, {
        title: _(\'new_category\')
        , url: [[+packageName]].config.connector_url
        , baseParams: {
            action: \'mgr/[[+element]]/changecategory\'
            }
        ,width: 400
        ,fields: [{
            xtype: \'hidden\'
            ,name: \'[[+element]]s\'
        },{
            xtype: \'modx-combo-category\'
            ,id: \'[[+packageNameLower]]-[[+element]]-category-combo\'
            ,fieldLabel: _(\'category\')
            ,name: \'category\'
            ,hiddenName: \'category\'
            ,anchor: \'90%\'
        }]
    });
    [[+packageName]].window.ChangeCategory.superclass.constructor.call(this, config);
};
Ext.extend([[+packageName]].window.ChangeCategory, MODx.Window);
Ext.reg(\'[[+packageNameLower]]-[[+element]]-window-change-category\', [[+packageName]].window.ChangeCategory);
',
    ),
  ),
  '10d7e9baf92cf7e9f883262b74ae7fc8' => 
  array (
    'criteria' => 
    array (
      'name' => 'cmp.home.js.tpl',
    ),
    'object' => 
    array (
      'id' => 44,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'cmp.home.js.tpl',
      'description' => 'Chunk',
      'editor_type' => 0,
      'category' => 15,
      'cache_type' => 0,
      'snippet' => '/**
* JS file for [[+packageName]] extra
*
* Copyright [[+copyright]] by [[+author]] [[+email]]
* Created on [[+createdon]]
*
[[+license]]
* @package [[+packageNameLower]]
*/

/* These are for LexiconHelper:
 $modx->lexicon->load(\'[[+packageNameLower]]:default\');
 include \'[[+packageNameLower]].class.php\'
 */

Ext.onReady(function() {
    MODx.load({ xtype: \'[[+packageNameLower]]-page-home\'});
});

[[+packageName]].page.Home = function(config) {
    config = config || {};
    Ext.applyIf(config,{
        components: [{
            xtype: \'[[+packageNameLower]]-panel-home\'
            ,renderTo: \'[[+packageNameLower]]-panel-home-div\'
        }]
    }); 
    [[+packageName]].page.Home.superclass.constructor.call(this,config);
};
Ext.extend([[+packageName]].page.Home,MODx.Component);
Ext.reg(\'[[+packageNameLower]]-page-home\',[[+packageName]].page.Home);',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => '',
      'content' => '/**
* JS file for [[+packageName]] extra
*
* Copyright [[+copyright]] by [[+author]] [[+email]]
* Created on [[+createdon]]
*
[[+license]]
* @package [[+packageNameLower]]
*/

/* These are for LexiconHelper:
 $modx->lexicon->load(\'[[+packageNameLower]]:default\');
 include \'[[+packageNameLower]].class.php\'
 */

Ext.onReady(function() {
    MODx.load({ xtype: \'[[+packageNameLower]]-page-home\'});
});

[[+packageName]].page.Home = function(config) {
    config = config || {};
    Ext.applyIf(config,{
        components: [{
            xtype: \'[[+packageNameLower]]-panel-home\'
            ,renderTo: \'[[+packageNameLower]]-panel-home-div\'
        }]
    }); 
    [[+packageName]].page.Home.superclass.constructor.call(this,config);
};
Ext.extend([[+packageName]].page.Home,MODx.Component);
Ext.reg(\'[[+packageNameLower]]-page-home\',[[+packageName]].page.Home);',
    ),
  ),
  '41a0962ba8db35592f7f1eba8aafb646' => 
  array (
    'criteria' => 
    array (
      'name' => 'cmp.home.panel.js.tpl',
    ),
    'object' => 
    array (
      'id' => 45,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'cmp.home.panel.js.tpl',
      'description' => 'Chunk',
      'editor_type' => 0,
      'category' => 15,
      'cache_type' => 0,
      'snippet' => '/**
* JS file for [[+packageName]] extra
*
* Copyright [[+copyright]] by [[+author]] [[+email]]
* Created on [[+createdon]]
*
[[+license]]
* @package [[+packageNameLower]]
*/

/* These are for LexiconHelper:
 $modx->lexicon->load(\'[[+packageNameLower]]:default\');
 include \'[[+packageNameLower]].class.php\'
 */

[[+packageName]].panel.Home = function(config) {
    config = config || {};
    Ext.apply(config,{
        border: false
        ,baseCls: \'modx-formpanel\'
        ,items: [{
            html: \'<h2>\'+\'[[+packageNameLower]]\'+\'</h2>\'
            ,border: false
            ,cls: \'modx-page-header\'
        },{
            xtype: \'modx-tabs\'
            ,bodyStyle: \'padding: 10px\'
            ,defaults: { border: false ,autoHeight: true }
            ,border: true
            ,stateful: true
            ,stateId: \'[[+packageNameLower]]-home-tabpanel\'
            ,stateEvents: [\'tabchange\']
            ,getState:function() {
                return {activeTab:this.items.indexOf(this.getActiveTab())};
            }
            ,items: [{
                title: _(\'snippets\')
                ,defaults: { autoHeight: true }
                ,items: [{
                    html: \'<p>\'+\'Demo only . . . grid will change, but no real action is taken\'+\'</p>\'
                    ,border: false
                    ,bodyStyle: \'padding: 10px\'
                },{
                    xtype: \'[[+packageNameLower]]-grid-snippet\'
                    ,preventRender: true
                }]
            },{
                title: _(\'chunks\')
                ,defaults: { autoHeight: true }
                ,items: [{
                    html: \'<p>\'+\'Demo only . . . grid will change, but no real action is taken\'+\'</p>\'
                    ,border: false
                    ,bodyStyle: \'padding: 10px\'
                },{
                    xtype: \'[[+packageNameLower]]-grid-chunk\'
                    ,preventRender: true
                }]
            }]
        }]
    });
    [[+packageName]].panel.Home.superclass.constructor.call(this,config);
};
Ext.extend([[+packageName]].panel.Home,MODx.Panel);
Ext.reg(\'[[+packageNameLower]]-panel-home\',[[+packageName]].panel.Home);
        ',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => '',
      'content' => '/**
* JS file for [[+packageName]] extra
*
* Copyright [[+copyright]] by [[+author]] [[+email]]
* Created on [[+createdon]]
*
[[+license]]
* @package [[+packageNameLower]]
*/

/* These are for LexiconHelper:
 $modx->lexicon->load(\'[[+packageNameLower]]:default\');
 include \'[[+packageNameLower]].class.php\'
 */

[[+packageName]].panel.Home = function(config) {
    config = config || {};
    Ext.apply(config,{
        border: false
        ,baseCls: \'modx-formpanel\'
        ,items: [{
            html: \'<h2>\'+\'[[+packageNameLower]]\'+\'</h2>\'
            ,border: false
            ,cls: \'modx-page-header\'
        },{
            xtype: \'modx-tabs\'
            ,bodyStyle: \'padding: 10px\'
            ,defaults: { border: false ,autoHeight: true }
            ,border: true
            ,stateful: true
            ,stateId: \'[[+packageNameLower]]-home-tabpanel\'
            ,stateEvents: [\'tabchange\']
            ,getState:function() {
                return {activeTab:this.items.indexOf(this.getActiveTab())};
            }
            ,items: [{
                title: _(\'snippets\')
                ,defaults: { autoHeight: true }
                ,items: [{
                    html: \'<p>\'+\'Demo only . . . grid will change, but no real action is taken\'+\'</p>\'
                    ,border: false
                    ,bodyStyle: \'padding: 10px\'
                },{
                    xtype: \'[[+packageNameLower]]-grid-snippet\'
                    ,preventRender: true
                }]
            },{
                title: _(\'chunks\')
                ,defaults: { autoHeight: true }
                ,items: [{
                    html: \'<p>\'+\'Demo only . . . grid will change, but no real action is taken\'+\'</p>\'
                    ,border: false
                    ,bodyStyle: \'padding: 10px\'
                },{
                    xtype: \'[[+packageNameLower]]-grid-chunk\'
                    ,preventRender: true
                }]
            }]
        }]
    });
    [[+packageName]].panel.Home.superclass.constructor.call(this,config);
};
Ext.extend([[+packageName]].panel.Home,MODx.Panel);
Ext.reg(\'[[+packageNameLower]]-panel-home\',[[+packageName]].panel.Home);
        ',
    ),
  ),
  '60a3336558eee7a4df0c2cf802bf0ebe' => 
  array (
    'criteria' => 
    array (
      'name' => 'cmp.mgr.css.tpl',
    ),
    'object' => 
    array (
      'id' => 46,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'cmp.mgr.css.tpl',
      'description' => 'Chunk',
      'editor_type' => 0,
      'category' => 15,
      'cache_type' => 0,
      'snippet' => '.[[+packageNameLower]]-resource-body {
padding: 10px 0 10px 20px;
}


.[[+packageNameLower]]-grid .[[+packageNameLower]]-unpublished,
.[[+packageNameLower]]-grid .[[+packageNameLower]]-unpublished span,
.[[+packageNameLower]]-grid .[[+packageNameLower]]-unpublished a {
color: gray;
}
.x-grid3-body .x-grid3-td-checker {
background-image: none !important;
}

.[[+packageNameLower]]-deleted, .[[+packageNameLower]]-deleted span, .[[+packageNameLower]]-deleted a,
.[[+packageNameLower]]-grid .[[+packageNameLower]]-deleted, .[[+packageNameLower]]-grid .[[+packageNameLower]]-deleted span, .[[+packageNameLower]]-grid .[[+packageNameLower]]-deleted a {
color: red !important;
}',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => '',
      'content' => '.[[+packageNameLower]]-resource-body {
padding: 10px 0 10px 20px;
}


.[[+packageNameLower]]-grid .[[+packageNameLower]]-unpublished,
.[[+packageNameLower]]-grid .[[+packageNameLower]]-unpublished span,
.[[+packageNameLower]]-grid .[[+packageNameLower]]-unpublished a {
color: gray;
}
.x-grid3-body .x-grid3-td-checker {
background-image: none !important;
}

.[[+packageNameLower]]-deleted, .[[+packageNameLower]]-deleted span, .[[+packageNameLower]]-deleted a,
.[[+packageNameLower]]-grid .[[+packageNameLower]]-deleted, .[[+packageNameLower]]-grid .[[+packageNameLower]]-deleted span, .[[+packageNameLower]]-grid .[[+packageNameLower]]-deleted a {
color: red !important;
}',
    ),
  ),
  '6072e4215bef59cf61625b73ec928a08' => 
  array (
    'criteria' => 
    array (
      'name' => 'cmp.processor.class.php',
    ),
    'object' => 
    array (
      'id' => 47,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'cmp.processor.class.php',
      'description' => 'Chunk',
      'editor_type' => 0,
      'category' => 15,
      'cache_type' => 0,
      'snippet' => '<?php
/**
 * Processor file for [[+packageName]] extra
 *
 * Copyright [[+copyright]] by [[+author]] [[+email]]
 * Created on [[+createdon]]
 *
[[+license]]
 *
 * @package [[+packageNameLower]]
 * @subpackage processors
 */

/* @var $modx modX */


class mc_ProcessorTypeProcessor extends modProcessor {
    public $classKey = \'modmc_Element\';
    public $languageTopics = array(\'mc_packageNameLower:default\');
    public $defaultSortField = \'name\';
    public $defaultSortDirection = \'ASC\';
    public $ids;

    function initialize() {
        /* Initialization here */
        return true;
    }

    /* For built-in processors (create, update, duplicate, remove),
       this method can be removed */
    public function process() {

        /* perform action here */

        return $this->success();

    }
}

return \'mc_ProcessorTypeProcessor\';
',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => '',
      'content' => '<?php
/**
 * Processor file for [[+packageName]] extra
 *
 * Copyright [[+copyright]] by [[+author]] [[+email]]
 * Created on [[+createdon]]
 *
[[+license]]
 *
 * @package [[+packageNameLower]]
 * @subpackage processors
 */

/* @var $modx modX */


class mc_ProcessorTypeProcessor extends modProcessor {
    public $classKey = \'modmc_Element\';
    public $languageTopics = array(\'mc_packageNameLower:default\');
    public $defaultSortField = \'name\';
    public $defaultSortDirection = \'ASC\';
    public $ids;

    function initialize() {
        /* Initialization here */
        return true;
    }

    /* For built-in processors (create, update, duplicate, remove),
       this method can be removed */
    public function process() {

        /* perform action here */

        return $this->success();

    }
}

return \'mc_ProcessorTypeProcessor\';
',
    ),
  ),
  'd92190718fd65ae2b3cf4d41281d4072' => 
  array (
    'criteria' => 
    array (
      'name' => 'LexiconHelper',
    ),
    'object' => 
    array (
      'id' => 42,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'LexiconHelper',
      'description' => '',
      'editor_type' => 0,
      'category' => 15,
      'cache_type' => 0,
      'snippet' => '/**
 * LexiconHelper
 * Copyright 2012-2013 Bob Ray
 *
 * LexiconHelper is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * LexiconHelper is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * LexiconHelper; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package lexiconhelper
 * @author Bob Ray <http://bobsguides.com>
 
 *
 * Description: The LexiconHelper snippet identifies lexicon strings
 * in code and checks them against strings in a language file.
 *
 * You must use single quotes and no spaces.
 *
 * Output can be pasted into language file for editing.
 * ToDo: More info here (~~ option, rewrite files options)
 * /

/*

  Modified: June, 2012

   
  Properties:
    @property code_path  - (required) Path to directory with code
         file. Should end in a slash.
         {core_path} and {assets_path} will be translated.

    @property code_file - (required) name of code file to be analyzed.

    @property language_path - (required) Path to directory with code
         file. Should end in a slash.
         {core_path} and {assets_path} will be translated.

    @property language_file - (optional) Path to language file.
         Default: default.inc.php

    @property language - (optional) Two-letter language code identifying
         language file to process.
         Default: en
    @property manager_language - (optional) Two-letter language code
         to use in error messages and reports. Use only to override manager
         language.
         Default: manager_language System Setting
*/

/**
 * @package = lexiconhelper
 *
 */

/** Important: All language keys in the code file must be in this form:
 *
 *      $modx->lexicon(\'language_string_key\');
 *      $modx->lexicon("language_string_key");
 *
 * or This form:
 *
 *      $modx->lexicon(\'language_string_key~~value to use\');
 *      $modx->lexicon("language_string_key~~value to use");
 *
 * Use no spaces in the key (the left side).
 *
 *
 * With the first version, LexiconHelper will create a lexicon
 * entry with a blank value.
 *
 * With the second version, LexiconHelper will fill in the value as well.
 *
 * You have the option to rewrite the language file to append the new strings.
 *
 * You have the option to rewrite the code file to remove the description
 * from the lexicon() calls.
 *

*/

/* ToDo:  check System Setting descriptions */
/* ToDo: update version */
/* ToDo: update tutorial */
/* ToDo: lexicon strings in resources and chunks */

/* set start time */
$mtime = microtime();
$mtime = explode(" ", $mtime);
$mtime = $mtime[1] + $mtime[0];
$tstart = $mtime;
set_time_limit(0);
$mem_usage = memory_get_usage();

/* @var $modx modX */

$cliMode = false;

if (!defined(\'MODX_CORE_PATH\')) {
    $path1 = dirname(dirname(dirname(dirname(dirname(dirname(__FILE__)))))) . \'/_build/build.config.php\';
    if (file_exists($path1)) {
        include $path1;
    } else {
        $path2 = dirname(dirname(dirname(dirname(dirname(__FILE__))))) . \'/config/config.inc.php\';
        if (file_exists($path2)) {
            include($path2);
        }
    }
    if (!defined(\'MODX_CORE_PATH\')) {
        session_write_close();
        die(\'[lexiconhelper.php] Could not find build.config.php\');
    }
    require_once MODX_CORE_PATH . \'model/modx/modx.class.php\';
    $modx = new modX();
    /* Initialize and set up logging */
    $modx->initialize(\'mgr\');
    $modx->getService(\'error\', \'error.modError\', \'\', \'\');
    $modx->setLogLevel(xPDO::LOG_LEVEL_INFO);
    $modx->setLogTarget(XPDO_CLI_MODE
        ? \'ECHO\'
        : \'HTML\');

    /* This section will only run when operating outside of MODX */
    if (php_sapi_name() == \'cli\') {

        $cliMode = true;
        /* Set $modx->user and $modx->resource to avoid
         * other people\'s plugins from crashing us */
        $modx->getRequest();
        $homeId = $modx->getOption(\'site_start\');
        $homeResource = $modx->getObject(\'modResource\', $homeId);

        if ($homeResource instanceof modResource) {
            $modx->resource = $homeResource;
        } else {
            echo "\\nNo Resource\\n";
        }
    }
} else {
    if (! $modx->user->hasSessionContext(\'mgr\')) {
        die (\'Unauthorized Access\');
    }
}

// include \'lexiconhelper.class.php\';

$modx->lexicon->load(\'mycomponent:default\');

require_once $modx->getOption(\'mc.core_path\', null, $modx->getOption(\'core_path\') . \'components/mycomponent/\') . \'model/mycomponent/lexiconhelper.class.php\';
$props = isset($scriptProperties) ? $scriptProperties : array();
$lexiconHelper = new LexiconHelper($modx, $props);
    $lexiconHelper->init($props);
    $lexiconHelper->run();
$output = $lexiconHelper->helpers->getOutput();

$output .= "\\n\\n" . $modx->lexicon(\'mc_initial_memory_used\') . \': \' . round($mem_usage / 1048576, 2) . \' \' .
    $modx->lexicon(\'mc_megabytes\');
$mem_usage = memory_get_usage();
$peak_usage = memory_get_peak_usage(true);
$output .= "\\n" . $modx->lexicon(\'mc_final_memory_used\')
    . \': \' . round($mem_usage / 1048576, 2) . \' \' .
    $modx->lexicon(\'mc_megabytes\');
$output .= "\\n" . $modx->lexicon(\'mc_peak_memory_used\')
    . \': \' . round($peak_usage / 1048576, 2) . \' \' .
    $modx->lexicon(\'mc_megabytes\');
/* report how long it took */
$mtime = microtime();
$mtime = explode(" ", $mtime);
$mtime = $mtime[1] + $mtime[0];
$tend = $mtime;
$totalTime = ($tend - $tstart);
$totalTime = sprintf("%2.4f s", $totalTime);
$output .= "\\n" . $modx->lexicon(\'mc_total_time\') .
    \': \' . $totalTime;

if ($cliMode) {
    echo $output;
} else {
    return $output;
}',
      'locked' => 0,
      'properties' => NULL,
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * LexiconHelper
 * Copyright 2012-2013 Bob Ray
 *
 * LexiconHelper is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * LexiconHelper is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * LexiconHelper; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package lexiconhelper
 * @author Bob Ray <http://bobsguides.com>
 
 *
 * Description: The LexiconHelper snippet identifies lexicon strings
 * in code and checks them against strings in a language file.
 *
 * You must use single quotes and no spaces.
 *
 * Output can be pasted into language file for editing.
 * ToDo: More info here (~~ option, rewrite files options)
 * /

/*

  Modified: June, 2012

   
  Properties:
    @property code_path  - (required) Path to directory with code
         file. Should end in a slash.
         {core_path} and {assets_path} will be translated.

    @property code_file - (required) name of code file to be analyzed.

    @property language_path - (required) Path to directory with code
         file. Should end in a slash.
         {core_path} and {assets_path} will be translated.

    @property language_file - (optional) Path to language file.
         Default: default.inc.php

    @property language - (optional) Two-letter language code identifying
         language file to process.
         Default: en
    @property manager_language - (optional) Two-letter language code
         to use in error messages and reports. Use only to override manager
         language.
         Default: manager_language System Setting
*/

/**
 * @package = lexiconhelper
 *
 */

/** Important: All language keys in the code file must be in this form:
 *
 *      $modx->lexicon(\'language_string_key\');
 *      $modx->lexicon("language_string_key");
 *
 * or This form:
 *
 *      $modx->lexicon(\'language_string_key~~value to use\');
 *      $modx->lexicon("language_string_key~~value to use");
 *
 * Use no spaces in the key (the left side).
 *
 *
 * With the first version, LexiconHelper will create a lexicon
 * entry with a blank value.
 *
 * With the second version, LexiconHelper will fill in the value as well.
 *
 * You have the option to rewrite the language file to append the new strings.
 *
 * You have the option to rewrite the code file to remove the description
 * from the lexicon() calls.
 *

*/

/* ToDo:  check System Setting descriptions */
/* ToDo: update version */
/* ToDo: update tutorial */
/* ToDo: lexicon strings in resources and chunks */

/* set start time */
$mtime = microtime();
$mtime = explode(" ", $mtime);
$mtime = $mtime[1] + $mtime[0];
$tstart = $mtime;
set_time_limit(0);
$mem_usage = memory_get_usage();

/* @var $modx modX */

$cliMode = false;

if (!defined(\'MODX_CORE_PATH\')) {
    $path1 = dirname(dirname(dirname(dirname(dirname(dirname(__FILE__)))))) . \'/_build/build.config.php\';
    if (file_exists($path1)) {
        include $path1;
    } else {
        $path2 = dirname(dirname(dirname(dirname(dirname(__FILE__))))) . \'/config/config.inc.php\';
        if (file_exists($path2)) {
            include($path2);
        }
    }
    if (!defined(\'MODX_CORE_PATH\')) {
        session_write_close();
        die(\'[lexiconhelper.php] Could not find build.config.php\');
    }
    require_once MODX_CORE_PATH . \'model/modx/modx.class.php\';
    $modx = new modX();
    /* Initialize and set up logging */
    $modx->initialize(\'mgr\');
    $modx->getService(\'error\', \'error.modError\', \'\', \'\');
    $modx->setLogLevel(xPDO::LOG_LEVEL_INFO);
    $modx->setLogTarget(XPDO_CLI_MODE
        ? \'ECHO\'
        : \'HTML\');

    /* This section will only run when operating outside of MODX */
    if (php_sapi_name() == \'cli\') {

        $cliMode = true;
        /* Set $modx->user and $modx->resource to avoid
         * other people\'s plugins from crashing us */
        $modx->getRequest();
        $homeId = $modx->getOption(\'site_start\');
        $homeResource = $modx->getObject(\'modResource\', $homeId);

        if ($homeResource instanceof modResource) {
            $modx->resource = $homeResource;
        } else {
            echo "\\nNo Resource\\n";
        }
    }
} else {
    if (! $modx->user->hasSessionContext(\'mgr\')) {
        die (\'Unauthorized Access\');
    }
}

// include \'lexiconhelper.class.php\';

$modx->lexicon->load(\'mycomponent:default\');

require_once $modx->getOption(\'mc.core_path\', null, $modx->getOption(\'core_path\') . \'components/mycomponent/\') . \'model/mycomponent/lexiconhelper.class.php\';
$props = isset($scriptProperties) ? $scriptProperties : array();
$lexiconHelper = new LexiconHelper($modx, $props);
    $lexiconHelper->init($props);
    $lexiconHelper->run();
$output = $lexiconHelper->helpers->getOutput();

$output .= "\\n\\n" . $modx->lexicon(\'mc_initial_memory_used\') . \': \' . round($mem_usage / 1048576, 2) . \' \' .
    $modx->lexicon(\'mc_megabytes\');
$mem_usage = memory_get_usage();
$peak_usage = memory_get_peak_usage(true);
$output .= "\\n" . $modx->lexicon(\'mc_final_memory_used\')
    . \': \' . round($mem_usage / 1048576, 2) . \' \' .
    $modx->lexicon(\'mc_megabytes\');
$output .= "\\n" . $modx->lexicon(\'mc_peak_memory_used\')
    . \': \' . round($peak_usage / 1048576, 2) . \' \' .
    $modx->lexicon(\'mc_megabytes\');
/* report how long it took */
$mtime = microtime();
$mtime = explode(" ", $mtime);
$mtime = $mtime[1] + $mtime[0];
$tend = $mtime;
$totalTime = ($tend - $tstart);
$totalTime = sprintf("%2.4f s", $totalTime);
$output .= "\\n" . $modx->lexicon(\'mc_total_time\') .
    \': \' . $totalTime;

if ($cliMode) {
    echo $output;
} else {
    return $output;
}',
    ),
  ),
  'e52fe8c515ec3b1a918ba2db0f385543' => 
  array (
    'criteria' => 
    array (
      'name' => 'ExportObjects',
    ),
    'object' => 
    array (
      'id' => 43,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'ExportObjects',
      'description' => '',
      'editor_type' => 0,
      'category' => 15,
      'cache_type' => 0,
      'snippet' => '/**
 * ExportObjects script for MyComponent Extra
 *
 * Copyright 2012-2013 by Bob Ray <http://bobsguides.com>
 *
 * @author Bob Ray
 * 3/27/12
 *
 * ExportObjects is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * ExportObjects is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * ExportObjects; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package exportobjects
 */
/**
 * MODx ExportObjects script
 *
 * Description:
 * ------------
 * Extracts objects (resources, chunks, snippets, etc.) from a MODX
 * install and creates code and transport build files for
 * MyComponent to use in creating a transport package
 *
 * Warning: Will overwrite code files for resources and elements
 * (except static elements) if dryRun is not set.
 *
 * Warning: Will overwrite transport files, resolvers, and
 * properties for processed elements and resources if dryRun
 * is not set.
 *
 * @package exportobjects
 *
 */
/* @var $category string */

/*
 *
 * Object source files will be written to
 *  MODX_ASSETS_PATH/mycomponents/{packageNameLower}/core/components/
 * {packageNameLower}/elements/{elementName}/
 *
 * Transport files will be written to MODX_ASSETS_PATH/mycomponents/
 * {packageNameLower}/_build/data/transport.{elementName}.php
 *
 * &transportPath (directory for transport.chunks.php file)
 * defaults to assets/mycomponents/{categoryLower}/_build/data/
 *
 *
 */

/* set start time */
$mtime = microtime();
$mtime = explode(" ", $mtime);
$mtime = $mtime[1] + $mtime[0];
$tstart = $mtime;
set_time_limit(0);
$mem_usage = memory_get_usage();

/* @var $modx modX */

$cliMode = false;

if (!defined(\'MODX_CORE_PATH\')) {
    $path1 = dirname(dirname(dirname(dirname(dirname(dirname(__FILE__)))))) . \'/_build/build.config.php\';
    if (file_exists($path1)) {
        include $path1;
    } else {
        $path2 = dirname(dirname(dirname(dirname(dirname(__FILE__))))) . \'/config/config.inc.php\';
        if (file_exists($path2)) {
            include($path2);
        }
    }
    if (!defined(\'MODX_CORE_PATH\')) {
        session_write_close();
        die(\'[bootstrap.php] Could not find build.config.php\');
    }
    require_once MODX_CORE_PATH . \'model/modx/modx.class.php\';
    $modx = new modX();
    /* Initialize and set up logging */
    $modx->initialize(\'mgr\');
    $modx->getService(\'error\', \'error.modError\', \'\', \'\');
    $modx->setLogLevel(xPDO::LOG_LEVEL_INFO);
    $modx->setLogTarget(XPDO_CLI_MODE
        ? \'ECHO\'
        : \'HTML\');

    /* This section will only run when operating outside of MODX */
    if (php_sapi_name() == \'cli\') {

        $cliMode = true;
        /* Set $modx->user and $modx->resource to avoid
         * other people\'s plugins from crashing us */
        $modx->getRequest();
        $homeId = $modx->getOption(\'site_start\');
        $homeResource = $modx->getObject(\'modResource\', $homeId);

        if ($homeResource instanceof modResource) {
            $modx->resource = $homeResource;
        } else {
            echo "\\nNo Resource\\n";
        }
    }
} else {
    if (!$modx->user->hasSessionContext(\'mgr\')) {
        die (\'Unauthorized Access\');
    }
}
// include \'mycomponentproject.class.php\';

$modx->lexicon->load(\'mycomponent:default\');

require_once $modx->getOption(\'mc.core_path\', null, $modx->getOption(\'core_path\') . \'components/mycomponent/\') . \'model/mycomponent/mycomponentproject.class.php\';

$project = new MyComponentProject($modx);
$props = isset($scriptProperties) ? $scriptProperties : array();
$project->init($props);
$project->exportComponent(false);

$output = $project->helpers->getOutput();

// echo print_r(ObjectAdapter::$myObjects, true);
$output .= "\\n\\n" . $modx->lexicon(\'mc_initial_memory_used\') . \': \' . round($mem_usage / 1048576, 2) . \' \' .
    $modx->lexicon(\'mc_megabytes\');
$mem_usage = memory_get_usage();
$peak_usage = memory_get_peak_usage(true);
$output .= "\\n" . $modx->lexicon(\'mc_final_memory_used\')
    . \': \' . round($mem_usage / 1048576, 2) . \' \' .
    $modx->lexicon(\'mc_megabytes\');
$output .= "\\n" . $modx->lexicon(\'mc_peak_memory_used\')
    . \': \' . round($peak_usage / 1048576, 2) . \' \' .
    $modx->lexicon(\'mc_megabytes\');
/* report how long it took */
$mtime = microtime();
$mtime = explode(" ", $mtime);
$mtime = $mtime[1] + $mtime[0];
$tend = $mtime;
$totalTime = ($tend - $tstart);
$totalTime = sprintf("%2.4f s", $totalTime);
$output .= "\\n" . $modx->lexicon(\'mc_total_time\') .
    \': \' . $totalTime;

if ($cliMode) {
    echo $output;
} else {
    return $output;
}',
      'locked' => 0,
      'properties' => NULL,
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * ExportObjects script for MyComponent Extra
 *
 * Copyright 2012-2013 by Bob Ray <http://bobsguides.com>
 *
 * @author Bob Ray
 * 3/27/12
 *
 * ExportObjects is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * ExportObjects is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * ExportObjects; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package exportobjects
 */
/**
 * MODx ExportObjects script
 *
 * Description:
 * ------------
 * Extracts objects (resources, chunks, snippets, etc.) from a MODX
 * install and creates code and transport build files for
 * MyComponent to use in creating a transport package
 *
 * Warning: Will overwrite code files for resources and elements
 * (except static elements) if dryRun is not set.
 *
 * Warning: Will overwrite transport files, resolvers, and
 * properties for processed elements and resources if dryRun
 * is not set.
 *
 * @package exportobjects
 *
 */
/* @var $category string */

/*
 *
 * Object source files will be written to
 *  MODX_ASSETS_PATH/mycomponents/{packageNameLower}/core/components/
 * {packageNameLower}/elements/{elementName}/
 *
 * Transport files will be written to MODX_ASSETS_PATH/mycomponents/
 * {packageNameLower}/_build/data/transport.{elementName}.php
 *
 * &transportPath (directory for transport.chunks.php file)
 * defaults to assets/mycomponents/{categoryLower}/_build/data/
 *
 *
 */

/* set start time */
$mtime = microtime();
$mtime = explode(" ", $mtime);
$mtime = $mtime[1] + $mtime[0];
$tstart = $mtime;
set_time_limit(0);
$mem_usage = memory_get_usage();

/* @var $modx modX */

$cliMode = false;

if (!defined(\'MODX_CORE_PATH\')) {
    $path1 = dirname(dirname(dirname(dirname(dirname(dirname(__FILE__)))))) . \'/_build/build.config.php\';
    if (file_exists($path1)) {
        include $path1;
    } else {
        $path2 = dirname(dirname(dirname(dirname(dirname(__FILE__))))) . \'/config/config.inc.php\';
        if (file_exists($path2)) {
            include($path2);
        }
    }
    if (!defined(\'MODX_CORE_PATH\')) {
        session_write_close();
        die(\'[bootstrap.php] Could not find build.config.php\');
    }
    require_once MODX_CORE_PATH . \'model/modx/modx.class.php\';
    $modx = new modX();
    /* Initialize and set up logging */
    $modx->initialize(\'mgr\');
    $modx->getService(\'error\', \'error.modError\', \'\', \'\');
    $modx->setLogLevel(xPDO::LOG_LEVEL_INFO);
    $modx->setLogTarget(XPDO_CLI_MODE
        ? \'ECHO\'
        : \'HTML\');

    /* This section will only run when operating outside of MODX */
    if (php_sapi_name() == \'cli\') {

        $cliMode = true;
        /* Set $modx->user and $modx->resource to avoid
         * other people\'s plugins from crashing us */
        $modx->getRequest();
        $homeId = $modx->getOption(\'site_start\');
        $homeResource = $modx->getObject(\'modResource\', $homeId);

        if ($homeResource instanceof modResource) {
            $modx->resource = $homeResource;
        } else {
            echo "\\nNo Resource\\n";
        }
    }
} else {
    if (!$modx->user->hasSessionContext(\'mgr\')) {
        die (\'Unauthorized Access\');
    }
}
// include \'mycomponentproject.class.php\';

$modx->lexicon->load(\'mycomponent:default\');

require_once $modx->getOption(\'mc.core_path\', null, $modx->getOption(\'core_path\') . \'components/mycomponent/\') . \'model/mycomponent/mycomponentproject.class.php\';

$project = new MyComponentProject($modx);
$props = isset($scriptProperties) ? $scriptProperties : array();
$project->init($props);
$project->exportComponent(false);

$output = $project->helpers->getOutput();

// echo print_r(ObjectAdapter::$myObjects, true);
$output .= "\\n\\n" . $modx->lexicon(\'mc_initial_memory_used\') . \': \' . round($mem_usage / 1048576, 2) . \' \' .
    $modx->lexicon(\'mc_megabytes\');
$mem_usage = memory_get_usage();
$peak_usage = memory_get_peak_usage(true);
$output .= "\\n" . $modx->lexicon(\'mc_final_memory_used\')
    . \': \' . round($mem_usage / 1048576, 2) . \' \' .
    $modx->lexicon(\'mc_megabytes\');
$output .= "\\n" . $modx->lexicon(\'mc_peak_memory_used\')
    . \': \' . round($peak_usage / 1048576, 2) . \' \' .
    $modx->lexicon(\'mc_megabytes\');
/* report how long it took */
$mtime = microtime();
$mtime = explode(" ", $mtime);
$mtime = $mtime[1] + $mtime[0];
$tend = $mtime;
$totalTime = ($tend - $tstart);
$totalTime = sprintf("%2.4f s", $totalTime);
$output .= "\\n" . $modx->lexicon(\'mc_total_time\') .
    \': \' . $totalTime;

if ($cliMode) {
    echo $output;
} else {
    return $output;
}',
    ),
  ),
  '57c88f6cde57b9c483ac986f37199f4c' => 
  array (
    'criteria' => 
    array (
      'name' => 'Bootstrap',
    ),
    'object' => 
    array (
      'id' => 44,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'Bootstrap',
      'description' => '',
      'editor_type' => 0,
      'category' => 15,
      'cache_type' => 0,
      'snippet' => '/* set start time */
$mtime = microtime();
$mtime = explode(" ", $mtime);
$mtime = $mtime[1] + $mtime[0];
$tstart = $mtime;
set_time_limit(0);
$mem_usage = memory_get_usage();

/* @var $modx modX */

$cliMode = false;

if (!defined(\'MODX_CORE_PATH\')) {
    $path1 = dirname(dirname(dirname(dirname(dirname(dirname(__FILE__)))))) . \'/_build/build.config.php\';
    if (file_exists($path1)) {
        include $path1;
    } else {
        $path2 = dirname(dirname(dirname(__FILE__))) . \'/_build/build.config.php\';
        if (file_exists($path2)) {
            include($path2);
        }
    }
    if (!defined(\'MODX_CORE_PATH\')) {
        session_write_close();
        die(\'[bootstrap.php] Could not find build.config.php\');
    }
    require_once MODX_CORE_PATH . \'model/modx/modx.class.php\';
    $modx = new modX();
    /* Initialize and set up logging */
    $modx->initialize(\'mgr\');
    $modx->getService(\'error\', \'error.modError\', \'\', \'\');
    $modx->setLogLevel(xPDO::LOG_LEVEL_INFO);
    $modx->setLogTarget(XPDO_CLI_MODE
        ? \'ECHO\'
        : \'HTML\');

    /* This section will only run when operating outside of MODX */
    if (php_sapi_name() == \'cli\') {
        $cliMode = true;
        /* Set $modx->user and $modx->resource to avoid
         * other people\'s plugins from crashing us */
        $modx->getRequest();
        $homeId = $modx->getOption(\'site_start\');
        $homeResource = $modx->getObject(\'modResource\', $homeId);

        if ($homeResource instanceof modResource) {
            $modx->resource = $homeResource;
        } else {
            echo "\\nNo Resource\\n";
        }
    }
} else {
    if (!$modx->user->hasSessionContext(\'mgr\')) {
        die (\'Unauthorized Access\');
    }
}

require_once $modx->getOption(\'mc.core_path\', null, $modx->getOption(\'core_path\') . \'components/mycomponent/\') . \'model/mycomponent/mycomponentproject.class.php\';
// include \'mycomponentproject.class.php\';

$modx->lexicon->load(\'mycomponent:default\');

$project = new MyComponentProject($modx);
$project->init();

//$project->removeObjects();
$project->bootstrap();

$output = $project->helpers->getOutput();

// echo print_r(ObjectAdapter::$myObjects, true);

$output .= "\\n\\n" . $modx->lexicon(\'mc_initial_memory_used\') . \': \' . round($mem_usage / 1048576, 2) . \' \' .
    $modx->lexicon(\'mc_megabytes\');
$mem_usage = memory_get_usage();
$peak_usage = memory_get_peak_usage(true);
$output .= "\\n" . $modx->lexicon(\'mc_final_memory_used\')
    . \': \' . round($mem_usage / 1048576, 2) . \' \' .
    $modx->lexicon(\'mc_megabytes\');
$output .= "\\n" . $modx->lexicon(\'mc_peak_memory_used\')
    . \': \' . round($peak_usage / 1048576, 2) . \' \' .
    $modx->lexicon(\'mc_megabytes\');
/* report how long it took */
$mtime = microtime();
$mtime = explode(" ", $mtime);
$mtime = $mtime[1] + $mtime[0];
$tend = $mtime;
$totalTime = ($tend - $tstart);
$totalTime = sprintf("%2.4f s", $totalTime);
$output .=  "\\n" . $modx->lexicon(\'mc_total_time\') .
    \': \' . $totalTime;

if ($cliMode) {
    echo $output;
} else {
    return $output;
}',
      'locked' => 0,
      'properties' => NULL,
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/* set start time */
$mtime = microtime();
$mtime = explode(" ", $mtime);
$mtime = $mtime[1] + $mtime[0];
$tstart = $mtime;
set_time_limit(0);
$mem_usage = memory_get_usage();

/* @var $modx modX */

$cliMode = false;

if (!defined(\'MODX_CORE_PATH\')) {
    $path1 = dirname(dirname(dirname(dirname(dirname(dirname(__FILE__)))))) . \'/_build/build.config.php\';
    if (file_exists($path1)) {
        include $path1;
    } else {
        $path2 = dirname(dirname(dirname(__FILE__))) . \'/_build/build.config.php\';
        if (file_exists($path2)) {
            include($path2);
        }
    }
    if (!defined(\'MODX_CORE_PATH\')) {
        session_write_close();
        die(\'[bootstrap.php] Could not find build.config.php\');
    }
    require_once MODX_CORE_PATH . \'model/modx/modx.class.php\';
    $modx = new modX();
    /* Initialize and set up logging */
    $modx->initialize(\'mgr\');
    $modx->getService(\'error\', \'error.modError\', \'\', \'\');
    $modx->setLogLevel(xPDO::LOG_LEVEL_INFO);
    $modx->setLogTarget(XPDO_CLI_MODE
        ? \'ECHO\'
        : \'HTML\');

    /* This section will only run when operating outside of MODX */
    if (php_sapi_name() == \'cli\') {
        $cliMode = true;
        /* Set $modx->user and $modx->resource to avoid
         * other people\'s plugins from crashing us */
        $modx->getRequest();
        $homeId = $modx->getOption(\'site_start\');
        $homeResource = $modx->getObject(\'modResource\', $homeId);

        if ($homeResource instanceof modResource) {
            $modx->resource = $homeResource;
        } else {
            echo "\\nNo Resource\\n";
        }
    }
} else {
    if (!$modx->user->hasSessionContext(\'mgr\')) {
        die (\'Unauthorized Access\');
    }
}

require_once $modx->getOption(\'mc.core_path\', null, $modx->getOption(\'core_path\') . \'components/mycomponent/\') . \'model/mycomponent/mycomponentproject.class.php\';
// include \'mycomponentproject.class.php\';

$modx->lexicon->load(\'mycomponent:default\');

$project = new MyComponentProject($modx);
$project->init();

//$project->removeObjects();
$project->bootstrap();

$output = $project->helpers->getOutput();

// echo print_r(ObjectAdapter::$myObjects, true);

$output .= "\\n\\n" . $modx->lexicon(\'mc_initial_memory_used\') . \': \' . round($mem_usage / 1048576, 2) . \' \' .
    $modx->lexicon(\'mc_megabytes\');
$mem_usage = memory_get_usage();
$peak_usage = memory_get_peak_usage(true);
$output .= "\\n" . $modx->lexicon(\'mc_final_memory_used\')
    . \': \' . round($mem_usage / 1048576, 2) . \' \' .
    $modx->lexicon(\'mc_megabytes\');
$output .= "\\n" . $modx->lexicon(\'mc_peak_memory_used\')
    . \': \' . round($peak_usage / 1048576, 2) . \' \' .
    $modx->lexicon(\'mc_megabytes\');
/* report how long it took */
$mtime = microtime();
$mtime = explode(" ", $mtime);
$mtime = $mtime[1] + $mtime[0];
$tend = $mtime;
$totalTime = ($tend - $tstart);
$totalTime = sprintf("%2.4f s", $totalTime);
$output .=  "\\n" . $modx->lexicon(\'mc_total_time\') .
    \': \' . $totalTime;

if ($cliMode) {
    echo $output;
} else {
    return $output;
}',
    ),
  ),
  '8f86aa144854c58c5e66ccfc449d59e1' => 
  array (
    'criteria' => 
    array (
      'name' => 'MyComponent',
    ),
    'object' => 
    array (
      'id' => 45,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'MyComponent',
      'description' => '',
      'editor_type' => 0,
      'category' => 15,
      'cache_type' => 0,
      'snippet' => '/* @var $modx modX */

/* These are for Orphans
changelog.txt.tpl categoryresolver.php changelog.txt.tpl css.tpl js.tpl license.tpl license.txt.tpl modchunk.tpl
modresource.tpl modtemplate.tpl pluginresolver.php propertiesfile.php propertysetresolver.php readme.md.tpl
readme.txt.tpl removenewevents.php resourceresolver.php transportfile.php tutorial.html.tpl tvresolver.php */


$modx->lexicon->load(\'mycomponent:default\');
if (! $modx->user->hasSessionContext(\'mgr\')) {
    session_write_close();
    die(\'This file can not be run outside of MODX. \');
}
$message = \'&nbsp;\';
$tpl = $modx->getChunk(\'mycomponentform.tpl\');

/* get the current project from the mc _build/config directory */
$cpFile = $modx->getOption(\'mc.root\', null, $modx->getOption(\'core_path\') . \'components/mycomponent/\') . \'_build/config/current.project.php\';

@include $cpFile;

/* make sure we got it */
if (!isset($currentProject)) {
    session_write_close();
    die(\'Current Project is not set\');
}

$cssFile = $modx->getOption(\'mc.assets_url\', null, $modx->getOption(\'assets_url\') . \'components/mycomponent/\') . \'css/mycomponent.css\';

$modx->regClientCSS($cssFile);





$newProjectName = \'\';
$output = \'\';
$projects = \'\';
$code = \'\';

$projectFile = $modx->getOption(\'mc.root\', null, $modx->getOption(\'core_path\') . \'components/mycomponent/\') . \'_build/config/projects.php\';


$projects = require $projectFile;

if (!is_array($projects)) {
    die (\'could not get projects array\');
} else {
    natcasesort($projects);
}

// $tpl .= print_r($_POST, true);

/* process form */
if ( (!empty($_POST) ) && (isset($_POST[\'doit\']) || isset($_POST[\'newproject\']) || isset($_POST[\'switchproject\']))) {
    if (isset($_POST[\'newproject\'])) {
        $action =\'newproject\';
    } elseif (isset($_POST[\'switchproject\'])) {
        $action = \'switchproject\';
    } else {
        $action = $_POST[\'doit\'];
    }
    switch ($action) {
        case \'switchproject\':
            if (empty($_POST[\'currentproject\'])) {
                $message = \'You must specify a project name\';
            } elseif ($_POST[\'selectproject\'] == $currentProject) {
                $message = \'Already on that project\';
            } else {
                $newProjectName = $_POST[\'selectproject\'];
                $content = file_get_contents($cpFile);
                $content = str_replace($currentProject, $newProjectName, $content);
                $fp = fopen($cpFile, \'w\');
                if ($fp) {
                    fwrite($fp, $content);
                    fclose($fp);
                }
                $currentProject = $newProjectName;
            }
            break;
        case \'newproject\':
            if (empty($_POST[\'currentproject\'])) {
                $message = $modx->lexicon(\'mc_you_must_specify_a_project_name\');
            } elseif(isset($projects[strtolower($_POST[\'currentproject\'])])) {
                $message = $modx->lexicon(\'mc_project_already_exists\');
            } else {
                $newProjectName = $_POST[\'currentproject\'];
                $newProjectLower = strtolower($newProjectName);

                /* update MC current.project.php file */
                $content = file_get_contents($cpFile);
                $content = str_replace($currentProject, $newProjectLower, $content);
                $fp = fopen($cpFile, \'w\');
                if ($fp) {
                    fwrite($fp, $content);
                    fclose($fp);
                }
                $currentProject = $newProjectLower;
                /* create new project config file */
                $props = array();
                $props[\'mycomponentCore\'] = $modx->getOption(\'mc.core_path\', null, $modx->getOption(\'core_path\') . \'components/mycomponent/\');
                require_once $props[\'mycomponentCore\'] . \'model/mycomponent/helpers.class.php\';
                $helpers = new Helpers($modx, $props);
                $helpers->init();
                $newTpl = $helpers->getTpl(\'example.config.php\');
                if (empty($newTpl)) {
                    $message = \'Could not find example.config.php\';
                    break;
                }
                $newTpl = str_replace(\'Example\', $newProjectName, $newTpl);
                $newTpl = str_replace(\'example\', $newProjectLower, $newTpl);
                $configDir = $modx->getOption(\'mc.root\', null, $modx->getOption(\'core_path\') . \'components/mycomponent/\') . \'_build/config/\';
                if (! is_dir($configDir)) {
                    $message = \'Config directory does not exist\';
                    break;
                }
                $configFile = $configDir . $newProjectLower . \'.config.php\';
                $fp = fopen($configFile, \'w\');
                if ($fp) {
                    fwrite($fp, $newTpl);
                    fclose($fp);
                } else {
                    $message = \'Could not open new config file\';
                    break;
                }
                $message = "Important! Edit the new config file before running any utilities:\\n" . $configFile;
                $projects[$newProjectLower] = $configFile;
                /* update projects file */
                $content = \'<\' . \'?\' . "php\\n\\n  \\$projects = " . var_export($projects, true) .
                    \';\' . "\\n return \\$projects;";
                $fp = fopen($projectFile, \'w\');
                if ($fp) {
                    fwrite($fp, $content);
                    fclose($fp);
                }

            }

            break;
        case \'bootstrap\':
            $output = $modx->runSnippet(\'Bootstrap\');
            break;
        case \'exportobjects\':
            $output = $modx->runSnippet(\'ExportObjects\');
            break;
        case \'importobjects\':
            $output = $modx->runSnippet(\'ImportObjects\');
            break;
        case \'lexiconhelper\':
            $output = $modx->runSnippet(\'LexiconHelper\');
            break;
        case \'build\':
            $output = $modx->runSnippet(\'Build\');
            break;
        case \'checkproperties\':
            $output = $modx->runSnippet(\'CheckProperties\');
            break;

        case \'removeobjects\':
            $output = $modx->runSnippet(\'RemoveObjects\');
            break;
        case \'removeobjectsandfiles\':
            $output = $modx->runSnippet(\'RemoveObjects\', array(\'removeFiles\' => true));
            break;
    }


}

/* populate projects drop-down list with current project selected */
foreach ($projects as $k => $value) {
    $selected = \'\';
    if ($k == $currentProject) {
        $selected = \' selected="selected" \';
    }
    $code .= \'        <option value="\' . $k . \'"\' . $selected . \'>\' . $k . "</option >\\n";
}

$tpl = str_replace(\'[[+projects]]\', $code, $tpl);
$tpl = str_replace(\'[[+message]]\', $message, $tpl);
$tpl = str_replace(\'[[+current_project]]\', $currentProject, $tpl);
$tpl = str_replace(\'[[+confirm_remove_objects]]\', \'Are you sure you want to remove all objects?\', $tpl);
$tpl = str_replace(\'[[+confirm_remove_objects_and_files]]\', \'Are you sure you want to remove all objects and files?\', $tpl);

// $tpl .= "\\nNEW PROJECT: " . $newProjectName . "\\n" . \'URL: \' . $url . "\\n\\n" . print_r($projects, true);

return $tpl . \'<pre>\' . $output;',
      'locked' => 0,
      'properties' => 'a:0:{}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/* @var $modx modX */

/* These are for Orphans
changelog.txt.tpl categoryresolver.php changelog.txt.tpl css.tpl js.tpl license.tpl license.txt.tpl modchunk.tpl
modresource.tpl modtemplate.tpl pluginresolver.php propertiesfile.php propertysetresolver.php readme.md.tpl
readme.txt.tpl removenewevents.php resourceresolver.php transportfile.php tutorial.html.tpl tvresolver.php */


$modx->lexicon->load(\'mycomponent:default\');
if (! $modx->user->hasSessionContext(\'mgr\')) {
    session_write_close();
    die(\'This file can not be run outside of MODX. \');
}
$message = \'&nbsp;\';
$tpl = $modx->getChunk(\'mycomponentform.tpl\');

/* get the current project from the mc _build/config directory */
$cpFile = $modx->getOption(\'mc.root\', null, $modx->getOption(\'core_path\') . \'components/mycomponent/\') . \'_build/config/current.project.php\';

@include $cpFile;

/* make sure we got it */
if (!isset($currentProject)) {
    session_write_close();
    die(\'Current Project is not set\');
}

$cssFile = $modx->getOption(\'mc.assets_url\', null, $modx->getOption(\'assets_url\') . \'components/mycomponent/\') . \'css/mycomponent.css\';

$modx->regClientCSS($cssFile);





$newProjectName = \'\';
$output = \'\';
$projects = \'\';
$code = \'\';

$projectFile = $modx->getOption(\'mc.root\', null, $modx->getOption(\'core_path\') . \'components/mycomponent/\') . \'_build/config/projects.php\';


$projects = require $projectFile;

if (!is_array($projects)) {
    die (\'could not get projects array\');
} else {
    natcasesort($projects);
}

// $tpl .= print_r($_POST, true);

/* process form */
if ( (!empty($_POST) ) && (isset($_POST[\'doit\']) || isset($_POST[\'newproject\']) || isset($_POST[\'switchproject\']))) {
    if (isset($_POST[\'newproject\'])) {
        $action =\'newproject\';
    } elseif (isset($_POST[\'switchproject\'])) {
        $action = \'switchproject\';
    } else {
        $action = $_POST[\'doit\'];
    }
    switch ($action) {
        case \'switchproject\':
            if (empty($_POST[\'currentproject\'])) {
                $message = \'You must specify a project name\';
            } elseif ($_POST[\'selectproject\'] == $currentProject) {
                $message = \'Already on that project\';
            } else {
                $newProjectName = $_POST[\'selectproject\'];
                $content = file_get_contents($cpFile);
                $content = str_replace($currentProject, $newProjectName, $content);
                $fp = fopen($cpFile, \'w\');
                if ($fp) {
                    fwrite($fp, $content);
                    fclose($fp);
                }
                $currentProject = $newProjectName;
            }
            break;
        case \'newproject\':
            if (empty($_POST[\'currentproject\'])) {
                $message = $modx->lexicon(\'mc_you_must_specify_a_project_name\');
            } elseif(isset($projects[strtolower($_POST[\'currentproject\'])])) {
                $message = $modx->lexicon(\'mc_project_already_exists\');
            } else {
                $newProjectName = $_POST[\'currentproject\'];
                $newProjectLower = strtolower($newProjectName);

                /* update MC current.project.php file */
                $content = file_get_contents($cpFile);
                $content = str_replace($currentProject, $newProjectLower, $content);
                $fp = fopen($cpFile, \'w\');
                if ($fp) {
                    fwrite($fp, $content);
                    fclose($fp);
                }
                $currentProject = $newProjectLower;
                /* create new project config file */
                $props = array();
                $props[\'mycomponentCore\'] = $modx->getOption(\'mc.core_path\', null, $modx->getOption(\'core_path\') . \'components/mycomponent/\');
                require_once $props[\'mycomponentCore\'] . \'model/mycomponent/helpers.class.php\';
                $helpers = new Helpers($modx, $props);
                $helpers->init();
                $newTpl = $helpers->getTpl(\'example.config.php\');
                if (empty($newTpl)) {
                    $message = \'Could not find example.config.php\';
                    break;
                }
                $newTpl = str_replace(\'Example\', $newProjectName, $newTpl);
                $newTpl = str_replace(\'example\', $newProjectLower, $newTpl);
                $configDir = $modx->getOption(\'mc.root\', null, $modx->getOption(\'core_path\') . \'components/mycomponent/\') . \'_build/config/\';
                if (! is_dir($configDir)) {
                    $message = \'Config directory does not exist\';
                    break;
                }
                $configFile = $configDir . $newProjectLower . \'.config.php\';
                $fp = fopen($configFile, \'w\');
                if ($fp) {
                    fwrite($fp, $newTpl);
                    fclose($fp);
                } else {
                    $message = \'Could not open new config file\';
                    break;
                }
                $message = "Important! Edit the new config file before running any utilities:\\n" . $configFile;
                $projects[$newProjectLower] = $configFile;
                /* update projects file */
                $content = \'<\' . \'?\' . "php\\n\\n  \\$projects = " . var_export($projects, true) .
                    \';\' . "\\n return \\$projects;";
                $fp = fopen($projectFile, \'w\');
                if ($fp) {
                    fwrite($fp, $content);
                    fclose($fp);
                }

            }

            break;
        case \'bootstrap\':
            $output = $modx->runSnippet(\'Bootstrap\');
            break;
        case \'exportobjects\':
            $output = $modx->runSnippet(\'ExportObjects\');
            break;
        case \'importobjects\':
            $output = $modx->runSnippet(\'ImportObjects\');
            break;
        case \'lexiconhelper\':
            $output = $modx->runSnippet(\'LexiconHelper\');
            break;
        case \'build\':
            $output = $modx->runSnippet(\'Build\');
            break;
        case \'checkproperties\':
            $output = $modx->runSnippet(\'CheckProperties\');
            break;

        case \'removeobjects\':
            $output = $modx->runSnippet(\'RemoveObjects\');
            break;
        case \'removeobjectsandfiles\':
            $output = $modx->runSnippet(\'RemoveObjects\', array(\'removeFiles\' => true));
            break;
    }


}

/* populate projects drop-down list with current project selected */
foreach ($projects as $k => $value) {
    $selected = \'\';
    if ($k == $currentProject) {
        $selected = \' selected="selected" \';
    }
    $code .= \'        <option value="\' . $k . \'"\' . $selected . \'>\' . $k . "</option >\\n";
}

$tpl = str_replace(\'[[+projects]]\', $code, $tpl);
$tpl = str_replace(\'[[+message]]\', $message, $tpl);
$tpl = str_replace(\'[[+current_project]]\', $currentProject, $tpl);
$tpl = str_replace(\'[[+confirm_remove_objects]]\', \'Are you sure you want to remove all objects?\', $tpl);
$tpl = str_replace(\'[[+confirm_remove_objects_and_files]]\', \'Are you sure you want to remove all objects and files?\', $tpl);

// $tpl .= "\\nNEW PROJECT: " . $newProjectName . "\\n" . \'URL: \' . $url . "\\n\\n" . print_r($projects, true);

return $tpl . \'<pre>\' . $output;',
    ),
  ),
  '34dc838d03a6c3e242ebf6b77d70c1fa' => 
  array (
    'criteria' => 
    array (
      'name' => 'ImportObjects',
    ),
    'object' => 
    array (
      'id' => 46,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'ImportObjects',
      'description' => '',
      'editor_type' => 0,
      'category' => 15,
      'cache_type' => 0,
      'snippet' => '/* set start time */
$mtime = microtime();
$mtime = explode(" ", $mtime);
$mtime = $mtime[1] + $mtime[0];
$tstart = $mtime;
set_time_limit(0);
$mem_usage = memory_get_usage();

/* @var $modx modX */

$cliMode = false;

if (!defined(\'MODX_CORE_PATH\')) {
    $path1 = dirname(dirname(dirname(dirname(dirname(dirname(__FILE__)))))) . \'/_build/build.config.php\';
    if (file_exists($path1)) {
        include $path1;
    } else {
        $path2 = dirname(dirname(dirname(dirname(dirname(__FILE__))))) . \'/config/config.inc.php\';
        if (file_exists($path2)) {
            include($path2);
        }
    }
    if (!defined(\'MODX_CORE_PATH\')) {
        session_write_close();
        die(\'[importobjects.php] Could not find build.config.php\');
    }
    require_once MODX_CORE_PATH . \'model/modx/modx.class.php\';
    $modx = new modX();
    /* Initialize and set up logging */
    $modx->initialize(\'mgr\');
    $modx->getService(\'error\', \'error.modError\', \'\', \'\');
    $modx->setLogLevel(xPDO::LOG_LEVEL_INFO);
    $modx->setLogTarget(XPDO_CLI_MODE
        ? \'ECHO\'
        : \'HTML\');

    /* This section will only run when operating outside of MODX */
    if (php_sapi_name() == \'cli\') {

        $cliMode = true;
        /* Set $modx->user and $modx->resource to avoid
         * other people\'s plugins from crashing us */
        $modx->getRequest();
        $homeId = $modx->getOption(\'site_start\');
        $homeResource = $modx->getObject(\'modResource\', $homeId);
        if ($homeResource instanceof modResource) {
            $modx->resource = $homeResource;
        } else {
            echo "\\nNo Resource\\n";
        }
    }
} else {
    if (!$modx->user->hasSessionContext(\'mgr\')) {
        die (\'Unauthorized Access\');
    }
}

$modx->lexicon->load(\'mycomponent:default\');
// include \'mycomponentproject.class.php\';
require_once $modx->getOption(\'mc.core_path\', null, $modx->getOption(\'core_path\') . \'components/mycomponent/\') . \'model/mycomponent/mycomponentproject.class.php\';

$props = isset($scriptProperties) ? $scriptProperties : array();
$project = new MyComponentProject($modx);
$project->init($props);

//$project->removeObjects();


$dryRun = false; /* true is the default -- set to false for actual import */
/* Comma-separated list of elements to process (snippets,plugins,chunks,templates) */

$toProcess = \'snippets,plugins,chunks,templates\';
/* path to elements directory to import -- if empty, project\'s elements dir will be used */
/*$directory = $modx->getOption(\'mc.core\', null,
    $modx->getOption(\'core_path\') . \'components/example/\') . \'elements/\';*/
$directory = \'\';
$project->importObjects($toProcess, $directory, $dryRun);

$cm = $modx->getCacheManager();
$cm->refresh();
// echo print_r(ObjectAdapter::$myObjects, true);

$output = $project->helpers->getOutput();

$output .= "\\n\\n" . $modx->lexicon(\'mc_initial_memory_used\') . \': \' . round($mem_usage / 1048576, 2) . \' \' .
    $modx->lexicon(\'mc_megabytes\');
$mem_usage = memory_get_usage();
$peak_usage = memory_get_peak_usage(true);
$output .= "\\n" . $modx->lexicon(\'mc_final_memory_used\')
    . \': \' . round($mem_usage / 1048576, 2) . \' \' .
    $modx->lexicon(\'mc_megabytes\');
$output .= "\\n" . $modx->lexicon(\'mc_peak_memory_used\')
    . \': \' . round($peak_usage / 1048576, 2) . \' \' .
    $modx->lexicon(\'mc_megabytes\');
/* report how long it took */
$mtime = microtime();
$mtime = explode(" ", $mtime);
$mtime = $mtime[1] + $mtime[0];
$tend = $mtime;
$totalTime = ($tend - $tstart);
$totalTime = sprintf("%2.4f s", $totalTime);
$output .= "\\n" . $modx->lexicon(\'mc_total_time\') .
    \': \' . $totalTime;

if ($cliMode) {
    echo $output;
} else {
    return $output;
}',
      'locked' => 0,
      'properties' => NULL,
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/* set start time */
$mtime = microtime();
$mtime = explode(" ", $mtime);
$mtime = $mtime[1] + $mtime[0];
$tstart = $mtime;
set_time_limit(0);
$mem_usage = memory_get_usage();

/* @var $modx modX */

$cliMode = false;

if (!defined(\'MODX_CORE_PATH\')) {
    $path1 = dirname(dirname(dirname(dirname(dirname(dirname(__FILE__)))))) . \'/_build/build.config.php\';
    if (file_exists($path1)) {
        include $path1;
    } else {
        $path2 = dirname(dirname(dirname(dirname(dirname(__FILE__))))) . \'/config/config.inc.php\';
        if (file_exists($path2)) {
            include($path2);
        }
    }
    if (!defined(\'MODX_CORE_PATH\')) {
        session_write_close();
        die(\'[importobjects.php] Could not find build.config.php\');
    }
    require_once MODX_CORE_PATH . \'model/modx/modx.class.php\';
    $modx = new modX();
    /* Initialize and set up logging */
    $modx->initialize(\'mgr\');
    $modx->getService(\'error\', \'error.modError\', \'\', \'\');
    $modx->setLogLevel(xPDO::LOG_LEVEL_INFO);
    $modx->setLogTarget(XPDO_CLI_MODE
        ? \'ECHO\'
        : \'HTML\');

    /* This section will only run when operating outside of MODX */
    if (php_sapi_name() == \'cli\') {

        $cliMode = true;
        /* Set $modx->user and $modx->resource to avoid
         * other people\'s plugins from crashing us */
        $modx->getRequest();
        $homeId = $modx->getOption(\'site_start\');
        $homeResource = $modx->getObject(\'modResource\', $homeId);
        if ($homeResource instanceof modResource) {
            $modx->resource = $homeResource;
        } else {
            echo "\\nNo Resource\\n";
        }
    }
} else {
    if (!$modx->user->hasSessionContext(\'mgr\')) {
        die (\'Unauthorized Access\');
    }
}

$modx->lexicon->load(\'mycomponent:default\');
// include \'mycomponentproject.class.php\';
require_once $modx->getOption(\'mc.core_path\', null, $modx->getOption(\'core_path\') . \'components/mycomponent/\') . \'model/mycomponent/mycomponentproject.class.php\';

$props = isset($scriptProperties) ? $scriptProperties : array();
$project = new MyComponentProject($modx);
$project->init($props);

//$project->removeObjects();


$dryRun = false; /* true is the default -- set to false for actual import */
/* Comma-separated list of elements to process (snippets,plugins,chunks,templates) */

$toProcess = \'snippets,plugins,chunks,templates\';
/* path to elements directory to import -- if empty, project\'s elements dir will be used */
/*$directory = $modx->getOption(\'mc.core\', null,
    $modx->getOption(\'core_path\') . \'components/example/\') . \'elements/\';*/
$directory = \'\';
$project->importObjects($toProcess, $directory, $dryRun);

$cm = $modx->getCacheManager();
$cm->refresh();
// echo print_r(ObjectAdapter::$myObjects, true);

$output = $project->helpers->getOutput();

$output .= "\\n\\n" . $modx->lexicon(\'mc_initial_memory_used\') . \': \' . round($mem_usage / 1048576, 2) . \' \' .
    $modx->lexicon(\'mc_megabytes\');
$mem_usage = memory_get_usage();
$peak_usage = memory_get_peak_usage(true);
$output .= "\\n" . $modx->lexicon(\'mc_final_memory_used\')
    . \': \' . round($mem_usage / 1048576, 2) . \' \' .
    $modx->lexicon(\'mc_megabytes\');
$output .= "\\n" . $modx->lexicon(\'mc_peak_memory_used\')
    . \': \' . round($peak_usage / 1048576, 2) . \' \' .
    $modx->lexicon(\'mc_megabytes\');
/* report how long it took */
$mtime = microtime();
$mtime = explode(" ", $mtime);
$mtime = $mtime[1] + $mtime[0];
$tend = $mtime;
$totalTime = ($tend - $tstart);
$totalTime = sprintf("%2.4f s", $totalTime);
$output .= "\\n" . $modx->lexicon(\'mc_total_time\') .
    \': \' . $totalTime;

if ($cliMode) {
    echo $output;
} else {
    return $output;
}',
    ),
  ),
  '767798520acf879db5d9e53ca48ad3f6' => 
  array (
    'criteria' => 
    array (
      'name' => 'RemoveObjects',
    ),
    'object' => 
    array (
      'id' => 47,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'RemoveObjects',
      'description' => '',
      'editor_type' => 0,
      'category' => 15,
      'cache_type' => 0,
      'snippet' => '/* set start time */
$mtime = microtime();
$mtime = explode(" ", $mtime);
$mtime = $mtime[1] + $mtime[0];
$tstart = $mtime;
set_time_limit(0);
$mem_usage = memory_get_usage();

/* @var $modx modX */

$cliMode = false;

if (!defined(\'MODX_CORE_PATH\')) {
    $path1 = dirname(dirname(dirname(dirname(dirname(dirname(__FILE__)))))) . \'/_build/build.config.php\';
    if (file_exists($path1)) {
        include $path1;
    } else {
        $path2 = dirname(dirname(dirname(dirname(dirname(__FILE__))))) . \'/config/config.inc.php\';
        if (file_exists($path2)) {
            include($path2);
        }
    }
    if (!defined(\'MODX_CORE_PATH\')) {
        session_write_close();
        die(\'[importobjects.php] Could not find build.config.php\');
    }
    require_once MODX_CORE_PATH . \'model/modx/modx.class.php\';
    $modx = new modX();
    /* Initialize and set up logging */
    $modx->initialize(\'mgr\');
    $modx->getService(\'error\', \'error.modError\', \'\', \'\');
    $modx->setLogLevel(xPDO::LOG_LEVEL_INFO);
    $modx->setLogTarget(XPDO_CLI_MODE
        ? \'ECHO\'
        : \'HTML\');

    /* This section will only run when operating outside of MODX */
    if (php_sapi_name() == \'cli\') {
        $cliMode = true;
        /* Set $modx->user and $modx->resource to avoid
         * other people\'s plugins from crashing us */
        $modx->getRequest();
        $homeId = $modx->getOption(\'site_start\');
        $homeResource = $modx->getObject(\'modResource\', $homeId);
        if ($homeResource instanceof modResource) {
            $modx->resource = $homeResource;
        } else {
            echo "\\nNo Resource\\n";
        }
    }
} else {
    if (!$modx->user->hasSessionContext(\'mgr\')) {
        die (\'Unauthorized Access\');
    }
}

$modx->lexicon->load(\'mycomponent:default\');

// include \'mycomponent.project.php\';
require_once $modx->getOption(\'mc.core_path\', null, $modx->getOption(\'core_path\') . \'components/mycomponent/\') . \'model/mycomponent/mycomponentproject.class.php\';

$props = isset($scriptProperties)
    ? $scriptProperties
    : array();
$project = new MyComponentProject($modx);
$project->init($props);

$dryRun = false; /* true is the default -- set to false for actual import */
/* Comma-separated list of elements to process (snippets,plugins,chunks,templates) */

$toProcess = \'snippets,plugins,chunks,templates\';
/* path to elements directory to import -- if empty, project\'s elements dir will be used */
/*$directory = $modx->getOption(\'mc.core\', null,
    $modx->getOption(\'core_path\') . \'components/example/\') . \'elements/\';*/
$directory = \'\';
$removeFiles = isset($scriptProperties[\'removeFiles\']) && !empty($scriptProperties[\'removeFiles\']);
$project->removeObjects($removeFiles);

$output = $project->helpers->getOutput();


$output .= "\\n\\n" . $modx->lexicon(\'mc_initial_memory_used\') . \': \' . round($mem_usage / 1048576, 2) . \' \' .
    $modx->lexicon(\'mc_megabytes\');
$mem_usage = memory_get_usage();
$peak_usage = memory_get_peak_usage(true);
$output .= "\\n" . $modx->lexicon(\'mc_final_memory_used\')
    . \': \' . round($mem_usage / 1048576, 2) . \' \' .
    $modx->lexicon(\'mc_megabytes\');
$output .= "\\n" . $modx->lexicon(\'mc_peak_memory_used\')
    . \': \' . round($peak_usage / 1048576, 2) . \' \' .
    $modx->lexicon(\'mc_megabytes\');
/* report how long it took */
$mtime = microtime();
$mtime = explode(" ", $mtime);
$mtime = $mtime[1] + $mtime[0];
$tend = $mtime;
$totalTime = ($tend - $tstart);
$totalTime = sprintf("%2.4f s", $totalTime);
$output .= "\\n" . $modx->lexicon(\'mc_total_time\') .
    \': \' . $totalTime;

if ($cliMode) {
    echo $output;
} else {
    return $output;
}',
      'locked' => 0,
      'properties' => NULL,
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/* set start time */
$mtime = microtime();
$mtime = explode(" ", $mtime);
$mtime = $mtime[1] + $mtime[0];
$tstart = $mtime;
set_time_limit(0);
$mem_usage = memory_get_usage();

/* @var $modx modX */

$cliMode = false;

if (!defined(\'MODX_CORE_PATH\')) {
    $path1 = dirname(dirname(dirname(dirname(dirname(dirname(__FILE__)))))) . \'/_build/build.config.php\';
    if (file_exists($path1)) {
        include $path1;
    } else {
        $path2 = dirname(dirname(dirname(dirname(dirname(__FILE__))))) . \'/config/config.inc.php\';
        if (file_exists($path2)) {
            include($path2);
        }
    }
    if (!defined(\'MODX_CORE_PATH\')) {
        session_write_close();
        die(\'[importobjects.php] Could not find build.config.php\');
    }
    require_once MODX_CORE_PATH . \'model/modx/modx.class.php\';
    $modx = new modX();
    /* Initialize and set up logging */
    $modx->initialize(\'mgr\');
    $modx->getService(\'error\', \'error.modError\', \'\', \'\');
    $modx->setLogLevel(xPDO::LOG_LEVEL_INFO);
    $modx->setLogTarget(XPDO_CLI_MODE
        ? \'ECHO\'
        : \'HTML\');

    /* This section will only run when operating outside of MODX */
    if (php_sapi_name() == \'cli\') {
        $cliMode = true;
        /* Set $modx->user and $modx->resource to avoid
         * other people\'s plugins from crashing us */
        $modx->getRequest();
        $homeId = $modx->getOption(\'site_start\');
        $homeResource = $modx->getObject(\'modResource\', $homeId);
        if ($homeResource instanceof modResource) {
            $modx->resource = $homeResource;
        } else {
            echo "\\nNo Resource\\n";
        }
    }
} else {
    if (!$modx->user->hasSessionContext(\'mgr\')) {
        die (\'Unauthorized Access\');
    }
}

$modx->lexicon->load(\'mycomponent:default\');

// include \'mycomponent.project.php\';
require_once $modx->getOption(\'mc.core_path\', null, $modx->getOption(\'core_path\') . \'components/mycomponent/\') . \'model/mycomponent/mycomponentproject.class.php\';

$props = isset($scriptProperties)
    ? $scriptProperties
    : array();
$project = new MyComponentProject($modx);
$project->init($props);

$dryRun = false; /* true is the default -- set to false for actual import */
/* Comma-separated list of elements to process (snippets,plugins,chunks,templates) */

$toProcess = \'snippets,plugins,chunks,templates\';
/* path to elements directory to import -- if empty, project\'s elements dir will be used */
/*$directory = $modx->getOption(\'mc.core\', null,
    $modx->getOption(\'core_path\') . \'components/example/\') . \'elements/\';*/
$directory = \'\';
$removeFiles = isset($scriptProperties[\'removeFiles\']) && !empty($scriptProperties[\'removeFiles\']);
$project->removeObjects($removeFiles);

$output = $project->helpers->getOutput();


$output .= "\\n\\n" . $modx->lexicon(\'mc_initial_memory_used\') . \': \' . round($mem_usage / 1048576, 2) . \' \' .
    $modx->lexicon(\'mc_megabytes\');
$mem_usage = memory_get_usage();
$peak_usage = memory_get_peak_usage(true);
$output .= "\\n" . $modx->lexicon(\'mc_final_memory_used\')
    . \': \' . round($mem_usage / 1048576, 2) . \' \' .
    $modx->lexicon(\'mc_megabytes\');
$output .= "\\n" . $modx->lexicon(\'mc_peak_memory_used\')
    . \': \' . round($peak_usage / 1048576, 2) . \' \' .
    $modx->lexicon(\'mc_megabytes\');
/* report how long it took */
$mtime = microtime();
$mtime = explode(" ", $mtime);
$mtime = $mtime[1] + $mtime[0];
$tend = $mtime;
$totalTime = ($tend - $tstart);
$totalTime = sprintf("%2.4f s", $totalTime);
$output .= "\\n" . $modx->lexicon(\'mc_total_time\') .
    \': \' . $totalTime;

if ($cliMode) {
    echo $output;
} else {
    return $output;
}',
    ),
  ),
  '14989d8f1e443ad79e30470917a17577' => 
  array (
    'criteria' => 
    array (
      'name' => 'Build',
    ),
    'object' => 
    array (
      'id' => 48,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'Build',
      'description' => '',
      'editor_type' => 0,
      'category' => 15,
      'cache_type' => 0,
      'snippet' => '/* set start time */
$mtime = microtime();
$mtime = explode(" ", $mtime);
$mtime = $mtime[1] + $mtime[0];
$tstart = $mtime;
set_time_limit(0);
$mem_usage = memory_get_usage();

/* @var $modx modX */
if (! class_exists(\'PropHelper\')) {
    class PropHelper {

        public function __construct(&$modx) {
            $this->modx =& $modx;

        }

        public function getProps($configPath) {
            $properties = @include $configPath;
            return $properties;
        }

        public function sendLog($level, $message) {
            $msg = \'\';
            if ($level == modX::LOG_LEVEL_ERROR) {
                $msg .= \'ERROR -- \';
            }
            $msg .= $message;
            $msg .= "\\n";
            if (php_sapi_name() != \'cli\') {
                $msg = nl2br($msg);
            }
            echo $msg;
        }
    }
}


if (!defined(\'MODX_CORE_PATH\')) {
    $path1 = dirname(dirname(dirname(dirname(dirname(dirname(__FILE__)))))) . \'/_build/build.config.php\';
    if (file_exists($path1)) {
        include $path1;
    } else {
        $path2 = dirname(dirname(dirname(dirname(dirname(__FILE__))))) . \'/config/config.inc.php\';
        if (file_exists($path2)) {
            include($path2);
        }
    }
    if (!defined(\'MODX_CORE_PATH\')) {
        session_write_close();
        die(\'[bootstrap.php] Could not find build.config.php\');
    }
    require_once MODX_CORE_PATH . \'model/modx/modx.class.php\';
    $modx = new modX();
    /* Initialize and set up logging */
    $modx->initialize(\'mgr\');
    $modx->getService(\'error\', \'error.modError\', \'\', \'\');
    $modx->setLogLevel(xPDO::LOG_LEVEL_INFO);
    $modx->setLogTarget(XPDO_CLI_MODE
        ? \'ECHO\'
        : \'HTML\');

    /* This section will only run when operating outside of MODX */
    if (php_sapi_name() == \'cli\') {
        /* Set $modx->user and $modx->resource to avoid
         * other people\'s plugins from crashing us */
        $modx->getRequest();
        $homeId = $modx->getOption(\'site_start\');
        $homeResource = $modx->getObject(\'modResource\', $homeId);

        if ($homeResource instanceof modResource) {
            $modx->resource = $homeResource;
        } else {
            echo "\\nNo Resource\\n";
        }

    }

} else {
    if (!$modx->user->hasSessionContext(\'mgr\')) {
        die (\'Unauthorized Access\');
    }
}

$modx->lexicon->load(\'mycomponent:default\');
// include build.transport.php

$buildPath =  $modx->getOption(\'mc.root\', null, $modx->getOption(\'core_path\') . \'components/mycomponent/\') . \'_build/\';

$file = \'config/current.project.php\';

@include $buildPath . $file;

if (! isset($currentProject)) {
    die (\'Could not find current project file at: \' . $buildPath . $file);
}
$configPath = $buildPath . \'config/\' . $currentProject . \'.config.php\';

if (! file_exists($configPath)) {
    session_write_close();
    die(\'Could not find project config file at: \' . $configPath);
} else {
    $helper = new PropHelper($modx);
    $props = $helper->getProps($configPath);
}

if (! is_array($props)) {
    session_write_close();
    die(\'Project Config file is corrupt\');
}

$transportPath = $props[\'targetRoot\'] . \'_build/build.transport.php\';

if (! file_exists($transportPath)) {
    session_write_close();
    die(\'Could not find build.transport.php at: \' . $transportPath);
}
unset ($props);
return include $transportPath;',
      'locked' => 0,
      'properties' => NULL,
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/* set start time */
$mtime = microtime();
$mtime = explode(" ", $mtime);
$mtime = $mtime[1] + $mtime[0];
$tstart = $mtime;
set_time_limit(0);
$mem_usage = memory_get_usage();

/* @var $modx modX */
if (! class_exists(\'PropHelper\')) {
    class PropHelper {

        public function __construct(&$modx) {
            $this->modx =& $modx;

        }

        public function getProps($configPath) {
            $properties = @include $configPath;
            return $properties;
        }

        public function sendLog($level, $message) {
            $msg = \'\';
            if ($level == modX::LOG_LEVEL_ERROR) {
                $msg .= \'ERROR -- \';
            }
            $msg .= $message;
            $msg .= "\\n";
            if (php_sapi_name() != \'cli\') {
                $msg = nl2br($msg);
            }
            echo $msg;
        }
    }
}


if (!defined(\'MODX_CORE_PATH\')) {
    $path1 = dirname(dirname(dirname(dirname(dirname(dirname(__FILE__)))))) . \'/_build/build.config.php\';
    if (file_exists($path1)) {
        include $path1;
    } else {
        $path2 = dirname(dirname(dirname(dirname(dirname(__FILE__))))) . \'/config/config.inc.php\';
        if (file_exists($path2)) {
            include($path2);
        }
    }
    if (!defined(\'MODX_CORE_PATH\')) {
        session_write_close();
        die(\'[bootstrap.php] Could not find build.config.php\');
    }
    require_once MODX_CORE_PATH . \'model/modx/modx.class.php\';
    $modx = new modX();
    /* Initialize and set up logging */
    $modx->initialize(\'mgr\');
    $modx->getService(\'error\', \'error.modError\', \'\', \'\');
    $modx->setLogLevel(xPDO::LOG_LEVEL_INFO);
    $modx->setLogTarget(XPDO_CLI_MODE
        ? \'ECHO\'
        : \'HTML\');

    /* This section will only run when operating outside of MODX */
    if (php_sapi_name() == \'cli\') {
        /* Set $modx->user and $modx->resource to avoid
         * other people\'s plugins from crashing us */
        $modx->getRequest();
        $homeId = $modx->getOption(\'site_start\');
        $homeResource = $modx->getObject(\'modResource\', $homeId);

        if ($homeResource instanceof modResource) {
            $modx->resource = $homeResource;
        } else {
            echo "\\nNo Resource\\n";
        }

    }

} else {
    if (!$modx->user->hasSessionContext(\'mgr\')) {
        die (\'Unauthorized Access\');
    }
}

$modx->lexicon->load(\'mycomponent:default\');
// include build.transport.php

$buildPath =  $modx->getOption(\'mc.root\', null, $modx->getOption(\'core_path\') . \'components/mycomponent/\') . \'_build/\';

$file = \'config/current.project.php\';

@include $buildPath . $file;

if (! isset($currentProject)) {
    die (\'Could not find current project file at: \' . $buildPath . $file);
}
$configPath = $buildPath . \'config/\' . $currentProject . \'.config.php\';

if (! file_exists($configPath)) {
    session_write_close();
    die(\'Could not find project config file at: \' . $configPath);
} else {
    $helper = new PropHelper($modx);
    $props = $helper->getProps($configPath);
}

if (! is_array($props)) {
    session_write_close();
    die(\'Project Config file is corrupt\');
}

$transportPath = $props[\'targetRoot\'] . \'_build/build.transport.php\';

if (! file_exists($transportPath)) {
    session_write_close();
    die(\'Could not find build.transport.php at: \' . $transportPath);
}
unset ($props);
return include $transportPath;',
    ),
  ),
  'a2729b35214fa806dd75ca43fe8f3b77' => 
  array (
    'criteria' => 
    array (
      'name' => 'CheckProperties',
    ),
    'object' => 
    array (
      'id' => 49,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'CheckProperties',
      'description' => '',
      'editor_type' => 0,
      'category' => 15,
      'cache_type' => 0,
      'snippet' => '/**
 * CheckProperties Utility Script for My Component
 * @author Bob Ray
 * Copyright 2012-2013 Bob Ray
 * Modified: July, 2012
 *
 * CheckProperties is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * CheckProperties is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * CheckProperties; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package mycomponent
 * @author Bob Ray <http://bobsguides.com>

 *
 * Description: The CheckProperties script identifies properties
 * used in code with $modx->getOption() or some version of $scriptProperties and checks 
 * them against properties in the properties file.
 *
 * Output can be pasted into the properties file.
 *
 * No files are altered.
 */

/* set start time */
$mtime = microtime();
$mtime = explode(" ", $mtime);
$mtime = $mtime[1] + $mtime[0];
$tstart = $mtime;
set_time_limit(0);
$mem_usage = memory_get_usage();

/* @var $modx modX */

$cliMode = false;

if (!defined(\'MODX_CORE_PATH\')) {
    $path1 = dirname(dirname(dirname(dirname(dirname(dirname(__FILE__)))))) . \'/_build/build.config.php\';
    if (file_exists($path1)) {
        include $path1;
    } else {
        $path2 = dirname(dirname(dirname(dirname(dirname(__FILE__))))) . \'/config/config.inc.php\';
        if (file_exists($path2)) {
            include($path2);
        }
    }
    if (!defined(\'MODX_CORE_PATH\')) {
        session_write_close();
        die(\'[bootstrap.php] Could not find build.config.php\');
    }
    require_once MODX_CORE_PATH . \'model/modx/modx.class.php\';
    $modx = new modX();
    /* Initialize and set up logging */
    $modx->initialize(\'mgr\');
    $modx->getService(\'error\', \'error.modError\', \'\', \'\');
    $modx->setLogLevel(xPDO::LOG_LEVEL_INFO);
    $modx->setLogTarget(XPDO_CLI_MODE
        ? \'ECHO\'
        : \'HTML\');

    /* This section will only run when operating outside of MODX */
    if (php_sapi_name() == \'cli\') {
        $cliMode = true;

        /* Set $modx->user and $modx->resource to avoid
         * other people\'s plugins from crashing us */
        $modx->getRequest();
        $homeId = $modx->getOption(\'site_start\');
        $homeResource = $modx->getObject(\'modResource\', $homeId);

        if ($homeResource instanceof modResource) {
            $modx->resource = $homeResource;
        } else {
            echo "\\nNo Resource\\n";
        }
    }
} else {
    if (!$modx->user->hasSessionContext(\'mgr\')) {
        die (\'Unauthorized Access\');
    }
}
// include \'checkproperties.class.php\';
require_once $modx->getOption(\'mc.core_path\', null, $modx->getOption(\'core_path\') . \'components/mycomponent/\') . \'model/mycomponent/checkproperties.class.php\';

$modx->lexicon->load(\'mycomponent:default\');

/* @var $scriptProperties array */

$checkProperties = new CheckProperties($modx, $scriptProperties);
$checkProperties->init($scriptProperties);
$checkProperties->run();

$output = $checkProperties->helpers->getOutput();

$output .= "\\n\\n" . $modx->lexicon(\'mc_initial_memory_used\') . \': \' . round($mem_usage / 1048576, 2) . \' \' .
    $modx->lexicon(\'mc_megabytes\');
$mem_usage = memory_get_usage();
$peak_usage = memory_get_peak_usage(true);
$output .= "\\n" . $modx->lexicon(\'mc_final_memory_used\')
    . \': \' . round($mem_usage / 1048576, 2) . \' \' .
    $modx->lexicon(\'mc_megabytes\');
$output .= "\\n" . $modx->lexicon(\'mc_peak_memory_used\')
    . \': \' . round($peak_usage / 1048576, 2) . \' \' .
    $modx->lexicon(\'mc_megabytes\');
/* report how long it took */
$mtime = microtime();
$mtime = explode(" ", $mtime);
$mtime = $mtime[1] + $mtime[0];
$tend = $mtime;
$totalTime = ($tend - $tstart);
$totalTime = sprintf("%2.4f s", $totalTime);
$output .= "\\n" . $modx->lexicon(\'mc_total_time\') .
    \': \' . $totalTime;

if ($cliMode) {
    echo $output;
} else {
    return $output;
}',
      'locked' => 0,
      'properties' => 'a:0:{}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * CheckProperties Utility Script for My Component
 * @author Bob Ray
 * Copyright 2012-2013 Bob Ray
 * Modified: July, 2012
 *
 * CheckProperties is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * CheckProperties is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * CheckProperties; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package mycomponent
 * @author Bob Ray <http://bobsguides.com>

 *
 * Description: The CheckProperties script identifies properties
 * used in code with $modx->getOption() or some version of $scriptProperties and checks 
 * them against properties in the properties file.
 *
 * Output can be pasted into the properties file.
 *
 * No files are altered.
 */

/* set start time */
$mtime = microtime();
$mtime = explode(" ", $mtime);
$mtime = $mtime[1] + $mtime[0];
$tstart = $mtime;
set_time_limit(0);
$mem_usage = memory_get_usage();

/* @var $modx modX */

$cliMode = false;

if (!defined(\'MODX_CORE_PATH\')) {
    $path1 = dirname(dirname(dirname(dirname(dirname(dirname(__FILE__)))))) . \'/_build/build.config.php\';
    if (file_exists($path1)) {
        include $path1;
    } else {
        $path2 = dirname(dirname(dirname(dirname(dirname(__FILE__))))) . \'/config/config.inc.php\';
        if (file_exists($path2)) {
            include($path2);
        }
    }
    if (!defined(\'MODX_CORE_PATH\')) {
        session_write_close();
        die(\'[bootstrap.php] Could not find build.config.php\');
    }
    require_once MODX_CORE_PATH . \'model/modx/modx.class.php\';
    $modx = new modX();
    /* Initialize and set up logging */
    $modx->initialize(\'mgr\');
    $modx->getService(\'error\', \'error.modError\', \'\', \'\');
    $modx->setLogLevel(xPDO::LOG_LEVEL_INFO);
    $modx->setLogTarget(XPDO_CLI_MODE
        ? \'ECHO\'
        : \'HTML\');

    /* This section will only run when operating outside of MODX */
    if (php_sapi_name() == \'cli\') {
        $cliMode = true;

        /* Set $modx->user and $modx->resource to avoid
         * other people\'s plugins from crashing us */
        $modx->getRequest();
        $homeId = $modx->getOption(\'site_start\');
        $homeResource = $modx->getObject(\'modResource\', $homeId);

        if ($homeResource instanceof modResource) {
            $modx->resource = $homeResource;
        } else {
            echo "\\nNo Resource\\n";
        }
    }
} else {
    if (!$modx->user->hasSessionContext(\'mgr\')) {
        die (\'Unauthorized Access\');
    }
}
// include \'checkproperties.class.php\';
require_once $modx->getOption(\'mc.core_path\', null, $modx->getOption(\'core_path\') . \'components/mycomponent/\') . \'model/mycomponent/checkproperties.class.php\';

$modx->lexicon->load(\'mycomponent:default\');

/* @var $scriptProperties array */

$checkProperties = new CheckProperties($modx, $scriptProperties);
$checkProperties->init($scriptProperties);
$checkProperties->run();

$output = $checkProperties->helpers->getOutput();

$output .= "\\n\\n" . $modx->lexicon(\'mc_initial_memory_used\') . \': \' . round($mem_usage / 1048576, 2) . \' \' .
    $modx->lexicon(\'mc_megabytes\');
$mem_usage = memory_get_usage();
$peak_usage = memory_get_peak_usage(true);
$output .= "\\n" . $modx->lexicon(\'mc_final_memory_used\')
    . \': \' . round($mem_usage / 1048576, 2) . \' \' .
    $modx->lexicon(\'mc_megabytes\');
$output .= "\\n" . $modx->lexicon(\'mc_peak_memory_used\')
    . \': \' . round($peak_usage / 1048576, 2) . \' \' .
    $modx->lexicon(\'mc_megabytes\');
/* report how long it took */
$mtime = microtime();
$mtime = explode(" ", $mtime);
$mtime = $mtime[1] + $mtime[0];
$tend = $mtime;
$totalTime = ($tend - $tstart);
$totalTime = sprintf("%2.4f s", $totalTime);
$output .= "\\n" . $modx->lexicon(\'mc_total_time\') .
    \': \' . $totalTime;

if ($cliMode) {
    echo $output;
} else {
    return $output;
}',
    ),
  ),
  '46ddb435874d34a8c5e0568b446038fe' => 
  array (
    'criteria' => 
    array (
      'templatename' => 'MyComponentTemplate',
    ),
    'object' => 
    array (
      'id' => 2,
      'source' => 0,
      'property_preprocess' => 0,
      'templatename' => 'MyComponentTemplate',
      'description' => 'Template',
      'editor_type' => 0,
      'category' => 15,
      'icon' => '',
      'template_type' => 0,
      'content' => '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <META HTTP-EQUIV="expires" CONTENT="thu, 31 DEC 2002 00:04:00 EST">
    <title>MyComponent</title>
    <base href="[[++site_url]]" />
</head>
<body>

  [[*content]]

</body>
</html>',
      'locked' => 0,
      'properties' => '',
      'static' => 0,
      'static_file' => '',
    ),
  ),
);