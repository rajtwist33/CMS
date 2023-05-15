@extends('backend.layout.app')
@push('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.css" />
@endpush
@push('main')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <h3>Settings</h3>
                </div>
                <div class="col-12 col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}"> <i data-feather="home">Home</i></a>
                        </li>
                        <li class="breadcrumb-item active">Settings</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    {{-- Start from Here  --}}
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-2">
                    <div class="card-body">
                        <form action="{{ route('admin.settings.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <label class="form-label" for="validationCustom01"> Company name</label>
                                    <input class="form-control" id="validationCustom01" type="text" required
                                        name="name" placeholder="name" value="{{ $setting->name ?? '' }}">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label" for="validationCustom02">Company Address</label>
                                    <input class="form-control" id="validationCustom02" type="text" required
                                        name="address" placeholder="address" value="{{ $setting->address ?? '' }}">
                                </div>
                                <div class="col-md-4 ">
                                    <label class="form-label" for="validationCustom02">Company Phone</label>
                                    <input class="form-control" id="validationCustom02" type="text" required
                                        name="phone" placeholder="phone" value="{{ $setting->phone ?? '' }}">
                                </div>

                            </div>
                            <br>
                            <div class="row g-3 mb-3">
                                <div class="col-md-6">
                                    <label class="form-label" for="validationCustom03">Company Email</label>
                                    <input class="form-control" id="validationCustom03" type="email" placeholder="Email"
                                        required name="email" value="{{ $setting->email ?? '' }}">
                                    <div class="invalid-feedback">Please provide a valid Email.</div>
                                </div>

                                <div class="col-md-6 ">
                                    <label class="form-label" for="validationCustom05">Maps Link</label>
                                    <input class="form-control" id="validationCustom05" type="text" placeholder="links"
                                        required name="map_links" value="{{ $setting->maps ?? '' }}">

                                </div>
                            </div>
                            <h2 class="m-2">Set Logo</h2>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <input type="file" name="logo" class="form-control" id="fileInput" />
                                </div>
                                <div class="col-md-6">

                                    <img src="{{ $setting != '' ? asset('logo/' . $setting->logo) : '' }}" id="preview"
                                        class="img-fluid rounded" width="60%;" height="50%;" />

                                </div>
                            </div>
                            <h2 class="m-2">Social Links</h2>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <i class="bi bi-facebook fs-2"></i>
                                    <input class="form-control" id="validationDefault03" type="text"
                                        placeholder="facebook" name="facebook" value="{{ $setting->link->facebook ?? '' }}">
                                </div>
                                <div class="col-md-6">
                                    <i class="bi bi-tiktok fs-2"></i>
                                    <input class="form-control" id="validationDefault03" type="text" placeholder="tiktok"
                                        name="tiktok" value="{{ $setting->link->tiktok ?? '' }}">
                                </div>
                                <div class="col-md-6">
                                    <i class="bi bi-linkedin fs-2"></i>
                                    <input class="form-control" id="validationDefault03" type="text"
                                        placeholder="linkedin" name="linkedin"
                                        value="{{ $setting->link->linkedin ?? '' }}">
                                </div>
                                <div class="col-md-6">
                                    <i class="bi bi-youtube fs-2"></i>
                                    <input class="form-control" id="validationDefault03" type="text"
                                        placeholder="youtube" name="youtube" value="{{ $setting->id ?? '' }}">
                                </div>
                                <input type="hidden" name="data_id" id="" value="{{ $setting->id ?? '' }}">
                            </div>
                            <h2 class="mt-4 text-center">Set Footer</h2>
                            <div class="row g-3">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Footer Discription</label>
                                        <textarea id="summernote" name="footer">{!! $setting->footer ?? '' !!}</textarea>
                                    </div>

                                </div>
                            </div>
                            <button class="btn btn-primary mt-2" type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endpush
@push('script')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.js"></script>
    <script>
        const fileEle = document.getElementById('fileInput');
        const previewEle = document.getElementById('preview');
        fileEle.addEventListener('change', function(e) {
            // Get the selected file
            const file = e.target.files[0];

            // Create a new URL that references to the file
            const url = URL.createObjectURL(file);

            // Set the source for preview element
            previewEle.src = url;
        });
        fileEle.addEventListener('change', function(e) {
            // Get the selected file
            const file = e.target.files[0];

            const reader = new FileReader();
            reader.addEventListener('load', function() {
                // Set the source for preview element
                previewEle.src = reader.result;
            });

            reader.readAsDataURL(file);
        });
    </script>
      <script type="text/javascript">
        $(document).ready(function () {
            $('#summernote').summernote({
                height: 100,
            });
        });
    </script>
@endpush
