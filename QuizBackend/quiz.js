let quizData = [];

async function loadQuizData() {
	const response = await fetch("./QuizBackend/questions.json");
	const data = await response.json();
	return data;
}

(async function () {
	const quizData = await loadQuizData();
	console.log(quizData);
	const randomShuffle = [...quizData];

	for (let i = randomShuffle.length - 1; i > 0; i--) {
		const j = Math.floor(Math.random() * (i + 1));
		[randomShuffle[i], randomShuffle[j]] = [randomShuffle[j], randomShuffle[i]];
	}

	const randomQuestions = randomShuffle.slice(0, 5);

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
		const currentQuizData = randomQuestions[currentQuiz];
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
			if (
				answer.toUpperCase() ===
				randomQuestions[currentQuiz].correct.toUpperCase()
			) {
				score++;
			}
			currentQuiz++;
			if (currentQuiz < randomQuestions.length) {
				loadQuiz();
			} else {
				quiz.innerHTML = `
           		<h2>You answered ${score}/${randomQuestions.length} questions correctly</h2>
           		<button class="button" onclick="location.reload()" >Try Again</button>
           		`;
			}
		}
	});
})();
