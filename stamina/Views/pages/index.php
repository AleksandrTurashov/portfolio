<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stamina</title>
    <link rel="stylesheet" href="recources/css/style.css">
	<link rel="stylesheet" href="recources/css/all.min.css">
</head>
<body>
    <div class="wrap">
        <div class="sidebar_menu">
            <div class="close_bar_navigation_btn" id="close_bar_navigation_btn">
                <i class="fa-solid fa-xmark"></i>   
            </div>
            <div class="sidebar_nav">
                <ul>
                    <li><a href="#" class="nav_item active">home</a></li>
                    <li><a href="#" class="nav_item">classes</a></li>
                    <li><a href="#" class="nav_item">shedule</a></li>
                    <li><a href="#" class="nav_item">trainer</a></li>
                    <li><a href="#" class="nav_item">services</a></li>
                    <li><a href="#" class="nav_item">contact</a></li>
                </ul>
            </div>
        </div>
        <header>
            <div class="header_navigation">
                <div class="wraper">
                    
                    <div class="logo">
                        <a href="">Stamina</a>
                    </div>
                    <div class="bar_navigation_btn" id="bar_navigation_btn">
                        <i class="fa-solid fa-bars"></i>
                    </div>
                    <div class="main_nav">
                        <ul>
                            <li><a href="#" class="nav_item active">home</a></li>
                            <li><a href="#" class="nav_item">classes</a></li>
                            <li><a href="#" class="nav_item">shedule</a></li>
                            <li><a href="#" class="nav_item">trainer</a></li>
                            <li><a href="#" class="nav_item">services</a></li>
                            <li><a href="#" class="nav_item">contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <div class="main_wrap" id="main_content">

        </div>
        <footer id="footer">
            <div class="footer_navigation">
                <div class="wraper">
                    <div class="footer_shedule">
                        <h4>hours</h4>
                        7:30 - 21:00
                    </div>
                    <div class="footer_nav">
                        <h4>links</h4>
                        <ul>
                            <li><a href="#" class="nav_item">home</a></li>
                            <li><a href="#" class="nav_item">classes</a></li>
                            <li><a href="#" class="nav_item">shedule</a></li>
                            <li><a href="#" class="nav_item">trainer</a></li>
                        </ul>
                    </div>
                    <div class="footer_about">
                        <h4>about stamina</h4>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="recources/js/script.js"></script>

    <script>
        window.addEventListener('scroll', ()=>{
            let headerItem = document.querySelector(".header_navigation");
            if(window.pageYOffset > 5){
                headerItem.classList.add("header_navigation_colored");
            }
            else {
                headerItem.classList.remove("header_navigation_colored");
            }
        });

        let side_navItems = document.querySelectorAll(".sidebar_nav a");
        for (let navItem of side_navItems){
            navItem.addEventListener('click', (evt)=>{
                document.querySelector(".sidebar_nav a.active").classList.remove("active");
                evt.target.classList.add("active");
            })
        };

        bar_navigation_btn.onclick = function(){
            document.querySelector(".sidebar_menu").style.right = '0px';
        };

        close_bar_navigation_btn.onclick = function(){
            document.querySelector(".sidebar_menu").style.right = '-310px';
        };

        main_content.onclick = function(){
            document.querySelector(".sidebar_menu").style.right = '-310px';
        };

        footer.onclick = function(){
            document.querySelector(".sidebar_menu").style.right = '-310px';
        };

        let nav_items = document.querySelectorAll(".nav_item");
        for(let nav_item of nav_items){
            nav_item.addEventListener("mouseenter", (evt)=>{
                evt.target.classList.add("item_hover");
            })
            nav_item.addEventListener("mouseleave", (evt)=>{
                evt.target.classList.remove("item_hover");
            })
        };
        close_bar_navigation_btn.onmouseenter = function(evt){
            evt.target.classList.add("btn_hover");
            console.log(evt);
        }
        close_bar_navigation_btn.onmouseleave = function(evt){
            evt.target.classList.remove("btn_hover");
            console.log(evt);
        }
        
    </script>
</body>
</html>