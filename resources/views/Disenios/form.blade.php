@extends('master')
@section('content')
<form action="" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="panel">
        <div class="panel-heading">
            <div class="btn-toolbar" aria-label="Toolbar with button groups" role="toolbar">
                <div class="btn-group " role="group" aria-label="...">
                    <button class="btn btn-default"><i class="fa fa-save "></i> Guardar </button>
                </div>                
            </div>
        </div>
        <div class="panel-body">    
            <div class="col-md-4">
                <div class="form-group">
                    <label class="control-label" for="inputError1">Input </label>
                    <select class="form-control">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>  
                <div class="form-group">
                    <label class="control-label" for="inputError1">Input </label>
                    <input type="text" class="form-control" id="inputError1">
                </div>  
                <div class="form-group  has-error">
                    <label class="control-label" for="inputError1">Input with error</label>
                    <input type="text" class="form-control" id="inputError1">
                </div>  
            </div>
            <div class="col-md-4">
                <div class="form-group ">
                    <label class="control-label" for="inputError1">Input with error</label>
                    <textarea class="form-control" rows="3"></textarea>
                </div>  
                <div class="form-group has-error">
                    <label class="control-label" for="inputError1">Input with error</label>
                    <input type="text" class="form-control" id="inputError1">
                </div>  
            </div>
            <div class="col-md-4">
                <div class="form-group has-error">
                    <label class="control-label" for="inputError1">Input with error</label>
                    <input type="text" class="form-control" id="inputError1">
                </div>  
            </div>
        </div>
    </div>
</form>
@endsection