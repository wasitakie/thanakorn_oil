$(".btnsub").submit(function () {
  if ($(".q60:checked").length == "") {
    alert("60.ท่านจะแนะนำญาติ/เพื่อน/คนรู้จักมาทำงานที่องค์กรของท่านหรือไม่");
    $("#checkq60-1").focus();
    return false;
  }

  if ($(".q61:checked").length == "") {
    alert(
      "61.หากมีใครกล่าวถึงองค์กรในทางที่ไม่เหมาะสม ท่านจะปกป้ององค์กรของท่านหรือไม่"
    );
    $("#checkq61-1").focus();
    return false;
  }
  if ($(".q62:checked").length == "") {
    alert(
      "62.ท่านภาคภูมิใจที่ได้เป็นพนักงาน/ บุคลากรขององค์กร/ได้ทำงานในองค์กรนี้หรือไม่"
    );
    $("#checkq62-1").focus();
    return false;
  }
  if ($(".q63:checked").length == "") {
    alert(
      "63.ขณะที่ทำงานอยู่ในองค์กรนี้ หากท่านมีโอกาสได้ศึกษาต่อและเมื่อสำเร็จการศึกษาแล้ว"
    );
    $("#checkq63-1").focus();
    return false;
  }
  if ($(".q64:checked").length == "") {
    alert(
      "64.ถ้าท่านมีโอกาสเปลี่ยนสถานที่ทำงาน หรือองค์กรอื่นชวน/ติดต่อไปทำงาน"
    );
    $("#checkq64-1").focus();
    return false;
  }
  if ($(".q65:checked").length == "") {
    alert(
      "65.ท่านรู้สึกเป็นเจ้าของร่วมขององค์กรที่ท่านทำงานในปัจจุบัน หรือไม่"
    );
    $("#checkq65-1").focus();
    return false;
  }

  if ($(".q66:checked").length == "") {
    alert("66.ท่านทุ่มเททำงานเพื่อประโยชน์ขององค์กรของท่านหรือไม่");
    $("#checkq66-1").focus();
    return false;
  }
  if ($(".q67:checked").length == "") {
    alert(
      "67. ท่านเป็นคน คิดใหมทำใหม่ เพื่อสร้างความก้าวหน้าให้กับองค์กรของท่านหรือไม่"
    );
    $("#checkq67-1").focus();
    return false;
  }
  if ($(".q68:checked").length == "") {
    alert("68. ในแต่ละวันท่านทำงานอย่างมีเป้าหมาย หรือไม่");
    $("#checkq68-1").focus();
    return false;
  }

  var status = confirm("กรุณายืนยันการบันทึกข้อมูลอีกครั้ง");
  if (status == false) {
    return false;
  } else {
    return true;
  }
});
