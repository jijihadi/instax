<?php

namespace App\Http\Controllers;

use App\Models\relation;
use Illuminate\Http\Request;

use Auth;
use DB;

class RelationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $check = Relation::where('follows', $request->id)->where('user_id', Auth::user()->id)->get()->count();
        if ($check !=0) {
            Relation::where('follows', $request->id)->where('user_id', Auth::user()->id)->delete();
            return 'deleted';
        }
        try {
            $postProperty[ 'follows' ] = $request->id;
            $postProperty[ 'user_id' ] = Auth::user()->id;
            // input post property
            Relation::create( $postProperty );
            return 'added';
        } catch ( \Exception $e ) {
            DB::rollback();
            // return $e;
            return 'error';
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\relation  $relation
     * @return \Illuminate\Http\Response
     */
    public function show(relation $relation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\relation  $relation
     * @return \Illuminate\Http\Response
     */
    public function edit(relation $relation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\relation  $relation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, relation $relation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\relation  $relation
     * @return \Illuminate\Http\Response
     */
    public function destroy(relation $relation)
    {
        //
    }
}
