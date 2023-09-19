<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(){
        return view('register');
    }

    public function register_submit(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|max:32',
            'comfirm_password' => 'required|same:password',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect()->route('login')->with('success', 'You have create an account successfully!');
    }

    public function login(){
        return view('login');
    }

    public function login_submit(Request $request){

    $request->validate([
        'email' => 'required',
        'password' => 'required'
    ]);
    $credietails = [
        'email' => $request->email,
        'password' => $request->password
    ];
    if(Auth::guard('web')->attempt($credietails)){
        return redirect()->route('dashboard');
    }
    else{
        return redirect()->route('login');
    }
    }
    public function dashboard(){
        return view('dashboard');
    }

    public function logout(){
        Auth::guard('web')->logout();
        return redirect()->route('login');
    }
}
