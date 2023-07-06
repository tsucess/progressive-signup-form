let form_1 = document.querySelector(".form_1");
let form_2 = document.querySelector(".form_2");
let form_3 = document.querySelector(".form_3");


let form_1_btns = document.querySelector(".form_1_btns");
let form_2_btns = document.querySelector(".form_2_btns");
let form_3_btns = document.querySelector(".form_3_btns");





let form_1_next_btn = document.querySelector(".form_1_btns .btn_next");

let form_2_back_btn = document.querySelector(".form_2_btns .btn_back");
let form_2_next_btn = document.querySelector(".form_2_btns .btn_next");

let form_3_back_btn = document.querySelector(".form_3_btns .btn_back");
let form_3_Done_btn = document.querySelector(".form_3_btns .btn_done");

let form_1_progressbar = document.querySelector(".form_1_progressbar");
let form_2_progressbar = document.querySelector(".form_2_progressbar");
let form_3_progressbar = document.querySelector(".form_3_progressbar");


let verify_input = document.querySelector("#verify");
let verify_btn = document.querySelector("#v_btn");

let error_text = document.querySelector(".error_text");
let password_input = document.querySelector("#password");
let c_password_input = document.querySelector("#c_password");
let done_btn = document.querySelector("#done_btn");


function validation ( input, btn){
    input.onkeyup = () => {
        let code = input.value
        
        if (code.length < 6){
            btn.setAttribute('disabled', "");
            btn.style.cursor = "no-drop";
            btn.style.opacity  = 0.5;
        }else {
            btn.removeAttribute('disabled', "");
            btn.style.cursor = "pointer";
            btn.style.opacity  = 1;

        }
    }
}


function checkMatched ( input_1, input_2, message){
    input_2.onkeyup = () => {
        console.log(input_1.value);
        console.log(input_2.value);
        if (input_1.value < 8){
            message.innerHTML = "Password must not be less than 8";
            message.classList.remove('valid');
            message.classList.add('invalid');
            done_btn.setAttribute('disabled', "");
            done_btn.style.cursor = "no-drop";
            done_btn.style.opacity  = 0.5;
        } else {
            if ( input_1.value === input_2.value){
                message.innerHTML = "Password Matched"
                message.classList.add('valid');
                message.classList.remove('invalid');
                done_btn.removeAttribute('disabled', "");
                done_btn.style.cursor = "pointer";
                done_btn.style.opacity  = 1;
            } else {
                message.innerHTML = "Password does not Match";
                message.classList.remove('valid');
                message.classList.add('invalid');
            }
           
        }
    }

}







form_1_next_btn.onclick = () =>{

    form_1.style.display ="none"; 
    form_2.style.display ="block";
    
    
    form_1_btns.style.display = "none"; 
    form_2_btns.style.display = "flex"; 

    form_1_progressbar.classList.remove('active');
    form_2_progressbar.classList.add('active');
}

form_2_back_btn.onclick = () => {

    form_2.style.display = "none";
    form_1.style.display = "block";

    form_2_btns.style.display = "none";
    form_1_btns.style.display = "flex";


    form_2_progressbar.classList.remove('active');
    form_1_progressbar.classList.add('active');
}

form_2_next_btn.onclick = () =>{

    form_2.style.display ="none"; 
    form_3.style.display ="block";
    
    
    form_2_btns.style.display = "none";
    form_3_btns.style.display = "flex"; 

    form_2_progressbar.classList.remove('active');
    form_3_progressbar.classList.add('active');

    checkMatched(password_input, c_password_input, error_text);
}


form_3_back_btn.onclick = () => {

    form_3.style.display = "none";
    form_2.style.display = "block";

    form_3_btns.style.display = "none";
    form_2_btns.style.display = "flex";


    form_3_progressbar.classList.remove('active');
    form_2_progressbar.classList.add('active');
}




validation(verify_input, verify_btn);


done_btn.onclick = () => {
    alert ("You have Successfully Registered");
}

