<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idEstudiante') }}
            {{ Form::text('idEstudiante', $matricula->idEstudiante, ['class' => 'form-control' . ($errors->has('idEstudiante') ? ' is-invalid' : ''), 'placeholder' => 'Idestudiante']) }}
            {!! $errors->first('idEstudiante', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idPeriodo') }}
            {{ Form::text('idPeriodo', $matricula->idPeriodo, ['class' => 'form-control' . ($errors->has('idPeriodo') ? ' is-invalid' : ''), 'placeholder' => 'Idperiodo']) }}
            {!! $errors->first('idPeriodo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idmateria') }}
            {{ Form::text('idmateria', $matricula->idmateria, ['class' => 'form-control' . ($errors->has('idmateria') ? ' is-invalid' : ''), 'placeholder' => 'Idmateria']) }}
            {!! $errors->first('idmateria', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>