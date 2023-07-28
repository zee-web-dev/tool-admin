@extends('admin.master')
@section('content')
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <h1 class="mb-3">Settings</h1>
                <form>
                    <div class="row
                    ">
                        <div class="col-md-6">
                            <label for="your-name" class="form-label">Username</label>
                            <input type="text" class="form-control" id="your-name" name="your-name" required>
                        </div>
                        <div class="col-md-6">
                            <label for="your-surname" class="form-label">Surname</label>
                            <input type="text" class="form-control" id="your-surname" name="your-surname" required>
                        </div>
                        <div class="col-md-6">
                            <label for="your-email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="your-email" name="your-email" required>
                        </div>
                        <div class="col-md-6">
                            <label for="your-subject" class="form-label">Subject</label>
                            <input type="text" class="form-control" id="your-subject" name="your-subject">
                        </div>
                        <div class="col-12">
                            <label for="your-message" class="form-label">Message</label>
                            <textarea class="form-control" id="your-message" name="your-message" rows="5" required></textarea>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary w-100 ">Send</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection
