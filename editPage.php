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
    <link rel="stylesheet" href="../css js/home.css">
    <link rel="stylesheet" href="../css js/editPage.css">
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
            <li class="nav-link">
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
          <a href="./updateBook.php"
            ><i class="fa-solid fa-arrow-left"></i>
            <span>ត្រឡប់ក្រោយ</span>
          </a>
        </section>
        
        <section>
            <form class="addPage" enctype="multipart/form-data">
                <input type="hidden" id="eid">
                <h2 class="pageTitle">ធ្វើបច្ចុប្បន្នភាព</h2>
                <div>
                  <label for="exampleInputEmail">ចំណងជើង</label>
                  <input type="text" placeholder="ចំណងជើង" id="book_title" aria-describedby="emailHelp"/>
                </div>
                <div>
                  <label for="exampleInputEmail">អ្នកនិពន្ធ</label>
                  <input type="text" placeholder="អ្នកនិពន្ធ" id="author" aria-describedby="emailHelp"/>
                </div>
                <div>
                  <label for="exampleInputEmail">អំពីសៀវភៅ</label>
                  <input type="text" placeholder="អំពីសៀវភៅ" id="aboutBook" aria-describedby="emailHelp"/>
                </div>
                <div>
                  <label for="exampleInputEmail">អ្នកគ្រប់គ្រង</label>
                  <input type="text" placeholder="អ្នកគ្រប់គ្រង" id="admin" aria-describedby="emailHelp"/>
                </div>
                <div class="sourceBook">
                  <label for="bookPdf">Book PDF</label>
                  <input type="file" id="bookPdf" name="bookPdf" accept="application/pdf" class="inputFile" />
                  <span id="currentBookPdf"></span>
                </div>
                <div class="sourceImage">
                  <label for="bookImage">Book Image</label>
                  <input type="file" id="bookImage" name="bookImage" class="inputFile inputImage" />
                  <span id="currentBookImage"></span>
                </div>

                <input type="submit" value="រក្សាទុក" class="saveBtn">
              </form>  
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
        const minutes = convertToKhmerNumber(date.getMinutes()).padStart(2, "0");
        const seconds = convertToKhmerNumber(date.getSeconds()).padStart(2, "0");
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
      const urlString = window.location.search;
      const urlParams = new URLSearchParams(urlString);
      const id = urlParams.get('id');

      fetch(`../api/read_single.php?id=${id}`)
      .then(response => response.json())
      .then(book_list => {
        let id = book_list.id;
        let name = book_list.name;
        let author = book_list.author;
        let aboutBook = book_list.aboutBook;
        let admin = book_list.admin;
        let source_file = book_list.source_file;
        let image_path = book_list.image_path;

        document.getElementById("eid").value = id;
        document.getElementById("book_title").value = name;
        document.getElementById("author").value = author;
        document.getElementById("aboutBook").value = aboutBook;
        document.getElementById("admin").value = admin;

        if (source_file) {
          document.getElementById("currentBookPdf").textContent = `Current file: ${source_file}`;
        }
        if (image_path) {
          document.getElementById("currentBookImage").textContent = `Current image: ${image_path}`;
        }
      })
      .catch(error => console.log("Error:", error));

      document.querySelector(".addPage").addEventListener("submit", (e) => {
        e.preventDefault();

        let uid = document.getElementById("eid").value;
        let uname = document.getElementById("book_title").value;
        let uauthor = document.getElementById("author").value;
        let uaboutBook = document.getElementById("aboutBook").value;
        let uadmin = document.getElementById("admin").value;

        let usource_file = document.getElementById("bookPdf").files[0]
          ? document.getElementById("bookPdf").files[0].name
          : document.getElementById("currentBookPdf").textContent.replace("Current file: ", "");

        let uimage_path = document.getElementById("bookImage").files[0]
          ? document.getElementById("bookImage").files[0].name
          : document.getElementById("currentBookImage").textContent.replace("Current image: ", "");

        fetch("../api/update.php", {
          method: 'PUT',
          headers: {
            'Content-Type': 'application/json'
          },
          body: JSON.stringify({
            id: uid,
            name: uname,
            author: uauthor,
            aboutBook: uaboutBook,
            admin: uadmin,
            source_file: usource_file,
            image_path: uimage_path,
          })
        })
        .then(res => res.json())
        .catch(error => console.log("Error:", error))
        .then(response => {
          alert("ទិន្នន័យចំនួនមួយត្រូវបានធ្វើបច្ចុប្បន្នភាព។");
        });
      });

    </script>
  </body>
</html>
