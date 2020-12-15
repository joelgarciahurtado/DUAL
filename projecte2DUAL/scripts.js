var check = function () {
  if (document.getElementById('email').value ==
    document.getElementById('emailconfirm').value) {
    document.getElementById('menssatge').style.color = 'green';
    document.getElementById('menssatge').innerHTML = 'els correus electrónics coincideixen';
  } else {
    document.getElementById('menssatge').style.color = 'red';
    document.getElementById('menssatge').innerHTML = 'els correus electrónics no coincideixen';
  }
}


var check = function () {
  if (document.getElementById('password').value ==
    document.getElementById('passwordconfirm').value) {
    document.getElementById('menssatge').style.color = 'green';
    document.getElementById('menssatge').innerHTML = 'les contrasenyes coincideixen';
  } else {
    document.getElementById('menssatge').style.color = 'red';
    document.getElementById('menssatge').innerHTML = 'les contrasenyes no coincideixen';
  }
}


