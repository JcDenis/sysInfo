<?php
/**
 * @brief sysInfo, a plugin for Dotclear 2
 *
 * @package Dotclear
 * @subpackage Plugins
 *
 * @author Franck Paul
 *
 * @copyright Franck Paul carnet.franck.paul@gmail.com
 * @copyright GPL-2.0 https://www.gnu.org/licenses/gpl-2.0.html
 */

if (!defined('DC_RC_PATH')) {return;}

$this->registerModule(
    "sysInfo",            // Name
    "System Information", // Description
    "Franck Paul",        // Author
    '1.9',                // Version
    [
        'requires' => [['core', '2.13']],                           // Dependencies
        'type'     => 'plugin',                                     // Type
        'priority' => 99999999999,                                  // Priority
        'details'  => 'https://open-time.net/docs/plugins/sysInfo' // Details

    ]
);
