<?php

namespace App\Http\Controllers;

use App\Models\Supervisor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SupervisorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $supervisors = Supervisor::where('user_id', $user->id)->get();

        return response()->view('supervisors.index', compact('supervisors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();

        if ($user->supervisors) {
            toast('Anda sudah memiliki entri pembimbing lapangan.', 'error');
            return redirect()->route('supervisors.index');
        }

        return response()->view('supervisors.create');
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

        if ($user->supervisors) {
            toast('Anda hanya dapat memiliki satu entri pembimbing lapangan.', 'error');
            return redirect()->route('lecturers.index');
        }

        Supervisor::create([
            'nama' => $request->nama,
            'nomor_telepon' => $request->nomor_telepon,
            'email' => $request->email,
            'user_id' => $user->id,
        ]);

        toast('Data pembimbing lapangan berhasil ditambahkan.', 'success');
        return redirect()->route('supervisors.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Supervisor  $supervisor
     * @return \Illuminate\Http\Response
     */
    public function show(Supervisor $supervisor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Supervisor  $supervisor
     * @return \Illuminate\Http\Response
     */
    public function edit(Supervisor $supervisor)
    {
        $user = Auth::user();

        if ($supervisor->user_id !== $user->id) {
            abort(403, 'Unauthorized action.');
        }

        return response()->view('supervisors.edit', compact('supervisor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Supervisor  $supervisor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supervisor $supervisor)
    {
        $user = Auth::user();

        if ($supervisor->user_id !== $user->id) {
            abort(403, 'Unauthorized action.');
        }

        $request->validate([
            'nama' => 'required',
            'nomor_telepon' => 'required',
            'email' => 'required|email',
        ]);

        $supervisor->update([
            'nama' => $request->nama,
            'nomor_telepon' => $request->nomor_telepon,
            'email' => $request->email,
        ]);

        toast('Data pembimbing lapangan berhasil diperbarui.', 'success');
        return redirect()->route('supervisors.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Supervisor  $supervisor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supervisor $supervisor)
    {
        //
    }
}
