<div class="card">
    <div class="card-body">
        <form action="{{ route('settings.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row g-3">

                <div class="col col-md-6">
                    <label for="experience">Experience (years)</label>
                    <input type="number" min="0" id="experience" name="settings[experience]" class="form-control"
                        value="{{ $setting['experience'] ?? '' }}" />
                </div>

                <div class="col col-md-6">
                    <label for="projects">Projects Done</label>
                    <input type="number" min="0" id="projects" name="settings[projects]" class="form-control"
                        value="{{ $setting['projects'] ?? '' }}" />
                </div>

                <div class="col col-md-6">
                    <label for="clients">Happy Clients</label>
                    <input type="number" min="0" id="clients" name="settings[clients]" class="form-control"
                        value="{{ $setting['clients'] ?? '' }}" />
                </div>

                <div class="col col-md-6">
                    <label for="awards">Awards Won</label>
                    <input type="number" min="0" id="awards" name="settings[awards]" class="form-control"
                        value="{{ $setting['awards'] ?? '' }}" />
                </div>

            </div>
            <div class="pt-4">
                <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                <button type="reset" class="btn btn-label-secondary">Reset</button>
            </div>
        </form>
    </div>
</div>
