/* Home */

document.addEventListener('DOMContentLoaded', function() {
  const formattedCodeText = document.getElementById('formatted-code-text');
  const dots = document.querySelectorAll('.dot');
  const formatData = document.querySelectorAll('#format-data > div');  // Get all format data divs
  let currentDot = 'red-dot';  // Start with 'red-dot' as the initial format

  function setFormat(dotId) {
      const description = document.querySelector(`#format-data > div[data-id='${dotId}']`).getAttribute('data-description');
      formattedCodeText.textContent = description;
  }

  // Initialize with the first code snippet when the page loads
  setFormat(currentDot);

  dots.forEach(dot => {
      dot.addEventListener('click', function() {
          const dotId = this.getAttribute('data-id');
          setFormat(dotId);
      });
  });

  // Change the snippet every 10 seconds
  setInterval(() => {
    const dotKeys = Array.from(formatData).map(div => div.getAttribute('data-id')); // Create an array of dot IDs
    let index = dotKeys.indexOf(currentDot);
    index = (index + 1) % dotKeys.length; // Move to the next index, or loop back to 0 if at the end
    currentDot = dotKeys[index];
    setFormat(currentDot);
  }, 5000);
});


/* Welcome Messege */

document.addEventListener('DOMContentLoaded', function() {
    const phrases = ["Frontend Development", "Backend Development", "Mobile App Development", "Machine Leaning"];
    let currentPhrase = 0;
    let currentCharacter = 0;
    let currentText = '';
    let deleting = false;
    let dynamicText = document.getElementById('dynamic-text');

    function type() {
        const wait = 200 + Math.random() * 100;

        // Check if deleting
        if (deleting) {
            currentText = phrases[currentPhrase].substring(0, currentCharacter--);
        } else {
            currentText = phrases[currentPhrase].substring(0, currentCharacter++);
        }

        dynamicText.textContent = currentText;

        if (!deleting && currentCharacter === phrases[currentPhrase].length) {
            // Start deleting after a pause
            setTimeout(() => deleting = true, 1200);
        } else if (deleting && currentText === '') {
            deleting = false;
            currentPhrase = (currentPhrase + 1) % phrases.length;
            currentCharacter = 0;
        }

        setTimeout(type, deleting ? 100 : wait);
    }

    // Start the typing effect
    setTimeout(type, 500);
});

/* Buttons */

function redirectToContact() {
  window.location.href = 'contact_content.php';
}



/*   Configure Particles.js */


particlesJS("particles-js", {
    "particles": {
      "number": {
        "value": 80,
        "density": {
          "enable": true,
          "value_area": 800
        }
      },
      "color": {
        "value": "#ffffff"
      },
      "shape": {
        "type": "circle",
        "stroke": {
          "width": 0,
          "color": "#000000"
        },
        "polygon": {
          "nb_sides": 5
        },
        "image": {
          "src": "img/github.svg",
          "width": 100,
          "height": 100
        }
      },
      "opacity": {
        "value": 0.5,
        "random": false,
        "anim": {
          "enable": false,
          "speed": 1,
          "opacity_min": 0.1,
          "sync": false
        }
      },
      "size": {
        "value": 5,
        "random": true,
        "anim": {
          "enable": false,
          "speed": 40,
          "size_min": 0.1,
          "sync": false
        }
      },
      "line_linked": {
        "enable": true,
        "distance": 150,
        "color": "#ffffff",
        "opacity": 0.4,
        "width": 1
      },
      "move": {
        "enable": true,
        "speed": 6,
        "direction": "none",
        "random": false,
        "straight": false,
        "out_mode": "out",
        "bounce": false,
        "attract": {
          "enable": false,
          "rotateX": 600,
          "rotateY": 1200
        }
      }
    },
    "interactivity": {
      "detect_on": "canvas",
      "events": {
        "onhover": {
          "enable": true,
          "mode": "repulse"
        },
        "onclick": {
          "enable": true,
          "mode": "push"
        },
        "resize": true
      },
      "modes": {
        "grab": {
          "distance": 140,
          "line_linked": {
          "opacity": 1
        }
        },
        "bubble": {
          "distance": 400,
          "size": 40,
          "duration": 2,
          "opacity": 8,
          "speed": 3
        },
        "repulse": {
          "distance": 200,
          "duration": 0.4
        },
        "push": {
          "particles_nb": 4
        },
        "remove": {
          "particles_nb": 2
        }
      }
    },
    "retina_detect": true
  });
  