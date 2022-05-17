<?php

namespace App\Http\Controllers;

use App\Models\Like;
use Illuminate\Http\Request;

use Auth;
use DB;

class LikeController extends Controller {
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function index() {
        //
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function create() {
        //
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */

    public function store( Request $request ) {
        $check = Like::where('post_id', $request->id)->where('user_id', Auth::user()->id)->get()->count();
        if ($check !=0) {
            Like::where('post_id', $request->id)->where('user_id', Auth::user()->id)->delete();
            return 'deleted';
        }
        try {
            $postProperty[ 'post_id' ] = $request->id;
            $postProperty[ 'user_id' ] = Auth::user()->id;
            // input post property
            Like::create( $postProperty );
            return 'added';
        } catch ( \Exception $e ) {
            DB::rollback();
            return 'error';
        }
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\Models\Like  $like
    * @return \Illuminate\Http\Response
    */

    public function show( Like $like ) {
        //
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Like  $like
    * @return \Illuminate\Http\Response
    */

    public function edit( Like $like ) {
        //
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\Like  $like
    * @return \Illuminate\Http\Response
    */

    public function update( Request $request, Like $like ) {
        //
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\Like  $like
    * @return \Illuminate\Http\Response
    */

    public function destroy( Like $like ) {
        //
    }
}
