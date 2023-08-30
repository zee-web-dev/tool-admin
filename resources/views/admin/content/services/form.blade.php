<div class="row g-3">

    <div class="col-md-6">
        <label class="form-label" for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Title"
            value="{{ $service->title ?? '' }}" required>
    </div>

    <div class="col-md-6">
        <label class="form-label" for="image">Image</label>
        <input type="file" class="form-control" id="image" name="image"
            {{ isset($service->image) ? '' : 'required' }}>
    </div>

    <div class="col-md-12">
        <label class="form-label" for="description">Description</label>
        <textarea id="description" class="form-control" name="description">{{ $service->description ?? '' }}</textarea>
    </div>

</div>
