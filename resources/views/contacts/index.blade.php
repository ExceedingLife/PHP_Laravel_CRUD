@extends('base')

@section('main')
<section id="section-content" class="text-center">
    <div class="col-sm-12">
        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
    </div>
    <div class="container contentdiv rounded">
        <div class="row">
            <div class="col-md-12">
                <div class="pb-2 mt-4 mb-2 border-bottom clearfix">
                    <h2>View Contacts</h2>
                </div>
            </div>
            <div class="mx-auto my-2">
                <a href="{{ route('contacts.create')}}" class="btn btn-primary">New Contact</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <!-- <th class="col"></th> -->
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Job Title</th>
                            <th>City</th>
                            <th>Country</th>
                            <th colspan="2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($contacts as $contact)
                        <tr>
                            <th>{{$contact->id}}</th>
                            <td>{{$contact->first_name}} {{$contact->last_name}}</td>
                            <td>{{$contact->email}}</td>
                            <td>{{$contact->job_title}}</td>
                            <td>{{$contact->city}}</td>
                            <td>{{$contact->country}}</td>                            
                            <td>                            
                                <form action="{{route('contacts.destroy', $contact->id)}}" method="post">

                                    <a href="{{ route('contacts.show', $contact->id) }}" class="btn btn-info">Show</a>
                                    <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-primary">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                   <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection