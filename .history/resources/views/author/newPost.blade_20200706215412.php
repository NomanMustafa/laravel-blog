@extends('layouts.admin')
@section('title') New Post @endsection
@section('content')
<div class="xs">
    <h3>Forms</h3>
    <div class="tab-content">
        <div class="tab-pane active" id="horizontal-form">
            <form class="form-horizontal">
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Focused Input</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control1" id="focusedinput" placeholder="Default Input">
                    </div>
                    <div class="col-sm-2">
                        <p class="help-block">Your help text!</p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="txtarea1" class="col-sm-2 control-label">Textarea</label>
                    <div class="col-sm-8">
                    <textarea name="txtarea1" id="txtarea1" cols="60" rows="20" ></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-success" style="margin-left: 13rem;">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection
