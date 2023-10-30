<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\registation;
class ecommercecontroller extends Controller
{
    public function loginpage()
    {
        return view('login');
    }
   public function loginpage1()
{
    // Add your logic for the login1 method here
}

public function regpage()
{
    return view('registation');
    
}
public function regpage1(Request $request)
{
// Create a new Login model instance and fill it with data from the request
$login = new Registation([
    'name' => $request->input('name'),
    'email' => $request->input('email'),
    'password' => $request->input('password')
]);
//dd($login);
// Save the data to the database
$login->save();

// Assuming 'log' is a view that you want to return
return view('login');
}

public function recpage()
{
    return view('recoveryps');
}
public function recpage1()
{
// Add your logic for the login1 method here
}


public function daspage()
{
    return view('dashboard');
}
public function daspage1()
{
// Add your logic for the login1 method here
}
public function tablepage()
{
    $data=registation::all();
    //dd($data);
    
    return view('RegistationDataTable',['data' => $data]);
}
public function tablepage1()
{
// Add your logic for the login1 method here
}
}

