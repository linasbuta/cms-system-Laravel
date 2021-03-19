  <x-admin-master>
      @section('content')
        @if(session('Delete-post-message'))
          <div class="alert alert-danger">{{session('Delete-post-message')}}
          </div>

        @endif

        <div class="card shadow mb-4">
              <div class="card-header py-3">
                 <h6 class="m-0 font-weight-bold text-primary">All Posts
                  </h6>
              @if(session('Create-post-message'))
                <div class="alert alert-primary">{{session('Create-post-message')}}</div>

              @endif
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Owner</th>
                          <th>Title</th>
                          <th>Short</th>
                          <th>Body</th>
                          <th>Delete</th>
                          <th>Aprroved</th>
                        
                          
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                        <th>Id</th>
                        <th>Owner</th>
                          <th>Title</th>
                          <th>Short</th>
                          <th>Body</th>
                          <th>Delete</th>
                          <th>Aprroved</th>
                        </tr>
                      </tfoot>
                      <tbody>
                          @foreach($posts as $post)
                        <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->user->name}}</td>
                        <td><a href="{{route('post.edit', $post->id)}}">{{$post->title}}</a></td>
                        <td>{{$post->short}}</td>
                        <td>{{$post->body}}</td>
                        <td>
                            <form method="post" action="{{route('post.destroy', $post->id)}}">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                        @if($post->user->admin === 'admin')
                        <td>
                        <a class="btn btn-danger" href="{{route('post.approved', $post->id)}}">{{$post->apprpved}}</a>
                        </td>
                        @endif
                    
                        
                          
                        </tr>
                        @endforeach
                      
                        
                      
                      
                      
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
      @endsection

    
    
  </x-admin-master>