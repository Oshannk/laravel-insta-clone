@extends('layouts.app')

@section('content')
<div class="container">
    @foreach ($posts as $post)
    <div class="row">
        <div class="pl-3 pb-2 col-6 d-flex align-items-baseline offset-3">            
            <div>                
                <img class="rounded-circle mr-3" src="{{ $post->user->profile->profileImage() }}" style="max-width:40px"alt="">
            </div>
            <div>
                <div class="font-weight-bold">
                    <a href="/profile/{{$post->user->id}}">
                        <span class="text-dark">{{$post->user->username}}</span>
                    </a>
                </div>
            </div>
        </div>
        <hr>
    </div>
    <div class="row ">
        <div class="col-6 offset-3">
            <a href="/profile/{{ $post->user->id }}">
                <img src="/storage/{{ $post->image }}" class="w-100">
            </a>
        </div>
    </div>
    <div class="row">
        <div class="pt-1 pb-4 col-6 offset-3 ">
            <div>                
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
    
    @endforeach
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            {{ $posts->links() }}
        </div>
    </div>

</div>
@endsection
 