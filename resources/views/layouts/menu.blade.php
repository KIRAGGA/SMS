<li class="{{ Request::is('classes*') ? 'active' : '' }}">
    <a href="{{ route('classes.index') }}"><i class="fa fa-edit"></i><span>Classes</span></a>
</li>

<li class="{{ Request::is('classrooms*') ? 'active' : '' }}">
    <a href="{{ route('classrooms.index') }}"><i class="fa fa-edit"></i><span>Classrooms</span></a>
</li>

