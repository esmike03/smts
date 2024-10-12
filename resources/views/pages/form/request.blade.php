<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tesda Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 100%; /* Full width for the container */
        }
        table {
            width: 100%; /* Full width for the table */
            border-collapse: collapse; /* Collapse borders */
        }
        .column1 {
            width: 20%; /* Each column takes half the width */
            padding-left: 25px;
            padding-right: 25px;
            border: 1px solid black; /* Solid black border */
        }

        .column2 {
            width: 60%; /* Each column takes half the width */
            border: 1px solid black; /* Solid black border */
        }

        .column3 {
            width: 20%; /* Each column takes half the width */
            border: 1px solid black; /* Solid black border */
        }

        .column4 {
            width: 70%; /* Each column takes half the width */
        }

        .column5 {
            width: 30%; /* Each column takes half the width */
        }

        .row {
            display: flex;
            flex-wrap: wrap;
        }

        .table1 {
            width: 100%; /* Full width for the table */
            border-collapse: collapse; /* Collapse borders */
            border-left: solid 1px;
            border-right: solid 1px;
            border-bottom: solid 1px;
        }
  
        .form-check-input {
    display: inline-block;
    margin: 0; /* Reset default margin */
}

            .uli-box {
            width: 18px; 
            height: 30px; 
            font-size: 18px;
            padding: 0;
            margin: 0;
            outline: none; 
            /* Add display: inline-block to remove the default space  */
            display: inline-block;
            border: solid 1px; 
            border-right: none;
            }

    </style>
</head>
<body>
    <div class="container">
        <table>
            <tr>
                <td class="column1">
                <center>
                <img class="img-radius" src="{{ asset('assets/images/tesda.png') }}" alt="User-Profile-Image" style="width: 100%; height:8%">
                </center>
                </td>
                <td class="column2">
                    <div class="row">
                        <div class="text-top">
                            <center>
                            <strong>
                                <h4 style="color: blue; margin: 0;">Technical Education and Skills Development Authority</h4>
                                <h6 style="color: blue; margin: 0;">Pangasiwaan sa Edukasyong Teknikal at Pagpapaunlad ng Kasanayan</h6>
                            </strong>
                            </center>
                        </div>
                    </div>
                </td>
                <td class="column3">
                    <div class="row">
                        <div class="text-bottom">
                            <center>
                            <strong><br><br>
                                <h4 style="color: black; margin: 0;">MIS 03 – 01 <br>(ver. 2017)</h4>
                            </strong>
                            </center>
                        </div>
                    </div>
                </td>
            </tr>
        </table>
        <table class="table1">
            <tr>
                <td >
                    <center>
                        <strong style="font-size: x-large;">
                            Registration Form
                        </strong>
                   </center>
                </td>
            </tr>
        </table>

        <table class="table1" >
            <tr>
                <td class="column4">
                    <center>
                        <strong style="color:blue;font-size: xx-large;">
                            LEARNERS PROFILE FORM
                        </strong>
                   </center>
                </td>

                <td class="column5" style="padding:5px;">
                    <div style="padding: 35px;border:solid 1px">
                        <center>
                        <strong>
                            <span style="padding-left: 10px;">I.D. Picture</span><br>
                            (1 x 1)
                        </strong>
                        </center>
                    </div>
                </td>               
            </tr>
        </table>

        <table class="table1">
            <tr>
                <td style="background-color:#dddddd;padding:5px;">
                    <strong style="font-size:15px;color:blue;">
                        1. Web-Based Information System Auto Generated
                    </strong>
                </td>
            </tr>
        </table>

        <table class="table1" >
            <tr>
                <td class="column6" style="width:8%;">
                    <span style="padding-left:20px;">1.1.</span>
                </td>
                
                <td class="column7" style="padding:3px;font-size:11px;font-weight:bold;width:20%;">
                    Unique Learner Identifier<br> (ULI) Number:
                </td>

                <td class="column7" style="padding-top:10px;">
                    <input type="text" class="uli-box"><input type="text" class="uli-box"><input type="text" class="uli-box"><input type="text" class="uli-box"><input type="text" class="uli-box"><input type="text" class="uli-box"><input type="text" class="uli-box"><input type="text" class="uli-box"><input type="text" class="uli-box"><input type="text" class="uli-box"><input type="text" class="uli-box" value="-" style="text-align: center;"><input type="text" class="uli-box"><input type="text" class="uli-box"><input type="text" class="uli-box" style="border-right: solid 1px;">
                </td>

                <td class="column6" style="padding-left:20px;width:16%;font-size:12px;font-weight:bold;">
                    <span>1.2.   Entry Date:</span>
                </td>
                <td class="column6" style="width:8%;">
                <input type="date" name="entry_date" class="form-control" style="width:100px;height:15px;text-align:center;font-size:10px;" value="{{ date('m/d/Y', strtotime($students->user->created_at)) }}">
                </td>
            </tr>
        </table>

        <table class="table1">
            <tr>
                <td style="background-color:#dddddd;padding:2px;">
                    <strong style="font-size:15px;color:blue;">
                    2. Manpower Profile
                    </strong>
                </td>
            </tr>
        </table>

        <table class="table1">
            <tr>
                <td class="column7" style="width:30px;">
                    <span style="font-size: 11px;">2.1. </span>
                </td>
                
                <td class="column7" style="font-size:11px;font-weight:bold;width:30%;">
                        Name
                </td>
           
                <td style="width: 20px;">
                <input type="text" class="form-control" name="last_name" value="{{ $students->user->last_name }}" required style="border:solid 1px;height:16px;width:160px;font-size:10px;text-align: center;">
                    <center><span style="font-size: 9px;padding:0px;"><strong>Last Name, Extension Name (e.g:Jr.)</strong></span></center>
                </td>

                <td style="width: 20px;">
                  <input type="text" class="form-control" name="first_name" value="{{ $students->user->first_name }}" required style="border:solid 1px;height:16px;width:160px;font-size:10px;text-align: center;">
                    <center><span style="font-size: 9px;padding:0px;"><strong>First</strong></span></center>
                </td>
                <td style="width: 20px;">
                      <input type="text" class="form-control" name="middle_name" value="{{ $students->user->middle_name }}" required style="border:solid 1px;height:16px;width:160px;font-size:10px;text-align: center;">
                      <center><span style="font-size: 9px;padding:0px;"><strong>Middle</strong></span></center>
                </td>
            </tr>

            <tr>
                <td class="column7" style="width:30px;">
                    <span style="font-size: 11px;">2.2. </span>
                </td>
                
                <td class="column7" style="font-size:11px;font-weight:bold;width:30%;">
                Complete <br>Permanent Mailing <br> Address:
                </td>

                <td style="width: 20px;">
                <input type="text" class="form-control" name="city" value="{{ $students->address->city }}" required style="border:solid 1px;height:16px;width:160px;font-size:10px;text-align: center;">
                    <center><span style="font-size: 9px;padding:0px;"><strong>City/Municipality</strong></span></center>
                </td>

                <td style="width: 20px;">
                  <input type="text" class="form-control" name="province" value="{{ $students->address->province }}" required style="border:solid 1px;height:16px;width:160px;font-size:10px;text-align: center;">
                    <center><span style="font-size: 9px;padding:0px;"><strong>Province</strong></span></center>
                </td>
                <td style="width: 20px;">
                      <input type="text" class="form-control" name="region" value="{{ $students->address->region }}" required style="border:solid 1px;height:16px;width:160px;font-size:10px;text-align: center;">
                      <center><span style="font-size: 9px;padding:0px;"><strong>Region</strong></span></center>
                </td>
            </tr>

            <tr>
                <td class="column7" style="width:30px;">
                </td>
                
                <td class="column7" style="font-size:11px;font-weight:bold;width:30%;">
                </td>

                <td style="width: 20px;">
                <input type="text" class="form-control" name="street" value="{{ $students->address->street }}" required style="border:solid 1px;height:16px;width:160px;font-size:10px;text-align: center;">
                    <center><span style="font-size: 9px;padding:0px;"><strong>Number, Street</strong></span></center>
                </td>

                <td style="width: 20px;">
                  <input type="text" class="form-control" name="barangay" value="{{ $students->address->barangay }}" required style="border:solid 1px;height:16px;width:160px;font-size:10px;text-align: center;">
                    <center><span style="font-size: 9px;padding:0px;"><strong>Barangay</strong></span></center>
                </td>
                <td style="width: 20px;">
                      <input type="text" class="form-control" name="district" value="{{ $students->address->district }}" required style="border:solid 1px;height:16px;width:160px;font-size:10px;text-align: center;">
                      <center><span style="font-size: 9px;padding:0px;"><strong>District</strong></span></center>
                </td>
            </tr>

            <tr>
                <td class="column7" style="width:30px;">
                </td>
                
                <td class="column7" style="font-size:11px;font-weight:bold;width:30%;">
                </td>

                <td style="width: 20px;">
                <input type="text" class="form-control" name="email" value="{{ $students->user->email }}" required style="border:solid 1px;height:16px;width:160px;font-size:10px;text-align: center;">
                    <center><span style="font-size: 9px;padding:0px;"><strong>Email Address/Facebook Account:</strong></span></center>
                </td>

                <td style="width: 20px;">
                  <input type="text" class="form-control" name="phone" value="{{ $students->user->phone }}" required style="border:solid 1px;height:16px;width:160px;font-size:10px;text-align: center;">
                    <center><span style="font-size: 9px;padding:0px;"><strong> Contact No:</strong></span></center>
                </td>
                <td style="width: 20px;">
                      <input type="text" class="form-control" name="nationality" value="{{ $students->nationality }}" required style="border:solid 1px;height:16px;width:160px;font-size:10px;text-align: center;">
                      <center><span style="font-size: 9px;padding:0px;"><strong>Nationality</strong></span></center>
                </td>
            </tr>
        </table>

        <table class="table1">
            <tr>
                <td style="background-color:#dddddd;padding:2px;">
                    <strong style="font-size:15px;color:blue;">
                    3. Personal Information
                    </strong>
                </td>
            </tr>
        </table>

        <table class="table1">
            <tr>
                <td class="column6" style="width:8%;border-right:solid 1px;">

                    <span style="padding-left:25px; font-size: 9px; font-weight:bold;">3.1. Sex</span>

                    <div style="display: flex; align-items: center; padding-left: 44px;padding-top:10px;">
                        <input class="form-check-input" type="checkbox" id="male" name="sex" value="male" onclick="toggleCheckbox1('male', 'female')"   {{ $students->sex == 'male' ? 'checked' : '' }} style="font-size: 15px; padding: 0; line-height: .10;">
                        <span style="font-size: 9px; padding: 0; line-height:.5;">Male</span> <!-- Adjusted line-height -->
                    </div>

                    <div style="display: flex; align-items: center; padding-left: 44px;">
                        <input class="form-check-input" type="checkbox" id="female" name="sex" value="female" onclick="toggleCheckbox1('female', 'male')"   {{ $students->sex == 'female' ? 'checked' : '' }} style="font-size: 15px; padding: 0; line-height: .10;">
                        <span style="font-size: 9px; padding: 0; line-height: .5;">Female</span> <!-- Adjusted line-height -->
                    </div>
                <br>
                 
                </td>

                <td class="column6" style="width:8%;border-right:solid 1px;">

                    <span style="padding-left:25px; font-size: 9px; font-weight:bold;">3.2.  Civil Status</span>

                    <div style="display: flex; align-items: center; padding-left: 44px;padding-top:10px;">
                        <input class="form-check-input" name="status" type="checkbox" value="single" id="single" {{ $students->status == 'single' ? 'checked' : '' }} onclick="toggleCheckbox(this)" style="font-size: 15px; padding: 0; line-height: .10;">
                        <span style="font-size: 9px; padding: 0; line-height:.5;">Single</span> <!-- Adjusted line-height -->
                    </div>

                    <div style="display: flex; align-items: center; padding-left: 44px;">
                        <input class="form-check-input"name="status" type="checkbox" value="married" id="married" {{ $students->status == 'married' ? 'checked' : '' }} onclick="toggleCheckbox(this)" style="font-size: 15px; padding: 0; line-height: .10;">
                        <span style="font-size: 9px; padding: 0; line-height: .5;">Married</span> <!-- Adjusted line-height -->
                    </div>

                    <div style="display: flex; align-items: center; padding-left: 44px;">
                        <input class="form-check-input"name="status" type="checkbox" value="widower" id="widower" {{ $students->status == 'widower' ? 'checked' : '' }} onclick="toggleCheckbox(this)" style="font-size: 15px; padding: 0; line-height: .10;">
                        <span style="font-size: 9px; padding: 0; line-height: .5;">Widower</span> <!-- Adjusted line-height -->
                    </div>

                    <div style="display: flex; align-items: center; padding-left: 44px;">
                        <input class="form-check-input"name="status" type="checkbox" value="separated" id="separated" {{ $students->status == 'separated' ? 'checked' : '' }} onclick="toggleCheckbox(this)" style="font-size: 15px; padding: 0; line-height: .10;">
                        <span style="font-size: 9px; padding: 0; line-height: .5;">Separated</span> <!-- Adjusted line-height -->
                    </div>
                 
                </td>

                <td class="column6" style="width:8%;border-right:solid 1px;">
                    <span style="padding-left:25px; font-size: 9px; font-weight:bold;"> 3.3   Employment  Status (before the training)</span>
                    <div style="display: flex; align-items: center; padding-left: 44px;padding-top:10px;">
                        <input class="form-check-input" name="employement_status" type="checkbox" id="employed" value="employed" {{ $students->employement_status == 'employed' ? 'checked' : '' }} onclick="toggleCheckbox1('employed', 'unemployed')" style="font-size: 15px; padding: 0; line-height: .10;">
                        <span style="font-size: 9px; padding: 0; line-height:.5;">Employed</span> <!-- Adjusted line-height -->
                    </div>

                    <div style="display: flex; align-items: center; padding-left: 44px;">
                        <input class="form-check-input" name="employement_status" type="checkbox" id="unemployed" value="unemployed" {{ $students->employement_status == 'unemployed' ? 'checked' : '' }} onclick="toggleCheckbox1('unemployed', 'employed')" style="font-size: 15px; padding: 0; line-height: .10;">
                        <span style="font-size: 9px; padding: 0; line-height: .5;">Unemployed</span> <!-- Adjusted line-height -->
                    </div>
                    <br>
                  
                </td>


            </tr>
        </table>

        <table class="table1">
            <tr>
                <td class="column7">
                    <span style="font-size: 11px;">3.4. </span>
                </td>
                
                <td class="column7" style="font-size:11px;font-weight:bold;width:10%">
                    Birthdate
                </td>
           
                <td style="padding: 5px;">
                <input type="text" class="form-control" name="bmonth" value="{{ $students->bmonth }}" required style="border:solid 1px;height:16px;width:130px;font-size:10px;text-align: center;">
                    <center><span style="font-size: 9px;padding:0px;"><strong>Month of Birth</strong></span></center>
                </td>

                <td>
                  <input type="text" class="form-control" name="bday" value="{{ $students->bday }}" required style="border:solid 1px;height:16px;width:130px;font-size:10px;text-align: center;">
                    <center><span style="font-size: 9px;padding:0px;"><strong>Day of Birth</strong></span></center>
                </td>
                <td>
                      <input type="text" class="form-control" name="byear" value="{{ $students->byear }}" required style="border:solid 1px;height:16px;width:130px;font-size:10px;text-align: center;">
                      <center><span style="font-size: 9px;padding:0px;"><strong>Year of Birth</strong></span></center>
                </td>

                <td>
                      <input type="text" class="form-control" name="age" value="{{ $students->age }}" required style="border:solid 1px;height:16px;width:130px;font-size:10px;text-align: center;">
                      <center><span style="font-size: 9px;padding:0px;"><strong>Age</strong></span></center>
                </td>
            </tr>
        </table>

        <table class="table1">
            <tr>
                <td class="column7">
                    <span style="font-size: 11px;">3.4. </span>
                </td>
                
                <td class="column7" style="font-size:11px;font-weight:bold;">
                Birthplace
                </td>
           
                <td style="padding: 2px;">
                <input type="text" class="form-control" name="bcity" value="{{ $students->bcity }}"  required style="border:solid 1px;height:16px;width:130px;font-size:10px;text-align: center;">
                    <center><span style="font-size: 9px;padding:0px;"><strong>City/Municipality</strong></span></center>
                </td>

                <td>
                  <input type="text" class="form-control" name="bprovince" value="{{ $students->bprovince }}"  required style="border:solid 1px;height:16px;width:130px;font-size:10px;text-align: center;">
                    <center><span style="font-size: 9px;padding:0px;"><strong>Province</strong></span></center>
                </td>
                <td>
                      <input type="text" class="form-control" name="bregion" value="{{ $students->bregion }}"  required style="border:solid 1px;height:16px;width:130px;font-size:10px;text-align: center;">
                      <center><span style="font-size: 9px;padding:0px;"><strong>Region</strong></span></center>
                </td>
            </tr>
        </table>

        <table class="table1">
            <tr>
                <td style="padding:5px;">
                    <strong style="font-size:15px;color:black;">
                    3.5  Educational Attainment Before the Training (Trainee)
                    </strong>
                </td>
            </tr>
        </table>

            <table class="bordered-table">
                <tbody>
                    @foreach($educations->chunk(4) as $chunk) <!-- Chunk into groups of 4 -->
                    <tr>
                        @foreach($chunk as $row) <!-- Iterate over each chunk -->
                        <td style="text-align: left;border:solid 1px;padding:5px;border-top:none;">
                                <div class="form-check">
                                <input class="form-check-input" name="educations[]" value="{{ $row->id }}" type="checkbox" id="a_{{ $row->id }}" {{ in_array($row->id, $attainments) ? 'checked' : '' }} style="font-size: 15px; padding: 0; line-height: .10;">
                                <span class="form-check-label" for="a_{{ $row->id }}" style="font-size:9px;" >{{ $row->title }}</span>
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

        <table class="table1">
            <tr>
            <td style="background-color:#dddddd;padding:5px;">
                    <strong style="font-size:15px;color:blue;">
                    4. Learner/Trainee/Student (Clients)    Classification:
                    </strong>
                </td>
            </tr>
        </table>

        <table class="bordered-table">
            <tbody>
                @foreach($classifications->chunk(3) as $chunk) <!-- Chunk into groups of 4 -->
                <tr>
                    @foreach($chunk as $row) <!-- Iterate over each chunk -->
                    <td style="text-align: left;border:solid 1px;padding:5px;border-top:none;">
                            <div class="form-check">
                            <input class="form-check-input" name="classifications[]" value="{{ $row->id }}" type="checkbox" id="b_{{ $row->id }}" {{ in_array($row->id, $learners) ? 'checked' : '' }} style="font-size: 15px; padding: 0; line-height: .10;">
                            <label class="form-check-label" for="b_{{ $row->id }}" style="font-size:9px;" >{{ $row->title }}</label>
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

        <table class="table1">
            <tr>
            <td style="background-color:#dddddd;padding:5px;border-top:solid 1px">
                    <strong style="font-size:15px;color:blue;">
                    5. Type of Disability (for Persons with Disability Only):
                    </strong>
                </td>
            </tr>
        </table>

        <table class="bordered-table">
            <tbody>
                @foreach($disablities->chunk(3) as $chunk) <!-- Chunk into groups of 4 -->
                <tr>
                    @foreach($chunk as $row) <!-- Iterate over each chunk -->
                    <td style="text-align: left;border:solid 1px;padding:5px;border-top:none;">
                            <div class="form-check">
                            <input class="form-check-input" name="type_disabilities[]" value="{{ $row->id }}" type="checkbox" id="c_{{ $row->id }}" style="font-size: 15px; padding: 0; line-height: .10;" {{ in_array($row->id, $types) ? 'checked' : '' }}>
                            <label class="form-check-label" for="c_{{ $row->id }}" style="font-size:9px;">{{ $row->title }}</label>
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

        
        <table class="table1">
            <tr>
            <td style="background-color:#dddddd;padding:5px;border-top:solid 1px">
                    <strong style="font-size:15px;color:blue;">
                    6. Causes of Disability (for Persons with Disability Only):
                    </strong>
                </td>
            </tr>
        </table>

        <table class="bordered-table">
            <tbody>
                @foreach($causes->chunk(3) as $chunk) <!-- Chunk into groups of 4 -->
                <tr>
                    @foreach($chunk as $row) <!-- Iterate over each chunk -->
                    <td style="text-align: left;border:solid 1px;padding:5px;border-top:none;">
                            <div class="form-check">
                            <input class="form-check-input" name="cause_disabilities[]" value="{{ $row->id }}" type="checkbox" id="d_{{ $row->id }}" style="font-size: 15px; padding: 0; line-height: .10;" {{ in_array($row->id, $user_causes) ? 'checked' : '' }}>
                            <label class="form-check-label" for="d_{{ $row->id }}" style="font-size:9px;" >{{ $row->title }}</label>
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

        <table class="table1">
            <tr>
                <td class="column6" style="width:8%;border-right:solid 1px;">

                    <span style="padding-left:5px; font-size: 15px; font-weight:bold;color:blue;">7. Taken NCAE/YP4SC Before?</span>
                </td>

                <td class="column6" style="width:8%;border-right:solid 1px;">

                    <div style="display: flex; align-items: center; padding-left: 44px;padding-top:10px;">
                        <input class="form-check-input" name="ncae" type="checkbox" value="yes" id="yes" onclick="toggleCheckbox(this)" style="font-size: 15px; padding: 0; line-height: .10;"  {{ $students->ncae == 'yes' ? 'checked' : '' }}>
                        <span style="font-size: 9px; padding: 0; line-height:.5;">Yes</span> <!-- Adjusted line-height -->
                    </div>

                </td>

                <td class="column6" style="width:8%;border-right:solid 1px;">

                    <div style="display: flex; align-items: center; padding-left: 44px;padding-top:10px;">
                        <input class="form-check-input" name="ncae" type="checkbox" value="no" id="no" onclick="toggleCheckbox(this)" style="font-size: 15px; padding: 0; line-height: .10;" {{ $students->ncae == 'no' ? 'checked' : '' }}>
                        <span style="font-size: 9px; padding: 0; line-height:.5;">No</span> <!-- Adjusted line-height -->
                    </div>

                </td>


            </tr>
        </table>
        
        <table class="table1" >
            <tr>
                <td class="column6" style="width:2%;">
                    <span style="padding-left:20px;"></span>
                </td>
                
                <td class="column7" style="font-size:11px;font-weight:normal;">
                    Where: <input type="text" class="asd" value="{{ $students->where }}" style="width: 150px;height: 15px;border:none;border-bottom: solid 1px black;background-color:transparent">
                </td>
            </tr>

            <tr>
                <td class="column6" style="width:2%;">
                    <span style="padding-left:20px;"></span>
                </td>
                
                <td class="column7" style="font-size:11px;font-weight:normal;">
                When: <input type="text" value="{{ $students->when }}" class="asd" style="width: 150px;height: 15px;border:none;border-bottom: solid 1px black;background-color:transparent">
                </td>
            </tr>
        </table>

        <table class="table1">
            <tr>
                <td>
                    <strong style="font-size:15px;color:blue;">
                    8. Name of Course/Qualification <input type="text" class="asd" value="{{ $students->qualification }}" style="color:black;width: 150px;height: 15px;border:none;background-color:transparent;font-size:small;font-weight:normal;">
                    </strong>
                </td>
            </tr>
        </table>

        <table class="table1">
            <tr>
                <td>
                    <strong style="font-size:15px;color:blue;">
                    9. If Scholar, What Type of Scholarship Package (TWSP, PESDA, STEP)? <input type="text" class="asd" value="{{ $students->type_scholar }}" style="color:black;width: 150px;height: 15px;border:none;background-color:transparent;font-size:small;font-weight:normal;">
                    </strong>
                </td>
            </tr>
        </table>

        <table class="table1">
            <tr>
                <td>
                    <strong style="font-size:15px;color:blue;">
                    10. Privacy Disclaimer <input type="text" value="{{ $students->disclaimer }}" class="asd" style="width: 150px;color:black;height: 15px;border:none;background-color:transparent">
                    </strong>
                </td>
            </tr>
        </table>

        <table class="table1">
            <tr>
                <td style="padding:2px;">
                    <span style="font-size: 12px;padding:2px;">I hereby allow TESDA to use/post my contact details, name, email, cellphone/landline nos. and other information I provided which may be used for processing of my scholarship application, for employment opportunities and other purposes.</span>
                        
                    <div style="display: flex; align-items: center; padding-left: 44px;padding-top:10px;">
                        <input class="form-check-input" name="ncae" type="checkbox" value="yes" id="yes" checked onclick="toggleCheckbox(this)" style="font-size: 15px; padding: 0; line-height: .10;">
                        <span style="font-size: 12px; padding: 0; line-height:.5;font-weight: bold;">Yes</span> <!-- Adjusted line-height -->
                    </div>

                    <div style="display: flex; align-items: center; padding-left: 44px;padding-top:10px;">
                        <input class="form-check-input" name="ncae" type="checkbox" value="yes" id="yes"  onclick="toggleCheckbox(this)" style="font-size: 15px; padding: 0; line-height: .10;">
                        <span style="font-size: 12px; padding: 0; line-height:.5;font-weight: bold;">No</span> <!-- Adjusted line-height -->
                    </div>

                </td>
            </tr>
        </table>

        <table class="table1">
            <tr>
                <td style="padding:5px;border-right:solid 1px;">
                    <strong style="font-size:15px;color:blue;">
                    11. Applicant’s Signature <input type="text" class="asd" style="width: 150px;height: 20px;border:none;background-color:transparent">
                    </strong>
                </td>
            </tr>
        </table>
        
        <table class="table1" style="border-bottom:none;">
            <tr>
                    <td style="width: 100%;padding:8px;"><center>This is to certify that the information stated above is true and correct.</center></td>
            </tr>
        </table>

        <table class="table1" style="border-top:none;">
            <tr>
            <td style="width: 50%;">
    <div style="text-align: center;">
        <!-- Signature image at the top -->
        <img src="{{ asset('uploads/profile/' . $students->signature) }}" style="height: 30px; width: auto;">

        <!-- Text with border matching text width -->
        <span style="color:black; font-size: 10px; font-weight: bold; border-top: solid 1px; padding-top: 5px; display: inline-block; margin-top: 10px;">
            APPLICANT’S SIGNATURE OVER PRINTED NAME
        </span>
    </div>
</td>



                <td style="width: 20%;padding-top:45px;">
                    <center>
                    <span style="color:black;font-size: 12px;font-weight:bold;border-top:solid 1px;padding-top:5px;">
                            DATE ACCOMPLISHED
                        </span>
                   </center>
                </td>

               
                <td class="column5" style="padding:5px;">
                    <div style="padding: 15px;border:solid 1px;width:80px;height:50px;">
                        <center>
                        <strong>
                            <span style="padding-left: 10px;font-size:10px;">1x1 picture taken within <br> the last 6 <br> months</span>
                        </strong>
                        </center>
                    </div>
                </td> 
                
                
            </tr>
            <tr>
                <td >
                    <span style="font-size:13px;font-weight:bold;padding-left:10px;">Noted by:</span>
                </td>
                <td>

                </td>
                <td></td>
            </tr>
            <tr>
                
                <td style="width: 50%;">
                    <center>
                        <span style="color:black;font-size: 12px;font-weight:bold;padding-top:5px;border-top:solid 1px;">
                            PROVINCIAL/DISTRICT DIRECTOR                        
                        </span>
                        <br> <span style="font-size: 12px;font-weight:bold;">(Signature Over Printed Name)</span>
                   </center>
                </td>

                <td style="width: 20%;">
                    <center>
                        <span style="color:black;font-size: 12px;font-weight:bold">
                            Date Received<br> &nbsp;     
                        </span>
                   </center>
                </td>

                <td class="column5" style="padding:5px;">
                    <div style="padding: 15px;border:solid 1px;width:80px;height:50px;">
                        <center>
                        <strong>
                        <span style="padding-left: 10px;"></span><br>
                        </strong>
                        </center>
                    </div>
                    <span style="font-size: 12px;"><strong>Right Thumbmark</strong></span>
                </td> 
                
                
            </tr>
        </table>
          

    </div>
</body>
</html>
