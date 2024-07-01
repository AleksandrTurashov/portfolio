
/*main navigation*/

(function(){
let main_navItems = document.querySelectorAll(".main_nav a.nav_item");
for (let navItem of main_navItems){
    navItem.addEventListener('click', (evt)=>{
        document.querySelector(".main_nav a.active").classList.remove("active");
        evt.target.classList.add("active");
    })
    navItem.addEventListener("mouseenter", (evt)=>{
    evt.target.classList.add("item_hover");
    })
    navItem.addEventListener("mouseleave", (evt)=>{
    evt.target.classList.remove("item_hover");
    })
};
})();

/* sidebar */

(function(){
    close_bar_navigation_btn.onmouseenter = function(evt){
        evt.target.classList.add("btn_hover");
    }
    close_bar_navigation_btn.onmouseleave = function(evt){
        evt.target.classList.remove("btn_hover");
    }
    close_bar_navigation_btn.onclick = function(){
        document.querySelector(".sidebar_menu").style.right = '-310px';
    };
    main_content.onclick = function(){
        document.querySelector(".sidebar_menu").style.right = '-310px';
    };

    footer.onclick = function(){
        document.querySelector(".sidebar_menu").style.right = '-310px';
    };
    bar_navigation_btn.onclick = function(){
        document.querySelector(".sidebar_menu").style.right = '0px';
    };

    let side_navItems = document.querySelectorAll(".sidebar_nav a.nav_item");
        for (let navItem of side_navItems){
            navItem.addEventListener('click', (evt)=>{
                document.querySelector(".sidebar_nav a.active").classList.remove("active");
                evt.target.classList.add("active");
            })
            navItem.addEventListener("mouseenter", (evt)=>{
            evt.target.classList.add("item_hover");
            })
            navItem.addEventListener("mouseleave", (evt)=>{
            evt.target.classList.remove("item_hover");
            })
        };
})();

/* fitness classes */

(function(){
    let fitness_classes = document.querySelectorAll(".class_wrap");
        for(fitness_class of fitness_classes){
            fitness_class.onmouseenter = function(evt){
                evt.target.classList.add("fitness_class_hover");
            }
            fitness_class.onmouseleave = function(evt){
                evt.target.classList.remove("fitness_class_hover");
            }
        }
})();

/* shedule */

(function(){
    let fitness_days = document.querySelectorAll(".week_wrap span");
    for(fitness_day of fitness_days){
        fitness_day.onmouseenter = function(evt){
            evt.target.classList.add("day_hover");
        }
        fitness_day.onmouseleave = function(evt){
            evt.target.classList.remove("day_hover");
        }
        fitness_day.addEventListener('click', (evt)=>{
            document.querySelector(".week_wrap span.active").classList.remove("active");
            evt.target.classList.add("active"); 
        });
    };
})();

/* services */

(function(){
    let services_list = document.querySelectorAll(".service_wrap");
        for(service of services_list){
            service.onmouseenter = function(evt){
                evt.target.classList.add("service_wrap_hover");
            }
            service.onmouseleave = function(evt){
                evt.target.classList.remove("service_wrap_hover");
            }
        };
})();

/* scrolling */

(function(){
      window.addEventListener('scroll', ()=>{
            let headerItem = document.querySelector(".header_navigation");
            if(window.scrollY > 5){
                headerItem.classList.add("header_navigation_colored");
            }
            else {
                headerItem.classList.remove("header_navigation_colored");
            }
        });
})();

/* footer */

(function(){
    let footer_navItems = document.querySelectorAll(".footer_nav a.nav_item");
    for (let navItem of footer_navItems){
        
        navItem.addEventListener("mouseenter", (evt)=>{
        evt.target.classList.add("item_hover");
        })
        navItem.addEventListener("mouseleave", (evt)=>{
        evt.target.classList.remove("item_hover");
        })
    };
    })();