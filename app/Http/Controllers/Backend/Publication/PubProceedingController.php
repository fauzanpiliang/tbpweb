<?php

namespace App\Http\Controllers\Backend\Publication;

use App\Http\Controllers\Controller;
use App\Models\PublicationProceeding;
use Illuminate\Http\Request;
use App\Models\PublicationProceeding;
use App\Models\Publication;
use App\Models\PublicationJournal;
use App\Models\PublicationMember;
use Illuminate\Support\Facades\Gate;

class PubProceedingController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
         $PublicationProceeding = Publication::all()->pluck('name', 'id');

         return view('klmpk_b1.seminarCreate.create', compact('PublicationProceeding'));
    }

    public function store(Request $request)
    {
        $request->validate(PublicationProceeding::validation_rules);
        $PublicationProceeding = PublicationProceeding::create([
            'id' => request('id'),
            'publication_id'=> request('publication_id'),
            'proceeding_name'=> request('proceeding_name'),
            'conference_name'=> request('conference_name'),
            'conference_location'=> request('conference_location'),
            'conference_date'=> request('conference_date')
        ]);

        if($PublicationProceeding){
            notify('success','Data berhasil ditambahkan');
            return redirect()->route('backend.pub_proceedings.create', $PublicationProceeding -> id);
        }else{
            notify('failed','Data gagal ditambahkan');
        }
       
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $proceedings = PublicationProceeding::where('id', $id)->get();
        foreach($proceedings as $proceeding)
        {
            return view('klp08.seminar.edit',compact('proceeding'));
        } 
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
