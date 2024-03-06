<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Establishments</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <h1>New Establishment</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach ($errors ->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form action="post" action="{{route('establishments.store')}}">
        @csrf
        @method('post')
        <h2>Information</h2>
                <div class="row g-3">
                    <div class="col">
                        <label for="name_of_entity">Name of Entity</label>
                        <input type="text" class="form-control" name="name_of_entity" placeholder="Name of Entity" aria-label="Name of Entity">
                    </div>
                    <div class="col">
                        <label for="classification">Classification</label>
                        <select class="form-select" name="classification_id">
                            <option value=1>Travel and Tour Agency</option>
                            <option value=2>Travel Agency</option>
                            <option value=3>Land Tourist Transport</option>
                            <option value=4>Tourist Water Transport</option>
                            <option value=5>Hotel</option>
                            <option value=6>Resort</option>
                            <option value=7>Apartment Hotel</option>
                            <option value=8>Mabuhay Accommodation</option>
                            <option value=9>Homestay</option>
                            <option value=10>Tourism Trainer</option>
                            <option value=11>Adventure & Tourism Recreational Facility</option>
                            <option value=12>Regional Tour Guide</option>
                            <option value=13>Restaurant</option>
                            <option value=14>Specialty Shop</option>
                            <option value=15>Agri-Tourism Farm/Site</option>
                            <option value=16>Agri-Tourism Farm/Site Stay</option>
                            <option value=17>Mice Organizers</option>
                            <option value=18>MICE Facilities</option>
                            <option value=19>Community Guide</option>
                      </select>
                    </div>
                </div>
                <br>
                <div class="row g-3">
                    <div class="col">
                        <label for="province">Province</label>
                        <select class="form-select" aria-label="Default select example" name="province">
                            <option value="Leyte">Leyte</option>
                            <option value="Samar">Samar</option>
                            <option value="Biliran">Biliran</option>
                            <option value="Northern Leyte">Northern Leyte</option>
                            <option value="Southern Leyte">Southern Leyte</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="city_mun">City/Municipality</label>
                        <select class="form-select" aria-label="Default select example" name="city_municipality">
                            <option value="Tacloban City">Tacloban City</option>
                            <option value="Baybay City">Baybay City</option>
                            <option value="Ormoc City">Ormoc City</option>
                            <option value="Borongan City">Borongan City</option>
                            <option value="Maasin City">Maasin City</option>
                        </select>
                    </div>
                </div>
                <br>
                <div class="row g-3">
                    <div class="col">
                        <label for="male_emp_count">Number of Male Employees</label>
                        <input type="number" class="form-control" name="male_emp_count">
                    </div>
                    <div class="col">
                        <label for="female_emp_count">Number of Female Employees</label>
                        <input type="number" class="form-control" name="female_emp_count">
                    </div>
                    <div class="col">
                        <label for="total_emp_count">Total Number of Employees</label>
                        <input type="number" class="form-control" name="num_of_employees">
                    </div>
                </div>
                <br>
                <div class="row g-3">
                    <div class="col">
                        <label for="vehicle_count">Number of Vehicles</label>
                        <input type="number" class="form-control" name="num_of_vehicles">
                    </div>
                    <div class="col">
                        <label for="room_count">Number of Rooms</label>
                        <input type="number" class="form-control" name="num_of_rooms">
                    </div>
                </div>
                <br>
                <div class="row g-3">
                    <div class="col">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" name="address">
                    </div>
                </div>
                <!-- <br>
                <div class="row g-3">
                    <div class="col">
                        <label for="phone_number">Phone Number</label>
                        <input type="text" class="form-control" name="phone_number">
                    </div>
                    <div class="col">
                        <label for="email_add">Email Address</label>
                        <input type="email" class="form-control" name="email_add">
                    </div>
                </div>
                <br> -->
                <div class="row g-3">
                    <div class="col">
                        <label for="owner_manager">Owner/Operations Manager/General Manager</label>
                        <input type="text" class="form-control" name="owner_manager">
                    </div>
                    <div class="col">
                        <label for="accreditation_no">Accreditation Number</label>
                        <input type="text" class="form-control" name="accreditation_no">
                    </div>
                </div>
                <br>
                <div class="row g-3">
                    <div class="col">
                        <label for="org_type">Type of Organization</label>
                        <input type="text" class="form-control" name="org_type">
                    </div>
                    <div class="col">
                        <label for="date_est">Date  Established</label>
                        <input type="date" class="form-control" name="date_est">
                    </div>
                </div>
                <!-- <br>
                <div class="row g-3">
                    <div class="col">
                        <label for="first_year_accredited">First Year Accredited</label>
                        <input type="text" class="form-control" name="first_year_accredited">
                    </div>
                    <div class="col">
                        <label for="photo_est">Photo</label>
                        <input type="file" class="form-control" name="photo_est">
                    </div>
                </div> -->
                <br>
                <!-- <hr>
                <h2>Registration</h2>
                <div class="row g-3">
                    <div class="col">
                        <label for="status">Status</label>
                        <select class="form-select" aria-label="Default select example" name="status">
                            <option value="New Applicant">New Applicant</option>
                            <option value="Accredited">Accredited</option>
                            <option value="For Renewal">For Renewal</option>
                            <option value="Expired">Expired</option>
                            <option value="Temporarily Closed">Temporarily Closed</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="validity">Validity</label>
                        <input type="date" class="form-control" name="validity">
                    </div>
                </div>
                <br> -->
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
