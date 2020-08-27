<div class="table-responsive">
    <table class="table" id="batches-table">
        <thead>
            <tr>
                <th>Year</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($batches as $batch)
            <tr>
                <td>{!! $batch->year !!}</td>
                <td>
                    {{-- {!! Form::open(['route' => ['batches.destroy', $batch->id], 'method' => 'delete']) !!} --}}
                    <div class='btn-group'>
                        <a href="{{ route('batches.show', [$batch->batch_id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('batches.edit', [$batch->batch_id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

@section('name')
    <script>
        $('#level-show').on('show.bs.modal', function(event){
        var button = $(event.relatedTarget)
        var level = button.data('level')
        var course_id = button.data('course_id')
        var level_description = button.data('level_description')
        var created_at = button.data('created_at')
        var updated_at = button.data('updated_at')
        var level_id = button.data(;leel_id)

        var modal = (this)

        modal.find('modal-title').text('VIEW LEVEL INFORMATION');
        modal.find('modal-body #level').val(level);
        modal.find('modal-body #course_id').val(course_id);
        modal.find('modal-body #level_description').cal(level_description);
        });
// this is a bootstrap simple code you can read the bootstrap modal.find
    </script>
@endsection