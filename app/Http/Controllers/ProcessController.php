<?php

namespace App\Http\Controllers;

use App\Process;
use Illuminate\Http\Request;
use PhpParser\ErrorHandler\ThrowingTest;

class ProcessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $data['processes'] = Process::all()->toArray();
        return view('process.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('process.create_edit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $process = new Process();

        $process = $process->fill($data)->toArray();

        $response = Process::create($process)->toArray();

        return view('process.index')->with($response);

    }

    /**
     * Display the specified resource.
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @internal param Process $process
     */
    public function show($id)
    {
        $process = Process::find($id)->toArray();

        return view('process.create_edit')->with($process);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Process $process
     * @return \Illuminate\Http\Response
     */
    public function edit(Process $process)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Process $process
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Process $process)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Process $process
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function destroy($id)
    {
        $process = Process::where('id', '=', $id)->delete();

        $data['processes'] = Process::all()->toArray();
        return view('process.index')->with($data);

    }
}
