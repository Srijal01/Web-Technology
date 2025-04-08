function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toGMTString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=http://127.0.0.1/";
    alert("Cookie with " + cvalue + " is set");
}
function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}
function checkCookie() {
    var user = getCookie("username");
    if (user != "") {
        alert("Welcome again " + user);
    } else {
        alert("No cookies are set");
    }
}
function cookieSet() {
    var user = getCookie("username");
    if (user == "") {
        user = prompt("Please enter your name:", "");
        if (user != "" && user != null) {
            setCookie("username", user, 30);
        }
    }
}
function deleteCookie() {
    var user = getCookie("username");
    if (user == "") {
        alert("No cookies to delete");
    } else {
        alert(user + " cookie is deleted");
    }
    document.cookie = "username ='" + user + "'; expires=Thu, 01 Jan 1970 00:00:00 UTC; domain =127.0.0.1";
}