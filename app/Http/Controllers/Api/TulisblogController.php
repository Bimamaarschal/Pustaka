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
     * Tampilan API
     *
     * @return void
     */
    public function index(): View
    {
        $tulisblogs = Tulisblog::latest()->paginate(6);
        $itemsPerPage = 6;
        $tulisblogs = Tulisblog::paginate($itemsPerPage);
        $tulisblogResource = new TulisblogResource(true, 'List Data Tulisan Blog Anda', $tulisblogs);
        return view('tulisblogs.index', compact('tulisblogs', 'tulisblogResource'));

    }


    /**
     * Ke tampilan tambah data
     *
     * @return View
     */
    public function create(): View
    {
        return view('tulisblogs.create');
    }

    /**
     * fungsi Tambah Data
     *
     * @param  mixed $request
     * @return void
     */
    public function store(Request $request)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'judul' => 'required',
            'penulis' => 'required',
            'tanggal' => 'required',
            'konten1' => 'required',
            'konten2' => 'required',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/tulisblogs', $image->hashName());

        //create post
        $tulisblog = Tulisblog::create([
            'image' => $image->hashName(),
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'tanggal' => $request->tanggal,
            'konten1' => $request->konten1,
            'konten2' => $request->konten2,
        ]);


        $tulisblog = new TulisblogResource(true, 'Data Tulisan Blog Anda Berhasil Ditambahkan!', $tulisblog);

        return Redirect::route('tulis')->with('tulisblog', $tulisblog);
    }

    /**
     * Fungsi panggil data
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
     * destroy
     *
     * @param  mixed $tulisblogs
     * @return void
     */
    public function destroy($id): RedirectResponse
    {
        //get post by ID
        $tulisblog = Tulisblog::findOrFail($id);

        //delete image
        Storage::delete('public/tulisblogs/'.basename($tulisblog->image));

        //delete post
        $tulisblog->delete();

        //redirect to index
        return redirect()->route('tulisblogs.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
    

}