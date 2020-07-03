<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function () {
    return view('novas.pagina');
});
Route::get('/sobre', function () {
    return view('novas.sobre1');
});
Route::get('/projetos',function(){
    return view('novas.projetos1');
});
Route::get('/extensao',function(){
    return view('novas.extensao1');
});
Route::get('/contatos',function(){
    return view('novas.contato1');
});
Route::get('/alunos', function(){
    $alunos = Aluno::all();
    foreach($alunos as $a){
        echo "<p>ID:". $a->id . "</p>";
        echo "<p>Nome:". $a->nome . "</p>";
        echo "<p>Matricula:". $a->matricula . "</p>";
        echo "<p>Telefone:". $a->telefone . "</p>";
        // $e = Endereco::where('cliente_id',$c->id)->first();
        // echo "<p>Rua:". $c->endereco->rua . "</p>";
        // echo "<p>Numero:". $c->endereco->numero . "</p>";
        // echo "<p>Bairro:". $c->endereco->bairro . "</p>";
        // echo "<p>Cidade:". $c->endereco->cidade . "</p>";
        // echo "<p>UF:". $c->endereco->uf . "</p>";
        // echo "<p>CEP:". $c->endereco->cep . "</p>";
        // echo "<hr>";
        
    }
});
Route::get('/inserir',function(){
    $a = new Aluno();
    $a->nome = "Melissa Matos";
    $a->matricula = "17111123";
    $a->telefone = "75992160103";
    $a->save();

    $e= new Projeto();
    $p->nome = "Banco de Dados";
    

    $a->projeto()->save($p);

    $a = new Aluno();
    $a->nome = "Elvis Serafim";
    $a->matricula = "17211138";
    $a->telefone = "75981217446";
    $a->save();

    $p= new Projeto();
    $e->nome = "Projeto MCA";
    
    $a->projeto()->save($p);       
});
Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');
