<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCurso;
use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    public function index(){
        $cursos = Curso::orderBy('id', 'desc')->paginate();

        return view('cursos.index', compact('cursos'));
    }

    public function create(){
        return view('cursos.create');
    }

    public function store(StoreCurso $request)
    {   
        $curso = Curso::create($request->all());

        return redirect()->route('cursos.show', $curso);
    }

    public function show(Curso $curso)
    {
        return view('cursos.show', compact('curso'));
    }

    public function edit(Curso $curso)
    {
        return view('cursos.edit', compact('curso'));
    }

    public function update(Request $request, Curso $curso)
    {
        $request->validate(
        [//Rules
            'name' => 'required | string | min:5',
            'slug' => 'required|unique:cursos, slug,'.$curso->id,
            'description' => 'required',
            'categoria' => 'required',
        ],
        [//messages
            'name.required' => 'El nombre es requeridasdfo', 
            'name.min' => 'Agrega mas caracteres prro',
            'description.required' => 'LA descripcion es requerida prro'
        ],
        [//Attributtes
            'name' => 'Nombre del formulario crear'
        ]);

        $curso->update($request->all());

        return redirect()->route('cursos.show', $curso->id);
    }

    public function destroy(Curso $curso)
    {
        $curso->delete();

        return redirect()->route('cursos.index');
    }
}
