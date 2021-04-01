<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class CadastroController extends Controller
{
    public function cadastroForm(){
        return view ('cadastro');
    }
     public function menuInicial( )
    {
        return view ('menu');
    }
  
    public function cadastrar(Request $request){
        $usuario = new Usuario();
        $usuario->nome = $request->nome;
        $usuario->data_nascimento = $request->data_nascimento;
        $usuario->senha = $request->senha;
        $usuario->matricula = $request->matricula;
        $usuario->save();
        return view('salvarUsuario', compact('usuario'));
    }
    public function listaForm(){
        $usuarios = Usuario::all();
       
        return view ('lista', compact('usuarios'));
    }
    public function editarUsuario($id)
    {
            $usuario=Usuario::where('id',$id)->first();
            return view('editRegistro',compact ('usuario'));
    }
 public function RegistroSalvar(Request $request)

 {
    $usuario=Usuario::where('id',$request-> id)->first();
    $usuario->nome = $request->nome;
    $usuario->data_nascimento = $request->data_nascimento;
    $usuario->senha = $request->senha;
    $usuario->matricula = $request->matricula;
    $usuario->update();
    return redirect(route('lista'));
 }
 public function excluirRegistro($id)
 {
   
   Usuario::destroy($id);
   return redirect(route('lista'));
     
 }
}
