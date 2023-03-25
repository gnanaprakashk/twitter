<?php

namespace App\Http\Controllers;

use Exception;
use App\Traits\UserTrait;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\{Tweet};
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    use UserTrait;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return View
     */
    public function index() : View
    {
        try{
            $followers = Auth::user()->following()->select('follower_id')->get()->toArray();
            $tweetList = Tweet::with('user')->whereIn('user_id',$followers)->latest()->get();
            $user = Auth::user();
            return view('feeds.home',['user'=>$user,'tweets'=>$tweetList,'follwersSuggestions'=>$this->whoToFollow()]);
        } catch (Exception $e){
            //log the exception to debug
            return view('errors.404');
        }
    }
}
