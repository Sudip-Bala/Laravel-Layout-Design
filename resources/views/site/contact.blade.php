@extends("layouts.dashboard")

@push('styles')
<link rel="stylesheet" href="https://matcha.mizu.sh/matcha.css">
@endpush

@section("title")
-Contract
@endsection


@section("content")
<h2>Contact Page</h2>
<p>Contact Page Content</p>
@include('partials.form')
@endsection

@section('sidebar')
@parent

@include('partials.address')

@endsection

@section('footer')
Copyright 2024
@endsection


@push('scripts')
    <script>
        //alert('Hello World');
    </script>
@endpush
