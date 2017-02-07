<?php return array (
  '41523bf2cb60edb92ead308415904c81' => 
  array (
    'criteria' => 
    array (
      'name' => 'imageplus',
    ),
    'object' => 
    array (
      'name' => 'imageplus',
      'path' => '{core_path}components/imageplus/',
      'assets_path' => '{assets_path}components/imageplus/',
    ),
  ),
  '1033e2db164e9a21850879dda2ee517f' => 
  array (
    'criteria' => 
    array (
      'key' => 'imageplus.debug',
    ),
    'object' => 
    array (
      'key' => 'imageplus.debug',
      'value' => '0',
      'xtype' => 'combo-boolean',
      'namespace' => 'imageplus',
      'area' => 'system',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '8504c5764d7e6fc1f402a5477c4eefc8' => 
  array (
    'criteria' => 
    array (
      'key' => 'imageplus.target_width',
    ),
    'object' => 
    array (
      'key' => 'imageplus.target_width',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'imageplus',
      'area' => 'imageplus',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '3633e01529766892e6381c94a25a86d4' => 
  array (
    'criteria' => 
    array (
      'key' => 'imageplus.target_height',
    ),
    'object' => 
    array (
      'key' => 'imageplus.target_height',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'imageplus',
      'area' => 'imageplus',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '5421a52c2c8e88f33a21ece6b77e5ef5' => 
  array (
    'criteria' => 
    array (
      'key' => 'imageplus.target_ratio',
    ),
    'object' => 
    array (
      'key' => 'imageplus.target_ratio',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'imageplus',
      'area' => 'imageplus',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '3f86722cc864d90011825b4b1b3bb379' => 
  array (
    'criteria' => 
    array (
      'key' => 'imageplus.thumbnail_width',
    ),
    'object' => 
    array (
      'key' => 'imageplus.thumbnail_width',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'imageplus',
      'area' => 'imageplus',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '8c788cb94c7027b5f48735d0be772280' => 
  array (
    'criteria' => 
    array (
      'key' => 'imageplus.allow_alt_tag',
    ),
    'object' => 
    array (
      'key' => 'imageplus.allow_alt_tag',
      'value' => '0',
      'xtype' => 'combo-boolean',
      'namespace' => 'imageplus',
      'area' => 'imageplus',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '66ace561e5fd5cb9702489ab7d326b1c' => 
  array (
    'criteria' => 
    array (
      'key' => 'imageplus.allow_caption',
    ),
    'object' => 
    array (
      'key' => 'imageplus.allow_caption',
      'value' => '0',
      'xtype' => 'combo-boolean',
      'namespace' => 'imageplus',
      'area' => 'imageplus',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '083884501ea2308fdf7865cd65dd0ed2' => 
  array (
    'criteria' => 
    array (
      'key' => 'imageplus.allow_credits',
    ),
    'object' => 
    array (
      'key' => 'imageplus.allow_credits',
      'value' => '0',
      'xtype' => 'combo-boolean',
      'namespace' => 'imageplus',
      'area' => 'imageplus',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '6b8a7308ee541be5b477ca0f68868ec5' => 
  array (
    'criteria' => 
    array (
      'key' => 'imageplus.select_config',
    ),
    'object' => 
    array (
      'key' => 'imageplus.select_config',
      'value' => '[]',
      'xtype' => 'sizes-ratio-grid',
      'namespace' => 'imageplus',
      'area' => 'imageplus',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '125694de21b8b888aecabaa95b521f8e' => 
  array (
    'criteria' => 
    array (
      'key' => 'imageplus.force_config',
    ),
    'object' => 
    array (
      'key' => 'imageplus.force_config',
      'value' => '0',
      'xtype' => 'combo-boolean',
      'namespace' => 'imageplus',
      'area' => 'imageplus',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '7c150192154a4c59deab386c24c52614' => 
  array (
    'criteria' => 
    array (
      'category' => 'ImagePlus',
    ),
    'object' => 
    array (
      'id' => 20,
      'parent' => 0,
      'category' => 'ImagePlus',
      'rank' => 0,
    ),
  ),
  '7d176d8363ee0544eaa743b78d4101a6' => 
  array (
    'criteria' => 
    array (
      'name' => 'ImagePlus.demo',
    ),
    'object' => 
    array (
      'id' => 51,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'ImagePlus.demo',
      'description' => 'Demo chunk for Image+ template variable output.',
      'editor_type' => 0,
      'category' => 20,
      'cache_type' => 0,
      'snippet' => '<div>
    <h3>Image+ Demo Chunk</h3>
    <table>
        <thead>
        <tr>
            <th>Description</th>
            <th>Current Value</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>[[%imageplus.placeholder.url? &namespace=`imageplus`]]</td>
            <td>[[+url]]</td>
        </tr>
        <tr>
            <td>[[%imageplus.placeholder.alt? &namespace=`imageplus`]]</td>
            <td>[[+alt]]</td>
        </tr>
        <tr>
            <td>[[%imageplus.placeholder.width? &namespace=`imageplus`]]</td>
            <td>[[+width]]</td>
        </tr>
        <tr>
            <td>[[%imageplus.placeholder.height? &namespace=`imageplus`]]</td>
            <td>[[+height]]</td>
        </tr>
        <tr>
            <td>[[%imageplus.placeholder.source.src? &namespace=`imageplus`]]</td>
            <td>[[+source.src]]</td>
        </tr>
        <tr>
            <td>[[%imageplus.placeholder.source.width? &namespace=`imageplus`]]</td>
            <td>[[+source.width]]</td>
        </tr>
        <tr>
            <td>[[%imageplus.placeholder.source.height? &namespace=`imageplus`]]</td>
            <td>[[+source.height]]</td>
        </tr>
        <tr>
            <td>[[%imageplus.placeholder.crop.width? &namespace=`imageplus`]]</td>
            <td>[[+crop.width]]</td>
        </tr>
        <tr>
            <td>[[%imageplus.placeholder.crop.height? &namespace=`imageplus`]]</td>
            <td>[[+crop.height]]</td>
        </tr>
        <tr>
            <td>[[%imageplus.placeholder.crop.x? &namespace=`imageplus`]]</td>
            <td>[[+crop.x]]</td>
        </tr>
        <tr>
            <td>[[%imageplus.placeholder.crop.y? &namespace=`imageplus`]]</td>
            <td>[[+crop.y]]</td>
        </tr>
        <tr>
            <td>[[%imageplus.placeholder.options? &namespace=`imageplus`]]</td>
            <td>[[+options]]</td>
        </tr>
        <tr>
            <td>[[%imageplus.placeholder.crop.options? &namespace=`imageplus`]]</td>
            <td>[[+crop.options]]</td>
        </tr>
        </tbody>
    </table>

    <h4>Default image output</h4>

    <p>
        <img src="[[+url]]" alt="[[+alt]]"/>
        [[+caption:notempty=`<p class="caption">[[+caption]]</p>`]]
        [[+credits:notempty=`<p class="credits">[[+credits]]</p>`]]
    </p>

    <h4>Responsive image output (different crops for different viewports)</h4>

    <p>
        <picture>
            <source media="(min-width: 36em)"
                    srcset="[[+source.src:pthumb=`w=1024`]] 1024w,
                        [[+source.src:pthumb=`w=640`]] 640w,
                        [[+source.src:pthumb=`w=320`]] 320w"
                    sizes="33.3vw"/>
            <source srcset="[[+source.src:pthumb=`[[+crop.options]]&w=640`]] 2x,
                        [[+source.src:pthumb=`[[+crop.options]]&w=320`]] 1x"/>
            <img src="[[+url]]" alt="[[+alt]]"/>
        </picture>
    </p>
    [[+caption:notempty=`<p class="caption">[[+caption]]</p>`]]
    [[+credits:notempty=`<p class="credits">[[+credits]]</p>`]]
</div>',
      'locked' => 0,
      'properties' => 'a:0:{}',
      'static' => 0,
      'static_file' => '',
      'content' => '<div>
    <h3>Image+ Demo Chunk</h3>
    <table>
        <thead>
        <tr>
            <th>Description</th>
            <th>Current Value</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>[[%imageplus.placeholder.url? &namespace=`imageplus`]]</td>
            <td>[[+url]]</td>
        </tr>
        <tr>
            <td>[[%imageplus.placeholder.alt? &namespace=`imageplus`]]</td>
            <td>[[+alt]]</td>
        </tr>
        <tr>
            <td>[[%imageplus.placeholder.width? &namespace=`imageplus`]]</td>
            <td>[[+width]]</td>
        </tr>
        <tr>
            <td>[[%imageplus.placeholder.height? &namespace=`imageplus`]]</td>
            <td>[[+height]]</td>
        </tr>
        <tr>
            <td>[[%imageplus.placeholder.source.src? &namespace=`imageplus`]]</td>
            <td>[[+source.src]]</td>
        </tr>
        <tr>
            <td>[[%imageplus.placeholder.source.width? &namespace=`imageplus`]]</td>
            <td>[[+source.width]]</td>
        </tr>
        <tr>
            <td>[[%imageplus.placeholder.source.height? &namespace=`imageplus`]]</td>
            <td>[[+source.height]]</td>
        </tr>
        <tr>
            <td>[[%imageplus.placeholder.crop.width? &namespace=`imageplus`]]</td>
            <td>[[+crop.width]]</td>
        </tr>
        <tr>
            <td>[[%imageplus.placeholder.crop.height? &namespace=`imageplus`]]</td>
            <td>[[+crop.height]]</td>
        </tr>
        <tr>
            <td>[[%imageplus.placeholder.crop.x? &namespace=`imageplus`]]</td>
            <td>[[+crop.x]]</td>
        </tr>
        <tr>
            <td>[[%imageplus.placeholder.crop.y? &namespace=`imageplus`]]</td>
            <td>[[+crop.y]]</td>
        </tr>
        <tr>
            <td>[[%imageplus.placeholder.options? &namespace=`imageplus`]]</td>
            <td>[[+options]]</td>
        </tr>
        <tr>
            <td>[[%imageplus.placeholder.crop.options? &namespace=`imageplus`]]</td>
            <td>[[+crop.options]]</td>
        </tr>
        </tbody>
    </table>

    <h4>Default image output</h4>

    <p>
        <img src="[[+url]]" alt="[[+alt]]"/>
        [[+caption:notempty=`<p class="caption">[[+caption]]</p>`]]
        [[+credits:notempty=`<p class="credits">[[+credits]]</p>`]]
    </p>

    <h4>Responsive image output (different crops for different viewports)</h4>

    <p>
        <picture>
            <source media="(min-width: 36em)"
                    srcset="[[+source.src:pthumb=`w=1024`]] 1024w,
                        [[+source.src:pthumb=`w=640`]] 640w,
                        [[+source.src:pthumb=`w=320`]] 320w"
                    sizes="33.3vw"/>
            <source srcset="[[+source.src:pthumb=`[[+crop.options]]&w=640`]] 2x,
                        [[+source.src:pthumb=`[[+crop.options]]&w=320`]] 1x"/>
            <img src="[[+url]]" alt="[[+alt]]"/>
        </picture>
    </p>
    [[+caption:notempty=`<p class="caption">[[+caption]]</p>`]]
    [[+credits:notempty=`<p class="credits">[[+credits]]</p>`]]
</div>',
    ),
  ),
  '0400b3d7a86897f3a4bada96d181a30a' => 
  array (
    'criteria' => 
    array (
      'name' => 'ImagePlus.image',
    ),
    'object' => 
    array (
      'id' => 52,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'ImagePlus.image',
      'description' => 'Demo chunk for Image+ snippet output.',
      'editor_type' => 0,
      'category' => 20,
      'cache_type' => 0,
      'snippet' => '<img src="[[+url]]" alt="[[+alt]]"/>
[[+caption:notempty=`<p class="caption">[[+caption]]</p>`]]
[[+credits:notempty=`<p class="credits">[[+credits]]</p>`]]
',
      'locked' => 0,
      'properties' => 'a:0:{}',
      'static' => 0,
      'static_file' => '',
      'content' => '<img src="[[+url]]" alt="[[+alt]]"/>
[[+caption:notempty=`<p class="caption">[[+caption]]</p>`]]
[[+credits:notempty=`<p class="credits">[[+credits]]</p>`]]
',
    ),
  ),
  'debf6b986d51cd7c51af4b1ae42a350a' => 
  array (
    'criteria' => 
    array (
      'name' => 'ImagePlus',
    ),
    'object' => 
    array (
      'id' => 53,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'ImagePlus',
      'description' => 'Snippet as alternative to Image+ TV Output Type',
      'editor_type' => 0,
      'category' => 20,
      'cache_type' => 0,
      'snippet' => '/**
 * ImagePlus Snippet as alternative to Image+ TV Output Type
 *
 * Copyright 2013-2015 by Alan Pich <alan.pich@gmail.com>
 * Copyright 2015-2017 by Thomas Jakobi <thomas.jakobi@partout.info>
 *
 * @package imageplus
 * @subpackage snippet
 *
 * @author Alan Pich <alan.pich@gmail.com>
 * @author Thomas Jakobi <thomas.jakobi@partout.info>
 * @copyright Alan Pich 2013-2015
 * @copyright Thomas Jakobi 2015-2017
 *
 * @var modX $modx
 * @var array $scriptProperties
 */

$corePath = $modx->getOption(\'imageplus.core_path\', null, $modx->getOption(\'core_path\') . \'components/imageplus/\');
$imageplus = $modx->getService(\'imageplus\', \'ImagePlus\', $corePath . \'model/imageplus/\', array(
    \'core_path\' => $corePath
));

$tvname = $modx->getOption(\'tvname\', $scriptProperties, \'\', true);
$docid = $modx->getOption(\'docid\', $scriptProperties, $modx->resource->get(\'id\'), true);
$type = $modx->getOption(\'type\', $scriptProperties, \'\', true);
$options = $modx->getOption(\'options\', $scriptProperties, \'\', true);
$tpl = $modx->getOption(\'tpl\', $scriptProperties, \'ImagePlus.image\', true);
$value = $modx->getOption(\'value\', $scriptProperties, \'\', true);
$debug = $modx->getOption(\'debug\', $scriptProperties, $imageplus->getOption(\'debug\'), false);

if ($value) {
    // Value is set by snippet property
    $data = json_decode($value);
    if (!$data) {
        if ($debug) {
            $modx->log(xPDO::LOG_LEVEL_ERROR, \'Unable to decode JSON in snippet property\', \'\', \'Image+\');
            return \'Unable to decode JSON in snippet property\';
        }
    }
    // No TV is used
    $tv = null;
} else {
    // Value is retreived from template variable
    $tv = $modx->getObject(\'modTemplateVar\', array(\'name\' => $tvname));
    if ($tv) {
        // Get the raw content of the TV
        $value = $tv->getValue($docid);
        $value = $tv->processBindings($value, $docid);
    } else {
        if ($debug) {
            $modx->log(xPDO::LOG_LEVEL_ERROR, "Template Variable \'{$tvname}\' not found.", \'\', \'Image+\');
            return "Template Variable \'{$tvname}\' not found.";
        }
    }
}

$output = \'\';
// Render output
switch ($type) {
    case \'check\':
        $data = json_decode($value);
        $output = ($data && $data->sourceImg->src) ? \'image\' : \'noimage\';
        break;
    case \'tpl\':
        $data = json_decode($value);
        $output = ($value) ? $imageplus->getImageURL($value, array_merge($scriptProperties, array(
            \'docid\' => $docid,
            \'phpThumbParams\' => $options,
            \'outputChunk\' => $tpl,
            \'caption\' => ($data && $data->caption) ? $data->caption : \'\',
            \'credits\' => ($data && $data->credits) ? $data->credits : \'\'
        )), $tv) : \'\';
        break;
    case \'thumb\':
    default:
        $output = ($value) ? $imageplus->getImageURL($value, array_merge($scriptProperties, array(
            \'docid\' => $docid,
            \'phpThumbParams\' => $options
        )), $tv) : \'\';
        break;
}
return $output;',
      'locked' => 0,
      'properties' => 'a:6:{s:6:"tvname";a:7:{s:4:"name";s:6:"tvname";s:4:"desc";s:26:"imageplus.imageplus.tvname";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:20:"imageplus:properties";s:4:"area";s:0:"";}s:5:"docid";a:7:{s:4:"name";s:5:"docid";s:4:"desc";s:25:"imageplus.imageplus.docid";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:20:"imageplus:properties";s:4:"area";s:0:"";}s:4:"type";a:7:{s:4:"name";s:4:"type";s:4:"desc";s:24:"imageplus.imageplus.type";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:20:"imageplus:properties";s:4:"area";s:0:"";}s:7:"options";a:7:{s:4:"name";s:7:"options";s:4:"desc";s:27:"imageplus.imageplus.options";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:20:"imageplus:properties";s:4:"area";s:0:"";}s:3:"tpl";a:7:{s:4:"name";s:3:"tpl";s:4:"desc";s:23:"imageplus.imageplus.tpl";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:15:"ImagePlus.image";s:7:"lexicon";s:20:"imageplus:properties";s:4:"area";s:0:"";}s:8:"fromJson";a:7:{s:4:"name";s:8:"fromJson";s:4:"desc";s:28:"imageplus.imageplus.fromJson";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:20:"imageplus:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * ImagePlus Snippet as alternative to Image+ TV Output Type
 *
 * Copyright 2013-2015 by Alan Pich <alan.pich@gmail.com>
 * Copyright 2015-2017 by Thomas Jakobi <thomas.jakobi@partout.info>
 *
 * @package imageplus
 * @subpackage snippet
 *
 * @author Alan Pich <alan.pich@gmail.com>
 * @author Thomas Jakobi <thomas.jakobi@partout.info>
 * @copyright Alan Pich 2013-2015
 * @copyright Thomas Jakobi 2015-2017
 *
 * @var modX $modx
 * @var array $scriptProperties
 */

$corePath = $modx->getOption(\'imageplus.core_path\', null, $modx->getOption(\'core_path\') . \'components/imageplus/\');
$imageplus = $modx->getService(\'imageplus\', \'ImagePlus\', $corePath . \'model/imageplus/\', array(
    \'core_path\' => $corePath
));

$tvname = $modx->getOption(\'tvname\', $scriptProperties, \'\', true);
$docid = $modx->getOption(\'docid\', $scriptProperties, $modx->resource->get(\'id\'), true);
$type = $modx->getOption(\'type\', $scriptProperties, \'\', true);
$options = $modx->getOption(\'options\', $scriptProperties, \'\', true);
$tpl = $modx->getOption(\'tpl\', $scriptProperties, \'ImagePlus.image\', true);
$value = $modx->getOption(\'value\', $scriptProperties, \'\', true);
$debug = $modx->getOption(\'debug\', $scriptProperties, $imageplus->getOption(\'debug\'), false);

if ($value) {
    // Value is set by snippet property
    $data = json_decode($value);
    if (!$data) {
        if ($debug) {
            $modx->log(xPDO::LOG_LEVEL_ERROR, \'Unable to decode JSON in snippet property\', \'\', \'Image+\');
            return \'Unable to decode JSON in snippet property\';
        }
    }
    // No TV is used
    $tv = null;
} else {
    // Value is retreived from template variable
    $tv = $modx->getObject(\'modTemplateVar\', array(\'name\' => $tvname));
    if ($tv) {
        // Get the raw content of the TV
        $value = $tv->getValue($docid);
        $value = $tv->processBindings($value, $docid);
    } else {
        if ($debug) {
            $modx->log(xPDO::LOG_LEVEL_ERROR, "Template Variable \'{$tvname}\' not found.", \'\', \'Image+\');
            return "Template Variable \'{$tvname}\' not found.";
        }
    }
}

$output = \'\';
// Render output
switch ($type) {
    case \'check\':
        $data = json_decode($value);
        $output = ($data && $data->sourceImg->src) ? \'image\' : \'noimage\';
        break;
    case \'tpl\':
        $data = json_decode($value);
        $output = ($value) ? $imageplus->getImageURL($value, array_merge($scriptProperties, array(
            \'docid\' => $docid,
            \'phpThumbParams\' => $options,
            \'outputChunk\' => $tpl,
            \'caption\' => ($data && $data->caption) ? $data->caption : \'\',
            \'credits\' => ($data && $data->credits) ? $data->credits : \'\'
        )), $tv) : \'\';
        break;
    case \'thumb\':
    default:
        $output = ($value) ? $imageplus->getImageURL($value, array_merge($scriptProperties, array(
            \'docid\' => $docid,
            \'phpThumbParams\' => $options
        )), $tv) : \'\';
        break;
}
return $output;',
    ),
  ),
  '7951f03f03eeeb4a34119fe331bcaab9' => 
  array (
    'criteria' => 
    array (
      'name' => 'ImagePlus',
    ),
    'object' => 
    array (
      'id' => 11,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'ImagePlus',
      'description' => 'Image+ runtime hooks - registers custom TV input & output types and includes javascripts on document edit pages.',
      'editor_type' => 0,
      'category' => 20,
      'cache_type' => 0,
      'plugincode' => '/**
 * Image+ runtime hooks
 * Registers custom TV input & output types and includes javascripts on document
 * edit pages so that the TV can be used from within other extras (i.e. MIGX,
 * Collections)
 *
 * Copyright 2013-2015 by Alan Pich <alan.pich@gmail.com>
 * Copyright 2015-2017 by Thomas Jakobi <thomas.jakobi@partout.info>
 *
 * @package imageplus
 * @subpackage plugin
 *
 * @author Alan Pich <alan.pich@gmail.com>
 * @author Thomas Jakobi <thomas.jakobi@partout.info>
 * @copyright Alan Pich 2013-2015
 * @copyright Thomas Jakobi 2015-2017
 *
 * @event OnManagerPageBeforeRender
 * @event OnTVInputRenderList
 * @event OnTVOutputRenderList
 * @event OnTVInputPropertiesList
 * @event OnTVOutputRenderPropertiesList
 * @event OnDocFormRender
 *
 * @var modX $modx
 */

$corePath = $modx->getOption(\'imageplus.core_path\', null, $modx->getOption(\'core_path\') . \'components/imageplus/\');
$imageplus = $modx->getService(\'imageplus\', \'ImagePlus\', $corePath . \'model/imageplus/\', array(
    \'core_path\' => $corePath
));

switch ($modx->event->name) {
    case \'OnManagerPageBeforeRender\':
        $modx->controller->addLexiconTopic(\'imageplus:default\');
        $imageplus->includeScriptAssets();
        break;
    case \'OnTVInputRenderList\':
        $modx->event->output($corePath . \'elements/tv/input/\');
        break;
    case \'OnTVOutputRenderList\':
        $modx->event->output($corePath . \'elements/tv/output/\');
        break;
    case \'OnTVInputPropertiesList\':
        $modx->event->output($corePath . \'elements/tv/input/options/\');
        break;
    case \'OnTVOutputRenderPropertiesList\':
        $modx->event->output($corePath . \'elements/tv/output/options/\');
        break;
    case \'OnDocFormRender\':
        $imageplus->includeScriptAssets();
        break;
};',
      'locked' => 0,
      'properties' => 'a:0:{}',
      'disabled' => 0,
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * Image+ runtime hooks
 * Registers custom TV input & output types and includes javascripts on document
 * edit pages so that the TV can be used from within other extras (i.e. MIGX,
 * Collections)
 *
 * Copyright 2013-2015 by Alan Pich <alan.pich@gmail.com>
 * Copyright 2015-2017 by Thomas Jakobi <thomas.jakobi@partout.info>
 *
 * @package imageplus
 * @subpackage plugin
 *
 * @author Alan Pich <alan.pich@gmail.com>
 * @author Thomas Jakobi <thomas.jakobi@partout.info>
 * @copyright Alan Pich 2013-2015
 * @copyright Thomas Jakobi 2015-2017
 *
 * @event OnManagerPageBeforeRender
 * @event OnTVInputRenderList
 * @event OnTVOutputRenderList
 * @event OnTVInputPropertiesList
 * @event OnTVOutputRenderPropertiesList
 * @event OnDocFormRender
 *
 * @var modX $modx
 */

$corePath = $modx->getOption(\'imageplus.core_path\', null, $modx->getOption(\'core_path\') . \'components/imageplus/\');
$imageplus = $modx->getService(\'imageplus\', \'ImagePlus\', $corePath . \'model/imageplus/\', array(
    \'core_path\' => $corePath
));

switch ($modx->event->name) {
    case \'OnManagerPageBeforeRender\':
        $modx->controller->addLexiconTopic(\'imageplus:default\');
        $imageplus->includeScriptAssets();
        break;
    case \'OnTVInputRenderList\':
        $modx->event->output($corePath . \'elements/tv/input/\');
        break;
    case \'OnTVOutputRenderList\':
        $modx->event->output($corePath . \'elements/tv/output/\');
        break;
    case \'OnTVInputPropertiesList\':
        $modx->event->output($corePath . \'elements/tv/input/options/\');
        break;
    case \'OnTVOutputRenderPropertiesList\':
        $modx->event->output($corePath . \'elements/tv/output/options/\');
        break;
    case \'OnDocFormRender\':
        $imageplus->includeScriptAssets();
        break;
};',
    ),
  ),
  'd14cf66b752f85af683132e4aca3aa28' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 11,
      'event' => 'OnManagerPageBeforeRender',
    ),
    'object' => 
    array (
      'pluginid' => 11,
      'event' => 'OnManagerPageBeforeRender',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '5d32fce7d33d66871478b8c6f349c033' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 11,
      'event' => 'OnTVInputPropertiesList',
    ),
    'object' => 
    array (
      'pluginid' => 11,
      'event' => 'OnTVInputPropertiesList',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '6cd8c993d6be214438749b5abb3379d7' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 11,
      'event' => 'OnTVInputRenderList',
    ),
    'object' => 
    array (
      'pluginid' => 11,
      'event' => 'OnTVInputRenderList',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  'd871281ae0b33a32afdbfdbb123341a4' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 11,
      'event' => 'OnTVOutputRenderList',
    ),
    'object' => 
    array (
      'pluginid' => 11,
      'event' => 'OnTVOutputRenderList',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '93c41728174c75b77ad54cde4f671ba3' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 11,
      'event' => 'OnTVOutputRenderPropertiesList',
    ),
    'object' => 
    array (
      'pluginid' => 11,
      'event' => 'OnTVOutputRenderPropertiesList',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '746233afb387264504383a8d3ae518df' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 11,
      'event' => 'OnDocFormRender',
    ),
    'object' => 
    array (
      'pluginid' => 11,
      'event' => 'OnDocFormRender',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
);