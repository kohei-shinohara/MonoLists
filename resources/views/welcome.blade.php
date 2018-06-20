@extends('layouts.app')

@section('cover')
    <div class="cover">
        <div class="cover-inner">
            <div class="cover-contents">
                <h1>Find Some Wonderful Stuff!!</h1>
                @if (!Auth::check())
                    <a href="{{ route('signup.get') }}" class="btn btn-success btn-lg">START USING MonoLists</a>
                @endif
            </div>
        </div>
    </div>
@endsection

@section('content')
    テスト
@endsection