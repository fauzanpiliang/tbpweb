@extends('layouts.admin')

@section('breadcrumb')
    {!! cui()->breadcrumb([
        'Home' => route('home'),
        'Publikasi Dosen' => route('backend.publications.index'),
        'Index' => '#'
    ]) !!}
@endsection

@section('toolbar')
    {!! cui()->toolbar_btn(route('backend.pub-proceedings.create'), 'cil-library-add', 'Tambah Seminar') !!}
    {!! cui()->toolbar_btn(route('backend.pub-journals.create'), 'cil-library-add', 'Tambah Jurnal') !!}
@endsection

@section('content')

        <div class="card">

            <div class="card-header">
                <strong>List Publikasi Dosen</strong>
            </div>

            <div class="card-body">
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                        <th scope="col">Judul Publikasi(Tahun Publikasi)</th>
                        <th scope="col">Nama Dosen</th>
                        <th scope="col">Tipe Publikasi</th>
                        <th scope="col">Detail</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    @forelse($publications as $publication)
                        @if($publication->type === 1)
                            @foreach($publication->seminars as $seminar)
                                <tr>
                                    <td>{{$publication->title}}({{$publication->year}})</td>
                                    <td>{{$publication->dosen->name}}</td>
                                    <td>{{$publication->type_text}}</td>
                                    <td>
                                        <b>nama seminar:</b>{{$seminar->proceeding_name}} <br> 
                                        <b>nama konferensi:</b>{{$seminar->conference_name}} <br>
                                        <b>lokasi seminar:</b>{{$seminar->conference_location}} <br>
                                        <b>tanggal seminar:</b>{{$seminar->conference_date}}
                                    </td>
                                    <td>
                                    {!! cui()->btn_edit(route('backend.pub-proceedings.edit', [$seminar->id])) !!} 
                                    </td>
                                </tr>
                            @endforeach
                        @elseif($publication->type === 2)
                            @foreach($publication->jurnals as $jurnal)
                                <tr>
                                    <td>{{$publication->title}}({{$publication->year}})</td>
                                    <td>{{$publication->dosen->name}}</td>
                                    <td>{{$publication->type_text}}</td>
                                    <td>
                                        <b>nama jurnal:</b>{{$jurnal->journal_name}} <br>
                                        <b>volume jurnal:</b>{{$jurnal->volume}} <br>
                                        <b>nomor jurnal:</b>{{$jurnal->no}}
                                    </td>
                                    <td>
                                    {!! cui()->btn_edit(route('backend.pub-journals.edit', [$jurnal->id])) !!} 
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    @empty
                        <tr>
                            <td colspan="5">Belum ada Publikasi</td>
                        </tr>  
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>

@endsection