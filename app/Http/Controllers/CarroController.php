<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarroRequest;
use Illuminate\Http\Request;
use App\Models\Carro;
use Illuminate\Support\Facades\DB;

class CarroController extends Controller
{
   
    public function index(Carro $carro, Request $request)
    {
     
        $carros = $carro->all();
        
        // $carros = DB::table('carros')->simplePaginate(10);

        return view('/index', compact('carros'));
    }

    public function show(string $id)
    {
        if (!$carros = Carro::find($id)) {
            return back();
        }

        return view('/show', compact('carros'));

    }
    
   
    public function create()
    {
        return view('/create');
    }


    public function store(Request $request, Carro $carros)
    {
        $data = $request->all();
       
        $carros->create($data);


        return redirect()->route('carros.index')->with('sucesso', 'Carro cadastrado com sucesso');
    }
   
    public function edit(Carro $carros, string|int $id)
    {
        if (!$carros = $carros->where('id', $id)->first()) {
            return back();
        }

        return view('/edit', compact('carros'));
    }

    
    public function update(Request $request, Carro $carros, string|int $id)
    {
        if (!$carros = $carros->find($id)) {
            return back();
        }

        $carros->update($request->all());
 
        return redirect()->route('carros.show', $carros->id)->with('editado', "O Carro " . $carros->marca . " " . $carros->modelo . " foi atualizado com sucesso");
    }

   
    public function destroy(Carro $carros, string|int $id)
    {
        if (!$carros = $carros->find($id)) {
            return back();
        }

        $carros->delete();

        return redirect()->route('carros.index')->with('deletado', "O Carro " . $carros->marca . " " . $carros->modelo . " foi excluido com sucesso");
    }
}
