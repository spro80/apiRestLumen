<?php

namespace App\Http\Controllers;
 
use App\Categoria;
use App\Subcategoria;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 
class CategoriaController extends Controller{
    
    public function subcategorias()
    {
        return $this->hasMany('App\Subcategoria');
        //return $this->hasMany('App\Subcategoria');
    }
    
    public function prueba()
    {
		//$entidad  = Subcategoria::all();
        return "PRUEBASS";
        
    }
    

    public function getAllCategoria(){
 
        try{
            $entidad  = Categoria::all();        
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

    public function getByParameter( $param1 ){
   
        $campoBD = 'id_categoria';

        try{

            $entidad = Categoria::find( $param1 );
            $entidad = Categoria::where( $campoBD , $param1)->first();

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

    public function getByTwoParameters( $param1, $param2 ){

        $campoBD1 = 'des_categoria';
        $campoBD2 = 'vigencia_categoria';

        try{
       	    $entidad = Categoria::where( $campoBD1 , $param1)
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


    public function deleteCategoria( $id ){

        try{

            $entidad = Categoria::find( $id );
            $entidad = Categoria::where('id_categoria', $id)->first();

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


    public function createCategoria(Request $request){
        
        try
        {   
            $data = Categoria::create($request->all());
          
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
    

    public function updateCategoria(Request $request, $id){

        try{
            $entidad = Categoria::find($id);
            $entidad = Categoria::where('id_categoria', $id)->first();
            $entidad->des_categoria = $request->input('des_categoria');
            $entidad->vigencia_categoria = $request->input('vigencia_categoria');
            
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


    public function getCountCategoria(  ){

        try{

            $entidad = Categoria::count();
            
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
    
    
    public function getMaxIdCategoria(  ){
    
        try{

            $entidad = Categoria::max('id_categoria');

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


    public function getMaxIdInsertarCategoria(  ){

        try{
            $entidad = Categoria::max('id_categoria');

            $maxIdInsertar = $entidad + 1;       
        
            $response = [
                        'code' => 0,
                        'status' => 'success',
                        'data' => $maxIdInsertar,
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
    
}
?>
