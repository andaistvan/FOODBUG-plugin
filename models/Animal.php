<?php namespace Arteriaweb\Foodbug\Models;

use Model;

/**
 * Animal Model
 */
class Animal extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'arteriaweb_foodbug_animals';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    public $timestamps = false;
    /**
     * @var array Relations
     */
    public $hasOne = [
        'groups' => 'Arteriaweb\Foodbug\Models\Group'
    ];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [
        'details' => [
            'Arteriaweb\Foodbug\Models\Detail',
            'table' => 'arteriaweb_foodbug_animals_details'
            // 'order' => ''
        ]
    ];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [
        'featimage' => 'System\Models\File'
    ];
    public $attachMany = [
        'feat_gallery' => 'System\Models\File'
    ];
}
