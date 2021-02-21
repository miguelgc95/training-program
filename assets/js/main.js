smartProgress = document.querySelectorAll(".smart-progress li");

smartProgress.forEach(exercise => {
    exercise.addEventListener("dblclick", e => {
        editTraining(e.target);
    });
});

function editTraining(exercise) {
    text = exercise.innerText;
    $parent = exercise.parentNode;
    $parent.removeChild(exercise);
    $form = document.createElement("form");
    $form.setAttribute("action", "");
    $form.setAttribute("method", "post");
    $
    $parent.appendChild()
}