<x-post-master>
    @section('content') 
   
        <!-- Title -->
        <h1 class="mt-4">{{$post->title}}</h1>

        <!-- Author -->
        <p class="lead">
          by
          <a href="#">{{$post->user->name}}</a>
        </p>

        <hr>

        <!-- Date/Time -->
        <p>Posted on {{$post->created_at}} PM</p>

        <hr>

       

        <hr>

        <!-- Post Content -->
        <p class="lead">{{$post->body}}</p>

        

        
        <hr>

    @endsection
</x-post-master>
