<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

use App\Models\Pesan;

use Illuminate\Http\RedirectResponse;

use Illuminate\Http\Request;

class PesanController extends Controller
{
    public function index(): View
    {
        //get posts
        $pesans = Pesan::all();

        //render view with posts
        return view('dashboard-pesan.index', compact('pesans'));
    }
    public function create(): View
    {
        return view('contact.create');
    }

    public function store(Request $request): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'nama'=> 'required',
            'email' => 'required',
            'topik' => 'required',
            'pekerjaan' => 'required',
            'pertanyaan' => 'required',
        ]);

        Pesan::create($request->all());


        //redirect to index
        return redirect()->route('contact.store')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function show(string $id): View
    {

        $pesans = Pesan::findOrFail($id);

        return view('dashboard-pesan.show', compact('pesans'));
    }
    public function destroy($id): RedirectResponse
    {

        $pesans = Pesan::findOrFail($id);


        $pesans->delete();

        //redirect to index
        return redirect()->route('dashboard-pesan.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
    public function edit(string $id): View
    {

        $pesans = Pesan::findOrFail($id);

        return view('dashboard-pesan.edit', compact('pesans'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'nama'=> 'required',
            'email' => 'required',
            'topik' => 'required',
            'pekerjaan' => 'required',
            'pertanyaan' => 'required',
        ]);

        $pesans = Pesan::findOrFail($id);

        $pesans->update([
                'nama'     => $request->nama,
                'email'   => $request->email,
                'topik'   => $request->topik,
                'pekerjaan'   => $request->pekerjaan,
                'pertanyaan'   => $request->pertanyaan,
            ]);
        return redirect()->route('dashboard-pesan.index')->with(['success' => 'Data Berhasil Diubah!']);
    }
}
