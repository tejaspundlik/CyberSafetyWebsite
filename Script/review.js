data = [
	{   image:"./Assets/reviewCard1.jpg",
		name: "Kaspersky",
		rating: "7",
		text:"If you are looking for affordable cybersecurity for your Windows, Android, and macOS devices used at home or at business premises, Kaspersky may be the right choice. Its pricing varies according to your customization and higher-tier needs. It provides a great balance between features and affordability.",
	},
	{  image:"./Assets/reviewCard2.jpg",
		name: "Avast",
		rating: "9",
		text: "Avast has a great reputation for protecting computers from viruses and malware. With free and premium options, it delivers a complete security solution. Avast offers a wide range of tools beyond basic antivirus protection, including password protection, data shredder, webcam shield, sandbox and more."
	},
	{   image:"./Assets/reviewCard3.jpg",
		name: "Avg",
		rating: "9",
		text:"AVG Antivirus is a great antimalware solution that provides you with an intuitive interface as well as excellent malware protection rates and an array of security features. It even provides you with a free version but it's limited to basic malware protection only.",
	},
	{   image:"./Assets/reviewCard4.jpg",
		name: "McAfee",
		rating: "9",
		text:"McAfee is one of the most popular antivirus in the market in 2023. It's easy to use, user-friendly, and, most importantly, secure antivirus software. In addition, it comes with additional features, like a VPN and password manager.Get continuous protection from phishing, viruses, hackers, and ransomware.",
	},
	{   image:"./Assets/reviewCard5.jpg",
		name: "Kali",
		rating: "9",
		text:"Kali Linux is an open-source Linux distribution aimed at advanced Penetration Testing and Security Auditing. Kali Linux contains industry specific modifications as well as several hundred tools targeted towards various tasks, such as Security Research, Computer Forensics, Reverse Engineering, Vulnerability Management and Red Team Testing.",
	},
	{   image:"./Assets/reviewCard6.jpg",
		name: "NordVPN",
		rating: "9",
		text:"VPN with anti-malware surf online with confidence. NordVPN will cover your daily cybersecurity needs by securing internet traffic and blocking dangerous websites, ads, and malware.",
	},
	{   image:"./Assets/reviewCard7.jpg",
		name: "Burp Suite",
		rating: "9",
		text:"Burp or Burp Suite is a set of tools used for penetration testing of web applications. It is developed by the company named Portswigger, which is also the alias of its founder Dafydd Stuttard. BurpSuite aims to be an all in one set of tools and its capabilities can be enhanced by installing add-ons that are called BApps.",
	},
	{   image:"./Assets/reviewCard8.png",
		name: "Wireshark",
		rating: "9",
		text:"Wireshark is a free and open-source packet analyzer. It is used for network troubleshooting, analysis, software and communications protocol development, and education.",
		
	},
];

data.forEach((element, i) => {
	const container = document.querySelector(".content");
	const cards = document.createElement("div");
	cards.classList = "cards";
	const productCard = `<div class="image-container"><img src="${data[i].image}" id="card-img"/></div><h5>${data[i].name}</h5><p id="rating">${data[i].rating}</p><div class="intro"><p>${data[i].text}</p></div>`;
	cards.innerHTML += productCard;
	container.appendChild(cards);
});
