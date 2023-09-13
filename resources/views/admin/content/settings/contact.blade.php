<div class="card">
    <div class="card-body">
        <form action="{{ route('settings.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row g-3">

                <div class="col col-md-6">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="settings[email]" class="form-control" placeholder="Email"
                        value="{{ $setting['email'] ?? '' }}" />
                </div>

                <div class="col col-md-6">
                    <label for="contact">Contact</label>
                    <input type="text" id="contact" name="settings[contact]" class="form-control"
                        placeholder="Contact" value="{{ $setting['contact'] ?? '' }}" />
                </div>

                <div class="col-12">
                    <label for="address">Address</label>
                    <textarea id="address" name="settings[address]" class="form-control">{{ $setting['address'] ?? '' }}</textarea>
                </div>

                <div class="col col-md-6">
                    <label for="facebook">Facebook</label>
                    <input type="url" id="facebook" name="settings[facebook]" class="form-control"
                        value="{{ $setting['facebook'] ?? '' }}" />
                </div>

                <div class="col col-md-6">
                    <label for="twitter">Twiiter</label>
                    <input type="url" id="twitter" name="settings[twitter]" class="form-control"
                        value="{{ $setting['twitter'] ?? '' }}" />
                </div>

                <div class="col col-md-6">
                    <label for="linkedin">Linkedin</label>
                    <input type="url" id="linkedin" name="settings[linkedin]" class="form-control"
                        value="{{ $setting['linkedin'] ?? '' }}" />
                </div>

                <div class="col col-md-6">
                    <label for="github">Github</label>
                    <input type="url" id="github" name="settings[github]" class="form-control"
                        value="{{ $setting['github'] ?? '' }}" />
                </div>

            </div>
            <div class="pt-4">
                <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                <button type="reset" class="btn btn-label-secondary">Reset</button>
            </div>
        </form>
    </div>
</div>
