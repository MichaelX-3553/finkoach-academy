if (document.querySelector('.change-password-container')) {
	const changePasswordPageOpener = document.getElementById('change-password-link');
	const closeChangePasswordPage = document.getElementById('cancel-change-password');
	const changePasswordBtn = document.getElementById('change-password-btn');
	const changePasswordPage = document.querySelector('.change-password-container');

	function closePass() {
		changePasswordPage.classList.remove('active');
	}

	function openPass() {
		changePasswordPage.classList.add('active');
	}

	changePasswordPageOpener.onclick = () => {
		openPass();
	};

	closeChangePasswordPage.onclick = () => {
		closePass();
	};

	changePasswordBtn.onclick = () => {
		alert('Your password had been updated successfully');
		closePass();
	};
}
