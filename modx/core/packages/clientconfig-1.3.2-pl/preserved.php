<?php return array (
  'fa4bef21bc6571318bed952868323305' => 
  array (
    'criteria' => 
    array (
      'name' => 'clientconfig',
    ),
    'object' => 
    array (
      'name' => 'clientconfig',
      'path' => '{core_path}components/clientconfig/',
      'assets_path' => '',
    ),
  ),
  '2245e2b14cd40cec2ebac81dbb41fc54' => 
  array (
    'criteria' => 
    array (
      'key' => 'clientconfig.admin_groups',
    ),
    'object' => 
    array (
      'key' => 'clientconfig.admin_groups',
      'value' => 'Administrator',
      'xtype' => 'textfield',
      'namespace' => 'clientconfig',
      'area' => 'Default',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '4339ae0df4b40f85a95f70d2471d0bf6' => 
  array (
    'criteria' => 
    array (
      'key' => 'clientconfig.clear_cache',
    ),
    'object' => 
    array (
      'key' => 'clientconfig.clear_cache',
      'value' => '1',
      'xtype' => 'combo-boolean',
      'namespace' => 'clientconfig',
      'area' => 'Default',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '7af1aa14e919b1afdef247fc3700176b' => 
  array (
    'criteria' => 
    array (
      'key' => 'clientconfig.vertical_tabs',
    ),
    'object' => 
    array (
      'key' => 'clientconfig.vertical_tabs',
      'value' => '',
      'xtype' => 'combo-boolean',
      'namespace' => 'clientconfig',
      'area' => 'Default',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'c6d0fe48b6c180d79562e2638d2c87a4' => 
  array (
    'criteria' => 
    array (
      'key' => 'clientconfig.google_fonts_api_key',
    ),
    'object' => 
    array (
      'key' => 'clientconfig.google_fonts_api_key',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'clientconfig',
      'area' => 'Default',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '524b2685fca3c17bdb3d52a1b1a05b35' => 
  array (
    'criteria' => 
    array (
      'name' => 'ClientConfig',
    ),
    'object' => 
    array (
      'id' => 9,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'ClientConfig',
      'description' => 'Sets system settings from the Client Config CMP.',
      'editor_type' => 0,
      'category' => 0,
      'cache_type' => 0,
      'plugincode' => '/**
 * ClientConfig
 *
 * Copyright 2011 by Mark Hamstra <hello@markhamstra.com>
 *
 * ClientConfig is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * ClientConfig is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * ClientConfig; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package clientconfig
 *
 * @var modX $modx
 * @var int $id
 * @var string $mode
 * @var modResource $resource
 * @var modTemplate $template
 * @var modTemplateVar $tv
 * @var modChunk $chunk
 * @var modSnippet $snippet
 * @var modPlugin $plugin
*/

$eventName = $modx->event->name;

switch($eventName) {
    case \'OnHandleRequest\':
        /* Grab the class */
        $path = $modx->getOption(\'clientconfig.core_path\', null, $modx->getOption(\'core_path\') . \'components/clientconfig/\');
        $path .= \'model/clientconfig/\';
        $clientConfig = $modx->getService(\'clientconfig\',\'ClientConfig\', $path);

        /* If we got the class (gotta be careful of failed migrations), grab settings and go! */
        if ($clientConfig instanceof ClientConfig) {
            $settings = $clientConfig->getSettings();

            /* Make settings available as [[++tags]] */
            $modx->setPlaceholders($settings, \'+\');

            /* Make settings available for $modx->getOption() */
            foreach ($settings as $key => $value) {
                $modx->setOption($key, $value);
            }
        }
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
 * ClientConfig
 *
 * Copyright 2011 by Mark Hamstra <hello@markhamstra.com>
 *
 * ClientConfig is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * ClientConfig is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * ClientConfig; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package clientconfig
 *
 * @var modX $modx
 * @var int $id
 * @var string $mode
 * @var modResource $resource
 * @var modTemplate $template
 * @var modTemplateVar $tv
 * @var modChunk $chunk
 * @var modSnippet $snippet
 * @var modPlugin $plugin
*/

$eventName = $modx->event->name;

switch($eventName) {
    case \'OnHandleRequest\':
        /* Grab the class */
        $path = $modx->getOption(\'clientconfig.core_path\', null, $modx->getOption(\'core_path\') . \'components/clientconfig/\');
        $path .= \'model/clientconfig/\';
        $clientConfig = $modx->getService(\'clientconfig\',\'ClientConfig\', $path);

        /* If we got the class (gotta be careful of failed migrations), grab settings and go! */
        if ($clientConfig instanceof ClientConfig) {
            $settings = $clientConfig->getSettings();

            /* Make settings available as [[++tags]] */
            $modx->setPlaceholders($settings, \'+\');

            /* Make settings available for $modx->getOption() */
            foreach ($settings as $key => $value) {
                $modx->setOption($key, $value);
            }
        }
        break;
}

return;',
    ),
  ),
  '26133e6a8eee051547c0c3540c68e95c' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 9,
      'event' => 'OnHandleRequest',
    ),
    'object' => 
    array (
      'pluginid' => 9,
      'event' => 'OnHandleRequest',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  'e2bc73c7c6b4b1cff7b5288ea9472d2a' => 
  array (
    'criteria' => 
    array (
      'namespace' => 'clientconfig',
      'controller' => 'index',
    ),
    'object' => 
    array (
      'id' => 2,
      'namespace' => 'clientconfig',
      'controller' => 'index',
      'haslayout' => 1,
      'lang_topics' => 'clientconfig:default',
      'assets' => '',
      'help_url' => '',
    ),
  ),
  '7fdcadd8eb6b05e97defacdd569e8872' => 
  array (
    'criteria' => 
    array (
      'text' => 'clientconfig',
    ),
    'object' => 
    array (
      'text' => 'clientconfig',
      'parent' => 'components',
      'action' => '2',
      'description' => 'clientconfig.desc',
      'icon' => 'images/icons/plugin.gif',
      'menuindex' => 0,
      'params' => '',
      'handler' => '',
      'permissions' => '',
      'namespace' => 'core',
    ),
  ),
  'a0b357922d935150cf3c6804f4cabe6c' => 
  array (
    'criteria' => 
    array (
      'category' => 'ClientConfig',
    ),
    'object' => 
    array (
      'id' => 11,
      'parent' => 0,
      'category' => 'ClientConfig',
      'rank' => 0,
    ),
  ),
);