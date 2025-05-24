const starButtons = document.querySelectorAll('.yellow-star-btn');


starButtons.forEach(button => {
    // Encontra a estrela amarela DENTRO deste botão específico
    const yellowStar = button.querySelector('.buttons__icon-yellow-star');
    let btn_on = false;
    
    button.addEventListener('click', function(){
        btn_on = !btn_on;

        if(btn_on){
            yellowStar.style.zIndex = "3";
        }else{
            yellowStar.style.zIndex = "1";
        }

    });

    button.addEventListener('mouseenter', function() {
        yellowStar.style.zIndex = "3";
    });
    
    button.addEventListener('mouseleave', function() {
        if(btn_on == false) {
            yellowStar.style.zIndex = "1";
        }
    });
});