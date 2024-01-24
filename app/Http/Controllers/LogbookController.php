<?php

namespace App\Http\Controllers;

use App\Models\Logbook;
use Illuminate\Http\Request;

class LogbookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        $logbooks = Logbook::where('user_id', $user->id)->get();

        return response()->view('logbooks.index', compact('logbooks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->view('logbooks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'kegiatan' => 'required',
            'catatan' => 'required',
        ]);

        $user = auth()->user();

        Logbook::create([
            'user_id' => $user->id,
            'tanggal' => $request->tanggal,
            'kegiatan' => $request->kegiatan,
            'catatan' => $request->catatan,
        ]);

        toast('Logbook harian berhasil ditambahkan.', 'success');
        return redirect()->route('logbooks.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Logbook  $logbook
     * @return \Illuminate\Http\Response
     */
    public function show(Logbook $logbook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Logbook  $logbook
     * @return \Illuminate\Http\Response
     */
    public function edit(Logbook $logbook)
    {
        $this->authorize('update', $logbook);

        return response()->view('logbooks.edit', compact('logbook'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Logbook  $logbook
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Logbook $logbook)
    {
        $this->authorize('update', $logbook);

        $request->validate([
            'tanggal' => 'required|date',
            'kegiatan' => 'required',
            'catatan' => 'required',
        ]);

        $logbook->update([
            'tanggal' => $request->tanggal,
            'kegiatan' => $request->kegiatan,
            'catatan' => $request->catatan,
        ]);

        toast('Logbook berhasil diperbarui.', 'success');
        return redirect()->route('logbooks.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Logbook  $logbook
     * @return \Illuminate\Http\Response
     */
    public function destroy(Logbook $logbook)
    {
        $this->authorize('delete', $logbook);

        $logbook->delete();

        toast('Logbook berhasil dihapus.', 'success');
        return redirect()->route('logbooks.index');
    }
}
