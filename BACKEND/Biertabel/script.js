fetch("https://15euros.nl/api/bier_basic.php")
  .then((data) => {
    // console.log(data);
    return data.json();
  })
  .then((objectData) => {
    console.log(objectData[0].id);
    let tableData = "";
    objectData.map((values) => {
      tableData += `
        <tr>
        <th scope="row">${values.id}</th>
        <td>${values.naam}</td>
        <td>${values.brouwer}</td>
        <td>${values.perc}</td>
        <td>${values.gisting}</td>
        <td>${values.inkoop_prijs}</td>
        <td>${values.type}</td>
        </tr>`;
    });
    document.getElementById("table_body").innerHTML = tableData;
  });

  function searchTable() {
    var searchValue = document.getElementById("searchInput").value.toLowerCase();
  
    var rows = document.getElementById("table_body").getElementsByTagName("tr");
  
    for (var i = 0; i < rows.length; i++) {
      var rowData = rows[i].innerText.toLowerCase();
      if (rowData.includes(searchValue)) {
        rows[i].style.display = "";
      } else {
        rows[i].style.display = "none";
      }
    }
  }
  
  
