<?php

namespace App\Http\Controllers;

use App\Http\Requests\InputRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Kreait\Laravel\Firebase\Facades\Firebase;
use Illuminate\Routing\Controller;
use App\Services\Singleton;

class LoginController extends Controller
{
    private $firebaseAuth;
    public function __construct()
    {
        $this->firebaseAuth = Firebase::auth();
    }

    public function index()
    {
        return view('login',[
            'title'=>'Login',
        ]);
    }
    public function login(InputRequest $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        try {
            $firebase = Firebase::auth();
            $sigIn = $firebase->signInWithEmailAndPassword($email, $password);

            return view('game',[
                'title'=>'Tarot Game','user_data'=>$sigIn->data()
            ]);
        } catch (\Exception $ex) {
            Session::flash('error', 'LogginError!!!');
            return redirect()->back();
        }
    }
}
