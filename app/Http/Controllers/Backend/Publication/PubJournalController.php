<?php

namespace App\Http\Controllers\Backend\Publication;

use App\Http\Controllers\Controller;
use App\Models\Publication;
use App\Models\PublicationJournal;
use App\Models\User;
use Illuminate\Http\Request;


class PublicationAuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create(Publication $publication)
    {
        $users = User::all()->pluck('name', 'id');
        $volumes = config('central.volume');
        $publication_id = $publication->id;
        $journals = PublicationJournal::where('publication_id', $publication->id)->get();

        return view('klp08.publications.journal.create', compact(
           'users',
           'volumes',
           'journals',
           'publication_id'
        ));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $publication_id)
    {
        $this->validate($request, PublicationJournal::$validation_rules);
        try {
            $data = new PublicationJournal();
            $data->journal_name = $request->id;
            $data->volume = $request->volume;
            $data->publication_id = $publication_id;
            $data->save();

            notify('success', 'jurnal Berhasil Ditambahkan');
        } catch (InvalidArgumentException $e) {
            notify('error', 'Jurnal Gagal Ditambahkan');
        }

        return redirect()->route('backend.publications.journal.create', [$publication_id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($publication_id, $journal_id)
    {
        $PublicationJournal = PublicationJournal::find($journal_id);

        $PublicationJournal->delete();

        notify('success', 'Berhasil menghapus jurnal ' . $PublicationJournal->user->name);
        return redirect()->route('backend.publications.journal.create', [$publication_id]);
    }
}
