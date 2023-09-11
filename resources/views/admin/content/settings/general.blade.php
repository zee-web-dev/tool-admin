<div class="card">
    <div class="card-body">
        <form action="{{ route('settings.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row g-3">

                <div class="col col-md-6">
                    <label for="site_name">Site Name</label>
                    <input type="text" id="site_name" name="settings[site_name]" class="form-control" placeholder="Name"
                        value="{{ $setting['site_name'] ?? '' }}" />
                </div>

                <div class="col col-md-6">
                    <label for="user_name">User Name</label>
                    <input type="text" id="user_name" name="settings[user_name]" class="form-control" placeholder="Name"
                        value="{{ $setting['user_name'] ?? '' }}" />
                </div>

                <div class="col col-md-4">
                    <label for="profile_image">Profile Image</label>
                    <input type="file" id="profile_image" name="settings[profile_image]" class="form-control"
                        placeholder="App favicon" value="{{ $setting['profile_image'] ?? '' }}" />
                </div>

                <div class="col col-md-4">
                    <label for="cv">CV</label>
                    <input type="file" id="cv" name="settings[cv]" class="form-control"
                        placeholder="App favicon" value="{{ $setting['cv'] ?? '' }}" />
                </div>

                <div class="col col-md-4">
                    <label for="signature">Signature</label>
                    <input type="file" id="signature" name="settings[signature]" class="form-control"
                        placeholder="App favicon" value="{{ $setting['signature'] ?? '' }}" />
                </div>

                <div class="col-12">
                    <label for="footer_text">Footer Text</label>
                    <textarea id="footer_text" name="settings[footer_text]" class="form-control">{{ $setting['footer_text'] ?? '' }}</textarea>
                </div>

            </div>
            <div class="pt-4">
                <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                <button type="reset" class="btn btn-label-secondary">Reset</button>
            </div>
        </form>
    </div>
</div>
