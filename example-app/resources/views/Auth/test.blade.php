<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/login.css">
    <title>Document</title>
</head>

<body>
    <h1>Hello World</h1>
@foreach ($posts as $post )
  <p> {{$post->postTitle}} </p>
  @foreach ($post->categories()->get() as $category)
  <span class="meta-cats">
    <i class="far fa-folder"></i>
    <a href="" rel="category tag">{{$category->categoryName}}</a>,
    {{-- {{return $category->id != collect($post->categories()->get('id')->last()) ? ',' : '.'}} --}}
    </span>
  @endforeach
@endforeach
</body>

</html>
