<?php
/**
 * Category resolver  for flexibility6 extra.
 * Sets Category Parent
 *
 * Copyright 2017 by Menno Pietersen info@mpthemes.com
 * Created on 02-02-2017
 *
 * flexibility6 is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * flexibility6 is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * flexibility6; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 * @package flexibility6
 * @subpackage build
 */

/* @var $object xPDOObject */
/* @var $modx modX */
/* @var $parentObj modResource */
/* @var $templateObj modTemplate */

/* @var array $options */

if (!function_exists('checkFields')) {
    function checkFields($required, $objectFields) {
        global $modx;
        $fields = explode(',', $required);
        foreach ($fields as $field) {
            if (!isset($objectFields[$field])) {
                $modx->log(modX::LOG_LEVEL_ERROR, '[Category Resolver] Missing field: ' . $field);
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

            $intersects = array (
                'flexibility6' =>  array (
                  'category' => 'flexibility6',
                  'parent' => '0',
                ),
                'Contact' =>  array (
                  'category' => 'Contact',
                  'parent' => 'flexibility6',
                ),
                'Navigation' =>  array (
                  'category' => 'Navigation',
                  'parent' => 'flexibility6',
                ),
                'Sections' =>  array (
                  'category' => 'Sections',
                  'parent' => 'flexibility6',
                ),
                'Slider' =>  array (
                  'category' => 'Slider',
                  'parent' => 'flexibility6',
                ),
            );

            if (is_array($intersects)) {
                foreach ($intersects as $k => $fields) {
                    /* make sure we have all fields */
                    if (!checkFields('category,parent', $fields)) {
                        continue;
                    }
                    $categoryObj = $modx->getObject('modCategory', array('category' => $fields['category']));
                    if (!$categoryObj) {
                        continue;
                    }
                    $parentObj = $modx->getObject('modCategory', array('category' => $fields['parent']));
                        if ($parentObj) {
                            $categoryObj->set('parent', $parentObj->get('id'));
                        }
                    $categoryObj->save();
                }
            }
            break;

        case xPDOTransport::ACTION_UNINSTALL:
            break;
    }
}

return true;