@extends('layouts.master')
{{--@extends('layouts.page')--}}

@section('title')@endsection
@section('head')@endsection
@section('top-content')@endsection

@section('content')
    <div class="row">
        <div class="@yield('page-col-size')">
            <div class="card mb-0" style="clip-path: polygon(0px 0px, 0px 100%, 100% 100%, 100% 100%, 93.02% 0px);">
                <div class="card-header bg-light bg-opacity-75 text-white">
                    <h3 class="mb-0 fw-lighter">
                        @yield('title')
                    </h3>
                </div>
            </div>
            <div class="row">
                <div class="">
                    <div class="card">
                        <div class="card-body">
                            @yield('page-content')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @yield('page-content-models')
@endsection

@push('script')@endpush
