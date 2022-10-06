<div class="col-12">
    <label for="description" class="form-label">Description</label>
    <textarea cols="80" id="description" name="description" rows="10" data-sample-short required>
@if (isset($data))
        {!! $data->description !!}
@else
{{ old('description') }}
    @endif
</textarea>
    <span class="text-danger">{{ $errors->first('description') }}</span>
</div>
<div class="col-12">
    <label for="image" class="col-form-label">Image </label>
    <input class="form-control" name="image" type="file" id="image">
</div>
<div class="row mt-3">
    <label class="col-sm-1 col-form-label">Status</label>
    <div class="col-sm-11">
        <div class="form-check form-switch">
            <input class="form-check-input" name="status"
                @if (isset($data)) ?  @if ($data->status == 'active') ?  checked : @endif :
                @endif type="checkbox" >
        </div>
    </div>
</div>
<script src="https://cdn.ckeditor.com/4.19.1/standard-all/ckeditor.js"></script>
<script>
    CKEDITOR.replace('description', {
        height: 250,
        extraPlugins: 'colorbutton,colordialog',
        removeButtons: 'PasteFromWord'
    });
</script>
