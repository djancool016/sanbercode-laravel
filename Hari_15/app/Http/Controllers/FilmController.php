<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Http\UploadedFile;  
use DB;

class FilmController extends Controller
{
    public function index(){
        // mengambil data dari table film
        $film = DB::table('film')
        ->join('genre','film.genre_id','=','genre.id')
        ->select('film.*','genre.nama as genre')
        ->get();

        $genre = DB::table('genre')->get();

        // mengirim data film ke view film
        return view('halaman.film')
        ->with('film',$film)
        ->with('genre',$genre);
    }

    public function store(Request $request){
        
        $request->validate([
            'poster.*' => 'mimes:jpeg,png,jpg,gif,svg',
        ]);

        if($file = $request->hasFile('poster')) {               
            $file = $request->file('poster') ;
            $fileName = $file->getClientOriginalName() ;
            $destinationPath = public_path().'/poster' ;
            $file->move($destinationPath,$fileName);
        }

        DB::table('film')->insert([
            'judul' => $request->judul,
            'tahun' => $request->tahun,
            'genre_id' => $request->genre,
            'ringkasan' => $request->ringkasan,
            'poster' => $request->poster
        ]);
        return redirect('/film');
    }

    public function destroy($id){
        echo "alert('hello');";
        DB::table('film')->where('id',$id)->delete();
        return redirect('/film');
    }
    public function edit($id){
        $film_edit = DB::table('film')->where('id',$id)->get();
        $genre = DB::table('genre')->get();
        return view('halaman.filmedit')
        ->with('film_edit',$film_edit);
    }

}
