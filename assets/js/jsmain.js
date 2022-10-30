function Mudarestado(el) {
    var display = document.getElementById(el).style.display;
    if (display == "none")
      document.getElementById(el).style.display = 'block';
    else
      document.getElementById(el).style.display = 'none';
  }

  function Calistenia(el) {
    var display = document.getElementById(el).style.display;
    if (display == "none"){
      document.getElementById(el).style.display = 'block';
      document.getElementById('divAcad').style.display = 'none';
      document.getElementById('foot').style.position = 'relative';
    }
    else{
      document.getElementById(divAcad).style.display = 'none';
    }
  }

  function Academia(el) {
    var display = document.getElementById(el).style.display;
    if (display == "none"){
      document.getElementById(el).style.display = 'block';
      document.getElementById('divCalist').style.display = 'none';
      document.getElementById('foot').style.position = 'relative';
      }
    else{
      document.getElementById(divCalist).style.display = 'none';
  }
  }