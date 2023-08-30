<div class="row g-3">

    <div class="col-md-6">
        <label class="form-label" for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Title"
            value="{{ $project->title ?? '' }}" required>
    </div>

    <div class="col-md-6">
        <label class="form-label" for="image">Image</label>
        <input type="file" class="form-control" id="image" name="image"
            {{ isset($project->image) ? '' : 'required' }}>
    </div>

    <div class="col-md-6">
        <label class="form-label" for="link">Link</label>
        <input type="url" class="form-control" id="link" name="link" placeholder="Link"
            value="{{ $project->link ?? '' }}" required>
    </div>

    <div class="col-md-6">
        <label class="form-label" for="project_category_id">Category</label>
        <select name="project_category_id" id="project_category_id" class="form-control">
            <option value="">Select Option</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}"
                    {{  isset($project) && $project->project_category_id ==  $category->id ? 'selected' : '' }}>{{ $category->title }}</option>
            @endforeach
        </select>
    </div>

    <div class="col-md-12">
        <label class="form-label" for="description">Description</label>
        <textarea id="description" class="form-control" name="description">{{ $project->description ?? '' }}</textarea>
    </div>

</div>
