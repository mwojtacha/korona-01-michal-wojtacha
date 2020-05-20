const lady = document.querySelector(".lady");
const main = document.querySelector(".main");

lady.addEventListener('mouseenter', function(){
    main.style.background = "white";
    main.style.animation = "kolor 1s infinite"
})
lady.addEventListener('mouseleave', function(){
    main.style.background = "#2BA84A";
    main.style.animation = "none"
})
