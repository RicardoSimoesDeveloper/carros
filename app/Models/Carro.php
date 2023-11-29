<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Carro extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'carros';

    protected $primaryKey = 'id';

    const CREATED_AT = 'criado_em';
    const UPDATED_AT = 'atualizado_em';
    const DELETED_AT = 'excluido_em';

    protected $fillable = [
        'marca',
        'modelo',
        'ano',
        'ano_modelo',
        'km',
        'tipo_combustivel',
        'motor',
        'cor',
        'tipo_direcao',
        'alarme',
        'placa',
        'valor',
        'qntd_portas'
    ];

    protected $hidden = [
        'criado_em',
        'atualizado_em',
        'excluido_em',
    ];
}
