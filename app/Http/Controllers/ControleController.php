<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Controle;
use App\Models\Pessoa;
use App\Models\Notebook;
use App\Models\Sala;
use App\Models\Projetore;

class ControleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $keyword = $request->keyword;

        $data_inicio = date("Y-m-d")." 00:00:00";
            $data_final= date("Y-m-d")." 23:59:59"; 
       

        // dd(date("Y-m-d")." 00:00:00");

        if (!empty($keyword)) {


        $data_i = date("Y-m-d")." 00:00:00";
        $data_f= date("Y-m-d")." 23:59:59"; 
            

            $controles = Controle::with('pessoas', 'salas', 'notebooks', 'projetores')
                ->whereHas('pessoas', function ($query) use ($keyword) {
                    $query->where('pessoas.nome', 'like', '%' . $keyword . '%')
                    ->wherebetween('controles.created_at', [date("Y-m-d")." 00:00:00", date("Y-m-d")." 23:59:59"]);

                })->orderby('id', 'desc')->get();

            return view('layouts.controle.list_controle', compact('controles'));
        } else {

        $controles=Controle::with('pessoas', 'salas', 'notebooks', 'projetores')
        ->where('controles.status', 'R')
        ->where('controles.status', 'E')->orwhere('controles.created_at', '>=', $data_inicio)->where('controles.created_at', '<=', $data_final)
        ->orderBy('id', 'desc')->get();

        return view('layouts.controle.list_controle', compact('controles'));

        }

    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Consultar para popular os selects do formulário
        $pessoas=Pessoa::all();
        $notebooks=Notebook::all();
        $salas=Sala::all();
        $projetores=Projetore::all();

        return view('layouts.controle.create', compact('pessoas', 'notebooks', 'salas', 'projetores'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    
        $add = new Controle;

        $add->pessoas_id = $request->txtservidor;
        $add->salas_id = $request->txtsala;
        $add->projetores_id = $request->txtprojetor;
        $add->notebooks_id = $request->txtnotebook;
        $add->extensao = $request->txtextensao;
        $add->adaptador = $request->txtadaptador;
        $add->hdmi = $request->txthdmi;
        $add->kit_apagador = $request->txtkitapagador;
        $add->status = 'R';
        $add->responsavel = $request->txtresponsavel;
        $add->created_at = date("Y-m-d H:i:s");
        $add->updated_at = null;
        
        $add->save();

            return redirect()->route('controle.index')->with('status', 'Retirada Adicionada com Sucesso!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $controle = Controle::find($id);
        $controle->status = 'E';
        $controle->save();

        echo '<script type="text/javascript">
                alert("Selecionado com Sucesso!");
                </script>';

        return redirect()->route('controle.index')->with('status', '( Entrega ) Realizada com Sucesso!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $controle = Controle::find($id);
        $controle->delete();

    

        return redirect()->route('controle.index')->with('status', 'Retirada Removida com Sucesso!');
        
    }
}
