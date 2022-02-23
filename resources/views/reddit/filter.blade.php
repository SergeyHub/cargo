@extends('layout_reddit.default')
@section('content')
    <div class="row pt-3">
       <div class="col-12">
           <h1 class="h3">Filter Posts</h1>
       </div>
    </div>
    @foreach($posts as $post)
        <div class="row pb-3">
            <div class="col-12">
                <div class="p2 border rounded d-flex">
                    <img class="d-block mr-3 img-responsive" src="{{ $post['data']['thumbnail'] }}" width="70">
                    {{-- <a href="{{ $post['data']['url'] }}" class="d-block font-weight-bold">
                        {{ $post['data']['title'] }}
                    </a> --}}
                </div>
                <div class="col-9">
                    <a href="{{ $post['data']['url'] }}" class="d-block font-weight-bold">
                        {{ $post['data']['title'] }}
                    </a>
                </div>
            </div>
        </div>
    @endforeach
@endsection
