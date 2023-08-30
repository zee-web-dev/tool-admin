<div class="row g-3">
    <div class="col-md-6">
        <label class="form-label" for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Title"
            value="{{ $experience->title ?? '' }}" required>
    </div>

    <div class="col-md-6">
        <label class="form-label" for="status">Status</label>
        <select name="status" id="status" class="form-control">
            <option value="">Select Option</option>
            <option value="1" {{ isset($experience) && $experience->status == 1 ? "selected" :  '' }}>Active</option>
            <option value="0" {{ isset($experience) && $experience->status == 0 ? "selected" :  '' }}>In-Active</option>
        </select>
    </div>

    <div class="col-md-6">
        <label class="form-label" for="company">Company Name</label>
        <input type="text" class="form-control" id="company" name="company" placeholder="Company Name"
            value="{{ $experience->company ?? '' }}" required>
    </div>

    <div class="col-md-6">
        <label class="form-label" for="link">Company URL</label>
        <input type="url" class="form-control" id="link" name="link" placeholder="Link"
            value="{{ $experience->link ?? '' }}" required>
    </div>

    <div class="col-md-6">
        <label class="form-label" for="from">From</label>
        <input type="date" class="form-control" id="from" name="from"
            value="{{ $experience->from ?? '' }}" required>
    </div>

    <div class="col-md-6">
        <label class="form-label" for="to">To</label>
        <input type="date" class="form-control" id="to" name="to"
            value="{{ $experience->to ?? '' }}" required>
    </div>

    <div class="col-md-12">
        <label class="form-label" for="location">Location</label>
        <textarea id="location" class="form-control" name="location">{{ $experience->location ?? '' }}</textarea>
    </div>

    <div class="col-md-12">
        <label class="form-label" for="description">Description</label>
        <textarea id="description" class="form-control" name="description">{{ $experience->description ?? '' }}</textarea>
    </div>
</div>
