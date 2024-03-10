<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notificacao extends Model
{
    use HasFactory;
    protected $table='notificacao';
    protected $fillable=[
        'vc_assunto',
        'lt_descricao',
        'it_id_categoriaNotificacao'
    ];

    /*public function relUsuario(){
        return $this->hasOne('App\Models\Usuario','id','it_id_usuario');
    }
    public function relTarefa(){
        return $this->hasOne('App\Models\Tarefa','id','it_id_tarefa');
    }*/
}


