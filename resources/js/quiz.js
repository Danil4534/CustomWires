document.addEventListener('DOMContentLoaded', () => {
    const quizList = document.querySelector("#answersList"); 
    const questions = document.querySelectorAll(".question");
    let currentIndex = 0;
    let finished = false;
function showQuestion(index) {
    if (!finished) {
        const q = questions[index];
        if (!q) return;
        const backBtn = q.querySelector('.backBtn');
        
        quizList.insertBefore(q, quizList.firstChild);

        if (backBtn) backBtn.disabled = (index === 0);

        q.style.display = 'block';
        q.classList.add('active');
        const details = q.querySelector("details");
        if (details) details.open = true;

        currentIndex = index;
    } else {
        questions.forEach(item => {
            item.style.display = 'block';
            item.classList.remove('active');
            const details = item.querySelector("details");
            if (details) details.open = false;
        });
    }
}

    questions.forEach((q, i) => {
        q.style.display = (i === 0) ? 'block' : 'none';
    });
    showQuestion(0);

    questions.forEach((q, idx) => {
        const nextBtn = q.querySelector('.nextBtn');
        const skipBtn = q.querySelector('.skipBtn');
        const backBtn = q.querySelector('.backBtn');
        const editBtn = q.querySelector('.ph-pencil')

        editBtn.addEventListener('click', ()=>{
              q.querySelector("details").open=true
              q.classList.add('active')
        })

        function goNext() {
            if (idx + 1 < questions.length) {
                q.classList.remove('active')
                q.querySelector("details").open=false
                showQuestion(idx + 1);
            } else {
             
                finished = true;
                showQuestion(0);
            }
        }

        if (nextBtn) nextBtn.addEventListener('click', goNext);
        if (skipBtn) skipBtn.addEventListener('click', goNext);

        if (backBtn) {
            backBtn.addEventListener('click', () => {
                if (idx > 0) {
                      q.classList.remove('active')
                q.querySelector("details").open=false
                    showQuestion(idx - 1);
                }
            });
        }
    });
});
