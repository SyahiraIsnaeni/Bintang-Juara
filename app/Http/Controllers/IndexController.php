<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class IndexController extends Controller
{

    public function index(){
        $responsePengumumanPaud = Http::get('http://paud.bintangjuara.sch.id/api/post-pengumuman-paud');
        $responseKegiatanPaud = Http::get('http://paud.bintangjuara.sch.id/api/post-kegiatan-paud');
        $responseArtikelPaud = Http::get('http://paud.bintangjuara.sch.id/api/post-artikel-paud');
        $responseBeritaPaud = Http::get('http://paud.bintangjuara.sch.id/api/post-berita-paud');
        $responseBeritaSD = Http::get('http://sd.bintangjuara.sch.id/api/post-berita');
        $responsePengumumanSD = Http::get('http://sd.bintangjuara.sch.id/api/post-pengumuman');
        $responseArtikelSD = Http::get('http://sd.bintangjuara.sch.id/api/post-artikel');
        $responseKegiatanSD = Http::get('http://sd.bintangjuara.sch.id/api/post-kegiatan');

        $pengumumanPaud = $responsePengumumanPaud->json();
        $artikelPaud = $responseArtikelPaud->json();
        $kegiatanPaud = $responseKegiatanPaud->json();
        $beritaPaud = $responseBeritaPaud->json();
        $pengumumanSD = $responsePengumumanSD->json();
        $artikelSD = $responseArtikelSD->json();
        $kegiatanSD = $responseKegiatanSD->json();
        $beritaSD = $responseBeritaSD->json();
        return view('index', compact('pengumumanPaud', 'artikelPaud',
        'kegiatanPaud', 'beritaPaud', 'pengumumanSD', 'artikelSD', 'beritaSD', 'kegiatanSD'));
    }

}
