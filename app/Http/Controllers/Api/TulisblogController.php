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

class TulisblogController extends Controller
{
    /**
     * Tampilan API
     *
     * @return void
     */
    public function index(): View
    {
        //get all posts
        $tulisblogs = Tulisblog::latest()->paginate(5);
        $tulisblogs = new TulisblogResource(true, 'List Data Tulisan Blog Anda', $tulisblogs);
        return Redirect::route('pustaka')->with('tulisblogs', $tulisblogs);
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
        $tulisblog = Tulisblog::findOrFail($id);
        return view('tulisblogs.show', compact('tulisblog'));

    }
    

}