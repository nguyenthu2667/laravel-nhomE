<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Form</title>
</head>
<style>
    .title {
        width: 10cm;
    }

    form {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 40%;
    }

    .submit {
        float: right;
    }
</style>

<body>
    @section('update')
    <form action="{{ url('update/' . $post->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf

        <div class="form-group mb-3">
            <label for="">Post Title</label>
            <input type="text" name="title" value="{{ $post->postTitle }}" class="form-control title">
        </div>
        <div class="form-group mb-3">
            <label for="">Post Content</label>
            <textarea name="content" id="" cols="80" rows="5">{{ $post->postContent }}</textarea>
        </div>
        <div class="form-group mb-3">
            <label for="">Category</label>
            @foreach ($categories as $category)
            <input type="checkbox" @if ($post->categories()->get()->contains($category->id)) checked @endif name="category[]" value="{{ $category->id }}">
            <label for="">{{ $category->categoryName }}</label>
            @endforeach
        </div>
        <div class="form-group mb-3">
            <label for="">Post Image</label>
            <img width="200" height="200"
                src="{{ asset('giaodienbe/www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/2021/02/') . '/' . $post->postImgpagecove }}"
                class="owl-lazy img-responsive" alt="post" />
            <br><input type="file" name="image" value="{{ $post->postImgpagecove }}" class="form-control">
        </div>
        <div class="form-group mb-3 submit">
            <button type="submit" class="btn btn-primary">Update Post</button>
        </div>
    </form>
    @endsection
</body>

</html>
