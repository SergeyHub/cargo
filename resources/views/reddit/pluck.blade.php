@extends('layout_reddit.default')
@section('content')
    <div class="row pt-3">
       <div class="col-12">
           <h1 class="h3">Plucked Post Images</h1>
       </div>
    </div>
    @foreach($images as $image)
        <div class="row pb-3">
            <div class="col-12">
                <div class="p2 border rounded">
                    <img class="mw-100" src="{{ $image }}">
                    {{-- <a href="{{ $post['data']['url'] }}" class="d-block font-weight-bold">
                        {{ $post['data']['title'] }}
                    </a> --}}
                </div>
            </div>
        </div>
    @endforeach
@endsection
