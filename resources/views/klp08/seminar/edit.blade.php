@extends('layouts.admin')

@section('breadcrumb')
    {!! cui()->breadcrumb([
        'Home' => route('home'),
        'Publikasi Dosen' => route('backend.publications.index'),
        'Edit' => '#'
    ]) !!}
@endsection

@section('toolbar')
    {!! cui()->toolbar_btn(route('backend.pub-proceedings.create'), 'cil-library-add', 'Tambah Seminar') !!}
    {!! cui()->toolbar_btn(route('backend.pub-journals.create'), 'cil-library-add', 'Tambah Jurnal') !!}
@endsection

@section('content')
    <div class="card">

    {{ html()->modelForm($proceeding, 'PUT', route('backend.pub-proceedings.update', $proceeding->id))->acceptsFiles()->open() }}

        <div class="card-header">
            <strong><i class="cil-pencil"></i> Edit Publikasi Dosen</strong>
        </div>

        <div class="card-body">

            <div class="form-group">
                <label class="form-label" for="proceeding_name">Nama Seminar</label>
                {{ html()->text('proceeding_name')->class(["form-control", "is-invalid" => $errors->has('proceeding_name')])->id('proceeding_name') }}
                @error('proceeding_name')
                <div class="invalid-feedback">{{ $errors->first('proceeding_name') }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label class="form-label" for="conference_name">Nama Konferensi</label>
                {{ html()->text('conference_name')->class(["form-control", "is-invalid" => $errors->has('conference_name')])->id('conference_name') }}
                @error('conference_name')
                <div class="invalid-feedback">{{ $errors->first('conference_name') }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label class="form-label" for="conference_location">Lokasi Seminar</label>
                {{ html()->text('conference_location')->class(["form-control", "is-invalid" => $errors->has('conference_location')])->id('conference_location') }}
                @error('conference_location')
                <div class="invalid-feedback">{{ $errors->first('conference_location') }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label class="form-label" for="conference_date">Tanggal Seminar</label>
                {{ html()->date('conference_date')->class(["form-control", "is-invalid" => $errors->has('conference_date')])->id('conference_date') }}
                @error('conference_date')
                <div class="invalid-feedback">{{ $errors->first('conference_date') }}</div>
                @enderror
            </div>

        </div>

        <div class="card-footer">
            <input type="submit" class="btn btn-primary" value="Simpan"/>
        </div>  
        {{ html()->closeModelForm() }}
    </div>
@endsection