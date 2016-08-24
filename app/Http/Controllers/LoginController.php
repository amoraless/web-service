<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User as User;
class LoginController extends Controller
{
    public function login(Request $request)
    {
    	$data=User::where('email',trim($request->email))
    			  ->where('password',sha1(trim($request->password)))
    			  ->get();
    	
    	if(count($data)==1){
    	
    		$message='Los datos del usuario son correctos';
    		$data=array('name'=>$data[0]->name,
    					'last_name'=>$data[0]->last_name,
    					'address'=>$data[0]->address,
    					'email'=>$data[0]->email);
    	
    	}else if(count($data)==0){
    	
    		$message='No existe un usuario con los datos ingresados';
    		$data=null;
    	
    	}
    	
    	return [ 'message'=>$message,
    			 'data'=>$data ];
    }
}
