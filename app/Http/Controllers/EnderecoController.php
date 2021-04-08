<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Endereco;

class EnderecoController extends Controller
{
    public function enderecoForm(){
        return view ('cadastroEndereco');
    }
     public function menuInicial( )
    {
        return view ('menu');
    }
  
    public function cadastrarEndereco(Request $request){
        $endereco = new Endereco();
        $endereco->CEP = $request->CEP;
        $endereco->logradouro = $request->logradouro;
        $endereco->numero = $request->numero;
        $endereco->complemento = $request->complemento;
        $endereco->bairro = $request->bairro;
        $endereco->cidade = $request->cidade;
        $endereco->estado = $request->estado;
        $endereco->save();
        return view('salvarEndereco', compact('endereco'));
    }
    public function listaEnderecoForm(){
        $enderecos = Endereco::all();
       
        return view ('listaEndereco', compact('enderecos'));
    }
    public function editarEndereco($id)
    {
        $endereco=Endereco::where('id',$id)->first();
            return view('editEndereco',compact ('endereco'));
    }
 public function EnderecoSalvo(Request $request)

 {
    $endereco=Endereco::where('id',$request-> id)->first();
        $endereco->CEP = $request->CEP;
        $endereco->logradouro = $request->logradouro;
        $endereco->numero = $request->numero;
        $endereco->complemento = $request->complemento;
        $endereco->bairro = $request->bairro;
        $endereco->cidade = $request->cidade;
        $endereco->estado = $request->estado;
        $endereco->update();
    return redirect(route('listaEndereco'));
 }
 public function excluirEndereco($id)
 {
   
   Endereco::destroy($id);
   return redirect(route('listaEndereco'));
     
 }
}


