function mostraCampos(valor){
    if(valor == "999999"){
      document.getElementById("formOutraLing").style.display = "block";
      document.getElementById("labelOutraLing").style.display = "block";
      document.getElementById("txtOutraLing").style.display = "block";
    }else{
      document.getElementById("formOutraLing").style.display = "none";
      document.getElementById("labelOutraLing").style.display = "none";
      document.getElementById("txtOutraLing").style.display = "none";
    }
  }

function toggleResetPswd(e){
  e.preventDefault();
  $('#logreg-forms .form-signin').toggle() // display:block or none
  $('#logreg-forms .form-reset').toggle() // display:block or none
}

function toggleSignUp(e){
  e.preventDefault();
  $('#logreg-forms .form-signin').toggle(); // display:block or none
  $('#logreg-forms .form-signup').toggle(); // display:block or none
}

$(()=>{
  // Login Register Form
  $('#logreg-forms #forgot_pswd').click(toggleResetPswd);
  $('#logreg-forms #cancel_reset').click(toggleResetPswd);
  $('#logreg-forms #btn-signup').click(toggleSignUp);
  $('#logreg-forms #cancel_signup').click(toggleSignUp);
})

/* 

ACCEPT COOKIES
BEGIN

*/
var purecookieTitle="Cookies.",
purecookieDesc="By using this website, you automatically accept that we use cookies.",
purecookieLink='<a href="http://localhost/myfunctions/privacy" target="_blank">Read More</a>',
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
  getCookie("Cookie_FunRep")||(document.body.innerHTML+='<div class="cookieConsentContainer" id="cookieConsentContainer"><div class="cookieTitle"><a>'+purecookieTitle+'</a></div><div class="cookieDesc"><p>'+purecookieDesc+" "+purecookieLink+'</p></div><div class="cookieButton"><a onClick="purecookieDismiss();">'+purecookieButton+"</a></div></div>",pureFadeIn("cookieConsentContainer"))
}
function purecookieDismiss(){
  setCookie("Cookie_FunRep","1",30),
  pureFadeOut("cookieConsentContainer")
}
window.onload=function(){cookieConsent()};

/* 

ACCEPT COOKIES
END

*/