function downloadForm() {
    // Get the HTML form element
    var formElement = document.getElementById("myForm");

    // Create an instance of html2pdf
    var opt = {
      margin: 1,
      filename: "form_data.pdf",
      image: { type: "jpeg", quality: 0.98 },
      html2canvas: { scale: 2 },
      jsPDF: { unit: "in", format: "letter", orientation: "portrait" },
    };

    html2pdf().set(opt).from(formElement).save();
  }