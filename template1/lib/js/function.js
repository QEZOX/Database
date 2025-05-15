const loadingFile="<i class='fas fa-spinner fa-pulse fa-1x'></i>";
const msgSuccess='<div class="alert alert-success alert-dismissible" role="alert">'+
    '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
    '<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>'+
    '<span class="sr-only">OK:</span>'+
    '<strong>#msg#</strong>'+
'</div>';

const msgWarning='<div class="alert alert-warning alert-dismissible" role="alert">'+
    '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
    '<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>'+
    '<span class="sr-only">Error:</span>'+
    '<strong>#msg#</strong>'+
'</div>';



function setCookie(cname,cvalue,exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires=" + d.toGMTString();
    document.cookie = cname+"="+cvalue+"; "+expires+"; path=/";
}

function setCookieMinute(cname,cvalue,minute) {
    var d = new Date();
    d.setTime(d.getTime() + (minute*60*1000));
    var expires = "expires=" + d.toGMTString();
    document.cookie = cname+"="+cvalue+"; "+expires+"; path=/";;
}

function setCookieSecond(cname,cvalue,second) {
    var d = new Date();
    d.setTime(d.getTime() + (second*1000));
    var expires = "expires=" + d.toGMTString();
    document.cookie = cname+"="+cvalue+"; "+expires+"; path=/";;
}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1);
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function deleteCookie(cname){
    document.cookie = cname+"=; expires=Thu, 01 Jan 1970 00:00:00 UTC";
}


function scrollTop(top){
    if (top === undefined) {
          top = 410;
    }
    $("body,html").animate({scrollTop:top},1000);
}

function numberWithCommas(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}

function animateCSS(element, animationName, callback) {
    const node = document.querySelector(element)
    node.classList.add('animated', animationName)

    function handleAnimationEnd() {
        node.classList.remove('animated', animationName)
        node.removeEventListener('animationend', handleAnimationEnd)

        if (typeof callback === 'function') callback()
    }

    node.addEventListener('animationend', handleAnimationEnd)
}

function getRandomColor() {
  var letters = '0123456789ABCDEF';
  var color = ['red','green','blue','orange','magenta'];
  //for (var i = 0; i < 6; i++) {
  //  color += letters[Math.floor(Math.random() * 16)];
  //}
  return color[Math.floor(Math.random() * 5)];
}



function setRandomColor(element) {
  $(element).css("color", getRandomColor());
}

function isEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}
