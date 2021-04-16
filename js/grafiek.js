const startGrafiek = () => {
  laadJSON("data.json");
}

const laadJSON = (url) => {
  // het XMLHttpRequest object maken
  const aanvraag = new XMLHttpRequest();

  // Omschrijf wat er moet gebeuren ALS je de data succesvol binnen hebt
  aanvraag.onreadystatechange = () => {
    if (aanvraag.readyState === 4 && aanvraag.status === 200) {
      let jsonText = aanvraag.responseText;
      grafiekData = JSON.parse(jsonText);
      maakGrafiek(grafiekData);
    }
  };

  // serveraanvraag specificeren
  aanvraag.open("GET", url, true);

  // aanvraag versturen
  aanvraag.send();
};


const maakGrafiek = (data) => {
    new Chartist.Bar('#grafiek', data);

}
document.getElementById("grafiek").innerText = startGrafiek();
// Wacht tot de pagina is geladen, dan pas de startGrafiek functie uitvoeren
window.addEventListener('DOMContentLoaded', startGrafiek);


