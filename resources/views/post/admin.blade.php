@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Список новостей</div>

                    <div class="card-body">
                        <div><a href="{{ route('posts.create') }}">Добавить Новость</a></div>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Заголовок</th>
                                <th>Created</th>
                                <th>Действия</th>
                            </tr>
                            </thead>
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->created_at }}</td>
                                    <td><a href="{{ route('posts.edit', ['post' => $post]) }}">Edit</a> <a data-id="{{ $post->id  }}" class="del-post-link" href="{{ route('posts.destroy', ['post' => $post]) }}">Delete</a></td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
