
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

/* healthy slider*/

(function(){
    
    let windowWidth = window.innerWidth;
    
    let carouselBlock = document.querySelector(".helthies_list_carousel.carousel_animation");

    window.addEventListener('resize', ()=>{
        
        let carouselBlock = document.querySelector(".helthies_list_carousel.carousel_animation");
        let windowWidthAdapt = window.innerWidth;
        adaptSwitchDots(windowWidthAdapt);
        moveSliderBlock(carouselBlock);
    })
    
    moveSliderBlock(carouselBlock);
    adaptSwitchDots(windowWidth);

    function adaptSwitchDots(windowWidth){ 
        let quantity;

        if(windowWidth >= 1201){
            quantity = 2;
            addSwitchesDots(quantity);
            let active_btn = document.querySelector(".dot_switch.active");

            if(active_btn.id >= quantity){
                active_btn.classList.remove("active");
                btns = document.querySelectorAll(".switch_wrap.abled_btn .dot_switch");
                btns[1].classList.add("active");
            }
        }

        if(windowWidth >= 993 && windowWidth <= 1200){
            quantity = 3;
            addSwitchesDots(quantity);
            let active_btn = document.querySelector(".dot_switch.active");
            
            if((active_btn.id/2) >= 2){
                active_btn.classList.remove("active");
                btns = document.querySelectorAll(".switch_wrap.abled_btn .dot_switch");
                btns[1].classList.add("active");
            }
        }

        if(windowWidth <= 992){
            quantity = 6;
            addSwitchesDots(quantity);
        }
    }

    function addSwitchesDots(quantity){
        let abled_btns = document.querySelectorAll(".switch_wrap.abled_btn");
        let btns = document.querySelectorAll(".switch_wrap");
        if(abled_btns.length >= quantity){
            for(let i = 0; i < abled_btns.length; i++){
                btns[i].classList.remove("abled_btn");
            }
            for(let i = 0; i < quantity; i++){
                btns[i].classList.add("abled_btn");
            }
        }
        else
            for(let i = abled_btns.length; i < quantity; i++){
                btns[i].classList.add("abled_btn");
            }
    }

})();

(function(){

    let switch_btns = document.querySelectorAll(".dot_switch");
    let carouselBlock = document.querySelector(".helthies_list_carousel.carousel_animation");

    for( let btn of switch_btns){
        btn.addEventListener('click' , (event)=>{
            document.querySelector(".dot_switch.active").classList.remove("active");
            event.target.classList.add("active");

            moveSliderBlock(carouselBlock);

        })
    }
})();

function moveSliderBlock(carouselBlock){
    let actbtn = document.querySelector(".dot_switch.active");
    let btns_list = document.querySelectorAll(".switch_wrap.abled_btn")

    if(btns_list.length == 2){
        quantity = 2;
        width = 1200;

        for(let i = 0; i < quantity; i++){
            if(actbtn.id == (i+1)){
                carouselBlock.style.marginLeft = '-'+(width*i)+'px';
            }
        }
    }
    if(btns_list.length == 3){
        quantity = 3;
        width = 860;

        for(let i = 0; i < quantity; i++){
            if(actbtn.id == (i+1)){
                carouselBlock.style.marginLeft = '-'+(width*i)+'px';
            }
        }
    }
    if(btns_list.length == 6){
        quantity = 6;
        width = 480;

        for(let i = 0; i < quantity; i++){
            if(actbtn.id == (i+1)){
                carouselBlock.style.marginLeft = '-'+(width*i)+'px';
            }
        }
    }
}

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
            let day_index = evt.target.getAttribute("data-day");
            document.querySelector(".shedule_week_wrap.active").classList.remove("active");
            document.getElementById(day_index).classList.add("active");
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

(function(){
    document.onscroll = function(){
    
        let scrollTop = window.scrollY;   
        let windowHeight = window.innerHeight;
        let navScrollSpy = document.querySelectorAll('[data-main_nav_spy]');
        let sideBarScrollSpy = document.querySelectorAll('[data-side_bar_spy]');
        let dataScrollSpy = document.querySelectorAll('[data-scroll]');
        
        dataScrollSpy.forEach(function(el){
            let sectionId = el.getAttribute("data-scroll");
            let sectionOffset = el.offsetTop;

            sectionOffset = sectionOffset - windowHeight * 0.2;

            if(scrollTop >= sectionOffset){
                for( let item of navScrollSpy){
                    item.classList.remove('active');
                };
                document.querySelector('[data-main_nav_spy="' + sectionId + '"]').classList.add("active");
            }
        })

        dataScrollSpy.forEach(function(el){
            let sectionId = el.getAttribute("data-scroll");
            let sectionOffset = el.offsetTop;

            sectionOffset = sectionOffset - windowHeight * 0.2;

            if(scrollTop >= sectionOffset){
                for( let item of sideBarScrollSpy){
                    item.classList.remove('active');
                };
                document.querySelector('[data-side_bar_spy="' + sectionId + '"]').classList.add("active");
            }
        })

        /* scroll animation */

        let animate_titles = document.querySelectorAll(".title_wrap.animate_title");
        for(let animate_title of animate_titles){
            let item_height = animate_title.offsetHeight;
            let item_offset = animate_title.offsetTop;

            let animItemPoint = window.innerHeight - item_height * 0.4;

            if(item_height > window.innerHeight){
                animItemPoint = window.innerHeight - window.innerHeight / animationStart;
            }
        
            if(window.scrollY > item_offset - animItemPoint) {
                animate_title.classList.add("active");
            }
        }

        let animate_items = document.querySelectorAll(".animate_item");
        for(let animate_item of animate_items){
            let item_height = animate_item.offsetHeight;
            let item_offset = animate_item.offsetTop;

            let animItemPoint = window.innerHeight - item_height * 0.2;

            if(item_height > window.innerHeight){
                animItemPoint = window.innerHeight - window.innerHeight / animationStart;
            }
        
            if(window.scrollY > item_offset - animItemPoint) {
                animate_item.classList.add("active");
            }
        }


    }
})();

(function(){
    let sidebar_nav_irems = document.querySelectorAll('[data-side_bar_spy]');
    let main_nav_items = document.querySelectorAll('[data-main_nav_spy]');
    let footer_nav_items = document.querySelectorAll('[data-footer_nav_spy]');
    let headerHeight = document.querySelector('.header_navigation').clientHeight;

    for(let item of main_nav_items){
        item.onclick = function(evt){
            evt.preventDefault();

            let section_name = this.getAttribute('data-main_nav_spy');
            let section_offset = document.querySelector(section_name).offsetTop;

            window.scroll({
                behavior: 'smooth',
                top: section_offset - headerHeight
            });
        }
    }

    for(let item of sidebar_nav_irems){
        item.onclick = function(evt){
            evt.preventDefault();

            let section_name = this.getAttribute('data-side_bar_spy');
            let section_offset = document.querySelector(section_name).offsetTop;

            window.scroll({
                behavior: 'smooth',
                top: section_offset - headerHeight
            });
        }
    }

    for(let item of footer_nav_items){
        item.onclick = function(evt){
            evt.preventDefault();

            let section_name = this.getAttribute('data-footer_nav_spy');
            let section_offset = document.querySelector(section_name).offsetTop;

            window.scroll({
                behavior: 'smooth',
                top: section_offset - headerHeight
            });
        }
    }
})();

(function(){
    let btn_footerToContact = document.querySelector('[data-btn_scroll_spy_footer]');
    let btn_headerToContact = document.querySelector('[data-btn_scroll_spy_header]');
    let headerHeight = document.querySelector('.header_navigation').clientHeight;

    btn_headerToContact.onclick= function(){
        let section_name = this.getAttribute('data-btn_scroll_spy_header');
        let section_offset = document.querySelector(section_name).offsetTop;
        
        window.scroll({
            behavior: 'smooth',
            top: section_offset - headerHeight
        });
    }

    btn_footerToContact.onclick= function(){
        let section_name = this.getAttribute('data-btn_scroll_spy_footer');
        let section_offset = document.querySelector(section_name).offsetTop;
        
        window.scroll({
            behavior: 'smooth',
            top: section_offset - headerHeight
        });
    }
})();

/* animation */

(function(){
        let animate_item = document.querySelector(".motivation_wrap");
        animate_item.classList.add("active");
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