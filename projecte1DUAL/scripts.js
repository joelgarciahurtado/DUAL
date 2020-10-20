var check = function() {
  if (document.getElementById('password').value ==
    document.getElementById('passwordconfirm').value) {
    document.getElementById('menssatge').style.color = 'green';
    document.getElementById('menssatge').innerHTML = 'matching';
  } else {
    document.getElementById('menssatge').style.color = 'red';
    document.getElementById('menssatge').innerHTML = 'not matching';
  }
}

