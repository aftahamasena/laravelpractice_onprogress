<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function show()
    {
        $author = DB::table('authors')->get();
        dd($author);
    }
    public function find()
    {
        $author = DB::table('authors')->where('author_name', 'aftahamasena')->first();
        dd($author);
    }
    public function add()
    {
        DB::table('authors')->create(
            [
                'author_id' => 'bfee773d-c090-4fc6-988c-e86140bc67c2',
                'author_name' => 'donosuper',
                'author_description' => 'buku dono londo',
            ]
        );
    }

   
    // public function insert () {

    // };
}
