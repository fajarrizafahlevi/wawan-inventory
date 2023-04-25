@extends('auth.base')

@section('title', 'Login')
@section('content')
    <section class="vh-100" style="background-color: #508bfc;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">

                            <form action="{{route('login')}}" method="post">
                                @csrf
                                <h3 class="mb-5">Masuk untuk melanjutkan</h3>

                                <div class="mb-4">
                                    <input type="text" id="username" name="username" class="form-control form-control-lg" placeholder="Username" />
                                </div>

                                <div class="mb-4">
                                    <input type="password" id="password" name="password" class="form-control form-control-lg" placeholder="Password" />
                                </div>

                                <button class="btn btn-primary btn-lg btn-block" type="submit">Masuk</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
