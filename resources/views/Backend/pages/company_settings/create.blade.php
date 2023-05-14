@extends('backend.layout.app')
@push('style')
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
                        <li class="breadcrumb-item"><a href="{{ url('/') }}"> <i data-feather="home"></i></a>
                        </li>
                        <li class="breadcrumb-item">Settings</li>
                        <li class="breadcrumb-item active">settings</li>
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
                        <form action="{{route('admin.settings.store')}}" method="post">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <label class="form-label" for="validationCustom01"> Company name</label>
                                    <input class="form-control" id="validationCustom01" type="text"
                                        required name="name" placeholder="name" value="{{ $setting->name ?? ''}}">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label" for="validationCustom02">Company Address</label>
                                    <input class="form-control" id="validationCustom02" type="text"
                                        required name="address" placeholder="address" value="{{ $setting->address ?? ''}}">
                                </div>
                                <div class="col-md-4 ">
                                    <label class="form-label" for="validationCustom02">Company Phone</label>
                                    <input class="form-control" id="validationCustom02" type="text"
                                        required name="phone" placeholder="phone" value="{{ $setting->phone ?? ''}}">
                                </div>

                            </div>
                            <br>
                            <div class="row g-3 mb-3">
                                <div class="col-md-6">
                                    <label class="form-label" for="validationCustom03">Company Email</label>
                                    <input class="form-control" id="validationCustom03" type="email" placeholder="Email"
                                        required name="email" value="{{ $setting->email ?? ''}}">
                                    <div class="invalid-feedback">Please provide a valid Email.</div>
                                </div>

                                <div class="col-md-6 ">
                                    <label class="form-label" for="validationCustom05">Maps Link</label>
                                    <input class="form-control" id="validationCustom05" type="text" placeholder="links"
                                        required name="map_links" value="{{ $setting->maps ?? ''}}">

                                </div>
                            </div>
                            <h2>Social Links</h2>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <i class="bi bi-facebook fs-2"></i>
                                    <input class="form-control" id="validationDefault03" type="text"
                                        placeholder="facebook" name="facebook" value="{{ $setting->link->facebook ?? ''}}">
                                </div>
                                <div class="col-md-6">
                                    <i class="bi bi-tiktok fs-2"></i>
                                    <input class="form-control" id="validationDefault03" type="text"
                                        placeholder="tiktok" name="tiktok" value="{{ $setting->link->tiktok  ?? ''}}">
                                </div>
                                <div class="col-md-6">
                                    <i class="bi bi-linkedin fs-2"></i>
                                    <input class="form-control" id="validationDefault03" type="text"
                                        placeholder="linkedin" name="linkedin" value="{{ $setting->link->linkedin  ?? ''}}">
                                </div>
                                <div class="col-md-6">
                                    <i class="bi bi-youtube fs-2"></i>
                                    <input class="form-control" id="validationDefault03" type="text"
                                        placeholder="youtube" name="youtube" value="{{ $setting->id ?? ''}}">
                                </div>
                                <input type="hidden" name="data_id" id="" value="{{ $setting->id ?? ''}}">
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
@endpush
