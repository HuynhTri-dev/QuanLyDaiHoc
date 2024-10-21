window.onload = getInfo;

function getInfo() {
  const xhr = new XMLHttpRequest();
  xhr.open("GET", "../../assets/php/sinhVienPage.php", true);
  xhr.onload = function () {
    if (xhr.status == 200) {
      var sinhvien = JSON.parse(xhr.responseText);
      var output =
        "<table><tr class='student-list__student-table__title'><th>Mã sinh viên</th><th>Họ tên</th><th>Giới tính</th><th>Ngày sinh</th><th>Quê quán</th><th>Khoa</th><th>Ngành học</th><th>Số điện thoại</th></tr>";

      for (var i = 0; i < sinhvien.length; i++) {
        var gioiTinh = sinhvien[i].Phai == 0 ? "Nam" : "Nữ";

        output +=
          "<tr><td>" +
          sinhvien[i].MaSV +
          "</td><td>" +
          sinhvien[i].HoTen +
          "</td><td>" +
          gioiTinh +
          "</td><td>" +
          sinhvien[i].NgaySinh +
          "</td><td>" +
          sinhvien[i].QueQuan +
          "</td><td>" +
          sinhvien[i].Khoa +
          "</td><td>" +
          sinhvien[i].Nganh +
          "</td><td>" +
          sinhvien[i].SDT +
          "</td></tr>";
      }

      output += "</table>";
      document.getElementById("student-table").innerHTML = output;
    } else {
      console.log("Loi ket noi");
    }
  };
  xhr.send();
}
