<?php
$problemStatementValue = "5G & 6G HACKATHON-2024 Idea Submission";
if (isset($_POST['problemStatementValue'])) {
  $problemStatementValue = $_POST['problemStatementValue'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Forms</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <link rel="stylesheet" href="./assets/css/application.css" />
</head>

<body>
  <header class="navbar navbar-expand-lg navbar-light bg-light p-0 sticky-top">
    <div class="container-fluid" id="home">
      <a class="navbar-brand" href="participant">
        <img src="./assets/images/Tcoe_logo.jpg" alt="Logo" width="80" height="50" />
      </a>

      <ul class="navbar-nav ms-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            <i class="bi bi-person-circle" style="font-size: 2rem"></i>
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
            <li><a class="dropdown-item" href="participant">Home</a></li>
            <li><a class="dropdown-item" href="profile">Profile</a></li>
            <li><a class="dropdown-item" href="applicantView">My Application</a></li>
            <li><a class="dropdown-item" href="logout">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </header>
  <div class="row g-0">
    <div class="col-sm-6 m-auto text-primary">
      <div class="container mt-5">
        <h4 class="text-black ms-2">Application:
          <?= $problemStatementValue ?>
        </h4>
        <div class="stepper-wrapper">
          <div class="stepper-item">
            <div class="step-counter">1</div>
            <div class="step-name">
              <a href="#applicant" class="nav-link active">Applicant Data</a>
            </div>
          </div>
          <div class="stepper-item">
            <div class="step-counter">2</div>
            <div class="step-name">
              <a href="#techincal" class="nav-link">Techinical data</a>
            </div>
          </div>
          <div class="stepper-item">
            <div class="step-counter">3</div>
            <div class="step-name">
              <a href="#document" class="nav-link">Document data</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div>
    <form action="applicant.php" method="post" enctype="multipart/form-data">
      <div class="row g-0" id="applicant">
        <div class="col-md-6 m-auto">
          <div class="container head mt-4">
            <h5 class="text-white p-2 text-center">Applicant Details</h5>
          </div>
          <div class="row justify-content">
            <div class="col">
              <div class="form-group mb-3">
                <label for="applicantName" class="p-2"><span style="color: red">*</span>Name</label>
                <input type="text" id="applicantName" name="applicantName" class="form-control" required />
              </div>
            </div>
          </div>
          <div class="row justify-content">
            <div class="col">
              <div class="form-group mb-3">
                <label for="organizationName" class="p-2"><span style="color: red">*</span>Organization
                  Name</label>
                <input type="text" id="organizationName" name="organizationName" class="form-control" required />
              </div>
            </div>
          </div>
          <div class="row justify-content">
            <div class="col">
              <div class="form-group mb-3">
                <label for="contactNumber" class="p-2"><span style="color: red">*</span>Contact Number
                </label>
                <input type="text" id="contactNumber" name="contactNumber" class="form-control" required />
              </div>
            </div>
          </div>
          <div class="row justify-content">
            <div class="col">
              <div class="form-group mb-3">
                <label for="email" class="p-2"><span style="color: red">*</span>Email</label>
                <input type="email" id="email" name="email" class="form-control" required />
              </div>
            </div>
          </div>
          <div class="row justify-content">
            <div class="col">
              <div class="form-group mb-3">
                <label for="city" class="p-2"><span style="color: red">*</span>City</label>
                <input type="text" id="city" name="city" class="form-control" required />
              </div>
            </div>
          </div>
          <div class="row justify-content">
            <div class="col">
              <div class="form-group mb-3">
                <label for="state" class="p-2"><span style="color: red">*</span>State</label>
                <select id="state" name="state" class="form-select" required>
                  <option value="" disabled selected>Select</option>
                  <option value="Andhra Pradesh">Andhra Pradesh</option>
                  <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                  <option value="Assam">Assam</option>
                  <option value="Bihar">Bihar</option>
                  <option value="Chhattisgarh">Chhattisgarh</option>
                  <option value="Goa">Goa</option>
                  <option value="Gujarat">Gujarat</option>
                  <option value="Haryana">Haryana</option>
                  <option value="Himachal Pradesh">Himachal Pradesh</option>
                  <option value="Jharkhand">Jharkhand</option>
                  <option value="Karnataka">Karnataka</option>
                  <option value="Kerala">Kerala</option>
                  <option value="Madhya Pradesh">Madhya Pradesh</option>
                  <option value="Maharashtra">Maharashtra</option>
                  <option value="Manipur">Manipur</option>
                  <option value="Meghalaya">Meghalaya</option>
                  <option value="Mizoram">Mizoram</option>
                  <option value="Nagaland">Nagaland</option>
                  <option value="Odisha">Odisha</option>
                  <option value="Punjab">Punjab</option>
                  <option value="Rajasthan">Rajasthan</option>
                  <option value="Sikkim">Sikkim</option>
                  <option value="Tamil Nadu">Tamil Nadu</option>
                  <option value="Telangana">Telangana</option>
                  <option value="Tripura">Tripura</option>
                  <option value="Uttar Pradesh">Uttar Pradesh</option>
                  <option value="Uttarakhand">Uttarakhand</option>
                  <option value="West Bengal">West Bengal</option>
                  <option disabled>-------------------</option>
                  <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                  <option value="Chandigarh">Chandigarh</option>
                  <option value="Dadra and Nagar Haveli and Daman and Diu">Dadra and Nagar Haveli and Daman and Diu</option>
                  <option value="Lakshadweep">Lakshadweep</option>
                  <option value="Delhi">Delhi (National Capital Territory)</option>
                  <option value="Puducherry">Puducherry</option>
                  <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                  <option value="Ladakh">Ladakh</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row justify-content">
            <div class="col">
              <div class="form-group mb-3">
                <label for="postalAddress" class="p-2"><span style="color: red">*</span>Postal
                  Address</label>
                <input type="text" id="postalAddress" name="postalAddress" class="form-control" required />
              </div>
            </div>
          </div>
          <div class="row justify-content">
            <div class="col">
              <div class="form-group mb-3">
                <label for="applying" class="p-2">Applying as</label>
                <select class="form-select" id="applying" name="applying" required>
                  <option value="" disabled selected>Select</option>
                  <option value="Student">Student</option>
                  <option value="Startup">Startup</option>
                  <option value="Academia">Academia</option>
                  <option value="Individual/Team">
                    Individual/Team
                  </option>
                </select>
              </div>
            </div>
          </div>
          <div class="row justify-content">
            <div class="col">
              <div class="form-group mb-3">
                <label for="industry" class="p-2">Industry Vertical</label>
                <select class="form-select" id="industry" name="industry" required>
                  <option value="" disabled selected>Select</option>
                  <option value="AgriTech & Livestock">AgriTech & Livestock</option>
                  <option value="Healthcare, Education & Governance">
                    Healthcare, Education & Governance
                  </option>
                  <option value="Environment, Public Safety & Disaster Management">
                    Environment, Public Safety & Disaster Management
                  </option>
                  <option value="Enterprise transformation, Industry 4.0">
                    Enterprise transformation, Industry 4.0
                  </option>
                  <option value="Smart Cities & Infrastructure">
                    Smart Cities & Infrastructure
                  </option>
                  <option value="Cyber Security">Cyber Security</option>
                  <option value="Banking, Finance & Insurance">Banking, Finance & Insurance</option>
                  <option value="Logistics & Transportation">Logistics & Transportation</option>
                  <option value="Multimedia & Broadcast">Multimedia & Broadcast</option>
                  <option value="Satellite">Satellite</option>
                  <option value="Others">Others</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row justify-content" id="othersindustry" style="display: none;">
            <div class="col">
              <div class="form-group mb-3">
                <label for="otherindustry" class="p-2">Other Industry Vertical</label>
                <input type="text" id="otherindustry" name="otherindustry" class="form-control" />
              </div>
            </div>
          </div>
          <div class="row justify-content" style="display: none;">
            <div class="col">
              <div class="form-group mb-3">
                <label for="problemsStatement" class="p-2"><span style="color: red">*</span>Problem Statement</label>
                <input type="text" id="problemsStatement" name="problemsStatement" class="form-control" value="<?= $problemStatementValue ?>" required readonly />
              </div>
            </div>
          </div>
          <?php
          if ($problemStatementValue === "Suo Moto") {
          ?>
            <div class="row justify-content">
              <div class="col">
                <div class="form-group mb-3">
                  <label for="applicationVerticals" class="p-2">Please select your Application Verticals</label>
                  <select class="form-select" id="applicationVerticals" name="applicationVerticals">
                    <option value="" disabled selected>Select</option>
                    <option value="Automobile/ Transport/Logistics">Automobile/ Transport/Logistics</option>
                    <option value="Industry 4.0">Industry 4.0</option>
                    <option value="Tourism">Tourism</option>
                    <option value="Enterprise & Emergency Communication">Enterprise & Emergency Communication</option>
                    <option value="Smart Cities">Smart Cities</option>
                    <option value="Railways">Railways</option>
                    <option value="Mining/ Ports/ Airports">Mining/ Ports/ Airports</option>
                    <option value="Power">Power</option>
                    <option value="Rural & Remote Communication">Rural & Remote Communication</option>
                    <option value="FinTech">FinTech</option>
                    <option value="Water Management">Water Management</option>
                    <option value="Sports">Sports</option>
                    <option value="Cyber Security, Quantum communications and security">Cyber Security, Quantum communications and security</option>
                    <option value="Environment, Public Safety & Disaster Management">Environment, Public Safety & Disaster Management</option>
                  </select>
                </div>
              </div>
            </div>
          <?php
          }
          ?>
          <div class="row justify-content">
            <div class="col">
              <div class="form-group mb-3">
                <label for="website" class="p-2"><span style="color: red">*</span>Website</label>
                <input type="text" id="website" name="website" class="form-control" required />
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
  </div>
  </div>
  <div class="row g-0" id="techincal">
    <div class="col-md-6 m-auto">
      <div class="container">

        <div class=" text-center head">
          <h5 class="text-white p-2 text-center">Techinical Datails</h5>
        </div>

        <div class="row justify-content">
          <div class="col">
            <div class="form-group mb-3">
              <label for="domain" class="p-2">Domain/Thrust Area</label>
              <input type="text" id="domain" name="domain" class="form-control" required />
            </div>
          </div>
        </div>
        <div class="row justify-content">
          <div class="col">
            <div class="form-group mb-3">
              <label for="product" class="p-2">Brief about your product/solution</label>
              <textarea id="product" name="product" class="form-control" required></textarea>
            </div>
          </div>
        </div>
        <div class="row justify-content">
          <div class="col">
            <div class="form-group mb-3">
              <label for="productFile" class="p-2"><span style="color: red">*</span>Upload the note on
                Technical Details or Product/Solution
              </label>
              <input type="file" id="productFile" name="productFile" class="form-control" required />
            </div>
          </div>
        </div>
        <div class="row justify-content">
          <div class="col">
            <div class="form-group mb-3">
              <label for="presentationVideo" class="p-2"><span style="color: red">*</span>Please provide the
                Power Point Presentation /two-minute product
                video</label>
              <input type="file" id="presentationVideo" name="presentationVideo" class="form-control" required />
            </div>
          </div>
        </div>
        <div class="row justify-content">
          <div class="col">
            <div class="form-group mb-3">
              <label for="technologyLevel" class="p-2"><span style="color: red">*</span>Stage Of Product
                based on minimum Technology Readiness Level</label>
              <select class="form-select" id="industry" name="industry" required>
                <option value="" disabled selected>Select</option>
                <option value="TRL9 Operations">TRL9 Operations</option>
                <option value="TRL8 Active Commissioning">TRL8 Active Commissioning</option>
                <option value="TRL7 Inactive Commissioning">TRL7 Inactive Commissioning</option>
                <option value="RL6 Large Scale">
                  TRL6 Large Scale
                </option>
                <option value="TRL5 Pilot Scale">
                  TRL5 Pilot Scale
                </option>
                <option value="TRL4 Bench Scale Research">TRL4 Bench Scale Research</option>
                <option value="TRL3 Proof of Concept">TRL3 Proof of Concept</option>
              </select>
            </div>
          </div>
        </div>
        <div class="row justify-content">
          <div class="col">
            <div class="form-group mb-3">
              <label for="proofPoC" class="p-2"><span style="color: red">*</span>Proof for PoC
                (Video, Picture etc)</label>
              <input type="file" id="proofPoC" name="proofPoC" class="form-control" required />
            </div>
          </div>
        </div>
        <div class="row justify-content">
          <div class="col">
            <div class="form-group mb-3">
              <label for="describeProduct" class="p-2"><span style="color: red">*</span>Describe how your
                solution or products classifies as a 5G and Beyond
                usecase. What are the challenges faced from
                connectivity solutions over 3G/4G</label>
              <textarea id="describeProduct" name="describeProduct" class="form-control" required></textarea>
            </div>
          </div>
        </div>
        <div class="row justify-content">
          <div class="col">
            <div class="form-group mb-3">
              <label for="productPatent" class="p-2"><span style="color: red">*</span>Have you filed a
                patent for your product/solution</label>
              <input type="radio" id="productPatent1" name="productPatent" value="Yes" checked />Yes
              <input type="radio" id="productPatent2" name="productPatent" value="No" />No
            </div>
          </div>
        </div>
        <div class="row justify-content" id="productPatentId" style="display: block;">
          <div class="col">
            <div class="form-group mb-3">
              <label for="patentDetails" class="p-2">If yes, please provide details</label>
              <textarea id="patentDetails" name="patentDetails" class="form-control"></textarea>
            </div>
          </div>
        </div>
        <div class="row justify-content">
          <div class="col">
            <div class="form-group mb-3">
              <label for="similarProduct" class="p-2"><span style="color: red">*</span>Is there any similar
                product/ solution available in the market w.r.t your
                solution?</label>
              <br>
              <input type="radio" id="similarProduct1" name="similarProduct" value="Yes" checked />Yes
              <input type="radio" id="similarProduct2" name="similarProduct" value="No" />No
            </div>
          </div>
        </div>
        <div class="row justify-content" id="similarProductId" style="display: block;">
          <div class="col">
            <div class="form-group mb-3">
              <label for="similarProductFile" class="p-2">If yes, does your
                proposed product have advantage over other existing
                solutions</label>
              <input type="File" id="similarProductFile" name="similarProductFile" class="form-control" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  <div class="row g-0" id="document">
    <div class="col-md-6 m-auto">
      <div class="container">

        <div class=" text-center head">
          <h5 class="text-white p-2">Document Details</h5>
        </div>

        <div class="row justify-content">
          <div class="col">
            <div class="form-group mb-3">
              <label for="shareholding" class="p-2"><span style="color: red">*</span>51% shareholding by
                Indian citizen or Indian Entity (In case of
                Startups)</label>
              <input type="file" id="shareholding" name="shareholding" class="form-control" required />
            </div>
          </div>
        </div>
        <div class="row justify-content">
          <div class="col">
            <div class="form-group mb-3">
              <label for="incorporation" class="p-2"><span style="color: red">*</span>Incorporation
                Certificate (in case of Startups)</label>
              <input type="file" id="incorporation" name="incorporation" class="form-control" required />
            </div>
          </div>
        </div>
        <div class="row justify-content">
          <div class="col">
            <div class="form-group mb-3">
              <label for="idProof" class="p-2"><span style="color: red">*</span>ID Proof/ passport
                of Applicant</label>
              <input type="file" id="idProof" name="idProof" class="form-control" required />
            </div>
          </div>
        </div>

        <div class="pb-5 mb-4">
          <input type="checkbox" name="declaration" id="declaration" />
          <span style="color: red">*</span>I declare that all the information given by me in this
          application and documents attached hereto are true to the
          best of my knowledge and that I have not willfully
          suppressed any material fact. I accept that if any of the
          information given by me in this application is in any way
          false or incorrect, my application may be rejected, any
          offer of the grant may be withdrawn or my candidature may be
          rejected at any time. I agree to adhere and comply to terms
          and condition given above
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  <div class="mt-4 button-section bg-light">
    <button type="reset" class="save-btn btn m-2">Reset</button>
    <button type="submit" class="submit-btn btn m-2">Submit</button>
  </div>
  </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"></script>
</body>

</html>
<script>
  // Get references to the radio buttons and the text field container
  var productPatent1 = document.getElementById('productPatent1');
  var productPatent2 = document.getElementById('productPatent2');
  var productPatentId = document.getElementById('productPatentId');

  // Add event listeners to the radio buttons
  productPatent1.addEventListener('change', function() {
    if (productPatent1.checked) {
      productPatentId.style.display = 'block'; // Show the text field
    }
  });

  productPatent2.addEventListener('change', function() {
    if (productPatent2.checked) {
      productPatentId.style.display = 'none'; // Hide the text field
    }
  });

  // Get references to the radio buttons and the text field container
  var similarProduct1 = document.getElementById('similarProduct1');
  var similarProduct2 = document.getElementById('similarProduct2');
  var similarProductId = document.getElementById('similarProductId');

  // Add event listeners to the radio buttons
  similarProduct1.addEventListener('change', function() {
    if (similarProduct1.checked) {
      similarProductId.style.display = 'block'; // Show the text field
    }
  });

  similarProduct2.addEventListener('change', function() {
    if (similarProduct2.checked) {
      similarProductId.style.display = 'none'; // Hide the text field
    }
  });

  var industry = document.getElementById('industry');
  var othersindustry = document.getElementById('othersindustry');
  industry.addEventListener('change', function() {
    if (industry.value === 'Others') {
      othersindustry.style.display = 'block'; // Show the text field
    } else {
      othersindustry.style.display = 'none';
    }
  });
</script>