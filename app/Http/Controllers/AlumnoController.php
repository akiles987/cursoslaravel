<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;
use App\Rules\Validardni;

class AlumnoController extends Controller
{

    public function index()
    {
        $alumnos = Alumno::all();

        $curso = Alumno::pluck('curso')->prepend('curso');

        return view('alumnos.index', compact('alumnos'),['curso'=>$curso]);
    }

    public function create()
    {
        //mostrar el formulario de creación
        return view('alumnos.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required',
            'apellidos' => 'required',
            'email' => 'required',
            'f_nacimiento' => 'required|date',
            'telefono' => 'required ',
            'dni' => ['required',new Validardni],
            'curso' => 'required',
            'clase' => 'required',
        ]);

        alumno::create($request->all());

        return redirect()->route('alumnos.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $alumno = alumno::find($id);
        return view('alumnos.edit', compact('alumno'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nombre' => 'required',
            'apellidos' => 'required',
            'dni' => ['required',new Validardni],
        ]);

        $alumno = alumno::find($id);
        
        $alumno->update($request->all());

        return redirect()->route('alumnos.index');
    }


    public function destroy($id)
    {
        Alumno::find($id)->delete();
        return redirect()->route('alumnos.index');
    }

    public function imprimir(){

        $alumnos = Alumno::all();
        $data = compact('alumnos');
        $pdf = \PDF::loadView('pdf.alumnos', $data);
        return $pdf->download('alumnos.pdf');
    }

}
