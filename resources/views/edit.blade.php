@extends('base')
@section('content')
<div class="container mt-5">
    <div class="row mt-2">
        <div class="col-lg-7 mx-auto">
            <div class="card mt-4">
                <div class=" card-body">
                    <form action="{{route('phonebook.update',['phonebook'=>$record->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                            <label for="Title">Title</label>
                            <select name="title" class="form-control">
                                <option>{{$record->title}}</option>
                                <option>Select</option>
                                <option value="Consumer">Consumer</option>
                                <option value="Broker">Broker</option>
                                <option value="Business">Business</option>
                                <option value="Organisation">Organisation</option>
                                <option value="Industry">Industry</option>
                            </select>
                            <small class="text-danger">{{$errors->first('title')}}</small>
                        </div>
                        <div class="mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control" value="{{$record->name}}">
                            <small class="text-danger">{{$errors->first('name')}}</small>
                        </div>
                        <div class="mb-3">
                            <label for="">Contact no.</label>
                            <input type="text" name="contact" class="form-control" value="{{$record->contact}}">
                            <small class="text-danger">{{$errors->first('contact')}}</small>
                        </div>
                        <div class="mb-3">
                            <label for="">Image</label>
                            <input type="file" name="image" class="form-control-file" value="">
                            <small class="text-danger">{{$errors->first('image')}}</small>
                        </div>
                        <div class="mb-3">
                            <label for="">Email</label>
                            <input type="text" name="email" class="form-control" value="{{$record->email}}">
                            <small class="text-danger">{{$errors->first('email')}}</small>
                        </div>
                        <div class="mb-3">
                            <label for="">Address</label>
                            <input type="text" name="address" class="form-control" value="{{$record->address}}">
                            <small class="text-danger">{{$errors->first('address')}}</small>
                        </div>
                       
                        <div class="mb-3">
                            <input type="submit" value="update"name="post"  class=" form-control btn btn-info">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection