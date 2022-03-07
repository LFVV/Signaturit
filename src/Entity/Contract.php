<?php

namespace App\Entity;

class Contract
{
    public $roles = [
        ['name' =>'King', 'access' => 'K', 'value' =>5],
        ['name' =>'Notary','access' => 'N', 'value' =>2],
        ['name' =>'Validator','access' => 'V', 'value' =>1]
    ];

    public $signatures;
    /*
    *Si estuvieramos en arquitectura hexagonal este método sería privado y solo podríamos instanciar 
    *nuestra entidad mediante una función que espera una estructura de datos concreta
    */
    public function __construct($signatures)
    {
        $this->signatures = $signatures;
    }

    public function sum()
    {
        $signatures = $this->signatures;
        $sum = [];
        $num = 'num';
        $result = 0;
        //Lo he hecho así para facilitar cambios en roles
        foreach ($this->roles as $clave => $valor){
            if($valor['name'] == 'King'){
                $kings = substr_count(strtoupper($signatures),$valor['access']) > 0 ? 1 : 0;
            }
            $sum[$valor['name']] = substr_count(strtoupper($signatures),$valor['access']) * $valor['value'];
        }

        if($kings){
            $sum['Validator'] = 0;
        }

        foreach ($sum as $valor){
            $result += $valor;
        }

        return $result;

    }



}
