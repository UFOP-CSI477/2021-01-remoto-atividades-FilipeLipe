function Login(email, senha) {
    this.email = email;
    this.senha = senha;
}

function CarregarDadosForm() {
    const email = document.FormLogin.Email.value;
    const senha = document.FormLogin.Senha.value;

    const User = new Login(email, senha);
    console.log(User);

    window.alert("LOGIN EFETUADO !!");
}