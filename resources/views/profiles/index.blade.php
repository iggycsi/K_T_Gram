@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://scontent-sof1-1.cdninstagram.com/vp/e721d7795a595155ee0e474000ccf7b7/5E1F8031/t51.2885-19/s150x150/14033529_791290801008362_1404037542_a.jpg?_nc_ht=scontent-sof1-1.cdninstagram.com" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="/p/create">Додади нов пост</a>
            </div>
            <div class="d-flex">

                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url ?? 'Ne e vneseno !!!' }}</a></div>
        </div>
    </div>

    <!- Sekcija za sliki->
    <div class="row pt-4">
        @foreach($user->posts as $post)
            <div class="col-4">
                <img src="/storage/{{ $post->image }}" class="w-100">
            </div>
        @endforeach

    </div>
</div>
@endsection

