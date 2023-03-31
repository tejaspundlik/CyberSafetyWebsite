const myButton = document.getElementById("donationButton");

myButton.addEventListener("click", function () {
	let val = document.getElementById("amount").value;
	console.log(val);
	var form = document.createElement("form");
	form.setAttribute("action", "https://www.sandbox.paypal.com/cgi-bin/webscr");
	form.setAttribute("method", "post");
	var business = document.createElement("input");
	business.setAttribute("value", "sb-qyyoc25365716@business.example.com");
	var amount = document.createElement("input");
	amount.setAttribute("value", val);
	form.submit();
});
