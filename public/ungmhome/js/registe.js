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
    alert("��˾���Ʋ���Ϊ��");
		return false;
	}else if(location==""){
    alert("��ַ����Ϊ��");
		return false;
	}else if(postalcode==""){
		alert("�������벻��Ϊ��");
		return false;
	}else if(city==""){
		alert("���ڳ��в���Ϊ��");
		return false;
	}else if(country==""){
		alert("���ڹ��Ҳ���Ϊ��");
		return false;
	}else if(postbox==""){
		alert("�������䲻��Ϊ��");
		return false;
	}else if(postaladd==""){
		alert("���ŵ�ַ����Ϊ��");
		return false;
	}else if(!phone.match(/^1(3[0-9]|4[579]|5[0-3,5-9]|6[6]|7[0135678]|8[0-9]|9[89])\d{8}$/)){
		alert("�ֻ������ʽ����ȷ������������");
        $(".phone").focus();
		return false;
	}else if(fax==""){
		alert("���治��Ϊ��");
		return false;
	}else if(contact==""){
		alert("��ϵ�˲���Ϊ��");
		return false;
	}else if(switchs==""){
		alert("��֧�ṹ����Ϊ��");
		return false;
	}else if(!email.match(/^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+((\.[a-zA-Z0-9_-]{2,3}){1,2})$/)){
		alert("�����ʽ����ȷ������������");
        $(".email").focus();
	}else if(!contact.match(/^[a-zA-Z\u4e00-\u9fa5]+$/)){
    	 alert("��ϵ��ֻ�����뺺��");
    	 $(".contact").focus();
    }else{
    	alert(company);
        $(".page1").css("display","none");
        $(".page2").css("display","block");
    }

})


//�ڶ�������Ϊ���ж�
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
		alert("����ʱ�䲻��Ϊ��");
		return false;
	}else if(staff==""){
		alert("ȫְְ����������Ϊ��");
		return false;
	}else if(cbc==""){
		alert("����ע���Ų���Ϊ��");
		return false;
	}else if(bankname==""){
		alert("�����������Ʋ���Ϊ��");
		return false;
	}else if(bankadd==""){
		alert("���е�ַ����Ϊ��");
		return false;
	}else if(swift==""){
		alert("SWIFT���벻��Ϊ��");
		return false;
	}else if(bankaccount==""){
		alert("���������˺Ų���Ϊ��");
		return false;
	}else if(accounttitle==""){
		alert("�˻����Ʋ���Ϊ��");
		return false;
	}else{
	}
})

//����������Ϊ���ж�
$("#page3up").click(function(){
	$(".page3").hide();
	$(".page2").show();
});
$("#page3").click(function(){
	var pro=$(".pro").val();
	if(pro!=""){
		alert("��ܰ��ʾ�����Ǻ��ڻ����������ġ���˾�����ṩ�Ĳ�Ʒ/���񡱣�����������زɹ���Ϣ���������ʵ������")
		$(".page3").hide();
    $(".page4").show();
	}else if(pro==""){
		alert("��˾�����ṩ�Ĳ�Ʒ/������Ϊ��");
		return false;
	}else{
	}
})

//���Ĳ�����Ϊ���ж�
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
		alert("ע���ύ�С�����")
	}else if(n==""){
		alert("��������Ϊ��");
		return false;
	}else if(duty==""){
		alert("ְ����Ϊ��");
		return false;
	}else if(signature==""){
		alert("ǩ������Ϊ��");
		return false;
	}else if(d==""){
		alert("���ڲ���Ϊ��");
		return false;
	}else{
	}
})



//ע�����
$("#login").click(function(){
	alert(111);
	var email=$("#email").val();
	var phone=$("#teles").val();
	var password=$("#password").val();
	var passwordagain=$("#passwordagain").val();
	if(!email.match(/^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+((\.[a-zA-Z0-9_-]{2,3}){1,2})$/))
        {
            alert("�����ʽ����ȷ������������");
            $("#email").focus();
        }
    if(!phone.match(/^1(3[0-9]|4[579]|5[0-3,5-9]|6[6]|7[0135678]|8[0-9]|9[89])\d{8}$/)) {
    	alert("�ֻ������ʽ����ȷ������������");
            $("#phone").focus();
    }  
    if(email==""||phone==""||password==""||passwordagain==""){
        	alert("����������");
        }else{}
    if(password!=passwordagain){
            alert("���������벻һ�£�����������");
            $("#passwordagain").focus();
        }     
})

//�����������
$("[name='forgetpassword']").click(function(){
	alert(111);
	var phone=$("#phone").val();
	var password=$("#newpassword").val();
	var passwordagain=$("#newpasswordagain").val();
	if(!phone.match(/^1(3[0-9]|4[579]|5[0-3,5-9]|6[6]|7[0135678]|8[0-9]|9[89])\d{8}$/)) {
    	alert("�ֻ������ʽ����ȷ������������");
            $("#phone").focus();
    } 
    if(phone==""||password==""||passwordagain==""){
        	alert("����������");
        }else{}
    if(password!=passwordagain){
            alert("���������벻һ�£�����������");
            $("#newpasswordagain").focus();
        }         
})





/*�ɹ�������ѯ*/

  $(".down_icon").click(function(){

  	$(".recommendtender").toggle();

  });

 


/*-----------�ֻ���֤-----------------*/
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
	
	    //��ʾ����
		className = $(this).attr('class');
		$('#dialogBg').fadeIn(300);
		$('#dialog').removeAttr('class').addClass('animated '+className+'').fadeIn();
		
		//�رյ���
		$('.submitBtn').click(function(){
			var telephone=$('.telephone').val();
			var verification=$('.verification').val();
			if(!telephone.match(/^1(3[0-9]|4[579]|5[0-3,5-9]|6[6]|7[0135678]|8[0-9]|9[89])\d{8}$/)){
				alert("�ֻ������ʽ����ȷ������������");
            	$(".telephone").focus();
				
			}else if(telephone==""){
				alert("����д�ֻ��ţ�");
				
			}else if(verification==""){
				alert("����д��֤�룡");
				
			}else{
				window.location.href="registe.html";
			}
		});
});
/*//�رյ���
	$('.submitBtn').click(function(){
		$('#dialogBg').fadeOut(300,function(){
			$('#dialog').addClass('bounceOutUp').fadeOut();
		});
	});
*/

/*-------------------*/
