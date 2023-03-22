data = [
	{
		name: "Kaspersky",
		rating: "7",
	},
	{
		name: "Avast",
		rating: "9",
	},
	{
		name: "Avast",
		rating: "9",
	},
	{
		name: "Avast",
		rating: "9",
	},
	{
		name: "Avast",
		rating: "9",
	},
	{
		name: "Avast",
		rating: "9",
	},
	{
		name: "Avast",
		rating: "9",
	},
];

data.forEach((element, i) => {
	const container = document.querySelector(".content");
	const cards = document.createElement("div");
	cards.classList = "cards";
	const productCard = `<h5>${data[i].name}</h5><p>${data[i].rating}</p>`;
	cards.innerHTML += productCard;
	container.appendChild(cards);
});
