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
            'codigo' => 'required|min:3|max:15',
            'empresa' => 'required|min:10|max:50',
            'contacto' => 'required',
        ]);

        Profesore::create($request->all());

        /*
        almacenar el nuevo profesore
        $profesore = new Profesore();
        $profesore->codigo = $request->codigo;
        $profesore->empresa = $request->empresa;
        $profesore->contacto = $request->contacto;
        $profesore->direccion = $request->direccion;
        $profesore->ciudad = $request->ciudad;
        $profesore->save();
        */

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
            'codigo' => 'required|min:3|max:15',
            'empresa' => 'required|min:10|max:50',
            'contacto' => 'required',
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
