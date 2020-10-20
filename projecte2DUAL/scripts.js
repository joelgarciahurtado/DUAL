var check = function() {
  if (document.getElementById('email').value ==
    document.getElementById('emailconfirm').value) {
    document.getElementById('menssatge').style.color = 'green';
    document.getElementById('menssatge').innerHTML = 'els correus electrónics coincideixen';
  } else {
    document.getElementById('menssatge').style.color = 'red';
    document.getElementById('menssatge').innerHTML = 'els correus electrónics no coincideixen';
  }
}

