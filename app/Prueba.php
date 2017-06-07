<?php namespace app;
 
use Illuminate\Database\Eloquent\Model;
 
class Prueba extends Model
{ 
 	protected $fillable = ['id_prueba', 'des_prueba', 'vigencia_prueba'];
 	
 	public $timestamps = false;
}
?>
