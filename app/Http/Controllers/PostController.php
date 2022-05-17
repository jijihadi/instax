<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Auth;

use App\Models\Post;
use App\Models\Media;

class PostController extends Controller {
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
        $postData = $request->all();

        //validate post data
        $this->validate( $request, [
            'content' => 'required',
            // 'tag' => 'required',
        ] );

        // echo '<pre>';
        // dd( $postData );

        try {
            DB::beginTransaction();
            DB::enableQueryLog();

            //get post property
            $postProperty[ 'content' ] = $request->content;
            $postProperty[ 'tag' ] = 'none';
            $postProperty[ 'user_id' ] = Auth::user()->id;
            // input post property
            $idp = Post::create( $postProperty )->id;

            //get post media
            $postMedia[ 'file' ] = '';
            // dd( $request->gambar );

            if ( $request->file != null ) {
                foreach ( $request->file as $imagefile ) {
                    $this->validate( $request, [
                        'file' => 'required'
                    ] );
                    $image = $imagefile;
                    $imageName = str_replace( '_', ' ', Auth::user()->name ).'_'.rand().'.'.$image->getClientOriginalExtension();
                    $destinationPath = public_path( '/upload/' );
                    $image->move( $destinationPath, $imageName );
                    $postMedia[ 'post_id' ] = $idp;
                    $postMedia[ 'file' ] = $imageName;
                    $postMedia[ 'type' ] = 'gambar';
                    // input post media
                    Media::create( $postMedia )->id;
                }
            }

            DB::commit();

            // dd( DB::getQueryLog() );
            //store status message
            Session::flash( 'success', 'Postingan anda berhasil di upload!!' );
            return redirect( '/home' );
        } catch ( \Exception $e ) {
            DB::rollback();
            // something went wrong
            // Session::flash( 'error', 'Terjadi kesalahan saat input data!' );
            Session::flash( 'error', $e->getMessage() );

            // dd( $postData);

            return redirect( '/home' );

        }
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\Models\Post  $post
    * @return \Illuminate\Http\Response
    */

    public function show( Post $post ) {
        //
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Post  $post
    * @return \Illuminate\Http\Response
    */

    public function edit( Post $post ) {
        //
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\Post  $post
    * @return \Illuminate\Http\Response
    */

    public function update( Request $request, Post $post ) {
        //
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\Post  $post
    * @return \Illuminate\Http\Response
    */

    public function destroy( Post $post ) {
        //
    }
}
