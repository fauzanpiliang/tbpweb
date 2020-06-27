<?php

namespace App\Http\Controllers\Backend\Publication;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Publication;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
    
    public function index()
    {
        //mengambil data dari model publication
        $publications = Publication::all();
        // $publications = DB::table('publications')
        //                 ->join('publication_journals', 'publications.id', '=', 'publication_journals.publication_id')
        //                 ->join('publication_proceedings', 'publications.id', '=', 'publication_proceedings.publication_id')
        //                 ->join('lecturers', 'publications.lecturer_id', '=', 'lecturers.id')
        //                 ->select('publications.title', 'publications.year', 'publications.type', 'publication_journals.journal_name', 'publication_journals.volume', 'publication_journals.no', 'publication_proceedings.proceeding_name', 'publication_proceedings.conference_name', 'publication_proceedings.conference_location', 'publication_proceedings.conference_date', 'lecturers.name')
        //                 ->get();

        //mengirimkan data publikasi ke view index
        return view('klp08.index', compact('publications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function destroy($id)
    {
        //
    }
}
