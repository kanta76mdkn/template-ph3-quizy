function clickfunction(question_no, selected_no, valid_no) {

    const answerlist = document.getElementsByName("answerlist_" + question_no);
    answerlist.forEach(answer => {
        answer.style.pointerEvents = "none";
    });

    const selected = document.getElementById("answerlist_" + question_no + "_" + selected_no);
    const valid = document.getElementById("answerlist_" + question_no + "_" + 1);
    
    selected.style.backgroundColor = "#FF5028";
    selected.style.color = "#ffffff";
    
    valid.style.backgroundColor = "#297DFE";
    valid.style.color = "#ffffff";

    const answertext = document.getElementById("answertext_" + question_no);
    if (valid_no == 1) {
        answertext.innerHTML = "正解！";
        answertext.className = "answerbox_valid";
    } else {
        answertext.innerHTML = "不正解！";
        answertext.className = "answerbox_invalid";
    }

    const answerbox = document.getElementById("answerbox_" + question_no);
    answerbox.style.display = "block";
}