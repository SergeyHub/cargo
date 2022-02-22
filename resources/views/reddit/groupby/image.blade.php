<h2 class="h3">Image Posts</h2>
@foreach($children as $post)
    <div class="row pb-3">
        <div class="col-12">
            <div class="p-2 border rounded">
                <img class="mw-100" src="{{ $post['data']['url'] }}">
            </div>
        </div>
    </div>
@endforeach
