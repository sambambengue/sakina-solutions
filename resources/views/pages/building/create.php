<div class="col-md-12">
    <div class="box box-info">
        <div class="box-body pad">
            <div class="row">
                <div class="col-md-12 form-group {{ $errors->has('titre') ? " has-error" : ""}}">
                {{ Form::label('titre','Titre') }}
                {{ Form::text('titre', old('titre'),array('class'=>'form-control', 'placeholder' => 'Titre')) }}
                {!! $errors->first('titre', '<span style="color:#dd4b39 !important"><i class="fa fa-times-circle-o"></i> :message</span>') !!}
            </div>

            <div class="col-md-12 form-group {{ $errors->has('description') ? "has-error" : ""}}">
            {{ Form::label('description','Description') }}
            {{ Form::textarea('description', old('description'),array('class'=>'textarea', 'placeholder' => 'Description', 'style' => 'width:100%')) }}
            {!! $errors->first('description', '<span style="color:#dd4b39 !important"><i class="fa fa-times-circle-o"></i> :message</span>') !!}
        </div>
    </div>
</div>
</div>
</div>