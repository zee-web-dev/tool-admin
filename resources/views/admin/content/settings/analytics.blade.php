<div class="card">
    <div class="card-body">
        <form action="{{ route('settings.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row g-3">

                <div class="col-12">
                    <label for="google_script">Google Script</label>
                    <textarea id="google_script" name="settings[google_script]" class="form-control">{{ $setting['google_script'] ?? '' }}</textarea>
                </div>


            </div>
            <div class="pt-4">
                <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                <button type="reset" class="btn btn-label-secondary">Reset</button>
            </div>
        </form>
    </div>
</div>
