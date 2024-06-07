@extends('layouts.app')

@section('content')
<div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Emoloyee Management</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->

        <div class="contaier-fluid">
            <div class="row justify-content-center">
                <div class="col-md-6 mt-4 bg-light">
                    <form action="{{url('employe')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>Firstname</label>
                                    <input type="text" name="firstname" class="form-control" placeholder="Enter Firstname" value="{{old('firstname')}}" >
                                    @error('firstname') <span class="text-danger">{{$message}}</span>@enderror
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-group">
                                    <label>Lastname</label>
                                    <input type="text" name="lastname" class="form-control" placeholder="Enter Lastname" value="{{old('lastname')}}" >
                                    @error('lastname') <span class="text-danger">{{$message}}</span>@enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="birthday">Birthday</label>
                                    <input type="date" class="form-control" id="birthday" value="{{old('dateofbirth')}}" name="dateofbirth">
                                    @error('dateofbirth') <span class="text-danger">{{$message}}</span>@enderror
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="int" name="phone" class="form-control" placeholder="Enter Phone Number" value="{{old('phone')}}" >
                                    @error('phone') <span class="text-danger">{{$message}}</span>@enderror
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <div class="alert alert-info">
                        Reignmon Dizon
                    </div>

                    <div class="card">
                        <div class="card-body p-0">

                            <table class="table text-center">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Firstname</th>
                                        <th>Lastname</th>
                                        <th>Birthday</th>
                                        <th>Phone</th>
                                        <th>Update and Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($employees as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->firstname}}</td>
                                        <td>{{$item->lastname}}</td>
                                        <td>{{$item->dateofbirth}}</td>
                                        <td>{{$item->phone}}</td>
                                        <td>
                                            <a class="btn btn-info btn-sm" href="{{url('employe/'.$item->id.'/edit')}}">
                                                <i class="fas fa-pencil-alt">
                                                </i>
                                                Edit
                                            </a>
    
                                            <a class="btn btn-danger btn-sm" href="{{url('employe/'.$item->id.'/delete')}}">
                                                <i class="fas fa-trash">
                                                </i>
                                                Delete
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach


                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>

                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection