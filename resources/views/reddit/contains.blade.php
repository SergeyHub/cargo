@extends('layout_reddit.default')
@section('content')
    <div class="row pt-3">
       <div class="col-12">
           <h1 class="h3">Contains Post Images</h1>
           <p>This data contains post image items.</p>
       </div>
    </div>
    @foreach($images as $image)
        <div class="row pb-3">
            <div class="col-12">
                <div class="p2 border rounded">
                    <img class="mw-100" src="{{ $image }}">
                </div>
            </div>
        </div>
    @endforeach
@endsection
