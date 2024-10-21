const openForm = document.getElementById("open");
const infoForm = document.getElementsByClassName("info-form");

openForm.addEventListener("click", () => {
  if (infoForm[0].style.display === "none") {
    infoForm[0].style.display = "block";
  } else {
    infoForm[0].style.display = "none";
  }
});

const closeForm = document.getElementById("close");

closeForm.addEventListener("click", () => {
  if (infoForm[0].style.display === "block") {
    infoForm[0].style.display = "none";
  }
});

const delectButton = document.getElementById("delect");
const delectForm = document.getElementById("delectForm");
delectButton.addEventListener("click", () => {
  if (delectForm.style.display === "none") {
    delectForm.style.display = "block";
  } else {
    delectForm.style.display = "none";
  }
});
