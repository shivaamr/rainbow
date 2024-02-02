
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="destoryCategory">
            <div class="modal-body">
             Are u sure delete
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Yes Delete</button>
            </div>
        </form>
          </div>
        </div>
      </div>


        <div class="row">


            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Category
                            <a href="{{ url('admin/category/create')}}" class="btn btn-primary" style="float: right">Add Category</a>
                        </h4>
                    </div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <td>ID</td>
                                <td>Name</td>
                                <td>Description</td>
                                <td style="display: none">Image</td>
                                <td>Status</td>
                                <td>Action</td>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($categories as $category)
                                <tr>
                                    <td>{{$category->id  }}</td>
                                    <td>{{$category->name  }}</td>
                                    <td>{{$category->description  }}</td>
                                    <td style="display: none"> <img src="{{ asset('/uploads/category/'.$category->image)}}" alt="image" style="height:100px;width:100px;padding:10px;border-radius:5px;"></td>
                                    <td>{{$category->status =='1' ? 'Hidden':'Visible' }}</td>
                                    <td>
                                        <a href="{{ url('admin/category/'.$category->id.'/edit')}}" class="btn btn-success">Edit</a>
                                        <a href="#" wire:click="deleteCategory({{$category->id}})" data-bs-toggle="modal" data-bs-target="#deleteModal" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>

                         </table>
                         <div style="float:right">{{$categories ->links()}} </div>

                    </div>
                </div>

            </div>



          </div>



