<?php

namespace App\Http\Controllers;

use App\Models\Notificacao;
use Illuminate\Http\RedirectResponse;

use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class NotificacaoController extends Controller
{
    
    private $objNotificacao;
    public function __construct(){
 
    $this->objNotificacao= new Notificacao();

    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return Notificacao::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $var= validator::make($request->all(), [
        'vc_assunto'=>'required',
        'lt_descricao'=>'required',
        'it_id_categoriaNotificacao'=>'required'
        ]);
        if($var->fails()){
            return $this->error('Data invalid', 422,$var->errors());
        }
        $created= Notificacao::create($var->validated());
        if($created){
            return $this->response('Notificação  criada', 200,$created);
 
        }
            return $this->error('Notificação nao criada', 400);
 
       
   
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new Notificacao(Notificacao::where('id', $id));
    }

    /**
     * Show the form for editing the specified resource.
     */

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    { $var= Validator::make($request->all(), [
        'vc_assunto'=>'required',
        'lt_descricao'=>'reuired',
        'it_id_categoriaNotificacao'=>'required'
        ]);
        if($var->fails()){
            return $this->error('Erro na validação ', 422,$var->errors());
        }
        $validated= $var->validated();
        $updated= Notificacao::find( $id)->update([
            'vc_assunto'=>$validated['vc_assunto'],
            'lt_descricao'=>$validated['it_descricao'],
            'it_id_categoriaNotificacao'=> $validated['it_id_categoriaNotificacao']
        ]);
        if($validated){
            return $this->response('Atualizado ', 200,$request->all());
        }
        return $this->response('Nao atualizado ', 400,$request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id,$request)
    {
       $deleted= Notificacao::findorfail($id,)->delete();
       if($deleted){
        return $this->response('Apagado ', 200,$request->all());
    }
    return $this->response('Nao apagado ', 400,$request->all());
        
    }
}
