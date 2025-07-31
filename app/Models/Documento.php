<?php

namespace App\Models;

use App\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    use HasFactory, UuidTrait;
    protected $guarded = ['id', 'created_at', 'updated_at'];
    protected $table = 'documentos';
    protected $casts = [
        'tipo' => TipoDocumentoEnum::class,
    ];

    public function reuniao()
    {
        return $this->belongsTo(Reuniao::class);
    }

    public function delegado()
    {
        return $this->belongsTo(Delegado::class);
    }

    public function comissao()
    {
        return $this->belongsTo(Comissao::class);
    }

    public function unidade()
    {
        return $this->belongsTo(Unidade::class);
    }
}
