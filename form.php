<?php
session_start();

if(isset($_SESSION['templateUrl']))
{
 $Url = $_SESSION['templateUrl'];
//  echo $Url;
}
else
   echo 'NO';

   if (!isset($_SESSION["username"])) {
    header("location: login.php");
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Resume Builder</title>
</head>

<body>

    <div class="container">
        <h3 class="text-center fw-bold">Resume Builder</h3>
        <div class="personalDetails">
            <div style="text-align:right">
                <a href="logout.php">Logout</a>
            </div>
            <form class="row g-3 needs-validation" action="<?php  echo $Url ?>" method="POST"
                enctype="multipart/form-data" novalidate>
                <div class="col">
                    <div class="col mb-1">
                        <h3><u>Personal Details</u></h3>
                        <input type="hidden" name="token" value="HGsZOXpfNC">
                        <div class="row d-flex">
                            <div class="col-md-3 mb-3">
                                <label for="firstname" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="firstname" name="first_name" value=""
                                    required autocomplete="off">
                                <div class="valid-feedback">
                                    Verified
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="lastname" class="form-label">Last name</label>
                                <input type="text" class="form-control" id="lastname" name="last_name" value=""
                                    required autocomplete="off">
                                <div class="valid-feedback">
                                    Verified
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="dob" class="form-label">Date Of Birth</label>
                                <input type="text" class="form-control" id="dob" name="dob" required autocomplete="off">
                                <div class="invalid-feedback">
                                    Please provide a Date of Birth.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" id="email" name="email" required autocomplete="off">
                                <div class="invalid-feedback">
                                    Please provide a Email.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="gender" class="form-label">Gender</label>
                                <input type="text" class="form-control" id="gender" name="gender" required autocomplete="off">
                                <div class="invalid-feedback">
                                    Please provide a Gender.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="contactno" class="form-label">Contact No</label>
                                <input type="text" class="form-control" id="contactno" name="contactno" required autocomplete="off"> 
                                <div class="invalid-feedback">
                                    Please provide a Contact No.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="address" class="form-label">Address</label>
                                <textarea class="form-control" id="address" name="address" placeholder="Address"
                                    required autocomplete="off"></textarea>
                                <div class="invalid-feedback">
                                    Please enter a address.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="bloodgroup" class="form-label">Blood Group</label>
                                <input type="text" class="form-control" name="bloodgroup" id="bloodgroup" required autocomplete="off">
                                <div class="invalid-feedback">
                                    Please provide a Blood Group.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="maritalstatus" class="form-label w-100">Marital Status</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="married" name="check"
                                        id="married">
                                    <label class="form-check-label" for="married">
                                        Married
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="unmarried" name="check"
                                        id="unmarried" checked>
                                    <label class="form-check-label" for="unmarried">
                                        Un-Married
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="profilephoto" class="form-label"> Select Profile photo</label>
                                <input class="form-control" type="file" id="profilephoto" name="profile_image" required autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <div class="col mb-1">
                        <h3><u>Education Details</u></h3>
                        <div class="row d-flex">
                            <div class="col-md-4 mb-3">
                                <label for="college">School/College/University</label>
                                <input type="text" class="form-control" name="institute1" id="college" required autocomplete="off">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="degree">Degree</label>
                                <input type="text" class="form-control" name="degree1" id="degree" required autocomplete="off">
                            </div>
                            <div class="col-md-4 mb-3 d-flex">
                                <div class="row gx-5">
                                    <div class="col-md-6">
                                        <label for="from">From</label>
                                        <input type="text" class="form-control" name="from1" id="from" required autocomplete="off">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="to">To</label>
                                        <input type="text" class="form-control" name="to1" id="to" required autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="cgpa">CGPA</label>
                                <input type="text" class="form-control" name="grade1" id="cgpa" required autocomplete="off">
                            </div>
                        </div>
                        <div id="addEducation"></div>
                        <div class="col-md-2 mb-3">
                            <button class="btn btn-primary form-control" id="education_hide" type="button"
                                onclick="addEducation()">Add More</button>
                        </div>
                    </div>

                    <div class="col mb-1">
                        <h3><u>Experience</u></h3>
                        <div class="row d-flex">
                            <div class="col-md-6 mb-3">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" name="title1" id="title" required autocomplete="off">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="description">Description</label>
                                <textarea class="form-control" id="description" name="description1"
                                    placeholder="Description" required autocomplete="off"></textarea>
                            </div>
                        </div>
                        <div id="addExperience"></div>
                        <div class="col-md-2 mb-3">
                            <button class="btn btn-primary form-control" id="experience_hide" type="button"
                                onclick="addExperience()">Add More</button>
                        </div>
                    </div>

                    <div class="mb-1">
                        <h3><u>Skills</u></h3>
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <input type="text" class="form-control" name="skill1" id="skill" required autocomplete="off">
                            </div>
                            <div class="col-md-2 mb-3">
                                <button class="btn btn-primary form-control" id="skill_hide" type="button"
                                    onclick="addSkill()">Add More</button>
                            </div>
                            <div id="addSkill"></div>
                        </div>
                    </div>

                    <div class="col mb-1">
                        <h3><u>Hobbies</u></h3>
                        <div class="row d-flex">
                            <div class="col-md-4 mb-3">
                                <input type="text" class="form-control" name="hobby1" id="hobbies" required autocomplete="off">
                            </div>
                            <div class="col-md-2 mb-3">
                                <button class="btn btn-primary form-control" id="hobby_hide" type="button"
                                    onclick="addHobby()">Add More</button>
                            </div>
                            <div id="addHobby"></div>
                        </div>
                    </div>

                </div>
        </div>
        <div class="col-12 mb-5">
            <button class="btn btn-primary" type="submit" name="submit">Submit form</button>
        </div>
        </form>
    </div>
    </div>

    <script src=" https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script src="cv.js"></script>
    <!-- <script src="formValidation.js"></script> -->
</body>

</html>