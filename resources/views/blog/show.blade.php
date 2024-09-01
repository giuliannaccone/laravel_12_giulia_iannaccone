<x-layout>

   <x-page-title :title="$post->title" />

   <div class="row">

      <div class="col-xs-12">

         <img src="{{ asset('storage/images/' . $post->image) }}" alt="{{ $post->title }}" class="img-responsive" style="width: 100%;">
         
         <p>
            {{ $post->content }}
         </p>

         <a href="/blog/edit/{{ $post->id }}" class="btn btn-primary">
            Modifica
         </a>

         <br>

         &nbsp;

         <form action="{{ route('blog.destroy', $post->id) }}" method="post">
            @csrf

            @method('DELETE')

            <input type="submit" class="btn btn-primary" value="elimina">

         </form>

      </div>

   </div>

</x-layout>