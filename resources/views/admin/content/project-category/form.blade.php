<div class="row g-3">
    <input type="hidden" name="id" value="{{$projectCategory->id ?? '' }}">

    <div class="col-md-12">
        <label class="form-label" for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Title"
            value="{{ $projectCategory->title ?? '' }}" required>
    </div>

    <div class="col-md-12">
        <label class="form-label" for="description">Description</label>
        <textarea id="description" class="form-control" name="description">{{ $projectCategory->description ?? '' }}</textarea>
    </div>

</div>
