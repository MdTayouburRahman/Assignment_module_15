<div class="container mt-5">
    <h2>Contact With Us</h2>

    <form action="/sendmail" method="POST">
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
            <input type="text" class="form-control" id="usr" name="email" value="{{ old('email') }}">
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="comment">Message:</label>
            <textarea class="form-control" rows="5" id="message" name="message">{{ old('message') }}</textarea>
            @error('message')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

        </div>
        <button type="submit" class="btn btn-primary mt-3">Send Message</button>
    </form>

    @if ($message = Session::get('success'))
    <span class="alert alert-success alert-block mt-5 mb-5">{{ $message }}</span>
@endif
</div>