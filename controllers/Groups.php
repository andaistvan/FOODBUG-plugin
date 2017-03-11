<?php namespace Arteriaweb\Foodbug\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Groups Back-end Controller
 */
class Groups extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
        'Backend.Behaviors.RelationController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';
    public $listConfig = 'relation_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Arteriaweb.Foodbug', 'foodbug', 'groups');
    }
}
