<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trabajador;


class TrabajadorController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:ver-trabajador | crear-trabajador | editar-trabajador | borrar-trabajador', ['only'=>['index']]);
        $this->middleware('permission:crear-trabajador', ['only'=>['create','store']]);
        $this->middleware('permission:editar-trabajador', ['only'=>['edit','update']]);
        $this->middleware('permission:borrar-trabajador', ['only'=>['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trabajadores= Trabajador::paginate(5);
        return view('trabajadores.index',compact('trabajadores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('trabajadores.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'nombres' => 'required',
            'apellido_paterno' => 'required',
            'apellido_materno' => 'required',
            'DNI' => 'required',
            'direccion' => 'required',
            'fecha_nacimiento' => 'required',
            'correo' => 'required',
            'telefono' => 'required',
            'grupo_sanguineo' => 'required',
            'cuenta_bancaria' => 'required',
            'estado' => 'required',
            'fondo_pensiones' => 'required',
        ]);
        Trabajador::create($request->all());
        return redirect()-> route('trabajadores.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Trabajador $trabajador)
    {
        $trabajador = $trabajador->get()->first();
        return view('trabajadores.editar',compact('trabajador'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trabajador $trabajador)
    {
        //dd($request->all());
        request()->validate([
            'nombres' => 'required',
            'apellido_paterno' => 'required',
            'apellido_materno' => 'required',
            'DNI' => 'required',
            'direccion' => 'required',
            'fecha_nacimiento' => 'required',
            'correo' => 'required',
            'telefono' => 'required',
            'grupo_sanguineo' => 'required',
            'cuenta_bancaria' => 'required',
            'estado' => 'required',
            'fondo_pensiones' => 'required',
        ]);

        $trabajador->update($request->all());

        return redirect()->route('trabajadores.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id )
    {
        Trabajador::find($id)->delete();
        return redirect()->route('trabajadores.index');

    }
}
