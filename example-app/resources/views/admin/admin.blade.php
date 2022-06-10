<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Posts</title>
</head>
<body>
    <table class="table">
        <thead>
            <td>ID</td>
            <td style="width: 50px;">Post Photo</td>
            <td>Post Title</td>
            <td>Category</td>
            <td>Post Content</td>
            <td>Update</td>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td><img width="100" height="100" src="{{ asset("giaodienbe/www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/2021/02/") .'/'. $post->postImgpagecove }}" class="owl-lazy img-responsive" alt="post"/></td>
                <td>{{ $post->postTitle }}</td>
                <td>
                    @foreach ($post->categories()->get() as $category)
                    <span>
                        {{ $category->categoryName }} <br>
                        </span>
                    @endforeach
                </td>
                <td>{{ $post->postContent }}</td>
                <td>
                    <a href="{{ url('post/'.$post->id) }}" class="btn btn-primary btn-sm">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
