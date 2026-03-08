const toggle = document.getElementById("theme-toggle")

const theme = localStorage.getItem("theme")

if(theme === "dark"){
document.body.classList.add("dark-mode")
toggle.innerText = "☀️"
}

toggle.addEventListener("click", () => {

document.body.classList.toggle("dark-mode")

if(document.body.classList.contains("dark-mode")){
localStorage.setItem("theme","dark")
toggle.innerText="☀️"
}else{
localStorage.setItem("theme","light")
toggle.innerText="🌙"
}

})