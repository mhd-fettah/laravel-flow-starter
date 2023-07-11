@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="card">
        <div class="card-body border-top">
            <p class="text-muted mb-4">In this month</p>
            <div class="text-center">
                <div class="row">
                    <div class="col-sm-4">
                        <div>
                            <div class="text-primary font-size-24 mb-2"><i class="bx bx-send"></i></div>
                            <p class="text-muted mb-2">Send</p>
                            <h5>$ 654.42</h5>
                            <div class="mt-3"><a class="btn btn-primary btn-sm w-md" role="button">Send</a></div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="mt-4 mt-sm-0">
                            <div class="text-primary font-size-24 mb-2"><i class="bx bx-import"></i></div>
                            <p class="text-muted mb-2">receive</p>
                            <h5>$ 1054.32</h5>
                            <div class="mt-3"><a class="btn btn-primary btn-sm w-md" role="button">Receive</a></div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="mt-4 mt-sm-0">
                            <div class="text-primary font-size-24 mb-2"><i class="bx bx-wallet"></i></div>
                            <p class="text-muted mb-2">Withdraw</p>
                            <h5>$ 824.34</h5>
                            <div class="mt-3"><a class="btn btn-primary btn-sm w-md" role="button">Withdraw</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
