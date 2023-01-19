const submitBtn = document.getElementById('submitBtn');
const formData = new FormData(document.getElementById('aplazoSubmitFormId'));

function setToken (token) {
	window.tokenForHeaders = token;
	submitBtn.disabled = false;
}
function setSuccess (data, redirect) {
	jQuery.post( ajax_url.admin_url, data, function(response) {
		window.location.replace(redirect);
	});

	submitBtn.disabled = false;
}

if (add_params){
	add_params.merchantId = parseInt(add_params.merchantId);

	const verifAjax = new XMLHttpRequest();
	verifAjax.open("POST", add_params.verify_url);
	verifAjax.setRequestHeader("Content-Type", "application/json");
	verifAjax.send(JSON.stringify(add_params));
	verifAjax.onreadystatechange = function () {
		if (this.readyState === 4) {
			if (verifAjax.status === 200) {
				setToken(JSON.parse(this.response));
			} else {
				console.log(JSON.parse(this.response).message);
			}
		}
	};
}

function onSubmitAplazo (e) {
	e.preventDefault();
	let data = {};
	for (let pair of formData.entries()) {
		data = JSON.parse(atob(pair[1]));
	}
	const checkoutfAjax = new XMLHttpRequest();
	checkoutfAjax.open("POST", add_params.checkout_url);
	checkoutfAjax.setRequestHeader("Content-Type", "application/json");
	checkoutfAjax.setRequestHeader("Authorization", window.tokenForHeaders['Authorization']);
	checkoutfAjax.send(JSON.stringify(data));
	checkoutfAjax.onreadystatechange = function () {
		if (this.readyState === 4) {
			if (checkoutfAjax.status === 200) {
				const dataResponse = { data, action: 'check_success_response'};
				return setSuccess(dataResponse, this.response);
			} else {
				console.log(JSON.parse(this.response).message);
			}
		}
	};
	return false;
}


