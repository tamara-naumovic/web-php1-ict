$(document).ready(function(){

    // DINAMICKO ISPISIVANJE MENIJA

    var navmeni = [
        {
            "id" : 1,
            "naziv" : "Home",
            "url" : "index.php",
        },
        {
            "id" : 2,
            "naziv" : "Store",
            "url" : "store.php",
        },
        {
            "id" : 3,
            "naziv" : "About",
            "url" : "about.php",
        },
        {
            "id" : 4,
            "naziv" : "Contact",
            "url" : "contact.php",
        },
        {
            "id" : 5,
            "naziv" : "Login",
            "url" : "login.php",
        }
    ];

    var ispis = "";
    for(element of navmeni){
        ispis += '<li class="stavka"><a class="link" href='+element.url+'>'+element.naziv+'</a></li>';
    }

    document.querySelector(".menu").innerHTML=ispis;

    // SLAJDER ISPISIVANJE I ANIMACIJA

    var slajder = [
        {
            "id" : 1,
            src : "images/banner1.jpg",
            alt : "banner1",
        },
        {
            "id" : 2,
            src : "images/banner2.jpg",
            alt : "banner2",
        },
        {
            "id" : 3,
            src : "images/banner3.png",
            alt : "banner3",
        },
        {
            "id" : 4,
            src : "images/banner4.jpg",
            alt : "banner4",
        },
        {
            "id" : 5,
            src : "images/banner5.jpg",
            alt : "banner5",
        }
    ];

    var ispis1 = '';

    for(let i=0; i<slajder.length; i++){
        if(i == 0){
            ispis1 += `<input type="radio" name="radio-btn" id="radio1"/>
            <input type="radio" name="radio-btn" id="radio2"/>
            <input type="radio" name="radio-btn" id="radio3"/>
            <input type="radio" name="radio-btn" id="radio4"/>
            <input type="radio" name="radio-btn" id="radio5"/>
            
            <div class="slide first active">
                <a href="#"><img src="${slajder[i].src}" alt="${slajder[i].alt}"/></a>
            </div>

            <div class="navigation-auto">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
                <div class="auto-btn3"></div>
                <div class="auto-btn4"></div>
                <div class="auto-btn5"></div>
            </div>

            <div class="navigation-manual">
                <label for="radio1" class="manual-btn"></label>
                <label for="radio2" class="manual-btn"></label>
                <label for="radio3" class="manual-btn"></label>
                <label for="radio4" class="manual-btn"></label>
                <label for="radio5" class="manual-btn"></label>
            </div>`;
        }
        else{
            ispis1 += `<div class="slide">
            <a href="#"><img src="${slajder[i].src}" alt="${slajder[i].alt}"/></a>
        </div>`;
        }
    }

    document.querySelector(".slides").innerHTML = ispis1;

    
    var brojac = 1;
    setInterval(function(){
        document.getElementById('radio' + brojac).checked = true;
        brojac ++;
        if(brojac > 5){
            brojac = 1;
        }
    }, 5000);

    
    
});