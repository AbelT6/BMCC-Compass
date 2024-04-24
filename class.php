<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Assignment Management</title>
  <link rel="stylesheet" type="text/css" href="class.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Monoton&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rozha+One&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
</head>
<body>
  <div class="dashboard">
    <section class="navigation">
      <img src="assets/Compass.png" alt="Compass Logo" class="logo">
      <div>
        <a href="dashboard.php" class="google-icon">
          <span class="material-symbols-outlined">dashboard</span>
        </a>
        <a href="assignments.php" class="google-icon">
          <span class="material-symbols-outlined">checklist</span>
        </a>
        <a href="calendar.php" class="google-icon">
          <span class="material-symbols-outlined">event</span>
        </a>
        <a href="messages.php" class="google-icon">
          <span class="material-symbols-outlined">mail</span>
        </a>
      </div>
      <a href="profile.php">
        <img src="assets/profile.jpeg" alt="profile_picture" class="user">
      </a>
    </section>

    <section class="main">
      <div class="search">
        <form action="">
          <input type="text" name="search" id="search" placeholder="Search here">
          <span class="material-symbols-outlined">search</span>
        </form>
        <div class="notification">
          <span class="material-symbols-outlined">notifications</span>
          <span class="material-symbols-outlined">brightness_medium</span>
        </div>
      </div>

      <div class="header">
        <h1>Assignment Management</h1>
        <div class="header-actions">
          <button id="addAssignmentBtn" class="add-assignment-btn">
            <span class="material-symbols-outlined">add_circle</span>
            Add Assignment
          </button>
        </div>
      </div>

      <div class="filters">
        <label for="filterBy">Sort By</label>
        <select id="filterBy" name="filterBy">
          <option value="all">All</option>
          <option value="dueDate">Due Date</option>
          <option value="participant">Participant</option>
          <option value="tags">Tags</option>
        </select>
      </div>

      <table id="assignmentTable">
        <thead>
          <tr>
            <th>Title</th>
            <th>Due Date</th>
            <th>Participant</th>
            <th>Tags</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <!-- Assignment rows will be dynamically populated using JavaScript -->
        </tbody>
      </table>

      <div class="pagination">
        <button id="prevPage"><i class="fas fa-chevron-left"></i></button>
        <span id="currentPage">1</span>
        <button id="nextPage"><i class="fas fa-chevron-right"></i></button>
      </div>
    </section>
  </div>

  <div id="assignmentModal" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <h2>Add Assignment</h2>
      <form id="assignmentForm">
        <div class="form-group">
          <label for="title">Title:</label>
          <input type="text" id="title" name="title" required>
        </div>

        <div class="form-group">
          <label for="dueDate">Due Date:</label>
          <input type="date" id="dueDate" name="dueDate" required>
        </div>

        <div class="form-group">
          <label for="participant">Participant:</label>
          <select id="participant" name="participant">
            <option value="all">All</option>
            <option value="group1">Group 1</option>
            <option value="group2">Group 2</option>
            <!-- Add more participant options as needed -->
          </select>
        </div>

        <div class="form-group">
          <label for="tags">Tags:</label>
          <input type="text" id="tags" name="tags" placeholder="Enter tags separated by commas">
        </div>

        <div class="form-group">
          <label for="description">Description:</label>
          <textarea id="description" name="description" rows="4"></textarea>
        </div>

        <div class="form-group">
          <label for="attachments">Attachments:</label>
          <input type="file" id="attachments" name="attachments" multiple>
        </div>

        <button type="submit">Add Assignment</button>
      </form>
    </div>
  </div>

  <script src="class.js"></script>
</body>
</html>