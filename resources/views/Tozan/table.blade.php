<table class="table-condensed table-hover table">
    <thead>
        <tr>
            <th>Fulll Name</th>
            <th>Surname</th>
            <th>Other Names</th>
            <th>Address</th>
            <th>Contact Home</th>
            <th>Contact Mobile</th>
            <th>Contact Work</th>
            <th>Contact Whatsapp</th>
            <th>Email</th>
            <th>DOB</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Occupation</th>
            <th>Passport No</th>
            <th>Passport Ex</th>
            <th>Gojukai Received Date</th>
            <th>Gohonzon Received Date</th>
            <th>Family Chanting</th>
            <th>First Tozan</th>
            <th>Previous Tozans</th>
            <th>Illnesses</th>
            <th>Wheelchair</th>
            <th>Contact Japan</th>
            <th>Members names(Tozan)</th>
            <th>Tozan Years</th>
            <th>Tozan Months</th>
            <th>Tozan Days</th>
            <th>Created</th>
            <th>View/Edit</th>
            <th>Delete</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($tozan as $data)
        <tr>
            <td>{{ $data->full_name }}</td>
            <td>{{ $data->surname }}</td>
            <td>{{ $data->other_names }}</td>
            <td>{{ $data->address }}</td>
            <td>{{ $data->contact_home }}</td>
            <td>{{ $data->contact_mobile }}</td>
            <td>{{ $data->contact_work }}</td>
            <td>{{ $data->contact_whatsapp }}</td>
            <td>{{ $data->email }}</td>
            <td>{{ $data->dob }}</td>
            <td>{{ $data->age }}</td>
            <td>{{ $data->gender }}</td>
            <td>{{ $data->occupation }}</td>
            <td>{{ $data->passport_no }}</td>
            <td>{{ $data->passport_expiry_date }}</td>
            <td>{{ $data->gojukai_received_date }}</td>
            <td>{{ $data->gohonzon_received_date }}</td>
            <td>{{ $data->chanting }}</td>
            <td>{{ $data->first_tozan }}</td>
            <td>{{ $data->previous_tozans }}</td>
            <td>{{ $data->illnesses }}</td>
            <td>{{ $data->wheelchair }}</td>
            <td>{{ $data->contact_japan }}</td>
            <td>{{ $data->members_names_tozan }}</td>
            <td>{{ $data->tozan_years }}</td>
            <td>{{ $data->tozan_months }}</td>
            <td>{{ $data->tozan_days }}</td>
            <td>{{ $data->created_at }}</td>
            <td>
                <a href="/Tozan/{{ $data->id }}/edit" class="btn btn-success">View</a>
            </td>
            <td>
                <form method="POST" action="/Tozan/{{ $data->id }}">
                    @csrf
                    @method('Delete')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>