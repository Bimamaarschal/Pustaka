<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use Dompdf\Dompdf;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\View\View;

class ArtikelController extends Controller
{
    public function index(): View
    {
        $itemsPerPage = 6;
        $statusdis = ['Artikel telah di review', 'artikel khusus'];

        $artikels = Artikel::whereIn('review', $statusdis)
            ->latest()
            ->paginate($itemsPerPage);

        return view ('artikel.index', compact('artikels'));
    }

    public function create(): View
    {
        return view('artikel.create');
    }

    public function store(Request $request): RedirectResponse
    {

        $this->validate($request, [
            'image'                      => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4048',
            'noartikel'                  => 'required',
            'judul'                      => 'required|max:80|regex:/^(?:\b[\w\s()\/\\:\'\-?&@#=\+!~%$\_"]{0,15}\b\s?)+[.\?]?[\w\s()\/\\:\'\-?&@#=\+!~%$\_"]{0,15}$/',
            'penulis'                    => 'required',
            'email'                      => 'required',
            'instansi'                   => 'required|max:200|regex:/^(?:\b[\w\s()\/\\:\'\-?&@#=\+!~%$\_"]{0,15}\b\s?)+[.\?]?[\w\s()\/\\:\'\-?&@#=\+!~%$\_"]{0,15}$/',
            'tanggal'                    => 'required',
            'jenis'                      => 'required',
            'kataketerangan'             => 'required|max:200|regex:/^(?:\b[\w\s()\/\\:\'\-?&@#=\+!~%$\_"]{0,15}\b\s?)+[.\?]?[\w\s()\/\\:\'\-?&@#=\+!~%$\_"]{0,15}$/',
            'abstrak'                    => 'required|max:1600',
            'katakunci'                  => 'required|max:200',
            'latarbelakang'              => 'required',
            'metode'                     => 'required',
            'hasil'                      => 'required',
            'pembahasan'                 => 'required',
            'simpulan'                   => 'required',
            'saran'                      => 'required',
            'referensi'                  => 'required',
        ], [
            'image.required'             => 'Mohon untuk tambahkan gambar format jpeg, png, jpg, gif, svg, maksimal 2048mb.',
            'image.image'                => 'Mohon untuk tambahkan gambar dengan format jpeg, png, jpg, gif, svg.',
            'image.mimes'                => 'Mohon untuk tambahkan gambar dengan format jpeg, png, jpg, gif, svg.',
            'image.max'                  => 'Ukuran gambar tidak boleh lebih dari 2048mb.',

            'noartikel.required'         => 'No artikel tidak boleh kosong.',

            'judul.required'             => 'Judul tidak boleh kosong.',
            'judul.max'                  => 'Judul tidak boleh lebih dari :max karakter.',
            'judul.regex'                => 'Perhatikan penulisan judul Anda',

            'penulis.required'           => 'Nama penulis tidak boleh kosong, pastikan data pada profil sudah benar.',

            'email.required'             => 'Nama penulis tidak boleh kosong, pastikan data pada profil sudah benar.',
            
            'instansi.required'          => 'Instansi tidak boleh kosong.',
            'instansi.max'               => 'Instansi tidak boleh lebih dari :max karakter.',
            'instansi.regex'             => 'Perhatikan penulisan data instansi Anda',

            'tanggal.required'           => 'Tanggal penulisan tidak boleh kosong, pastikan data sudah benar.',

            'jenis.required'             => 'Jenis jurnal tidak boleh kosong.',

            'kataketerangan.required'    => 'Kata keterangan tidak boleh kosong.',
            'kataketerangan.max'         => 'Kata keterangan tidak boleh lebih dari :max karakter.',
            'kataketerangan.regex'       => 'Perhatikan penulisan kata keterangan Anda',

            'abstrak.required'           => 'Kata abstrak tidak boleh kosong.',
            'abstrak.max'                => 'Kata abstrak tidak boleh lebih dari :max karakter.',

            'katakunci.required'         => 'Kata kunci abstrak tidak boleh kosong.',
            'katakunci.max'              => 'Kata kunci abstrak tidak boleh lebih dari :max karakter.',

            'latarbelakang.required'     => 'Latar belakang tidak boleh kosong.',

            'metode.required'            => 'Metode tidak boleh kosong.',

            'hasil.required'             => 'Hasil tidak boleh kosong.',

            'pembahasan.required'        => 'Pembahasan tidak boleh kosong.',

            'simpulan.required'          => 'Simpulan tidak boleh kosong.',

            'saran.required'             => 'Saran tidak boleh kosong.',

            'referensi.required'         => 'Referensi tidak boleh kosong.',
        ]);

        
        $review = "Belum di review";

        $image = $request->file('image');
        $image->storeAs('public/artikel', $image->hashName());
        $id = Str::random(121);
        $newPost = Artikel::create([
            'id'                        => $id,
            'image'                     => $image->hashName(),
            'noartikel'                 => $request->noartikel,
            'judul'                     => $request->judul,
            'penulis'                   => $request->penulis,
            'email'                     => $request->email,
            'instansi'                  => $request->instansi,
            'tanggal'                   => $request->tanggal,
            'jenis'                     => $request->jenis,
            'kataketerangan'            => $request->kataketerangan,
            'abstrak'                   => $request->abstrak,
            'katakunci'                 => $request->katakunci,
            'latarbelakang'             => $request->latarbelakang,
            'metode'                    => $request->metode,
            'hasil'                     => $request->hasil,
            'pembahasan'                => $request->pembahasan,
            'simpulan'                  => $request->simpulan,
            'saran'                     => $request->saran,
            'referensi'                 => $request->referensi,
            'review'                    => $review,
        ]);

        if (!$newPost) {
            return abort(404);
        }
        $savedId = $newPost->id;
        return redirect()->route('artikels.review', ['id' => $savedId])->with('success', 'Data Artikel Anda');
    }

    public function review(string $id): View
    {
        $artikel = Artikel::findOrFail($id);
        if (!$artikel) {
            return abort(404);
        }

        return view('artikel.review', ['artikel' => $artikel]);
    }

    public function convertToPDF(Request $request)
    {
        $artikelId          = $request->input('id');
        $artikel            = Artikel::find($artikelId);
        $dompdf             = new Dompdf();

        $dompdf             ->  loadHtml(view('artikel.pdf_template', ['artikel' => $artikel]));
        $dompdf             ->  setPaper('A4', 'portrait');
        $dompdf             ->  render();

        $pdfFilename        = time() . '.pdf';
        $pdfPath            = 'public/pdfartikel/' . $pdfFilename;
        Storage::put($pdfPath, $dompdf->output());

        $artikel            ->  pdfhasil  = $pdfFilename;
        $artikel            -> save();

        return redirect()->route('artikels.review2', ['id' => $artikelId]);
    }

    public function convertToPDF2(Request $request)
    {
        $artikelId = $request->input('id');
        $artikel = Artikel::find($artikelId);

        if (!$artikel) {
            return abort(404);
        }

        if ($artikel->pdfhasil) {
            Storage::delete('public/pdfartikel/' . $artikel->pdfhasil);
        }

        $dompdf = new Dompdf();

        $dompdf->loadHtml(view('artikel.pdf_template', ['artikel' => $artikel]));
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        $pdfFilename = time() . '.pdf';
        $pdfPath = 'public/pdfartikel/' . $pdfFilename;
        Storage::put($pdfPath, $dompdf->output());

        $artikel->pdfhasil = $pdfFilename;
        $artikel->save();

        return redirect()->route('artikels.review2', ['id' => $artikelId]);
    }

    public function edit(string $id): View
    {
        $artikel = Artikel::findOrFail($id);
        
        if (!$artikel) {
            return abort(404);
        }

        return view('artikel.edit', ['artikel' => $artikel]);
    }

    public function review2(string $id): View
    {
        $artikel = Artikel::findOrFail($id);

        if (!$artikel) {
            return abort(404);
        }

        return view('artikel.review2', ['artikel' => $artikel]);
    }

    public function review3(string $id): View
    {
        $artikel = Artikel::findOrFail($id);

        if (!$artikel) {
            return abort(404);
        }

        return view('artikel.review3', ['artikel' => $artikel]);
    }

    public function update(Request $request, string $id)
    {
        $artikel = Artikel::findOrFail($id);
        if (!$artikel) {
            return abort(404);
        }

        $this->validate($request, [
            'image'                      => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4048',
            'noartikel'                  => 'required',
            'judul'                      => 'required|max:80|regex:/^(?:\b[\w\s()\/\\:\'\-?&@#=\+!~%$\_"]{0,15}\b\s?)+[.\?]?[\w\s()\/\\:\'\-?&@#=\+!~%$\_"]{0,15}$/',
            'penulis'                    => 'required',
            'email'                      => 'required',
            'instansi'                   => 'required|max:200|regex:/^(?:\b[\w\s()\/\\:\'\-?&@#=\+!~%$\_"]{0,15}\b\s?)+[.\?]?[\w\s()\/\\:\'\-?&@#=\+!~%$\_"]{0,15}$/',
            'tanggal'                    => 'required',
            'jenis'                      => 'required',
            'kataketerangan'             => 'required|max:200|regex:/^(?:\b[\w\s()\/\\:\'\-?&@#=\+!~%$\_"]{0,15}\b\s?)+[.\?]?[\w\s()\/\\:\'\-?&@#=\+!~%$\_"]{0,15}$/',
            'abstrak'                    => 'required|max:1600',
            'katakunci'                  => 'required|max:200',
            'latarbelakang'              => 'required',
            'metode'                     => 'required',
            'hasil'                      => 'required',
            'pembahasan'                 => 'required',
            'simpulan'                   => 'required',
            'saran'                      => 'required',
            'referensi'                  => 'required',
        ], [
            'image.required'             => 'Mohon untuk tambahkan gambar format jpeg, png, jpg, gif, svg, maksimal 2048mb.',
            'image.image'                => 'Mohon untuk tambahkan gambar dengan format jpeg, png, jpg, gif, svg.',
            'image.mimes'                => 'Mohon untuk tambahkan gambar dengan format jpeg, png, jpg, gif, svg.',
            'image.max'                  => 'Ukuran gambar tidak boleh lebih dari 2048mb.',

            'noartikel.required'         => 'No artikel tidak boleh kosong.',

            'judul.required'             => 'Judul tidak boleh kosong.',
            'judul.max'                  => 'Judul tidak boleh lebih dari :max karakter.',
            'judul.regex'                => 'Perhatikan penulisan judul Anda',

            'penulis.required'           => 'Nama penulis tidak boleh kosong, pastikan data pada profil sudah benar.',

            'email.required'             => 'Nama penulis tidak boleh kosong, pastikan data pada profil sudah benar.',
            
            'instansi.required'          => 'Instansi tidak boleh kosong.',
            'instansi.max'               => 'Instansi tidak boleh lebih dari :max karakter.',
            'instansi.regex'             => 'Perhatikan penulisan data instansi Anda',

            'tanggal.required'           => 'Tanggal penulisan tidak boleh kosong, pastikan data sudah benar.',

            'jenis.required'             => 'Jenis jurnal tidak boleh kosong.',

            'kataketerangan.required'    => 'Kata keterangan tidak boleh kosong.',
            'kataketerangan.max'         => 'Kata keterangan tidak boleh lebih dari :max karakter.',
            'kataketerangan.regex'       => 'Perhatikan penulisan kata keterangan Anda',

            'abstrak.required'           => 'Kata abstrak tidak boleh kosong.',
            'abstrak.max'                => 'Kata abstrak tidak boleh lebih dari :max karakter.',

            'katakunci.required'         => 'Kata kunci abstrak tidak boleh kosong.',
            'katakunci.max'              => 'Kata kunci abstrak tidak boleh lebih dari :max karakter.',

            'latarbelakang.required'     => 'Latar belakang tidak boleh kosong.',

            'metode.required'            => 'Metode tidak boleh kosong.',

            'hasil.required'             => 'Hasil tidak boleh kosong.',

            'pembahasan.required'        => 'Pembahasan tidak boleh kosong.',

            'simpulan.required'          => 'Simpulan tidak boleh kosong.',

            'saran.required'             => 'Saran tidak boleh kosong.',

            'referensi.required'         => 'Referensi tidak boleh kosong.',
        ]);

        if ($request->hasFile('image')) {

            $image = $request->file('image');

            $image->storeAs('public/artikel/', $image->hashName());
            Storage::delete('public/artikel/' . $artikel->image);

            $artikel ->image = $image->hashName();
        }

        if ($request->hasFile('pdfhasil')) {
            $pdfhasil = $request->file('pdfhasil');
            $pdfhasil->storeAs('public/pdfartikel/', $pdfhasil->hashName());

            if ($artikel->pdfhasil) {
                Storage::delete('public/pdfartikel/' . $artikel->pdfhasil);
            }

            $artikel ->pdfhasil = $pdfhasil->hashName();
        }

        $artikel            ->noartikel         = $request->input('noartikel');
        $artikel            ->judul             = $request->input('judul');
        $artikel            ->penulis           = $request->input('penulis');
        $artikel            ->email             = $request->input('email');
        $artikel            ->instansi          = $request->input('instansi');
        $artikel            ->tanggal           = $request->input('tanggal');
        $artikel            ->jenis             = $request->input('jenis');
        $artikel            ->kataketerangan    = $request->input('kataketerangan');
        $artikel            ->abstrak           = $request->input('abstrak');
        $artikel            ->katakunci         = $request->input('katakunci');
        $artikel            ->latarbelakang     = $request->input('latarbelakang');
        $artikel            ->metode            = $request->input('metode');
        $artikel            ->hasil             = $request->input('hasil');
        $artikel            ->pembahasan        = $request->input('pembahasan');
        $artikel            ->simpulan          = $request->input('simpulan');
        $artikel            ->saran             = $request->input('saran');
        $artikel            ->referensi         = $request->input('referensi');

        $artikel->save();

        return redirect()->route('artikels.review3', ['id' => $artikel->id])->with('success', 'Jurnal berhasil diupdate');
    }

    public function kirimartikel(string $id)
    {

        $artikel = Artikel::findOrFail($id);

        if (!$artikel) {
            return redirect()->back()->with(['error' => "Artikel dengan ID $id tidak ditemukan"]);
        }

        $judulArtikel = $artikel->noartikel;

        return redirect()->route('artikels.index')->with(['success' => "Artikel '$judulArtikel' berhasil di kirim tunggu proses 2x24 untuk di review"]);
    }   


    public function destroy($id): RedirectResponse
    {
        $artikel        = Artikel::findOrFail($id);

        Storage::delete('public/jurnal/' . basename($artikel->image));
        Storage::delete('public/pdfartikel/' . basename($artikel->pdfhasil));
            
        $artikel        ->  delete();

        return redirect()->route('artikels.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }

}
