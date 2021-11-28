const button = document.getElementById('enviar');
const InputValidation = () =>{

let nameValue = document.getElementById('nome').value;
let emailValue = document.getElementById('email').value;
const pessoa = { name:nameValue, email:emailValue};
const {name,email} = pessoa;
 if(name === ''){
    console.log('não enviou');
 }else{
     EnviarDados(name);
 }

};

const EnviarDados =(nameUser)=>{
 console.log(nameUser);
}

button.addEventListener('click',(event)=>{
    InputValidation();
})