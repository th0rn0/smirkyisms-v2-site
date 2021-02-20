<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use Validator;
use Socialite;
use Exception;
use Auth;

class SocialController extends Controller
{
    public function discordRedirect()
    {
        return Socialite::driver('discord')->redirect();
    }

    public function loginWithDiscord()
    {
        try {
    
            $user = Socialite::driver('discord')->user();
            $isUser = User::where('discord_id', $user->id)->first();
     
            if($isUser){
                Auth::login($isUser);
                return redirect('/dashboard');
            }else{
                $createUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'discord_id' => $user->id,
                    'password' => encrypt(Hash::make(str_random(8)))
                ]);
    
                Auth::login($createUser);
                return redirect('/dashboard');
            }
    
        } catch (Exception $exception) {
            dd($exception->getMessage());
        }
    }
}