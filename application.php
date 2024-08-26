<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Forms</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
    rel="stylesheet" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap"
    rel="stylesheet" />
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
    rel="stylesheet" />
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
    rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/application.css" />
</head>

<body>
  <header
    class="navbar navbar-expand-lg navbar-light bg-light p-0 sticky-top">
    <div class="container-fluid" id="home">
      <a class="navbar-brand" href="#home">
        <img
          src="./assets/images/Tcoe_logo.jpg"
          alt="Logo"
          width="80"
          height="50" />
      </a>

      <ul class="navbar-nav ms-auto">
        <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle"
            href="#"
            id="profileDropdown"
            role="button"
            data-bs-toggle="dropdown"
            aria-expanded="false">
            <i class="bi bi-person-circle" style="font-size: 2rem"></i>
          </a>
          <ul
            class="dropdown-menu dropdown-menu-end"
            aria-labelledby="profileDropdown">
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
        <div class="text-center">
          <h4>Application: 5G & 6G HACKATHON-2024 Idea Submission</h4>
        </div>
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
          <div class="container mt-4">
            <div class="card">
              <div class="card-header">
                <h5 class="text">Applicant Details</h5>
              </div>
              <div class="card-body">
                <div class="row justify-content">
                  <div class="col">
                    <div class="form-group mb-3">
                      <label for="applicantName" class="p-2"><span style="color: red">*</span>Name</label>
                      <input
                        type="text"
                        id="applicantName"
                        name="applicantName"
                        class="form-control"
                        required />
                    </div>
                  </div>
                </div>
                <div class="row justify-content">
                  <div class="col">
                    <div class="form-group mb-3">
                      <label for="organizationName" class="p-2"><span style="color: red">*</span>Organization
                        Name</label>
                      <input
                        type="text"
                        id="organizationName"
                        name="organizationName"
                        class="form-control"
                        required />
                    </div>
                  </div>
                </div>
                <div class="row justify-content">
                  <div class="col">
                    <div class="form-group mb-3">
                      <label for="contactNumber" class="p-2"><span style="color: red">*</span>Contact Number
                      </label>
                      <input
                        type="text"
                        id="contactNumber"
                        name="contactNumber"
                        class="form-control"
                        required />
                    </div>
                  </div>
                </div>
                <div class="row justify-content">
                  <div class="col">
                    <div class="form-group mb-3">
                      <label for="email" class="p-2"><span style="color: red">*</span>Email</label>
                      <input
                        type="email"
                        id="email"
                        name="email"
                        class="form-control"
                        required />
                    </div>
                  </div>
                </div>
                <div class="row justify-content">
                  <div class="col">
                    <div class="form-group mb-3">
                      <label for="city" class="p-2"><span style="color: red">*</span>City</label>
                      <input
                        type="text"
                        id="city"
                        name="city"
                        class="form-control"
                        required />
                    </div>
                  </div>
                </div>
                <div class="row justify-content">
                  <div class="col">
                    <div class="form-group mb-3">
                      <label for="state" class="p-2"><span style="color: red">*</span>State</label>
                      <input
                        type="text"
                        id="state"
                        name="state"
                        class="form-control"
                        required />
                    </div>
                  </div>
                </div>
                <div class="row justify-content">
                  <div class="col">
                    <div class="form-group mb-3">
                      <label for="postalAddress" class="p-2"><span style="color: red">*</span>Postal
                        Address</label>
                      <input
                        type="text"
                        id="postalAddress"
                        name="postalAddress"
                        class="form-control"
                        required />
                    </div>
                  </div>
                </div>
                <div class="row justify-content">
                  <div class="col">
                    <div class="form-group mb-3">
                      <label for="applying" class="p-2">Applying as</label>
                      <select
                        class="form-select"
                        id="applying"
                        name="applying"
                        required>
                        <option value="" disabled selected>Select</option>
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
                      <select
                        class="form-select"
                        id="industry"
                        name="industry"
                        required>
                        <option value="" disabled selected>Select</option>
                        <option value="">AgriTech & Livestock</option>
                        <option value="">
                          Healthcare, Education & Governance
                        </option>
                        <option value="Startup">
                          Environment, Public Safety & Disaster Management
                        </option>
                        <option value="">
                          Enterprise transformation, Industry 4.0
                        </option>
                        <option value="">
                          Smart Cities & Infrastructure
                        </option>
                        <option value="">Cyber Security</option>
                        <option value="">Banking, Finance & Insurance</option>
                        <option value="">Logistics & Transportation</option>
                        <option value="">Multimedia & Broadcast</option>
                        <option value="">Satellite</option>
                        <option value="">Others- Annexure</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row justify-content">
                  <div class="col">
                    <div class="form-group mb-3">
                      <label for="website" class="p-2"><span style="color: red">*</span>Website</label>
                      <input
                        type="text"
                        id="website"
                        name="website"
                        class="form-control"
                        required />
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
            <div class="card">
              <div class="card-header text-center">
                <h5>Techinical Datails</h5>
              </div>
              <div class="card-body">
                <div class="row justify-content">
                  <div class="col">
                    <div class="form-group mb-3">
                      <label for="domain" class="p-2">Domain/Thrust Area</label>
                      <input
                        type="text"
                        id="domain"
                        name="domain"
                        class="form-control"
                        required />
                    </div>
                  </div>
                </div>
                <div class="row justify-content">
                  <div class="col">
                    <div class="form-group mb-3">
                      <label for="product" class="p-2">Brief about your product/solution</label>
                      <textarea
                        id="product"
                        name="product"
                        class="form-control"
                        required></textarea>
                    </div>
                  </div>
                </div>
                <div class="row justify-content">
                  <div class="col">
                    <div class="form-group mb-3">
                      <label for="productFile" class="p-2"><span style="color: red">*</span>Upload the note on
                        Technical Details or Product/Solution
                      </label>
                      <input
                        type="file"
                        id="productFile"
                        name="productFile"
                        class="form-control"
                        required />
                    </div>
                  </div>
                </div>
                <div class="row justify-content">
                  <div class="col">
                    <div class="form-group mb-3">
                      <label for="presentationVideo" class="p-2"><span style="color: red">*</span>Please provide the
                        Power Point Presentation /two-minute product
                        video</label>
                      <input
                        type="file"
                        id="presentationVideo"
                        name="presentationVideo"
                        class="form-control"
                        required />
                    </div>
                  </div>
                </div>
                <div class="row justify-content">
                  <div class="col">
                    <div class="form-group mb-3">
                      <label for="technologyLevel" class="p-2"><span style="color: red">*</span>Stage Of Product
                        based on minimum Technology Readiness Level</label>
                      <select
                        class="form-select"
                        id="industry"
                        name="industry"
                        required>
                        <option value="" disabled selected>Select</option>
                        <option value="">TRL9 Operations</option>
                        <option value="">TRL8 Active Commissioning</option>
                        <option value="">TRL7 Inactive Commissioning</option>
                        <option value="RL6 Large Scale">
                          TRL6 Large Scale
                        </option>
                        <option value="RL6 Pilot Scale">
                          TRL5 Pilot Scale
                        </option>
                        <option value="">TRL4 Bench Scale Research</option>
                        <option value="">TRL3 Proof of Concept</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row justify-content">
                  <div class="col">
                    <div class="form-group mb-3">
                      <label for="proofPoC" class="p-2"><span style="color: red">*</span>Proof for PoC
                        (Video, Picture etc)</label>
                      <input
                        type="file"
                        id="proofPoC"
                        name="proofPoC"
                        class="form-control"
                        required />
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
                      <textarea
                        id="describeProduct"
                        name="describeProduct"
                        class="form-control"
                        required></textarea>
                    </div>
                  </div>
                </div>
                <div class="row justify-content">
                  <div class="col">
                    <div class="form-group mb-3">
                      <label for="productPatent" class="p-2"><span style="color: red">*</span>Have you filed a
                        patent for your product/solution</label>
                      <input
                        type="radio"
                        id="productPatent1"
                        name="productPatent"
                        value="Yes"
                        checked />Yes
                      <input
                        type="radio"
                        id="productPatent2"
                        name="productPatent"
                        value="No" />No
                    </div>
                  </div>
                </div>
                <div class="row justify-content">
                  <div class="col">
                    <div class="form-group mb-3">
                      <label for="patentDetails" class="p-2">If yes, please provide details</label>
                      <textarea
                        id="patentDetails"
                        name="patentDetails"
                        class="form-control"
                        required></textarea>
                    </div>
                  </div>
                </div>
                <div class="row justify-content">
                  <div class="col">
                    <div class="form-group mb-3">
                      <label for="similarProduct" class="p-2"><span style="color: red">*</span>Is there any similar
                        product/ solution available in the market w.r.t your
                        solution?</label>
                      <input
                        type="radio"
                        id="similarProduct"
                        name="similarProduct"
                        value="Yes" checked />Yes
                      <input
                        type="radio"
                        id="similarProduct"
                        name="similarProduct"
                        value="No" />No
                    </div>
                  </div>
                </div>
                <div class="row justify-content">
                  <div class="col">
                    <div class="form-group mb-3">
                      <label for="similarProductFile" class="p-2"><span style="color: red">*</span>If yes, does your
                        proposed product have advantage over other existing
                        solutions</label>
                      <input
                        type="File"
                        id="similarProductFile"
                        name="similarProductFile"
                        class="form-control"
                        required />
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
            <div class="card">
              <div class="card-header text-center">
                <h5>Document Details</h5>
              </div>
              <div class="card-body">
                <div class="row justify-content">
                  <div class="col">
                    <div class="form-group mb-3">
                      <label for="shareholding" class="p-2"><span style="color: red">*</span>51% shareholding by
                        Indian citizen or Indian Entity (In case of
                        Startups)</label>
                      <input
                        type="file"
                        id="shareholding"
                        name="shareholding"
                        class="form-control"
                        required />
                    </div>
                  </div>
                </div>
                <div class="row justify-content">
                  <div class="col">
                    <div class="form-group mb-3">
                      <label for="incorporation" class="p-2"><span style="color: red">*</span>Incorporation
                        Certificate (in case of Startups)</label>
                      <input
                        type="file"
                        id="incorporation"
                        name="incorporation"
                        class="form-control"
                        required />
                    </div>
                  </div>
                </div>
                <div class="row justify-content">
                  <div class="col">
                    <div class="form-group mb-3">
                      <label for="idProof" class="p-2"><span style="color: red">*</span>ID Proof/ passport
                        of Applicant</label>
                      <input
                        type="file"
                        id="idProof"
                        name="idProof"
                        class="form-control"
                        required />
                    </div>
                  </div>
                </div>

                <div>
                  <input
                    type="checkbox"
                    name="declaration"
                    id="declaration" />
                  *I declare that all the information given by me in this
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
      <div class="mt-4 button-section">
        <button type="reset" class="save-btn btn m-2">Reset</button>
        <button type="submit" class="submit-btn btn m-2">Submit</button>
      </div>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"></script>
</body>

</html>