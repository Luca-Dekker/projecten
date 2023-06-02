function showTable() {
    var num = document.getElementById("inputNumber").value;
    var table = "<table border='1'>";
    for (var i = 1; i <= 10; i++) {
      table += "<tr><td style='border-color: red;' style='background-color: red;'>" + num + " x " + i + " = " + num * i + "</td></tr>";
    }
    table += "</table>";
    document.getElementById("output").innerHTML = table;
}


