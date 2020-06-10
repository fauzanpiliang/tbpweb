<!-- Name Input (Select) -->
<div class="form-group">
    <label class="form-label" for="user_id">Nama Penulis:</label>
    {{ html()->select('id')->options($users)->class(["form-control", "is-invalid" => $errors->has('id')])->id('id')->placeholder('Pilih Penulis') }}
    @error('id')
    <div class="invalid-feedback">{{ $errors->first('id') }}</div>
    @enderror
</div>

<!-- Input (Select) Position -->
<div class="form-group">
    <label class="form-label" for="position">Posisi</label>
    {{ html()->select('position')->options($positions)->class(["form-control", "is-invalid" => $errors->has('position')])->id('position')->placeholder('Pilih position Mahasiswa') }}
    @error('position')
    <div class="invalid-feedback">{{ $errors->first('position') }}</div>
    @enderror
</div>
