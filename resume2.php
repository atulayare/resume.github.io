<?php
define('Token', 'HGsZOXpfNC');
$skills = [];
$skill_levels = [];
$hobbies = [];
$institutes = [];
$degrees = [];
$froms = [];
$tos = [];
$grades = [];
$titles = [];
$descriptions = [];
if (Token == $_POST['token']) {
  $radioVal = $_POST['check'];

  if ($radioVal == "married") {
    $maritalStaus = "Married";
  } else if ($radioVal == "unmarried") {
    $maritalStaus = "Un-Married";
  }


  $temp_profile = $_FILES['profile_image']['tmp_name'];
  $profile = $_FILES['profile_image']['name'];
  move_uploaded_file($temp_profile, 'images/' . $profile);
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $address = $_POST['address'];
  $gender = $_POST['gender'];
  $contactno = $_POST['contactno'];
  $dob = $_POST['dob'];
  $bloodgroup = $_POST['bloodgroup'];
  // $profession = $_POST['profession'];
  $email = $_POST['email'];
  // $phone = $_POST['phone'];
  // $about_me = $_POST['about_me'];
  array_push($skills, $_POST['skill1']);
  // array_push($skill_levels, intval($_POST['skill_level1']));
  array_push($hobbies, $_POST['hobby1']);
  array_push($institutes, $_POST['institute1']);
  array_push($degrees, $_POST['degree1']);
  array_push($froms, $_POST['from1']);
  array_push($tos, $_POST['to1']);
  array_push($grades, $_POST['grade1']);
  array_push($titles, $_POST['title1']);
  array_push($descriptions, $_POST['description1']);

  if (isset($_POST['skill2']) && !empty($_POST['skill2'])) {
      array_push($skills, $_POST['skill2']);
  }
  if (isset($_POST['skill3']) && !empty($_POST['skill3'])) {
      array_push($skills, $_POST['skill3']);
  }
  if (isset($_POST['skill4']) && !empty($_POST['skill4'])) {
      array_push($skills, $_POST['skill4']);
  }
  if (isset($_POST['skill5']) && !empty($_POST['skill5'])) {
      array_push($skills, $_POST['skill5']);
  }
  if (isset($_POST['hobby2']) && !empty($_POST['hobby2'])) {
    array_push($hobbies, $_POST['hobby2']);
  }
  if (isset($_POST['hobby3']) && !empty($_POST['hobby3'])) {
    array_push($hobbies, $_POST['hobby3']);
  }
  if (isset($_POST['hobby4']) && !empty($_POST['hobby4'])) {
    array_push($hobbies, $_POST['hobby4']);
  }
  if (isset($_POST['institute2']) && !empty($_POST['institute2'])) {
    if (isset($_POST['degree2']) && !empty($_POST['degree2'])) {
      if (isset($_POST['from2']) && !empty($_POST['from2'])) {
        if (isset($_POST['to2']) && !empty($_POST['to2'])) {
          if (isset($_POST['grade2']) && !empty($_POST['grade2'])) {
            array_push($institutes, $_POST['institute2']);
            array_push($degrees, $_POST['degree2']);
            array_push($froms, $_POST['from2']);
            array_push($tos, $_POST['to2']);
            array_push($grades, $_POST['grade2']);
          }
        }
      }
    }
  }
  if (isset($_POST['institute3']) && !empty($_POST['institute3'])) {
    if (isset($_POST['degree3']) && !empty($_POST['degree3'])) {
      if (isset($_POST['from3']) && !empty($_POST['from3'])) {
        if (isset($_POST['to3']) && !empty($_POST['to3'])) {
          if (isset($_POST['grade3']) && !empty($_POST['grade3'])) {
            array_push($institutes, $_POST['institute3']);
            array_push($degrees, $_POST['degree3']);
            array_push($froms, $_POST['from3']);
            array_push($tos, $_POST['to3']);
            array_push($grades, $_POST['grade3']);
          }
        }
      }
    }
  }
  if (isset($_POST['title2']) && !empty($_POST['title2'])) {
    if (isset($_POST['description2']) && !empty($_POST['description2'])) {
      array_push($titles, $_POST['title2']);
      array_push($descriptions, $_POST['description2']);
    }
  }
  if (isset($_POST['title3']) && !empty($_POST['title3'])) {
    if (isset($_POST['description3']) && !empty($_POST['description3'])) {
      array_push($titles, $_POST['title3']);
      array_push($descriptions, $_POST['description3']);
    }
  }
} else {
  header('location: /resumegenerator');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css"
        href="http://yui.yahooapis.com/2.7.0/build/reset-fonts-grids/reset-fonts-grids.css" media="all" />
    <link rel="stylesheet" href="resume2.css">
    <title><?php echo ucwords($first_name) . ' Resume'; ?></title>
</head>

<body>
    <!-- <div class="container position-fixed">
        <button type="button" onclick="printCV()" class="btn btn-success"> Print CV </button>
    </div> -->
    <div id="doc2" class="yui-t7">
        <div id="inner">

            <div id="hd">
                <div class="yui-gc">
                    <div class="yui-u first">
                        <h1><?php echo ucwords($first_name); ?>&nbsp;&nbsp;<?php echo ucwords($last_name); ?></h1>
                    </div>

                    <div class="yui-u">
                        <div class="contact-info">
                            <h3><a href="mailto:name@yourdomain.com"><?php echo $email; ?></a></h3>
                            <h3><?php echo $contactno; ?></h3>
                        </div>
                        <!--// .contact-info -->
                    </div>
                </div>
            </div>

            <div id="bd">
                <div id="yui-main">
                    <div class="yui-b">

                        <div class="yui-gf">
                            <div class="yui-u first">
                                <img src="images/<?php echo $profile; ?>" alt="" class="img-fluid myimg">
                            </div>
                            <div class="yui-u">

                                <p style="margin:15px 0px 5px 10px; display:flex;">
                                    DOB:-&nbsp;<?php echo ucwords($dob); ?></p>
                                <p style="margin:15px 0px 5px 10px; display:flex;">
                                    Gender:-&nbsp;<?php echo ucwords($gender); ?></p>
                                <p style="margin:15px 0px 5px 10px; display:flex;">Blood
                                    Group:-&nbsp;<?php echo ucwords($bloodgroup); ?>
                                </p>
                                <p style="margin:15px 0px 5px 10px; display:flex;">Marital
                                    :-&nbsp;<?php echo ucwords($maritalStaus); ?>
                                </p>
                                <!-- <p style="margin:15px 0px 5px 10px; display:flex;">Address:-
                                </p> -->
                                <p style="margin:15px 0px 5px 10px; display:flex;">
                                    Address:-<?php echo ucwords($address); ?>
                                </p>
                            </div>
                        </div>
                        <!--// .yui-gf -->

                        <div class="yui-gf">
                            <div class="yui-u first">
                                <h2>Skills</h2>
                            </div>
                            <div class="yui-u">

                                <?php
        foreach ($skills as $skill) {
          echo " <div class='talent'>
            <h4>" . ucwords($skill) . "</h4>
        </div>";
        }
        ?>
                            </div>
                        </div>


                        <div class="yui-gf">
                            <div class="yui-u first">
                                <h2>Education Details</h2>
                            </div>
                            <div class="yui-u">
                                <div>
                                    <?php
          for ($i = 0; $i < count($institutes); $i++) {
            echo "<ul class='talent'>
            <li>
              <div class='msg-1'>" . $froms[$i] . "-" . $tos[$i] . " | " . ucwords($degrees[$i]) . ", " . $grades[$i] . "</div>
              <div class='msg-2'>" . ucwords($institutes[$i]) . "</div>
            </li>
          </ul>";
          }
          ?>
                                </div>
                            </div>
                        </div>
                        <!--// .yui-gf-->

                        <div class="yui-gf">

                            <div class="yui-u first">
                                <h2>Experience</h2>
                            </div>
                            <!--// .yui-u -->

                            <div class="yui-u">

                                <?php
          for ($i = 0; $i < count($titles); $i++) {
            echo " <div class='job' style='margin-top:10px;'>
              <h2>" . ucwords($titles[$i]) . "</h2>
              <h3>" . ucfirst($descriptions[$i]) . "</h3>
          </ul>";
          }
          ?>

                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <!--// footer -->

        </div><!-- // inner -->


    </div>
    <script src="cv.js"></script>
</body>

</html>