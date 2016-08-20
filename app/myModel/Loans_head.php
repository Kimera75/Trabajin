<?php


namespace SS\myModel;
use Illuminate\Database\Eloquent\Model;

class Loans_head extends Model
{
    //

    protected $fillable=['start_date_loan','end_date_loan','type_loan','state'];

    /*Relacion para agregar el usuario al prestamo*/
    public function user(){
        return $this->belongsTo('SS\myModel\User','user_id','id');
    }

    public function article_loans_head(){
      return $this->hasMany('SS\myModel\Loans_item','loans_heads_id','id');
    }


    /*Relacion para agregar articulos al detalle del prestamo*/
    public function articles(){
   		return $this->belongsToMany('SS\myModel\Article','article_loans_heads')->withPivot('state','quantity')->withTimestamps();
   	}

    /*Agregar encabezado a sancion correspondiente*/
    public function user_sanction(){
    	return $this->belongsToMany('SS\myModel\User','users_loans_heads_types_sanctions')->withPivot('types_sanction_id','release_date')->withTimestamps();
    }
        /*Agregar tipo de sancion a un encabezado de prestamo*/
    public function type_sanction(){
    	return $this->belongsToMany('SS\myModel\Types_sanction','users_loans_heads_types_sanctions')->withPivot('user_id','release_date')->withTimestamps();
    }
    
   


   

    


}
