// JavaScript Document

function loadXMLDoc(url, onLoad) {
  try {
    // Prefer XMLHttpRequest when available
    var xhr = new XMLHttpRequest()
    xhr.open('GET', url, true)
    xhr.setRequestHeader('Content-Type', 'text/xml')
    xhr.onload = function(e){
      var xml = xhr.responseXML;
      if ( !xml ){ //Parse manually (server probably didn't respond with Content-Type == 'text/xml'
        parser = new DOMParser();
        xml = parser.parseFromString(xhr.responseText, "text/xml");
      }
      onLoad(xml);
    };
    xhr.send();
  }
  catch (e) {
    // XMLHttpRequest not available, fallback on ActiveXObject
    try {
      var activex = new ActiveXObject('Microsoft.XMLDOM');
      activex.async = false;
      activex.load(url); // synchronous

      onLoad(activex);
    }
    catch (e) {
      // Neither XMLHttpRequest or ActiveXObject are available
      return undefined;
    }
  }
}

