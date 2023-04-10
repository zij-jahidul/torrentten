@push('page-specific-css')

@endpush
<form action="{{ route('categories.store') }}" method="post" id="globalForm" class="form-horizontal" enctype="multipart/form-data">
    @csrf
    <div class="form-group print-error-msg" style="display:none">
        <div class="row ml-0 mr-0">

        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label class="bmd-label-floating"> Parent : </label>
                <select name="parent_id" class="form-control select2">
                    <option value="">Select if any</option>
                    @foreach($categories as $parent_category)
                        <option value="{{ $parent_category->id }}">{{ $parent_category->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-md-8">
            <div class="form-group">
                <label class="bmd-label-floating"> Name : </label>
                <input type="text" name="name" id="name" class="form-control" value="" required="true">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="bmd-label-floating"> Icon : </label>
                <input type="file" name="icon" id="icon" class="form-control">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label class="bmd-label-floating"> Serial : </label>
                <input type="number" name="serial" id="serial" class="form-control" value="{{ $lastSerial + 1 }}">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label class="bmd-label-floating"> Status : </label>
                <select name="status" class="form-control" data-style="btn btn-link text-gray pl-0 pt-2" title="Status">
                    <option value="Public">Public</option>
                    <option value="Private">Private</option>
                </select>
            </div>
        </div>
    </div>
</form>



<script>
    //Initialize Select2 Elements
    $('.select2').select2({
        theme: 'bootstrap4'
    });
</script>
