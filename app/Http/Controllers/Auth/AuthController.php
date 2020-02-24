<?php 

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Http\Requests\LoginRequest;

class AuthController extends Controller{


    public function register(Request $request){
        //dd('gooooooo');

        //dd();
        return( $user = User::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password'))

        ])
        );
       //$data =$request->all();
        //$p = User::create($user);
        //return response() ->json($p);

    }

    public function login(LoginRequest $request){
        //dd($request->all());
        //dd('alooo');

            //$attempt = Auth::attempt(['email' => $request -> email, 'password' => $request -> password]);

       // if ($attempt){
            
            //dd('suduuuu');
                //$user = User::find(Auth::id()); 
                //dd($user);

            // $id = User::find(Auth::id());
            // dd($id);
            //return dd($attempt);
            //return redirect()->intended('/');
            
        //}else{
        //     //return response()->json(['error' => 'Could not log you in.'],401);
           // return dd($attempt);
       // }

        
        $email = $request->get('email');
        $password = $request->get('password');

        $user = DB::table('users')->where(['email' => $email])->first();
        // dd($user->password);
        if(Hash::check($password,$user->password)){
            // dd($user);
            return response()->json(['status' => 'success','user'=>$user],200);
        }else{
            //dd('no');
            return response()->json(['status'=> 'unsuccessful','error' => 'Password incorrect!'],200);
        }

        // dd($user);






    }

    public function logout(){
        Auth::logout();
    }

}
