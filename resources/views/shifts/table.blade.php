<style>
    input:read-only{
        border:none;
        border-color:transparent;
    }
    </style>
    
<div class="table-responsive">
    <table class="table" id="shifts-table">
        <thead>
            <tr>
                <th>Shift</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($shifts as $shift)
            <tr>
                <td>{{ $shift->shift_name }}</td>
                <td>
                    {!! Form::open(['route' => ['shifts.destroy', $shift->shift_id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a data-toggle="modal" data-target="#shift-view-modal" data-shift_id="{{$shift->shift_id}}"
                                data-shift="{{$shift->shift_name}}" data-created_at="{{$shift->created_at}}"
                                data-updated_at="{{$shift->updated_at}}"
                                class='btn btn-default btn-xs'>
                                <i class="glyphicon glyphicon-eye-open"></i></a>
                            <a href="{{ route('shifts.edit', [$shift->shift_id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
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
<div class="modal fade left" id="shift-view-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-id-badge" aria-hidden="true"></i></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <div class="modal-body">
                    
                    <input type="hidden" name="shift_id" id="shift_id">
                    {{-- the hidden id is used to fetch the data --}}
                    <!-- Shift Field -->
                    <div class="form-group">
                        {!! Form::label('shift_name', 'Shift:') !!}
                        <input type="text" name="shift_name" id="shift_name" readonly>
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


@section('scripts')
    <script>
        $('#shift-view-modal').on('show.bs.modal', function(event){
        var button = $(event.relatedTarget)
        var shift_name = button.data('shift_name')
        var created_at = button.data('created_at')
        var updated_at = button.data('updated_at')
        var batch_id = button.data('shift_id')

        var modal = (this)

        modal.find('.modal-title').text('VIEW SHIFT INFORMATION');
        modal.find('.modal-body #shift_name').val(shift_name);
        modal.find('.modal-body #created_at').val(created_at);
        modal.find('.modal-body #updated_at').val(updated_at);
        modal.find('.modal-body #shift_id').val(shift_id);
        });
// this is a bootstrap simple code you can read the bootstrap modal.find
    </script>
@endsection