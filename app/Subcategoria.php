<?php namespace app;
 
use Illuminate\Database\Eloquent\Model;
 
class Subcategoria extends Model
{ 
 	protected $table = 'subcategoria';
	protected $primaryKey = 'id_subcategoria';
	
	protected $fillable = ['id_subcategoria', 'id_categoria', 'des_subcategoria', 'vigencia_subcategoria'];
	
 	public $timestamps = false;
}
?>
