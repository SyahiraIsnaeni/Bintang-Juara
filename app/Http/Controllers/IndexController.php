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
        $responsePengumumanPaudPrioritas = Http::get('http://paud-bintangjuara.test/api/post-pengumuman-prioritas-paud');
        $responseBeritaPaudPrioritas = Http::get('http://paud-bintangjuara.test/api/post-pengumuman-prioritas-paud');
        $responseKegiatanPaudPrioritas = Http::get('http://paud-bintangjuara.test/api/post-pengumuman-prioritas-paud');
        $responseArtikelPaudPrioritas = Http::get('http://paud-bintangjuara.test/api/post-pengumuman-prioritas-paud');

        $pengumumanPaud = $responsePengumumanPaud->json();
        $artikelPaud = $responseArtikelPaud->json();
        $kegiatanPaud = $responseKegiatanPaud->json();
        $beritaPaud = $responseBeritaPaud->json();
        $pengumumanPaudPrioritas = $responsePengumumanPaudPrioritas->json();
        $artikelPaudPrioritas = $responseArtikelPaudPrioritas->json();
        $kegiatanPaudPrioritas = $responseKegiatanPaudPrioritas->json();
        $beritaPaudPrioritas = $responseBeritaPaudPrioritas->json();
        return view('index', compact('pengumumanPaud', 'artikelPaud',
        'kegiatanPaud', 'beritaPaud', 'pengumumanPaudPrioritas', 'beritaPaudPrioritas',
        'artikelPaudPrioritas', 'kegiatanPaudPrioritas'));
    }

    public function detailPengumuman($slug){
        $responseDetailPengumumanPaud = Http::get('http://paud-bintangjuara.test/post-pengumuman-detail-paud/{slug}');

        $pengumumanDetailPaud = $responseDetailPengumumanPaud->json();

        return view('pengumuman', compact('pengumumanDetailPaud'));
    }

}
