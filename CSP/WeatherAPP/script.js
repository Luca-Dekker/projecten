let url =
  "https://api.openweathermap.org/data/2.5/forecast?lat=52.668413&lon=6.503124&units=metric&lang=NL&appid=0cd89880de88cea98c6f5c7c3e7ffd59";

function fLaadWeer_axios() {
  axios.get(url).then(function (response) {
    let json = response.data;
    console.log("Weer, geladen met AJAX via Axios ", json);
    let html = "<h1>Het weer in " + json.city.name + "</h1><br>";

    html += "<table class='table table-bordered'>";
    html += "<thead class='table-dark'>";
    html += "<tr>";
    html += "<th scope='col'>datum</th>";
    html += "<th scope='col'>temperatuur</th>";
    html += "<th scope='col'>vochtigheid</th>";
    html += "<th scope='col'>druk</th>";
    html += "<th scope='col'>bewolking</th>";
    html += "<th scope='col'>wind</th>";
    html += "</tr>";
    html += "</thead>";
    html += "<tbody>";

    let weatherIcon;

    for (let i = 0; i < json.list.length; i++) {
      if (json.list[i].weather[0].description == "half bewolkt") {
        weatherIcon = "IMG/clouds.png";
      } else if (json.list[i].weather[0].description == "licht bewolkt") {
        weatherIcon = "IMG/mist.png";
      } else if (json.list[i].weather[0].description == "bewolkt") {
        weatherIcon = "IMG/clouds.png";
      } else if (json.list[i].weather[0].description == "onbewolkt") {
        weatherIcon = "IMG/clear.png";
      } else if ( json.list[i].weather[0].description == "zeer lichte bewolking") {
        weatherIcon = "IMG/mist.png";
      } else if (json.list[i].weather[0].description == "lichte regen") {
        weatherIcon = "IMG/drizzle.png";
      }

      html += "<tr>";
      html += "<td>" + formatDateTime(json.list[i].dt) + "</td>";
      html += "<td>" + Math.round(json.list[i].main.temp) + " C&deg; </td>";
      html += "<td>" + json.list[i].main.humidity + " % </td>";
      html += "<td>" + json.list[i].main.pressure + " hPa </td>";
      html += "<td>" + json.list[i].weather[0].description + "</td>";
      html += "<td>" + weatherIcon + "</td>";
      html += "<td>" + json.list[i].wind.speed + " KM/h </td>";
      html += "</tr>";
    }

    html += "</tbody>";
    html += "</table>";
    document.getElementById("out_data").innerHTML = html;
  });
}

function formatDateTime(timestamp) {
  let dateTimeString = "";
  if (timestamp) {
    let date = new Date(timestamp * 1000);
    dateTimeString = date.toLocaleString();
  }
  return dateTimeString;
}
