// productPatent1
var productPatentYes = document.getElementById("productPatentYes");
var productPatentNo = document.getElementById("productPatentNo");
var patentDetailsId = document.getElementById("patentDetailsId");
productPatentYes.addEventListener("change", function () {
  if (productPatentYes.checked) {
    patentDetailsId.style.display = "block";
  }
});
productPatentNo.addEventListener("change", function () {
  if (productPatentNo.checked) {
    patentDetailsId.style.display = "none";
  }
});

// similarProduct1
var similarProductYes = document.getElementById("similarProductYes");
var similarProductNo = document.getElementById("similarProductNo");
var similarProductFileId = document.getElementById("similarProductFileId");
similarProductYes.addEventListener("change", function () {
  if (similarProductYes.checked) {
    similarProductFileId.style.display = "block";
  }
});
similarProductNo.addEventListener("change", function () {
  if (similarProductNo.checked) {
    similarProductFileId.style.display = "none";
  }
});

// industry
var industry = document.getElementById("industry");
var otherindustryId = document.getElementById("otherindustryId");
industry.addEventListener("change", function () {
  if (industry.value === "Others") {
    otherindustryId.style.display = "block";
  } else {
    otherindustryId.style.display = "none";
  }
});

// Form Submit validation
function validateForm() {
  let valid = true;
  document.querySelectorAll(".error").forEach((e) => (e.innerText = ""));

  // Validate Required Fields
  const requiredFields = [
    "applicantName",
    "organizationName",
    "contactNumber",
    "email",
    "city",
    "state",
    "postalAddress",
    "applying",
    "industry",
    "problemsStatement",
  ];

  requiredFields.forEach((field) => {
    const value = document.forms["applicationForm"][field].value.trim();
    if (!value) {
      document.getElementById(field + "Error").innerText =
        "This field is required";
      valid = false;
    }
  });

  // Email Validation
  const email = document.forms["applicationForm"]["email"].value.trim();
  const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
  if (!emailPattern.test(email)) {
    document.getElementById("emailError").innerText =
      "Please enter a valid email address";
    valid = false;
  }

  // Phone Number Validation
  const contactNumber =
    document.forms["applicationForm"]["contactNumber"].value.trim();
  const phonePattern = /^[6-9]\d{9}$/;
  if (!phonePattern.test(contactNumber)) {
    document.getElementById("contactNumberError").innerText =
      "Please enter a valid 10-digit phone number";
    valid = false;
  }

  const urlPattern = /^(https:\/\/|www\.)[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
  const website = document.forms["applicationForm"]["website"].value.trim();
  if (website && !urlPattern.test(website)) {
    document.getElementById("websiteError").innerText =
      "Please enter a valid URL starting with www or https";
    valid = false;
  }

  const urlPattern1 = /^(https:\/\/www\.youtube\.com\/watch\?v=|https:\/\/youtu\.be\/)[a-zA-Z0-9_-]{11}$/;
  const presentationVideo = document.forms["applicationForm"]["presentationVideo"].value.trim();
  if (presentationVideo && !urlPattern1.test(presentationVideo)) {
    document.getElementById("presentationVideoError").innerText =
      "Please enter a valid YouTube URL starting with www or https";
    valid = false;
  }

  // File Type Validation
  const fileInputs = {
    productFile: ["pdf", "doc", "docx"],
    proofPoC: ["jpg", "jpeg", "png"],
    shareholding: ["pdf"],
    incorporation: ["pdf"],
    idProof: ["pdf"],
    similarProductFile: ["pdf", "ppt", "pptx"],
  };
  const maxSizeMB = 10;

  for (let key in fileInputs) {
    const fileInput = document.forms["applicationForm"][key];
    if (fileInput && fileInput.files.length > 0) {
      const file = fileInput.files[0];
      const fileExtension = file.name.split(".").pop().toLowerCase();
      const fileSizeMB = file.size / 1024 / 1024; // Convert file size to MB

      // Check file type
      if (!fileInputs[key].includes(fileExtension)) {
        document.getElementById(key + "Error").innerText =
          "Invalid file type. Allowed types: " + fileInputs[key].join(", ");
        valid = false;
      }

      // Check file size
      if (fileSizeMB > maxSizeMB) {
        document.getElementById(key + "Error").innerText =
          "File size exceeds 10MB. Please upload a smaller file.";
        valid = false;
      }
    }
  }

  const declarationCheckbox = document.forms["applicationForm"]["declaration"];
  const declarationError = document.getElementById("declarationError");
  if (!declarationCheckbox.checked) {
    declarationError.innerText = "You must agree to the declaration.";
    valid = false;
  } else {
    declarationError.innerText = "";
  }

  return valid;
}
