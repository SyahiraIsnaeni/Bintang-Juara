<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class IndexController extends Controller
{

    public function index(){
        $responsePengumumanPaud = Http::get('http://paud-bintangjuara.test/api/post-pengumuman-paud');
        $responseKegiatanPaud = Http::get('http://paud-bintangjuara.test/api/post-kegiatan-paud');
        $responseArtikelPaud = Http::get('http://paud-bintangjuara.test/api/post-artikel-paud');
        $responseBeritaPaud = Http::get('http://paud-bintangjuara.test/api/post-berita-paud');

        $pengumumanPaud = $responsePengumumanPaud->json();
        $artikelPaud = $responseArtikelPaud->json();
        $kegiatanPaud = $responseKegiatanPaud->json();
        $beritaPaud = $responseBeritaPaud->json();
        return view('index', compact('pengumumanPaud', 'artikelPaud',
        'kegiatanPaud', 'beritaPaud'));
    }

    public function show($slug){
        $responseDetailPengumumanPaud = Http::get('http://paud-bintangjuara.test/api/post-pengumuman-detail-paud/', ['slug' => $slug]);

        $detailPengumumanPaud = $responseDetailPengumumanPaud->successful();
        dd($detailPengumumanPaud);
        return view('pengumuman', compact('detailPengumumanPaud'));
    }

}
