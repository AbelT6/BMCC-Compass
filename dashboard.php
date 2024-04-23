<!DOCTYPE html>
<html lang="en">
     <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <meta http-equiv="X-UA-Compatible" content="ie=edge">
          <link href="CSS/dashboard.css" rel="stylesheet">
          <link href="CSS/icon.css" rel="stylesheet">
          <link rel="preconnect" href="https://fonts.googleapis.com">
          <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
          <link href="https://fonts.googleapis.com/css2?family=Monoton&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rozha+One&display=swap" rel="stylesheet">
          <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
          <script src="https://cdn.jsdelivr.net/npm/chart.js@3.2.1/dist/chart.min.js"></script>



          <title>BMCC Student Compass Dashboard </title>
     </head>
     <body>
          <div class ="dashboard"> <!--Dashboard-->
               <section class="navigation"> <!--Navigation Bar-->
                    <img src="assets/Compass.png" alt="Compass Logo" class="logo">
                    <div>
                         <a  href="dashboard.php"  class="google-icon"><span class="material-symbols-outlined" >dashboard</span></a>
                         <a href="blog.php"  class="google-icon">
                              <span class="material-symbols-outlined">info</span>
                          </a>
                         <a href="assignments.php" class="google-icon">
                              <span class="material-symbols-outlined">checklist</span>
                          </a>
                          <a href="calendar.php" class="google-icon">
                              <span class="material-symbols-outlined">event</span>
                          </a>
                          <a href="messages.php"  class="google-icon">
                              <span class="material-symbols-outlined">mail</span>
                          </a>
                          
                          
                          
                    </div>
                    <img src="assets/profile.jpeg" alt="profile_picture" class="user">
               </section><!--Navigation end-->

               <section class="main"> <!--Main-->
                          <!--search-->
                          <div class="search"> <!--search-->
                              <form action="">
                                <input type="text" name="search" id="search" placeholder="Search here">
                                <span class="material-symbols-outlined">search</span>
                              </form>
                              <div class="notification">
                                <span class="material-symbols-outlined">notifications</span>
                                <span class="material-symbols-outlined">brightness_medium</span>
                              </div>
                            </div>
                            
                         <!--search end-->

                    <div class="title"> <!--Title-->
                         <h1>My Classes</h1>

                              <label for="My classes">Sort By</label>
                              <select id="classesFilter" name="classes">
                                   <option value="open"> open classes</option>
                                   <option value="closed"> closed classes</option>
                              </select>
                     </div><!--Title end -->

                    <div class="class_list"> <!--Class lists -->

                         <div class="class interactive-background" data-status="finished"> <!--Class 1-->
                              <div class="category category_color1"></div>
                              <h2>MAT 302</h2>
                              <p>Active Recently</p>
                              <ul class="activity">
                                   <li>Assignement #4 posted</li>
                                   <li>Maple Lab #2 assignement posted</li>
                              </ul>

                              <div class="meta">
                                   <div class="professor">
                                        <img src="#" alt="" class="stack">
                                   </div>
                                   <span class="material-symbols-outlined">more_vert</span>
                              </div>
                         </div><!--Class 1 end -->

                              <div class="class interactive-background"> <!--Class 2-->
                                   <div class=" category category_color2"></div>
                                   <h2>PHY 115</h2>
                                   <ul class="activity">
                                        <li> Lab 4 due at midnight</li>
                                        <li>New Annoncment</li>
                                   </ul>
                                   <div class="meta">
                                        <div class="professor">
                                             <img src="#" alt="" class="stack">
                                        </div>
                                        <span class="material-symbols-outlined">more_vert</span>  
                                   </div>
                                    
                          </div><!--Class 2 end -->

                         <div class="class interactive-background"> <!--Class 3-->
                              <div class="category category_color3"></div>
                              <h2>SPE 100</h2>
                              <p>Active Recently</p>

                              <ul class="activity">
                                   <li>Persuasive speech outline due </li>
                                   <li>New announcement from  Pr. Terry</li>
                              </ul>

                              <div class="meta">
                                   <div class="professor">
                                        <img src="#" alt="" class="stack">
                                   </div>
                                   <span class="material-symbols-outlined">more_vert</span>
                              </div>
                             
                              
                         </div><!--Class 3 end -->

                         <div class="class interactive-background"> <!--Class 4-->
                              <div class=" category category_color4"></div>
                              <h2>CSC 111</h2>
                              <p>Active Recently</p>
                              <ul class="activity">
                                   <li>Homework 3 posted </li>
                                   <li>Project 1 due</li>
                              </ul>
                              <div class="meta">
                                   <div class="professor">
                                        <img src="#" alt="" class="stack" >
                                   </div>
                                   <span class="material-symbols-outlined">more_vert</span>
                              </div>
                              
                              
                         </div><!--Class 4 end -->

                         <div class="class interactive-background"> <!--Class 5-->
                              <div class="category category_color5"></div>
                                   
                              <h2>COM 150</h2>
                              <p>Active Recently</p>

                              <ul class="activity">
                                   <li>Blog post 2 due </li>
                                   <li>New announcement</li>
                                   <li>Class #4 notes posted</li>
                              </ul>

                              <div class="meta">
                                   <div class="professor">
                                        <img src="#" alt=""  class="stack">
                                   </div>
                                   <span class="material-symbols-outlined">more_vert</span>
                              </div>
                              
                         </div><!--Class 5 end -->

                         <div class="class interactive-background"> <!--Class 6-->
                              <div class=" category category_color6"></div>
                                   <h2>MAT 301</h2>
                                   <p>No recent post</p>

                              <ul class="activity">
                                   <li></li>
                                   <li</li>
                              </ul>
                              <div class="meta">
                                   <div class="professor">
                                        <img src="#" alt=""  class="stack">
                                   </div>
                                   <span class="material-symbols-outlined">more_vert</span>
                              </div>
                              
                         </div><!--Class 6 end -->
                              
                    </div><!--Class lists End -->

               </section> <!--Main end-->

               <section class="secondary"> <!--Secondary-->
                    <div class="chart">
                         <h2>Your Progress</h2>
                         <canvas id="myChart" width="400" height="400"></canvas>
         
                         <div class="complete">
                             <h3>12 Completed</h3>
                             <p>from 5 Classes</p>
                         </div>
                     </div>
         
                     <div class="recent_project"><!-- Recent Project -->
                         <div class="listing">
                             <div class="title">
                                 <div class="category category_color1"></div>
                                 <h2>Assignment 3 </h2>
                                 <p>MTH 301</p>
                             </div>
                             <span class="material-symbols-outlined">more_vert</span>
                         </div>
                         <div class="listing">
                             <div class="title">
                                 <div class="category category_color4"></div>
                                 <h2>Project 0</h2>
                                 <p>CSC 111</p>
                             </div>
                             <span class="material-symbols-outlined">more_vert</span>
                         </div>
                         <div class="listing">
                             <div class="title">
                                 <div class="category category_color2"></div>
                                 <h2>Lab Report 2</h2>
                                 <p>PHY 115</p>
                             </div>
                             <span class="material-symbols-outlined">more_vert</span>
                         </div>
                         <div class="listing">
                             <div class="title">
                                 <div class="category category_color4"></div>
                                 <h2>Gr</h2>
                                 <p>by Matthew Kelechi</p>
                             </div>
                             <span class="material-symbols-outlined">more_vert</span>
                         </div>
                     </div><!-- Recent Project End -->
         
               
               </section><!--Secondary end -->
          
          </div><!--dashboard end--> 

          <script src="script.js"></script>
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
     
