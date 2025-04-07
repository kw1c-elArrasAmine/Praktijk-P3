// Vult de naam in
document.querySelector('input[name="naam"]').value = "John Doe";

// Vult de snelheid in
document.querySelector('input[name="snelheid"]').value = 60;

// Vult de penetratie in
document.querySelector('input[name="penetratie"]').value = 120;

// Vult het kaliber in
document.querySelector('input[name="kaliber"]').value = 75;

// Vult het combat bereik in
document.querySelector('input[name="combat_bereik"]').value = 2000;

// Vult het pantser frontaal in
document.querySelector('input[name="pantser_frontaal"]').value = 150;

// Vult het pantser zijkant in
document.querySelector('input[name="pantser_zijkant"]').value = 100;

// Vult het pantser achterkant in
document.querySelector('input[name="pantser_achterkant"]').value = 80;

// Vult de specialisatie in (bijv. "anti-tank")
document.querySelector('input[name="specialisatie"][value="anti-tank"]').checked = true;

// Vult de motor hp in
document.querySelector('input[name="motor_hp"]').value = 1200;

// Vult de brandstof in (bijv. "diesel")
document.querySelector('input[name="brandstof"][value="diesel"]').checked = true;

// Vult kostenefficiënt in
document.querySelector('input[name="kostenefficient"][value="ja"]').checked = true;

// Vult shells in (bijv. AP en APHE)
document.querySelector('input[name="shells[]"][value="AP"]').checked = true;
document.querySelector('input[name="shells[]"][value="APHE"]').checked = true;

// Vult gewicht in
document.querySelector('input[name="gewicht"]').value = 80;





// Vult amfibisch in (bijv. "ja")
document.querySelector('input[name="amfibisch"][value="ja"]').checked = true;
