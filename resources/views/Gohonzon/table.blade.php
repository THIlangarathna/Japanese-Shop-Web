<table class="table-condensed table-hover table">
    <thead>
        <tr>
            <th>Date</th>
            <th>Name</th>
            <th>Address:Permanent</th>
            <th>Address:Current</th>
            <th>Contact Home</th>
            <th>Contact Mobile</th>
            <th>Contact Work</th>
            <th>Contact Whatsapp</th>
            <th>Email</th>
            <th>NIC</th>
            <th>Enshrined Name</th>
            <th>Enshrined Date</th>
            <th>Sponsor Name</th>
            <th>Sponsor Address</th>
            <th>Sponsor Contact Home</th>
            <th>Sponsor Contact Mobile</th>
            <th>Sponsor Relationship</th>
            <th>Created</th>
            <th>View/Edit</th>
            <th>Delete</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($gohonzon as $data)
        <tr>
            <td>{{ $data->date }}</td>
            <td>{{ $data->name }}</td>
            <td>{{ $data->address_permanent }}</td>
            <td>{{ $data->address_current }}</td>
            <td>{{ $data->contact_home }}</td>
            <td>{{ $data->contact_mobile }}</td>
            <td>{{ $data->contact_work }}</td>
            <td>{{ $data->contact_whatsapp }}</td>
            <td>{{ $data->email }}</td>
            <td>{{ $data->nic }}</td>
            <td>{{ $data->e_name }}</td>
            <td>{{ $data->e_date }}</td>
            <td>{{ $data->s_name }}</td>
            <td>{{ $data->s_address }}</td>
            <td>{{ $data->s_contact_home }}</td>
            <td>{{ $data->s_contact_mobile }}</td>
            <td>{{ $data->s_relationship }}</td>
            <td>{{ $data->created_at }}</td>
            <td>
                <a href="/Gohonzon/{{ $data->id }}/edit" class="btn btn-success">View</a>
            </td>
            <td>
                <form method="POST" action="/Gohonzon/{{ $data->id }}">
                    @csrf
                    @method('Delete')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>