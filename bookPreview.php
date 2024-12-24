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
    <link rel="stylesheet" href="../css js/previewPage.css">
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
          <a href="./homePage1.php"
          ><i class="fa-solid fa-arrow-left"></i>
          <span>ត្រឡប់ក្រោយ</span>
        </a>
      </section>
      
      <section>
        <div class="overView">
          <input type="hidden" id="sid">
          <div class="book-image">
              <img src="" alt="book-image" id="bookImage"/>
              <div class="btn-desc">
                <a href="#"><i class="fa-solid fa-clipboard-list"></i></a>
                <a href="#"><i class="fa-solid fa-book"></i></a>
                <a href="#"><i class="fa-solid fa-share-nodes"></i></a>
              </div>
              <div class="desc">
                <a href="#"><p>ពិនិត្យ</p></a>
                <a href="#"><p>ចំណាំ</p></a>
                <a href="#"><p>ចែករំលែក</p></a>
              </div>
            </div>
            <div class="userReading">
              <div class="detail">
                <h2 id="book_title"></h2>
                <p>អ្នកនិពន្ធ</p>
                <p class="authorTitle"></p>
              </div>
              <div class="star">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </div>
              <div class="info">
                <p>ការវាយតម្លៃ ៥.០</p>
              </div>
              <div class="btnReading">
                <button class="readBtn">ទាញយកសៀវភៅ</button>
              </div>
            </div>
            <div class="autBackground">
              <h2>ព័ត៌មានលម្អិត</h2>
              <p><span>ឈ្មោះអ្នកនិពន្ធ: <span class="author"></span></span></p>
              <p>
                <span>អំពីសៀវភៅ: <span class="authorBg"></span></span>
              </p>
            </div>
          </div>
        </section>

        <section>
          <div class="note">
          <p>ចំណងជើង</p>
          <div>
            <span>ការវាយតម្លៃ</span>
            <span>ប្រភេទ</span>
          </div>
        </div>
        </section>
        
        <section class="bookRecommend">
          
        </section>
      </article>
      <form class="addPage" enctype="multipart/form-data">
        <h2 class="title">ព័ត៌មានអ្នកប្រើប្រាស់</h2>
        <i class="fa-solid fa-xmark closeBtn"></i>
        <h3 class="bookName">ឈ្មោះសៀវភៅ: <span id="name"></span></h3>
        <div>
          <label for="exampleInputEmail">ឈ្មោះសៀវភៅ</label>
          <input
            type="text"
            placeholder="ឈ្មោះសៀវភៅ"
            id="BName"
            aria-describedby="emailHelp"
          />
        </div>
        <div>
          <label for="exampleInputEmail">គោត្តនាម</label>
          <input
            type="text"
            placeholder="គោត្តនាម"
            id="fName"
            aria-describedby="emailHelp"
          />
        </div>
        <div>
          <label for="exampleInputEmail">នាម</label>
          <input
            type="text"
            placeholder="នាម"
            id="lName"
            aria-describedby="emailHelp"
          />
        </div>
        <div>
          <div class="gender">
            <label>ភេទ</label>
            <div class="inputGender">
              <input type="radio" id="male" name="gender" value="male" />
              <label for="male">ប្រុស</label>

              <input type="radio" id="female" name="gender" value="female" />
              <label for="female">ស្រី</label>

              <input type="radio" id="other" name="gender" value="other" />
              <label for="other">ផ្សេងៗ</label>
            </div>
          </div>
        </div>
        <div class="linkDownload">
          <a href="#" id="downloadLink" class="downloadBtn">ទាញយកឯកសារ</a>
        </div>
        <input type="submit" value="បន្ត" class="saveBtn" />
      </form>
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

      // Fetch all books from the API
      fetch("../api/read.php")
      .then(response => response.json())
      .then(response => {
        allBooks = response.bookList; 
        const product = response.bookList;

        // Shuffle the book list to randomize the order
        function shuffle(array) {
          for (let i = array.length - 1; i > 0; i--) {
            const j = Math.floor(Math.random() * (i + 1));
            [array[i], array[j]] = [array[j], array[i]];
          }
          return array;
        }

        const randomBooks = shuffle(product).slice(0, 10);
        let rows = '';
        let bookName = '';

        for (let i = 0; i < randomBooks.length; i++) {
          rows += `<div class="recommend">
                    <a href="./bookPreview.php?id=${randomBooks[i].id}">
                        <img src="${randomBooks[i].image_path}" alt="Image Book" />
                        <div class="re-detail">
                          <p>${randomBooks[i].name}</p>
                          <p>អ្នកនិពន្ធ</p>
                          <p>${randomBooks[i].author}</p>
                        </div>
                    </a>
                    <div class="about">
                      <p>៥/៥</p>
                      <p>សៀវភៅ</p>
                      <a href="./bookPreview.php?id=${randomBooks[i].id}">ពិនិត្យមើល</a>
                    </div>
                  </div>`;
        }

        document.querySelector(".bookRecommend").innerHTML = rows;
      })
      .catch(error => console.log("Error:", error));
      //search
      function getRandomBooks(data, count = 10) {
      const shuffled = [...data].sort(() => 0.5 - Math.random());
      return shuffled.slice(0, count);
      }

      function displaySearchResults(results) {
        const searchResultContainer = document.querySelector(".searchResult");
        if (results.length === 0) {
          searchResultContainer.innerHTML = "<p>No results found</p>";
        } else {
          const searchResHtml = results.map(book => `
              <a href="./bookPreview.php?id=${book.id}">
                  <h3 id="titleResult">${book.name}</h3>
              </a>
          `).join("");
          searchResultContainer.innerHTML = searchResHtml;
        }
      }

      function filterSearchResults(query) {
        return allBooks.filter(book => 
            book.name.toLowerCase().includes(query.toLowerCase())
        );
      }

      document.querySelector(".searchBtn").addEventListener("input", (event) => {
        const query = event.target.value.trim();
        const filteredResults = filterSearchResults(query);
        displaySearchResults(filteredResults);
        document.querySelector(".searchResult").style.visibility = query ? "visible" : "hidden";
      });

      document.querySelector(".searchBtn").addEventListener("click", (e) => {
        e.stopPropagation(); 

        const query = e.target.value.trim();
        if (!query) {
            const randomBooks = getRandomBooks(allBooks);
            displaySearchResults(randomBooks);
        }
        
        document.querySelector(".searchResult").style.visibility = "visible"; 
      });

      document.addEventListener("click", (e) => {
          if (!document.querySelector(".searchResult").contains(e.target) && e.target !== document.querySelector(".searchBtn")) {
              document.querySelector(".searchResult").style.visibility = "hidden"; 
          }
      });
      // ======================================+

    const urlParams = new URLSearchParams(window.location.search);
    const bookId = urlParams.get("id");

    if (bookId) {
      fetch(`../api/read_single.php?id=${bookId}`)
      .then(response => response.json())
      .then(book => {
        if (book) {
          document.getElementById("bookImage").src = book.image_path;
          document.getElementById("book_title").textContent = book.name;
          document.querySelector(".author").textContent = book.author;
          document.querySelector(".authorTitle").textContent = book.author;
          document.querySelector(".authorBg").textContent = book.aboutBook;
          document.getElementById("name").textContent = book.name;
          document.getElementById("BName").value = book.name;


          const downloadLink = document.getElementById("downloadLink");
          downloadLink.href = book.source_file; 
          downloadLink.setAttribute("download", book.name + ".pdf");
          downloadLink.style.display = "block"; 
        }
      })
      .catch(error => console.error("Error:", error));
    }

    document.querySelector(".addPage").addEventListener("submit", (e) => {
    e.preventDefault();

    const book = document.getElementById("BName").value;
    const firstName = document.getElementById("fName").value;
    const lastName = document.getElementById("lName").value;
    const gender = document.querySelector('input[name="gender"]:checked')?.value;

    if (!book || !firstName || !lastName || !gender) {
      alert("សូមបំពេញចន្លោះទាំងអស់ដើម្បីអាចទាញយកសៀវភៅ!");
      return;
    }

    fetch("../api/userCreate.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/json"
      },
      body: JSON.stringify({
        book: book,
        first_Name: firstName,
        last_Name: lastName,
        gender: gender
      })
    })
      .then(res => res.json())
      .then(data => {
        if (data.message === "user Created") {
          alert("ជោគជ័យ!");

          // Trigger the download after successful submission
          const downloadLink = document.getElementById("downloadLink");
          downloadLink.click();
        } else {
          alert("បរាជ័យ សូមព្យាយាមម្តងទៀត!");
        }
      })
      .catch(error => console.error("Error:", error));
    });

    </script>
    <!-- add book panel -->
    <script>
      const addPage = document.querySelector(".addPage");
      const closeBtn = document.querySelector(".closeBtn");
      const navbar = document.querySelector(".navbar");
      const book = document.querySelector(".book");
      const backBtn = document.querySelector(".btn_back");
      const readBtn = document.querySelector(".readBtn");
      const overView = document.querySelector(".overView");
      const note = document.querySelector(".note");
      const bookRecommend = document.querySelector(".bookRecommend");

      function toggle(isShow) {
        if (isShow) {
          addPage.classList.add("active");
          navbar.style.filter = "blur(3px)";
          backBtn.style.filter = "blur(3px)";
          overView.style.filter = "blur(3px)";
          note.style.filter = "blur(3px)";
          bookRecommend.style.filter = "blur(3px)";
        } else {
          addPage.classList.remove("active");
          navbar.style.filter = "none";
          backBtn.style.filter = "none";
          overView.style.filter = "none";
          note.style.filter = "none";
          bookRecommend.style.filter = "none";
        }
      }

      readBtn.addEventListener("click", () => {
        toggle(true);
      });

      closeBtn.addEventListener("click", () => toggle(false));
    </script>
  </body>
</html>
