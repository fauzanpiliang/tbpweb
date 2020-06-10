<!-- Nama jurnal Input (Select) -->
<div class="form-group">
    <label class="form-label" for="user_id">Nama jurnal:</label>
    {{ html()->select('id')->options($users)->class(["form-control", "is-invalid" => $errors->has('id')])->id('id')->placeholder('Pilih Jurnal') }}
    @error('id')
    <div class="invalid-feedback">{{ $errors->first('id') }}</div>
    @enderror
</div>

<!-- Input (Select) volume -->
<div class="form-group">
    <label class="form-label" for="position">Volume</label>
    {{ html()->select('volume')->options($volumes)->class(["form-control", "is-invalid" => $errors->has('volume')])->id('volume')->placeholder('Pilih volume') }}
    @error('position')
    <div class="invalid-feedback">{{ $errors->first('volume') }}</div>
    @enderror
</div>
