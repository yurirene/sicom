<?php

namespace App\Enums;

enum TipoDocumentoEnum: int
{
    case Relatorio = 1;
    case Proposta = 2;
    case Consulta = 3;
    case Substitutivo = 4;
    case RelatorioComissao = 5;
}