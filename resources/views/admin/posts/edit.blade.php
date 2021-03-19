    <x-admin-master>
        @section('content')
            <h1>Edit</h1>
            <form method="post"  action="{{route('post.update',$post->id)}}" >
            @csrf
            @method('PUT')
                <div class="form-group">
                    <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" required value="{{$post->title}}">
                
                </div>
                <div class="form-group">
                    <label for="short">Short</label>
                        <input type="text" class="form-control" id="short" name="short" value="{{$post->short}}">
                
                </div>
                <div class="form-group">
                    <label for="body">Body</label>
                        <textarea class="form-control" name="body" id="body" cols="30" rows="10">{{$post->body}}</textarea>
                
                </div>
                <button class="btn btn-primary">Submit</button>
            </form> 


    
        @endsection
    </x-admin-master>