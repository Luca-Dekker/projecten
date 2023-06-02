var myInterval;
function kleurLoop() {
  const ids = [
    document.getElementById("kleur1"),
    document.getElementById("kleur2"),
    document.getElementById("kleur3"),
    document.getElementById("kleur4"),
    document.getElementById("kleur5"),
    document.getElementById("kleur6"),
    document.getElementById("kleur7"),
    document.getElementById("kleur8"),
    document.getElementById("kleur9"),
  ];

  const colors = [
    "red",
    "orange",
    "yellow",
    "green",
    "blue",
    "purple",
    "pink",
    "brown",
    "gray",
  ];

  for (let i = 0; i < ids.length; i++) {
    const randomcolor = colors[Math.floor(Math.random() * colors.length)];
    ids[i].style.backgroundColor = randomcolor;
  }

  const baseColorIds = [
    "kleur1",
    "kleur2",
    "kleur3",
    "kleur4",
    "kleur5",
    "kleur6",
    "kleur7",
    "kleur8",
    "kleur9",
  ];

  const randomIndex = Math.floor(Math.random() * baseColorIds.length);
  const baseColor = document.getElementById(baseColorIds[randomIndex]).style
    .backgroundColor;

  document.getElementById("basiskleur").style.backgroundColor = baseColor;
}

function colorCompare() {
  const kleurDivs = document.querySelectorAll('.kleur');
  const scoreDiv = document.getElementById('scoreDiv');

  kleurDivs.forEach((div) => {
    div.removeEventListener('click', checkColor); 
    div.addEventListener('click', checkColor);
  });

  function checkColor() {
    const kleur = this.style.backgroundColor;
    const basiskleur = document.querySelector('.baseColor').style.backgroundColor;

    if (kleur === basiskleur) {
      scoreDiv.innerHTML += ' <br/>raak';
    } else {
      scoreDiv.innerHTML += ' <br/>mis';
    }

    this.removeEventListener('click', checkColor);
  }
}


let hasStarted = false;

function startToggle() {
  if (!hasStarted) {
    myInterval = setInterval(function() {
      kleurLoop();
    }, 2000);
    kleurLoop();
    hasStarted = true; 
  }
}

function rangeInput() {
  var kleurOutput = document.getElementsByName("kleurOutput");
}

function stopToggle() {
  clearInterval(myInterval);
  alert("Stopped");
  const ids = [
    document.getElementById("kleur1"),
    document.getElementById("kleur2"),
    document.getElementById("kleur3"),
    document.getElementById("kleur4"),
    document.getElementById("kleur5"),
    document.getElementById("kleur6"),
    document.getElementById("kleur7"),
    document.getElementById("kleur8"),
    document.getElementById("kleur9"),
    document.getElementById("basiskleur"),
  ];

  for (let i = 0; i < ids.length; i++) {
    ids[i].style.backgroundColor = "grey";
  }
}

function updateInterval() {
  const intervalRange = document.getElementById("interval-range");
  const newInterval = intervalRange.value;
  clearInterval(myInterval);
  myInterval = setInterval(kleurLoop, newInterval);
}

