<div class="form-group {{ $errors->has('Problam') ? 'has-error' : ''}}">
    <label for="Problam" class="control-label">{{ 'Problam' }}</label>
    <input class="form-control" name="Problam" type="text" id="Problam" value="{{ isset($completeproject->Problam) ? $completeproject->Problam : ''}}" >
    {!! $errors->first('Problam', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Solution') ? 'has-error' : ''}}">
    <label for="Solution" class="control-label">{{ 'Solution' }}</label>
    <input class="form-control" name="Solution" type="text" id="Solution" value="{{ isset($completeproject->Solution) ? $completeproject->Solution : ''}}" >
    {!! $errors->first('Solution', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Risk') ? 'has-error' : ''}}">
    <label for="Risk" class="control-label">{{ 'Risk' }}</label>
    <input class="form-control" name="Risk" type="text" id="Risk" value="{{ isset($completeproject->Risk) ? $completeproject->Risk : ''}}" >
    {!! $errors->first('Risk', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('EstimatedPrice') ? 'has-error' : ''}}">
    <label for="EstimatedPrice" class="control-label">{{ 'Estimatedprice' }}</label>
    <input class="form-control" name="EstimatedPrice" type="text" id="EstimatedPrice" value="{{ isset($completeproject->EstimatedPrice) ? $completeproject->EstimatedPrice : ''}}" >
    {!! $errors->first('EstimatedPrice', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('EstimatedTime') ? 'has-error' : ''}}">
    <label for="EstimatedTime" class="control-label">{{ 'Estimatedtime' }}</label>
    <input class="form-control" name="EstimatedTime" type="text" id="EstimatedTime" value="{{ isset($completeproject->EstimatedTime) ? $completeproject->EstimatedTime : ''}}" >
    {!! $errors->first('EstimatedTime', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Referance') ? 'has-error' : ''}}">
    <label for="Referance" class="control-label">{{ 'Referance' }}</label>
    <input class="form-control" name="Referance" type="text" id="Referance" value="{{ isset($completeproject->Referance) ? $completeproject->Referance : ''}}" >
    {!! $errors->first('Referance', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Location') ? 'has-error' : ''}}">
    <label for="Location" class="control-label">{{ 'Location' }}</label>
    <input class="form-control" name="Location" type="text" id="Location" value="{{ isset($completeproject->Location) ? $completeproject->Location : ''}}" >
    {!! $errors->first('Location', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
