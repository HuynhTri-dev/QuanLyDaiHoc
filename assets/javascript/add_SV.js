const okButton = document.getElementById("ok-button");

okButton.addEventListener("click", () => {
  const formData = new FormData(document.getElementById("myForm"));
  const xhr = new XMLHttpRequest();
  xhr.open("POST", "../../assets/php/sinhVienPage.php", true);
  // console.log(xhr);
  xhr.send(formData);
  // for (const [key, value] of formData.entries()) {
  //   console.log(`Khóa: ${key}, Giá trị: ${value}`);
  // }
});

const okAddButton = document.getElementById("ok-add");

okAddButton.addEventListener("click", () => {
  const formData = new FormData(document.getElementById("myForm"));
  const xhr = new XMLHttpRequest();
  xhr.open("POST", "../../assets/php/sinhVienPage.php", true);
  // console.log(xhr);
  xhr.send(formData);
  document.getElementById("myForm").reset();
});
