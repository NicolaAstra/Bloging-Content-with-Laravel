@extends('layouts.app')

@section('content')


    <div class="panel panel-default">
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                    <th>
                        Image
                    </th>
                    <th>
                        Title 
                    </th>
                    <th>
                        Editing
                    </th>
                    <th>
                        Restrore
                    </th>
                    <th>
                        Delete
                    </th>

                </thead>
        
                <tbody>
                   @if($posts->count() > 0)
                        @foreach ($posts as $post)
                            <tr>
                                    <td><img src="{{ $post->featured }}" alt="" width="90px" height="50px"></td>
                                <td>{{ $post->title }}</td>
                                <td>Edit</td>
                                
                                <td>
                                <a href="{{ route('post.restore', ['id'=> $post->id]) }}" class="btn btn-xs btn-success">
                                    Restore
                                </a>
                                </td>

                                <td>
                                    <a href="{{ route('posts.kill', ['id'=> $post->id]) }}" class="btn btn-xs btn-danger">
                                        Destroy
                                    </a>
                                    </td>
                            </tr>

                        @endforeach
                   @else
                        <th colspan="5" class="text-center">No trashed posts avalaible</th>
                   @endif
        
                </tbody>
            </table> 
        </div>
    </div>






@endsection