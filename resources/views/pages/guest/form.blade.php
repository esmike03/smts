<x-app-layout>
    <style>
        .kbw-signature {
            display: inline-block;
            border: 1px solid #a0a0a0;
            -ms-touch-action: none;
        }

        .kbw-signature-disabled {
            opacity: 0.35;
        }

        .uli-box {
            width: 35px;
            text-align: center;
            margin-right: 5px;
        }

        .bordered-table {
            width: 100%;
            border-collapse: collapse;
            /* Ensures borders between cells are merged */
        }

        .bordered-table td {
            border: 1px solid black;
            /* Border for each cell */
            padding: 8px;
            /* Optional padding */
            text-align: center;
            /* Optional text alignment */
        }

        .bordered-table th {
            border: 1px solid black;
            /* Border for header cells if used */
            padding: 8px;
            /* Optional padding */
            text-align: center;
            /* Optional text alignment */
        }

        .container {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .flex-column {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .signature-box,
        .date-box,
        .director-box,
        .date-received-box {
            text-align: center;
            position: relative;
        }

        .signature-line,
        .date-line,
        .director-line,
        .date-received-line {
            width: 400px;
            border-bottom: 1px solid black;
            margin: 0 auto;
        }

        .small-line {
            width: 150px;
            border-bottom: 1px solid black;
            margin: 0 auto;
        }

        .signature-box label,
        .date-box label,
        .director-box label,
        .date-received-box label {
            display: block;
            font-weight: bold;
            margin-top: 5px;
        }

        .picture-box,
        .thumb-box {
            border: 1px solid black;
            width: 180px;
            height: 150px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            font-size: 14px;
        }

        .header-text {
            text-align: center;
            margin-bottom: 20px;
            font-style: italic;
        }

        .noted-by {
            margin-top: 20px;
            margin-bottom: 10px;
            font-weight: bold;
        }

        .flex-row {
            display: flex;
            justify-content: space-between;
        }

        .thumbmark-label {
            text-align: center;
            font-weight: bold;
            margin-top: 10px;
        }
    </style>
    <div id="error-messages"></div>
    <div id="success-message" style="display: none"></div>
    <form method="POST" action="{{ route('student.create') }}" class="needs-validation" novalidate
        enctype="multipart/form-data">
        @csrf
        <div class="pcoded-content" style="padding-left: 10%;padding-right: 10%;">
            <div class="row">
                <!-- Logo Column -->
                <div class="col-12 col-md-1" style="border: solid 1px black;">
                    <div class="text-center">
                        <center>
                            <img class="img-radius" src="{{ asset('assets/images/tesda.png') }}"
                                alt="User-Profile-Image" style="width: 100%; max-width: 100px;">
                        </center>
                    </div>
                </div>

                <input type="hidden" name="course_id" value="{{ $id }}">
                <input type="hidden" name="course_status" value="pending">
                <!-- Main Text Column -->
                <div class="col-12 col-md-10" style="border: solid 1px black;">
                    <div class="text-center">
                        <br><br>
                        <strong>
                            <h5 style="color: blue; margin: 0;">Technical Education and Skills Development Authority
                            </h5>
                            <h6 style="color: blue; margin: 0;">Pangasiwaan sa Edukasyong Teknikal at Pagpapaunlad ng
                                Kasanayan</h6>
                        </strong>
                    </div>
                </div>

                <!-- Additional Info Column -->
                <div class="col-12 col-md-1" style="border: solid 1px black;">
                    <div class="text-center"><br><br>
                        <strong>
                            <span>MIS 03 – 01</span><br>
                            (ver. 2017)
                        </strong>
                    </div>
                </div>

                <!-- Header Section -->
                <div class="col-12" style="border-left: solid 1px black; border-right: solid 1px black; padding: 10px;">
                    <div class="text-center">
                        <h1>Registration Form</h1>
                    </div>
                </div>

                <!-- Main Content Section -->
                <div class="col-12" style="border: solid 1px black; padding: 1px;">
                    <div class="row">
                        <div class="col-12 col-md-10 text-center"><br><br><br>
                            <h1 style="color: blue; margin: 0;">LEARNERS PROFILE FORM</h1>
                        </div>
                        <div class="col-12 col-md-2">
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center align-items-center"
                                    style="padding: 8px;">
                                    <div style="padding: 60px;">
                                        <div class="text-center">
                                            <strong>
                                                <span style="padding-left: 10px;">I.D. Picture</span><br>
                                                (1 x 1)
                                            </strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 p-2" style="border: solid 1px black; padding: 1px;background-color:#dddddd">
                    <strong>
                        <h4 style="color: blue; margin: 0;">1. Web-Based Information System Auto Generated</h4>
                    </strong>
                </div>

                <div class="col-12" style="border-left: solid 1px black; border-right: solid 1px black;">
                    <div class="row">
                        <!-- Left Section -->
                        <div class="col-12 col-md-3 p-1">
                            <div class="row">
                                <div class="col-1 p-3">
                                    <span style="font-weight: bold; font-size: large">1.1</span>
                                </div>
                                <div class="col-11">
                                    <span style="font-weight: bold; font-size: large">Unique Learner Identifier
                                        <br>(ULI) Number:</span>
                                </div>
                            </div>
                        </div>

                        <!-- Input Section -->
                        <div class="col-12 col-md-5 p-3">
                            <div class="d-flex flex-wrap">
                                <input type="text" class="uli-box" id="uli1" maxlength="1" disabled />
                                <input type="text" class="uli-box" id="uli2" maxlength="1" disabled />
                                <input type="text" class="uli-box" id="uli3" maxlength="1" disabled />
                                <input type="text" class="uli-box" id="uli4" maxlength="1" disabled />
                                <input type="text" class="uli-box" id="uli5" maxlength="1" disabled />
                                <input type="text" class="uli-box" id="uli6" maxlength="1" disabled />
                                <input type="text" class="uli-box" id="uli7" maxlength="1" disabled />
                                <input type="text" class="uli-box" id="uli8" maxlength="1" disabled />
                                <input type="text" class="uli-box" id="uli9" maxlength="1" disabled />
                                <input type="text" class="uli-box" id="uli10" maxlength="1" disabled />
                                <input type="text" class="uli-box" id="uli11" maxlength="1" value="-"
                                    disabled />
                                <input type="text" class="uli-box" id="uli12" maxlength="1" disabled />
                                <input type="text" class="uli-box" id="uli13" maxlength="1" disabled />
                                <input type="text" class="uli-box" id="uli14" maxlength="1" disabled />
                            </div>
                        </div>

                        <!-- Entry Date Label -->
                        <div class="col-12 col-md-2 p-2 text-end">
                            <div class="row">
                                <div class="col-2 p-3">
                                </div>
                                <div class="col-10 p-3">
                                    <span style="font-weight: bold; font-size: large">1.2</span>
                                    <span style="font-weight: bold; font-size: large">Entry Date:</span>
                                </div>
                            </div>
                        </div>

                        <!-- Entry Date Input -->
                        <div class="col-12 col-md-2 p-3">
                            <input type="date" name="entry_date" class="form-control" id="entry_date">
                        </div>
                    </div>
                </div>


                <div class="col-12 p-2" style="border: solid 1px black; padding: 1px;background-color:#dddddd">
                    <strong>
                        <h4 style="color: blue; margin: 0;">2. Manpower Profile</h4>
                    </strong>
                </div>

                <div class="col-12" style="border-left: solid 1px black;border-right: solid 1px black;">
                    <div class="row">
                        <div class="col-3 p-1">
                            <p style="font-weight:bold;font-size:large">2.1. Name:</span>
                        </div>
                        <div class="col-3 p-1 ">
                            <input type="text" class="form-control" name="last_name" required
                                style="border:solid 1px">
                            <label class="d-flex justify-content-center align-items-center font-weight-bold">Last Name,
                                Extension Name (e.g:Jr.)</label>
                        </div>
                        <div class="col-3 p-1">
                            <input type="text" class="form-control" name="first_name" style="border:solid 1px">
                            <label class="d-flex justify-content-center align-items-center font-weight-bold">First
                            </label>
                        </div>
                        <div class="col-3 p-1">
                            <input type="text" class="form-control" name="middle_name" style="border:solid 1px">
                            <label
                                class="d-flex justify-content-center align-items-center font-weight-bold">Middle</label>
                        </div>
                    </div>
                </div>

                <div class="col-12" style="border-left: solid 1px black;border-right: solid 1px black;">
                    <div class="row">
                        <div class="col-3 p-1">
                            <p style="font-weight:bold;font-size:large">2.2. Complete
                                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Permanent Mailing
                                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Address:</span>
                        </div>
                        <div class="col-3 p-1 ">
                            <input type="text" class="form-control" name="street" style="border:solid 1px">
                            <label class="d-flex justify-content-center align-items-center font-weight-bold">Number,
                                Street</label>
                        </div>
                        <div class="col-3 p-1">
                            <input type="text" class="form-control" name="barangay" style="border:solid 1px">
                            <label class="d-flex justify-content-center align-items-center font-weight-bold">Barangay
                            </label>
                        </div>
                        <div class="col-3 p-1">
                            <input type="text" class="form-control" name="district" style="border:solid 1px">
                            <label
                                class="d-flex justify-content-center align-items-center font-weight-bold">District</label>
                        </div>
                    </div>
                </div>

                <div class="col-12" style="border-left: solid 1px black;border-right: solid 1px black;">
                    <div class="row">
                        <div class="col-3 p-1">
                        </div>
                        <div class="col-3 p-1 ">
                            <input type="text" class="form-control" name="city" style="border:solid 1px">
                            <label
                                class="d-flex justify-content-center align-items-center font-weight-bold">City/Municipality</label>
                        </div>
                        <div class="col-3 p-1">
                            <input type="text" class="form-control" name="province" style="border:solid 1px">
                            <label class="d-flex justify-content-center align-items-center font-weight-bold">Province
                            </label>
                        </div>
                        <div class="col-3 p-1">
                            <input type="text" class="form-control" name="region" style="border:solid 1px">
                            <label
                                class="d-flex justify-content-center align-items-center font-weight-bold">Region</label>
                        </div>
                    </div>
                </div>

                <div class="col-12" style="border-left: solid 1px black;border-right: solid 1px black;">
                    <div class="row">
                        <div class="col-3 p-1">
                        </div>
                        <div class="col-3 p-1 ">
                            <input type="text" class="form-control" name="email"
                                value="{{ Auth::user()->email }}" required style="border:solid 1px">
                            <label class="d-flex justify-content-center align-items-center font-weight-bold">Email
                                Address/Facebook Account:</label>
                        </div>
                        <div class="col-3 p-1">
                            <input type="number" value="{{ Auth::user()->phone }}" class="form-control"
                                name="phone" style="border:solid 1px">
                            <label class="d-flex justify-content-center align-items-center font-weight-bold">Contact
                                No: </label>
                        </div>
                        <div class="col-3 p-1">
                            <input type="text" class="form-control" name="nationality" style="border:solid 1px">
                            <label
                                class="d-flex justify-content-center align-items-center font-weight-bold">Nationality</label>
                        </div>
                    </div>
                </div>

                <div class="col-12 p-2" style="border: solid 1px black; padding: 1px;background-color:#dddddd">
                    <strong>
                        <h4 style="color: blue; margin: 0;"> 3. Personal Information</h4>
                    </strong>
                </div>

                <div class="col-12" style="border-left: solid 1px black;border-right: solid 1px black;">
                    <div class="row">
                        <div class="col-3 pl-4" style="border-right: solid 1px black;">
                            <p style="font-weight:bold;font-size:large">3.1. Sex:</span>

                            <div class="form-check pl-5">
                                <input class="form-check-input" type="checkbox" id="male" name="sex"
                                    value="male" onclick="toggleCheckbox1('male', 'female')">
                                <label class="form-check-label" for="male">Male</label>
                            </div>

                            <div class="form-check pl-5">
                                <input class="form-check-input" type="checkbox" id="female" name="sex"
                                    value="female" onclick="toggleCheckbox1('female', 'male')">
                                <label class="form-check-label" for="female">Female</label>
                            </div>

                        </div>

                        <div class="col-3 pl-4" style="border-right: solid 1px black;">
                            <p style="font-weight:bold;font-size:large">3.2. Civil Status</span>

                            <div class="form-check pl-5">
                                <input class="form-check-input" name="status" type="checkbox" value="single"
                                    id="single" onclick="toggleCheckbox(this)">
                                <label class="form-check-label" for="single">Single</label>
                            </div>

                            <div class="form-check pl-5">
                                <input class="form-check-input" name="status" type="checkbox" value="married"
                                    id="married" onclick="toggleCheckbox(this)">
                                <label class="form-check-label" for="married">Married</label>
                            </div>

                            <div class="form-check pl-5">
                                <input class="form-check-input" name="status" type="checkbox" id="widower"
                                    value="widower" onclick="toggleCheckbox(this)">
                                <label class="form-check-label" for="widower">Widower</label>
                            </div>

                            <div class="form-check pl-5">
                                <input class="form-check-input" name="status" type="checkbox" id="separated"
                                    value="separated" onclick="toggleCheckbox(this)">
                                <label class="form-check-label" for="separated">Separated</label>
                            </div>

                            <br>
                        </div>
                        <div class="col-6 pl-4">
                            <p style="font-weight:bold;font-size:large"> 3.3 Employment Status (before the
                                training)</span>

                            <div class="form-check  pl-5">
                                <input class="form-check-input" name="employement_status" type="checkbox"
                                    id="employed" value="employed"
                                    onclick="toggleCheckbox1('employed', 'unemployed')">
                                <label class="form-check-label" for="employed">Employed</label>
                            </div>

                            <div class="form-check  pl-5">
                                <input class="form-check-input" name="employement_status" type="checkbox"
                                    id="unemployed" value="unemployed"
                                    onclick="toggleCheckbox1('unemployed', 'employed')">
                                <label class="form-check-label" for="unemployed">Unemployed</label>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-12 p-5" style="border: solid 1px black; ">
                    <div class="row">
                        <div class="col p-1">
                            <p style="font-weight:bold;font-size:large">3.4 Birthdate</span>
                        </div>
                        <div class="row">
                            <div class="col p-1">
                                <select class="form-control" name="bmonth" id="bmonth"
                                    style="border: solid 1px black;">
                                    <option value="">Select Month</option>
                                    <option value="January">January</option>
                                    <option value="February">February</option>
                                    <option value="March">March</option>
                                    <option value="April">April</option>
                                    <option value="May">May</option>
                                    <option value="June">June</option>
                                    <option value="July">July</option>
                                    <option value="August">August</option>
                                    <option value="September">September</option>
                                    <option value="October">October</option>
                                    <option value="November">November</option>
                                    <option value="December">December</option>
                                </select>
                                <label
                                    class="d-flex justify-content-center align-items-center font-weight-bold text-center">Month
                                    of Birth</label>
                            </div>
                            <div class="col p-1">
                                <select class="form-control" name="bday" id="bday"
                                    style="border: solid 1px black;">
                                    <option value="">Select Day</option>
                                    @for ($i = 1; $i <= 31; $i++)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>
                                <label
                                    class="d-flex justify-content-center align-items-center font-weight-bold text-center">Day
                                    of Birth</label>
                            </div>
                            <div class="col p-1">
                                <select class="form-control" name="byear" id="byear"
                                    style="border: solid 1px black;">
                                    <option value="">Select Year</option>
                                    @for ($i = date('Y'); $i >= 1900; $i--)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>
                                <label
                                    class="d-flex justify-content-center align-items-center font-weight-bold text-center">Year
                                    of Birth</label>
                            </div>
                            <div class="col p-1">
                                <input type="number" class="form-control" name="age" id="age"
                                    placeholder="Age" style="border: solid 1px black;" readonly>
                                <label
                                    class="d-flex justify-content-center align-items-center font-weight-bold text-center">Age</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 p-5" style="border: solid 1px black; ">
                    <div class="row">
                        <div class="col p-1">
                            <p style="font-weight:bold;font-size:large">3.4 Birthplace</span>
                        </div>
                        <div class="col p-1">
                            <input type="text" class="form-control" name="bcity"
                                style="border: solid 1px black;">
                            <label
                                class="d-flex justify-content-center align-items-center font-weight-bold text-center">
                                City/Municipality
                            </label>
                        </div>

                        <div class="col p-1">
                            <input type="text" class="form-control" name="bprovince"
                                style="border: solid 1px black;">
                            <label
                                class="d-flex justify-content-center align-items-center font-weight-bold text-center">
                                Province
                            </label>
                        </div>
                        <div class="col p-1">
                            <input type="text" class="form-control" name="bregion"
                                style="border: solid 1px black;">
                            <label
                                class="d-flex justify-content-center align-items-center font-weight-bold text-center">
                                Region
                            </label>
                        </div>
                    </div>
                </div>

                <div class="col-12 p-2" style="border: solid 1px black; padding: 1px;">
                    <strong>
                        <h4 style=" margin: 0;"> 3.5 Educational Attainment Before the Training (Trainee)</h4>
                    </strong>
                </div>

                <div class="col-12">
                    <div class="row">
                        <table class="bordered-table">
                            <tbody>
                                @foreach ($educations->chunk(4) as $chunk)
                                    <!-- Chunk into groups of 4 -->
                                    <tr>
                                        @foreach ($chunk as $row)
                                            <!-- Iterate over each chunk -->
                                            <td style="text-align: left;">
                                                <div class="form-check">
                                                    <input class="form-check-input" name="educations[]"
                                                        value="{{ $row->id }}" type="checkbox"
                                                        id="a_{{ $row->id }}">
                                                    <label class="form-check-label"
                                                        for="a_{{ $row->id }}">{{ $row->title }}</label>
                                                </div>
                                            </td>
                                        @endforeach
                                        <!-- If less than 4 columns, fill the rest with empty cells -->
                                        @for ($i = count($chunk); $i < 4; $i++)
                                            <td></td>
                                        @endfor
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>


                <div class="col-12 p-2" style="border: solid 1px black; padding: 1px;background-color:#dddddd">
                    <strong>
                        <h4 style="color: blue; margin: 0;"> 4. Learner/Trainee/Student (Clients) Classification:</h4>
                    </strong>
                </div>


                <div class="col-12">
                    <div class="row">
                        <table class="bordered-table">
                            <tbody>
                                @foreach ($classifications->chunk(3) as $chunk)
                                    <!-- Chunk into groups of 4 -->
                                    <tr>
                                        @foreach ($chunk as $row)
                                            <!-- Iterate over each chunk -->
                                            <td style="text-align: left;">
                                                <div class="form-check">
                                                    <input class="form-check-input" name="classifications[]"
                                                        value="{{ $row->id }}" type="checkbox"
                                                        id="b_{{ $row->id }}">
                                                    <label class="form-check-label"
                                                        for="b_{{ $row->id }}">{{ $row->title }}</label>
                                                </div>
                                            </td>
                                        @endforeach
                                        <!-- If less than 4 columns, fill the rest with empty cells -->
                                        @for ($i = count($chunk); $i < 3; $i++)
                                            <td></td>
                                        @endfor
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-12 p-2" style="border: solid 1px black; padding: 1px;background-color:#dddddd">
                    <strong>
                        <h4 style="color: blue; margin: 0;"> 5. Type of Disability (for Persons with Disability Only):
                        </h4>
                    </strong>
                </div>

                <div class="col-12">
                    <div class="row">
                        <table class="bordered-table">
                            <tbody>
                                @foreach ($disablities->chunk(3) as $chunk)
                                    <!-- Chunk into groups of 4 -->
                                    <tr>
                                        @foreach ($chunk as $row)
                                            <!-- Iterate over each chunk -->
                                            <td style="text-align: left;">
                                                <div class="form-check">
                                                    <input class="form-check-input" name="type_disabilities[]"
                                                        value="{{ $row->id }}" type="checkbox"
                                                        id="c_{{ $row->id }}">
                                                    <label class="form-check-label"
                                                        for="c_{{ $row->id }}">{{ $row->title }}</label>
                                                </div>
                                            </td>
                                        @endforeach
                                        <!-- If less than 4 columns, fill the rest with empty cells -->
                                        @for ($i = count($chunk); $i < 3; $i++)
                                            <td></td>
                                        @endfor
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-12 p-2" style="border: solid 1px black; padding: 1px;background-color:#dddddd">
                    <strong>
                        <h4 style="color: blue; margin: 0;"> 6. Causes of Disability (for Persons with Disability
                            Only):</h4>
                    </strong>
                </div>

                <div class="col-12">
                    <div class="row">
                        <table class="bordered-table">
                            <tbody>
                                @foreach ($causes->chunk(3) as $chunk)
                                    <!-- Chunk into groups of 4 -->
                                    <tr>
                                        @foreach ($chunk as $row)
                                            <!-- Iterate over each chunk -->
                                            <td style="text-align: left;">
                                                <div class="form-check">
                                                    <input class="form-check-input" name="cause_disabilities[]"
                                                        value="{{ $row->id }}" type="checkbox"
                                                        id="d_{{ $row->id }}">
                                                    <label class="form-check-label"
                                                        for="d_{{ $row->id }}">{{ $row->title }}</label>
                                                </div>
                                            </td>
                                        @endforeach
                                        <!-- If less than 4 columns, fill the rest with empty cells -->
                                        @for ($i = count($chunk); $i < 3; $i++)
                                            <td></td>
                                        @endfor
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-12" style="border: solid 1px black;">
                    <div class="row">
                        <div class="col-3 pl-2 pt-2" style="border-right: solid 1px black;">
                            <strong>
                                <h4 style="color: blue; margin: 0;">7. Taken NCAE/YP4SC Before?</h4>
                            </strong>
                        </div>

                        <div class="col-12 col-md-3 pl-md-4" style="border-right: solid 1px black;">
                            <div class="form-check pt-3">
                                <input class="form-check-input" type="radio" name="ncae" id="ncae-yes"
                                    value="yes">
                                <label class="form-check-label" for="ncae-yes">Yes</label>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 pl-md-4">
                            <div class="form-check pt-3">
                                <input class="form-check-input" type="radio" name="ncae" id="ncae-no"
                                    value="no">
                                <label class="form-check-label" for="ncae-no">No</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12" style="border: solid 1px black;">
                    <div class="row">
                        <div class="col-6 pl-5 pt-2">
                            <div>
                                <h4>Where: <input type="text" name="where"
                                        style="width: 500px;border:none;border-bottom: solid 1px black;background-color:transparent">
                                </h4>
                            </div>
                            <div>
                                <h4>When: <input type="text" name="when"
                                        style="width: 500px;border:none;border-bottom: solid 1px black;background-color:transparent">
                                </h4>
                            </div>
                        </div>
                        <div class="col-6 p-1">
                        </div>
                    </div>
                </div>

                <div class="col-12 p-2" style="border: solid 1px black; padding: 1px;background-color:#dddddd">
                    <strong>
                        <h4 style="color: blue; margin: 0;"> 8. Name of Course/Qualification <input type="text"
                                name="qualification" value="{{ $courses->title }}"
                                style="width: 500px;border:none;background-color:transparent"></h4>
                    </strong>
                </div>

                <div class="col-12 p-2" style="border: solid 1px black; padding: 1px;background-color:#dddddd">
                    <strong>
                        <h4 style="color: blue; margin: 0;"> 9. If Scholar, What Type of Scholarship Package (TWSP,
                            PESDA, STEP)? <input name="type_scholar" value="{{ $scholar_type }}" readonly
                                type="text" style="width: 500px;border:none;background-color:transparent"></h4>
                    </strong>
                </div>

                <div class="col-12 p-2" style="border: solid 1px black; padding: 1px;background-color:#dddddd">
                    <strong>
                        <h4 style="color: blue; margin: 0;"> 10. Privacy Disclaimer <input name="disclaimer" disabled
                                type="text" style="width: 500px;border:none;background-color:transparent"></h4>
                    </strong>
                </div>

                <div class="col-12 p-2" style="border: solid 1px black; padding: 1px;background-color:#dddddd">
                    <span>I hereby allow TESDA to use/post my contact details, name, email, cellphone/landline nos. and
                        other information I provided which may be used for processing of my scholarship application, for
                        employment opportunities and other purposes.</span>

                    <div class="col-12 col-md-3 pl-md-4">
                        <div class="form-check pt-3">
                            <input class="form-check-input" type="checkbox" name="rdy" id="yes"
                                value="yes" onclick="toggleCheckbox1('yes', 'no')">
                            <label class="form-check-label" for="yes"><strong>Agree</strong></label>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 pl-md-4">
                        <div class="form-check pt-1">
                            <input class="form-check-input" type="checkbox" name="rdy" id="no"
                                value="no" onclick="toggleCheckbox1('no', 'yes')">
                            <label class="form-check-label" for="no"><strong>Disagree</strong></label>
                        </div>
                    </div>
                </div>

                <div class="col-12 p-2" style="border: solid 1px black; padding: 1px;background-color:#dddddd">
                    <strong>
                        <h4 style="color: blue; margin: 0;"> 11. Applicant’s Signature <input name="disclaimer"
                                disabled type="text" style="width: 500px;border:none;background-color:transparent">
                        </h4>
                    </strong>
                </div>

                <div class="col-12 p-2" style="border: solid 1px black; padding: 1px;background-color:#dddddd">
                    <br>
                    <div class="header-text" style="font-size:large;">
                        This is to certify that the information stated above is true and correct.
                    </div>
                    <br>

                    <div class="container">
                        <div class="signature-box">
                            <!-- <div class="signature-line"></div> -->
                            <center>
                                <div id="sig" style="height:100px;width:380px;"></div>
                            </center>
                            <br>

                            <textarea id="signature" name="signed" style="display: none"></textarea>
                            <label style="font-size: large;">APPLICANT’S SIGNATURE OVER PRINTED NAME</label>
                            <td>
                                <center>
                                    <button id="clear" class="btn btn-danger">Clear</button>
                                </center>
                            </td>
                        </div>

                        <div class="date-box">
                            <div class="director-line"></div>
                            <label style="font-size: large;">DATE ACCOMPLISHED</label>
                        </div>

                        <div class="picture-box">
                            1x1 picture<br>taken within<br>the last 6 months
                        </div>
                    </div>

                    <div class="noted-by">
                        Noted by:
                    </div>

                    <div class="container">

                        <div class="director-box">
                            <div class="director-line"></div>
                            <label style="font-size: large;">PROVINCIAL/DISTRICT DIRECTOR<br>(Signature Over Printed
                                Name)</label>
                        </div>

                        <div class="director-box">
                            <div class="director-line"></div>
                            <label style="font-size: large;">Date Received</label>
                        </div>
                        <div class="flex-column">
                            <div class="thumb-box">
                                Right Thumbmark
                            </div>
                        </div>
                    </div>


                </div>

            </div>
            <br>
            <button type="submit" class="btn bg-blue-400 float-right">Save</button>
    </form>
    <br>
    </div>
    </div>
</x-app-layout>
<script>
    var sig = $('#sig').signature({
        syncField: '#signature',
        syncFormat: 'PNG'
    });
    $('#clear').click(function(e) {
        e.preventDefault();
        sig.signature('clear');
        $('#signature').val(''); // Clear the value of the textarea
    });

    function toggleCheckbox1(currentId, otherId) {
        const currentCheckbox = document.getElementById(currentId);
        const otherCheckbox = document.getElementById(otherId);

        if (currentCheckbox.checked) {
            otherCheckbox.checked = false; // Uncheck the other checkbox
        }
    }

    function toggleCheckbox(clicked) {
        // Uncheck all checkboxes with name="status"
        const checkboxes = document.querySelectorAll('input[name="status"]');
        checkboxes.forEach(checkbox => {
            if (checkbox !== clicked) checkbox.checked = false;
        });
    }

    document.addEventListener('DOMContentLoaded', function() {
        const today = new Date().toISOString().split('T')[0];
        document.getElementById('entry_date').value = today;
    });

    function calculateAge() {
        const month = document.getElementById('bmonth').value;
        const day = parseInt(document.getElementById('bday').value);
        const year = parseInt(document.getElementById('byear').value);

        // Convert month name to month number (0-11)
        const monthNumber = new Date(Date.parse(month + " 1, 2020")).getMonth();

        if (monthNumber >= 0 && day > 0 && year) {
            const today = new Date();
            let age = today.getFullYear() - year;

            // Adjust age if the birthday hasn't occurred yet this year
            const birthday = new Date(year, monthNumber, day);
            if (today < birthday) {
                age--;
            }

            document.getElementById('age').value = age;
        } else {
            document.getElementById('age').value = ''; // Clear age if inputs are invalid
        }
    }

    // Attach input event listeners to trigger age calculation
    document.getElementById('bmonth').addEventListener('input', calculateAge);
    document.getElementById('bday').addEventListener('input', calculateAge);
    document.getElementById('byear').addEventListener('input', calculateAge);
</script>
