<?php
/**
 * +--------------------------------------------------------------------------+
 * | Copyright (c) 2008-2016 AddThis, LLC                                     |
 * +--------------------------------------------------------------------------+
 * | This program is free software; you can redistribute it and/or modify     |
 * | it under the terms of the GNU General Public License as published by     |
 * | the Free Software Foundation; either version 2 of the License, or        |
 * | (at your option) any later version.                                      |
 * |                                                                          |
 * | This program is distributed in the hope that it will be useful,          |
 * | but WITHOUT ANY WARRANTY; without even the implied warranty of           |
 * | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            |
 * | GNU General Public License for more details.                             |
 * |                                                                          |
 * | You should have received a copy of the GNU General Public License        |
 * | along with this program; if not, write to the Free Software              |
 * | Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA |
 * +--------------------------------------------------------------------------+
 */
require_once 'AddThisRecommendedContentToolParent.php';

if (!class_exists('AddThisRecommendedContentFooterTool')) {
    /**
     * A class with various special configs and functionality for
     * AddThis Recommended Content Footer tools
     *
     * @category   RecommendedContent
     * @package    AddThisWordPress
     * @subpackage Tools
     * @author     AddThis <help@addthis.com>
     * @license    GNU General Public License, version 2
     * @link       http://addthis.com AddThis website
     */
    class AddThisRecommendedContentFooterTool extends AddThisRecommendedContentToolParent
    {
        public $prettyName = 'Recommended Content Footer';

        public $edition = 'basic';
        public $anonymousSupport = true;
        public $inline = false;
        public $settingsSubVariableName = 'smlre';
        public $layersApiProductName = 'recommended';
        protected $defaultConfigs = array(
            'enabled'        => false,
            'title'          => 'Recommended for you',
            'theme'          => 'light',
        );


        /**
         * Creates tool specific settings for the JavaScript variable
         * addthis_layers, used to bootstrap layers
         *
         * @param array $configs unused - here because some other tools use it
         *
         * @return array an associative array
         */
        public function getAddThisLayers($configs = array())
        {
            $configs = $this->getToolConfigs();

            if (!$this->isEnabled()) {
                return array();
            }

            $layers = array(
                'title'      => $configs['title'],
                'theme'      => $configs['theme'],
            );

            $result = array($this->layersApiProductName => $layers);
            return $result;
        }

        /**
         * This must be public as it's used in the feature object with this tool
         *
         * This takes form input for a  tool sub settings variable, manipulates
         * it, and returns the variables that should be saved to the database.
         *
         * @param array   $input             An associative array of values
         * input for this tools' settings
         * @param boolean $addDefaultConfigs Whether to populate in default
         * values for missing fields
         *
         * @return array A cleaned up associative array of settings specific to
         *               this feature.
         */
        public function sanitizeSettings($input, $addDefaultConfigs = true)
        {
            $output = array();

            if (is_array($input)) {
                foreach ($input as $field => $value) {
                    switch ($field) {
                        case 'enabled':
                            $output[$field] = (boolean)$value;
                            break;
                        case 'title':
                            // same as next
                        case 'theme':
                            $output[$field] = sanitize_text_field($value);
                            break;
                    }
                }
            }

            if ($addDefaultConfigs) {
                $output = $this->addDefaultConfigs($output);
            }

            return $output;
        }
    }
}