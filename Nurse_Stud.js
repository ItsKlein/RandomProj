// Function to handle delete action
function deleteStudent(button) {
  const id = button.getAttribute('data-id'); // Retrieve the 'data-id' attribute
  const confirmation = confirm(`Delete student with ID ${id}?`);
  if (confirmation) {
    // Send an AJAX request to delete the student
    const xhr = new XMLHttpRequest();
    xhr.open(
      'POST',
      'http://localhost/Zppsu_Medical/Php_Logics/delete_student.php',
      true
    );
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function () {
      if (xhr.readyState === 4 && xhr.status === 200) {
        alert(xhr.responseText);

        // Reload the page or update the table as needed
        location.reload(); // This will refresh the current page
      }
    };
    xhr.send(`id=${id}`); // Send the 'id' parameter here
  } else {
    alert('Delete canceled');
  }
}

// Attach event listeners to the "Delete" buttons
const deleteButtons = document.querySelectorAll('.delete-button');
deleteButtons.forEach((button) => {
  button.addEventListener('click', () => {
    deleteStudent(button);
  });
});

document.addEventListener('DOMContentLoaded', function () {
  const sendButtons = document.querySelectorAll('.update-button');

  sendButtons.forEach((button) => {
    button.addEventListener('click', function () {
      // Get the student's ID from the data-id attribute
      const studentId = this.getAttribute('data-id');

      // Send an AJAX request to update the status
      const xhr = new XMLHttpRequest();
      xhr.open(
        'POST',
        'http://localhost/Zppsu_Medical/Php_Logics/Send_Form.php',
        true
      );
      xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
      xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
          // Handle the response (e.g., show a success message)
          alert(xhr.responseText);
          location.reload();
          // Change the button text to "Review"
          button.textContent = 'Review';
        }
      };
      // Send the 'id' parameter here
      xhr.send(`id=${studentId}&status=Review`);
    });
  });
});
