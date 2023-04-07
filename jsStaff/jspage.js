$(document).ready(function () {
  $("#main1_4").hide();
  $("#checka3-1").click(function () {
    $("#main1_4").show();
    $("#main1_5").hide();
  });
  $("#main1_5").hide();
  $("#checka3-2").click(function () {
    $("#main1_5").show();
    $("#main1_4").hide();
  });

  $("#a4t").prop("disabled", true);
  $("#checka4-5").click(function () {
    $("#a4t").prop("disabled", false);
    $("#a4t").focus();
  });
  $(".a4").click(function () {
    $("#a4t").prop("disabled", true);
    $("#a4t").val("");
  });
  $("#a5t").prop("disabled", true);
  $("#checka5-6").click(function () {
    $("#a5t").prop("disabled", false);
    $("#a5t").focus();
  });
  $(".a5").click(function () {
    $("#a5t").prop("disabled", true);
    $("#a5t").val("");
  });

  $("#checksex-1").click(function () {
    $("#checkq2-9-2").prop("checked", true);
  });

  $(".sex1").click(function () {
    $("#checkq2-9-2").prop("checked", false);
  });

  $("#q2-5t").prop("disabled", true);
  $("#checkq2-5-10").click(function () {
    $("#q2-5t").prop("disabled", false);
    $("#q2-5t").focus();
  });
  $(".q2-5").click(function () {
    if ($("#q2-5t:checked").length == "" && $(".q2-5:checked").length != "") {
      $("#q2-5t").prop("disabled", true);
      $("#q2-5t").val("");
    }
  });
  $("#q2-6t").prop("disabled", true);
  $("#checkq2-6-10").click(function () {
    $("#q2-6t").prop("disabled", false);
    $("#q2-6t").focus();
  });
  $(".q2-6").click(function () {
    $("#q2-6t").prop("disabled", true);
    $("#q2-6t").val("");
  });

  $("#q2-10t").prop("disabled", true);
  $("#checkq2-10-5").click(function () {
    $("#q2-10t").prop("disabled", false);
    $("#q2-10t").focus();
  });
  $(".q2-10").click(function () {
    $("#q2-10t").prop("disabled", true);
    $("#q2-10t").val("");
  });

  $("#q2-11t").prop("disabled", true);
  $("#checkq2-11-4").click(function () {
    $("#q2-11t").prop("disabled", false);
    $("#q2-11t").focus();
  });
  $(".q2-11").click(function () {
    $("#q2-11t").prop("disabled", true);
    $("#q2-11t").val("");
  });

  $("#q2-12t").prop("disabled", true);
  $("#checkq2-12-7").click(function () {
    $("#q2-12t").prop("disabled", false);
    $("#q2-12t").focus();
  });
  $(".q2-12").click(function () {
    $("#q2-12t").prop("disabled", true);
    $("#q2-12t").val("");
  });

  $("#q2-13t").prop("disabled", true);
  $("#checkq2-13-7").click(function () {
    $("#q2-13t").prop("disabled", false);
    $("#q2-13t").focus();
  });
  $(".q2-13").click(function () {
    $("#q2-13t").prop("disabled", true);
    $("#q2-13t").val("");
  });
});

$(".btnsub").submit(function () {
  if ($("#a1").val() == 0) {
    alert("1.5 รายแผนก / สังกัด");
    $("#a1").focus();
    return false;
  }

  if ($(".sex:checked").length == "" && $(".sex1:checked").length == "") {
    alert("2.1 เพศ");
    $("#checksex-1").focus();
    return false;
  }

  var age = $(".age").val();

  if (age == "") {
    alert("2.2 อายุ");
    $("#age").focus();
    return false;
  }
  if (age.match(/[^0-9]/g)) {
    alert("1.ระบุเป็นตัวเลขเท่านั้น");
    $("#age").focus();
    return false;
  }

  if ($(".q2-3:checked").length == "") {
    alert(
      "2.3 มหาวิทยาลัยที่ท่านศึกษาอยู่ในปัจจุบันเป็นจังหวัดเดียวกับภูมิลำเนาของท่านหรือไม่"
    );
    $("#checkq2-3-1").focus();
    return false;
  }
  if ($(".q2-4:checked").length == "") {
    alert("2.4 ปัจจุบันท่านพักอาศัยอยู่ในลักษณะที่พักอาศัยแบบใด");
    $("#checkq2-4-1").focus();
    return false;
  }

  if ($(".q2-5:checked").length == "" && $(".q2-5t:checked").length == "") {
    alert(
      "2.5 ปัจจุบัน โดยส่วนใหญ่ท่านอาศัยอยู่กับใครบ้าง (ตอบได้มากกว่า 1 ข้อ)"
    );
    $("#checkq2-5-1").focus();
    return false;
  }
  if ($(".q2-5t:checked").length != "" && $("#q2-5t").val() == "") {
    alert("2.5 ระบุ....");

    $(".q2-5t:checked").focus();
    $("#q2-5t").focus();
    return false;
  }

  if ($(".q2-6:checked").length == "" && $(".q2-6t:checked").length == "") {
    alert(
      "2.6 ท่านจบการศึกษาสูงสุด ในระดับใด (ไม่รวมระดับการศึกษาที่ยังไม่สำเร็จการศึกษา)"
    );
    $("#checkq2-6-1").focus();
    return false;
  }
  if ($(".q2-6t:checked").length != "" && $("#q2-6t").val() == "") {
    alert("2.6 ระบุ....");
    $("#q2-6t").focus();
    return false;
  }

  if ($(".q2-7:checked").length == "") {
    alert("2.7 สถานภาพสมรส");
    $("#checkq2-7-1").focus();
    return false;
  }
  if ($(".q2-8:checked").length == "") {
    alert("2.8 ท่านมีบุตรหรือไม่ (รวมลูกบุญธรรม/ ลูกติด/ ลูกเลี้ยง)");
    $("#checkq2-8-1").focus();
    return false;
  }
  if ($(".q2-9:checked").length == "") {
    alert("2.9 ขณะนี้ท่านกำลังตั้งครรภ์หรือไม่");
    $("#checkq2-9-1").focus();
    return false;
  }

  if ($(".q2-10:checked").length == "" && $(".q2-10t:checked").length == "") {
    alert("2.10 งานที่ท่านทำเป็นงานลักษณะใด");
    $("#checkq2-10-1").focus();
    return false;
  }
  if ($(".q2-10t:checked").length != "" && $("#q2-10t").val() == "") {
    alert("2.10 ระบุ....");
    $("#q2-10t").focus();
    return false;
  }

  if ($(".q2-11:checked").length == "" && $(".q2-11t:checked").length == "") {
    alert("2.11 ท่านเป็นบุคลากรประเภทใด");
    $("#checkq2-11-1").focus();
    return false;
  }

  if ($(".q2-11t:checked").length != "" && $("#q2-11t").val() == "") {
    alert("2.11 ระบุ....");
    $("#q2-11t").focus();
    return false;
  }
  if ($(".q2-12:checked").length == "" && $(".q2-12t:checked").length == "") {
    alert("2.12 ท่านปฏิบัติงานในระดับตำแหน่งใด");
    $("#checkq2-12-1").focus();
    return false;
  }
  if ($(".q2-12t:checked").length != "" && $("#q2-12t").val() == "") {
    alert("2.12 ระบุ....");
    $("#q2-12t").focus();
    return false;
  }
  if ($(".q2-13:checked").length == "") {
    alert("2.13 ท่านทำงานเป็นกะ/ ทำงานเป็นรอบ/ เข้าเวร ใช่หรือไม่");
    $("#checkq2-13-1").focus();
    return false;
  }

  if ($(".q2-14:checked").length == "") {
    alert("2.14 ระยะเวลาที่ท่านทำงานในองค์กรปัจจุบัน รวมทั้งหมด");
    $("#checkq2-14-1").focus();
    return false;
  }
  if ($(".q2-15:checked").length == "") {
    alert(
      "2.15 ตั้งแต่เริ่มทำงานจนถึงปัจจุบัน ท่านลาออก/ย้าย/เปลี่ยนงานมาแล้วกี่ครั้ง"
    );
    $("#checkq2-15-1").focus();
    return false;
  }
  if ($(".q2-16:checked").length == "") {
    alert(
      "2.16 ท่านมีรายได้ต่อเดือน โดยประมาณเดือนละเท่าใด (รายได้+เงินเดือน+ค่าตอบแทนอื่น ๆ)"
    );
    $("#checkq2-16-1").focus();
    return false;
  }

  var status = confirm("กรุณายืนยันการบันทึกข้อมูลอีกครั้ง");
  if (status == false) {
    return false;
  } else {
    return true;
  }
});
