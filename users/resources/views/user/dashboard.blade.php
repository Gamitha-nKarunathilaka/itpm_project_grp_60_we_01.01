<h1>Welcome User</h1>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <!-- Add more table headers for each column you want to display -->
        </tr>
    </thead>
    <tbody>
        @foreach($formData as $data)
            <tr>
                <td>{{ $data->id }}</td>
                <td>{{ $data->name}}</td>
                <!-- Add more table cells for each column you want to display -->
            </tr>
        @endforeach
    </tbody>
</table>
