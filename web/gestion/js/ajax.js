function getXMLHttpRequest() {
    var xhr = null;
     
    if (window.XMLHttpRequest || window.ActiveXObject) {
        if (window.ActiveXObject) {
            try {
                xhr = new ActiveXObject("Msxml2.XMLHTTP");
            } catch(e) {
                xhr = new ActiveXObject("Microsoft.XMLHTTP");
            }
        } else {
            xhr = new XMLHttpRequest();
        }
    } else {
        alert("Votre navigateur ne supporte pas l'objet XMLHTTPRequest...");
        return null;
    }
     
    return xhr;
}

function envoiDate(callback) {
    var xhr = getXMLHttpRequest();
     
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
            callback(xhr.responseText);
        }
    };
 
    var date = encodeURIComponent(document.getElementById("input4").value);
     
    xhr.open("GET", "ajax.php?c=logSite&date=" + date, true);
    xhr.send(null);
}

function envoiDate2(callback) {
    var xhr = getXMLHttpRequest();
     
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
            callback(xhr.responseText);
        }
    };
 
    var date = encodeURIComponent(document.getElementById("input4").value);
     
    xhr.open("GET", "ajax.php?c=perm&date=" + date, true);
    xhr.send(null);
}
 
function readData(sData) {
	document.getElementById('log').innerHTML=sData;
    //alert(sData);
}

function dmdPass(callback) {
    var xhr = getXMLHttpRequest();
     
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
            callback(xhr.responseText);
        }
    };
 
    var taille = encodeURIComponent(prompt('Taille du mot de passe'));
    var chiffre = encodeURIComponent(prompt('PrÃ©sence de chiffre dans le mot de passe ? Tapez Oui ou Non.'));
    var maj = encodeURIComponent(prompt('PrÃ©sence de majuscules dans le mot de passe ? Tapez Oui ou Non.'));
    var spec = encodeURIComponent(prompt('PrÃ©sence de caractÃ¨res spÃ©ciaux dans le mot de passe ? Tapez Oui ou Non.'));
     
    xhr.open("GET", "ajax.php?c=pass&taille=" + taille + "&ch=" + chiffre + "&maj=" + maj + "&spec=" + spec, true);
    xhr.send(null);
}

function readPass(sData)
{
    document.getElementById('ajPass').innerHTML=sData;
}