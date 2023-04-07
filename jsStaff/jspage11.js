$(".btnsub").submit(function () {
  if ($(".q69:checked").length == "") {
    alert("69.ท่านรู้สึกว่าโดยเฉลี่ยในหนึ่งสัปดาห์ท่านทำงานกี่วัน");
    $("#checkq69-1").focus();
    return false;
  }

  if ($(".q70:checked").length == "") {
    alert("70.ท่านรู้สึกว่าโดยเฉลี่ยท่านทำงานวันละกี่ชั่วโมง");
    $("#checkq70-1").focus();
    return false;
  }
  if ($(".q71:checked").length == "") {
    alert(
      "71. ท่านรู้สึกว่าได้พักผ่อนโดยเฉลี่ย (ไม่รวมการนอนหลับตอนกลางคืน) วันละกี่ชั่วโมง"
    );
    $("#checkq71-1").focus();
    return false;
  }
  if ($(".q72:checked").length == "") {
    alert(
      "72. หน่วยงานของท่านมีความยืดหยุ่น ในการทำงาน (ในสถานการณ์ปกติ) หรือไม่ (เช่น"
    );
    $("#checkq72-1").focus();
    return false;
  }
  if ($(".q73:checked").length == "") {
    alert("73.ท่านทำงานตรงตามวุฒิการศึกษาหรือไม่");
    $("#checkq73-1").focus();
    return false;
  }

  var status = confirm("กรุณายืนยันการบันทึกข้อมูลอีกครั้ง");
  if (status == false) {
    return false;
  } else {
    return true;
  }
});
