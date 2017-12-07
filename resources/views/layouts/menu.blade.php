<li class="{{ Request::is('ponentes*') ? 'active' : '' }}">
    <a href="{!! route('ponentes.index') !!}"><i class="fa fa-edit"></i><span>Ponentes</span></a>
</li>

<li class="{{ Request::is('ponencias*') ? 'active' : '' }}">
    <a href="{!! route('ponencias.index') !!}"><i class="fa fa-edit"></i><span>Ponencias</span></a>
</li>

<li class="{{ Request::is('asistentes*') ? 'active' : '' }}">
    <a href="{!! route('asistentes.index') !!}"><i class="fa fa-edit"></i><span>Asistentes</span></a>
</li>

<li class="{{ Request::is('loops*') ? 'active' : '' }}">
    <a href="{!! route('loops.index') !!}"><i class="fa fa-edit"></i><span>Loops</span></a>
</li>

