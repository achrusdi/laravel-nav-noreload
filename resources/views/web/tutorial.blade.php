{{-- <div class="halaman">
	<h2>Halaman Tutorial</h2>
	<p>Ini adalah halaman tutorial</p>
</div> --}}

@extends('web.templates.index')

@section('method')
    @php
        $method = $methods;
    @endphp
@endsection

@section('content')
    <div class="halaman">
        <h2>Halaman Tutorial</h2>
        <p>Ini adalah halaman tutorial</p>
    </div>
@endsection
