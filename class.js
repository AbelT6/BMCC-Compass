// Sample assignment data (replace with actual data from the server)
let assignments = [
    {
      id: 1,
      title: 'Assignment 1',
      dueDate: '2023-06-15',
      participant: 'Group 1',
      tags: ['INC', 'REG'],
      description: 'Complete the assignment and submit it online.'
    },
    {
      id: 2,
      title: 'Assignment 2',
      dueDate: '2023-06-20',
      participant: 'All',
      tags: ['INC'],
      description: 'Read the article and write a summary.'
    },
    // Add more assignment objects as needed
  ];
  
  const assignmentTable = document.getElementById('assignmentTable');
  const assignmentModal = document.getElementById('assignmentModal');
  const addAssignmentBtn = document.getElementById('addAssignmentBtn');
  const closeModalBtn = document.querySelector('.close');
  const assignmentForm = document.getElementById('assignmentForm');
  const filterSelect = document.getElementById('filterBy');
  const searchInput = document.getElementById('search');
  const prevPageBtn = document.getElementById('prevPage');
  const nextPageBtn = document.getElementById('nextPage');
  const currentPageSpan = document.getElementById('currentPage');
  
  let currentPage = 1;
  const assignmentsPerPage = 10;
  
  // Function to render assignments in the table
  function renderAssignments(assignmentsData) {
    const startIndex = (currentPage - 1) * assignmentsPerPage;
    const endIndex = startIndex + assignmentsPerPage;
    const paginatedAssignments = assignmentsData.slice(startIndex, endIndex);
  
    const tbody = assignmentTable.getElementsByTagName('tbody')[0];
    tbody.innerHTML = '';
  
    paginatedAssignments.forEach(assignment => {
      const row = document.createElement('tr');
      row.innerHTML = `
        <td>${assignment.title}</td>
        <td>${assignment.dueDate}</td>
        <td>${assignment.participant}</td>
        <td>${assignment.tags.join(', ')}</td>
        <td class="actions">
          <button class="editBtn" data-id="${assignment.id}">Edit</button>
          <button class="deleteBtn" data-id="${assignment.id}">Delete</button>
        </td>
      `;
      tbody.appendChild(row);
    });
  
    // Update pagination controls
    const totalPages = Math.ceil(assignmentsData.length / assignmentsPerPage);
    currentPageSpan.textContent = currentPage;
    prevPageBtn.disabled = currentPage === 1;
    nextPageBtn.disabled = currentPage === totalPages;
  }
  
  // Initial rendering of assignments
  renderAssignments(assignments);
  
  // Open the modal when the "Add Assignment" button is clicked
  addAssignmentBtn.addEventListener('click', () => {
    assignmentModal.style.display = 'block';
    assignmentForm.reset();
  });
  
  // Close the modal when the close button is clicked
  closeModalBtn.addEventListener('click', () => {
    assignmentModal.style.display = 'none';
  });
  
  // Handle form submission
  assignmentForm.addEventListener('submit', event => {
    event.preventDefault();
  
    const title = document.getElementById('title').value;
    const dueDate = document.getElementById('dueDate').value;
    const participant = document.getElementById('participant').value;
    const tags = document.getElementById('tags').value.split(',').map(tag => tag.trim());
    const description = document.getElementById('description').value;
  
    if (assignmentForm.dataset.mode === 'edit') {
      // Update the assignment
      const assignmentId = assignmentForm.dataset.assignmentId;
      const assignmentIndex = assignments.findIndex(assignment => assignment.id === Number(assignmentId));
      assignments[assignmentIndex] = {
        ...assignments[assignmentIndex],
        title,
        dueDate,
        participant,
        tags,
        description
      };
    } else {
      // Add a new assignment
      const newAssignment = {
        id: Date.now(),
        title,
        dueDate,
        participant,
        tags,
        description
      };
      assignments.push(newAssignment);
    }
  
    renderAssignments(assignments);
    assignmentModal.style.display = 'none';
    assignmentForm.reset();
  });
  
  // Handle filtering and searching assignments
  function filterAndSearchAssignments() {
    const filterValue = filterSelect.value;
    const searchValue = searchInput.value.toLowerCase();
  
    const filteredAssignments = assignments.filter(assignment => {
      const matchesFilter = filterValue === 'all' || assignment[filterValue].toLowerCase().includes(searchValue);
      const matchesSearch = assignment.title.toLowerCase().includes(searchValue);
      return matchesFilter && matchesSearch;
    });
  
    currentPage = 1;
    renderAssignments(filteredAssignments);
  }
  
  filterSelect.addEventListener('change', filterAndSearchAssignments);
  searchInput.addEventListener('input', filterAndSearchAssignments);
  
  // Handle pagination
  prevPageBtn.addEventListener('click', () => {
    if (currentPage > 1) {
      currentPage--;
      renderAssignments(assignments);
    }
  });
  
  nextPageBtn.addEventListener('click', () => {
    const totalPages = Math.ceil(assignments.length / assignmentsPerPage);
    if (currentPage < totalPages) {
      currentPage++;
      renderAssignments(assignments);
    }
  });
  
  // Edit assignment
  assignmentTable.addEventListener('click', event => {
    if (event.target.classList.contains('editBtn')) {
      const assignmentId = event.target.dataset.id;
      const assignment = assignments.find(assignment => assignment.id === Number(assignmentId));
  
      // Populate the modal form with the assignment details
      document.getElementById('title').value = assignment.title;
      document.getElementById('dueDate').value = assignment.dueDate;
      document.getElementById('participant').value = assignment.participant;
      document.getElementById('tags').value = assignment.tags.join(', ');
      document.getElementById('description').value = assignment.description;
  
      // Set the form submission mode to "edit"
      assignmentForm.dataset.mode = 'edit';
      assignmentForm.dataset.assignmentId = assignmentId;
  
      // Open the modal
      assignmentModal.style.display = 'block';
    }
  });
  
  // Delete assignment
  assignmentTable.addEventListener('click', event => {
    if (event.target.classList.contains('deleteBtn')) {
      const assignmentId = event.target.dataset.id;
      assignments = assignments.filter(assignment => assignment.id !== Number(assignmentId));
      renderAssignments(assignments);
    }
  });