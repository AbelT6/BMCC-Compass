<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="landing.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Monoton&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rozha+One&display=swap" rel="stylesheet">
  <title>Bmcc Compass</title>
</head>
<body>
  <header>
    <div class="header-content">
      <div class="logo">
        <img src="assets/logo.png" alt="BMCC Compass Logo">
      </div>
      <nav class="navigation">
        <a href="#" class="active">Login</a>
        <a href="#" class="active">Register</a>
        <a href="#" class="active">About</a>
        <a href="#" class="active">Contact</a>
      </nav>
    </div>
  </header>

  <section class="parallax">
    <div class="parallax-image"></div>
    <div class="parallax-content">
      <h2 id="text">Your Guide to Academic Achievement</h2>
      <div class="scroll-arrow"></div>
    </div>
  </section>

  <section class="content">
    <div class="container">
      <h2>BMCC Compass: Your Path to Academic Success</h2>
      <div class="intro">
        <div class="intro-content">
          <p>College life can be overwhelming, with numerous assignments, deadlines, and responsibilities to juggle. It's easy to lose track of your progress and feel discouraged, especially when facing academic challenges. That's where BMCC Compass comes in – a revolutionary web app designed to empower students and faculty at Borough of Manhattan Community College.</p>
          <p>BMCC Compass is not just another academic tool; it's a comprehensive solution that addresses the unique needs of BMCC students. With intuitive features like assignment tracking, progress monitoring, and calendar views, BMCC Compass simplifies your academic journey and keeps you on the path to success.</p>
        </div>
        <img src="path/to/bmcc-compass-logo.png" alt="BMCC Compass Logo" class="intro-image">
      </div>

      <div class="feature">
        <div class="feature-content">
          <h3>Interactive Dashboard</h3>
          <p>Visualize your academic progress with an intuitive and interactive dashboard. BMCC Compass transforms your data into easy-to-understand visuals, allowing you to track your achievements, identify areas for improvement, and stay motivated throughout the semester.</p>
        </div>
        <img src="assets/Screenshot 2024-04-05 at 8.57.11 AM.png" alt="Interactive Dashboard" class="feature-image">
      </div>

      <div class="features">
        <div class="feature">
          <img src="assets/Screenshot 2024-04-05 at 8.57.24 AM.png" alt="Interactive Progress Charts" class="feature-image">
          <div class="feature-content">
            <h3>Interactive Progress Charts</h3>
            <p>Visualize your academic progress with stunning interactive charts. BMCC Compass transforms your data into easy-to-understand visuals, allowing you to track your achievements, identify areas for improvement, and stay motivated throughout the semester.</p>
          </div>
        </div>

        <div class="feature">
          <div class="feature-content">
            <h3>Tayan: Your Personal AI Support</h3>
            <p>Introducing Tayan, your personal AI chatbot that provides instant support whenever you need it. Named after the Tshiluba word for "Support," Tayan is designed to assist you with any questions or concerns you may have while using BMCC Compass.</p>
            <p>Whether you need help navigating the app, understanding a specific feature, or seeking guidance on your academic journey, Tayan is here to help. Simply start a conversation with Tayan, and our intelligent chatbot will provide you with accurate and timely responses, ensuring that you have the support you need to succeed.</p>
          </div>
          <img src="path/to/tayan-chatbot-image.png" alt="Tayan AI Chatbot" class="feature-image">
        </div>
      </div>

      <div class="inc-grades">
        <h3>Navigating Incomplete (INC) Grades</h3>
        <div class="inc-grades-content">
          <img src="assets/istockphoto-1516343251-170667a.webp" alt="Navigating INC Grades" class="inc-grades-image">
          <div class="inc-grades-text">
            <p>Things happen, and you were fortunate to receive an INC grade from your professor. But that doesn't mean you've passed the class yet. An INC grade is a temporary measure, and if no further work is completed, it can turn into an F. That's where BMCC Compass steps in to help you succeed.</p>
            <p>BMCC Compass provides specialized tools and resources for students with INC grades. The app helps you track your remaining assignments, communicates with your professors, and provides personalized guidance to ensure you complete the necessary work and transform your INC into a passing grade.</p>
          </div>
        </div>
      </div>

      <div class="resources">
        <h3>Connecting You with BMCC Resources</h3>
        <div class="resource">
          <div class="resource-content">
            <p>BMCC Compass goes beyond academic tracking by connecting you with valuable BMCC resources. The app integrates with programs like BMCC Connexions, which provides personalized mentorship and support to help you achieve your goals.</p>
            <p>Through BMCC Compass, you can easily access tutoring services, academic advisors, and other support systems available at BMCC. The app keeps you informed about upcoming workshops, events, and opportunities that can enhance your college experience and contribute to your success.</p>
          </div>
          <img src="path/to/connexions-image.png" alt="BMCC Connexions" class="resource-image">
        </div>
      </div>

      <div class="cta">
        <a href="#" class="btn">Start Your Journey with BMCC Compass</a>
      </div>
    </div>
  </section>

  <script>
    const parallaxImage = document.querySelector('.parallax-image');

    window.addEventListener('scroll', function() {
      let offset = window.pageYOffset;
      parallaxImage.style.backgroundPositionY = offset * 0.7 + 'px';
    });
  </script>
</body>
<script>
  window.watsonAssistantChatOptions = {
    integrationID: "ac3913e3-7b5d-460d-84f4-5e63a83457b7",
    region: "us-east",
    serviceInstanceID: "1a7c6b67-2116-4c19-a7c6-9b530baf4fbe",
    onLoad: async (instance) => { await instance.render(); }
  };
  setTimeout(function(){
    const t=document.createElement('script');
    t.src="https://web-chat.global.assistant.watson.appdomain.cloud/versions/" + (window.watsonAssistantChatOptions.clientVersion || 'latest') + "/WatsonAssistantChatEntry.js";
    document.head.appendChild(t);
  });
</script>
</html>