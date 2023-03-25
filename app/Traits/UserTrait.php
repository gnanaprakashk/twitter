<?php

namespace App\Traits;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

trait UserTrait
{
    /**
     * Return the users suggestion to follow
     *
     * @param null
     * @return array
     */
    public function whoToFollow() : Array
    {
        //add auth user to the list so he won't be seen on the suggestion list
        $authUser = array('follower_id'=>Auth::user()->id);
        $otherUser = Auth::user()->following()->select('follower_id')->get()->toArray();
        array_push($otherUser,$authUser);
        $userSuggestionList = User::whereNotIn('id',$otherUser)->get()->toArray();
        return $userSuggestionList;
    }
}
