@extends('layouts.admin')

@section('breadcrumb')
    {!! cui()->breadcrumb([
        'Home' => route('home'),
        'Publikasi' => route('backend.publications.index', [$publication_id]),
        'Tambah' => '#'
    ]) !!}
@endsection

@section('toolbar')
    {!! cui()->toolbar_btn(route('backend.publications.index', [$publication_id]), 'cil-list', 'List') !!}
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">

                        {{ html()->form('POST', route('backend.publications.journal.store', [$publication_id]))->acceptsFiles()->open() }}

                        {{-- CARD HEADER--}}
                        <div class="card-header">
                            <strong> <i class="cil-library-add"></i> Tambah Jurnal</strong>
                        </div>

                        {{-- CARD BODY--}}
                        <div class="card-body">
                            @include('klp08.publications.journal._form')
                        </div>

                        {{--CARD FOOTER--}}
                        <div class="card-footer">
                            <input type="submit" value="Simpan" class="btn btn-primary"/>
                        </div>

                        {{ html()->form()->close() }}
                    </div>

                    <div class="card">

                        {{-- CARD HEADER--}}
                        <div class="card-header">
                            <strong><i class="cil-list"></i> List Jurnal</strong>
                        </div>

                        {{-- CARD BODY--}}
                        <div class="card-body">

                            <div class="row justify-content-end">
                                <div class="col-md-6 justify-content-end">
                                    <div class="row justify-content-end">
{{--                                        {{ $students->links() }}--}}
                                    </div>
                                </div>
                            </div>

                            <table class="{{ config('style.table') }}">
                                <thead class="{{ config('style.thead') }}">
                                <tr>
                                    <th>Jurnal</th>
                                    <th>Volume</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($journals as $journal)
                                    <tr>
                                        <td>{{ $journal->user->name }}</td>
                                        <td>{{ config('central.volume')[$journal->volume] }}</td>
                                        <td class="text-center">
                                            {!! cui()->btn_delete(route('backend.publications.journal.destroy', [$publication_id, $journal->id]), "Anda yakin akan menghapus jurnal ini?") !!}
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3">
                                            <h6 class="text-center">Tidak ada jurnal</h6>
                                        </td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>

                            <div class="row justify-content-end">
                                <div class="col-md-6 text-right">

                                </div>
                                <div class="col-md-6 justify-content-end">
                                    <div class="row justify-content-end">
{{--                                        {{ $students->links() }}--}}
                                    </div>
                                </div>
                            </div>

                        </div><!--card-body-->

                    </div><!--card-->
                </div>

            </div>

        </div>
    </div>
@endsection
