@extends('base')

@section('main')
<section id="section-content" class="text-center">
    <div class="container contentdiv rounded">
        <div class="row">
            <div class="col-md-12">
                <div class="pb-2 mt-4 mb-2 border-bottom clearfix">
                    <h2>Show Contact</h2>
                </div>
                <div >
                    <a class="btn btn-success" href="{{route('contacts.index')}}">Back</a>
                </div>
            </div>
        </div>
        <div class='row'>
            <div class="col-md-12">
                <div class="form-group row">
                    <label for="txtfn" class="col-md-3"><b>First Name:</b></label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="first_name" id="txtfn" 
                            value="{{ $contact->first_name }}" disabled />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="txtln" class="col-md-3"><b>Last Name:</b></label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="last_name" id="txtln" 
                            value="{{ $contact->last_name }}" disabled />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="txtem" class="col-md-3"><b>Email:</b></label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="email" id="txtem" 
                            value="{{ $contact->email }}" disabled />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="txtcy" class="col-md-3"><b>City:</b></label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="city" id="txtcy" 
                            value="{{ $contact->city }}" disabled />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="txtctry" class="col-md-3"><b>Country:</b></label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="country" id="txtctry" 
                            value="{{ $contact->country }}" disabled />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="txtjt" class="col-md-3"><b>Job Title:</b></label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="job_title" id="txtjt" 
                            value="{{ $contact->job_title }}" disabled />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection