<?php

namespace App\Http\Controllers;

use App\Models\Profesore;
use Illuminate\Http\Request;
use PDF;

class ProfesoreController extends Controller
{

    public function index()
    {
        $profesores = Profesore::all();

        return view('profesores.index', compact('profesores'));
    }


    public function create()
    {
        //mostrar el formulario de creación
        return view('profesores.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required',
            'apellidos' => 'required',
            'email' => 'required',
            'f_nacimiento' => 'required|date',
            'telefono' => 'required',
            'dni' => 'required',
            'curso' => 'required',
        ]);

        Profesore::create($request->all());

        return redirect()->route('profesores.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $profesore = Profesore::find($id);
        return view('profesores.edit', compact('profesore'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'dni' => 'required',
        ]);

        $profesore = Profesore::find($id);
        
        $profesore->update($request->all());

        return redirect()->route('profesores.index');
    }

    public function destroy($id)
    {
        Profesore::find($id)->delete();
        // return redirect('/profesores'); //estas dos instrucciones hacen lo mismo
        return redirect()->route('profesores.index');
    }

    public function imprimir(){

        $profesores = Profesore::all();
        $data = compact('profesores');
        $pdf = \PDF::loadView('pdf.profesores', $data);
        return $pdf->download('primerpdf.pdf');
    }


}
