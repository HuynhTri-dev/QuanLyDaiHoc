window.onload = getInfo;

function getInfo() {
  const xhr = new XMLHttpRequest();
  xhr.open("GET", "../../assets/php/monHocPage.php", true);
  console.log(xhr);
  xhr.onload = function () {
    if (xhr.status == 200) {
      var monHoc = JSON.parse(xhr.responseText);
      var output =
        "<table><tr class='student-list__student-table__title'><th>Mã môn học</th><th>Tên môn học</th><th>Tiết học</th><th>Số tín chỉ</th></tr>";

      for (var i = 0; i < monHoc.length; i++) {
        output +=
          "<tr><td>" +
          monHoc[i].MaMH +
          "</td><td>" +
          monHoc[i].TenMH +
          "</td><td>" +
          monHoc[i].TietHoc +
          "</td><td>" +
          monHoc[i].SoTinChi +
          "</td></tr>";
      }

      output += "</table>";
      document.getElementById("subject-table").innerHTML = output;
    } else {
      console.log("Loi ket noi");
    }
  };
  xhr.send();
}
