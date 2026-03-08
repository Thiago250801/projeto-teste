const toggle = document.getElementById("theme-toggle");
const icon   = toggle.querySelector("i");

function applyTheme(dark) {
  document.body.classList.toggle("dark-mode", dark);
  icon.className = dark ? "bi bi-sun-fill" : "bi bi-moon-stars-fill";
}

applyTheme(localStorage.getItem("theme") === "dark");

toggle.addEventListener("click", () => {
  const isDark = document.body.classList.contains("dark-mode");
  localStorage.setItem("theme", isDark ? "light" : "dark");
  applyTheme(!isDark);
});