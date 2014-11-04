<div class="fondo">
    <div class="marco">
        <div class="formulario">
            {{ Form::open(array('url' => 'analiza_solicitud', 'role'=>'form')) }}
                {{ Form::label('', 'Consulta Disponibilidad', array('class' => 'titulo'))}}
                <div class="capa-texto" data-icon = '&#xf073'>
                    {{ Form::text('entrada','',array(
                                                'id' => 'entrada',
                                                'class' => 'campo',
                                                'readonly' => 'true',
                                                'placeholder' => 'Fecha de Entrada',
                                                )) }}
                    {{ Form::label('entrada', 'Debe introducir una fecha válida',array(
                                                'class' => 'error'
                                                ))}}
                </div>
                <div class="capa-texto" data-icon = '&#xf073'>
                    {{ Form::text('salida','',array(
                                                'id' => 'salida',
                                                'class' => 'campo',
                                                'readonly' => 'true',
                                                'placeholder' => 'Fecha de Salida',
                                                )) }}
                        {{ Form::label('salida', 'Debe introducir una fecha válida',array(
                                                'class' => 'error'
                                                ))}}
                </div>
                <div class="capa-boton" data-icon = '&#xf1d9'>
                {{ Form::submit('ACEPTAR', array(
                                                'class' => 'boton'
                                                )) }}
                </div>
            {{ Form::close() }}
        </div>
    </div>
</div>
