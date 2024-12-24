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
    <link rel="stylesheet" href="../css js/homePage.css">
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

        <section class="wrapper">
          <div class="static-txt">ស្វាគមន៍មកកាន់</div>
          <UR class="dynamic-txt">
            <li><span>បណ្ណាល័យ យូអរ</span></li>
            <li><span>ពិភពនៃសៀវភៅ</span></li>
            <li><span>ពិភពនៃការអាន</span></li>
            <li><span>ពិភពនៃចំណេះដឹង</span></li>
          </UR>
        </section>

        <section class="book">
          <p>សៀវភៅណែនាំសម្រាប់អ្នក</p>
          <i id="left" class="fa-solid fa-angle-left"></i>
          <ul class="book-list">
            
          </ul>
          <i id="right" class="fa-solid fa-angle-right"></i>
        </section>

        <section class="book">
          <p>សៀវភៅទូទៅ</p>
          <ul class="book-list allBook book-list-2">
          
          </ul>
        </section>

        <section class="btnNextpage">
          <button>១</button>
          <button>២</button>
          <button>៣</button>
          <button>៤</button>
        </section>

        <footer class="footer">
          <ul class="list-icon">
            <li class="link-icon">
              <a href="#"><i class="fa-brands fa-facebook"></i></a>
            </li>
            <li class="link-icon">
              <a href="#"><i class="fa-brands fa-github"></i></a>
            </li>
            <li class="link-icon">
              <a href="#"><i class="fa-brands fa-telegram"></i></a>
            </li>
            <li class="link-icon">
              <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
            </li>
            <li class="link-icon">
              <a href="#"><i class="fa-brands fa-youtube"></i></a>
            </li>
          </ul>
          <p class="credit">ផលិតដោយ</p>
          <div class="creator">
            <ul>
              <li>លឹម គឹមជា</li>
              <li>ណិត វីរៈ</li>
              <li>សេង បញ្ញា</li>
            </ul>
            <ul>
            <li>ស៊ាម សុខហេង</li>
            <li>ស៊ិន រតនៈ</li>
            </ul>
          </div>
          <p class="copyright">រក្សាសិទ្ធ &copy; ២០២៤ ដោយ យូអរឡាយប្រារីយ៍ធីម</p>
      </footer>
      </article>
    </div>
    <script>
        const khmerDays = ["អាទិត្យ", "ចន្ទ", "អង្គារ", "ពុធ", "ព្រហស្បតិ៍", "សុក្រ", "សៅរ៍"];

        const khmerMonths = ["មករា", "កម្ភៈ", "មីនា", "មេសា", "ឧសភា", "មិថុនា", "កក្កដា", "សីហា", "កញ្ញា", "តុលា", "វិច្ឆិកា", "ធ្នូ"];

        const khmerNumbers = ['០', '១', '២', '៣', '៤', '៥', '៦', '៧', '៨', '៩'];

        function convertToKhmerNumber(number) {
            return number.toString().split('').map(digit => khmerNumbers[digit]).join('');
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
            const hours = convertToKhmerNumber(date.getHours()).padStart(2, '0');
            const minutes = convertToKhmerNumber(date.getMinutes()).padStart(2, '0');
            const seconds = convertToKhmerNumber(date.getSeconds()).padStart(2, '0');
            return `${hours}:${minutes}:${seconds}`;
        }
        function updateDateTime() {
            const dateElement = document.getElementById('date');
            const timeElement = document.getElementById('clock');
            
            dateElement.textContent = getCurrentDateInKhmer();
            timeElement.textContent = getCurrentTimeInKhmer();
        }
        window.onload = function() {
            updateDateTime();
            setInterval(updateDateTime, 1000);
        };

        document.addEventListener("DOMContentLoaded", () => {
            const scrollAmount = 550; 
            const bookLists = document.querySelectorAll(".book-list");

            bookLists.forEach((bookList) => {
                const arrowBtns = bookList.parentElement.querySelectorAll("i");

                arrowBtns.forEach((btn) => {
                    btn.addEventListener("click", () => {
                        bookList.scrollLeft += btn.id === "left" ? -scrollAmount : scrollAmount;
                    });
                });
            });
        });
        
        let allBooks = []; 
        

      fetch("../api/read.php")
        .then((response) => response.json())
        .then((response) => {
          allBooks = response.bookList;

          // Display random books for the main section
          displayRandomBooks();

          // Display all books for the second row
          const allBooksHtml = allBooks.map((book) => createBookHtml(book)).join("");
          document.querySelector(".book-list-2").innerHTML = allBooksHtml;
        })
        .catch((error) => console.error("Error fetching books:", error));

      // Function to display random books in the first section
      function displayRandomBooks() {
        const randomBooks = shuffle([...allBooks]).slice(0, 20);
        const randomBooksHtml = randomBooks.map((book) => createBookHtml(book)).join("");
        document.querySelector(".book-list").innerHTML = randomBooksHtml;
      }

      // Function to shuffle an array
      function shuffle(array) {
        for (let i = array.length - 1; i > 0; i--) {
          const j = Math.floor(Math.random() * (i + 1));
          [array[i], array[j]] = [array[j], array[i]];
        }
        return array;
      }

      // Function to generate book HTML
      function createBookHtml(book) {
        return `
          <li class="book-link">
            <a href="./bookPreview.php?id=${book.id}">
              <img src="${book.image_path}" alt="${book.name}" draggable="false" />
            </a>
            <h3>${book.name}</h3>
            <div class="description">
              <h4>អ្នកនិពន្ធ</h4>
              <h4>${book.author}</h4>
            </div>
          </li>
        `;
      }

      // Function to filter search results based on query
      function filterSearchResults(query) {
        return allBooks.filter((book) =>
          book.name.toLowerCase().includes(query.toLowerCase())
        );
      }

      // Function to display search results
      function displaySearchResults(results) {
        const searchResultContainer = document.querySelector(".searchResult");

        if (results.length === 0) {
          searchResultContainer.innerHTML = `<p id="noResult">មិនមានទិន្នន័យ</p>`;
        } else {
          const searchResultsHtml = results
            .map(
              (book) => `
            <a href="./bookPreview.php?id=${book.id}">
              <h3 id="titleResult">${book.name}</h3>
            </a>
          `
            )
            .join("");
          searchResultContainer.innerHTML = searchResultsHtml;
        }
      }

      // Event listener for search input
      document.querySelector(".searchBtn").addEventListener("input", (event) => {
        const query = event.target.value.trim();
        const searchResultContainer = document.querySelector(".searchResult");

        if (query) {
          // Show search results for matching books
          const filteredResults = filterSearchResults(query);
          displaySearchResults(filteredResults);
          searchResultContainer.style.visibility = "visible";
        } else {
          // Show random books when query is empty
          const randomBooks = shuffle([...allBooks]).slice(0, 10);
          displaySearchResults(randomBooks);
          searchResultContainer.style.visibility = "visible";
        }
      });

      // Toggle visibility of search results
      document.addEventListener("click", (e) => {
        const searchResultContainer = document.querySelector(".searchResult");
        const searchInput = document.querySelector(".searchBtn");

        if (
          !searchResultContainer.contains(e.target) &&
          e.target !== searchInput
        ) {
          searchResultContainer.style.visibility = "hidden";
        }
      });

    </script>
  </body>
</html>
