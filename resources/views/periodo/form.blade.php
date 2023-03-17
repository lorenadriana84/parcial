<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $periodo->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('date_ini') }}
            {{ Form::text('date_ini', $periodo->date_ini, ['class' => 'form-control' . ($errors->has('date_ini') ? ' is-invalid' : ''), 'placeholder' => 'Date Ini']) }}
            {!! $errors->first('date_ini', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('date_fin') }}
            {{ Form::text('date_fin', $periodo->date_fin, ['class' => 'form-control' . ($errors->has('date_fin') ? ' is-invalid' : ''), 'placeholder' => 'Date Fin']) }}
            {!! $errors->first('date_fin', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('date_at') }}
            {{ Form::text('date_at', $periodo->date_at, ['class' => 'form-control' . ($errors->has('date_at') ? ' is-invalid' : ''), 'placeholder' => 'Date At']) }}
            {!! $errors->first('date_at', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>