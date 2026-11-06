let ver_senha = document.getElementById("ver-senha");
let senha = document.getElementById("senha");
ver_senha.addEventListener("change", () => {
  if (senha.type == "password") {
    senha.type = "text";
  } else {
    senha.type = "password";
  }
});

const mapa = L.map("mapa").setView([-11.2, 17.8], 5);
const estadoLocalizacao = document.getElementById("estado-localizacao");
const botaoLocalizacao = document.getElementById("localizar-me");
let marcadorLocalizacao;

L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
  attribution:
    '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>',
  maxZoom: 19,
}).addTo(mapa);
L.control.scale({ imperial: false }).addTo(mapa);

botaoLocalizacao.addEventListener("click", () => {
  if (!window.isSecureContext) {
    estadoLocalizacao.textContent =
      "A localização requer uma ligação segura (HTTPS ou localhost).";
    return;
  }

  if (!navigator.geolocation) {
    estadoLocalizacao.textContent =
      "Este navegador não disponibiliza a localização.";
    return;
  }

  botaoLocalizacao.disabled = true;
  estadoLocalizacao.textContent = "A obter a sua localização...";

  navigator.geolocation.getCurrentPosition(
    (posicao) => {
      const { latitude, longitude } = posicao.coords;
      mapa.setView([latitude, longitude], 16);

      if (marcadorLocalizacao) {
        marcadorLocalizacao.setLatLng([latitude, longitude]);
      } else {
        marcadorLocalizacao = L.marker([latitude, longitude]).addTo(mapa);
      }

      marcadorLocalizacao.bindPopup("A sua localização").openPopup();
      estadoLocalizacao.textContent = "A sua localização está indicada no mapa.";
      botaoLocalizacao.disabled = false;
    },
    (erro) => {
      if (erro.code === erro.PERMISSION_DENIED) {
        estadoLocalizacao.textContent =
          "A permissão de localização foi recusada. Autorize-a no navegador para ver a sua posição.";
      } else if (erro.code === erro.POSITION_UNAVAILABLE) {
        estadoLocalizacao.textContent =
          "Não foi possível determinar a sua localização neste momento.";
      } else if (erro.code === erro.TIMEOUT) {
        estadoLocalizacao.textContent =
          "A localização demorou demasiado tempo. Tente novamente.";
      } else {
        estadoLocalizacao.textContent =
          "Ocorreu um erro ao obter a localização.";
      }

      botaoLocalizacao.disabled = false;
    },
    { enableHighAccuracy: true, timeout: 10000, maximumAge: 0 },
  );
});
