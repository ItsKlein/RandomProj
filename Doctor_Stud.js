// Function to fetch appointments
const appointmentList = document.getElementById('appointment-list');

function fetchAppointmentsForReview() {
  const xhr = new XMLHttpRequest();
  xhr.open(
    'GET',
    'http://localhost/Zppsu_Medical/Php_Logics/fetch_review_appointments.php',
    true
  );

  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4) {
      if (xhr.status === 200) {
        // Parse the JSON response
        const responseData = JSON.parse(xhr.responseText);

        console.log('Data fetched successfully:', responseData); // Debugging statement

        // Generate HTML for the appointment list
        const appointmentListHTML = responseData
          .map((item) => {
            return `
              <tr>
              
                <td>${item.id}</td>
                <td>${item.name}</td>
                <td>${item.course}</td>
                <td class="uppercase-text">${item.status}</td>
                <td>
                  <button class="delete-button" data-id="${item.id}">Delete</button>
                  <button class="view-button" data-id="${item.id}" onclick="redirectToView(${item.id})">View</button>
                  <button class="update-pass">PASS</button>
                  <button class="update-fail">FAIL</button>
                 
                </td>
              </tr>
            `;
          })
          .join('');

        // Replace the appointment list content with the generated HTML
        appointmentList.innerHTML = appointmentListHTML;

        // Attach event listeners to the buttons after populating the list
        attachButtonListeners();
      } else {
        console.error('Error fetching data. Status:', xhr.status);
      }
    }
  };

  xhr.send();
}

// Function to refresh the appointment list every 10 seconds
function refreshAppointmentList() {
  fetchAppointmentsForReview();
}

// Initial fetch when the page loads
fetchAppointmentsForReview();

// Automatically refresh the appointment list every 10 seconds (10000 milliseconds)
setInterval(refreshAppointmentList, 10000);

// Function to handle delete action
function deleteStudent(button) {
  const id = button.getAttribute('data-id');
  const confirmation = confirm(`Delete student with ID ${id}?`);
  if (confirmation) {
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
        location.reload();
      }
    };
    xhr.send(`id=${id}`);
  } else {
    alert('Delete canceled');
  }
}

// Function to attach event listeners to the buttons
function attachButtonListeners() {
  // Attach event listeners to the "Delete" buttons
  const deleteButtons = document.querySelectorAll('.delete-button');
  deleteButtons.forEach((button) => {
    button.addEventListener('click', () => {
      deleteStudent(button);
    });
  });

  // Attach event listeners to the "Pass" buttons
  const passButtons = document.querySelectorAll('.update-pass');
  passButtons.forEach((button) => {
    button.addEventListener('click', () => {
      const id = button
        .closest('tr')
        .querySelector('.delete-button')
        .getAttribute('data-id');
      updateStatusPass(id);
    });
  });

  // Attach event listeners to the "Fail" buttons
  const failButtons = document.querySelectorAll('.update-fail');
  failButtons.forEach((button) => {
    button.addEventListener('click', () => {
      const id = button
        .closest('tr')
        .querySelector('.delete-button')
        .getAttribute('data-id');
      updateStatusFail(id);
    });
  });
}

const viewButtons = document.querySelectorAll('.view-button');
viewButtons.forEach((button) => {
  button.addEventListener('click', (event) => {
    const id = event.currentTarget.getAttribute('data-id');
    redirectToView(id);
  });
});

function redirectToView(id) {
  // Construct the URL based on the id
  const viewUrl = `http://localhost/Zppsu_Medical/Student_Status/view_user2.php?id=${id}`;

  console.log('Redirecting to:', viewUrl); // Debugging statement

  // Redirect the user to the specified URL
  window.location.href = viewUrl;
}

// Function to handle "Pass" button click
function updateStatusPass(id) {
  const xhr = new XMLHttpRequest();
  xhr.open(
    'POST',
    'http://localhost/Zppsu_Medical/Php_Logics/Update_Pass.php',
    true
  );
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      alert(xhr.responseText);
      location.reload();
    }
  };
  xhr.send(`id=${id}`);
}

// Function to handle "Fail" button click
function updateStatusFail(id) {
  const xhr = new XMLHttpRequest();
  xhr.open(
    'POST',
    'http://localhost/Zppsu_Medical/Php_Logics/Update_Fail.php',
    true
  );
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      alert(xhr.responseText);
      location.reload();
    }
  };
  xhr.send(`id=${id}`);
}

// Sample data of departments and courses
var coursesData = {
  'College of Maritime Education': {
    courses: ['BS Marine Engineering'],
  },
  'College of Information and Computing Science': {
    courses: ['BS Information Technology', 'BS Information System'],
  },
  'College of Arts Humanities and Social Science': {
    courses: [
      'BS Development Communication',
      'BS Fine Arts in Industrial Design',
      'BA Sining ng Filipino',
    ],
  },
  'School of Business Administration': {
    courses: [
      'BACHELOR OF SCIENCE IN ENTREPRENEURSHIP',
      'BACHELOR OF SCIENCE IN HOSPITALITY MANAGEMENT',
    ],
  },
  'Senior High School': {
    courses: [
      'GAS',
      'STEM',
      'TVL-AUTO',
      'TVL-BREAD',
      'TVL-ANIMATION',
      'TVL-CSS',
      'TVL-COOK',
      'TVL-ELECT',
      'TVL-ELXT',
      'TVL-FOOD',
      'TVL-FRONT',
      'TVL-DRAFT',
      'TVL DRESSMAKING',
    ],
  },
  'College of Engineering and Technology': {
    courses: [
      'BSIT PPE- BACHELOR OF SCIENCE IN INDUSTRIAL TECHNOLOGY IN POWER PLANT ENGINEERING',
      'BS AT-BACHELOR OF SCIENCE IN AUTOMOTIVE TECHNOLOGY',
      'BS COMPTECH-BACHELOR OF SCIENCE IN COMPUTER TECHNOLOGY',
      'BS ELECT-BACHELOR OF SCIENCE IN ELECTRICAL TECHNOLOGY',
      'BACHELOR OF SCIENCE IN ELECTRONICS TECHNOLOGY',
      'BS ELEXT-BACHELOR OF SCIENCE IN REFRIGERATION AND AIR CONDITIONING',
      'BS RACT-BS MECHTECH TECHNOLOGY',
      'BACHELOR OF SCIENCE IN MECHANICAL TECHNOLOGY',
      'BSIT CT-BACHELOR OF SCIENCE IN INDUSTRIAL TECHNOLOGY IN CIVIL TECHNOLOGY',
      'BSIT DT-BACHELOR OF SCIENCE IN INDUSTRIAL TECHNOLOGY IN DRAFTING TECHNOLOGY',
      'BSIT FT-BACHELOR OF SCIENCE IN INDUSTRIAL TECHNOLOGY IN FOOD TECHNOLOGY',
      'BSIT GTT- BACHELOR OF SCIENCE IN INDUSTRIAL TECHNOLOGY IN GARMENTS AND TEXTILE TECHNOLOGY',
    ],
  },
  'Department of Technical Education': {
    courses: [
      '2-YEAR ASSOCIATE IN INDUSTRIAL TECHNOLOGY IN AUTOMOTIVE TECHNOLOGY',
      '2-YEAR ASSOCIATE IN INDUSTRIAL TECHNOLOGY IN ELECTRICAL TECHNOLOGY',
      '2-YEAR ASSOCIATE IN INDUSTRIAL TECHNOLOGY IN ELECTRONICS TECHNOLOGY',
      '2-YEAR ASSOCIATE IN INDUSTRIAL TECHNOLOGY IN FOOD TECHNOLOGY',
      '2-YEAR ASSOCIATE IN INDUSTRIAL TECHNOLOGY IN GARMENTS AND TEXTILE TECHNOLOGY',
      '2-YEAR ASSOCIATE IN INDUSTRIAL TECHNOLOGY IN REFRIGERATION AND AIR CONDITIONING TECHNOLOGY',
      '2-YEAR TRADE TECHNICAL CURRICULUM IN TECHNICAL DRAFTING TECHNOLOGY',
      '3-YEAR DIPLOMA OF TECHNOLOGY IN AUTOMOTIVE ENGINEERING TECHNOLOGY',
      '3-YEAR DIPLOMA OF TECHNOLOGY IN CIVIL ENGINEERING TECHNOLOGY',
      '3-YEAR DIPLOMA TECHNOLOGY IN ELECTRICAL ENGINEERING TECHNOLOGY',
      '3-YEAR DIPLOMA IN TECHNOLOGY IN ELECTRONICS AND COMMUNICATION TECHNOLOGY',
      '3-YEAR DIPLOMA OF TECHNOLOGY IN FOOD PRODUCTION AND SERVICES MANAGEMENT',
      '3-YEAR DIPLOMA OF TECHNOLOGY in garments FASHION AND DESIGN TECHNOLOGY',
      '3-YEAR DIPLOMA OF TECHNOLOGY IN HOSPITALITY MANAGEMENT TECHNOLOGY',
      '3-YEAR DIPLOMA OF TECHNOLOGY IN INFORMATION TECHNOLOGY',
      '3-YEAR TRADE INDUSTRIAL TECHNICAL EDUCATION IN WELDING AND FABRICATION TECHNOLOGY',
    ],
  },
  'College of Teacher Education': {
    courses: [
      'BEED-BACHELOR OF ELEMENTARY EDUCATION',
      'BSED ENGLISH-BACHELOR OF SECONDARY EDUCATION MAJOR IN ENGLISH',
      'BSED MATH-BACHELOR OF SECONDARY EDUCATION MAJOR IN MATHEMATICS',
      'BPED-BACHELOR OF PHYSICAL EDUCATION',
      'BTVTED AUTO-BACHELOR OF TECHNICAL-VOCATIONAL TEACHER EDUCATION IN AUTOMOTIVE TECHNOLOGY',
      'BTVTED CIVIL-BACHELOR OF TECHNICAL-VOCATIONAL TEACHER EDUCATION IN CIVIL AND CONSTRUCTION TECHNOLOGY',
      'BTVTED DRAFT',
      'BACHELOR OF TECHNICAL-VOCATIONAL TEACHER EDUCATION IN DRAFTING TECHNOLOGY',
      'BTVTED ELECT-BACHELOR OF TECHNICAL-VOCATIONAL TEACHER EDUCATION IN ELECTRICAL EDUCATION',
      'BTVTED ELEXT-BACHELOR OF TECHNICAL-VOCATIONAL TEACHER EDUCATION IN ELECTRONICS TECHNOLOGY',
      'BTVTED GFD-BACHELOR OF TECHNICAL-VOCATIONAL TEACHER EDUCATION IN FASHION, GARMENTS AND TECHNOLOGY',
      'BTVTED FSM-BACHELOR OF TECHNICAL-VOCATIONAL TEACHER EDUCATION IN FOOD SERVICE MANAGEMENT',
      'BTVTED HVAC-BACHELOR OF TECHNICAL-VOCATIONAL TEACHER EDUCATION IN HEATING, VENTILATING AND AIR CONDITIONING TECHNOLOGY',
      'BTVTED WAFT-BACHELOR OF TECHNICAL-VOCATIONAL TEACHER EDUCATION IN WELDING AND FABRICATION TECHNOLOGY',
      'BTLED HE-BACHELOR OF TECHNOLOGY AND LIVELIHOOD EDUCATION IN HOME ECONOMICS',
      'BTLED IA-BACHELOR OF TECHNOLOGY AND LIVELIHOOD EDUCATION IN INDUSTRIAL ARTS',
      'BTLED ICT-BACHELOR OF TECHNOLOGY AND LIVELIHOOD EDUCATION IN INFORMATION AND COMMUNICATION TECHNOLOGY',
    ],
  },
};
