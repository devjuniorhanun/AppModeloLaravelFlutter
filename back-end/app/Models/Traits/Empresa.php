<?php
/**
 * Trait Uuid
 * Responsavel por gerar o tenant_id, na criação.
 * 
 */
namespace App\Models\Traits;

use App\Models\Cadastros\Empresa as CadastrosEmpresa;


trait Empresa
{
    public static function bootEmpresa()
    {
        static::creating(function ($model) {
            $model->empresa_id = CadastrosEmpresa::first()->id;
        });
    }
}