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
                            <a href="{{ route('shifts.show', [$shift->shift_id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
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
