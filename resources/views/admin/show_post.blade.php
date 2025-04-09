<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')

    <style type="text/css">
        .title_deg{
            font-size: 30px;
            font-weight: bold;
            text-align: center;
            padding: 30px;
            color: white;
        }

        .table_design{
            border: 1px solid white;
            width: 80%;
            text-align: center;
            margin: auto;
        }

        .tr_head{
            background-color: aquamarine; 
        }

        .img_show{
            height: 100px;
            width: 150px;
            padding: 10px;
            text-align: center
        }
    </style>
  </head>
  <body>
    @include('admin.header')

    <div class="d-flex align-items-stretch">
    <!-- Sidebar Navigation-->
    @include('admin.sidebar')
    <!-- Sidebar Navigation end-->
        
    <div class="page-content">
        <h1 class="title_deg">All Posts</h1>

        <table class="table_design">
            <tr class="tr_head">
                <th>Post Title</th>
                <th>Description</th>
                <th>Post by</th>
                <th>Post Status</th>
                <th>UserType</th>
                <th>Image</th>
            </tr>
            @foreach($post as $post)
            <tr>
                <td>{{$post->title}}</td>
                <td>{{$post->description}}</td>
                <td>{{$post->name}}</td>
                <td>{{$post->post_status}}</td>
                <td>{{$post->usertype}}</td>
                <td >
                    <img src="postimage/{{$post->image}}" class="img_show">
                </td>
            </tr>
            @endforeach
        </table>
    <div>        
    @include('admin.footer')
  </body>
</html>