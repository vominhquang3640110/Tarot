<?php

namespace App\Http\Controllers;

use App\Http\Requests\InputRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Kreait\Laravel\Firebase\Facades\Firebase;
use Illuminate\Routing\Controller;

class RegisterController extends Controller
{
    private $firebaseAuth;

    public function __construct()
    {
        $this->firebaseAuth = Firebase::auth();
    }
    
    public function index()
    {
        return view('register',[
            'title'=>'Register',
        ]);
    }
    public function register(InputRequest $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        $password_confirmation = $request->input('password_confirmation');

        try {
            if ($password === $password_confirmation) {
                 $createdUser = $this->firebaseAuth->createUserWithEmailAndPassword($email, $password);
                Session::flash('success', 'RegisterSuccessed!');
                return redirect('/login');
            }
            else{
                 Session::flash('error', 'RegisterError!!!');
                 return redirect()->back();
            }
        } catch (\Exception $e) {
            Session::flash('error', 'RegisterError!!!');
            return redirect()->back();
        }
    }
}
