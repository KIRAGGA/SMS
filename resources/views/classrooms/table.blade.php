
<div class="table-responsive">
    <table class="table" id="classrooms-table">
        <thead>
            <tr>
                <th>Classroom Name</th>
        <th>Classcode Name</th>
        <th>Classroom Description</th>
        <th>Classroom Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($classrooms as $classroom)
            <tr>
                <td>{{ $classroom->classroom_name }}</td>
            <td>{{ $classroom->classcode_name }}</td>
            <td>{{ $classroom->classroom_description }}</td>
            <td>{{ $classroom->classroom_status }}</td>
                <td>
                    {!! Form::open(['route' => ['classrooms.destroy', $classroom->classroom_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a data-toggle="modal" data-target="#classroom-view-modal" data-classroom_name="{{$classroom->classroom_name}}" data-classcode_name="{{$classroom->classcode_name}}"
                            data-classroom_description="{{$classroom->classroom_description}}" data-classroom_status="{{$classroom->classroom_status}}" data-created_at="{{$day->created_at}}" data-updated_at="{{$day->updated_at}}" data-day_id="{{$day->day_id}}"
                             class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('classrooms.edit', [$classroom->classroom_id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>


<!-- Modal -->
<div class="modal fade left" id="day-view-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-id-badge" aria-hidden="true"></i></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <div class="modal-body">
                    <input type="hidden" name="classroom_id" id="classroom_id">
                    {{-- the hidden id is used to fetch the data --}}
                    <!-- Classroom name Field -->
                    <div class="form-group">
                        {!! Form::label('classroom_name', 'Classroom Name:') !!}
                        <input type="text" name="classroom_name" id="Classroom_name" readonly>
                    </div>

                    <!-- Classcode Name Field -->
                    <div class="form-group">
                        {!! Form::label('classcode_name', 'Classcode Name:') !!}
                        <input type="text" name="classcode_name" id="classcode_name" readonly>
                    </div>

                    <!-- Classroom description Field -->
                    <div class="form-group">
                        {!! Form::label('classroom_description', 'Classroom Description:') !!}
                        <input type="text" name="classroom_description" id="classroom_description" readonly>
                    </div>

                    <!-- Classroom status Field -->
                    <div class="form-group">
                        {!! Form::label('classroom_status', 'Classroom Description:') !!}
                        <input type="text" name="classroom_status" id="classroom_status" readonly>
                    </div>

                    <!-- Created at Field -->
                    <div class="form-group">
                        {!! Form::label('created_at', 'Created At:') !!}
                        <input type="text" name="created_at" id="created_at" readonly>
                    </div>

                    <!-- Updated On Field -->
                    <div class="form-group">
                        {!! Form::label('updated_at', 'Updated At:') !!}
                        <input type="text" name="updated_at" id="Updated_at" readonly>
                    </div>
                </div>
<!-- Submit Field -->
<div class="modal-footer">
    <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
    {!! Form::submit('Create Batch', ['class' => 'btn btn-success']) !!}
    {{-- <a href="{{ route('batches.index') }}" class="btn btn-default">Cancel</a> --}}
</div>
        </div>
      </div>
    </div>
</div>

@section('scripts')
    <script>
        $('#day-view-modal').on('show.bs.modal', function(event){
        var button = $(event.relatedTarget)
        var classcode_name = button.data('classroom_name')
        var classcode_name = button.data('classcode_name')
        var classroom_description = button.data('classroom_description')
        var classroom_status = button.data('classroom_status')
        var created_at = button.data('created_at')
        var updated_at = button.data('updated_at')
        var day_id = button.data('classroom_id')

        var modal = (this)

        modal.find('.modal-title').text('VIEW CLASSROOM INFORMATION');
        modal.find('.modal-body #classroom_name').val(class_name);
        modal.find('.modal-body #classcode_name').val(classcode_name);
        modal.find('.modal-body #classroom_description').val(classroom_description);
        modal.find('.modal-body #classroom_status').val(classroom_status);
        modal.find('.modal-body #created_at').val(created_at);
        modal.find('.modal-body #updated_at').val(updated_at);
        modal.find('.modal-body #classroom_id').val(classroom_id);
        });
// this is a bootstrap simple code you can read the bootstrap modal.find
    </script>
@endsection