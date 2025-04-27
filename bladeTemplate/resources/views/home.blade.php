@extends('layouts.app')

@section('content')
    <h2>This is the Home Page</h2>
@endsection

{{-- Pushing CSS into styles stack --}}
@push('styles')
    <link rel="stylesheet" href="/css/home.css">
@endpush

{{-- Pushing another CSS into styles stack --}}
@push('styles')
    <link rel="stylesheet" href="/css/another.css">
@endpush

{{-- Prepending a critical CSS --}}
@prepend('styles')
    <link rel="stylesheet" href="/css/critical.css">
@endprepend

{{-- Pushing JS into scripts stack --}}
@push('scripts')
    <script src="/js/home.js"></script>
@endpush

{{-- Pushing another JS into scripts stack --}}
@push('scripts')
    <script src="/js/extra.js"></script>
@endpush

{{-- Prepending an important JS --}}
@prepend('scripts')
    <script src="/js/critical.js"></script>
@endprepend 
