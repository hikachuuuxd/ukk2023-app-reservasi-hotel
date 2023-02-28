<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{

    
    protected $maxAttempts = 3; // default is 5
    protected $decayMinutes = 2; // default is 1
    
    public function index(){
        return view('login.index', [
            'title' => "Halaman Login",
            'active' => 'login'
        ]);
    }

    public function authenticate(Request $request){

    
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        session_start();
        $answer = $_SESSION['answer'];
        $user_answer = $_POST['answer'];

         if( $answer == $user_answer && Auth::attempt($credentials) ){
            $request->session()->regenerate();
            return redirect()->intended('/');
        }return back()->with('loginError', 'Login Gagal ');
        return back()->with('batas', 'Login dibatasi 3x ');

       
    }

    public function logout(Request $request){
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }
}
