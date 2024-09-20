let side = document.getElementById("sidebar");
let about = document.getElementById("about");

function muncul(){
    side.classList.toggle("d-none")
}

//scroll
AOS.init(); 


// Inisialisasi Typewriter
document.addEventListener('DOMContentLoaded', function() {
const typewriter = new Typewriter('#typewriter', {
    loop: true
        });

        typewriter.typeString('<span style="color: skyblue;"> Game </span> Developer')
            .pauseFor(2500)
            .deleteAll()
            .typeString('<span style="color: skyblue;"> Fullstack </span> Web Developer')
            .pauseFor(2500)
            .deleteAll()
            .start();

    });
