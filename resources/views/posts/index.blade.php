@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-end mb-2">
    <a href="{{ route('posts.create') }}" class="btn btn-success">Add Post</a>
</div>

<div class="card card-deafult">

    <div class="card-header">Posts</div>

    <div class="card-body">
        <table class="table">
        
            <thead>
                <th>Image</th>
                <th>Title</th>
            </thead>

            <tbody>
            
               @foreach ($posts as $post )

               <tr>
                <td>
                <img src="{{asset($post->image)}}" width="120px" height="60px" alt="1">
                </td>

                <td>
                    {{$post->title}}
                </td>
               </tr>
                   
               @endforeach

            </tbody>
        
        </table>
    </div>

</div>








@endsection
