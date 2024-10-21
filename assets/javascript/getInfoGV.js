window.onload = getInfo;

function getInfo() {
  const xhr = new XMLHttpRequest();
  xhr.open("GET", "../../assets/php/giaoVienPage.php", true);
  console.log(xhr);
  xhr.onload = function () {
    if (xhr.status == 200) {
      var giaoVien = JSON.parse(xhr.responseText);
      var output =
        "<table><tr class='student-list__student-table__title'><th>Mã giáo viên</th><th>Họ tên</th><th>Ngày sinh</th><th>Khoa</th><th>Số điên thoại</th><th>Email</th></tr>";

      for (var i = 0; i < giaoVien.length; i++) {
        output +=
          "<tr><td>" +
          giaoVien[i].MaGV +
          "</td><td>" +
          giaoVien[i].HoTen +
          "</td><td>" +
          giaoVien[i].NgaySinh +
          "</td><td>" +
          giaoVien[i].Khoa +
          "</td><td>" +
          giaoVien[i].SDT +
          "</td><td>" +
          giaoVien[i].Email +
          "</td></tr>";
      }

      output += "</table>";
      document.getElementById("teacher-table").innerHTML = output;
    } else {
      console.log("Loi ket noi");
    }
  };
  xhr.send();
}
