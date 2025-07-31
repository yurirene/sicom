<?php

namespace App\Models;

use App\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comissao extends Model
{
    use HasFactory, UuidTrait;
    protected $guarded = ['id', 'created_at', 'updated_at'];
    protected $table = 'comissoes';

    public function reuniao()
    {
        return $this->belongsTo(Reuniao::class);
    }
}
