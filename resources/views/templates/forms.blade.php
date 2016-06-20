<div class="form-group">
    {!!Form::label('nombre', 'Nombre de Usuario')!!}
    <div class="input-group">
        <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
        {!!Form::text('name',null,array('class'=>'form-control','placeholder'=>'Ingresa el nombre'))!!}                    
    </div>
</div>
<div class="form-group">
    {!!Form::label('id', 'Codigo de Usuario:')!!}
    <div class="input-group">
        <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
        {!!Form::text('id',null,array('class'=>'form-control','placeholder'=>'Ingresa el codigo'))!!}  
    </div>
</div>
<div class="form-group">
    {!!Form::label('email', 'Correo Electronico:')!!}
    <div class="input-group">
        <div class="input-group-addon"><span class=" glyphicon glyphicon-envelope"></span></div>
        {!!Form::text('e_mail',null,array('class'=>'form-control','placeholder'=>'Ingresa el correo electronico'))!!}  
    </div>
</div>
<div class="form-group">
    {!!Form::label('carrer_name', 'Escogue la carrera:')!!}
    <div class="input-group">
        <div class="input-group-addon"><span class="glyphicon glyphicon-book"></span></div>
        {!!Form::select('carrer', array('L' => 'Large', 'S' => 'Small'), null, ['placeholder' => 'Escoge una carrera...','class'=>'form-control'])!!}  
    </div>
</div>
<div class="form-group">
    {!!Form::label('rol', 'Rol:')!!}
    <div class="input-group">
        <div class="input-group-addon"><span class="glyphicon glyphicon-briefcase"></span></div>
        {!!Form::select('role', array('A' => 'Alumno', 'M' => 'Maestro'), null, ['placeholder' => 'Escoge el rol...','class'=>'form-control'])!!}  
    </div>
</div>