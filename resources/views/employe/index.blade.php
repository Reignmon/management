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
                    <form action="" method="">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>Firstname</label>
                                    <input type="text" name="firstname" class="form-control" placeholder="Enter Firstname" value="" >
                                    
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-group">
                                    <label>Lastname</label>
                                    <input type="text" name="lastname" class="form-control" placeholder="Enter Lastname" value="" >
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="birthday">Birthday</label>
                                    <input type="date" class="form-control" id="birthday" value="" name="dateofbirth">
                                    
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="int" name="phone" class="form-control" placeholder="Enter Phone Number" value="" >
                                
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
@endsection