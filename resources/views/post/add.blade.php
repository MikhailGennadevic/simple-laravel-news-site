@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Новая новость</div>

                <div class="card-body">
                    <div><a href="{{ route('posts.admin') }}">Список новостей</a></div>
                    <form method="POST" action="{{ route('posts.store') }}">
                        @csrf
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">Заголовок</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title') }}">

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="body" class="col-md-4 col-form-label text-md-right">Краткий текст</label>

                            <div class="col-md-12">
                                <textarea id="post-summary" class="form-control{{ $errors->has('summary') ? ' is-invalid' : '' }}" name="summary">{{ old('summary') }}</textarea>

                                @if ($errors->has('summary'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('summary') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="body" class="col-md-4 col-form-label text-md-right">текст новости</label>

                            <div class="col-md-12">
                                <textarea row="30" id="post-body" class="form-control{{ $errors->has('body') ? ' is-invalid' : '' }}" name="body">{{ old('body') }}</textarea>

                                @if ($errors->has('body'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('body') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="category_id" class="col-md-4 col-form-label text-md-right">категория</label>

                            <div class="col-md-6">
                                <select name="category_id" class="form-control">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Добавить
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
