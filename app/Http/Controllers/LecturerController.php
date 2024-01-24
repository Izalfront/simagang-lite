<?php

namespace App\Http\Controllers;

use App\Models\Lecturer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LecturerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $lecturers = Lecturer::where('user_id', $user->id)->get();

        return response()->view('lecturers.index', compact('lecturers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();

        if ($user->lecturers) {
            toast('Anda sudah memiliki entri dosen pembimbing.', 'error');
            return redirect()->route('lecturers.index');
        }

        return response()->view('lecturers.create');
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
            'nama' => 'required',
            'nomor_telepon' => 'required',
            'email' => 'required|email',
        ]);

        $user = Auth::user();

        if ($user->lecturers) {
            toast('Anda hanya dapat memiliki satu entri dosen pembimbing.', 'error');
            return redirect()->route('lecturers.index');
        }

        Lecturer::create([
            'nama' => $request->nama,
            'nomor_telepon' => $request->nomor_telepon,
            'email' => $request->email,
            'user_id' => $user->id,
        ]);

        toast('Data dosen pembimbing berhasil ditambahkan.', 'success');
        return redirect()->route('lecturers.index');
    }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\Models\Lecturer  $lecturer
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show(Lecturer $lecturer)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lecturer  $lecturer
     * @return \Illuminate\Http\Response
     */
    public function edit(Lecturer $lecturer)
    {
        $user = Auth::user();

        if ($lecturer->user_id !== $user->id) {
            abort(403, 'Unauthorized action.');
        }

        return response()->view('lecturers.edit', compact('lecturer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lecturer  $lecturer
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, Lecturer $lecturer)
    {
        $user = Auth::user();

        if ($lecturer->user_id !== $user->id) {
            abort(403, 'Unauthorized action.');
        }

        $request->validate([
            'nama' => 'required',
            'nomor_telepon' => 'required',
            'email' => 'required|email',
        ]);

        $lecturer->update([
            'nama' => $request->nama,
            'nomor_telepon' => $request->nomor_telepon,
            'email' => $request->email,
        ]);

        toast('Data dosen pembimbing berhasil diperbarui.', 'success');
        return redirect()->route('lecturers.index');
    }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  \App\Models\Lecturer  $lecturer
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy(Lecturer $lecturer)
    // {
    //     //
    // }
}
