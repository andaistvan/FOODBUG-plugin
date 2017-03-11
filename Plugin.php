<?php namespace Arteriaweb\Foodbug;

use Backend;
use System\Classes\PluginBase;

/**
 * Foodbug Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Foodbug',
            'description' => 'eledelallat.hu plugin',
            'author'      => 'Arteriaweb',
            'icon'        => 'icon-dollar'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Arteriaweb\Foodbug\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'arteriaweb.foodbug.some_permission' => [
                'tab' => 'Foodbug',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        // return []; // Remove this line to activate

        return [
            'foodbug' => [
                'label'       => 'Foodbug',
                'url'         => Backend::url('arteriaweb/foodbug/animals'),
                'icon'        => 'icon-dollar',
                'permissions' => ['arteriaweb.foodbug.*'],
                'order'       => 500,
                'sideMenu' => [
                    'deatils' => [
                        'label' => 'Details',
                        'icon' => 'icon-bug',
                        'url' => Backend::url('arteriaweb/foodbug/details')
                    ],
                    'groups' => [
                        'label' => 'MAIN Groups',
                        'icon' => 'icon-certificate',
                        'url' => Backend::url('arteriaweb/foodbug/groups')
                    ],
                    'packagings' => [
                        'label' => 'Packagings',
                        'icon' => 'icon-list-ol',
                        'url' => Backend::url('arteriaweb/foodbug/packagings')
                    ],
                    'sizes' => [
                        'label' => 'Sizes',
                        'icon' => 'icon-list-ul',
                        'url' => Backend::url('arteriaweb/foodbug/sizes')
                    ],
                    'units' => [
                        'label' => 'Units',
                        'icon' => 'icon-barcode',
                        'url' => Backend::url('arteriaweb/foodbug/units')
                    ],
                ]
            ],
        ];
    }
}
