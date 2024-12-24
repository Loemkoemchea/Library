<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>UR Library</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="icon" href="../image/Untitled-1.png">
    <link rel="stylesheet" href="../css js/home.css">
    <link rel="stylesheet" href="../css js/login.css">
    <!-- <script src="homePage1.js" defer></script>  -->
  </head>
  <body>
    <!-- container -->
    <div class="container">
      <aside class="right-panel">
        <div class="logo">
          <h1>យូអរ</h1>
          <h1>ឡាយប្រារីយ៍</h1>
        </div>
        <nav class="menubar">
          <a href="./homePage1.php" class="menu-link"
            ><i class="fa-solid fa-house"></i>ទំព័រដើម</a
          >
          <a href="#" class="menu-link"
            ><i class="fa-solid fa-user-gear"></i>អ្នកគ្រប់គ្រង</a
          >
        </nav>
      </aside>
      <!-- main -->
      <article class="main-panel">
        <section class="navbar">
          <ul class="nav-list">
            <li class="nav-link search">
              <input type="text" placeholder="ស្វែងរក" class="searchBtn"/>
              <i class="fa-solid fa-search searchBtn"></i>
              <div class="searchResult">
                
              </div>
            </li>
            <li class="nav-link">
              <i class="fa-solid fa-language"></i>
              <p>ខេមរភាសា</p>
            </li>
            <li class="nav-link">
              <div class="time-container">
                <i class="fa-solid fa-clock"></i>
                <p id="clock"></p>
              </div>
              <div class="date-container">
                <i class="fa-solid fa-calendar"></i>
                <p id="date"></p>
              </div>
            </li>
            <li class="nav-link">
                <img src="../image/blank-profile-picture-973460_1280.png" alt="" />
                <div class="account">
                  <p>កំពុងប្រើប្រាស់</p>
                </div>
            </li>
          </ul>
        </section>

        <!-- Login Form Section -->
        <section>
          <div class="login">
            <div class="box">
              <div class="form">
                <h2>ចូលគណនី</h2>
                <form id="login-form">
                  <div class="inputbox">
                    <input type="text" id="username" required="required" />
                    <span class="username-label">ឈ្មោះអ្នកប្រើប្រាស់</span><i></i>
                  </div>
                  <div class="inputbox">
                    <input type="password" id="password" required="required" />
                    <span class="password-label">លេខកូដសម្ងាត់</span><i></i>
                  </div>
                  <div class="links">
                    <a href="#">ភ្លេចលេខកូដសម្ងាត់</a>
                    <a href="#">បង្កើតគណនី</a>
                  </div>
                  <div class="loginBtn">
                    <button type="button" id="login-button">ចូលគណនី</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </section>
      </article>
    </div>
     <script>
      const khmerDays = [
        "អាទិត្យ",
        "ចន្ទ",
        "អង្គារ",
        "ពុធ",
        "ព្រហស្បតិ៍",
        "សុក្រ",
        "សៅរ៍",
      ];

      const khmerMonths = [
        "មករា",
        "កម្ភៈ",
        "មីនា",
        "មេសា",
        "ឧសភា",
        "មិថុនា",
        "កក្កដា",
        "សីហា",
        "កញ្ញា",
        "តុលា",
        "វិច្ឆិកា",
        "ធ្នូ",
      ];

      const khmerNumbers = ["០", "១", "២", "៣", "៤", "៥", "៦", "៧", "៨", "៩"];

      function convertToKhmerNumber(number) {
        return number
          .toString()
          .split("")
          .map((digit) => khmerNumbers[digit])
          .join("");
      }

      function getCurrentDateInKhmer() {
        const date = new Date();
        const dayName = khmerDays[date.getDay()];
        const day = convertToKhmerNumber(date.getDate());
        const monthName = khmerMonths[date.getMonth()];
        const year = convertToKhmerNumber(date.getFullYear());
        return `ថ្ងៃ${dayName} ទី${day} ខែ${monthName} ឆ្នាំ${year}`;
      }

      function getCurrentTimeInKhmer() {
        const date = new Date();
        const hours = convertToKhmerNumber(date.getHours()).padStart(2, "0");
        const minutes = convertToKhmerNumber(date.getMinutes()).padStart(
          2,
          "0"
        );
        const seconds = convertToKhmerNumber(date.getSeconds()).padStart(
          2,
          "0"
        );
        return `${hours}:${minutes}:${seconds}`;
      }

      function updateDateTime() {
        const dateElement = document.getElementById("date");
        const timeElement = document.getElementById("clock");

        dateElement.textContent = getCurrentDateInKhmer();
        timeElement.textContent = getCurrentTimeInKhmer();
      }

      window.onload = function () {
        updateDateTime();
        setInterval(updateDateTime, 1000);
      };
    </script>
    <script>
      document.querySelector(".addPage").addEventListener("submit", (e) => {
      e.preventDefault();

      const formData = new FormData();
      formData.append('name', document.getElementById("book_title").value);
      formData.append('author', document.getElementById("author").value);
      formData.append('author_history', document.getElementById("author_history").value);
      formData.append('admin', document.getElementById("admin").value);
      formData.append('bookPdf', document.getElementById('bookPdf').files[0]);
      formData.append('bookImage', document.getElementById("bookImage").files[0]); 

      fetch("../api/create.php", {
          method: 'POST',
          body: formData
      })
      .then(res => res.json())
      .catch(error => console.log("Error:", error));
      });
    </script>
    <script>
      function onLoginSuccess() {
        window.location.href = './adminPage.php';
      }

      function simulateLogin() {
  // Hardcoded credentials
  const hardcodedUsername = "admin";
  const hardcodedPassword = "password123";

  const usernameInput = document.querySelector('#username').value;
  const passwordInput = document.querySelector('#password').value;

  if (usernameInput === hardcodedUsername && passwordInput === hardcodedPassword) {
    alert("ចូលគណនីជោគជ័យ!"); 
    window.location.href = './adminPage.php';
    return; 
  }
  else{
    alert("សូមបញ្ចូលឈ្មោះអ្នកប្រើប្រាស់ និងលេខកូដសម្ងាត់!");
    return;
  }

  if (usernameInput === "" || passwordInput === "") {
    alert("សូមបញ្ចូលឈ្មោះអ្នកប្រើប្រាស់ និងលេខកូដសម្ងាត់!");
    return;
  }

  fetch("../api/login.php", {
    method: "POST",
    headers: { "Content-Type": "application/json" },
    body: JSON.stringify({ username: usernameInput, password: passwordInput })
  })
    .then(response => response.json())
    .then(data => {
      if (data.message === "Login Successful") {
        window.location.href = './adminPage.php';
      } else {
        alert("ឈ្មោះអ្នកប្រើប្រាស់ ឬលេខកូដសម្ងាត់មិនត្រឹមត្រូវ!");
        document.querySelector('#username').value = "";
        document.querySelector('#password').value = "";
      }
    })
    .catch(error => console.log("Error:", error));
}

// Attach the login function to the button click
document.querySelector('#login-button').addEventListener('click', function (event) {
  event.preventDefault();
  simulateLogin();
});

    </script>
  </body>
</html>
