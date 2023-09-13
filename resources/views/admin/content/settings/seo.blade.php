<div class="card">
    <div class="card-body">
        <form action="{{ route('settings.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row g-3">

                <div class="col col-md-4">
                    <label for="main_logo">Logo</label>
                    <input type="file" id="main_logo" name="settings[main_logo]" class="form-control"
                        placeholder="main_logo" value="{{ $setting['main_logo'] ?? '' }}" />
                </div>

                <div class="col col-md-4">
                    <label for="favicon">Favicon</label>
                    <input type="file" id="favicon" name="settings[favicon]" class="form-control"
                        placeholder="favicon" value="{{ $setting['favicon'] ?? '' }}" />
                </div>

                <div class="col col-md-4">
                    <label for="og_image">OG Image</label>
                    <input type="file" id="og_image" name="settings[og_image]" class="form-control"
                        placeholder="og_image" value="{{ $setting['og_image'] ?? '' }}" />
                </div>

                <div class="col col-md-12">
                    <label for="site_name">Site Name</label>
                    <input type="text" id="site_name" name="settings[site_name]" class="form-control"
                        placeholder="site_name" value="{{ $setting['site_name'] ?? '' }}" />
                </div>

                <div class="col-12">
                    <label for="meta_title">Meta Title</label>
                    <textarea id="meta_title" name="settings[meta_title]" class="form-control">{{ $setting['meta_title'] ?? '' }}</textarea>
                </div>

                <div class="col-12">
                    <label for="meta_description">Meta Description</label>
                    <textarea id="meta_description" name="settings[meta_description]" class="form-control">{{ $setting['meta_description'] ?? '' }}</textarea>
                </div>



            </div>
            <div class="pt-4">
                <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                <button type="reset" class="btn btn-label-secondary">Reset</button>
            </div>
        </form>
    </div>
</div>
