<?php namespace Arteriaweb\Foodbug\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Sizes Back-end Controller
 */
class Sizes extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Arteriaweb.Foodbug', 'foodbug', 'sizes');
    }
}
