@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Coordinator Dashboard') }}</div>

                <div class="card-body">
                    <div class="form-group text-center">
                        <h2>Welcome {{ Auth::user()->name }}! </h2>
                        <h5>Below are some of the functions/features to get started.</h5>
                    </div>

                    <div class="form-group">
                        <a href="{{ route('forms.index') }}" class="btn btn-primary btn-block">Forms</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
