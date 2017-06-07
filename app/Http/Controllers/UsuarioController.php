<?php

namespace App\Http\Controllers;
 
use App\Usuario;
//use App\Subcategoria;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 
class UsuarioController extends Controller{
    
    public function subcategorias()
    {
        return $this->hasMany('App\Subcategoria');
    }
    
    public function prueba()
    {
        return "PRUEBASS";
    }
    

	/**
	 * @api {get} /usuario
	 * @apiName getAllUsuario
	 * @apiDescription Get All Usuario
	 * @apiGroup Usuario
	 * @apiExample {curl} Example usage:
	 *                    curl -i http://localhost:8083/api/sistema/usuario
	*/    
    public function getAllUsuario(){
 
        try{
            $entidad  = Usuario::all();        
            $response = [
                         'code' => 0,
                         'status' => 'success',
                         'data' => $entidad,
                         'message' => 'Consulta realizada correctamente.'
                        ];
                        
        }catch(\Exception $ex){
            
            $response = [
                     'code' => -1,
                     'status' => 'error',
                     'data' => '',
                     'message' => 'Ha ocurrido un error al realizar la consulta.'
            ];

        }        

        return response()->json($response);
    }
    

	/**
	 * @api {get} /usuario/getById/:id
	 * @apiName getById
	 * @apiDescription Get Usuario By Id
	 * @apiGroup Usuario
	 * @apiExample {curl} Example usage:
	 *                    curl -i http://localhost:8083/api/sistema/usuario/getById/13745275
	*/
    public function getById( $param1 ){
   
        $campoBD = 'id_usuario';

        try{

            $entidad = Usuario::find( $param1 );
            $entidad = Usuario::where( $campoBD , $param1)->first();

            if( $entidad != null ){

                $response = [
                     'code' => 0,
                     'status' => 'success',
                     'data' => $entidad,
                     'message' => 'Consulta realizada correctamente.'
                ];

            }else if( $entidad == null ){

                $response = [
                     'code' => 1,
                     'status' => 'success',
                     'data' => '',
                     'message' => 'La Consulta no ha retornado registros.'
                ];
                
            }
            
        }catch(\Exception $ex){

            $response = [
                     'code' => -1,
                     'status' => 'error',
                     'data' => '',
                     'message' => 'Ha ocurrido un error al realizar la consulta.'
            ];

        }

        return response()->json($response);
    }


	/**
	 * @api {get} /usuario/param1/137452758/param2/123456
	 * @apiName loginUsuario
	 * @apiDescription Get Usuario Login
	 * @apiGroup Usuario
	 * @apiExample {curl} Example usage:
	 *                    curl -i http://localhost:8083/api/sistema/usuario/loginUsuario/param1/137452758/param2/123456
	*/
    public function loginUsuario( $param1, $param2 ){

        $campoBD1 = 'rut_completo_usuario';
        $campoBD2 = 'password_usuario';

        try{
       	    $entidad = Usuario::where( $campoBD1 , $param1)
                                ->where( $campoBD2 , $param2)
                                ->get();

           if( $entidad->count() ){

                $response = [
                     'code' => 0,
                     'status' => 'success',
                     'data' => $entidad,
                     'message' => 'Consulta realizada correctamente.'
                ];

            }else{

                $response = [
                     'code' => 1,
                     'status' => 'success',
                     'data' => '',
                     'message' => 'La Consulta no ha retornado registros.'
                ];

            }

        }catch(\Exception $ex){

            $response = [
                     'code' => -1,
                     'status' => 'error',
                     'data' => '',
                     'message' => 'Ha ocurrido un error al realizar la consulta.'
            ];

        }

        return response()->json($response);
    }


	/**
	 * @api {delete} /usuario/:id
	 * @apiName deleteUsuario
	 * @apiDescription Delete Usuario by Id
	 * @apiGroup Usuario
	 * @apiExample {curl} Example usage:
	 *                    curl -X DELETE http://localhost:8083/api/sistema/usuario/13745275
	*/
    public function deleteUsuario( $id ){

        try{

            $entidad = Usuario::find( $id );
            $entidad = Usuario::where('id_usuario', $id)->first();

            if( $entidad ){

                $status = $entidad->delete();
                $response = [
                                'code' => 0,
                                'status' => 'success',
                                'data' => $entidad,
                                'message' => 'El registro ha sido eliminado correctamente.'
                ];
                
            }

        }catch(\Exception $ex){

            $response = [
                        'code' => -1,
                        'status' => 'error',
                        'data' => '',
                        'message' => 'Ha ocurrido un error al realizar la consulta.'
            ];

        }

        return response()->json( $response );
    }


	/**
	 * @api {post} /usuario
	 * @apiName createUsuario
	 * @apiDescription Create Usuario
	 * @apiGroup Usuario
	 * @apiExample {curl} Example usage:
	 *                    curl -i -X POST -H "Content-Type:application/json" http://localhost:8083/api/sistema/usuario -d '{"id_usuario":"13745275", "id_tipo_cliente":1, "rut_completo_usuario":"137452758", "password_usuario":"123456", "digito_rut_usuario":"8", "nombre_usuario":"carolina andrea", "apellido_paterno_usuario":"cortes", "apellido_materno_usuario":"sierra", "ciudad_usuario":"santiago", "comuna_usuario":"santiago", "direccion_usuario":"fray", "nro_direccion":190, "celular_usuario":"94298318", "email_usuario":"candrea@gmail.com", "whatsap_usuario":"56912345678", "tipo_admin_usuario":1, "vigencia_usuario":1}'
	*/
    public function createUsuario(Request $request){
        
        try
        {   
            $data = Usuario::create($request->all());
          
            $response = [
                        'code' => 0,
                        'status' => 'success',
                        'data' => $data,
                        'message' => 'El registro ha sido insertado correctamente.'
            ];
            
        }catch(\Exception $ex)
        {
            $response = [
                        'code' => -1,
                        'status' => 'error',
                        'data' => '',
                        'message' => 'Ha ocurrido un error al realizar la consulta.'
            ];
        }
        
        return response()->json( $response );
    }


	/**
	 * @api {put} /usuario/:id
	 * @apiName updateUsuario
	 * @apiDescription Update Usuario
	 * @apiGroup Usuario
	 * @apiExample {curl} Example usage:
	 *                    curl -H "Content-Type:application/json" -X PUT "Content-Type:application/json" http://localhost:8083/api/sistema/usuario/13745275 -d '{"nombre_usuario":"aracelli diaz"}'
	*/
    public function updateUsuario(Request $request, $id){

        try{
            $entidad = Usuario::find($id);
            $entidad = Usuario::where('id_usuario', $id)->first();
            $entidad->id_tipo_cliente = $request->input('id_tipo_cliente');
            $entidad->rut_completo_usuario = $request->input('rut_completo_usuario');
            $entidad->password_usuario = $request->input('password_usuario');
            $entidad->digito_rut_usuario = $request->input('digito_rut_usuario');
            $entidad->nombre_usuario = $request->input('nombre_usuario');
            $entidad->apellido_paterno_usuario = $request->input('apellido_paterno_usuario');
            $entidad->apellido_materno_usuario = $request->input('apellido_materno_usuario');
            $entidad->ciudad_usuario = $request->input('ciudad_usuario');
            $entidad->comuna_usuario = $request->input('comuna_usuario');
            $entidad->direccion_usuario = $request->input('direccion_usuario');
            $entidad->nro_direccion = $request->input('nro_direccion');
            $entidad->celular_usuario = $request->input('celular_usuario');
            $entidad->email_usuario = $request->input('email_usuario');
            $entidad->whatsap_usuario = $request->input('whatsap_usuario');
            $entidad->tipo_admin_usuario = $request->input('tipo_admin_usuario');
            $entidad->vigencia_usuario = $request->input('vigencia_usuario');
            $status = $entidad->save();
            
            if( $status == true ){
                        
                $response = [
                            'code' => 0,
                            'status' => 'success',
                            'data' => $entidad,
                            'message' => 'El registro ha sido actualizado correctamente.'
                ];

            }else{
           
                $response = [
                            'code' => 1,
                            'status' => 'success',
                            'data' => '',
                            'message' => 'El registro no ha sido actualizado.'
                ];
            }

        }catch(\Exception $ex){

            $response = [
                        'code' => -1,
                        'status' => 'error',
                        'data' => '',
                        'message' => 'Ha ocurrido un error al realizar la consulta.'
            ];
        }
        
        //var_dump( $response );
        return response()->json( $response );
	}
    
}
?>
