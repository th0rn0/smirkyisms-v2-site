<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use App\Models\User;
use Carbon\Carbon;
use Validator;
use Socialite;
use Exception;
use Auth;


use LaravelRestcord\Discord;
use LaravelRestcord\Discord\ApiClient;

class SocialController extends Controller
{
    public function discordRedirect()
    {
        return Socialite::driver('discord')->scopes(['identify', 'guilds'])->redirect();
    }

    public function loginWithDiscord(Request $request)
    {
        try {
    
            $user = Socialite::driver('discord')->user();
            $isUser = User::where('discord_id', $user->id)->first();
            $request->session()->put(['did' => $user->token]);
     
            if($isUser){
                $api = new ApiClient($user->token);
                $discord = new Discord($api);
                Auth::login($isUser);
                return redirect('/dashboard');
            }else{
                $createUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'discord_id' => $user->id,
                    'password' => encrypt(Str::random(16)),
                    'email_verified_at' => Carbon::now()
                ]);
    
                Auth::login($createUser);
                return redirect('/dashboard');
            }
    
        } catch (Exception $exception) {
            echo 'something went wrong';
            dd($exception->getMessage());
        }
    }
}