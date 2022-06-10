@extends('dashboard')

@section('content')
<div class="wrapper">
    @include('layouts.navbars.sidebar')
    <div class="main-panel">
        @include('layouts.navbars.navbar')

        <div class="content">
            
        </div>

        @include('layouts.footer')
    </div>
</div>

<form id="logout-form" class="form" method="get" action="{{ route('signout') }}">
    @csrf
</form>
@endsection