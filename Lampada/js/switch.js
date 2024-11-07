function turnlight() {
    //Lampada
    const bulb = document.querySelector(".bulb");
    //Interruptor
    const buttom = document.querySelector(".switch");

    buttom.classList.toggle("on");
    bulb.classList.toggle("on");
}
