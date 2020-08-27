<!-- Id Field -->
<div class="form-group">
    {!! Form::label('batch_id', 'Id:') !!}
    <p>{!! $batch->batch_id!!}</p>
</div>

<!-- Year Field -->
<div class="form-group">
    {!! Form::label('year', 'Year:') !!}
    <p>{!! $batch->year !!}</p>
</div>

<!-- Created at Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $batch->created_at !!}</p>
</div>

<!-- Updated On Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $batch->updated_at !!}</p>
</div>
