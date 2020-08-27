<style>
    input:read-only{
        border:none;
        border-color:transparent;
    }
    </style>

<div class="table-responsive">
    <table class="table" id="classes-table">
        <thead>
            <tr>
                <th>Class Name</th>
        <th>Class Code</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($classes as $classes)
            <tr>
                <td>{!! $classes->class_name !!}</td>
            <td>{!! $classes->class_code !!}</td>
                <td>
                    {!! Form::open(['route' => ['classes.destroy', $classes->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a data-toggle="modal" data-target="#class-view-modal" data-class_id="{{$classes->class_id}}"
                            data-class_name="{{$classes->class_name}}" data-class_code="{{$classes->class_code}}" 
                            data-created_at="{{$classes->created_at}}" data-updated_at="{{$classes->updated_at}}"
                            class='btn btn-default btn-xs'>
                            <i class="glyphicon glyphicon-eye-open"></i></a>

                        {{-- <a href="{{ route('classes.show', [$classes->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a> --}}
                        <a href="{{ route('classes.edit', [$classes->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
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
<div class="modal fade left" id="class-view-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-leanpub" aria-hidden="true"></i></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <div class="modal-body">
                    <input type="hidden" name="class_id" id="class_id">
                    {{-- the hidden id is used to fetch the data --}}

                    <!-- class ID Field -->
                    <div class="form-group">
                        {!! Form::label('class_name', 'Class Name:') !!}
                        <input type="text" name="class_name" id="class_name" readonly>
                    </div>

                    <!-- Class c0de at Field -->
                    <div class="form-group">
                        {!! Form::label('class_code', 'Class Code:') !!}
                        <input type="text" name="class_code" id="class_code" readonly>
                    </div>

                    <!-- Created On Field -->
                    <div class="form-group">
                        {!! Form::label('created_at', 'Created At:') !!}
                        <input type="text" name="created_at" id="creaated_at" readonly>

                    <!-- Updated On Field -->
                    <div class="form-group">
                        {!! Form::label('updated_at', 'Updated At:') !!}
                        <input type="text" name="updated_at" id="Updated_at" readonly>

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
        $('#class-view-modal').on('show.bs.modal', function(event){
        var button = $(event.relatedTarget)
        var class_name = button.data('class_name')
        var class = button.data('class_code')
        var created_at = button.data('created_at')
        var class_id = button.data('class_id')

        var modal = (this)

        modal.find('.modal-title').text('VIEW CLASS INFORMATION');
        modal.find('.modal-body #class_name').val(class_name);
        modal.find('.modal-body #class_code').val(class_code);
        modal.find('.modal-body #created_at').val(created_at);
        modal.find('.modal-body #updated_at').val(updated_at);
        modal.find('.modal-body #class_id').val(batch_id);
        });
// this is a bootstrap simple code you can read the bootstrap modal.find
    </script>
@endsection