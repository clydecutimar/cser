function showAccounts() {
	const rows = document.getElementsByTagName('tr');
	for (let i = 1; i < rows.length; i++) {
	  const startDate = rows[i].getElementsByTagName('td')[4].textContent;
	  const endDate = rows[i].getElementsByTagName('td')[5].textContent;
	  if (startDate === '' && endDate === '') {
		rows[i].style.display = 'table-row';
	  } else {
		rows[i].style.display = 'none';
	  }
	}
  }  
  
function redirectToAdmin() {
    window.location.href = "premium.php";
  }