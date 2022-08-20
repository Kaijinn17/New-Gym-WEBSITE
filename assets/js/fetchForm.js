const form = document.querySelector(".u-clearfix.u-form-spacing-10.u-form-vertical.u-inner-form");
const registerStatus = document.querySelector("#registerStatus");
const btnRegister = document.querySelector("#btnRegister");
form.addEventListener("submit", async evt => {
    evt.preventDefault();
    btnRegister.setAttribute("disabled", "");
    const name = evt.path[0].name.value;
    const phone = evt.path[0].phone.value;
    const email = evt.path[0].email.value;
    const password = evt.path[0].password.value;
    const date = evt.path[0].date.value;
    const genero = evt.path[0].genero.value;
    const planos = evt.path[0].planos.value;
    const agree = evt.path[0].agree.value;

    const url = './src/cadastro.php'
    const formData = `name=${name}&phone=${phone}&email=${email}&password=${password}&date=${date}&genero=${genero}&planos=${planos}&agree=${agree}`;
    const myHeaders = new Headers({
        'Content-Type': 'application/x-www-form-urlencoded; charset=utf-8'
    });
    const reqConfig = {
        method: 'POST',
        headers: myHeaders,
        body: formData,
        mode: 'no-cors'
    }
    let response = await fetch(url, reqConfig);
    const responseData = await response.json();
    if (responseData.success) {
        registerStatus.innerText = responseData.message;
        setTimeout(() => {
            window.location = "./loading.php";
        }, 5000);
    } else {
        btnRegister.removeAttribute("disabled");
        registerStatus.innerText = responseData.message;
    }
});