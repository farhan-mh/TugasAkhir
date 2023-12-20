<?php
namespace App\Http\Controllers;

//import Model "Post
use App\Models\Posts;
//return type View
use Illuminate\View\View;
//return type redirectResponse
use App\Models\ShowKategori;
use Illuminate\Http\Request;
use App\Models\tesUPdateDelete;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

//limit
// use Illuminate\Support\Str;
class blogController extends Controller {

    public function index(Request $request): View {
        //get posts
        $search = $request->cari_admin;
        $posts = DB::table('posts')->where('title','LIKE',"%".$search."%")
        ->orwhere('kategori','LIKE',"%".$search."%")->orderBy('title', 'desc')->paginate(5);
        $tambahKategori = ShowKategori::all();
        //render view with posts
        return view('posts.index', compact('posts','tambahKategori'));
    }

    public function create(): View {
        $kategoris = ShowKategori::all();
        // foreach($kategoris as $k){
        //     $kategori = $k->kategori;
        // }
        return view('posts.create' , compact('kategoris'));
    }
    public function edit(string $id): View {
        $post = posts::findOrFail($id);
        $kategorisEdit = ShowKategori::all();
        return view('posts.edit', compact('post','kategorisEdit'));
    }
    public function show(string $id): View {
        $posts = posts::findOrFail($id);
        return view('posts.show', compact('posts'));//compact(' - variabel - ')
    }
    // -create
    public function store(Request $request): RedirectResponse {
        //validate form
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'title' => 'required|min:5',
            'content' => 'required|min:10',
            'kategori' => 'required|min:4'
        ]);
        //upload image
        $image = $request->file('image');
        $image->storeAs('public/posts', $image->hashName());
        //create post
        Posts::create([
            'image' => $image->hashName(),
            'title' => $request->title,
            'content' => $request->content,
            'kategori' => $request->kategori
        ]);
        //redirect to index
        return redirect()->route('post.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
    // -edit
    public function update(Request $request, $id): RedirectResponse {
    //validate form
    $this->validate($request, [
    'image' => 'image|mimes:jpeg,jpg,png|max:2048',
    'title' => 'required|min:5',
    'content' => 'required|min:10'
    ]);
    //get post by ID
    $post = Posts::findOrFail($id);
    //check if image is uploaded
    if ($request->hasFile('image')) {
    //upload new image
    $image = $request->file('image');
    $image->storeAs('public/posts', $image->hashName());
    //delete old image
    Storage::delete('public/posts/'.$post->image);
//update post with new image
$post->update([
    'image' => $image->hashName(),
    'title' => $request->title,
    'content' => $request->content,
    'kategori' => $request->kategori
    ]);
    } else {
    //update post without image
    $post->update([
    'title' => $request->title,
    'content' => $request->content,
    'kategori' =>$request->kategori
    ]);
    }
    //redirect to index
    return redirect()->route('post.index')->with(['success' => 'Data Berhasil Diubah!']);
    }
    // -hapus
    public function destroy(Posts $post) {
        $old_image = $post->image;
        $post->delete();
        if (!empty($old_image) && (Storage::disk('public'))->exists($old_image)) {
            Storage::disk('public')->delete($old_image);
        }
        return to_route('post.index');
    }

    public function tambahHapus(request $request){

        $validatedDataaa = $request->validate([
            'tambahBaru' => 'nullable|min:3',
        ]);

        $idDelete = $request->input('idHapus');
    // Menggunakan model untuk menyimpan data ke dalam database
        $cek = $request->input('tambahBaru');

   if(!empty($cek)){
    $tambah = new ShowKategori();
    $tambah->img = "download (3).png";
    $tambah->text = "tambahkan teks";
    $tambah->kategori = $request->input('tambahBaru');
    // dd($tambah);
    $tambah->save();
   }

//    dd($tambah,$validatedDataaa,$idDelete);

    // Hapus data dari database berdasarkan ID yang dipilih
    if (!empty($idDelete)) {
        ShowKategori::whereIn('id', $idDelete)->delete();
        // Ganti 'TesUpdateDelete' dengan model Anda dan 'id' dengan nama kolom ID di tabel.
    }
    return redirect()->route('post.index')->with(['success' => 'Data Berhasil Diubah!']);

    }
 
}