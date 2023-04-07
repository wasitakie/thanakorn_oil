$(".btnsub").submit(function () {
  var weight = $(".weight").val();

  if (weight == "") {
    alert("1.ปัจจุบันท่านมีน้ำหนัก/กิโลกรัม");
    $("#weight").focus();
    return false;
  }
  if (weight.match(/[^0-9]/g)) {
    alert("1.ระบุเป็นตัวเลขเท่านั้น");
    $("#weight").focus();
    return false;
  }

  var waist = $(".waist").val();

  if (waist == "") {
    alert("เส้นรอบเอว/นิ้ว");
    $("#waist").focus();
    return false;
  }
  if (waist.match(/[^0-9]/g)) {
    alert("1.ระบุเป็นตัวเลขเท่านั้น");
    $("#waist").focus();
    return false;
  }

  var height = $(".height").val();

  if (height == "") {
    alert("ส่วนสูง/เซนติเมตร");
    $("#height").focus();
    return false;
  }
  if (height.match(/[^0-9]/g)) {
    alert("1.ระบุเป็นตัวเลขเท่านั้น");
    $("#height").focus();
    return false;
  }

  if ($(".q2:checked").length == "") {
    alert("2. โดยปกติท่านกินอาหารเช้า เฉลี่ยสัปดาห์ละกี่วัน");
    $("#checkq2-1").focus();
    return false;
  }
  if ($(".q3:checked").length == "") {
    alert(
      "3.โดยปกติท่านกินอาหารที่มีรสหวานจัด เช่น ช็อกโกแลต โดนัท ขนมเค้ก น้ำอัดลม ฯลฯ"
    );
    $("#checkq3-1").focus();
    return false;
  }
  if ($(".q4:checked").length == "") {
    alert(
      "4.โดยปกติท่านกินอาหารที่มีรสเค็มจัด เช่น อาหารที่เพิ่มน้ำปลา หรือ ซอสปรุงรสต่าง ๆอาหารกระป๋อง"
    );
    $("#checkq4-1").focus();
    return false;
  }
  if ($(".q5:checked").length == "") {
    alert("5.โดยปกติท่านกินอาหารมันจัด/ ของมันจัด เช่น ของทอด หมูกระทะ");
    $("#checkq5-1").focus();
    return false;
  }
  if ($(".q6:checked").length == "") {
    alert("6.ปัจจุบันท่านออกกำลังกายโดยเฉลี่ยสัปดาห์ละกี่วัน");
    $("#checkq6-1").focus();
    return false;
  }
  if ($(".q7:checked").length == "") {
    alert("7.ปัจจุบันท่านสูบบุหรี่/บุหรี่ไฟฟ้า/ใบจาก/ยาเส้น หรือไม่");
    $("#checkq7-1").focus();
    return false;
  }
  if ($(".q8:checked").length == "") {
    alert("8.ปัจจุบันท่านดื่มเครื่องดื่มที่มีแอลกอฮอล์");
    $("#checkq8-1").focus();
    return false;
  }
  if ($(".q9:checked").length == "") {
    alert("9. โดยรวมแล้วท่านพึงพอใจกับสุขภาพกายของท่าน เพียงใด");
    $("#checkq9-1").focus();
    return false;
  }
  if ($(".q10:checked").length == "") {
    alert(
      "10.ปัจจุบันท่านดื่มเครื่องดื่มที่มีแอลกอฮอล์ เช่น เหล้า เบียร์ ไวน์ สาโทหรือสุราพื้นบ้านหรือไม่"
    );
    $("#checkq10-1").focus();
    return false;
  }
  if ($(".q11:checked").length == "") {
    alert("11. โดยรวมแล้วท่านพึงพอใจกับสุขภาพกายของท่าน เพียงใด ");
    $("#checkq11-1").focus();
    return false;
  }

  if ($(".cv1:checked").length == "") {
    alert(
      "CV1.สถานการณ์การแพร่ระบาดโควิด-19 มีผลกระทบต่อภาพรวมในมิติสุขภาพกายดีของท่านเพียงใด"
    );
    $("#checkcv1-1").focus();
    return false;
  }

  var status = confirm("กรุณายืนยันการบันทึกข้อมูลอีกครั้ง");
  if (status == false) {
    return false;
  } else {
    return true;
  }
});
