@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Profile</div>

                <div class="panel-body" id="root">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Freetext</label>
                        <input type="text" name="message" class="form-control" v-model="message">
                        <p> {{ message }} </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


