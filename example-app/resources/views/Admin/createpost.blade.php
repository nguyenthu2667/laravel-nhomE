@extends('dashboard')

@section('content')
    <div class="wrapper">
        @include('layouts.navbars.sidebar')
        <div class="main-panel">
            @include('layouts.navbars.navbar')

            <div class="content">
                <div id="form">
                    <form id="waterform" method="post">

                        <label for="cate">Category</label>
                        <select name="category-id" class="form-ctr formgroup"></select>
                        <div class="formgroup" id="title-post">
                            <label for="name">Title Post</label>
                            <input type="text" id="name" name="name" />
                        </div>

                        <div class="formgroup ">
                            <label for="post-content">Post content</label>
                            <input type="message" class="post-content"   name="post-content" />
                        </div>
                        <div class="upload-img formgroup">
                            <label for="image">Chosse img</label>
                            <input type="file" name="image">
                            {{--  <button type="submit" name="upload">POST</button>  --}}
                        </div>



                        <input type="submit" value="Create Post" />
                    </form>
                </div>
            </div>

            @include('layouts.footer')
        </div>
    </div>

    <form id="logout-form" class="form" method="get" action="{{ route('signout') }}">
        @csrf
    </form>
@endsection
