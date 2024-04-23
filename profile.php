<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - BMCC Student Compass Dashboard</title>
    <link href="CSS/Dashboardfaculty.css" rel="stylesheet">
    <link href="CSS/profile.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
    <div class="dashboard">
        <!-- Navigation Bar -->
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
            <img src="assets/profile.jpeg" alt="profile_picture" class="user">
        </section>

        <section class="profile-section">
            <div class="profile-header">
                <h2 class="header-title">Profile</h2>
                <div class="profile-picture-container">
                    <img src="assets/profile.jpeg" alt="Profile Picture" class="profile-picture" id="profilePicture">
                    <button class="edit-profile">Edit Profile</button>
                </div>
            </div>
            <div class="profile-details">
                <div class="detail-row">
                    <span class="detail-label">Name:</span>
                    <span class="detail-value profile-name">Abel Tshimini</span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Email:</span>
                    <span class="detail-value profile-email">abel.tshimini@example.com</span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Pronouns:</span>
                    <span class="detail-value profile-pronouns">He/Him</span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Department:</span>
                    <span class="detail-value profile-department">Computer Science</span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Call out bio:</span>
                    <p class="detail-value profile-bio">Share your interests and goals (160 characters max)</p>
                </div>
            </div>
        </section>

        <!-- Edit Profile Modal -->
        <div id="edit-profile-modal" class="modal">
            <div class="modal-content">
                <span class="close material-symbols-outlined">close</span>
                <h2>Edit Profile</h2>
                <form id="edit-profile-form">
                    <div class="form-group">
                        <label for="edit-first-name">First Name</label>
                        <input type="text" id="edit-first-name" name="edit-first-name" required>
                    </div>
                    <div class="form-group">
                        <label for="edit-last-name">Last Name</label>
                        <input type="text" id="edit-last-name" name="edit-last-name" required>
                    </div>
                    <div class="form-group">
                        <label for="edit-email">Email</label>
                        <input type="email" id="edit-email" name="edit-email" required>
                    </div>
                    <div class="form-group">
                        <label for="edit-pronouns">Pronouns</label>
                        <input type="text" id="edit-pronouns" name="edit-pronouns" required>
                    </div>
                    <div class="form-group">
                        <label for="edit-department">Department</label>
                        <input type="text" id="edit-department" name="edit-department" required>
                    </div>
                    <div class="form-group">
                        <label for="edit-bio">Bio</label>
                        <textarea id="edit-bio" name="edit-bio" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="profile-picture-upload">Profile Picture</label>
                        <div class="profile-picture-upload">
                            <input type="file" id="profile-picture-upload" name="profile-picture-upload" accept="image/*">
                            <label for="profile-picture-upload" class="upload-button">Choose File</label>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="save-button">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="profile.js"></script>
</body>
</html>