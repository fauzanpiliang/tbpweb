<?php

namespace App\Http\Controllers\Backend\Publication;

use App\Http\Controllers\Controller;
use App\Models\PublicationProceeding;
use Illuminate\Http\Request;
use App\Models\PublicationProceeding;
use Illuminate\Support\Facades\Gate;

class PubProceedingController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        // if(!Gate::allows('pub_proceedings-manage'))
        // {
        //     return abort(403);
        // }
         $PublicationProceeding = PublicationProceeding::all()->pluck('proceeding_name', 'id');

         return view('klmpk_b1.seminarCreate.create', compact('PublicationProceeding'));
    }

    public function store(Request $request)
    {
        // if(!Gate::allows('pub_proceedings-manage'))
        // {
        //     return abort(403);
        // }

        // $request->validate(PublicationProceeding::validation_rules);

        echo "<script>";
        echo "alert('inputan data berhasil');";
        echo "</script>";
        return redirect()->route('klmpk_b1.seminarCreate.index');
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
