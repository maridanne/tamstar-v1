<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Establishment</title>
</head>
<body>
    <h1>Establishment</h1>
    <div>
        <table border="1">
            <tr>
                <th>Establishment ID</th>
                <th>Classification ID</th>
                <th>Province</th>
                <th>City or Municipality</th>
                <th>Number of Male Employees</th>
                <th>Number of Female Employees</th>
                <th>Total Number of Employees</th>
                <th>Number of Vehicles</th>
                <th>Number of Rooms</th>
                <th>Name of Entity</th>
                <th>Address</th>
                <th>Owner/Operation Manager/General Manager</th>
                <th>Accreditation Number</th>
                <th>Type of Organization</th>
                <th>Date Established</th>
            </tr>
            @foreach ($establishments as $establishment)
                <tr>
                    <td>{{$establishment->est_id}}</td>
                    <td>{{$establishment->classification_id}}</td>
                    <td>{{$establishment->province}}</td>
                    <td>{{$establishment->city_municipality}}</td>
                    <td>{{$establishment->male_emp_count}}</td>
                    <td>{{$establishment->female_emp_count}}</td>
                    <td>{{$establishment->num_of_employees}}</td>
                    <td>{{$establishment->num_of_vehicles}}</td>
                    <td>{{$establishment->num_of_rooms}}</td>
                    <td>{{$establishment->name_of_entity}}</td>
                    <td>{{$establishment->address}}</td>
                    <td>{{$establishment->owner_opmngr_genmngr}}</td>
                    <td>{{$establishment->accreditation_no}}</td>
                    <td>{{$establishment->type_of_organization}}</td>
                    <td>{{$establishment->date_established}}</td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>
