<h1>Welcome User</h1>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <!-- Add more table headers for each column you want to display -->
        </tr>
    </thead>
    <tbody>
        @foreach($formData as $data)
            <tr>
                <td>{{ $data->id }}</td>
                <td>{{ $data->name}}</td>
                <td>{{ $data->email}}</td>
                <td>{{ $data->address}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
