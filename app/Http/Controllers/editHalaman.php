<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use App\Models\header;
use App\Models\welcome;
use App\Models\welcome2;
use Illuminate\View\View;
//return type View
use App\Models\footerModel;
//return type redirectResponse
use App\Models\ShowKategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;
use Symfony\Contracts\Service\Attribute\Required;

class editHalaman extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pos = DB::table('show_kategoris')->where('id','>','1')->get();
        $pos2 = DB::table('show_kategoris')->where('id','=','1')->get();
        $home = DB::table('welcome2s')->get();
        $header = DB::table('headers')->where('id','=','1')->get();
        $header2  = DB::table('headers')->where('id','>','1')->get();
        $footer = DB::table('footer_models')->get();
        return view('posts.editHalaman',compact('pos','pos2','home','header','header2','footer'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateMultiple(Request $request) {
        // $dd = $request->input('post_id');
        // dd($dd);
        $input2 = $request->all();
        $tesID = [
            $id_welcome = $request->input('id_welcome'),
        ];
        $v = $request->validate([
            'gambarLogo.*'=> 'image|mimes:jpeg,jpg,png|max:2048',
        ]);
        
        foreach ($tesID as $key2 => $id2) {
            $gambarLogo = $request->file('gambarLogo')[$key2]  ?? null;
            $judul = $input2['judul'];
            $text1 = $input2['text1'];
            $text2 = $input2['text2'];
            $text3 = $input2['text3'];
            $text4 = $input2['text4'];
        
            $images = Welcome2::pluck('img');
            $ambilkolom = welcome2::find($id2);
        // dd($id2);
            if ($gambarLogo) {
                $imageName = $gambarLogo->hashName();
                $gambarLogo->storeAs('public/lgo', $imageName);
                if ($images) {
                    Storage::delete('public/lgo/' . $ambilkolom[0]->img);
                    // $ambilkolom->img = Property [img] does not exist on this collection instance
                }
                 $imageName;
            }
            // [0] mengambil nilai untuk menhilangkan tanda [" "] //
            $tes = [
                'img' => $gambarLogo ? $imageName : $images[0],
                'judul' => $judul[$key2] ?? [0],
                'text1' => $text1[$key2] ?? [0],
                'text2' => $text2[$key2] ?? [0],
                'text3' => $text3[$key2] ?? [0],
                'text4' => $text4[$key2] ?? [0],
            ];
            $ss =  DB::table('welcome2s')->where('id', '1')->update($tes);  
        }        

// validasi //
$validatedData = $request->validate([
    'warna.*'  => 'required|min:5',
    'menu.*' => 'required',
    'judulWeb.*' => 'required|min:5',
    'logo.*' => 'required|file|mimes:ico|max:2048',

    // 'kategori.*',
    'text.*' => 'required|min:10',
    'img.*' => 'image|mimes:jpeg,jpg,png|max:2048',

    'teksFooter.*' => 'required',
    'bgFooter.*' => 'required',
    'svgFooter.*' => 'file|mimes:svg|max:2048', // Menentukan bahwa file harus berekstensi .svg, maksimal ukuran 2MB (2048 KB)
    'svgFooter2.*' => 'file|mimes:svg|max:2048',
    'svgFooter3.*' => 'file|mimes:svg|max:2048',
    'linkFooter.*'=> 'required',
    'linkFooter2.*' => 'required',
    'linkFooter3.*'=> 'required',
]);

// dd($request->all());
// - kategoris - //
$tesid3 = $request->input('post_id');

foreach ($tesid3 as $key => $id) {
    $postData = [
        // 'kategori' => $request->input('kategori.' . $key),
        'text' => $request->input('text.' . $key),
    ];

    // Ambil model ShowKategori berdasarkan ID
    $kategori = ShowKategori::find($id);

    if ($kategori) {
        if ($request->hasFile('img.' . $key)) {
            $image = $request->file('img.' . $key);
            $image->storeAs('public/pos', $image->hashName());

            // Hapus gambar lama jika ada
            if ($kategori->img) {
                Storage::delete('public/pos/' . $kategori->img);
            }
            $postData['img'] = $image->hashName();
        }

        // Update data pada model ShowKategori berdasarkan ID
        $kategori->update($postData);
    }
}

        
 // - header - //
$tesid2 = $request->input('id_header');

foreach ($tesid2 as $key3 => $idh) {
    $postData3 = [
        'txt' => $request->input('warna.' . $key3),
        'menu' => $request->input('menu.' . $key3),
        'judulWeb' => $request->input('judulWeb.' . $key3),
    ];

    $header = header::findOrFail($idh); // Ambil data kategori berdasarkan ID

    if ($request->hasFile('logo.' . $key3)) {
        $lgo = $request->file('logo.' . $key3);
        $lgo->storeAs('public/pos', $lgo->hashName());

        // Hapus gambar lama jika ada
        if ($header->logo) {
            Storage::delete('public/pos/' . $header->logo);
        }

        $postData3['logo'] = $lgo->hashName();
    }

    // Update each post by ID
    // dd($request->all());
    $header->update($postData3);
}

//  - footer - //
$tesid4 =  $request->input('id_footer');

foreach($tesid4 as $key4 => $idf){
    $posDataFooter = [
        'teksFooter' => $request->input('teksFooter.' . $key4),
        'warnaBg' => $request->input('bgFooter.' . $key4),
        'link' => $request->input('linkFooter.' . $key4),
        'link2' => $request->input('linkFooter2.' . $key4),
        'link3' => $request->input('linkFooter3.' . $key4)
    ];
    
    $ambilFooter = footerModel::find($idf);
    if ($request->hasFile('svgFooter.' . $key4)) {
        $svgf = $request->file('svgFooter.' . $key4);
        // Simpan file SVG baru
        $svgf->storeAs('public/svgUp', $svgf->hashName());
        // Hapus file SVG lama jika ada
        if ($ambilFooter->svg) {
            Storage::delete('public/svgUp/' . $ambilFooter->svg);
        }
        $ambilFooter->svg = $svgf->hashName();
    }

    if ($request->hasFile('svgFooter2.' . $key4)) {
        $svgf2 = $request->file('svgFooter2.' . $key4);
    // ???
        if ($svgf2->storeAs('public/svgUp', $svgf2->hashName())) {
            // Pastikan hash yang dihasilkan tidak null
            $hashName = $svgf2->hashName();
            if ($ambilFooter->svg2) {
                Storage::delete('public/svgUp/' . $ambilFooter->svg2);
            }
            $ambilFooter->svg2 = $hashName;
        } else {
            // Penanganan jika gagal menyimpan file
        }
    }
    
    if ($request->hasFile('svgFooter3.' . $key4)) {
        $svgf3 = $request->file('svgFooter3.' . $key4);
        // Simpan file SVG baru
        $svgf3->storeAs('public/svgUp', $svgf3->hashName());
        // Hapus file SVG lama jika ada
        if ($ambilFooter->svg3) {
            Storage::delete('public/svgUp/' . $ambilFooter->svg3);
        }
        $ambilFooter->svg3 = $svgf3->hashName();
    }
    // dd($validatedData,$request->svgFooter, $request->svgFooter2,$request->svgFooter3, $ambilFooter);

    // Update data footer
    $ambilFooter->update($posDataFooter);
}


        return redirect()->route('editHalaman.index')->with(['success' => 'Data Berhasil Diubah!']);
    }
    
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
