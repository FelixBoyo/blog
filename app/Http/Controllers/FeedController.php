<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class FeedController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {


        $followingIds =auth()-> user()->followings()->pluck('user_id');


        $ideas = Idea::whereIn('user_id', $followingIds)->latest();
            
        
        //Where content like %value%
        if(request()->has ('search')){
            $ideas = $ideas->where('content','like','%'.request()->get('search','').'%');

        }
        return view('dashboard', [
            'ideas' =>$ideas ->paginate(5)
        ]);
    }
}
