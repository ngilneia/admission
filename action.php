<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include('header.php');
include_once("db_connect.php");
?>
<!-- <div class="row well alert alert-success">
    <? // echo "<pre>";
    // print_R($_POST);
    ?>
</div> -->
<title>Applicants</title>
<?php include('container.php'); ?>
<div class="container">
    <h2>Review Application</h2>
    <div class="row well">
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = htmlspecialchars(trim($_POST['name'])) ?? "NA";
            $date = htmlspecialchars(trim($_POST['date'])) ?? "NA";
            $gender = htmlspecialchars(trim($_POST['gender'])) ?? "NA";
            $motherTonque = htmlspecialchars(trim($_POST['motherTonque'])) ?? "NA";
            $nationality = htmlspecialchars(trim($_POST['nationality'])) ?? "NA";
            $churchAffiliation = htmlspecialchars(trim($_POST['churchAffiliation'])) ?? "NA";
            $fathersName = htmlspecialchars(trim($_POST['fathersName'])) ?? "NA";
            $fathersOccupation = htmlspecialchars(trim($_POST['fathersOccupation'])) ?? "NA";
            $mothersName = htmlspecialchars(trim($_POST['mothersName'])) ?? "NA";
            $mothersOccupation = htmlspecialchars(trim($_POST['mothersOccupation'])) ?? "NA";
            $annualIncome = htmlspecialchars(trim($_POST['annualIncome'])) ?? "NA";
            $guardianName = htmlspecialchars(trim($_POST['guardianName'])) ?? "NA";
            $guardianOccupation = htmlspecialchars(trim($_POST['guardianOccupation'])) ?? "NA";
            $guardianIncome = htmlspecialchars(trim($_POST['guardianIncome'])) ?? "NA";
            $contactAddress = htmlspecialchars(trim($_POST['contactAddress'])) ?? "NA";
            $city = htmlspecialchars(trim($_POST['city'])) ?? "NA";
            $district = htmlspecialchars(trim($_POST['district'])) ?? "NA";
            $pinCode = htmlspecialchars(trim($_POST['pinCode'])) ?? "NA";
            $state = htmlspecialchars(trim($_POST['state'])) ?? "NA";
            $country = htmlspecialchars(trim($_POST['country'])) ?? "NA";
            $email = htmlspecialchars(trim($_POST['email'])) ?? "NA";
            $mobileno = htmlspecialchars(trim($_POST['mobileno'])) ?? "NA";
            $aadharno = htmlspecialchars(trim($_POST['aadharno'])) ?? "NA";
            $pAddress = htmlspecialchars(trim($_POST['pAddress'])) ?? "NA";
            $pPinCode = htmlspecialchars(trim($_POST['pPinCode'])) ?? "NA";
            $maritalStatus = htmlspecialchars(trim($_POST['maritalStatus'])) ?? "NA";
            $spouseName = htmlspecialchars(trim($_POST['spouseName'])) ?? "NA";
            $spouseOccupation = htmlspecialchars(trim($_POST['spouseOccupation'])) ?? "NA";
            $children = htmlspecialchars(trim($_POST['children'])) ?? "NA";
            $male = htmlspecialchars(trim($_POST['male'])) ?? "NA";
            $female = htmlspecialchars(trim($_POST['female'])) ?? "NA";
            $course = htmlspecialchars(trim($_POST['course'])) ?? "NA";
            $year = htmlspecialchars(trim($_POST['year'])) ?? "NA";
            $division = htmlspecialchars(trim($_POST['division'])) ?? "NA";
            $board_university = htmlspecialchars(trim($_POST['board_university'])) ?? "NA";
            $work = htmlspecialchars(trim($_POST['work'])) ?? "NA";
            $church = htmlspecialchars(trim($_POST['church'])) ?? "NA";
            $suspended = htmlspecialchars(trim($_POST['suspended'])) ?? "NA";
            $suspendedReason = htmlspecialchars(trim($_POST['suspendedReason'])) ?? "NA";
            $reason = htmlspecialchars(trim($_POST['reason'])) ?? "NA";
            $churchRecommendation = htmlspecialchars(trim($_POST['churchRecommendation'])) ?? "NA";
            $sponsorship = htmlspecialchars(trim($_POST['sponsorship'])) ?? "NA";
            $responsibleNamea = htmlspecialchars(trim($_POST['responsibleNamea'])) ?? "NA";
            $responsibleMobilea = htmlspecialchars(trim($_POST['responsibleMobilea'])) ?? "NA";
            $responsibleAddressa = htmlspecialchars(trim($_POST['responsibleAddressa'])) ?? "NA";
            $responsibleNameb = htmlspecialchars(trim($_POST['responsibleNameb'])) ?? "NA";
            $responsibleMobileb = htmlspecialchars(trim($_POST['responsibleMobileb'])) ?? "NA";
            $responsibleAddressb = htmlspecialchars(trim($_POST['responsibleAddressb'])) ?? "NA";
            $smoke = htmlspecialchars(trim($_POST['smoke'])) ?? "NA";
            $chew = htmlspecialchars(trim($_POST['chew'])) ?? "NA";
            $tatoo = htmlspecialchars(trim($_POST['tatoo'])) ?? "NA";
            $dateSignature = htmlspecialchars(trim($_POST['dateSignature'])) ?? "NA";
        ?>
            <div class="form-group">
                <label for="name">Name of the applicants</label>
                <input type="text" class="form-control" disabled value="<?php echo $name ?>" id="name" name="name">
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="date">Date of Birth</label>
                    <input type="date" class="form-control" disabled value="<?php echo $date; ?>" id="date" name="date">
                </div>
                <div class="form-group col-md-6">
                    <label for="gender">Gender</label>
                    <input type="text" class="form-control" disabled value="<?php echo $gender;  ?>" id="gender" name="gender">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="motherTonque">Mother Tonque</label>
                    <input type="text" class="form-control" disabled value="<?php echo $motherTonque;  ?>" id="motherTonques" name="motherTonque">
                </div>
                <div class="form-group col-md-6">
                    <label for="nationality">Nationality</label>
                    <input type="text" class="form-control" disabled value="<?php echo $nationality; ?>" id="nationality" name="nationality">
                </div>
            </div>
            <div class="form-group">
                <label for="churchAffiliation">Church Affiliation</label>
                <input type="text" class="form-control" disabled value="<?php echo $churchAffiliation; ?>" id="churchAffiliation" name="churchAffiliation">
            </div>
            <label for="address" class="form-label">Parents Name and Occupation</label>
            <div class=" input-group mb-3">
                <input type="text" class="form-control" disabled value="<?php echo $fathersName; ?>" id="fathersName" name="fathersName" placeholder="Fathers Name">
                <input type="text" class="form-control" disabled value="<?php echo $fathersOccupation; ?>" id="fathersOccupation" name="fathersOccupation" placeholder="Occupation">
            </div>
            <div class=" input-group mb-3">
                <input type="text" class="form-control" disabled value="<?php echo $mothersName; ?>" id="mothersName" name="mothersName" placeholder="Mothers Name">
                <input type="text" class="form-control" disabled value="<?php echo $mothersOccupation; ?>" id="mothersOccupation" name="mothersOccupation" placeholder="Occupation">
            </div>
            <div class="form-group">
                <label for="annualIncome">Total Annual Income of the family</label>
                <input type="text" class="form-control" disabled value="<?php echo $annualIncome; ?>" id="annualIncome" name="annualIncome">
            </div>

            <label for="guardian">Guardian Name and Occupation(if any)</label>
            <div class="input-group">
                <input type="text" class="form-control" disabled value="<?php echo $guardianName; ?>" id="guardianName" name="guardianName" placeholder="Guardian Name">
                <input type="text" class="form-control" disabled value="<?php echo $guardianOccupation; ?>" id="guardianOccupation" name="guardianOccupation" placeholder="Occupation">
                <input type="text" class="form-control" disabled value="<?php echo $guardianIncome; ?>" id="guardianIncome" name="guardianIncome" placeholder="Annual Income">
            </div>
            <label for="address" class="form-label">Address</label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" disabled value="<?php echo $contactAddress; ?>" id="contactAddress" name="contactAddress" placeholder="Contact Address">
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" disabled value="<?php echo $city; ?>" id="city" name="city" placeholder="City">
                <input type="text" class="form-control" disabled value="<?php echo $district; ?>" id="district" name="district" placeholder="District">
                <input type="text" class="form-control" disabled value="<?php echo $pinCode; ?>" id="pinCode" name="pinCode" placeholder="Pin Code">
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" disabled value="<?php echo $state; ?>" id="state" name="state" placeholder="State">
                <input type="text" class="form-control" disabled value="<?php echo $country; ?>" id="country" name="country" placeholder="Country">
                <input type="email" class="form-control" disabled value="<?php echo $email; ?>" id="email" name="email" placeholder="email Id">
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" disabled value="<?php echo $mobileno; ?>" id="mobileno" name="mobileno" placeholder="Mobile No">
                <input type="text" class="form-control" disabled value="<?php echo $aadharno; ?>" id="aadharno" name="aadharno" placeholder="Aadhar No">
            </div>
            <label for="pAddress">Permanent Address(if different from COntact Address)</label>
            <div class="input-group">
                <input type="text" class="form-control" disabled value="<?php echo $pAddress; ?>" id="pAddress" name="pAddress" placeholder="Permanent Address">
                <input type="text" class="form-control" disabled value="<?php echo $pPinCode; ?>" id="pPinCode" name="pPinCode" placeholder="Pin Code">
            </div>
            <div class="form-group">
                <label for="maritalStatus">Marital Status</label>
                <input type="text" class="form-control" disabled value="<?php echo $maritalStatus; ?>" id="maritalStatus" name="maritalStatus">
            </div>
            <label for="ifMarried" class="form-label">If Married</label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" disabled value="<?php echo $spouseName; ?>" id="spouseName" name="spouseName" placeholder="Name of Spouse">
                <input type="text" class="form-control" disabled value="<?php echo $spouseOccupation; ?>" id="spouseOccupation" name="spouseOccupation" placeholder="Occupation">
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" disabled value="<?php echo $children; ?>" id="children" name="children" placeholder="Number of Children(if any)">
                <input type="text" class="form-control" disabled value="<?php echo $male; ?>" id="male" name="male" placeholder="Male">
                <input type="text" class="form-control" disabled value="<?php echo $female ?>" id="female" name="female" placeholder="Female">
            </div>
            <label for="education" class="form-label">Education</label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" id="slno" name="slno" disabled value="1">
                <input type="text" class="form-control" disabled value="<?php echo $course; ?>" id="course" name="course" placeholder="Course">
                <input type="text" class="form-control" disabled value="<?php echo $year; ?>" id="year" name="year" placeholder="Year">
                <input type="text" class="form-control" disabled value="<?php echo $division; ?>" id="division" name="division" placeholder="Division">
                <input type="text" class="form-control" disabled value="<?php echo $board_university; ?>" id="board_university" name="board_university" placeholder="Board/University">
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" id="slno" name="slno" disabled value="2">
                <input type="text" class="form-control" disabled value="<?php  ?>" id="course" name="course" placeholder="Course">
                <input type="text" class="form-control" disabled value="<?php  ?>" id="year" name="year" placeholder="Year">
                <input type="text" class="form-control" disabled value="<?php  ?>" id="division" name="division" placeholder="Division">
                <input type="text" class="form-control" disabled value="<?php  ?>" id="board_university" name="board_university" placeholder="Board/University">
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" id="slno" name="slno" disabled value="3">
                <input type="text" class="form-control" disabled value="<?php  ?>" id="course" name="course" placeholder="Course">
                <input type="text" class="form-control" disabled value="<?php  ?>" id="year" name="year" placeholder="Year">
                <input type="text" class="form-control" disabled value="<?php  ?>" id="division" name="division" placeholder="Division">
                <input type="text" class="form-control" disabled value="<?php  ?>" id="board_university" name="board_university" placeholder="Board/University">
            </div>
            <div class="form-group">
                <label for="work">Is the applicant Employed? If Yes, mention name and nature of work</label>
                <input type="text" class="form-control" name="work" disabled value="<?php echo $work; ?>" id="work"></input>
            </div>
            <div class="form-group">
                <label for="church">Name of local Church to which he/she is attached</label>
                <input type="text" class="form-control" name="church" disabled value="<?php echo $church; ?>" id="church"></input>
            </div>
            <div class="form-group">
                <label for="suspended">Has the applicant ever been suspended/disciplined/penalized by the Church</label>
                <input type="text" class="form-control" name="suspended" disabled value="<?php echo $suspended ?>" id="suspended"></input>
                <label for="suspendedReason">If yes, state the reason for the same</label>
                <input type="text" class="form-control" name="suspendedReason" id="suspendedReason" disabled value="<?php echo $suspendedReason ?>"></input>
            </div>
            <div class="form-group">
                <label for="reason">Give reason(s) why the applicant wants to study B.D. at Aizawl Theological College</label>
                <textarea class="form-control" name="reason" disabled placeholder="<?php echo $reason; ?>"></textarea>
            </div>
            <div class="form-group">
                <label for="churchRecommendation">Is the applicant being recommended by any church organization? If yes, name the
                    address and contact number of the recommending body. </label>
                <input type="text" class="form-control" name="churchRecommendation" id="churchRecommendation" disabled value="<?php echo $churchRecommendation; ?>">
            </div>
            <div class="form-group">
                <label for="sponsorship">Is the applicant already assured of financial support? If yes, give the name and address
                    of the sponsoring body/person: </label>
                <input type="text" class="form-control" name="sponsorship" id="sponsorship" disabled value="<?php echo $sponsorship;  ?>">
            </div>
            <label for="education" class="form-label">Names and Addresses of Two Responsible Persons who can supply confidential
                information about the applicant. (For example, Former teachers or Youth Leader of your
                local church) </label>
            <div class="input-group mb-3">
                <input type="text" class="form-control " id="slno" name="slno" disabled value="a">
                <input type="text" class="form-control" disabled value="<?php echo $responsibleNamea; ?>" id="responsibleNamea" name="responsibleNamea" placeholder="Name">
                <input type="text" class="form-control" disabled value="<?php echo $responsibleMobilea; ?>" id="responsibleMobilea" name="responsibleMobilea" placeholder="Mobile No">
                <input type="text" class="form-control w-50" disabled value="<?php echo $responsibleAddressa;  ?>" id="responsibleAddressa" name="responsibleAddressa" placeholder="Address">
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" id="slno" name="slno" disabled value="b">
                <input type="text" class="form-control" disabled value="<?php echo $responsibleNameb; ?>" id="responsibleNameb" name="responsibleNameb" placeholder="Name">
                <input type="text" class="form-control" disabled value="<?php echo $responsibleMobileb; ?>" id="responsibleMobileb" name="responsibleMobileb" placeholder="Mobile No">
                <input type="text" class="form-control w-50" disabled value="<?php echo $responsibleAddressb; ?>" id="responsibleAddressb" name="responsibleAddressb" placeholder="Address">
            </div>
            <div class="row">
                <div class="form-group col-md-4">
                    <label for="smoke">Do you Smoke?</label>
                    <input type="text" class="form-control" name="smoke" id="smoke" disabled value="<?php echo $smoke; ?>">
                </div>
                <div class="form-group  col-md-4">
                    <label for="chew">Chew pan and beetlenut</label>
                    <input type="text" class="form-control" name="chew" id="chew" disabled value="<?php echo $chew; ?>">
                </div>
                <div class="form-group col-md-4">
                    <label for="tatoo">Do you Have Tatoo in your Body?</label>
                    <input type="text" class="form-control" name="tatoo" id="tatoo" disabled value="<?php echo $tatoo; ?>">
                </div>
            </div>
            <label for="education" class="form-label">Undertaking of the applicant: </label>
            <label for="education" class="form-label">If admitted to Aizawl Theological College, I am prepared to obey any rules which the
                college authority may enact from time to time for the good functioning of the institution. I
                undertake to remain at the college, subject to satisfactory conduct and progress,
                throughout the whole of my course, and in the event of failure to do so, to refund to the
                college the amount any scholarship/financial support I may have received. </label>
            <div class="input-group mb-3">
                <input type="date" class="form-control" disabled value="<?php echo $dateSignature; ?>" id="dateSignature" name="dateSignature" placeholder="Date">
            </div>
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label for="signature" class="form-label">Signature</label>
                    <input class="form-control" type="file" id="signature" name="signatureFile" disabled value="<?php  ?>">
                </div>
                <div class="mb-3 col-md-6">
                    <label for="passport" class="form-label">Passport Photo</label>
                    <input class="form-control" type="file" id="passport" name="passportFile" disabled value="<?php ?>">
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label for="ednCertificate" class="form-label">Educational Certificates</label>
                    <input class="form-control" type="file" id="ednCertificate" name="ednCertificateFile" disabled value="<?php ?>">
                </div>
                <div class="mb-3 col-md-6">
                    <label for="baptismal" class="form-label">Baptismal Certificates</label>
                    <input class="form-control" type="file" id="baptismal" name="baptismalFile" disabled value="<?php ?>">
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label for="finStatement" class="form-label">Financial Statement</label>
                    <input class="form-control" type="file" id="finStatement" name="finStatementFile" disabled value="<?php ?>">
                </div>
                <div class="mb-3 col-md-6">
                    <label for="churchConfidential" class="form-label">Church Confedential</label>
                    <input class="form-control" type="file" id="churchConfidential" name="churchConfidentialFile" disabled value="<?php ?>">
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label for="pastorConfedential" class="form-label">Pastor Confedential</label>
                    <input class="form-control" type="file" id="pastorConfedential" name="pastorConfedentialFile" disabled value="<?php ?>">
                </div>
                <div class="mb-3 col-md-6">
                    <label for="referee" class="form-label">Referees</label>
                    <input class="form-control" type="file" id="referee" name="refereeFile" disabled value="<?php ?>">
                </div>
            </div>
            <input type="submit" name="submit" class="submit btn btn-success" value="Submit" />
    </div>
</div>
<?php
        }
        if (isset($_POST['submit'])) {
            $stmt = $conn->prepare("INSERT INTO applicants(name,date,gender,motherTonque,nationality,churchAffiliation,fathersName,fathersOccupation,
                mothersName,mothersOccupation,annualIncome,guardianName,guardianOccupation,guardianIncome,contactAddress,city,district,pinCode,state,country,email,mobileno,aadharno,pAddress,pPinCode,maritalStatus,spouseName,
                spouseOccupation,children,male,female,course,year,division,board_university,work,church,suspended,suspendedReason,reason,churchRecommendation,sponsorship,
                responsibleNamea,responsibleMobilea,responsibleAddressa,responsibleNameb,responsibleMobileb,responsibleAddressb,smoke,chew,tatoo,dateSignature) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
            $stmt->bind_param(
                "ssssssssssssssssssssssssssssssssssssssssssssssssssss",
                $name,
                $date,
                $gender,
                $motherTonque,
                $nationality,
                $churchAffiliation,
                $fathersName,
                $fathersOccupation,
                $mothersName,
                $mothersOccupation,
                $annualIncome,
                $guardianName,
                $guardianOccupation,
                $guardianIncome,
                $contactAddress,
                $city,
                $district,
                $pinCode,
                $state,
                $country,
                $email,
                $mobileno,
                $aadharno,
                $pAddress,
                $pPinCode,
                $maritalStatus,
                $spouseName,
                $spouseOccupation,
                $children,
                $male,
                $female,
                $course,
                $year,
                $division,
                $board_university,
                $work,
                $church,
                $suspended,
                $suspendedReason,
                $reason,
                $churchRecommendation,
                $sponsorship,
                $responsibleNamea,
                $responsibleMobilea,
                $responsibleAddressa,
                $responsibleNameb,
                $responsibleMobileb,
                $responsibleAddressb,
                $smoke,
                $chew,
                $tatoo,
                $dateSignature
            );
            if ($stmt->execute()) {
?>
    <script type="text/javascript">
        Swal.fire(
            'Success',
            'Application submitted succesfully',
            'success'
        )
    </script>
<?php
                $stmt->close();
            } else {
                echo "Error in registering...Please try again later!";
                $stmt->close();
            }
        }

        include('footer.php');
?>