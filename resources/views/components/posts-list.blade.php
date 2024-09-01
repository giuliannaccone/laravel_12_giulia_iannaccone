<div class="row">

    <div class="col-xs-12">
    
        @if (!$posts->isEmpty())
            @foreach ($posts as $post)
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('storage/images/' . $post->image) }}" class="card-img-top" alt="{{ $post->title }}">
                <div class="card-body">
                  <h5 class="card-title">{{ $post->title }}</h5>
                  <p class="card-text">{{ $post->content }}</p>
                  <a href="{{ route('blog.show', [$post->url, $post->id]) }}" class="btn btn-primary">Leggi tutto</a>
                </div>
              </div>
            @endforeach
        @else
            <p>Non ci sono articoli.</p>
        @endif

    </div>

</div>  

