@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row  shadow pt-3 pb-3 m-2 bg-white rounded ">
        <div class="col-6">
            <img src="/storage/{{ $post->image }}" class="w-100">
        </div>
        <div class="col-6">
            <div>
                <div class="d-flex align-items-baseline">
                    <div>
                        <img class="rounded-circle mr-3" src="{{ $post->user->profile->profileImage() }}" style="max-width:40px"alt="">
                    </div>
                    <div>
                        <div class="font-weight-bold">
                            <a href="/profile/{{$post->user->id}}">
                                <span class="text-dark">{{$post->user->username}}</span>
                            </a>
                            <a href="" class="pl-3">Follow</a>
                        </div>
                    </div>
                </div>
                <hr>
                <p>
                    <span class="font-weight-bold pr-2">
                        <a href="/profile/{{$post->user->id}}">
                            <span class="text-dark">{{ $post->user->username }}</span>
                        </a>
                    </span>{{ $post->caption }}
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
 