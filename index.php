<?php
include('header.php');
?>
<title>Application Form 2-21-22</title>
<script type="text/javascript" src="script/form.js"></script>

<style type="text/css">
    #register_form fieldset:not(:first-of-type) {
        display: none;
    }
</style>
<?php include('container.php'); ?>

<div class="container">
    <h2>Bachelor of Divinity (B.D.) Degree Course</h2>
    <div class="progress">
        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    <div class="alert alert-success hide"></div>
    <form id="register_form" novalidate action="action.php" method="post" enctype="multipart/form-data">
        <fieldset>
            <div class="form-group">
                <label for="address">Notes to the Applicant: </label>
                <ol>
                    <li>Recent passport size photograph of the applicant has to be affixed.</li>
                    <li>Attested copies of the certificates and marks of the applicant from H.S.L.C. or its
                        equivalent onwards must be attached. </li>
                    <li>Attested copy of Baptismal Certificate must be enclosed. </li>
                    <li>If the applicant is already assured of financial support, a letter of agreement from the
                        concerned body/person must be enclosed. </li>
                    <li>Confidential Assessment Forms to be filled by the two “Referees” are enclosed along
                        with this form. These should be given by the applicant to the Referees who should
                        complete and send the same directly to the College. Forms could be filled in either
                        English or Mizo.
                    </li>
                    <li>Confidential Report Forms of the applicant’s local church committee and his/her pastor
                        are also enclosed along with this form. These should be filled and sent directly to the
                        college by the concerned Church Committee and Pastor. Forms could be filled in either
                        English or Mizo. </li>
                    <li>Original copies of all the educational certificate must be produced at the time of Personal
                        Interview by the Theological Education Board (TEB)</li>
                    <li>A medical examination is required only for those who are selected by the Theological
                        Education Board. </li>
                </ol>
            </div>
            <input type="button" class="next-form btn btn-info" value="Next" />
        </fieldset>
        <fieldset>
            <!-- <h2>Step 1: Add Account Details</h2> -->
            <div class="form-group">
                <label for="name">Name of the applicants</label>
                <input type="text" class="form-control" required id="name" name="name" placeholder="Name of Applicants">
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="date">Date of Birth</label>
                    <input type="date" class="form-control" required id="date" name="date">
                </div>
                <div class="form-group col-md-6">
                    <label for="gender">Gender</label>
                    <select name="gender" class="form-control" id="gender">
                        <option value="">SELECT GENDER</option>
                        <option value="MALE">MALE</option>
                        <option value="FEMALE">FEMALE</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="motherTonque">Mother Tonque</label>
                    <input type="text" class="form-control" required id="motherTonques" name="motherTonque">
                </div>
                <div class="form-group col-md-6">
                    <label for="nationality">Nationality</label>
                    <input type="text" class="form-control" required id="nationality" name="nationality">
                </div>
            </div>
            <div class="form-group">
                <label for="churchAffiliation">Church Affiliation</label>
                <input type="text" class="form-control" required id="churchAffiliation" name="churchAffiliation">
            </div>
            <label for="address" class="form-label">Parents Name and Occupation</label>
            <div class=" input-group mb-3">
                <input type="text" class="form-control" required id="fathersName" name="fathersName" placeholder="Fathers Name">
                <input type="text" class="form-control" required id="fathersOccupation" name="fathersOccupation" placeholder="Occupation">
            </div>
            <div class=" input-group mb-3">
                <input type="text" class="form-control" required id="mothersName" name="mothersName" placeholder="Mothers Name">
                <input type="text" class="form-control" required id="mothersOccupation" name="mothersOccupation" placeholder="Occupation">
            </div>
            <div class="form-group">
                <label for="annualIncome">Total Annual Income of the family</label>
                <input type="text" class="form-control" required id="annualIncome" name="annualIncome">
            </div>

            <label for="guardian">Guardian Name and Occupation(if any)</label>
            <div class="input-group">
                <input type="text" class="form-control" required id="guardianName" name="guardianName" placeholder="Guardian Name">
                <input type="text" class="form-control" required id="guardianOccupation" name="guardianOccupation" placeholder="Occupation">
                <input type="text" class="form-control" required id="guardianIncome" name="guardianIncome" placeholder="Annual Income">
            </div>
            <input type="button" name="previous" class="previous-form btn btn-default" value="Previous" />
            <input type="button" name="next" class="next-form btn btn-info" value="Next" />
        </fieldset>
        <fieldset>
            <label for="address" class="form-label">Address</label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" required id="contactAddress" name="contactAddress" placeholder="Contact Address">
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" required id="city" name="city" placeholder="City">
                <input type="text" class="form-control" required id="district" name="district" placeholder="District">
                <input type="text" class="form-control" required id="pinCode" name="pinCode" placeholder="Pin Code">
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" required id="state" name="state" placeholder="State">
                <input type="text" class="form-control" required id="country" name="country" placeholder="Country">
                <input type="email" class="form-control" required id="email" name="email" placeholder="email Id">
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" required id="mobileno" name="mobileno" placeholder="Mobile No">
                <input type="text" class="form-control" required id="aadharno" name="aadharno" placeholder="Aadhar No">
            </div>
            <label for="pAddress">Permanent Address(if different from COntact Address)</label>
            <div class="input-group">
                <input type="text" class="form-control" required id="pAddress" name="pAddress" placeholder="Permanent Address">
                <input type="text" class="form-control" required id="pPinCode" name="pPinCode" placeholder="Pin Code">
            </div>
            <div class="form-group">
                <label for="maritalStatus">Marital Status</label>
                <select name="maritalStatus" class="form-control" id="maritalStatus">
                    <option value="">SELECT MARITAL STATUS</option>
                    <option value="SINGLE">SINGLE</option>
                    <option value="MARRIED">MARRIED</option>
                </select>
            </div>
            <label for="ifMarried" class="form-label">If Married</label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" required id="spouseName" name="spouseName" placeholder="Name of Spouse">
                <input type="text" class="form-control" required id="spouseOccupation" name="spouseOccupation" placeholder="Occupation">
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" required id="children" name="children" placeholder="Number of Children(if any)">
                <input type="text" class="form-control" required id="male" name="male" placeholder="Male">
                <input type="text" class="form-control" required id="female" name="female" placeholder="Female">
            </div>
            <label for="education" class="form-label">Education</label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" required id="slno" name="slno" disabled value="1">
                <input type="text" class="form-control" required id="course" name="course" placeholder="Course">
                <input type="text" class="form-control" required id="year" name="year" placeholder="Year">
                <input type="text" class="form-control" required id="division" name="division" placeholder="Division">
                <input type="text" class="form-control" required id="board_university" name="board_university" placeholder="Board/University">
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" required id="slno" name="slno" disabled value="2">
                <input type="text" class="form-control" required id="course" name="course" placeholder="Course">
                <input type="text" class="form-control" required id="year" name="year" placeholder="Year">
                <input type="text" class="form-control" required id="division" name="division" placeholder="Division">
                <input type="text" class="form-control" required id="board_university" name="board_university" placeholder="Board/University">
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" required id="slno" name="slno" disabled value="3">
                <input type="text" class="form-control" required id="course" name="course" placeholder="Course">
                <input type="text" class="form-control" required id="year" name="year" placeholder="Year">
                <input type="text" class="form-control" required id="division" name="division" placeholder="Division">
                <input type="text" class="form-control" required id="board_university" name="board_university" placeholder="Board/University">
            </div>
            <input type="button" name="previous" class="previous-form btn btn-default" value="Previous" />
            <input type="button" name="next" class="next-form btn btn-info" value="Next" />
        </fieldset>
        <fieldset>
            <div class="form-group">
                <label for="work">Is the applicant Employed? If Yes, mention name and nature of work</label>
                <input type="text" class="form-control" name="work" required id="work"></input>
            </div>
            <div class="form-group">
                <label for="church">Name of local Church to which he/she is attached</label>
                <input type="text" class="form-control" name="church" required id="church"></input>
            </div>
            <div class="form-group">
                <label for="suspended">Has the applicant ever been suspended/disciplined/penalized by the Church</label>
                <input type="text" class="form-control" name="suspended" required id="suspended"></input>
                <label for="suspendedReason">If yes, state the reason for the same</label>
                <input type="text" class="form-control" name="suspendedReason" id="suspendedReason"></input>
            </div>
            <div class="form-group">
                <label for="reason">Give reason (s) why the applicant wants to study B.D. at Aizawl Theological College</label>
                <textarea class="form-control" name="reason" placeholder="Reason"></textarea>
            </div>
            <div class="form-group">
                <label for="churchRecommendation">Is the applicant being recommended by any church organization? If yes, name the
                    address and contact number of the recommending body. </label>
                <input type="text" class="form-control" name="churchRecommendation" id="churchRecommendation" placeholder="Is the applicant being recommended by any church organization?">
            </div>
            <div class="form-group">
                <label for="sponsorship">Is the applicant already assured of financial support? If yes, give the name and address
                    of the sponsoring body/person: </label>
                <input type="text" class="form-control" name="sponsorship" id="sponsorship" placeholder="Is the applicant already assured of financial support?">
            </div>
            <label for="education" class="form-label">Names and Addresses of Two Responsible Persons who can supply confidential
                information about the applicant. (For example, Former teachers or Youth Leader of your
                local church) </label>
            <div class="input-group mb-3">
                <input type="text" class="form-control " required id="slno" name="slno" disabled value="a">
                <input type="text" class="form-control" required id="responsibleNamea" name="responsibleNamea" placeholder="Name">
                <input type="text" class="form-control" required id="responsibleMobilea" name="responsibleMobilea" placeholder="Mobile No">
                <input type="text" class="form-control w-50" required id="responsibleAddressa" name="responsibleAddressa" placeholder="Address">
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" required id="slno" name="slno" disabled value="b">
                <input type="text" class="form-control" required id="responsibleNameb" name="responsibleNameb" placeholder="Name">
                <input type="text" class="form-control" required id="responsibleMobileb" name="responsibleMobileb" placeholder="Mobile No">
                <input type="text" class="form-control w-50" required id="responsibleAddressb" name="responsibleAddressb" placeholder="Address">
            </div>
            <div class="row">
                <div class="form-group col-md-4">
                    <label for="smoke">Do you Smoke?</label>
                    <input type="text" class="form-control" name="smoke" id="smoke" placeholder="Do you Smoke?">
                </div>
                <div class="form-group  col-md-4">
                    <label for="chew">Chew pan and beetlenut</label>
                    <input type="text" class="form-control" name="chew" id="chew" placeholder="chew pan and beetlenut,">
                </div>
                <div class="form-group col-md-4">
                    <label for="tatoo">Do you Have Tatoo in your Body?</label>
                    <input type="text" class="form-control" name="tatoo" id="tatoo" placeholder="Do you Have Tatoo in your Body?">
                </div>
            </div>
            <input type="button" name="previous" class="previous-form btn btn-default" value="Previous" />
            <input type="button" name="next" class="next-form btn btn-info" value="Next" />
        </fieldset>
        <fieldset>
            <label for="education" class="form-label">Undertaking of the applicant: </label>
            <label for="education" class="form-label">If admitted to Aizawl Theological College, I am prepared to obey any rules which the
                college authority may enact from time to time for the good functioning of the institution. I
                undertake to remain at the college, subject to satisfactory conduct and progress,
                throughout the whole of my course, and in the event of failure to do so, to refund to the
                college the amount any scholarship/financial support I may have received. </label>
            <div class="input-group mb-3">
                <input type="date" class="form-control" required id="dateSignature" name="dateSignature" placeholder="Date">
            </div>
            <!-- <div class="row">
                <div class="mb-3 col-md-6">
                    <label for="signature" class="form-label">Signature</label>
                    <input class="form-control" type="file" id="signature" name="signatureFile">
                </div>
                <div class="mb-3 col-md-6">
                    <label for="passport" class="form-label">Passport Photo</label>
                    <input class="form-control" type="file" id="passport" name="passportFile">
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label for="ednCertificate" class="form-label">Educational Certificates</label>
                    <input class="form-control" type="file" id="ednCertificate" name="ednCertificateFile">
                </div>
                <div class="mb-3 col-md-6">
                    <label for="baptismal" class="form-label">Baptismal Certificates</label>
                    <input class="form-control" type="file" id="baptismal" name="baptismalFile">
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label for="finStatement" class="form-label">Financial Statement</label>
                    <input class="form-control" type="file" id="finStatement" name="finStatementFile">
                </div>
                <div class="mb-3 col-md-6">
                    <label for="churchConfidential" class="form-label">Church Confedential</label>
                    <input class="form-control" type="file" id="churchConfidential" name="churchConfidentialFile">
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label for="pastorConfedential" class="form-label">Pastor Confedential</label>
                    <input class="form-control" type="file" id="pastorConfedential" name="pastorConfedentialFile">
                </div>
                <div class="mb-3 col-md-6">
                    <label for="referee" class="form-label">Referees</label>
                    <input class="form-control" type="file" id="referee" name="refereeFile">
                </div>
            </div> -->

            <input type="button" name="previous" class="previous-form btn btn-default" value="Previous" />
            <input type="submit" name="submit" class="submit btn btn-success" value="Submit" />
        </fieldset>
    </form>

</div>
<?php include('footer.php'); ?>