<div class="card">
    <div class="card-body">
        <form action="{{ route('sections.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">

                <div class="col col-md-12">
                    <label for="prof_text">Professionl Text <small>( ' seprated )</small> </label>
                    <input type="text" id="prof_text" name="sections[prof_text]" class="form-control"
                        placeholder="e.g. Laravel Developer, Flutter Developer"
                        value="{{ $section['prof_text'] ?? '' }}" />
                </div>

            </div>
            <h5 class="mt-3 mb-1">Card # 1</h5>
            <div class="row g-3">

                <div class="col col-md-4">
                    <label for="tech_icon_1">Tech Icon</label>
                    <input type="file" id="tech_icon_1" name="sections[tech_icon_1]" class="form-control"
                        placeholder="App favicon" value="{{ $section['tech_icon_1'] ?? '' }}" />
                </div>

                <div class="col col-md-4">
                    <label for="tech_title_1">Tech Title</label>
                    <input type="text" id="tech_title_1" name="sections[tech_title_1]" class="form-control"
                        placeholder="e.g. Laravel" value="{{ $section['tech_title_1'] ?? '' }}" />
                </div>

                <div class="col col-md-4">
                    <label for="tech_subtitle_1">Tech Subtitle</label>
                    <input type="text" id="tech_subtitle_1" name="sections[tech_subtitle_1]" class="form-control"
                        placeholder="Backend" value="{{ $section['tech_subtitle_1'] ?? '' }}" />
                </div>

            </div>

            <h5 class="mt-3 mb-1">Card # 2</h5>
            <div class="row g-3">

                <div class="col col-md-4">
                    <label for="tech_icon_2">Tech Icon</label>
                    <input type="file" id="tech_icon_2" name="sections[tech_icon_2]" class="form-control"
                        placeholder="App favicon" value="{{ $section['tech_icon_2'] ?? '' }}" />
                </div>

                <div class="col col-md-4">
                    <label for="tech_title_2">Tech Title</label>
                    <input type="text" id="tech_title_2" name="sections[tech_title_2]" class="form-control"
                        placeholder="e.g. Laravel" value="{{ $section['tech_title_2'] ?? '' }}" />
                </div>

                <div class="col col-md-4">
                    <label for="tech_subtitle_2">Tech Subtitle</label>
                    <input type="text" id="tech_subtitle_2" name="sections[tech_subtitle_2]" class="form-control"
                        placeholder="Backend" value="{{ $section['tech_subtitle_2'] ?? '' }}" />
                </div>

            </div>

            <h5 class="mt-3 mb-1">Card # 3</h5>
            <div class="row g-3">

                <div class="col col-md-4">
                    <label for="tech_icon_3">Tech Icon</label>
                    <input type="file" id="tech_icon_3" name="sections[tech_icon_3]" class="form-control"
                        placeholder="App favicon" value="{{ $section['tech_icon_3'] ?? '' }}" />
                </div>

                <div class="col col-md-4">
                    <label for="tech_title_3">Tech Title</label>
                    <input type="text" id="tech_title_3" name="sections[tech_title_3]" class="form-control"
                        placeholder="e.g. Laravel" value="{{ $section['tech_title_3'] ?? '' }}" />
                </div>

                <div class="col col-md-4">
                    <label for="tech_subtitle_3">Tech Subtitle</label>
                    <input type="text" id="tech_subtitle_3" name="sections[tech_subtitle_3]" class="form-control"
                        placeholder="Backend" value="{{ $section['tech_subtitle_3'] ?? '' }}" />
                </div>

            </div>

            <div class="pt-4">
                <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                <button type="reset" class="btn btn-label-secondary">Reset</button>
            </div>
        </form>
    </div>
</div>
