<div class="table-responsive">
    <table class="table" id="days-table">
        <thead>
            <tr>
                <th>Name</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($days as $day)
            <tr>
            <td>{{$day->name}}</td>
                <td>
                    {!! Form::open(['route' => ['days.destroy', $day->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        {{-- <a data-toggle="modal" data-target="#day-view-modal" data-day="{{$day->name}}"
                        data-created_at="{{$day->created_at}}" data-updated_at="{{$day->updated_at}}" data-day_id="{{$day->day_id}}"
                            class='btn btn-default btn-xs'> <i class="glyphicon glyphicon-eye-open"></i></a> --}}


                        <a href="{{ route('days.show', [$day->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('days.edit', [$day->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>