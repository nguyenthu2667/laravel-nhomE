@extends('dashboard')

@section('content')
    <div class="wrapper">
        @include('layouts.navbars.sidebar')
        <div class="main-panel">
            @include('layouts.navbars.navbar')

            <div class="content">
                <div id="form">
                    <form id="waterform" method="post">

                        <div class="form-group mb-3">
                            <label for="">Category</label>
                            {{--  @foreach ($categories as $category)  --}}
                            {{--  <input type="checkbox" @if ($post->categories()->get()->contains($category->id)) checked @endif name="category[]" value="{{ $category->id }}">  --}}
                            {{--  <label for="">{{ $category->categoryName }}</label>
                            @endforeach  --}}
                        </div>
                        
                        <div class="formgroup" id="title-post">
                            <label for="name">Title Post</label>
                            {{--  @if ($errors->has('post_title'))  --}}
                            <input type="text" id="name" name="name" />
                            {{--  @endif  --}}
                        </div>

                        <div class="formgroup ">
                            <label for="post-content">Post content</label>
                            {{--  @if ($errors->has('post_title'))  --}}
                            <input type="message" class="post-content"   name="post-content" />
                            
                            {{--  @endif  --}}
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
