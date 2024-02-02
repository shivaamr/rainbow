
    <div class="row">

        @if(session('message'))
        <div class="alert alert-success">

        <div>{{ session('message')}}</div>



        </div>
      @endif
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Brands
                    </h4>
                </div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <td>ID</td>
                            <td>Name</td>
                            <td>Description</td>

                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($brands as $brand)
                            <tr>
                                <td>{{$brand->id  }}</td>
                                <td>{{$brand->name  }}</td>
                                <td>{{$brand->description  }}</td>

                            </tr>
                            @endforeach
                        </tbody>

                     </table>
                     <div style="float:right">{{$brands ->links()}} </div>

                </div>
            </div>

        </div>



      </div>




