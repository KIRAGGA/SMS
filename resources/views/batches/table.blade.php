<style>
input:read-only{
    border:none;
    border-color:transparent;
}
</style>

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
                        {{-- batch view code --}}
                        <a data-toggle="modal" data-target="#batch-view-modal" data-batch_id="{{$batch->batch_id}}"
                            data-year="{{$batch->year}}" data-created_at="{{$batch->created_at}}"
                            data-updated_at="{{$batch->updated_at}}"
                            class='btn btn-default btn-xs'>
                            <i class="glyphicon glyphicon-eye-open"></i></a>
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

<!-- Modal -->
<div class="modal fade left" id="batch-view-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-id-badge" aria-hidden="true"></i></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <div class="modal-body">
                    <input type="hidden" name="batch_id" id="batch_id">
                    {{-- the hidden id is used to fetch the data --}}
                    <!-- Year Field -->
                    <div class="form-group">
                        {!! Form::label('year', 'Year:') !!}
                        <input type="text" name="year" id="year" readonly>
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
        $('#batch-view-modal').on('show.bs.modal', function(event){
        var button = $(event.relatedTarget)
        var year = button.data('year')
        var created_at = button.data('created_at')
        var updated_at = button.data('updated_at')
        var batch_id = button.data('batch_id')

        var modal = (this)

        modal.find('.modal-title').text('VIEW BATCH INFORMATION');
        modal.find('.modal-body #year').val(year);
        modal.find('.modal-body #created_at').val(created_at);
        modal.find('.modal-body #updated_at').val(updated_at);
        modal.find('.modal-body #batch_id').val(batch_id);
        });
// this is a bootstrap simple code you can read the bootstrap modal.find
    </script>
@endsection