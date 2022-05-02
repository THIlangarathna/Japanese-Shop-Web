<table class="table-condensed table-hover table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Address:Permanent</th>
            <th>Address:Current</th>
            <th>Contact Home</th>
            <th>Contact Mobile</th>
            <th>Contact Work</th>
            <th>Contact Whatsapp</th>
            <th>Email</th>
            <th>NIC</th>
            <th>DOB</th>
            <th>Age</th>
            <th>Occupation</th>
            <th>Family Member 1:Name</th>
            <th>Family Member 1:Age</th>
            <th>Family Member 2:Name</th>
            <th>Family Member 2:Age</th>
            <th>Family Member 3:Name</th>
            <th>Family Member 3:Age</th>
            <th>Family Member 4:Name</th>
            <th>Family Member 4:Age</th>
            <th>Family Member 5:Name</th>
            <th>Family Member 5:Age</th>
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
        @foreach ($gojukai as $data)
        <tr>
            <td>{{ $data->a_name }}</td>
            <td>{{ $data->a_address_permanent }}</td>
            <td>{{ $data->a_address_current }}</td>
            <td>{{ $data->a_contact_home }}</td>
            <td>{{ $data->a_contact_mobile }}</td>
            <td>{{ $data->a_contact_work }}</td>
            <td>{{ $data->a_contact_whatsapp }}</td>
            <td>{{ $data->a_email }}</td>
            <td>{{ $data->a_nic }}</td>
            <td>{{ $data->a_dob }}</td>
            <td>{{ $data->a_age }}</td>
            <td>{{ $data->a_occupation }}</td>
            <td>{{ $data->a_family_1_name }}</td>
            <td>{{ $data->a_family_1_dob }}</td>
            <td>{{ $data->a_family_2_name }}</td>
            <td>{{ $data->a_family_2_dob }}</td>
            <td>{{ $data->a_family_3_name }}</td>
            <td>{{ $data->a_family_3_dob }}</td>
            <td>{{ $data->a_family_4_name }}</td>
            <td>{{ $data->a_family_4_dob }}</td>
            <td>{{ $data->a_family_5_name }}</td>
            <td>{{ $data->a_family_5_dob }}</td>
            <td>{{ $data->s_name }}</td>
            <td>{{ $data->s_address }}</td>
            <td>{{ $data->s_contact_home }}</td>
            <td>{{ $data->s_contact_mobile }}</td>
            <td>{{ $data->s_relationship }}</td>
            <td>{{ $data->created_at }}</td>
            <td>
                <a href="/Gojukai/{{$data->id }}/edit" class="btn btn-success">View</a>
            </td>
            <td>
                <form method="POST" action="/Gojukai/{{ $data->id }}">
                    @csrf
                    @method('Delete')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>