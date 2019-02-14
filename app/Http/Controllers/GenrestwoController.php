<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class GenrestwoController extends Controller
{
  public function index(Request $request)
  {
    $query = DB::table('tracks')
      ->select('tracks.Name', 'albums.Title', 'artists.Name as Artist', 'tracks.UnitPrice', 'genres.Name as Genre')
      ->join('albums', 'tracks.AlbumId', '=', 'albums.AlbumId')
      ->join('genres', 'tracks.GenreId', '=', 'genres.GenreId')
      ->join('artists', 'albums.ArtistId', '=', 'artists.ArtistId'); 

    if ($request->query('genres')) {
      $query->where('genres.Name', '=', $request->query('genre'));
    }

    $tracks = $query->get();

    return view('tracks', [
      'tracks' => $tracks,
      'genre' => $request->query('genre')
    ]);
  }
}

