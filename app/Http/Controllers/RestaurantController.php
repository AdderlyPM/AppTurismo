<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Restaurant;
use App\Address;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        if(Auth::check()){
            $restaurantes = DB::table('restaurants')->get();
            return view('restaurantes.index', compact('restaurantes'));
        }else{
            return redirect('auth/login');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        if(Auth::check()){
            return view('restaurantes.create');
        }else{
            return redirect('auth/login');
        } 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request, Restaurant $restaurante, Address $direccion)
    {
    	$this->validate($request, [
	        'nombre' => 'required|unique:restaurants|max:255',
	        'direccion' => 'required',
	        'telefono' => 'required',
	    ]);

    	$data['nombre'] = $request->input('nombre');
    	$data['tipo_restaurante'] = $request->input('tipo_restaurante');
    	$data['direccion'] = $request->input('direccion');
    	$data['ciudad_municipio'] = $request->input('ciudad_municipio');
    	$data['telefono'] = $request->input('telefono');
    	
    	$address = urlencode($request->input('direccion'));
	    $url = "http://maps.google.com/maps/api/geocode/json?sensor=false&address=" . $address;
	    $response = file_get_contents($url);
	    $json = json_decode($response,true);
	 
	    $lat = $json['results'][0]['geometry']['location']['lat'];
	    $lng = $json['results'][0]['geometry']['location']['lng'];
	    $latlong['latitud'] = $lat;
	    $latlong['longitud'] = $lng;
	    $latlong['direccion'] = $request->input('direccion');

 		$restaurante->fill($data)->save();
 		$direccion->fill($latlong)->save();

 		return redirect()->back()->with('status','Restaurante creado con extio!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        if(Auth::check()){
            $restaurante=Restaurant::find($id);
            return view('restaurantes.edit', compact('restaurante'));
        }else{
          return redirect('auth/login');
        }  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $restaurante=Restaurant::find($id);
        $restaurante['nombre'] = $request->input('nombre');
        $restaurante['tipo_restaurante'] = $request->input('tipo_restaurante');
        $restaurante['direccion'] = $request->input('direccion');
        $restaurante['ciudad_municipio'] = $request->input('ciudad_municipio');
        $restaurante['telefono'] = $request->input('telefono');
        
        $restaurante->update();
        return redirect()->back()->with('status','Se actualizó exitosamente!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
    	DB::table('restaurants')->where('id',$id)->delete();
    	return redirect()->back()->with('status','Eliminación completada');
    }


}
