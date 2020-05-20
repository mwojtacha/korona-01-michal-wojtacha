const bells = document.querySelector(".bells");
const buy = document.querySelector(".turnip_price");
const sell = document.querySelector(".turnip_sell");
const btn = document.querySelector(".oblicz");
const wynik1 = document.querySelector(".wynik");
const wynik2 = document.querySelector(".wynik2");

btn.addEventListener(
    'click', 
    function (){
        wynik1.innerText = (parseInt((bells.value / buy.value) * sell.value) - parseInt(bells.value)).toFixed();
        wynik2.innerText = (((bells.value / buy.value) * sell.value) / bells.value).toFixed(2);
    }
    );