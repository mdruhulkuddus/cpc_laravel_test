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

                    dashbord check
                    <br>
                    <button type="button" class="btn btn-primary">about</button>
<button type="button" class="btn btn-secondary">submit</button>
<button type="button" class="btn btn-success">Success</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
