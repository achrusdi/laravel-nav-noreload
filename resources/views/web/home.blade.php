{{-- <div class="halaman">
	<h2>Halaman Depan</h2>
	<p>Selamat datang di www.malasngoding.com. ini merupakan halaman depan pada demo cara Membuat halaman website ajax tanpa reload dengan ajax jquery</p>
</div> --}}

@extends('web.templates.index')

@section('method')
    @php
        $method = $methods;
    @endphp
@endsection

@section('content')
    <div class="halaman">
        <h2>Halaman Depan</h2>
        <p>Selamat datang di www.malasngoding.com. ini merupakan halaman depan pada demo cara Membuat halaman website ajax
            tanpa reload dengan ajax jquery</p>
    </div>
@endsection
