@extends('website.layout')

@section('title', 'Voluntarios')

@section('content')
    <div class="container">
        <div class="m-4">
            <div class="mb-3">
                <h3>Unirse al voluntariado</h3>
            </div>
            <!-- Success message -->
            @if(session('success'))
                    <div class="alert alert-success mb-3 small"> {{ session('success') }}</div>
            @endif

                <form action="{{ route('volunteers.store') }}" method="POST">
                    @csrf

                    <!-- Name -->
                    <div class="form-group">
                        <label for="first_name">Nombre</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Nombre" value="{{ old('first_name') }}">

                        @error('first_name')
                            <div class="alert alert-danger mt-3 small p-2"> {{ $errors->first('first_name') }} </div>
                        @enderror
                    </div>

                    <!-- Last name -->
                    <div class="form-group">
                        <label for="last_name">Apellido</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Apellido" value="{{ old('last_name') }}">

                        @error('last_name')
                            <div class="alert alert-danger mt-3 small p-2"> {{ $errors->first('last_name') }} </div>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{ old('email') }}">

                        @error('email')
                            <div class="alert alert-danger mt-3 small p-2"> {{ $errors->first('email') }} </div>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div class="form-group">
                        <label for="password">Contrase??a</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Contrase??a" value="{{ old('password') }}">

                        @error('password')
                            <div class="alert alert-danger mt-3 small p-2"> {{ $errors->first('password') }} </div>
                        @enderror
                    </div>

                    <!-- Phone number -->
                    <div class="form-group">
                        <label for="phone_number">N??mero de tel??fono</label>
                        <input type="tel" class="form-control" id="phone_number" name="phone_number" placeholder="N??mero de tel??fono" value="{{ old('phone_number') }}">

                        @error('phone_number')
                            <div class="alert alert-danger mt-3 small p-2"> {{ $errors->first('phone_number') }} </div>
                        @enderror
                    </div>

                    <!-- Birth date -->
                    <div class="form-group">
                        <label for="birthdate">Fecha de nacimiento</label>
                        <input type="date" class="form-control" id="birthdate" name="birthdate" value="{{ old('birthdate') }}">

                        @error('birthdate')
                            <div class="alert alert-danger mt-3 small p-2"> {{ $errors->first('birthdate') }} </div>
                        @enderror
                    </div>

                    <!-- Body -->
                    <div class="form-group">
                        <label for="body">Contanos c??mo conociste la ONG y por qu?? quer??s unirte al voluntariado</label>
                        <textarea class="form-control" id="body" name="body"> {{ old('body') }} </textarea>

                        @error('body')
                            <div class="alert alert-danger mt-3 small p-2"> {{ $errors->first('body') }} </div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Ingresar</button>
                </form>

        </div>
    </div>
@endsection
