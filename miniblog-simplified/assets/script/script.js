AOS.init({duration:1200,});function openNav(){hamburger.classList.add("is-active");document.getElementById("popUpNav").style.display="block";document.getElementById('wrapper').style.display="none"};function closeNav(){hamburger.classList.remove("is-active");document.getElementById("popUpNav").style.display="none";document.getElementById('wrapper').style.display="block"};var hamburger=document.querySelector(".hamburger");hamburger.addEventListener('click',()=>hamburger.classList.contains('is-active')?closeNav():openNav());closeNav();new Chart(document.getElementById("bar-chart"),{type:'bar',data:{labels:["Jan","Feb","Mar","Apr","Mei","Jun","Jul","Ags","Sep","Okt","Nov","Des"],datasets:[{label:"Pageviews",backgroundColor:["#e8c3b9","#ef504d","#e8c3b9","#e8c3b9","#e8c3b9","#141414","#e8c3b9","#e8c3b9","#e8c3b9","#e8c3b9","#e8c3b9","#141414"],data:[37,108,74,71,32,8,18,62,79,36,90,8]}]},options:{legend:{display:!1},title:{display:!0,text:'Lorem Ipsum Dolor Sit Amet'}}})