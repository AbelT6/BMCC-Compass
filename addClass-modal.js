// Get the modal element
var modal = document.getElementById("addClass-modal");

// Get the button that opens the modal
var addClassBtn = document.getElementById("addClass");

// Get the <span> element that closes the modal
var closeBtn = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
addClassBtn.onclick = function() {
  modal.style.display = "block";
  setTimeout(function() {
    modal.classList.add("show");
  }, 50);
}

// When the user clicks on <span> (x), close the modal
closeBtn.onclick = function() {
  modal.classList.remove("show");
  setTimeout(function() {
    modal.style.display = "none";
  }, 300);
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.classList.remove("show");
    setTimeout(function() {
      modal.style.display = "none";
    }, 300);
  }
}

// Function to create a new class item
function createClassItem(classData) {
  var colors = ['category_color1', 'category_color2', 'category_color3', 'category_color4', 'category_color5', 'category_color6'];
  var randomColor = colors[Math.floor(Math.random() * colors.length)];

  var classItem = `
    <div class="class interactive-background" data-id="${classData.id}">
      <div class="category ${randomColor}"></div>
      <h2>${classData.name}</h2>
      <p>${classData.section}</p>
      <p>${classData.term} ${classData.year}</p>
      <div class="meta">
        <div class="professor">
          <img src="${classData.professorImage}" alt="" class="stack">
        </div>
        <span class="material-symbols-outlined delete-class" data-id="${classData.id}">delete</span>
      </div>
    </div>
  `;
  return classItem;
}

// Handle form submission
var form = document.getElementById("addClass-form");
form.addEventListener("submit", function(event) {
  event.preventDefault(); // Prevent form submission

  // Get form values
  var className = document.getElementById("className").value;
  var classSection = document.getElementById("classSection").value;
  var classTerm = document.querySelector('input[name="classTerm"]:checked').value;
  var classYear = document.getElementById("classYear").value;
  var classDescription = document.getElementById("classDescription").value;

  // Create an object with the form data
  var formData = {
    className: className,
    classSection: classSection,
    classTerm: classTerm,
    classYear: classYear,
    classDescription: classDescription
  };

  // Send form data to the server using AJAX
  fetch("create-class.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/json"
    },
    body: JSON.stringify(formData)
  })
    .then(response => response.json())
    .then(data => {
      // Handle the response from the server
      console.log(data);
      if (data.status === 'success') {
        // Close the modal
        modal.classList.remove("show");
        setTimeout(function() {
          modal.style.display = "none";
        }, 300);

        // Create a new class item and append it to the class list
        var newClassItem = createClassItem({
          id: data.classId,
          name: className,
          section: classSection,
          term: classTerm,
          year: classYear,
          professorImage: 'path/to/professor/image.jpg' // Provide the path to the professor's image
        });
        var classList = document.querySelector('.class_list');
        classList.insertAdjacentHTML('beforeend', newClassItem);

        // Clear the form fields
        form.reset();
      } else {
        // Display an error message
        alert(data.message);
      }
    })
    .catch(error => {
      // Handle any errors
      console.error("Error:", error);
    });
});

// Handle class deletion
document.addEventListener('click', function(event) {
  if (event.target.classList.contains('delete-class')) {
    var classId = event.target.getAttribute('data-id');
    var classItem = event.target.closest('.class');

    // Send delete request to the server
    fetch(`delete-class.php?id=${classId}`, {
      method: 'DELETE'
    })
      .then(response => response.json())
      .then(data => {
        if (data.status === 'success') {
          // Remove the class item from the DOM
          classItem.remove();
        } else {
          // Display an error message
          alert(data.message);
        }
      })
      .catch(error => {
        console.error('Error:', error);
      });
  }
});