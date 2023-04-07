$(".btnsub").submit(function () {
  if ($(".q27:checked").length == "") {
    alert("27. ท่านมีเวลาอยู่กับครอบครัว เพียงพอหรือไม่");
    $("#checkq27-1").focus();
    return false;
  }

  if ($(".q28:checked").length == "") {
    alert("28. ท่าน ทำกิจกรรม(ออกกำลังกาย ทำบุญ ซื้อของ ฯลฯ)");
    $("#checkq28-1").focus();
    return false;
  }
  if ($(".q29:checked").length == "") {
    alert("29.โดยรวมแล้วท่านมีความสุขกับครอบครัวของท่านหรือไม่");
    $("#checkq29-1").focus();
    return false;
  }

  if ($(".cv5:checked").length == "") {
    alert(
      "CV5.สถานการณ์การแพร่ระบาดโควิด-19 มีผลกระทบต่อภาพรวมในมิติครอบครัวดี ของท่านเพียงใดของท่านเพียงใด"
    );
    $("#checkcv5-1").focus();
    return false;
  }

  var status = confirm("กรุณายืนยันการบันทึกข้อมูลอีกครั้ง");
  if (status == false) {
    return false;
  } else {
    return true;
  }
});
