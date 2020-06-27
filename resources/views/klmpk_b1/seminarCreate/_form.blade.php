<!-- Id integer Field Input -->
<div class="form-group">
    <label class="form-label" for="id" name="id">ID Proceeding</label>
    {{ html()->text('id')->class(["form-control", "is-invalid" => $errors->has('id')])->id('id')->placeholder('ID Proceeding') }}
    @error('id')
    <div class="invalid-feedback">{{ $errors->first('id') }}</div>
    @enderror
</div>

<!-- Publication_id integer Field Input -->
<div class="form-group">
    <label class="form-label" for="publication_id" name="publication_id">ID Publikasi</label>
    {{ html()->select('publication_id')->options($PublicationProceeding)->class(["form-control", "is-invalid" => $errors->has('publication_id')])->id('publication_id')->placeholder('ID Publikasi') }}
    @error('publication_id')
    <div class="invalid-feedback">{{ $errors->first('publication_id') }}</div>
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


