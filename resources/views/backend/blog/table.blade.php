<table class="table table-bordered">
    <thead>
    <tr>
        <td width="80">Action</td>
        <td width="150">Title</td>
        <td width="120">Author</td>
        <td width="120">Category</td>
        <td width="170">Date</td>
    </tr>
    </thead>
    <tbody>
    @foreach($posts as $post)
        <tr>
            <td>
                {!! Form::open(['method'=>'DELETE' ,'route'=>['blog.destroy',$post->id]]) !!}
                <a href="{{ route('blog.edit',$post->id) }}" class="btn btn-xs btn-default" >
                    <i class="fa fa-edit"></i>
                </a>
                <button type="submit" class="btn btn-xs btn-danger" >
                    <i class="fa fa-trash"></i>
                </button>
                {!! Form::close() !!}
            </td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->author->name }}</td>
            <td>{{ $post->category->title }}</td>
            <td>
                <abbr title="{{ $post->dateFormatted(true) }}">{{ $post->dateFormatted() }}</abbr>
                {!! $post->publicationLabel() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>