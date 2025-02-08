document.getElementById('hamburger-icon').addEventListener('click', function() {
    const navLinks = document.getElementById('nav-links');
    navLinks.classList.toggle('active'); 
});

document.addEventListener("DOMContentLoaded", function() {
    const words = [
        { text: "BAYANIHAN ", color: "#CF000A" }, 
        { text: "PARA SA MALINIS NA ", color: "#ffffff" }, 
        { text: "HALALAN", color: "#4FA3E5" }
    ];

    const speed = 100; 
    const eraseSpeed = 20;
    const delay = 2000; 

    let index = 0;
    let isDeleting = false;
    let charIndex = 0;
    let fullText = "";

    function updateText() {
        const element = document.getElementById("typewriter");
        element.innerHTML = "";

        let tempIndex = 0;
        let lastColor = "#333";

        for (const word of words) {
            if (charIndex >= tempIndex) {
                let wordEnd = Math.min(charIndex - tempIndex, word.text.length);
                let span = document.createElement("span");
                span.textContent = word.text.substring(0, wordEnd);
                span.style.color = word.color;
                element.appendChild(span);

                lastColor = word.color; 
            }
            tempIndex += word.text.length;
        }

        const cursor = document.createElement("span");
        cursor.textContent = "|";
        cursor.style.color = lastColor;  
        cursor.style.animation = "blink 0.7s infinite";  
        element.appendChild(cursor);
    }

    function typeWriter() {
        let totalLength = words.reduce((sum, word) => sum + word.text.length, 0);

        if (!isDeleting) {
            charIndex++;
            if (charIndex > totalLength) {
                isDeleting = true;
                setTimeout(typeWriter, delay); 
                return;
            }
        } else {
            charIndex--;
            if (charIndex === 0) {
                isDeleting = false;
            }
        }

        updateText();
        setTimeout(typeWriter, isDeleting ? eraseSpeed : speed);
    }

    typeWriter(); 
});



