const menuIcon = document.querySelector(".menu-icon")
const closeIcon = document.querySelector(".close")
const sidebar = document.querySelector(".sidebar")
menuIcon.addEventListener("click", function(){
	sidebar.classList.add("open")
})
closeIcon.addEventListener("click", function(){
	sidebar.classList.remove("open")
})
console.log(sidebar)