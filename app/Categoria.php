<?php namespace app;
 
use Illuminate\Database\Eloquent\Model;
 
class Categoria extends Model
{ 
 	protected $table = 'categoria';
	protected $primaryKey = 'id_categoria';
	
	protected $fillable = ['id_categoria', 'des_categoria', 'vigencia_categoria'];
	
 	public $timestamps = false;
}
?>
