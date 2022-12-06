<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use Illuminate\Support\Facades\Validator;

class OrderController
{
    function view(){
        return view('createOrder');
    }

    function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'middlename' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'string', 'max:255'],
            'phoneNumber' => ['required', 'number', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'postalCode' => ['required', 'string', 'max:255'],
            'lat' => ['required', 'string', 'max:255'],
            'lng' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255']
        ]);
    }


    function create(array $data){
        return Orders::create([
            'name' => $data['name'],
            'middlename' => $data['middlename'],
            'email' => $data['email'],
            'phoneNumber' => $data['phoneNumber'],
            'address' => $data['address'],
            'postalCode' => $data['postalCode'],
            'lat' => $data['lat'],
            'lng' => $data['lng'],
            'city' => $data['city']
        ]);
    }
}
