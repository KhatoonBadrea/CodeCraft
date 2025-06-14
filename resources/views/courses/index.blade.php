
<div class="container">
    
    <table class="table table-bordered" border="1">
        <thead>
            <tr>
                <th>course name </th>
                <th>user name</th>
            </tr>
        </thead>
        <tbody>
            @foreach($courses as $course)
                <tr>
                    <td>{{ $course->name }}</td>
                    <td>
                        @foreach($course->users as $user)
                            <span class="badge badge-primary">{{ $user->name }}</span>
                        @endforeach
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('courses.create') }}" class="btn btn-success mb-3"> new</a>
</div>
