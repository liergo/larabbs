@extends('layouts.app')

@section('title', isset($category) ? $category->name : '话题列表')

@section('content')

    <div class="row">
        <div class="col-lg-9 col-md-9 topic-list">
            <div class="panel panel-default">

                @if (isset($category))
                    <div class="alert alert-info" role="alert">
                        {{ $category->name }} ：{{ $category->description }}
                    </div>
                @endif

                <div class="panel-body">
                    {{-- 话题列表 --}}
                    @include('topics._topic_list', ['topics' => $topics])
                    {{-- 分页 --}}
                    {!! $topics->render() !!}
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-3 sidebar">
            @include('topics._sidebar')
        </div>
    </div>

@endsection