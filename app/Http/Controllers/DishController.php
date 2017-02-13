<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dish;
use Auth;
use DB;

class DishController extends Controller
{
    public function index()
    {
        if(Auth::check()){
            $platos = DB::table('dishes')->get();
            
            return view('platos.index', compact('platos'));
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
            return view('platos.create');
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
    public function store(Request $request, Dish $platos)
    {
    	$this->validate($request, [
	        'nombre' => 'required|unique:dishes|max:255',
	    ]);

    	$data['nombre'] = $request->input('nombre');
    	$data['precio'] = $request->input('precio');
    	$data['tiempo_orden'] = $request->input('tiempo_orden');

 		$platos->fill($data)->save();
 		return redirect()->back()->with('status','Plato creado con extio!!!');
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
/*        if(Auth::check()){
            $restaurante=Restaurant::find($id);
            return view('restaurantes.edit', compact('restaurante'));
        }else{
          return redirect('auth/login');
        }  */
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
/*        $restaurante=Restaurant::find($id);
        $restaurante['nombre'] = $request->input('nombre');
        $restaurante['tipo_restaurante'] = $request->input('tipo_restaurante');
        $restaurante['direccion'] = $request->input('direccion');
        $restaurante['ciudad_municipio'] = $request->input('ciudad_municipio');
        $restaurante['telefono'] = $request->input('telefono');
        
        $restaurante->update();
        return redirect()->back()->with('status','Se actualizó exitosamente!!');*/
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
/*    	DB::table('restaurants')->where('id',$id)->delete();
    	return redirect()->back()->with('status','Eliminación completada');*/
    }

}
