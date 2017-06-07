<?php
 
namespace App\Http\Controllers;
 
use App\Car;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 
class CarController extends Controller{

    public function index(){
 
        $cars  = Car::all();
 
        return response()->json($cars);
    }
    
     
    public function createCar(Request $request){
        
        try
        {   
            $data = Car::create($request->all());
          
            $response = [
				'code' => 0,
				'status' => 'success',
				'data' => $data
			];
            
        }catch(\Exception $ex)
        {
            $response = [
				'code' => -1,
				'status' => 'error',
				//'data' => $data,
				'data' => '',
				'message' => 'Unprocessable entity'
			];
			
        }
        
        return response()->json( $response );
    }
 
 
	public function updateCar(Request $request, $id){
		
		$car  = Car::find($id);
		//$car = Car::withTrashed()->whereId( $id )->first();
		$car = Car::whereId( $id )->first();
		$car->make = $request->input('make');
		$car->model = $request->input('model');
		$car->year = $request->input('year');
		$status = $car->save();
		
		$response = [
			'code' => -1,
			'status' => 'error',
			'data' => ''
		];
		
		if( $status == true ){
			
			$response = [
				'code' => 0,
				'status' => 'success',
				'data' => $car
				/*,'data' => [ 1, 2, 3 ],*/
			];
			
		}else{
			$response = [
				'code' => -1,
				'status' => 'error',
				'data' => ''
			];
		}
		
		var_dump( $response );
		
		return response()->json( $response );
	}  
 
	public function deleteCar( $id ){
    	//$car  = Car::find($id);
    	//$car->delete();
    	
    	$car = Car::find( $id );
		//$car = Car::withTrashed()->whereId( $id )->first();
		$car = Car::whereId( $id )->first();
		
		if( $car ){
			$car->delete();
			
			$response = [
				'code' => 0,
				'status' => 'success',
				'data' => [],
				'message' => 'Resource deleted'
			];
			
			return response()->json( $response );
		}else{
			
			$response = [
				'code' => -1,
				'status' => 'error',
				'data' => 'Resource Not Found',
				'message' => 'Not Found'
			];
			
			return response()->json( $response );
		}
		
    	return response()->json( $response );
	}
 
	
	
	/*
	 	public function index()
    {
        $m = self::MODEL;
        return $this->listResponse($m::all());
    }
    public function show($id)
    {
        $m = self::MODEL;
    	if($data = $m::find($id))
        {
            return $this->showResponse($data);
        }
        return $this->notFoundResponse();
    }
    public function store(Request $request)
    {
        $m = self::MODEL;
        try
        {
            $v = \Validator::make($request->all(), $this->validationRules);
            if($v->fails())
            {
                throw new \Exception("ValidationException");
            }
            $data = $m::create(\Request::all());
            return $this->createdResponse($data);
        }catch(\Exception $ex)
        {
            $data = ['form_validations' => $v->errors(), 'exception' => $ex->getMessage()];
            return $this->clientErrorResponse($data);
        }
        
    }
    public function update($id)
    {
    	$m = self::MODEL;
        if(!$data = $m::find($id))
        {
            return $this->notFoundResponse();   
        }
        try
        {
            $v = \Validator::make(\Request::all(), $this->validationRules);
            if($v->fails())
            {
                throw new \Exception("ValidationException");
            }
            $data->fill(\Request::all());
            $data->save();
            return $this->showResponse($data);
        }catch(\Exception $ex)
        {
            $data = ['form_validations' => $v->errors(), 'exception' => $ex->getMessage()];
            return $this->clientErrorResponse($data);
        }
    }
    public function destroy($id)
    {
        $m = self::MODEL;
    	if(!$data = $m::find($id))
        {
            return $this->notFoundResponse();   
        }
        $data->delete();
        return $this->deletedResponse();
    }
    protected function createdResponse($data)
    {
        $response = [
        'code' => 201,
        'status' => 'succcess',
        'data' => $data
        ];
        return response()->json($response, $response['code']);
    }
    protected function showResponse($data)
    {
        $response = [
        'code' => 200,
        'status' => 'succcess',
        'data' => $data
        ];
        return response()->json($response, $response['code']);
    }
    protected function listResponse($data)
    {
        $response = [
        'code' => 200,
        'status' => 'succcess',
        'data' => $data
        ];
        return response()->json($response, $response['code']);
    }
    protected function notFoundResponse()
    {
        $response = [
        'code' => 404,
        'status' => 'error',
        'data' => 'Resource Not Found',
        'message' => 'Not Found'
        ];
        return response()->json($response, $response['code']);
    }
    protected function deletedResponse()
    {
        $response = [
        'code' => 204,
        'status' => 'success',
        'data' => [],
        'message' => 'Resource deleted'
        ];
        return response()->json($response, $response['code']);
    }
    protected function clientErrorResponse($data)
    {
        $response = [
        'code' => 422,
        'status' => 'error',
        'data' => $data,
        'message' => 'Unprocessable entity'
        ];
        return response()->json($response, $response['code']);
    }
	 */
}
?>
