<div class="row g-3">
    <input type="hidden" name="id" value="{{$skill->id ?? ''}}">
    <div class="col-md-6">
        <label class="form-label" for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Name"
            value="{{ $skill->name ?? '' }}" required>
    </div>

    <div class="col-md-6">
        <label class="form-label" for="value">Value</label>
        <input type="number" class="form-control" id="value" name="value" min="0"
            value="{{ $skill->value ?? '' }}" required>
    </div>

    <div class="col-md-12">
        <label class="form-label" for="status">Status</label>
        <select name="status" id="status" class="form-control">
            <option value="">Select Option</option>
            <option value="1" {{ isset($skill) && $skill->status == 1 ? "selected" :  '' }}>Active</option>
            <option value="0" {{ isset($skill) && $skill->status == 0 ? "selected" :  '' }}>In-Active</option>
        </select>
    </div>
</div>
