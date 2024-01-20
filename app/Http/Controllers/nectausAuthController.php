<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Myuser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;
class nectausAuthController extends Controller
{

//     public function register(Request $request)
//     {
//         // Validation logic here
// // dd($request);
//         $user = Myuser::create([
//             'fullName' => $request->input('fullName'),
//             'NationalId' => $request->input('NationalId'),
//             'email' => $request->input('email'),
//             'passwords' => bcrypt($request->input('passwords')),
//             'role' => $request->input('role'),
//         ]);

//         // Login logic here
//         // Auth::login($user); 

//         return redirect('/auth');
//     }
    public function register(Request $request)
    {
        // Validation logic here
        // dd($request);
        return   Myuser::create([
            'fullName' => $request->input('fullName'),
            'NationalId' => $request->input('NationalId'),
            'email' => $request->input('email'),
            'passwords' => Hash::make($request->input('passwords')),
            'role' => $request->input('role'),
        ]);

       
         
    }


    public function login(Request $request)
    {
        // Auth::attempt([
        //     'email' => $request->input('email'),
        //     'passwords' => $request->input('passwords')            
        // ]);
        
       if( !Auth::attempt($request->only('email', 'passwords')))
       {
        
        return response([
            'message'=> 'wrong credetial provided',
            
        ],Response::HTTP_UNAUTHORIZED);
       }
       $user= Auth::Myuser();
       return $user;

    }

    
    public function user(){
        return'Authanticated user is in succeffuly';
    }

}