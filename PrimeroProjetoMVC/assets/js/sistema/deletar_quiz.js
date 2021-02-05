// function deletarQuiz(id_quiz){

//     let data = new FormData();
//     data.append('dados', JSON.stringify({
//         'id_quiz': id_quiz,
//     }))
//     fetch ('deletar/quiz', {
//         method: 'DELETE',
//         body: data,
//     })
// }

// let buttons = document.getElementsByClassName('deletar-quiz');

// function onClickButton(item){
//     let id_quiz = item.getAttribute("data-quiz");

//     item.onclick = () => {

//         console.log(id_quiz);
//         let data = new FormData();
//         data.append('dados', JSON.stringify({
//             'id_quiz': id_quiz,
//         }))
//         fetch ('deletar/quiz', {
//             method: 'POST',
//             body: data,
//         }).then(() =>{ return true;})
//     }
// }

// console.log(buttons)

// buttons.forEach(onClickButton);


function deletarQuiz(id_quiz){
    let data = new FormData();
    data.append('dados', JSON.stringify({
        'id_quiz': id_quiz,
    }))
    fetch('deletar/quiz', {
        method: 'POST',
        body: data,
     }).then(() =>{ return true;})
    
    }