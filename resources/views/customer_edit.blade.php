@extends('main')

@section('title', "| Customer-Edit ")

@section('content')
<div class="form-group continer">
    <div class = "page-header container col-xs-12 form-group">
        <div class = "col-xs-12">
            <h1 style="text-align:left; display:inline">Customer Update</h1>
        </div>
    </div>
    <form method="POST" class="form-group col-xs-12" action="{{ route('post.update', $customer->id)  }}">
        <div class="form-group col-xs-12">
            <label class="control-label col-xs-4">
                <h4>First Name:</h4>
            </label>
            <div class="col-xs-8">
                <input type="first_name" class="form-control" name="first_name" value="{{ $customer->first_name }}" >
            </div>
        </div>

        <div class="form-group col-xs-12">
            <label class="control-label col-xs-4">
                <h4>Last Name:</h4>
            </label>
            <div class="col-xs-8">
                <input type="last_name" class="form-control" name="last_name" value="{{ $customer->last_name }}" >
            </div>
        </div>

        <div class="form-group col-xs-12">
            <label class="control-label col-xs-4" >
                <h4>Caller ID:</h4>
            </label>
            <div class="col-xs-8">
                <input type="caller_id" class="form-control" name="caller_id" value="{{ $customer->phone }}" >
            </div>
        </div>

        <div class="form-group col-xs-12">
            <label class="control-label col-xs-4" >
                <h4>Address Line 1:</h4>
            </label>
            <div class="col-xs-8">
                <input type="add_one" class="form-control" name="address_one" value="{{ $customer->address_one }}">
            </div>
        </div>
        <div class="form-group col-xs-12">
            <label class="control-label col-xs-4" >
                <h4>Address Line 2:</h4>
            </label>
            <div class="col-xs-8">
                <input type="add_two" class="form-control" name="address_two" value="{{ $customer->address_two }}" >
            </div>
        </div>
        <div class="form-group col-xs-12">
            <label class="control-label col-xs-4">
                <h4>ZIP Code:</h4>
            </label>
            <div class="col-xs-8">
                <input type="zip" class="form-control" name="zip" value="{{ $customer->zip }}" >
            </div>
        </div>
        
        <div class="form-group col-xs-12"> 
        <br>       
            <div class="col-xs-7" align="right">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" role="botton" value="Update" class="btn btn-success btn-lg" >
            </div>
            <div class="col-xs-5">
                <a href="{{ route('customer') }}" class="btn btn-warning btn-lg" role="button">Cancel</a>
            <div>
        </div>
    </form>

  </div>
<br> <br>
@endsection