window.addEventListener("load", initSite);

function initSite() {
  document.getElementById("loadHoroscope").innerText = "";
  updateHoroscope()
}

function viewHoroscope() {
  fetch("./php/viewHoroscope.php", {
    method: "GET",
  })
    .then((data) => {
      return data.json();
    })
    .then((result) => {
      console.log(result);
      loadHoroscope(result);
    })
    .catch((err) => {
      console.log(err);
    });
}
function loadHoroscope(hscope) {
  let div = document.getElementById("loadHoroscope");

  if (hscope) {
    div.innerText = hscope;
  } else {
    div.innerText = "";
  }
}

function addHoroscope() {
  document.getElementById(date);

  let datum = date.value;
  console.log(datum);

  if(datum == 0) {
      document.getElementById("loadHoroscope").innerText = "Fyll i ditt personnummer för att se ditt horoskop"
 } else {

  let url = "./php/addHoroscope.php";
  let method = "POST";
  let form = new FormData();
  form.set("date", datum);

  fetch(url, {
    method: method,
    body: form,
  })
    .then((response) => {
      console.log(response);
      return response.json();
    })
    .then((result) => {
      console.log(result);
      viewHoroscope();
    })
    .catch((err) => {
      console.log("Error: ", err);
    });
 }
}

function updateHoroscope() {
  document.getElementById(date);

  let datum = date.value;
  console.log(datum + " updaterat!");

  if(datum == 0) {
      document.getElementById("loadHoroscope").innerText = "Inget datum inmatat, fyll i ditt födelsedatum"
  } else {

  let url = "./php/updateHoroscope.php";
  let method = "POST";
  let form = new FormData();
  form.set("date", datum);

  fetch(url, {
    method: method,
    body: form,
  })
    .then((response) => {
      console.log(response);
      return response.json();
    })
    .then((result) => {
      console.log(result);
      viewHoroscope();
      loadHoroscope(result);
    })
    .catch((err) => {
      console.log("Error: ", err);
    });
    }
}

function deleteHoroscope() {
  fetch("./php/deleteHoroscope.php", {
    method: "DELETE",
  })
    .then((data) => {
      return data.json();
    })
    .then((result) => {
      viewHoroscope();
      loadHoroscope(result);
    })
    .catch((err) => {
      console.log(err);
    });
  console.log("Sparat horoskop borttaget");
}
