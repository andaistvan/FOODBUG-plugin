<?php namespace Arteriaweb\Foodbug\Models;

use Model;

/**
 * Size Model
 */
class Size extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'arteriaweb_foodbug_sizes';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}
