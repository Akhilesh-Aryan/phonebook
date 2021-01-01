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
            <form class="d-flex form-inline">
                <div class="input-group mb-1">
                    <input class="form-control" type="search" placeholder="Search by name or mob. no"
                        aria-label="Search" name="search">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit" name="search">
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
    <div class="phonebook py-2 bg-light">
        <div class="container">
            <div class="row">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
                    <div class="col -lg-6 mx-auto">
                        <div class="card px-4 shadow-sm">
                            <a href=""><img src="{{asset('images/'.$rec->image)}}" class="card-img-top" width="50"
                                    height="260" alt="this is image"></a>
                            <div class="card-body">
                                <b class="ms-5"><i class="ms-5">{{$rec->title}}</i></b>
                                <h6 class="lead ms-3">{{$rec->name}}<h6>
                                        <h6 class="ms-3">{{$rec->contact}}</h6>
                                        <h6 class="ms-3">{{$rec->email}}</h6>
                                        <h6 class="ms-3">{{$rec->address}}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
