<h1>Welcome User</h1>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Number</th>
            <th>Occupation</th>
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
                <td>{{ $data->contact_num}}</td>
                <td>{{ $data->occupation}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
