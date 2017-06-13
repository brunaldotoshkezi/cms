<table class="table table-bordered">
    <thead>
    <tr>
        <td width="80">Action</td>
        <td >Category Name</td>
        <td >Post Count</td>
    </tr>
    </thead>
    <tbody>
    @foreach($categories as $categories)
        <tr>
            <td>
                {!! Form::open(['method'=>'DELETE' ,'route'=>['categories.destroy',$categories->id]]) !!}
                <a href="{{ route('categories.edit',$categories->id) }}" class="btn btn-xs btn-default" >
                    <i class="fa fa-edit"></i>
                </a>
                <button onclick="return confirm('Are you sure ?')" type="submit" class="btn btn-xs btn-danger" >
                    <i class="fa fa-times"></i>
                </button>
                {!! Form::close() !!}
            </td>
            <td>{{ $categories->title }}</td>
            <td>{{ $categories->posts->count()}}</td>

        </tr>
    @endforeach
    </tbody>
</table>