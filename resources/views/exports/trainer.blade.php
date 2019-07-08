<table>
    <thead>
    <tr>
        <th>school</th>
        <th>program</th>
        <th>courses</th>
        <th>level</th>
        <th>collections</th>
    </tr>
    </thead>
    <tbody>
    @foreach($entries as $user)
        <tr>
            <td>{{ $user->school->id }}</td>
            <td>{{ $user->study_program->id }}</td>
            <td>{{$user->courses->count() ? $user->courses->implode('id', ', ') : 0}} </td>
            <td>{{$user->level}}</td>
            <td>{{$user->collections->implode('id', ', ')}}</td>
        </tr>
    @endforeach
    </tbody>
</table>