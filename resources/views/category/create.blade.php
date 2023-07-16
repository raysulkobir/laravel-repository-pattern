@section('title', $title)
@section('description', $description)
@extends('layout.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex align-items-center user-member__title mb-30 mt-30">
                    <h4 class="text-capitalize">{{ trans('menu.customer-add-new') }}</h4>
                </div>
            </div>
        </div>
        <div class="card mb-50">
            <div class="row justify-content-center">
                <div class="col-sm-5 col-10">
                    <div class="mt-40 mb-50">
                        <form action="{{ route('category.store', app()->getLocale()) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="account-profile d-flex align-items-center mb-4 ">
                                <div class="ap-img pro_img_wrapper">
                                    <input id="profile-picture" type="file" accept="image/*" name="image" class="d-none image-upload-field" data-preview-element="profile-picture-preview">
                                    <!-- Profile picture image-->
                                    <label for="profile-picture">
                                        <img src="{{ asset( 'assets/img/svg/user.svg' ) }}" alt="user" class="profile-picture-preview ap-img__main rounded-circle wh-120 bg-lighter d-flex">

                                        <span
                                            title="Pick an image"
                                            id="remove_pro_pic"
                                            class="cross clear-input-file-btn"
                                            data-input-has-file="0"
                                            data-pick-title="Pick an image"
                                            data-pick-icon="{{ asset( 'assets/img/svg/camera.svg' ) }}"
                                            data-clear-title="Remove"
                                            data-clear-icon="{{ asset( 'assets/img/svg/camera.svg' ) }}"
                                            data-input-element-id="profile-picture"
                                            data-preview-element="profile-picture-preview"
                                            data-default-preview-image="{{ asset( 'assets/img/svg/user.svg' ) }}"
                                        >
                                            <img src="{{ asset( 'assets/img/svg/camera.svg' ) }}" alt="camera">
                                        </span>
                                    </label>
                                </div>
                                <div class="account-profile__title">
                                    <h6 class="fs-15 ms-20 fw-500 text-capitalize">profile photo</h6>
                                </div>
                            </div>

                            <div class="edit-profile__body">
                                <div class="form-group mb-25">
                                    <label for="name" class="color-dark fs-14 fw-500 align-center">Name <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15"
                                        name="name" value="{{ old('name') }}" id="name" placeholder="Name">
                                    @if ($errors->has('name'))
                                        <p class="text-danger">{{ $errors->first('name') }}</p>
                                    @endif
                                </div>



                                <div class="button-group d-flex pt-25 justify-content-md-end justify-content-start">
                                    <button type="submit"
                                        class="btn btn-primary btn-default btn-squared radius-md shadow2 btn-sm">Submit</button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
