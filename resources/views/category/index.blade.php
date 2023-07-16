@section('title', $title)
@section('description', $description)
@extends('layout.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="contact-breadcrumb">
                    <div class="breadcrumb-main add-contact justify-content-sm-between ">
                        <div class=" d-flex flex-wrap justify-content-center breadcrumb-main__wrapper">
                            <div class="d-flex align-items-center add-contact__title justify-content-center me-sm-25">
                                <h4 class="text-capitalize fw-500 breadcrumb-title">{{ trans('menu.customer-view-all') }}
                                </h4>
                                <span class="sub-title ms-sm-25 ps-sm-25"></span>
                            </div>
                            <div class="action-btn mt-sm-0 mt-15">
                                <a href="{{ route('category.create', app()->getLocale()) }}" class="btn px-20 btn-primary ">
                                    <i class="las la-plus fs-16"></i>Add New
                                </a>
                            </div>
                        </div>
                        <div class="breadcrumb-main__wrapper">

                            <form action="/" class="d-flex align-items-center add-contact__form my-sm-0 my-2">
                                <img src="{{ asset('assets/img/svg/search.svg') }}" alt="search" class="svg">
                                <input class="form-control me-sm-2 border-0 box-shadow-none" type="search"
                                    placeholder="Search by Name" aria-label="Search">
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 mb-30">
                <div class="card">
                    <div class="card-header color-dark fw-500">
                        Categories List
                    </div>
                    <div class="card-body">
                        <div class="userDatatable global-shadow border-light-0 w-100">
                            <div class="table-responsive">
                                <table class="table mb-0 table-borderless">
                                    <thead>
                                        <tr class="userDatatable-header">
                                            <th>
                                                <span class="userDatatable-title">Name</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">Image</span>
                                            </th>

                                            <th>
                                                <span class="userDatatable-title float-end">Actions</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (count($categories) == 0)
                                            <tr>
                                                <td colspan="7">
                                                    <p class="text-center">No Customer Found !</p>
                                                </td>
                                            </tr>
                                        @else
                                            @foreach ($categories as $category)
                                                @php
                                                    $category_image = !empty($category->image);
                                                    echo app()->getLocale();
                                                @endphp
                                                <tr>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            {{ $category->name }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <div
                                                                class="userDatatable__imgWrapper d-flex align-items-center">
                                                                <a href="#"
                                                                    class="profile-image rounded-circle d-block m-0 wh-38"
                                                                    style="background-image:url('{{ $category_image ? Helper::get_public_storage_asset_url($category->image) : asset('assets/img/svg/user.svg') }}'); background-size: cover;"></a>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                                            <li>
                                                                <a href="{{ route('category.edit', [app()->getLocale(), $category->id]) }}" class="edit">
                                                                    <i class="uil uil-edit"></i>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="{{ route('category.destroy', [app()->getLocale(), $category->id]) }}" class="remove">
                                                                    <i class="uil uil-trash-alt"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        {{-- <div class="pagination-container d-flex justify-content-end pt-25">
                            {{ $customers->links( 'pagination::bootstrap-5' ) }}

                            <ul class="dm-pagination d-flex">
                                <li class="dm-pagination__item">
                                    <div class="paging-option">
                                        <select name="page-number" class="page-selection" onchange="updatePagination( event )">
                                            <option value="20" {{ 20 == $customers->perPage() ? 'selected' : '' }}>20/page</option>
                                            <option value="40" {{ 40 == $customers->perPage() ? 'selected' : '' }}>40/page</option>
                                            <option value="60" {{ 60 == $customers->perPage() ? 'selected' : '' }}>60/page</option>
                                        </select>
                                        <a href="/pagination-per-page/20" class="d-none per-page-pagination"></a>
                                    </div>
                                </li>
                            </ul>

                            <script>
                                function updatePagination( event ) {
                                    var per_page = event.target.value;

                                    const per_page_link = document.querySelector( '.per-page-pagination' );
                                    per_page_link.setAttribute( 'href', '/pagination-per-page/' + per_page  );

                                    per_page_link.click();
                                }
                            </script>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
