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

require_once 'AddThisFeature.php';
require_once 'AddThisRecommendedContentHorizontalWidget.php';
require_once 'AddThisRecommendedContentHorizontalTool.php';
require_once 'AddThisRecommendedContentVerticalWidget.php';
require_once 'AddThisRecommendedContentVerticalTool.php';
require_once 'AddThisRecommendedContentDrawerTool.php';
require_once 'AddThisRecommendedContentFooterTool.php';
require_once 'AddThisRecommendedContentJumboFooterTool.php';
require_once 'AddThisRecommendedContentToasterTool.php';
require_once 'AddThisRecommendedContentWhatsNextMobileTool.php';
require_once 'AddThisRecommendedContentWhatsNextTool.php';

if (!class_exists('AddThisRecommendedContentFeature')) {
    /**
     * Class for adding AddThis recommended content tools to WordPress
     *
     * @category   RecommendedContent
     * @package    AddThisWordPress
     * @subpackage Features
     * @author     AddThis <help@addthis.com>
     * @license    GNU General Public License, version 2
     * @link       http://addthis.com AddThis website
     */
    class AddThisRecommendedContentFeature extends AddThisFeature
    {
        //addthis_follow_settings, widget_addthis-follow-widget, addthis_settings
        protected $oldConfigVariableName = 'addthis_settings';
        protected $settingsVariableName = 'addthis_recommended_content_settings';
        protected $settingsPageId = 'addthis_recommended_content';
        protected $name = 'Related Content';
        protected $RecommendedContentHorizontalToolObject = null;
        protected $RecommendedContentVerticalToolObject = null;
        protected $RecommendedContentDrawerToolObject = null;
        protected $RecommendedContentFooterToolObject = null;
        protected $RecommendedContentJumboFooterToolObject = null;
        protected $RecommendedContentToasterToolObject = null;
        protected $RecommendedContentWhatsNextMobileToolObject = null;
        protected $RecommendedContentWhatsNextToolObject = null;

        protected $filterPriority = 2;
        protected $filterNamePrefix = 'addthis_recommended_content_';
        protected $enableBelowContent = true;

        // a list of all settings fields used for this feature that aren't tool
        // specific
        protected $settingsFields = array(
            'quick_tag',
            'startUpgradeAt',
        );

        // used for temporary compatability with the Sharing Buttons plugin
        public $globalLayersJsonField = 'addthis_layers_recommended_json';
        public $globalEnabledField = 'recommended_content_feature_enabled';

        // require the files with the tool and widget classes at the top of this
        // file for each tool
        protected $tools = array(
            'RecommendedContentHorizontal',
            'RecommendedContentVertical',
            'RecommendedContentDrawer',
            'RecommendedContentFooter',
            'RecommendedContentJumboFooter',
            'RecommendedContentToaster',
            'RecommendedContentWhatsNextMobile',
            'RecommendedContentWhatsNext',
        );

        protected $quickTagId = 'addthis_recommend';
        /**
         * Review https://codex.wordpress.org/Quicktags_API for access keys used
         * by WordPress
         */
        protected $quickTagAccessKey = 'z';

        /**
         * Builds the class used for recommended content below content on posts.
         *
         * @param string $location Is this for a sharing button above or below
         * content/excerpts?
         * @param array  $track    Optional. Used by reference. If the
         * filter changes the value in any way the filter's name will be pushed
         *
         * @return string a class
         */
        public function getClassForTypeAndLocation(
            $location = 'above',
            &$track = false
        ) {
            $pageTypeClean = AddThisTool::currentTemplateType();
            if ($pageTypeClean == 'posts') {
                $toolClass = 'at-below-post-recommended';
            } else {
                $toolClass = false;
            }

            $toolClass = $this->applyToolClassFilters($toolClass, $location, $track);
            return $toolClass;
        }
    }
}