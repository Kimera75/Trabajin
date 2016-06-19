<?php

namespace SS\myModel;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */



    protected $fillable = ['id','name','career_id','num_sanctions', 'locked_loans','active','role','e-mail'];

    public $incrementing=false;
    
    /*Agregar usuarios a una carrera*/
    public function career(){
        return $this->belongsTo(Career::class);
    }
    /*Agregar usuario al encabezado del prestamo*/
    public function loans_head(){
        return $this->hasMany('SS\myModel\Loans_head');


    }

    /*Agregar sancion a usuario*/
    public function type_sanction(){
        return $this->belongsToMany('SS\myModel\Types_sanction','users_loans_heads_types_sanctions')->withPivot('loans_head_id','release_day')->withTimestamps();
    }

   
    /*Agregar encabezados de prestamos a usuario*/
    public function loans_heads(){
        return $this->belongsToMany('SS\myModel\Loans_head','users_loans_heads_types_sanctions')->withPivot('types_sanction_id','release_day')->withTimestamps();
    }


}
