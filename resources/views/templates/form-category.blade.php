<div class="form-group">
    {!!Form::label('code', 'Codigo de la categoria')!!}
    <div class="input-group">
        <div class="input-group-addon"><span class="glyphicon glyphicon-barcode"></span></div>
        {!!Form::text('id',null,array('class' => 'form-control', 'placeholder' => 'Codigo'))!!}
    </div>
</div>   
<div class="form-goup">
    {!!Form::label('cat_name', 'Nombre de la categoria:')!!}
    <div class="input-group">
        <div class="input-group-addon"><span class="glyphicon glyphicon-list-alt"></span></div>
        {!!Form::text('name',null,array('class' => 'form-control', 'placeholder' => 'Nombre'))!!}
    </div>
</div>