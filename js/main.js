// Scroll animations
const scrollElements = document.querySelectorAll(".scroll-fade");

const elementInView = (el, percentageScroll = 100) => {
  const elementTop = el.getBoundingClientRect().top;
  return (
    elementTop <=
    (window.innerHeight || document.documentElement.clientHeight) *
      (percentageScroll / 100)
  );
};

const displayScrollElement = (element) => {
  element.classList.add("visible");
};

const handleScrollAnimation = () => {
  scrollElements.forEach((el) => {
    if (elementInView(el, 90)) {
      displayScrollElement(el);
    }
  });
};

// Mobile menu toggle
const mobileMenuBtn = document.getElementById("mobile-menu-btn");
const mobileMenu = document.getElementById("mobile-menu");

mobileMenuBtn.addEventListener("click", () => {
  mobileMenu.classList.toggle("hidden");
});

// Close mobile menu when clicking a link
document.querySelectorAll("#mobile-menu a").forEach((link) => {
  link.addEventListener("click", () => {
    mobileMenu.classList.add("hidden");
  });
});

// Modal functions
function openModal(id) {
  const modal = document.getElementById(id);
  const content = modal.querySelector("div");
  modal.classList.remove("hidden");
  setTimeout(() => {
    content.classList.remove("scale-95", "opacity-0");
    content.classList.add("scale-100", "opacity-100");
  }, 10);
}

function closeModal(id) {
  const modal = document.getElementById(id);
  const content = modal.querySelector("div");
  content.classList.remove("scale-100", "opacity-100");
  content.classList.add("scale-95", "opacity-0");
  setTimeout(() => {
    modal.classList.add("hidden");
  }, 300);
}

// Advice API
async function loadAdvice() {
  const adviceText = document.getElementById("adviceText");
  try {
    const res = await fetch("https://api.adviceslip.com/advice");
    const data = await res.json();
    adviceText.innerText = `"${data.slip.advice}"`;
  } catch {
    adviceText.innerText =
      "Could not fetch advice at the moment. Try again later!";
  }
}

// Joke API
async function loadJoke() {
  const jokeText = document.getElementById("jokeText");
  try {
    const res = await fetch("https://official-joke-api.appspot.com/random_joke");
    const data = await res.json();
    jokeText.innerText = `${data.setup}\n\n${data.punchline}`;
  } catch {
    jokeText.innerText =
      "Could not fetch a joke at the moment. Try again later!";
  }
}

// Smooth scroll for anchor links
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
  anchor.addEventListener("click", function (e) {
    e.preventDefault();
    const target = document.querySelector(this.getAttribute("href"));
    if (target) {
      target.scrollIntoView({
        behavior: "smooth",
        block: "start",
      });
    }
  });
});

// Initialize
window.addEventListener("scroll", () => {
  handleScrollAnimation();
});

handleScrollAnimation(); // Run once on load

// Close modals when clicking outside
window.addEventListener("click", (e) => {
  if (e.target.id === "adviceModal") closeModal("adviceModal");
  if (e.target.id === "jokeModal") closeModal("jokeModal");
});
