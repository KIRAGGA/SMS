<div class="table-responsive">
    <table class="table" id="semeters-table">
        <thead>
            <tr>
                <th>Semester Name</th>
        <th>Semester Code</th>
        <th>Semester Duration</th>
        <th>Semester Description</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($semeters as $semeter)
            <tr>
                <td>{{ $semeter->semester_name }}</td>
            <td>{{ $semeter->semester_code }}</td>
            <td>{{ $semeter->semester_duration }}</td>
            <td>{{ $semeter->semester_description }}</td>
                <td>
                    {!! Form::open(['route' => ['semeters.destroy', $semeter->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('semeters.show', [$semeter->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('semeters.edit', [$semeter->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
