$(function(){
  $(".page2").hide();
  $(".page3").hide();
  $(".page4").hide();
})

$("#page1").click(function(){
	var company=$(".company").val();
	var location=$(".location").val();
	var postalcode=$(".postalcode").val();
	var city=$(".city").val();
	var country=$(".country").val();
	var postbox=$(".postbox").val();
	var postaladd=$(".postaladd").val();
	var phone=$(".phone").val();
	var fax=$(".fax").val();
	var email=$(".email").val();
	var contact=$(".contact").val();
	var switchs=$(".switchs").val();
	 if(company==""){
    alert("公司名称不能为空");
		return false;
	}else if(location==""){
    alert("地址不能为空");
		return false;
	}else if(postalcode==""){
		alert("邮政编码不能为空");
		return false;
	}else if(city==""){
		alert("所在城市不能为空");
		return false;
	}else if(country==""){
		alert("所在国家不能为空");
		return false;
	}else if(postbox==""){
		alert("邮政信箱不能为空");
		return false;
	}else if(postaladd==""){
		alert("邮信地址不能为空");
		return false;
	}else if(!phone.match(/^1(3[0-9]|4[579]|5[0-3,5-9]|6[6]|7[0135678]|8[0-9]|9[89])\d{8}$/)){
		alert("手机号码格式不正确！请重新输入");
        $(".phone").focus();
		return false;
	}else if(fax==""){
		alert("传真不能为空");
		return false;
	}else if(contact==""){
		alert("联系人不能为空");
		return false;
	}else if(switchs==""){
		alert("分支结构不能为空");
		return false;
	}else if(!email.match(/^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+((\.[a-zA-Z0-9_-]{2,3}){1,2})$/)){
		alert("邮箱格式不正确！请重新输入");
        $(".email").focus();
	}else if(!contact.match(/^[a-zA-Z\u4e00-\u9fa5]+$/)){
    	 alert("联系人只能输入汉字");
    	 $(".contact").focus();
    }else{
    	alert(company);
        $(".page1").css("display","none");
        $(".page2").css("display","block");
    }

})


//第二步不能为空判断
$("#page2up").click(function(){
	$(".page2").hide();
	$(".page1").show();
});
$("#page2").click(function(){
  var formed=$(".formed").val();
  var staff=$(".staff").val();
  var cbc=$(".cbc").val();
  var bankname=$(".bankname").val();
  var bankadd=$(".bankadd").val();
  var swift=$(".swift").val();
  var bankaccount=$(".bankaccount").val();
	var accounttitle=$(".accounttitle").val();
	if(formed!=""&&staff!=""&&cbc!=""&&bankname!=""&&bankadd!=""&&swift!=""&&bankaccount!=""&&accounttitle!=""){
		$(".page2").hide();
    $(".page3").show();
	}else if(formed==""){
		alert("成立时间不能为空");
		return false;
	}else if(staff==""){
		alert("全职职工人数不能为空");
		return false;
	}else if(cbc==""){
		alert("工商注册编号不能为空");
		return false;
	}else if(bankname==""){
		alert("开户银行名称不能为空");
		return false;
	}else if(bankadd==""){
		alert("银行地址不能为空");
		return false;
	}else if(swift==""){
		alert("SWIFT号码不能为空");
		return false;
	}else if(bankaccount==""){
		alert("开户银行账号不能为空");
		return false;
	}else if(accounttitle==""){
		alert("账户名称不能为空");
		return false;
	}else{
	}
})

//第三步不能为空判断
$("#page3up").click(function(){
	$(".page3").hide();
	$(".page2").show();
});
$("#page3").click(function(){
	var pro=$(".pro").val();
	if(pro!=""){
		alert("温馨提示：我们后期会根据您所填的“贵公司所能提供的产品/服务”，给您推送相关采购信息，请务必真实！！！")
		$(".page3").hide();
    $(".page4").show();
	}else if(pro==""){
		alert("贵公司所能提供的产品/服务不能为空");
		return false;
	}else{
	}
})

//第四步不能为空判断
$("#page4up").click(function(){
	$(".page4").hide();
	$(".page3").show();
});
$("#page4").click(function(){
	var n=$(".n").val();
	var duty=$(".duty").val();
	var signature=$(".signature").val();
	var d=$(".d").val();
	if(n!=""&&duty!=""&&signature!=""&&d!=""){
		alert("注册提交中。。。")
	}else if(n==""){
		alert("姓名不能为空");
		return false;
	}else if(duty==""){
		alert("职务不能为空");
		return false;
	}else if(signature==""){
		alert("签名不能为空");
		return false;
	}else if(d==""){
		alert("日期不能为空");
		return false;
	}else{
	}
})



//注册界面
$("#login").click(function(){
	alert(111);
	var email=$("#email").val();
	var phone=$("#teles").val();
	var password=$("#password").val();
	var passwordagain=$("#passwordagain").val();
	if(!email.match(/^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+((\.[a-zA-Z0-9_-]{2,3}){1,2})$/))
        {
            alert("邮箱格式不正确！请重新输入");
            $("#email").focus();
        }
    if(!phone.match(/^1(3[0-9]|4[579]|5[0-3,5-9]|6[6]|7[0135678]|8[0-9]|9[89])\d{8}$/)) {
    	alert("手机号码格式不正确！请重新输入");
            $("#phone").focus();
    }  
    if(email==""||phone==""||password==""||passwordagain==""){
        	alert("请输入完整");
        }else{}
    if(password!=passwordagain){
            alert("输入新密码不一致，请重新输入");
            $("#passwordagain").focus();
        }     
})

//忘记密码界面
$("[name='forgetpassword']").click(function(){
	alert(111);
	var phone=$("#phone").val();
	var password=$("#newpassword").val();
	var passwordagain=$("#newpasswordagain").val();
	if(!phone.match(/^1(3[0-9]|4[579]|5[0-3,5-9]|6[6]|7[0135678]|8[0-9]|9[89])\d{8}$/)) {
    	alert("手机号码格式不正确！请重新输入");
            $("#phone").focus();
    } 
    if(phone==""||password==""||passwordagain==""){
        	alert("请输入完整");
        }else{}
    if(password!=passwordagain){
            alert("输入新密码不一致，请重新输入");
            $("#newpasswordagain").focus();
        }         
})





/*采购订单查询*/

  $(".down_icon").click(function(){

  	$(".recommendtender").toggle();

  });

 


/*-----------手机验证-----------------*/
var w,h,className;
function getSrceenWH(){
	w = $(window).width();
	h = $(window).height();
	$('#dialogBg').width(w).height(h);
}

window.onresize = function(){  
	getSrceenWH();
}  
$(window).resize();  

$(function(){
		getSrceenWH();
	
	    //显示弹框
		className = $(this).attr('class');
		$('#dialogBg').fadeIn(300);
		$('#dialog').removeAttr('class').addClass('animated '+className+'').fadeIn();
		
		//关闭弹窗
		$('.submitBtn').click(function(){
			var telephone=$('.telephone').val();
			var verification=$('.verification').val();
			if(!telephone.match(/^1(3[0-9]|4[579]|5[0-3,5-9]|6[6]|7[0135678]|8[0-9]|9[89])\d{8}$/)){
				alert("手机号码格式不正确！请重新输入");
            	$(".telephone").focus();
				
			}else if(telephone==""){
				alert("请填写手机号！");
				
			}else if(verification==""){
				alert("请填写验证码！");
				
			}else{
				window.location.href="registe.html";
			}
		});
});
/*//关闭弹窗
	$('.submitBtn').click(function(){
		$('#dialogBg').fadeOut(300,function(){
			$('#dialog').addClass('bounceOutUp').fadeOut();
		});
	});
*/

/*-------------------*/
