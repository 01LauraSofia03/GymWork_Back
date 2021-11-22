<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $rows = Usuario::all();
       return json_encode([
        'data'=> $rows
       ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_row = Usuario::create($request->json()->all());
        return json_encode([
            'data'=> $new_row
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$row = Estudiante::where('id','=',$id)->get();
        $row = Usuario::find($id);
        return json_encode([
         'data'=> $row
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*public function update(Request $request, $id)
    {
        $row = Usuario::find($id);
        $row -> update($request->all());
        return json_encode([
            'data'=> $row
           ]);
    }*/

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   /* public function destroy($id)
    {
        $row = Estudiante::find($id);
        $row -> delete();
        return json_encode([
            'data'=> $row
           ]);
    }*/
}
