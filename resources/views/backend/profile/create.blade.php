@extends('backend.layouts.app')
@section('title','Admin User' )
@section('profile-active','mm-active')
@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-user icon-gradient bg-mean-fruit"></i>
            </div>
            <div>Created Admin User</div>
        </div>
    </div>
</div>
<section class="content pb-3">
    <div class="card card-body">
        <form action="{{ route('admin.profile.store') }}" autocomplete="off" method="POST"
            enctype="multipart/form-data" id="create">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Name (EN)</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Name (MM)</label>
                        <input type="text" name="name_mm" class="form-control">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Phone Number</label>
                        <input type="text" name="phone" class="form-control">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>NRC Number</label>
                        <input type="text" name="nrc_no" class="form-control">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Date of Birth</label>
                        <input type="text" name="dob" class="form-control birthday">
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="" class="d-block mb-1">Gender</label>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="male" name="gender" value="1"
                            class="custom-control-input" checked>
                        <label class="custom-control-label" for="male">Male</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="female" name="gender" value="2"
                            class="custom-control-input">
                        <label class="custom-control-label" for="female">Female</label>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Bio</label>
                        <textarea name="bio" class="form-control"></textarea>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Address (EN)</label>
                        <textarea name="address" class="form-control"></textarea>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Address (MM)</label>
                        <textarea name="address_mm" class="form-control"></textarea>
                    </div>
                </div>

                {{-- <div class="col-md-6">
                    <div class="form-group">
                        <label>City</label>
                        <select name="city_id" id="city" class="form-control select-single">
                            <option value=""></option>
                            @foreach ($cities as $city)
                                <option value="{{ $city->id }}">{{ $city->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div> --}}

                {{-- <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Profile Image (Recommended 250x250) </label>
                        <div class="input-group mb-1">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="profileAddon"><i
                                        class="fas fa-cloud-upload-alt"></i></span>
                            </div>
                            <div class="custom-file">
                                <input type="file" name="profile" class="custom-file-input"
                                    id="profile" accept="image/*" aria-describedby="profileAddon">
                                <label class="custom-file-label" for="profile">Choose file</label>
                            </div>
                        </div>
                        <div class="image_preview"></div>
                    </div>
                </div> --}}

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                </div>
            </div>

            <div class="row justify-content-center mt-3">
                <a href="{{ route('admin.profile.index') }}"
                    class="btn btn-danger action-btn mr-2">Cancel</a>
                <button type="submit" class="btn btn-primary action-btn">Confirm</button>
            </div>
        </form>
    </div>
</section>
@endsection
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreAdminUser', '#create') !!}
    <script>
        $(document).ready(function() {
            $('.birthday').daterangepicker({
                singleDatePicker: true,
                showDropdowns: true,
                locale: {
                    format: 'YYYY-MM-DD'
                },
                minYear: 1901,
                minDate: moment().subtract(100, 'year'),
                maxDate: moment()
            });

            // $('#profile').on('change', function() {
            //     var total_file = document.getElementById("profile").files.length;
            //     $('.image_preview').html('');
            //     for (var i = 0; i < total_file; i++) {
            //         $('.image_preview').append("<img src='" + URL.createObjectURL(event.target.files[i]) +
            //             "' class='zoomify'>");
            //     }
            // });
        })
    </script>
@endsection