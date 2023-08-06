<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ReviewController extends Controller
{
    public function timreview(): View
    {
        return view('review.review');
    }

    public function timreviewArtikel(): View
    {
        $itemsPerPage = 6;

        $statusreview = ['belum di review', 'jurnal terdapat kesalahan', 'jurnal proses lebih lanjut'];

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

}
