

const form = document.querySelector("form"),
nextBtn = form.querySelector(".nextBtn"),
backBtn = form.querySelector(".backBtn"),
allInput = form.querySelectorAll(".first input");
allselect = form.querySelectorAll(".first select");


// nextBtn.addEventListener("click", ()=> {
//     allInput.forEach(input => {
//         if(input.value != ""){
//             form.classList.add('secActive');
//         }else{
//             form.classList.remove('secActive');
//         }
//     })
// })

nextBtn.addEventListener("click", ()=> {
    allselect.forEach(input => {
        if(input.value != ""){
            form.classList.add('secActive');
        }else{
            form.classList.remove('secActive');
        }
    })
})

backBtn.addEventListener("click", () => form.classList.remove('secActive'));