<?php

namespace App\Models;

use App\Enums\TipoDelegadoEnum;
use App\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delegado extends Model
{
    use HasFactory, UuidTrait;
    protected $guarded = ['id', 'created_at', 'updated_at'];
    protected $table = 'delegados';
    protected $casts = [
        'tipo' => TipoDelegadoEnum::class,
    ];

    public function unidade()
    {
        return $this->belongsTo(Unidade::class);
    }

    public function sessoes()
    {
        return $this->belongsToMany(Sessao::class, 'presencas', 'delegado_id', 'sessao_id');
    }

    public function documentos()
    {
        return $this->hasMany(Documento::class);
    }

    public function comissoes()
    {
        return $this->belongsToMany(Comissao::class, 'commission_delegate', 'delegado_id', 'comissao_id');
    }

    public function atas()
    {
        return $this->hasMany(Ata::class);
    }

    public function aprovacaoAtas()
    {
        return $this->hasMany(AprovacaoAta::class);
    }
}
