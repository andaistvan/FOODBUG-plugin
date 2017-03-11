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
            'description' => 'No description provided yet...',
            'author'      => 'Arteriaweb',
            'icon'        => 'icon-leaf'
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
        return []; // Remove this line to activate

        return [
            'foodbug' => [
                'label'       => 'Foodbug',
                'url'         => Backend::url('arteriaweb/foodbug/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['arteriaweb.foodbug.*'],
                'order'       => 500,
            ],
        ];
    }
}
