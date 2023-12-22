<?php

namespace App\Http\Controllers;

//return type View
use App\Models\Posts;
use App\Models\welcome2;
use App\Models\ShowKategori;
use Illuminate\View\View;
//return type redirectResponse
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class viewController extends Controller
{
    public function index(Request $request): View
    {
        $search = $request->cari_user;
        $posts = DB::table('posts')->orderBy(DB::raw('RAND()'))->where('title', 'LIKE', "%" . $search . "%")->paginate(4);
        $tampilan = DB::table('welcome2s')->get();
        //render view with posts
        return view('user', compact('posts', 'tampilan'));
    }
    public function show(string $id): View
    {
        $posts = posts::find($id);
        return view('halaman', compact('posts')); //compact(' - variabel - ')
    }
    public function berita1(request $request)
    {
        // Menggunakan Query Builder untuk mengambil semua data dari tabel products
        $products = DB::table('posts')->get();
        // Menggunakan Query Builder dengan kondisi tertentu
        if ($request->has('cari_berita')) {
            $result = DB::table('posts')->where('kategori', 'LIKE', 'berita')->where('title', 'LIKE', '%' . $request->cari_berita . '%')->get();
        } else {
            $result = DB::table('posts')->where('kategori', 'LIKE', 'berita')->get();
        }
        $result2 = DB::table('show_kategoris')->where('id', '=', '1')->get();
        return view('berita', compact('result', 'result2'));
    }
    public function show2(string $menu, request $request): View
    {
        $result = DB::table('show_kategoris')->where('kategori', $menu)->get();
        //  $kategori = $result->first()->kategori; // Mengambil nilai 'kategori' dari hasil query

        if ($request->has('cari_kategori')) {
            $db = DB::table('posts')->where('kategori', 'LIKE', '%' . $menu . '%')->where('title', 'LIKE', '%' . $request->cari_kategori . '%')->get();
        } else {
            $db = DB::table('posts')->where('kategori', 'LIKE', '%' . $menu . '%')->get();
        }
        // dd($db,$menu);

        return view('kategori', compact('result', 'db'));
    }
    public function search(Request $request)
    {
        $search = $request->search;
        $posts = DB::table('posts')->where('title', 'LIKE', "%" . $search . "%")->paginate(4);
        return view('user', compact('potss'));
    }
}
