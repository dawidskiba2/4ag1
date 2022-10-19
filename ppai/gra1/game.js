// ustawienie rozmiaru świata gry, zmienne te są kilka razy używane
var width = 480;
var height = 320;

// utworzenie i zaincjalizowanie świata gry
var game = new Phaser.Game(width, height, Phaser.AUTO, null, {preload: preload, create: create, update: update});

// incjalizacja zmiennych
// zmienna symbolizuje gracza
var gracz;

var jablko;


// szybkość poruszania graczem
var szybkosc = 275;

var start = 0;
var informacja;
var punkty =0;


// -------------------------------------------------------
// -------------------------------------------------------

function preload() {
	// ustawienie koloru tła - standardowo jest czarne
	game.stage.backgroundColor = '#fff';
	// załadowanie obrazków, przypisanie im nazw
	game.load.image('gracz', 'asset/koszyk.png');
	game.load.image('jedzenie', 'asset/jablko.png');
	game.load.image('trawa', 'asset/trawa.png');

}

// -------------------------------------------------------
// -------------------------------------------------------

function create() {	
	// włączenie fizyki ARCADE dla całego świata
	game.physics.startSystem(Phaser.Physics.ARCADE);
	// zainicjuj strzałki klawiatury do kontroli gier
	cursors = game.input.keyboard.createCursorKeys();
	// dodanie sprita gracza
	gracz = game.add.sprite(160, 240, 'gracz');
	// włączenie wizyki dla gracza - fizyka - ARCADE
	game.physics.enable(gracz, Phaser.Physics.ARCADE);
	// wykrywane są "kolizje gracza z granicami świata"
	gracz.body.collideWorldBounds = true;
	
	informacja = game.add.text(80, 50, "Naciśnij strzałkę w górę aby rozpocząć", {font: '18px Arial'});

	trawa = game.add.sprite(0,310, 'trawa');
	game.physics.enable(trawa, Phaser.Physics.ARCADE)
}

// -------------------------------------------------------
// -------------------------------------------------------

function update() {
	if((cursors.up.isDown) && (start ==0))
	{
		informacja.kill();
		start = 1;
		noweJablko();
	}

	// definicja reakcji na strzełki (klawiaturę) lewo i prawo
	if (cursors.left.isDown) {
		// przesywamy gracza w  lewo
		// własciwość velocity oznacza lub tempo zmiany prędkości ciała - mierzona jest w pikselach na sekundę
		// wartość ujemna czyli w lewo, bo w prawo współrzędna x rośnie
		gracz.body.velocity.x = -szybkosc;
	}
	else if (cursors.right.isDown) {
		// przesywamy gracza w  prawoa
		gracz.body.velocity.x = szybkosc;
	}
	else {
		// zatrzymanie gracza jak nie naciska <- lub ->
		gracz.body.velocity.x = 0;
	}
	game.physics.arcade.overlap(jablko, gracz, gra)
	game.physics.arcade.overlap(trawa, jablko, koniecGry);
	
}

function noweJablko() {
	jablko = game.add.sprite(game.rnd.between(40,440), 0,'jedzenie');
	game.physics.arcade.enable(jablko);
	jablko.body.gravity.y = game.rnd.between(200,900);
}

function koniecGry() {
	jablko.kill();
	informacja.kill();
	informacja = game.add.text(80, 50, punkty + "pkt. Koniec Gry", {font: '18px Arial'});
	start = 0;
	punkty = 0;
}

function gra(){
	jablko.kill();
	informacja.kill();
	punkty += 1;
	informacja = game.add.text(80, 50, punkty + "pkt.", {font: '18px Arial'});
	noweJablko();

}

