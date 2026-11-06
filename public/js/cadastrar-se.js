let ver_senha = document.getElementById("ver-senha");
let senha = document.getElementById("senha");
ver_senha.addEventListener("change", () => {
  if (senha.type == "password") {
    senha.type = "text";
  } else {
    senha.type = "password";
  }
});