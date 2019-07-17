function isEmail(strEmail) {
    var em = document.getElementById('Email').value;
    if (strEmail.search(/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/) != -1)
      return true;
    else
    alert("請輸入正確的郵件型式!");
    document.getElementById('Email').value="";
    break;
    }
    function yanzheng(val){
    var pwd = document.getElementById('Password').value;
    var zz=/^([0-9a-zA-Z])+$/; 
    if(pwd.length!=0){
      if(!zz.test(val)){
      alert('密碼只能為數字英文與&');
      }
      else{
        if (pwd.length>15||pwd.length<8){
        alert("密碼長度為8~15碼");
        document.getElementById('Password').value="";
        return false;
      }
    }
}
}
  function testpw(){
    var pwd = document.getElementById('Password').value;
    var pwd2 = document.getElementById('PasswordAgain').value;
    if(pwd2.length!=0){
      if(pwd!=pwd2){
        alert('二次密碼輸入不同!');
        document.getElementById('PasswordAgain').value="";
        return false;
      }
    }
  }
  $(function(){
     $(document).ready(function(){
        $("#year").change(function(){
          var year = $(this).val();
            $("#month").change(function(){
                var month = $(this).val();
                if((month==4)||(month==6)||(month==9)||(month==11)){
                  $("#day").empty();
                  $("#day").append("<option value='0'>請選擇</option>");
                  for(var i=1;i<=30;i++){
                    var x = document.getElementById("day");
                    var option = document.createElement("option");
                    option.setAttribute("value",i);
                    option.text = i+'日';
                    x.add(option);
                  }
                }else if((month==1)||(month==3)||(month==5)||(month==7)||(month==8)||(month==10)||(month==12)){
                  $("#day").empty();
                  $("#day").append("<option value='0'>請選擇</option>");
                  for(var i=1;i<=31;i++){
                    var x = document.getElementById("day");
                    var option = document.createElement("option");
                    option.setAttribute("value",i);
                    option.text = i+'日';
                    x.add(option);
                  }
                }else{
                  if((year%4)==0 && (year%100)!=0 || (year%400) ==0){
                    $("#day").empty();
                    $("#day").append("<option value='0'>請選擇</option>");
                    for(var i=1;i<=29;i++){
                      var x = document.getElementById("day");
                      var option = document.createElement("option");
                      option.setAttribute("value",i);
                      option.text = i+'日';
                      x.add(option);
                    }
                  }else{
                  $("#day").empty();
                  $("#day").append("<option value='0'>請選擇</option>");
                  for(var i=1;i<=28;i++){
                    var x = document.getElementById("day");
                    var option = document.createElement("option");
                    option.setAttribute("value",i);
                    option.text = i+'日';
                    x.add(option);
                  }
                }
                }
            });
        });
     });
  });

  $(document).ready(function(){
    $("#button").click(function(){
        if($("#Account").val()==""){
            alert("你尚未填寫帳號!");
            eval("document.form1['Account'].focus()");
        }else if($("#Email").val()==""){
            alert("你尚未填寫郵件!");
            eval("document.form1['Email'].focus()");       
        }else if($("#Password").val()==""){
            alert("你尚未填寫密碼!");
            eval("document.form1['Password'].focus()");    
        }else if($("#PasswordAgain").val()==""){
            alert("你未再次輸入密碼!");
            eval("document.form1['PasswordAgain'].focus()");       
        }else if($("#Uname").val()==""){
            alert("你尚未填寫姓名!");
            eval("document.form1['Uname'].focus()");       
        }else if($("#Phone").val()==""){
            alert("你尚未填寫手機!");
            eval("document.form1['Phone'].focus()");       
        }else if($("select[name='city']").val()==""){
            alert("你尚未選擇城市!");
            eval("document.form1['city'].focus()");       
        }else if($("select[name='town']").val()==""){
            alert("你尚未選擇地區!");
            eval("document.form1['town'].focus()");       
        }else if($("#Address").val()==""){
            alert("你尚未填寫地址!");
            eval("document.form1['Address'].focus()");       
        }else if(($("#year").val()=="0")){
            alert("你尚未選擇年份!");
            eval("document.form1['year'].focus()");       
        }else if($("#month").val()=="0"){
            alert("你尚未選擇月份!");
            eval("document.form1['month'].focus()");       
        }else if($("#day").val()=="0"){
            alert("你尚未選擇日期!");
            eval("document.form1['day'].focus()");       
        }else{
            document.form1.submit();
        }
    });
 });