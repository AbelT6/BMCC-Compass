// Get the profile details elements
const profileName = document.querySelector('.profile-name');
const profilePronouns = document.querySelector('.profile-pronouns');
const profileDepartment = document.querySelector('.profile-department');
const profileEmail = document.querySelector('.profile-email');
const profileBio = document.querySelector('.profile-bio');

// Get the edit profile modal and form elements
const editProfileModal = document.getElementById('edit-profile-modal');
const editProfileForm = document.getElementById('edit-profile-form');
const closeModalBtn = document.querySelector('.close');
const editProfileBtn = document.querySelector('.edit-profile');

// Open the edit profile modal when the edit button is clicked
editProfileBtn.addEventListener('click', () => {
    editProfileModal.classList.add('show');
    populateFormFields();
});

// Close the edit profile modal when the close button is clicked
closeModalBtn.addEventListener('click', () => {
    editProfileModal.classList.remove('show');
});

// Close the edit profile modal when clicking outside the modal content
window.addEventListener('click', (event) => {
    if (event.target === editProfileModal) {
        editProfileModal.classList.remove('show');
    }
});

// Populate the form fields with the current profile data
function populateFormFields() {
    const nameArray = profileName.textContent.split(' ');
    const firstName = nameArray[0];
    const lastName = nameArray[1] || '';

    editProfileForm.querySelector('#edit-first-name').value = firstName;
    editProfileForm.querySelector('#edit-last-name').value = lastName;
    editProfileForm.querySelector('#edit-email').value = profileEmail.textContent;
    editProfileForm.querySelector('#edit-pronouns').value = profilePronouns.textContent;
    editProfileForm.querySelector('#edit-department').value = profileDepartment.textContent;
    editProfileForm.querySelector('#edit-bio').value = profileBio.textContent;
}

// Update the profile picture preview
const profilePictureInput = document.getElementById('profile-picture-upload');
profilePictureInput.addEventListener('change', (event) => {
    const file = event.target.files[0];
    const reader = new FileReader();

    reader.onload = (e) => {
        document.getElementById('profilePicture').src = e.target.result;
    };

    if (file) {
        reader.readAsDataURL(file);
    }
});

// Handle the form submission for editing the profile
editProfileForm.addEventListener('submit', (event) => {
    event.preventDefault();

    const updatedFirstName = editProfileForm.querySelector('#edit-first-name').value;
    const updatedLastName = editProfileForm.querySelector('#edit-last-name').value;
    const updatedEmail = editProfileForm.querySelector('#edit-email').value;
    const updatedPronouns = editProfileForm.querySelector('#edit-pronouns').value;
    const updatedDepartment = editProfileForm.querySelector('#edit-department').value;
    const updatedBio = editProfileForm.querySelector('#edit-bio').value;

    // Update the profile details in the DOM
    profileName.textContent = `${updatedFirstName} ${updatedLastName}`;
    profileEmail.textContent = updatedEmail;
    profilePronouns.textContent = updatedPronouns;
    profileDepartment.textContent = updatedDepartment;
    profileBio.textContent = updatedBio;

    // Close the edit profile modal
    editProfileModal.classList.remove('show');

    // TODO: Send the updated profile data to the server using AJAX
});