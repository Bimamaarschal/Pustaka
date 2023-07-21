<?php

namespace App\Http\Controllers\Api;

use App\Models\Tulisblog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Http\Resources\TulisblogResource;
use Illuminate\Support\Facades\Storage;

class TulisblogController extends Controller
{

    /**
     * Tampilan Index
     *
     * @return void
     */
    public function index(): View
    {
        $tulisblogs = Tulisblog::latest()->paginate(6);
        $itemsPerPage = 6;
        $tulisblogs = Tulisblog::latest()->paginate($itemsPerPage);
        $tulisblogResource = new TulisblogResource(true, 'List Data Tulisan Blog Anda', $tulisblogs);
        return view('tulisblogs.index', compact('tulisblogs', 'tulisblogResource'));

    }

    /**
     * Ke Tampilan Tambah Data
     *
     * @return View
     */
    public function create(): View
    {
        return view('tulisblogs.create');
    }

    /**
     * Fungsi Tambah Data
     *
     * @param  mixed $request
     * @return void
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'judul' => 'required|max:100',
            'penulis' => 'required',
            'tanggal' => 'required',
            'konten1' => 'required|max:250',
            'konten2' => 'required',
        ], [
            'image.required' => 'Mohon untuk tambahkan gambar format jpeg, png, jpg, gif, svg, maksimal 2048mb.',
            'image.image' => 'Mohon untuk tambahkan gambar dengan format jpeg, png, jpg, gif, svg.',
            'image.mimes' => 'Mohon untuk tambahkan gambar dengan format jpeg, png, jpg, gif, svg.',
            'image.max' => 'Ukuran gambar tidak boleh lebih dari 2048mb.',
            'judul.required' => 'Judul tidak boleh kosong.',
            'judul.max' => 'Judul tidak boleh lebih dari :max karakter.',
            'konten1.required' => 'Kata pendahulu tidak boleh kosong.',
            'konten1.max' => 'Kata pendahulu tidak boleh lebih dari :max kata.',
            'konten2.required' => 'Konten tidak boleh kosong.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $image = $request->file('image');
        $image->storeAs('public/tulisblogs', $image->hashName());

        $tulisblog = Tulisblog::create([
            'image' => $image->hashName(),
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'tanggal' => $request->tanggal,
            'konten1' => $request->konten1,
            'konten2' => $request->konten2,
        ]);

        $tulisblog = new TulisblogResource(true, 'Data Tulisan Blog Anda Berhasil Ditambahkan!', $tulisblog);
        return Redirect::route('tulisblogs.index')->with('tulisblog', $tulisblog);
    }

    /**
     * Fungsi Panggil Data
     *
     * @param  mixed $tulisblog
     * @return void
     */
    public function show(string $id): View
    {
        $tulisblogs = Tulisblog::findOrFail($id);
        return view('tulisblogs.show', compact('tulisblogs'));
    }

    /**
     * Ke Tampilan Edit Data
     *
     * @param  mixed $id
     * @return View
     */
    public function edit(string $id): View
    {
        $tulisblog = Tulisblog::findOrFail($id);
        return view('tulisblogs.edit', compact('tulisblog'));
    }

    /**
     * Fungsi Edit Data
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $this->validate($request, [
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'judul' => 'required|max:100',
            'penulis' => 'required',
            'tanggal' => 'required',
            'konten1' => 'required|max:250',
            'konten2' => 'required',
        ]);

        $tulisblog = Tulisblog::findOrFail($id);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image->storeAs('public/tulisblogs/', $image->hashName());
            Storage::delete('public/tulisblogs/' . $tulisblog->image);

            $tulisblog->update([
                'image' => $image->hashName(),
                'judul' => $request->judul,
                'penulis' => $request->penulis,
                'tanggal' => $request->tanggal,
                'konten1' => $request->konten1,
                'konten2' => $request->konten2
            ]);

        } else {
            $tulisblog->update([
                'judul' => $request->judul,
                'penulis' => $request->penulis,
                'tanggal' => $request->tanggal,
                'konten1' => $request->konten1,
                'konten2' => $request->konten2
            ]);
        }
        return redirect()->route('tulisblogs.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * Fungsi Hapus Data
     *
     * @param  mixed $tulisblogs
     * @return void
     */
    public function destroy($id): RedirectResponse
    {
        $tulisblog = Tulisblog::findOrFail($id);
        Storage::delete('public/tulisblogs/' . basename($tulisblog->image));
        $tulisblog->delete();
        return redirect()->route('tulisblogs.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }


}