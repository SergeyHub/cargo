@extends('layout_reddit.default')
@section('content')
    <div class="row pt-3">
       <div class="col-12">
           <h1 class="h3">Sorted Posts</h1>
       </div>
    </div>
    @foreach($posts as $post)

        <div class="row pb-3">
            <div class="row  no-gutters p2 border rounded d-flex">
                <div class="col-auto ">
                    <!--<img src="//placehold.it/200" class="img-fluid" alt="">-->
                    <img class="img-fluid" src="{{ $post['data']['thumbnail'] }}" width="120">
                </div>
                <div class="col">
                    <div class="card-block px-2">
                        <a href="{{ $post['data']['url'] }}" class="d-block font-weight-bold">
                            {{ $post['data']['title'] }}
                        </a>

                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
