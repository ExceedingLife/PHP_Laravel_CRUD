@extends('base')

@section('main')
<section id="section-content" class="text-center">
    <div class="container contentdiv rounded">
        <div class="row">
            <div class="col-md-12">
                <div class="pb-2 mt-4 mb-2 border-bottom clearfix">
                    <h2>Create Contact</h2>
                </div>
                <div >
                    <a class="btn btn-success" href="{{route('contacts.index')}}">Back</a>
                </div>
            </div>
            <div class="col-md-10 mx-auto">
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as  $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br />
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 mx-auto mt-3">
                <form method="POST" action="{{ route('contacts.store') }}">
                    @csrf
                    <div class="form-group row">
                        <label for="txtfn" class="col-sm-3"><b>First Name:</b></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="first_name" id="txtfn"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="txtln" class="col-sm-3"><b>Last Name:</b></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="last_name" id="txtln"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="txtem" class="col-sm-3"><b>Email:</b></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="email" id="txtem"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="txtcy" class="col-sm-3"><b>City:</b></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="city" id="txtcy"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="txtctry" class="col-sm-3"><b>Country:</b></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="country" id="txtctry"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="txtjt" class="col-sm-3"><b>Job Title:</b></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="job_title" id="txtjt"/>
                        </div>
                    </div>
  
                    <button type="submit" class="btn btn-primary">Create Contact</button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection