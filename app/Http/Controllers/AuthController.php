<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class AuthController extends Controller
{
    public function me(){
        return [
            'NIS' => 31303120192,
            'Name' => 'Reyhan Nayaka Utomo',
            'Phone' => '081337916091',
            'Class' => 'XII RPL 6',
        ];
    }
}
