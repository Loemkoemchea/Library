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
    <link rel="stylesheet" href="../css js/adminPage.css">
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
          <a href="./userAdminLogin.php" class="menu-link"
            ><i class="fa-solid fa-user-gear"></i>អ្នកគ្រប់គ្រង</a
          >
        </nav>
      </aside>
      <!-- main -->
      <article class="main-panel">
        <section class="navbar">
          <ul class="nav-list">
            <li class="nav-link search">
              <input type="text" placeholder="ស្វែងរក" />
              <i class="fa-solid fa-search"></i>
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

        <section class="btn_back">
          <a href="./userAdminLogin.php"
            ><i class="fa-solid fa-arrow-left"></i>
            <span>ត្រឡប់ក្រោយ</span>
          </a>
        </section>

        <section>
          <div class="panel">
            <h1>ជម្រាបសួរ <span>អ្នកគ្រប់គ្រង</span></h1>
            <div class="pageSitting">
                <a href="./updateBook.php">ធ្វើបច្ចុប្បន្នភាព</a>                
                <a href="./selectData.php">ត្រួតពិនិត្យទិន្នន័យ</a>
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
      document.querySelector(".search").addEventListener("click", () => {
        alert('អ្នកមិនអាចស្វែងរកនៅទំព័រនេះបានទេ​ សូមត្រឡប់ទៅទំព័រដើម!');
      });
    </script>
  </body>
</html>
