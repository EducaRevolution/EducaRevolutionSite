<<<<<<< HEAD

//DO CADASTRO
const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');
//DO CADASTRO

signUpButton.addEventListener('click', () => {
    container.classList.add("right-panel-active");
  });

  signInButton.addEventListener('click', () => {
    container.classList.remove("right-panel-active");
  });

document.addEventListener('DOMContentLoaded', function() {
    const mobileToggle = document.querySelector('.mobile-toggle');
    const navigation = document.querySelector('.nav-links');
    const toggleIcon = mobileToggle?.querySelector('i');
    const overlay = document.querySelector('.nav-overlay');
    
    // Inicializa o menu corretamente baseado no tamanho da tela
    function initMenuState() {
        if (window.innerWidth <= 1000) {
            // Configuração mobile
            navigation.style.display = 'none';
            navigation.style.transform = 'translateX(100%)';
        } else {
            // Configuração desktop
            navigation.style.display = 'flex';
            navigation.style.transform = '';
        }
    }
    
    // Chama a função inicial
    initMenuState();
    
    // Toggle do menu mobile
    function toggleMenu() {
        const isExpanded = mobileToggle.getAttribute('aria-expanded') === 'true';
        mobileToggle.setAttribute('aria-expanded', !isExpanded);
        
        if (!isExpanded) {
            // Abrir menu
            document.body.style.overflow = 'hidden';
            toggleIcon.style.color = 'white';
            overlay.classList.add('active');
            navigation.style.display = 'flex';
            setTimeout(() => {
                navigation.style.transform = 'translateX(0)';
            }, 10);
        } else {
            // Fechar menu
            closeMenu();
        }
    }
    
    function closeMenu() {
        mobileToggle.setAttribute('aria-expanded', 'false');
        document.body.style.overflow = '';
        toggleIcon.style.color = 'black';
        overlay.classList.remove('active');
        navigation.style.transform = 'translateX(100%)';
        setTimeout(() => {
            navigation.style.display = 'none';
        }, 300);
    }
    
    // Event listeners
    mobileToggle.addEventListener('click', toggleMenu);
    overlay.addEventListener('click', closeMenu);
    
    // Fechar menu ao clicar nos links (mobile)
    document.querySelectorAll('.nav-item').forEach(item => {
        item.addEventListener('click', function() {
            if (window.innerWidth <= 1000) {
                closeMenu();
            }
        });
    });
    
    // Resize handler
    window.addEventListener('resize', function() {
        initMenuState();
        
        // Se mudar para desktop, garante que o menu está visível
        if (window.innerWidth > 1000) {
            navigation.style.display = 'flex';
            navigation.style.transform = '';
            overlay.classList.remove('active');
            document.body.style.overflow = '';
        }
    });
=======
var btnSignin = document.querySelector("#signin");
var btnSignup = document.querySelector("#signup");

var body = document.querySelector("body");

btnSignin.addEventListener("click",function(){
    body.className = "sign-in-js";
});

btnSignup.addEventListener("click",function(){
    body.className = "sign-up-js";
>>>>>>> feature
});