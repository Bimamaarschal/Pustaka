<?php

namespace App\Http\Controllers;

use App\Models\Jurnal;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\TulisblogResource;
use App\Models\LikeHistory;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;


class JurnalController extends Controller
{

    public function index(): View
    {
        $jurnals = Jurnal::latest()->paginate(6);
        return view('jurnal.index', compact('jurnals'));
    }

    public function create(): View
    {
        return view('jurnal.create');
    }

    public function timreview(): View
    {
        return view('jurnal.timreview');
    }

    public function belumreview(): View
    {
        $itemsPerPage = 6;
        $belums = Jurnal::where('statusreview', 'belum di review')
                    ->latest()
                    ->paginate($itemsPerPage);

        return view('jurnal.belumreview', compact('belums'));
    }

    public function belumreview2(string $id): View
    {
        $jurnal = Jurnal::findOrFail($id);
        if (!$jurnal) {
            return abort(404);
        }

        return view('jurnal.belumreview2', ['jurnal' => $jurnal]);
    }

    public function store(Request $request): RedirectResponse
    {

        $this->validate($request, [
            'image'                 => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'judul'                 => 'required|max:300',
            'penulis'               => 'required',
            'tanggalterbit'         => 'required',
            'jenis'                 => 'required',
            'keterangan'            => 'required|max:350',
            'abstrak'               => 'required|max_words:350',
            'pdf'                   => 'required|mimes:pdf|max:2048',
        ], [
            'image.required'        => 'Mohon untuk tambahkan gambar format jpeg, png, jpg, gif, svg, maksimal 2048mb.',
            'image.image'           => 'Mohon untuk tambahkan gambar dengan format jpeg, png, jpg, gif, svg.',
            'image.mimes'           => 'Mohon untuk tambahkan gambar dengan format jpeg, png, jpg, gif, svg.',
            'image.max'             => 'Ukuran gambar tidak boleh lebih dari 2048mb.',
            'judul.required'        => 'Judul tidak boleh kosong.',
            'judul.max'             => 'Judul tidak boleh lebih dari :max karakter.',
            'penulis.required'      => 'Nama penulis tidak boleh kosong.',
            'jenis.required'        => 'Jenis jurnal tidak boleh kosong.',
            'keterangan.required'   => 'Kata keterangan tidak boleh kosong.',
            'keterangan.max'        => 'Kata pendahulu tidak boleh lebih dari :max kata.',
            'abstrak.required'      => 'Abstrak tidak boleh kosong.',
            'abstrak.max_words'     => 'Abstrak standar 300-350 kata.',
            'pdf.required'          => 'File PDF tidak boleh kosong.',
            'pdf.mimes'             => 'Mohon untuk tambahkan pdf dengan format pdf.',
            'pdf.max'               => 'Ukuran pdf tidak boleh lebih dari 2048mb.',
        ]);

        $keteranganHak = "Hak jurnal ini dilindungi PUSTAKA";

        $image = $request->file('image');
        $image->storeAs('public/jurnal', $image->hashName());

        $pdf = $request->file('pdf');
        $pdf->storeAs('public/pdfjurnal', $pdf->hashName());

        $newPost = Jurnal::create([
            'image'                 => $image->hashName(),
            'judul'                 => $request->judul,
            'penulis'               => $request->penulis,
            'tanggalterbit'         => $request->tanggalterbit,
            'jenis'                 => $request->jenis,
            'keterangan'            => $request->keterangan,
            'abstrak'               => $request->abstrak,
            'hak'                   => $keteranganHak,
            'pdf'                   => $pdf->hashName()
        ]);

        if (!$newPost) {
            return abort(404);
        }

        return redirect()->route('jurnals.review', ['id' => $newPost->id])->with('success', 'Data Berhasil Disimpan!');
    }

    public function show(Jurnal $jurnal)
    {
        //
    }

    public function review(string $id): View
    {
        $jurnal = Jurnal::findOrFail($id);
        if (!$jurnal) {
            return abort(404);
        }

        return view('jurnal.review', ['jurnal' => $jurnal]);
    }

    public function edit(string $id): View
    {
        $jurnal = Jurnal::findOrFail($id);
        if (!$jurnal) {
            return abort(404);
        }

        return view('jurnal.edit', ['jurnal' => $jurnal]);
    }

    public function update(Request $request, string $id)
    {
        $jurnal = Jurnal::findOrFail($id);
        if (!$jurnal) {
            return abort(404);
        }

        $request->validate([
            'image'                 => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'judul'                 => 'required|max:300',
            'penulis'               => 'required',
            'tanggalterbit'         => 'required',
            'jenis'                 => 'required',
            'keterangan'            => 'required|max:350',
            'abstrak'               => 'required',
            'pdf'                   => 'mimes:pdf|max:2048',
        ], [
            'image.required'        => 'Mohon untuk tambahkan gambar format jpeg, png, jpg, gif, svg, maksimal 2048mb.',
            'image.image'           => 'Mohon untuk tambahkan gambar dengan format jpeg, png, jpg, gif, svg.',
            'image.mimes'           => 'Mohon untuk tambahkan gambar dengan format jpeg, png, jpg, gif, svg.',
            'image.max'             => 'Ukuran gambar tidak boleh lebih dari 2048mb.',
            'judul.required'        => 'Judul tidak boleh kosong.',
            'judul.max'             => 'Judul tidak boleh lebih dari :max karakter.',
            'penulis.required'      => 'Nama penulis tidak boleh kosong.',
            'jenis.required'        => 'Jenis jurnal tidak boleh kosong.',
            'keterangan.required'   => 'Kata keterangan tidak boleh kosong.',
            'keterangan.max'        => 'Kata pendahulu tidak boleh lebih dari :max kata.',
            'abstrak.required'      => 'Abstrak tidak boleh kosong.',
            'pdf.required'          => 'File PDF tidak boleh kosong.',
            'pdf.mimes'             => 'Mohon untuk tambahkan pdf dengan format pdf.',
            'pdf.max'               => 'Ukuran pdf tidak boleh lebih dari 2048mb.',
        ]);

        if ($request->hasFile('image')) {

            $image                   = $request->file('image');

            $image  ->storeAs('public/jurnal/', $image->hashName());
            Storage::delete('public/jurnal/' . $jurnal->image);

            $jurnal ->image          = $image->hashName();
        }
    
        if ($request->hasFile('pdf')) {
            $pdf                     = $request->file('pdf');
            $pdf    ->storeAs('public/pdfjurnal/', $pdf->hashName());

            if ($jurnal->pdf) {
                Storage::delete('public/pdfjurnal/' . $jurnal->pdf);
            }
    
            $jurnal->pdf            = $pdf->hashName();
        }
            $jurnal->judul          = $request->input('judul');
            $jurnal->penulis        = $request->input('penulis');
            $jurnal->tanggalterbit  = $request->input('tanggalterbit');
            $jurnal->jenis          = $request->input('jenis');
            $jurnal->keterangan     = $request->input('keterangan');
            $jurnal->abstrak        = $request->input('abstrak');

        $jurnal->save();

        return redirect()->route('jurnals.review', ['id' => $jurnal->id])->with('success', 'Jurnal berhasil diupdate');
    }

    public function storebelumreview2(Request $request, string $id)
{
    $jurnal = Jurnal::findOrFail($id);
    if (!$jurnal) {
        return abort(404);
    }

    $request->validate([
        'keterangan_review' => 'required|max:200',
        'tanggal_review' => 'required',
        'nama_review' => 'required',
        'statusreview' => 'required',
    ], [
        'keterangan_review.required' => 'Mohon untuk tambahkan keterangan hasil review',
        'keterangan_review.max' => 'Keterangan tidak lebih dari 200 karakter',
        'tanggal_review.required' => 'Tanggal review tidak boleh kosong.',
        'nama_review.required' => 'Nama review tidak boleh kosong.',
    ]);

    // Perbarui data jurnal dengan informasi review
    $jurnal->update([
        'statusreview' => $request->statusreview,
        'keterangan_review' => $request->keterangan_review,
        'tanggal_review' => $request->tanggal_review,
        'nama_review' => $request->nama_review
    ]);

    return redirect()->route('jurnals.index')->with('success', 'Data Berhasil Disimpan!');
}

    public function destroy(Jurnal $jurnal)
    {
        //
    }
}