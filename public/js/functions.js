function alteraCampos(num){
    if(num == 0){
      document.getElementById("form0").style.display="none";
      document.getElementById("form1").style.display="block";
    }else if(num == 1){
		if(document.getElementById("txtLocalViagem").value == ""){
			alert("Informe o local para onde você viajou!");
			document.getElementById("txtLocalViagem").focus();
		}else{
		  document.getElementById("form1").style.display="none";
		  document.getElementById("form2").style.display="block";
		}
    }else if(num == 2){
      document.getElementById("form2").style.display="none";
      document.getElementById("form3").style.display="block";
    }else if(num == 3){
      document.getElementById("form3").style.display="none";
      document.getElementById("form4").style.display="block";
    }
}

/* 

ACCEPT COOKIES
BEGIN

*/
var purecookieTitle="Cookies.",
purecookieDesc="By using this website, you automatically accept that we use cookies.",
purecookieLink='<a href="http://localhost/enjoy/privacy" target="_blank">Read More</a>',
purecookieButton="Understood";
function pureFadeIn(e,o){
  var i=document.getElementById(e);
  i.style.opacity=0,
  i.style.display=o||"block",
  function e(){
    var o=parseFloat(i.style.opacity);
    (o+=.02)>1||(i.style.opacity=o,requestAnimationFrame(e))
  }
  ()
}
function pureFadeOut(e){
  var o=document.getElementById(e);
  o.style.opacity=1,
  function e(){
    (o.style.opacity-=.02)<0?o.style.display="none":requestAnimationFrame(e)
  }
  ()
}
function setCookie(e,o,i){
  var t="";
  if(i){
    var n=new Date;
    n.setTime(n.getTime()+24*i*60*60*1e3),
    t="; expires="+n.toUTCString()
  }
  document.cookie=e+"="+(o||"")+t+"; path=/"
}
function getCookie(e){
  for(var o=e+"=",i=document.cookie.split(";"),t=0;t<i.length;t++){
    for(var n=i[t];" "==n.charAt(0);)
      n=n.substring(1,n.length);
    if(0==n.indexOf(o))
      return n.substring(o.length,n.length)
  }
  return null
}
function eraseCookie(e){
  document.cookie=e+"=; Max-Age=-99999999;"
}
function cookieConsent(){
  getCookie("Cookie_enjoytj")||(document.body.innerHTML+='<div class="cookieConsentContainer" id="cookieConsentContainer"><div class="cookieTitle"><a>'+purecookieTitle+'</a></div><div class="cookieDesc"><p>'+purecookieDesc+" "+purecookieLink+'</p></div><div class="cookieButton"><a onClick="purecookieDismiss();">'+purecookieButton+"</a></div></div>",pureFadeIn("cookieConsentContainer"))
}
function purecookieDismiss(){
  setCookie("Cookie_enjoytj","1",30),
  pureFadeOut("cookieConsentContainer")
}
window.onload=function(){cookieConsent()};

/* 

ACCEPT COOKIES
END

*/