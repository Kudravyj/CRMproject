<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Order;
use App\Models\User;

class OrderController extends Controller
{

    function createView(){
        return view('order.create');
    }

    function create(){
        $data = request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'middlename' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'string', 'max:255'],
            'phoneNumber' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'postalCode' => ['required', 'string', 'max:255'],
            'lat' => '',
            'lng' => '',
            'city' => ['required', 'string', 'max:255']
        ]);

        auth()->user()->Orders()->create($data);
        return redirect('/');
    }
}
