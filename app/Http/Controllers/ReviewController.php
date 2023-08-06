<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class ReviewController extends Controller
{
    public function timreview(): View
    {
        return view('review.review');
    }

    public function timreviewArtikel(): View
    {
        $itemsPerPage = 6;

        $statusreview = ['Belum di review', 'Artikel telah di review', 'Artikel terdapat kesalahan', 'Artikel proses lebih lanjut', 'Status review tidak valid'];

        $artikels = Artikel::whereIn('review', $statusreview)
            ->latest()
            ->paginate($itemsPerPage);

        return view('review.belumartikel', compact('artikels'));
    }

    public function timreviewArtikelReview(string $id): View
    {
        $artikel = Artikel::findOrFail($id);
        if (!$artikel) {
            return abort(404);
        }

        return view('review.belumartikelreview', ['artikel' => $artikel]);
    }

    public function timreviewArtikelStore(Request $request, string $id)
    {
        
        $artikel = Artikel::findOrFail($id);

        if (!$artikel) {
            return abort(404);
        }

        $request->validate([
            'review'                     => 'required',
            'keterangan_review'          => 'required|max:800|regex:/^(?:\b[\w\s()\/\\:\'\-?&@#=\+!~%$\_"]{0,15}\b\s?)+[.\?]?[\w\s()\/\\:\'\-?&@#=\+!~%$\_"]{0,15}$/',
            'tanggal_review'             => 'required',
            'nama_review'                => 'required',

        ], [
            'review.required'            => 'Mohon tentukan hasil review Anda',

            'keterangan_review.required' => 'Keterangan tidak boleh kosong.',
            'keterangan_review.max'      => 'Keterangan tidak boleh lebih dari :max karakter.',
            'keterangan_review.regex'    => 'Perhatikan penulisan keterangan Anda',

            'tanggal_review.required'    => 'Tanggal review tidak boleh kosong',

            'nama_review.required'       => 'Nama review tidak boleh kosong',
        ]);


        $artikel->update([
            'review'                    => $request->review,
            'keterangan_review'         => $request->keterangan_review,
            'tanggal_review'            => $request->tanggal_review,
            'nama_review'               => $request->nama_review
        ]);

        return redirect()->route('artikels.index')->with('success', 'Data Artikel Berhasil di Review');
    }

}
