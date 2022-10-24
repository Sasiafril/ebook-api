<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class AuthController extends Controller
{
    public function me(){
        return [
            'NIS'   => 3103120208,
            'Nama'  => 'Sasi Afrila',
            'Phone' => '081381167625',
            'Class' => 'XII RPL 6'
        ];
    }
}
