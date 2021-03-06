@extends('layouts.admin')

@section('content')
    <div class="col-sm-12">
        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">Update Semester</div>
                @include('includes.errors')
                <div class="panel-body">
                    {{Form::model($semester,['route'=>['semester.update',$semester->id],'method'=>'put'])}}
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Semester:</label>
                        <div class="col-sm-9">
                            {{Form::text('semester',null,['class'=>'form-control'])}}
                        </div>
                    </div>
                    <br><br><br>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <div class="pull-right">
                                {{Form::submit('Update',['class'=>'btn btn-info'])}}
                            </div>
                        </div>
                    </div>
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>
@endsection
