<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

use App\Models\Daftar;

use Illuminate\Http\RedirectResponse;

use Illuminate\Http\Request;



class DaftarController extends Controller
{
    

    public function index(): View
    {
        //get posts
        $daftars = Daftar::all();

        //render view with posts
        return view('dashboard-daftar.index', compact('daftars'));
    }

    public function create(): View
    {
        return view('daftar.create');
    }

    public function store(Request $request): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'nama'=> 'required',
            'email' => 'required',
            'rumahsakit' => 'required',
            'pekerjaan' => 'required',
            'golongandarah' => 'required',
            'riwayatkesehatan' => 'required',
        ]);


        Daftar::create($request->all());

            

        return redirect()->route('daftar.store');
    }

    public function show(string $id): View
    {

        $daftars = Daftar::findOrFail($id);

        return view('dashboard-daftar.show', compact('daftars'));
    }

    public function destroy($id): RedirectResponse
    {

        $daftars = Daftar::findOrFail($id);


        $daftars->delete();

        //redirect to index
        return redirect()->route('dashboard-daftar.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }

    public function edit(string $id): View
    {

        $daftars = Daftar::findOrFail($id);

        return view('dashboard-daftar.edit', compact('daftars'));
    }


    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'nama'=> 'required',
            'email' => 'required',
            'rumahsakit' => 'required',
            'pekerjaan' => 'required',
            'golongandarah' => 'required',
            'riwayatkesehatan' => 'required',
        ]);

        $daftars = Daftar::findOrFail($id);

        $daftars->update([
                'nama'     => $request->nama,
                'email'   => $request->email,
                'rumahsakit'   => $request->rumahsakit,
                'pekerjaan'   => $request->pekerjaan,
                'golongandarah'   => $request->golongandarah,
                'riwayatkesehatan'   => $request->riwayatkesehatan,
            ]);
        return redirect()->route('dashboard-daftar.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

}
