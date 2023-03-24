const quizData = [
	{
		question: "What is a Trojan horse in the context of computer security?",
		a: "A type of virus",
		b: "A type of spyware",
		c: "A type of malware disguised as legitimate software",
		d: "A type of firewall",
		correct: "c",
	},
	{
		question: "How does a keylogger work in computer security?",
		a: "By monitoring network traffic",
		b: "By stealing passwords and other sensitive information",
		c: "By encrypting files",
		d: "By blocking malicious websites",
		correct: "b",
	},
	{
		question:
			"What is the best way to protect your personal information online?",
		a: "By using complex passwords",
		b: "By avoiding public Wi-Fi",
		c: "By regularly backing up important data",
		d: "All of the above",
		correct: "d",
	},
	{
		question:
			"Why is it important to keep software up-to-date on your computer?",
		a: "To improve the performance of the software",
		b: "To fix bugs and improve the functionality of the software",
		c: "To make the software compatible with new hardware",
		d: "All of the above",
		correct: "d",
	},
	{
		question: "What is phishing in the context of cyber security?",
		a: "The act of stealing fish from the ocean",
		b: "A type of malware that spreads via email attachments",
		c: "The use of fake websites, emails, or texts",
		d: "None of the above",
		correct: "c",
	},
	{
		question: "What is a strong password?",
		a: "A password that is easy to remember",
		b: "A password that includes personal information, such as your name or birthdate",
		c: "A password that is long and includes a mix of uppercase and lowercase letters, numbers, and symbols",
		d: "A password that is used on multiple accounts",
		correct: "c",
	},
	{
		question: "What is social engineering in the context of cyber security?",
		a: "The act of repairing broken machinery",
		b: "The use of psychological manipulation to trick individuals into divulging confidential information",
		c: "A type of encryption software",
		d: "A type of antivirus software",
		correct: "b",
	},
	{
		question: "What is the best way to secure your home Wi-Fi network?",
		a: "By leaving the network name and password as the default",
		b: "By using a weak password that is easy to remember",
		c: "By using a strong password and enabling WPA2 encryption",
		d: "By sharing the password with everyone you know",
		correct: "c",
	},
	{
		question: "What is a fire wall in the context of computer security?",
		a: "A barrier to prevent the spread of fire",
		b: "A type of antivirus software",
		c: "A network security system that monitors and controls incoming and outgoing network traffic",
		d: "A type of encryption software",
		correct: "c",
	},
	{
		question: "What is a safe and secure way to store your passwords?",
		a: "By writing them down on a piece of paper",
		b: "By using the same password for all your accounts",
		c: "By storing them in a password manager",
		d: "By memorizing them all",
		correct: "c",
	},
];

let subset = [];
for (i = 0; i < 5; i++) {
	let idx = Math.floor(Math.random() * 10);
	subset.push(quizData[idx]);
}
const quiz = document.getElementById("quiz");
const answerEls = document.querySelectorAll(".answer");
const questionEl = document.getElementById("question");
const a_text = document.getElementById("a_text");
const b_text = document.getElementById("b_text");
const c_text = document.getElementById("c_text");
const d_text = document.getElementById("d_text");
const submitBtn = document.getElementById("submit");
let currentQuiz = 0;
let score = 0;
loadQuiz();
function loadQuiz() {
	deselectAnswers();
	const currentQuizData = subset[currentQuiz];
	questionEl.innerText = currentQuizData.question;
	a_text.innerText = currentQuizData.a;
	b_text.innerText = currentQuizData.b;
	c_text.innerText = currentQuizData.c;
	d_text.innerText = currentQuizData.d;
}
function deselectAnswers() {
	answerEls.forEach((answerEl) => (answerEl.checked = false));
}
function getSelected() {
	let answer;
	answerEls.forEach((answerEl) => {
		if (answerEl.checked) {
			answer = answerEl.id;
		}
	});
	return answer;
}
submitBtn.addEventListener("click", () => {
	const answer = getSelected();
	if (answer) {
		if (answer === subset[currentQuiz].correct) {
			score++;
		}
		currentQuiz++;
		if (currentQuiz < subset.length) {
			loadQuiz();
		} else {
			quiz.innerHTML = `
           <h2>You answered ${score}/${subset.length} questions correctly</h2>
           <button class="button" onclick="location.reload()" >Try Again</button>
           `;
		}
	}
});
