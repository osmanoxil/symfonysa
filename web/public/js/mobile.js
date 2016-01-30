 
  
if (screen.width < 900) {
 var ref = document.referrer;
 var urls = new Array("http://www.sarpg.fr","http://mobile.sarpg.fr/");
 var n = ref.match(urls[0]);
 var m = ref.match(urls[1]);
 if ((m!==null) || (n!==null)) {
 stop;
 }
 else if (ref=='') {
 var r = confirm("Nous detectons un appareil mobile ! voulez vous utiliser la verion mobile de sarpg ? ");
 if (r==true) {
  window.location = "http://mobile.sarpg.fr";
  }
  else {
  stop ;
 }
 }
 else
 {
  } 
}
 