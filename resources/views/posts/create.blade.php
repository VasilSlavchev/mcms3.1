@extends('layouts.app')
@section('content')
    <div class="card card-default">
        <div class="card-header">
            {{isset($post) ? 'Edit Post' : 'Create Post'}}
        </div>
        <div class="card-body">
            @include('partials.errors')
            <form action="{{ isset($post) ? route('posts.update', $post->id) : route('posts.store') }}" method="POST"
                  enctype="multipart/form-data">
                @csrf
                @if(isset($post))
                    @method('PUT')
                @endif
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" id="title"
                           value="{{isset($post) ? $post->title : ''}}">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" cols="30" rows="5"
                              class="form-control">{{isset($post) ? $post->description : ''}}</textarea>
                </div>
                <div class="form-group">
                    <label for="content">Content</label>

                    <input type="hidden" id="content" name="content" value="{{isset($post) ? $post->content : ''}}">
                    <trix-editor input="content"></trix-editor>
                </div>
                <div class="form-group">
                    <label for="published_at">Published at</label>
                    <input type="text" class="form-control" name="published_at" id="published_at"
                           value="{{isset($post) ? $post->published_at : ''}}">
                </div>
                @if(isset($post))
                    <div class="form-group">
                        <img src="{{asset($post->image)}}" alt="Post Image" style="width:100%">
                    </div>
                @endif
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control" name="image" id="image">
                </div>
                <div class="form-group">
                    <label for="category">Category</label>
                    <select name="category" id="category" class="form-control">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}"
                                    @if(isset($post))
                                    @if($category->id === $post->category_id)
                                    selected
                                @endif
                                @endif
                            >
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                @if($tags->count()>0)
                    <div class="form-group">
                        <label for="tags">Tags</label>
                        <select name="tags[]" id="tags" class="form-control tags-selector" multiple>
                            @foreach($tags as $tag)
                                <option value="{{$tag->id}}"
                                        @if(isset($post))
                                    @if($post->hastags($tag->id))
                                        selected
                                        @endif
                                        @endif >

                                    {{$tag->name}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                @endif

                <div class="form-group">
                    <button class="btn btn-success" type="submit">
                        {{isset($post) ? 'Update post' : 'Create post'}}
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        flatpickr('#published_at', {
            enableTime: true
        })

        $(document).ready(function() {
            $('.tags-selector').select2();
        })
    </script>
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


@endsection


