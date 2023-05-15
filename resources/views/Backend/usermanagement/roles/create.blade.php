@extends('backend.layout.app')
@push('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.css" />
@endpush
@push('main')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <h3>Roles</h3>
                </div>
                <div class="col-12 col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}"> <i data-feather="home">Home</i></a>
                        </li>
                        <li class="breadcrumb-item active">Roles</li>
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
                        <div class="row justify-content-evenly">
                            <div class="col-md-6">

                                <form action="{{ route('admin.roles.store') }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row g-3 ">

                                        <div class="col-md-12">
                                            <label class="form-label" for="validationCustom01"> Role</label>
                                            <input class="form-control" id="validationCustom01" type="text" required
                                                name="role" placeholder="Role" value="{{ $edit->name ?? '' }}">
                                        </div>
                                        <div class="col-md-12 mt-3">
                                            <div class="row">
                                                @foreach ($permissions as $per)
                                                <div class="col-md-4">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                            name="permission[]" value="{{$per->id}}"
                                                                id="flexCheckIndeterminate">
                                                            <label class="form-check-label" for="{{ $per->id }}">
                                                                {{ $per->name }}
                                                            </label>
                                                        </div>
                                                    </div>
                                                        @endforeach
                                            </div>
                                        </div>
                                        <input type="hidden" name="data_id" value="{{ $edit->id ?? '' }}">
                                    </div>
                                    <button class="btn btn-primary mt-2 " type="submit">Submit</button>
                                </form>
                            </div>
                        </div>
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
        $(document).ready(function() {
            $('#summernote').summernote({
                height: 100,
            });
        });
    </script>
@endpush
