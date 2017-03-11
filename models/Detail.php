<?php namespace Arteriaweb\Foodbug\Models;

use Model;

/**
 * Detail Model
 */
class Detail extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'arteriaweb_foodbug_details';

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
