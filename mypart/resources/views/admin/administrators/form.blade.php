<div class="form-group {{ $errors->has('ProjectID') ? 'has-error' : ''}}">
    <label for="ProjectID" class="control-label">{{ 'Projectid' }}</label>
    <input class="form-control" name="ProjectID" type="text" id="ProjectID" value="{{ isset($administrator->ProjectID) ? $administrator->ProjectID : ''}}" >
    {!! $errors->first('ProjectID', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Problem') ? 'has-error' : ''}}">
    <label for="Problem" class="control-label">{{ 'Problem' }}</label>
    <input class="form-control" name="Problem" type="text" id="Problem" value="{{ isset($administrator->Problem) ? $administrator->Problem : ''}}" >
    {!! $errors->first('Problem', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Solution') ? 'has-error' : ''}}">
    <label for="Solution" class="control-label">{{ 'Solution' }}</label>
    <input class="form-control" name="Solution" type="text" id="Solution" value="{{ isset($administrator->Solution) ? $administrator->Solution : ''}}" >
    {!! $errors->first('Solution', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Risk') ? 'has-error' : ''}}">
    <label for="Risk" class="control-label">{{ 'Risk' }}</label>
    <input class="form-control" name="Risk" type="text" id="Risk" value="{{ isset($administrator->Risk) ? $administrator->Risk : ''}}" >
    {!! $errors->first('Risk', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
