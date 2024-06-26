let main_navItems = document.querySelectorAll(".main_nav a");
for (let navItem of main_navItems){
    navItem.addEventListener('click', (evt)=>{
        document.querySelector(".main_nav a.active").classList.remove("active");
        evt.target.classList.add("active");
    })
};

