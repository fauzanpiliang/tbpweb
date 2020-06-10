<!-- Title Text Field Input -->
<div class="form-group">
    <label class="form-label" for="title" name="title">Judul Publikasi</label>
    {{ html()->text('title')->class(["form-control", "is-invalid" => $errors->has('title')])->id('title')->placeholder('Judul Pubilkasi Dosen') }}
    @error('title')
    <div class="invalid-feedback">{{ $errors->first('title') }}</div>
    @enderror
</div>

<!-- Lecturer_id Text Field Input -->
<div class="form-group">
    <label class="form-label" for="lecturer_id" name="lecturer_id">Nama Dosen</label>
    {{ html()->text('lecturer_id')->class(["form-control", "is-invalid" => $errors->has('lecturer_id')])->id('lecturer_id')->placeholder('Nama Lengkap Dosen') }}
    @error('lecturer_id')
    <div class="invalid-feedback">{{ $errors->first('lecturer_id') }}</div>
    @enderror
</div>

<!-- Input (Select) for Type -->
<div class="form-group">
    <label class="form-label" for="type" name="type">Tipe Publikasi</label>
    {{ html()->text('type')->class(["form-control", "is-invalid" => $errors->has('type')])->id('type')->placeholder('Tipe Publikasi Dosen') }}
    @error('type')
    <div class="invalid-feedback">{{ $errors->first('type') }}</div>
    @enderror
</div>

<!-- Proceeding_name Text Field Input -->
<div class="form-group">
    <label class="form-label" for="proceeding_name" name="proceeding_name">Nama Proceeding</label>
    {{ html()->text('proceeding_name')->class(["form-control", "is-invalid" => $errors->has('proceeding_name')])->id('proceeding_name')->placeholder('Nama Proceeding') }}
    @error('proceeding_name')
    <div class="invalid-feedback">{{ $errors->first('proceeding_name') }}</div>
    @enderror
</div>

<!-- Conference_name Text Field Input -->
<div class="form-group">
    <label class="form-label" for="conference_name" name="conference_name">Nama Seminar</label>
    {{ html()->text('conference_name')->class(["form-control", "is-invalid" => $errors->has('conference_name')])->id('conference_name')->placeholder('Nama Seminar') }}
    @error('conference_name')
    <div class="invalid-feedback">{{ $errors->first('conference_name') }}</div>
    @enderror
</div>

<!-- Conference_location Text Field Input -->
<div class="form-group">
    <label class="form-label" for="conference_location" name="conference_location">Lokasi Seminar</label>
    {{ html()->text('conference_location')->class(["form-control", "is-invalid" => $errors->has('conference_location')])->id('conference_location')->placeholder('Lokasi Seminar') }}
    @error('conference_location')
    <div class="invalid-feedback">{{ $errors->first('conference_location') }}</div>
    @enderror
</div>

<!-- Conference_date Text Field Input -->
<div class="form-group">
    <label class="form-label" for="conference_date" name="conference_date">Tanggal Seminar</label>
    {{ html()->date('conference_date')->class(["form-control", "is-invalid" => $errors->has('conference_date')])->id('conference_date')->placeholder('Tanggal Seminar') }}
    @error('conference_date')
    <div class="invalid-feedback">{{ $errors->first('conference_date') }}</div>
    @enderror
</div>


