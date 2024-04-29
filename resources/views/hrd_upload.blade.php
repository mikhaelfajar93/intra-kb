@extends('layout.main')
@section('hrd_u_active', 'active')
@section('content')
    <div class="conatiner-fluid content-inner mt-n5 py-0">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Upload File HRD</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="customFile2" class="form-label custom-file-input">Choose file</label>
                            <input class="form-control" type="file" id="customFile2">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
