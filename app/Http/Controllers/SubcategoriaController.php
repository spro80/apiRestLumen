<?php

namespace App\Http\Controllers;
 
use App\Subcategoria;
use App\Categoria;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 
class SubcategoriaController extends Controller{    


	public function getAllSubcategoria(){
		
		try{
				$entidad  = Subcategoria::all();
				/*$cont = 0;
				foreach($entidad as $lista){
					//return "FOREACH";
					++$cont;
				}*/
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


	public function getAllSubcategoriaWithDescripcion(){
    
		$result = Subcategoria
					::join('categoria', 'categoria.id_categoria', '=', 'subcategoria.id_subcategoria')
					//->join('orders', 'users.id', '=', 'orders.user_id')
					->select('subcategoria.id_subcategoria', 'categoria.id_categoria', 'categoria.des_categoria', 'subcategoria.des_subcategoria')
					->getQuery() // Optional: downgrade to non-eloquent builder so we don't build invalid User objects.
					->get();
		return $result;
	}


	public function categoria()
	{
		//return $this->belongsTo('App\Categoria' , 'id_categoria', 'id_categoria');
		return $this->belongsTo('App\Categoria' , 'id_categoria', 'id_categoria');
	}


    public function deleteSubcategoria( $id ){

        try{

            $entidad = Subcategoria::find( $id );
            $entidad = Subcategoria::where('id_subcategoria', $id)->first();

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


    public function createSubcategoria(Request $request){
        
        try
        {   
            $data = Subcategoria::create( $request->all() );
          
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
    
    
    public function updateSubcategoria(Request $request, $id){

        try{
            $entidad = Subcategoria::find($id);
            $entidad = Subcategoria::where('id_subcategoria', $id)->first();
            $entidad->id_categoria = $request->input('id_categoria');
            $entidad->des_subcategoria = $request->input('des_subcategoria');
            $entidad->vigencia_subcategoria = $request->input('vigencia_subcategoria');
            
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
        
        return response()->json( $response );
	}
	
	
	public function getMaxIdInsertarSubcategoria(  ){

        try{
            $entidad = Subcategoria::max('id_subcategoria');

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
