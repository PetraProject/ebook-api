<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return[
        'NIS' => 3103120175,
        'Name' => 'Petra Sola',
        'Phone' => '0812-1543-3239',
        'Kelas' => 'XII RPL 5'
        ];
    }
};
