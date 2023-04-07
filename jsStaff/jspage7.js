$(".btnsub").submit(function () {
  if ($(".q36:checked").length == "") {
    alert("36.โดยรวมแล้วท่านสนใจในการแสวงหาความรู้ใหม่ ๆ ");
    $("#checkq36-1").focus();
    return false;
  }

  if ($(".q37:checked").length == "") {
    alert("37. โดยรวมแล้วท่านสนใจที่จะพัฒนาตนเอง");
    $("#checkq37-1").focus();
    return false;
  }
  if ($(".q38:checked").length == "") {
    alert("38. ท่านมีโอกาสที่จะได้รับการอบรม/ ศึกษาต่อ/ ดูงาน");
    $("#checkq38-1").focus();
    return false;
  }

  if ($(".cv7:checked").length == "") {
    alert(
      "CV7.สถานการณ์การแพร่ระบาดโควิด-19 มีผลกระทบต่อภาพรวมในมิติใฝ่รู้ดี ของท่านเพียงใด"
    );
    $("#checkcv7-1").focus();
    return false;
  }

  var status = confirm("กรุณายืนยันการบันทึกข้อมูลอีกครั้ง");
  if (status == false) {
    return false;
  } else {
    return true;
  }
});
