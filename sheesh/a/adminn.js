function showAccounts() {
	const rows = document.getElementsByTagName('tr');
	for (let i = 1; i < rows.length; i++) {
	  const status = rows[i].getElementsByTagName('td')[4].textContent;
	  if (status === '') {
		rows[i].style.display = 'table-row';
	  } else {
		rows[i].style.display = 'none';
	  }
	}
  }  
  
function redirectToAdmin() {
    window.location.href = "extend.php";
  }