@extends('base')
@section('content')
<main>
    <section class="container py-3 text-center mt-3">
        <div class="py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h2 class="fw-light">PhoneBook</h2>
                <p class="lead text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam
                    praesentium maiores expedita quia doloremque temporibus quasi, facilis accusamus delectus
                    consequatur! Cumque, voluptas tenetur velit corrupti libero sapiente expedita iste magnam?
                </p>
                <a href="/" class="btn btn-outline-secondary my-3">Home</a>
                <a href="" class="btn btn-outline-secondary my-3">Account</a>
                <a href="{{route('phonebook.create')}}" class="btn btn-outline-secondary my-3">insert</a>
            </div>
        </div>
        <div class="col-lg-7 col-md-8 mx-auto">
            <form class="d-flex form-inline" action="{{route('phonebook.index')}}" method="GET">
                <div class="input-group mb-1">
                    <input class="form-control" type="search" placeholder="Search by name or mob. no"
                        aria-label="Search" name="search">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="22" fill="currentColor"
                                class="bi bi-search" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z" />
                                <path fill-rule="evenodd"
                                    d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <div class="phonebook py-2">
        <div class="container">
            <div class="row">
                @if(session('msg'))
                    {!!session('msg')!!}
                @endif
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
                    @foreach($record as $rec)
                    <div class="col">
                        <div class="card px-4 mt-2 shadow-sm">
                            <a href=""><img src="{{asset('images/'.$rec->image)}}" class="card-img-top" width="50"
                                    height="260" alt="this is image">
                            </a>
                            <div class="card-body">
                                <b class="ms-5"><i class="ms-5">{{$rec->title}}</i></b>
                                <h6 class="lead ms-3">{{$rec->name}}<h6>
                                        <h6 class="ms-3">{{$rec->contact}}</h6>
                                        <h6 class="ms-3">{{$rec->email}}</h6>
                                        <h6 class="ms-3">{{$rec->address}}</h6>
                                        <div class="d-flix justify-content-between align-items-center">
                                            <div class="btn-group sm-2 mt-2 ms-5">
                                                <a href="{{route("phonebook.show",["phonebook"=>$rec->id])}}"
                                                        class="btn btn-sm btn-outline-info rounded ms-2">View</a>
                                                <a href="{{route('phonebook.edit',['phonebook'=>$rec->id])}}" class="btn btn-sm btn-outline-primary ms-2 rounded">Edit</a>
                                            <form action="{{route("phonebook.destroy",["phonebook"=>$rec->id])}}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                              <input type="submit" class="btn btn-sm btn-outline-danger ms-2" name="delete" value="Delete">
                                            </form>
                                      </div>
                                  </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <footer class="text-muted py-5">
        <div class="container">
            <p class="float-end mb-1">
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-arrow-up-circle-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
                    </svg>
                    <b>Back to top</b>
                </a>
            </p>
            <p class="mb-1">Lorem ipsum dolor sit amet elit. &copy; Tempore error facere nam labore dolor delectus
                veritatis oris fugiat.</p>
            <p class="mb-0">New to PhoneBook? <a href="/">Visit the homepage</a> or read our <a
                    href="https://google.com">getting started guide</a>.</p>
        </div>
    </footer>

</main>
@endsection
