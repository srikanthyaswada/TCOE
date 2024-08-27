// productPatent1
var productPatent1 = document.getElementById("productPatent1");
var productPatent2 = document.getElementById("productPatent2");
var productPatentId = document.getElementById("productPatentId");
productPatent1.addEventListener("change", function () {
  if (productPatent1.checked) {
    productPatentId.style.display = "block";
  }
});
productPatent2.addEventListener("change", function () {
  if (productPatent2.checked) {
    productPatentId.style.display = "none";
  }
});

// similarProduct1
var similarProduct1 = document.getElementById("similarProduct1");
var similarProduct2 = document.getElementById("similarProduct2");
var similarProductId = document.getElementById("similarProductId");
similarProduct1.addEventListener("change", function () {
  if (similarProduct1.checked) {
    similarProductId.style.display = "block";
  }
});
similarProduct2.addEventListener("change", function () {
  if (similarProduct2.checked) {
    similarProductId.style.display = "none";
  }
});

// industry
var industry = document.getElementById("industry");
var othersindustry = document.getElementById("othersindustry");
industry.addEventListener("change", function () {
  if (industry.value === "Others") {
    othersindustry.style.display = "block";
  } else {
    othersindustry.style.display = "none";
  }
});

// productFile
var productFile = document.getElementById("productFile");
productFile.addEventListener("change", function () {
  var file1 = productFile.files[0];
  var allowedTypes1 = [
    "application/pdf",
    "application/msword",
    "application/vnd.openxmlformats-officedocument.wordprocessingml.document",
  ];
  var maxSize1 = 10 * 1024 * 1024;
  if (file1) {
    if (!allowedTypes1.includes(file1.type)) {
      alert("Only PDF and Word documents are allowed.");
      document.getElementById("productFile").value = "";
    }
    if (file1.size > maxSize1) {
      alert("File size must be less than 10MB.");
      document.getElementById("productFile").value = "";
    }
  } else {
    alert("Please select a file.");
  }
});

// presentationVideo
var presentationVideo = document.getElementById("presentationVideo");
presentationVideo.addEventListener("change", function () {
  var file2 = presentationVideo.files[0];
  var allowedTypes2 = [
    "application/pdf",
    "video/mp4",
    "application/vnd.ms-powerpoint",
    "application/vnd.openxmlformats-officedocument.presentationml.presentation",
  ];
  var maxSize2 = 10 * 1024 * 1024;
  if (file2) {
    if (!allowedTypes2.includes(file2.type)) {
      alert("Only PDF ,MP4, and PPT are allowed.");
      document.getElementById("presentationVideo").value = "";
    }
    if (file2.size > maxSize2) {
      alert("File size must be less than 10MB.");
      document.getElementById("presentationVideo").value = "";
    }
  } else {
    alert("Please select a file.");
  }
});

// proofPoC
var proofPoC = document.getElementById("proofPoC");
proofPoC.addEventListener("change", function () {
  var file3 = proofPoC.files[0];
  var allowedTypes3 = [
    "application/pdf",
    "video/mp4",
    "image/jpeg",
    "image/png",
  ];
  var maxSize3 = 10 * 1024 * 1024;
  if (file3) {
    if (!allowedTypes3.includes(file3.type)) {
      alert("Only PDF ,MP4, JPG, JPEG, and PNG are allowed.");
      document.getElementById("proofPoC").value = "";
    }
    if (file3.size > maxSize3) {
      alert("File size must be less than 10MB.");
      document.getElementById("proofPoC").value = "";
    }
  } else {
    alert("Please select a file.");
  }
});

// similarProductFile
var similarProductFile = document.getElementById("similarProductFile");
similarProductFile.addEventListener("change", function () {
  var file4 = similarProductFile.files[0];
  var allowedTypes4 = [
    "application/pdf",
    "application/vnd.ms-powerpoint",
    "application/vnd.openxmlformats-officedocument.presentationml.presentation",
  ];
  var maxSize4 = 10 * 1024 * 1024;
  if (file4) {
    if (!allowedTypes4.includes(file4.type)) {
      alert("Only PDF and PPT are allowed.");
      document.getElementById("similarProductFile").value = "";
    }
    if (file4.size > maxSize4) {
      alert("File size must be less than 10MB.");
      document.getElementById("similarProductFile").value = "";
    }
  } else {
    alert("Please select a file.");
  }
});

// shareholding
var shareholding = document.getElementById("shareholding");
shareholding.addEventListener("change", function () {
  var file5 = shareholding.files[0];
  var allowedTypes5 = ["application/pdf"];
  var maxSize5 = 10 * 1024 * 1024;
  if (file5) {
    if (!allowedTypes5.includes(file5.type)) {
      alert("Only PDF are allowed.");
      document.getElementById("shareholding").value = "";
    }
    if (file5.size > maxSize5) {
      alert("File size must be less than 10MB.");
      document.getElementById("shareholding").value = "";
    }
  } else {
    alert("Please select a file.");
  }
});

// incorporation
var incorporation = document.getElementById("incorporation");
incorporation.addEventListener("change", function () {
  var file6 = incorporation.files[0];
  var allowedTypes6 = ["application/pdf"];
  var maxSize6 = 10 * 1024 * 1024;
  if (file6) {
    if (!allowedTypes6.includes(file6.type)) {
      alert("Only PDF are allowed.");
      document.getElementById("incorporation").value = "";
    }
    if (file6.size > maxSize6) {
      alert("File size must be less than 10MB.");
      document.getElementById("incorporation").value = "";
    }
  } else {
    alert("Please select a file.");
  }
});

// idProof
var idProof = document.getElementById("idProof");
idProof.addEventListener("change", function () {
  var file7 = idProof.files[0];
  var allowedTypes7 = ["application/pdf"];
  var maxSize7 = 10 * 1024 * 1024;
  if (file7) {
    if (!allowedTypes7.includes(file7.type)) {
      alert("Only PDF are allowed.");
      document.getElementById("idProof").value = "";
    }
    if (file7.size > maxSize7) {
      alert("File size must be less than 10MB.");
      document.getElementById("idProof").value = "";
    }
  } else {
    alert("Please select a file.");
  }
});
