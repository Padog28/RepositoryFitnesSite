let login = document.getElementById('login_field');
let password = document.getElementById('pass_first');
let pass_again = document.getElementById('pass_second');
let fio = document.getElementById('fio_field');
let email = document.getElementById('email_field');

function submitForm(){
    console.log(password);
    console.log(pass_again);
    if(password.value === pass_again.value){
        document.getElementById('error_text').style.display='none';
        let User = {
            log: login.value,
            passw: password.value,
            fio: fio.value,
            email: email.value
        }
        console.log(User);
        fetch('/someadressIDK', {
            method: 'POST',
            headers: {'Content-Type': 'application/json'},
            body: JSON.stringify(User)
        }).then((res)=>{
            console.log(res);
        })
    }
    else{
        console.log(0);
        document.getElementById('error_text').style.display='block';
    }
}