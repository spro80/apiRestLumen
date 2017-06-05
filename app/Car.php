<?php namespace app;
 
use Illuminate\Database\Eloquent\Model;
 
class Car extends Model
{ 
 	protected $fillable = ['make', 'model', 'year'];
 	
 	public $timestamps = false;
}
?>
