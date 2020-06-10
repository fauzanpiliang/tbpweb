@extends('layouts.admin')

@section('breadcrumb')
    {!! cui()->breadcrumb([
        'Home' => route('home'),
        'Publikasi Jurnal' => route('backend.publications.index'),
        'Edit' => '#'
    ]) !!}
@endsection

@section('toolbar')
    {!! cui()->toolbar_btn(route('backend.pub-journals.create'), 'cil-library-add', 'Tambah Jurnal') !!}
@endsection

@section('content')
    <div class="card">

    {{ html()->modelForm($proceeding, 'PUT', route('backend.pub-proceedings.update', $proceeding->id))->acceptsFiles()->open() }}

        <div class="card-header">
            <strong><i class="cil-pencil"></i> Edit Publikasi Jurnal</strong>
        </div>

        <div class="card-body">

            <div class="form-group">
                <label class="form-label" for="journal_name">Nama Jurnal</label>
                {{ html()->text('journal_name')->class(["form-control", "is-invalid" => $errors->has('journal_name')])->id('journal_name') }}
                @error('journal_name')
                <div class="invalid-feedback">{{ $errors->first('journal_name') }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label class="form-label" for="volume">Volume Jurnal</label>
                {{ html()->text('volume')->class(["form-control", "is-invalid" => $errors->has('volume')])->id('volume') }}
                @error('volume')
                <div class="invalid-feedback">{{ $errors->first('volume') }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label class="form-label" for="no">No Jurnal</label>
                {{ html()->text('no')->class(["form-control", "is-invalid" => $errors->has('no')])->id('no') }}
                @error('no')
                <div class="invalid-feedback">{{ $errors->first('no') }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label class="form-label" for="created_at">Dibuat di</label>
                {{ html()->date('created_at')->class(["form-control", "is-invalid" => $errors->has('created_at')])->id('created_at') }}
                @error('created_at')
                <div class="invalid-feedback">{{ $errors->first('created_at') }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label class="form-label" for="updated_at">Di publikasikan di</label>
                {{ html()->date('updated_at')->class(["form-control", "is-invalid" => $errors->has('updated_at')])->id('updated_at') }}
                @error('updated_at')
                <div class="invalid-feedback">{{ $errors->first('updated_at') }}</div>
                @enderror
            </div>

        </div>

        <div class="card-footer">
            <input type="submit" class="btn btn-primary" value="Simpan"/>
        </div>  
        {{ html()->closeModelForm() }}
    </div>
@endsection