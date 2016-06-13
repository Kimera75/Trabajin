<?php

namespace App\myModel;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */



    protected $fillable = ['id','name','career_id','num_sanctions', 'blocked_loans','active','role','e-mail'];

    public $incrementing=false;

    public function sanctions(){
        return $this->hasMany('Sanction');
    }

    public function career(){
        return $this->belongsTo(Career::class);
    }

    public function loans_heads(){
        return $this->hasMany(Loans_head::class);
    }
}
