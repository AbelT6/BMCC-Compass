<!doctype html>
<html>
     <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
     <title>Blog Section</title>
     <link rel="stylesheet" href="CSS/blog.css">
     <link rel="shortcut icon" href="images/fav-icon.svg">
     <link rel="preconnect" href="https://fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
     <title>Information Hub</title>
     </head>
     

     <body>
           <div class="hero-image">
              <!-- Back button -->
              <a href="javascript:void(0)" onclick="goBack()" class="back-icon material-icons">
                <span class="material-symbols-outlined">arrow_back</span>
              </a>
    
              <!-- Hero text -->
              <div class="hero-text">
                  <span>BMCC Compass</span>
                  <h1>Information Hub</h1>
               </div>

              <!-- Search container -->
              <div class="search-container">
                <form action="">
                  <input type="text" name="search" id="search" placeholder="Search here">
                  <button type="submit" class="search-icon material-symbols-outlined">search</button>
                </form>
            </div>
          </div>
           <div class="dashboard">
               <section class="navigation">
                   <img src="assets/Compass.png" alt="Compass Logo" class="logo">
                   <div>
                    <a  href="dashboard.html"  class="google-icon"><span class="material-symbols-outlined" >dashboard</span></a>
                       <a href="blog.html"  class="google-icon">
                           <span class="material-symbols-outlined">info</span>
                       </a>
                     
                       <a href="assignments.html"  class="google-icon">
                         <span class="material-symbols-outlined">checklist</span>
                       </a>
                       <a href="calendar.html"  class="google-icon">
                         <span class="material-symbols-outlined">event</span>
                       </a>
                       <a href="messages.html"  class="google-icon">
                         <span class="material-symbols-outlined">mail</span>
                       </a>
                       
                       
                       </a>
                   </div>
                   <img src="assets/profile.jpeg" alt="profile_picture" class="user">
               </section>
                    
         <!--blog-section============================================================================-->
              <section  id="blog">
             <!--blog-heading--------------->
      
             <!--container---------------->
             <div class="blog-container">
       
               <!--box-1------------->
               <div class="blog-box">
       
                 <!--img---->
                 <div class="blog-img">
                   <img alt="blog" src="assets/INC.png">
                 </div>
                 <!--text--->
                 <div class="blog-text">
                   <span>03 March 2024 </span>
                   <a href="IncBlog.html" class="blog-title">Learn about the incomplete (INC) grade </a>
                   <p>Don't let an "Incomplete" stop you! Discover how to turn that INC into an academic victory</p>
                   <a href="IncBlog.html">Read More</a>
                 </div>
       
               </div>
       
       
       
       
               <!--box-2------------->
               <div class="blog-box">
       
                 <!--img---->
                 <div class="blog-img">
                   <img alt="blog" src="assets/conexiones.png">
                 </div>
                 <!--text--->
                 <div class="blog-text">
                   <span>05 March 2024`</span>
                   <a href="#" class="blog-title">Mentorship program at BMCC's conexiones</a>
                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate facilis modi veritatis adipisci omnis perferendis deleniti tempore quasi? Explicabo recusandae soluta vel cum perspiciatis consequuntur dolorum distinctio minima voluptate quae?</p>
                   <a href="#">Read More</a>
                 </div>
       
               </div>
       
       
       
       
               <!--box-3------------->
               <div class="blog-box">
                 <!--img---->
                 <div class="blog-img">
                   <img alt="blog" src="assets/management.png">
                 </div>
                 <!--text--->
                 <div class="blog-text">
                   <span>04 March 2024</span>
                   <a href="#" class="blog-title"> A Guide to Productive Time Management</a>
                   <p>
                    This guide provides BMCC students with time management strategies to boost productivity through making schedules, leveraging prime focus times, working smarter not harder, prioritizing self-care, and maintaining an overall healthy work-life-school balance.
                   </p>
                   <a href="#">Read More</a>
                 </div>
               </div>
       
             </div>
       
           </section>
     </div>
     <script>
          function goBack(){
               window.history.back();
          }
     </script>

           
     </body>
    
     
     <script>
          window.watsonAssistantChatOptions = {
            integrationID: "ac3913e3-7b5d-460d-84f4-5e63a83457b7", // The ID of this integration.
            region: "us-east", // The region your integration is hosted in.
            serviceInstanceID: "1a7c6b67-2116-4c19-a7c6-9b530baf4fbe", // The ID of your service instance.
            onLoad: async (instance) => { await instance.render(); }
          };
          setTimeout(function(){
            const t=document.createElement('script');
            t.src="https://web-chat.global.assistant.watson.appdomain.cloud/versions/" + (window.watsonAssistantChatOptions.clientVersion || 'latest') + "/WatsonAssistantChatEntry.js";
            document.head.appendChild(t);
          });
        </script>
     </html>


     