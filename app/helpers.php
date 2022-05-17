<?php

function allbykey( $table, $key, $id ) {
    $comm = DB::table( $table )
    ->where( $key, $id ) // Getting the Authenticated user id
    ->get();
    if ( $comm != null ) {
        return $comm;
    } elseif ( $comm == null ) {
        return array();
    }
}

function limitbykey( $table, $key, $id, $limit ) {
    $comm = DB::table( $table )
    ->where( $key, $id ) // Getting the Authenticated user id
    ->limit( $limit )
    ->get();
    if ( $comm != null ) {
        return $comm;
    } elseif ( $comm == null ) {
        return array();
    }
}

function allby2id( $table, $key, $key2, $id, $id2 ) {
    $comm = DB::table( $table )
    ->where( $key, $id ) // Getting the Authenticated user id
    ->where( $key2, $id2 ) // Getting the Authenticated user id
    ->get();
    if ( $comm != null ) {
        return $comm;
    } elseif ( $comm == null ) {
        return array();
    }
}

function namabyid( $table, $field, $id ) {
    $comm = DB::table( $table )
    ->where( 'id', $id ) // Getting the Authenticated user id
    ->get()->toArray();
    if ( $comm != null ) {
        return $comm[ 0 ]->$field;
    } elseif ( $comm == null ) {
        return '0';
    }
}

function countbykey( $table, $idname, $id ) {
    $comm = DB::table( $table )
    ->where( $idname, $id ) // Getting the Authenticated user id
    ->get()->toArray();
    if ( $comm != null ) {
        return count( $comm );
    } elseif ( $comm == null ) {
        return '0';
    }
}

function sexis( $val ) {
    if ( $val != 1 ) {
        return 'Wanita';
    } elseif ( $val == 1 ) {
        return 'Pria';
    }
}

function smallpp( $val ) {
    if ( $val ==  '' || $val==null ) {
        return "<img src = ".asset('/upload/profile/default.jpg')." alt = 'post-image' class = 'profile-photo-xs pull-left' />";
    }
    if ( $val !=  '' ) {
        return "<img src = ".asset('/upload/profile') . '/' . $val ." alt = 'post-image' class = 'profile-photo-xs pull-left' />";
    }
}

function bilanganbulat( $teks )
 {
    $teks = preg_replace( '/[^0-9]/', '', $teks );
    return $teks;
}

function tgl_indo( $date )
 {
    $BulanIndo = array( 'Januari', 'Februari', 'Maret',
    'April', 'Mei', 'Juni',
    'Juli', 'Agustus', 'September',
    'Oktober', 'November', 'Desember' );
    $tahun = substr( $date, 0, 4 );
    $bulan = substr( $date, 5, 2 );
    $tgl = substr( $date, 8, 2 );
    $result = $tgl . ' ' . $BulanIndo[ ( int ) $bulan - 1 ] . ' ' . $tahun;
    // $result = '0';
    return ( $result );
}

function bulan_indo( $date )
 {
    $BulanIndo = array( 'Januari', 'Februari', 'Maret',
    'April', 'Mei', 'Juni',
    'Juli', 'Agustus', 'September',
    'Oktober', 'November', 'Desember' );
    $bulan = $date;
    $result = $BulanIndo[ ( int ) $bulan - 1 ];
    return ( $result );
}

function penyebut( $nilai )
 {
    $nilai = abs( $nilai );
    $huruf = array( '', 'satu', 'dua', 'tiga', 'empat', 'lima', 'enam', 'tujuh', 'delapan', 'sembilan', 'sepuluh', 'sebelas' );
    $temp = '';
    if ( $nilai < 12 ) {
        $temp = ' ' . $huruf[ $nilai ];
    } else if ( $nilai < 20 ) {
        $temp = penyebut( $nilai - 10 ) . ' belas';
    } else if ( $nilai < 100 ) {
        $temp = penyebut( $nilai / 10 ) . ' puluh' . penyebut( $nilai % 10 );
    } else if ( $nilai < 200 ) {
        $temp = ' seratus' . penyebut( $nilai - 100 );
    } else if ( $nilai < 1000 ) {
        $temp = penyebut( $nilai / 100 ) . ' ratus' . penyebut( $nilai % 100 );
    } else if ( $nilai < 2000 ) {
        $temp = ' seribu' . penyebut( $nilai - 1000 );
    } else if ( $nilai < 1000000 ) {
        $temp = penyebut( $nilai / 1000 ) . ' ribu' . penyebut( $nilai % 1000 );
    } else if ( $nilai < 1000000000 ) {
        $temp = penyebut( $nilai / 1000000 ) . ' juta' . penyebut( $nilai % 1000000 );
    } else if ( $nilai < 1000000000000 ) {
        $temp = penyebut( $nilai / 1000000000 ) . ' milyar' . penyebut( fmod( $nilai, 1000000000 ) );
    } else if ( $nilai < 1000000000000000 ) {
        $temp = penyebut( $nilai / 1000000000000 ) . ' trilyun' . penyebut( fmod( $nilai, 1000000000000 ) );
    }
    return $temp;
}

function terbilang( $nilai )
 {
    if ( $nilai < 0 ) {
        $hasil = 'minus ' . trim( penyebut( $nilai ) );
    } else {
        $hasil = trim( penyebut( $nilai ) );
    }
    return ucfirst( $hasil ) . ' Rupiah';
}