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
    <link rel="stylesheet" href="../css js/updatePage.css">
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
          <a href="../view/homePage1.php" class="menu-link"
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
            <li class="nav-link">
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

        <section class="btn_back">
          <a href="./adminPage.php"
            ><i class="fa-solid fa-arrow-left"></i>
            <span>ត្រឡប់ក្រោយ</span>
          </a>
        </section>

        <section>
          <div class="addBtn">
            <h2 class="pageTitle">ធ្វើបច្ចុប្បន្នភាព</h2>
            <button class="addBook">បន្ថែមសៀវភៅ</button>
            <form class="addPage" enctype="multipart/form-data">
              <h2 class="title">បន្ថែមសៀវភៅ</h2>
              <i class="fa-solid fa-xmark closeBtn"></i>
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
                <input type="text" placeholder="Admin" id="admin" aria-describedby="emailHelp"/>
              </div>
              <div>
                  <label for="bookPdf">សៀវភៅ​</label>
                  <input type="file" id="bookPdf" name="bookPdf" accept="application/pdf" class="inputFile"/>
              </div>
              <div>
                <label for="bookImage">រូបភាពសៀវភៅ​ (ទំហំ៖​ 150px * 160px)</label>
                <input type="file" id="bookImage" name="bookImage" class="inputFile inputImage"/>
                <p>(សៀវភៅ និងរូបភាពសៀវភៅដែលបញ្ជូលហើយមិនអានកែប្រែបានទេ)</p>
              </div>
              <input type="submit" value="រក្សាទុក" class="saveBtn">
            </form>
          </div>
        </section>

        <section>
          <div class="book">
            <table class="editBook">
              <tr>
                <th>ចំណងជើង</th>
                <th></th>
                <th>អ្នកនិពន្ធ</th>
                <th>កាលបរិច្ឆេទបង្កើត</th>
                <th></th>
                <th></th>
              </tr>
              <tbody class="tableBody"></tbody>
              
            </table>
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

      // input book

      document.querySelector(".addPage").addEventListener("submit", (e) => {
          e.preventDefault();

          const formData = new FormData();
          formData.append('name', document.getElementById("book_title").value);
          formData.append('author', document.getElementById("author").value);
          formData.append('aboutBook', document.getElementById("aboutBook").value);
          formData.append('admin', document.getElementById("admin").value);
          formData.append('bookPdf', document.getElementById('bookPdf').files[0]);
          formData.append('bookImage', document.getElementById("bookImage").files[0]); 

          fetch("../api/create.php", {
              method: 'POST',
              body: formData
          })
          .then(res => res.json())
          .catch(error => console.log("Error:", error))
          .then(alert('ជោគជ័យ!'))
      });
    // read data

    let allBooks = []; 

      fetch("../api/read.php")
      .then(response => response.json())
      .then(response => {
          allBooks = response.bookList;
          displayBooks(allBooks); 
      })
      .catch(error => console.log("Error:", error));

      function displayBooks(books) {
      const tableBody = document.querySelector(".tableBody");
      let rows = '';
      books.forEach(book => {
          rows += `<tr class="listBook">
                      <td><img src="${book.image_path}" alt="Book Image" /></td>
                      <td><p>${book.name}</p></td>
                      <td><p>${book.author}</p></td>
                      <td>${book.create_at}</td>
                      <td>
                        <button class="editPage"><a href="./editPage.php?id=${book.id}">កែសម្រួល</a></button>
                      </td>
                      <td>
                        <button class="deleteBtn"><a href="./delete.php?id=${book.id}" onclick="return confirm('តើអ្នកប្រាកដសម្រាប់ការលុបនេះដែរឬទេ? សូមចុច (Ok សម្រាប់លុប) និង(Cancel សម្រាប់ការមិនលុប)');">លុប</a></button>
                      </td>
                    </tr>`;
      });
      tableBody.innerHTML = rows;
      }

      document.querySelector(".searchBtn").addEventListener("input", (event) => {
          const query = event.target.value.trim();
          if (query) {
              const filteredResults = filterSearchResults(query);
              const remainingBooks = allBooks.filter(book => !filteredResults.includes(book));
              displayBooks([...filteredResults, ...remainingBooks]); 
          } else {
              displayBooks(allBooks); 
          }
      });

      function filterSearchResults(query) {
          return allBooks.filter(book => 
              book.name.toLowerCase().includes(query.toLowerCase())
          );
      }
    // Add Btn Control

      const addBook = document.querySelector(".addBook");
      const editPage = document.querySelector(".editPage");
      const addPage = document.querySelector(".addPage");
      const closeBtn = document.querySelector(".closeBtn");
      const book = document.querySelector(".book");
      const backBtn = document.querySelector(".btn_back");
      const title = document.querySelector(".title");
      const pageTitle = document.querySelector(".pageTitle");
      const navbar = document.querySelector(".navbar");

      function toggle(isShow) {
        if (isShow) {
          addPage.classList.add("active");
          addBook.style.webkitFilter = "blur(1.5px)";
          book.style.webkitFilter = "blur(1.5px)";
          backBtn.style.webkitFilter = "blur(1.5px)";
          navbar.style.webkitFilter = "blur(1.5px)";
        } else {
          addPage.classList.remove("active");
          addBook.style.webkitFilter = "none";
          book.style.webkitFilter = "none";
          backBtn.style.webkitFilter = "none";
          pageTitle.style.webkitFilter = "none";
          navbar.style.webkitFilter = "none";

        }
      }

      addBook.addEventListener("click", () => {
        title.textContent = "បន្ថែមសៀវភៅ";
        toggle(true);
      });

      closeBtn.addEventListener("click", () => toggle(false));
    </script> 
  </body>
</html>
