<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $table = 'clientes';

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome_fantasia',
        'razao_social',
        'rg_ie',
        'conexao',
        'complemento',
        'pais',
        'numero_pedido',
        'data',
        'data_inicio',
        'nome',
        'cpf_cnpj',
        'email',
        'telefone',
        'celular',
        'endereco',
        'numero',
        'cidade',
        'estado',
        'bairro',
        'cep',
        'site',
        'interesse',
        'outros_texto',
        'outros',
        'Lead_Ativo',
        'obs',
        'status',
        'codigo',
        'ramo_atividade',
        'Representante_Id',
        'Contador_Id',
        'valor_mensalidade',
        'valor_comissao',
        'data_comissao',
        'confirmado',
        'conf_datahora',
        // 'updated_at',
        // 'created_at'
    ];

}
