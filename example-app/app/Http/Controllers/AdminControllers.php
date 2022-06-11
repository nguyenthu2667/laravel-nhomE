<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;
use App\Models\Social;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;


class AdminControllers extends Controller
{
    public function homeAdmin()
{
return view('admin.adminhome');
}
public function viewCreatePost()
{
return view('admin.createpost');
}
public function login_facebook(){
    return Socialite::driver('facebook')->redirect();
    }
    
    public function callback_facebook(){
    $provider = Socialite::driver('facebook')->user();
    $account = Social::where('provider','facebook')->where('provider_user_id',$provider->getId())->first();
    if($account){
    //login in vao trang quan tri
    $account_name = Login::where('id',$account->user)->first();
    Session::put('name',$account_name->name);
    Session::put('id',$account_name->id);
    return redirect('auth.pagehome')->with('message', 'Đăng nhập Admin thành công');
    }else{
    
    $hieu = new Social([
    'provider_user_id' => $provider->getId(),
    'provider' => 'facebook'
    ]);
    
    $orang = Login::where('email',$provider->getEmail())->first();
    
    if(!$orang){
    $orang = Login::create([
    
    'name' => $provider->getName(),
    'email' => $provider->getEmail(),
    'password' => ''
    
    ]);
    }
    $hieu->login()->associate($orang);
    $hieu->save();
    
    $account_name = Login::where('id',$account->user)->first();
    
    Session::put('name',$account_name->name);
    Session::put('id',$account_name->id);
    return redirect('auth.pagehome')->with('message', 'Đăng nhập Admin thành công');
    }
    }
    public function getInFo($social)
    {
    //     $social=='facebook'||'google';
    //     switch( $social){
    //         case 'facebook':
    //             return Socialite::driver($social)->redirect();
    //             break;
    //             case 'google':
    //                 break;        }
                    return Socialite::driver($social)->redirect();
        
    }
    public function checkInFo($social)
    {
    $info = Socialite::driver($social)->user();
    dd($info);
    }
}
