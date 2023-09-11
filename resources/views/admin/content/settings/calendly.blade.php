<div class="card">
    <div class="card-body">
        <form action="{{ route('settings.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row g-3">

                <div class="col col-md-6">
                    <label for="calendly_token">Token</label>
                    <input type="text" id="calendly_token" name="settings[calendly_token]" class="form-control"
                        placeholder="Token" value="{{ $setting['calendly_token'] ?? '' }}" />
                </div>

                <div class="col col-md-6">
                    <label for="calendly_base_url">Base URL</label>
                    <input type="url" id="calendly_base_url" name="settings[calendly_base_url]" class="form-control"
                        placeholder="Base URL" value="{{ $setting['calendly_base_url'] ?? '' }}" />
                </div>

                <div class="col col-md-6">
                    <label for="calendly_user">User</label>
                    <input type="url" id="calendly_user" name="settings[calendly_user]" class="form-control"
                        placeholder="User" value="{{ $setting['calendly_user'] ?? '' }}" />
                </div>

                <div class="col col-md-6">
                    <label for="calendly_organization">Organization</label>
                    <input type="url" id="calendly_organization" name="settings[calendly_organization]"
                        class="form-control" placeholder="Organization"
                        value="{{ $setting['calendly_organization'] ?? '' }}" />
                </div>

                <div class="col">
                    <label for="calendly_script">Script</label>
                    <textarea name="settings[calendly_script]" id="calendly_script" class="form-control">{{ $setting['calendly_script'] ?? '' }}</textarea>

                </div>




            </div>
            <div class="pt-4">
                <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                <button type="reset" class="btn btn-label-secondary">Reset</button>
            </div>
        </form>
    </div>
</div>
