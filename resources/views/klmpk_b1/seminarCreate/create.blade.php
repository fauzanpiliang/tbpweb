@extends('layouts.admin')

@section('breadcrumb')
    {!! cui()->breadcrumb([
        'Home' => route('home'),
        'Publikasi Dosen' => route('backend.publications.index'),
        'Tambah' => '#'
    ]) !!}
@endsection

@section('toolbar')
    {!! cui()->toolbar_btn(route('backend.publications.index'), 'cil-list', 'List') !!}
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col">
            <div class="row">
                <div class="col-md-8">


                        {{ html()->form('POST', route('backend.pub-proceedings.store'))->open() }}
                        @csrf
                    <div class="card">

                        {{-- CARD HEADER--}}
                        <div class="card-header">
                            <strong><i class="cil-library-add"></i> Tambah Publikasi Seminar </strong>
                        </div>

                        {{-- CARD BODY--}}
                        <div class="card-body">
                            @include('klmpk_b1.seminarCreate._form')
                        </div>

                        {{--CARD FOOTER--}}
                        <div class="card-footer">
                            <input type="submit" value="Simpan" class="btn btn-primary"/>
                        </div>

                        {{ html()->form()->close() }}
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection 
