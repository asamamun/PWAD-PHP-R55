// script.js

const quizContainer = document.getElementById('quiz-questions');

fetch('http://192.168.54.118/R55/PWAD-PHP-R55/class23/quizApp/questions.php')
  .then(response => response.json())
  .then(data => {
    console.log(data);
    data.forEach((question, index) => {
      const questionElement = document.createElement('div');
      questionElement.className = 'question';
      questionElement.innerHTML = `
        <h3>${index + 1}. ${question.text}</h3>
        <ul>
          ${question.options.map(option => `
            <li>
              <label>
                <input type="radio" name="question-${index}" value="${option}">
                ${option}
              </label>
            </li>
          `).join('')}
        </ul>
      `;
      quizContainer.appendChild(questionElement);
    });
  })
  .catch(error => {
    console.error('Error:', error);
  });
