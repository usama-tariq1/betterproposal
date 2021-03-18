<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Auth\LoginController;
use App\Payment_account;
use Illuminate\Http\Request;
// use JsonResponse
use App\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;

class AuthController extends Controller
{
    //

    use AuthenticatesUsers;

    public static function index(){
        return view('auth.login');
    }

    public static function login(Request $request){
        // dd($request->all());
        // $request->validate([
        //     'name' => 'required',
        //     'password' => 'required'
        // ]);

        // $credentials = $request->except(['_token' , 'email' , 'password']);

        // // $user = User::where('name',$request->name)->first();

        // if (auth()->attempt($credentials)) {

        //     return redirect()->route('home');

        // }else{
        //     session()->flash('message', 'Invalid credentials');
        //     return redirect()->back();
        // }


        // dd(LoginController::login($request));



    }


    public static function signup(){
        return view('auth.register');
    }


    public  function register(Request $request){
        // dd($request->all());

        $validator = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'company' => 'required'
        ]);

        $check = User::where('email' , $request->email)->count();

        // dd($check);

        if($check > 0){
            session()->flash('message', 'Account Already Exists');

            return redirect()->route('login');
        }
        $user = User::create([
            'name' => trim($request->input('name')),
            'email' => strtolower($request->input('email')),
            'password' => bcrypt($request->input('password')),
            'company' => $request->input('company'),
            'role' => 2,
            'first_login' => 1,




        ]);


        $user_id = $user->id;

        $payment_account = Payment_account::create([
            "user_id" => $user_id,
        ]);

        $user->payment_id = $payment_account->id;
        $user->save();






        // dd($user);

        // $user->role = 1;

        session()->flash('message', 'Your account is created');

        $this->guard()->attempt(
            $request->only('email' , 'password'), $request->filled('remember')
        );

        return redirect(URL::to('/'));

        // $logintreat =new AuthenticatesUsers;
        // $logintreat->login($request);

        // $this->login($request);

    }

    protected function guard(){
        return Auth::guard();
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        if ($response = $this->loggedOut($request)) {
            return $response;
        }

        return $request->wantsJson()
            ? new JsonResponse([], 204)
            : redirect('/');
    }



}
