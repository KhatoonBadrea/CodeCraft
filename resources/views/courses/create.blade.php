<form action="{{ route('courses.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">course name:</label>
        <input type="text" name="name" class="form-control" required>
    </div>

    <div class="form-group">
        <label>link with users:</label>
        @foreach($users as $user)
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="users[]" value="{{ $user->id }}">
                    {{ $user->name }}
                </label>
            </div>
        @endforeach
    </div>

    <button type="submit" class="btn btn-primary">save</button>
</form>