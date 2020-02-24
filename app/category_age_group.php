<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category_age_group extends Model
{
    /**
     * The table primary key.
     *
     * @var int
     */
    protected $primaryKey = ['category_id','age_group_id'];/**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $guarded = [];/**
    * Make false default (created_at,updated_at).
    *
    * @var boolean
    */
    public $timestamps = false;/**
    * The table associated with the model.
    *
    * @var string
    */
    protected $table = 'category_age_groups';

    // public function categories(){
    //     return $this->hasMany('App\category','category_id','id');
    // }

    public function ageGroup(){
        return $this->belongsTo('App\age_group','age_group_id','id');
        // foreach($test as $data){
        //     $data->ageGroup
        // }
    }
}
