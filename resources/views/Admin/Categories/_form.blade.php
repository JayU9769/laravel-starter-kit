
<div class="row">
    <div class="col-md-6">
        <div class="form-group row  mb-3 ">
            <label for="name" class="col-md-4 form-control-label font-weight-bolder">Name <span class="text-danger">*</span></label>
            <div class="col-sm-8">
                {!! Form::text('name', old('name'), ['class' => 'form-control', 'id' => 'name', 'placeholder' => 'Enter name', 'required']) !!}
                <small class="help-block with-errors text-danger"></small>
            </div>
        </div>

        <div class="form-group row  mb-3">
            <label for="sequence" class="col-md-4 form-control-label font-weight-bolder">Sequence <span class="text-danger">*</span></label>
            <div class="col-sm-8">
                {!! Form::number('sequence', old('sequence'), ['class' => 'form-control', 'id' => 'sequence', 'min' => 0, 'placeholder' => 'Enter sequence', 'required']) !!}
                <small class="help-block with-errors text-danger"></small>
            </div>
        </div>

        <div class="form-group row  mb-3">
            <label for="icon" class="col-md-4 form-control-label font-weight-bolder">Icon <span class="text-danger">*</span></label>
            <div class="col-sm-8">
                {!! Form::file('icon', ['class' => 'form-control opacity-10', 'id' => 'icon', 'placeholder' => 'Select icon']) !!}
                <small class="help-block with-errors text-danger"></small>
            </div>
        </div>

        <div class="form-group row  mb-3">
            <label for="description" class="col-md-4 form-control-label font-weight-bolder">Description</label>
            <div class="col-sm-8">
                {!! Form::textarea('description', old('description'), ['class' => 'form-control', 'id' => 'description', 'placeholder' => 'Enter description', 'rows' => 10]) !!}
            </div>
        </div>

        <div class="form-group row  mb-3">
            <label for="status" class="col-md-4 form-control-label font-weight-bolder">Status <span class="text-danger">*</span></label>
            <div class="col-sm-8">
                {{ Form::select('status', [1 => 'Active', 0 => 'Inactive'], old('status'), ['class' => 'form-control', 'id' => 'status', 'required']) }}
                <small class="help-block with-errors text-danger"></small>
            </div>
        </div>

    </div>
</div>

