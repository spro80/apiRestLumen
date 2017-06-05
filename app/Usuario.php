<?php namespace app;
 
use Illuminate\Database\Eloquent\Model;
 
class Usuario extends Model
{ 
 	protected $table = 'usuario';
	protected $primaryKey = 'id_usuario';
	
	protected $fillable = [ 'id_usuario' , 'id_tipo_cliente', 'rut_completo_usuario', 'password_usuario', 'digito_rut_usuario', 'nombre_usuario', 'apellido_paterno_usuario', 'apellido_materno_usuario', 'ciudad_usuario', 'comuna_usuario', 'direccion_usuario', 'nro_direccion', 'celular_usuario', 'email_usuario', 'whatsap_usuario', 'tipo_admin_usuario', 'vigencia_usuario' ];
	
 	public $timestamps = false;
}
?>
