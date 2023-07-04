let config = {
  method: "get",
  maxBodyLength: Infinity,
  url: "https://restcountries.com/v3.1/all",
};

axios
  .request(config)
  .then((response) => {
    console.log(JSON.stringify(response.data));
    let json = response.data;
    alert(json.name[i].common);
  })
  .catch((error) => {
    console.log(error);
  });

let html = "";

html += "<table class='table table-bordered'>";
html += "<thead class='table-dark'>";
html += "<tr>";
html += "<th scope='col'>land</th>";
html += "<th scope='col'>vlag</th>";
html += "<th scope='col'>buur-landen</th>";
html += "</tr>";
html += "</thead>";
html += "<tbody>";

html += "</tbody>";
html += "</table>";
document.getElementById("output").innerHTML = html;
