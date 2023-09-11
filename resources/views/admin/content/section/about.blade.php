<div class="card">
    <div class="card-body">
        <form action="{{ route('sections.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row g-3">

                <div class="col col-md-12">
                    <label for="about_heading">Heading</label>
                    <input type="text" id="about_heading" name="sections[about_heading]" class="form-control"
                        placeholder="Name" value="{{ $section['about_heading'] ?? '' }}" />
                </div>

                <div class="col-12">
                    <label for="about_desc">Description</label>
                    <textarea id="about_desc" name="sections[about_desc]" class="form-control">{{ $section['about_desc'] ?? '' }}</textarea>
                </div>

            </div>
            <div class="pt-4">
                <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                <button type="reset" class="btn btn-label-secondary">Reset</button>
            </div>
        </form>
    </div>
</div>
