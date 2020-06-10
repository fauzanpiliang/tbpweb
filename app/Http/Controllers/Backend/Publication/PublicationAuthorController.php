<?php

namespace App\Http\Controllers\Backend\Publication;

use App\Http\Controllers\Controller;
use App\Models\Publication;
use App\Models\PublicationMember;
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
        $positions = config('central.position');
        $publication_id = $publication->id;
        $authors = PublicationMember::where('publication_id', $publication->id)->get();

        return view('klp08.publications.authors.create', compact(
           'users',
           'positions',
           'authors',
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
        $this->validate($request, PublicationMember::$validation_rules);
        try {
            $data = new PublicationMember();
            $data->user_id = $request->id;
            $data->position = $request->position;
            $data->publication_id = $publication_id;
            $data->save();

            notify('success', 'Penulis Berhasil Ditambahkan');
        } catch (InvalidArgumentException $e) {
            notify('error', 'Penulis Gagal Ditambahkan');
        }

        return redirect()->route('backend.publications.authors.create', [$publication_id]);
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
    public function destroy($publication_id, $author_id)
    {
        $publicationMember = PublicationMember::find($author_id);

        $publicationMember->delete();

        notify('success', 'Berhasil menghapus penulis ' . $publicationMember->user->name);
        return redirect()->route('backend.publications.authors.create', [$publication_id]);
    }
}
