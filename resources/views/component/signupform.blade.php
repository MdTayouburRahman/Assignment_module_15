<div class="container mt-5">
    @if ($message = Session::get('success'))
        <span class="alert alert-success alert-block mt-5 mb-5">{{ $message }}</span>
    @endif

    <h2>Register New User</h2>


    <form action="/register" method="POST">
        @csrf
        <div class="form-group">
            <label for="usr">Name:</label>
            <input type="text" class="form-control" id="usr" name="name" value="{{ old('name') }}">
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="usr">Email:</label>
            <input type="text" class="form-control" id="usr" name="email"value="{{ old('email') }}">
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" name="password">
            @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary mt-3">Register</button>
    </form>


</div>