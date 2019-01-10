@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Все новости</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                @foreach($posts as $post)
                                    <h1><a class="post-title" href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></h1>
                                    <div>{!!  $post->summary  !!}</div>
                                    <div>
                                        <span class="badge">Опубликовано {{ $post->created_at }}</span>
                                        <div class="float-right">
                                            <span class="label label-warning">{{ $post->category->name }}</span>
                                        </div>
                                    </div>
                                    <hr>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true" >
        <div class="modal-dialog modal-lg" role="document" data-show="false">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                </div>
            </div>
        </div>
    </div>
@endsection

