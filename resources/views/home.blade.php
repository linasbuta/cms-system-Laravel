<x-home-master>

@section('content')

<h1>home</h1>

<h1 class="my-4">Page Heading
          <small>Secondary Text</small>
        </h1>
        @if(!empty($data) && $data->count())
          @foreach($data as $post)
          @if($post->apprpved === 'yes')
        <!-- Blog Post -->
        <div class="card mb-4">
         
          <div class="card-body">
            <h2 class="card-title">{{$post->title}}</h2>
            <p class="card-text">
              {{$post->short}}</p>
            <a href="{{route('post', $post->id)}}" class="btn btn-danger">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Posted on {{$post->created_at}}<!--Name rodo-->
            
          </div>
        </div>
        @endif
       
          @endforeach
          {{$data->links()}}
          @endif
       


@endsection
</x-home-master>