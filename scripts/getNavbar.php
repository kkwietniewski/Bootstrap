<?php
echo <<<NAV
<nav class="navbar navbar-expand-md navbar-dark fixed-top">
      <!-- container-fluid-->
      <div class="container-fluid">
        <!--  -->
        <a class="navbar-brand" href="/pages"
          ><img src="../images/logo200x76.png" alt="Computer Shop"
        /></a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarMobile"
          aria-controls="navbarMobile"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- collapse navbar-collapse-->
        <div class="collapse navbar-collapse" id="navbarMobile">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a
                class="nav-link active"
                aria-current="page"
                href="./registration.php"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="currentColor"
                  class="bi bi-arrow-down-circle menuIcon"
                  viewBox="0 0 16 16"
                >
                  <path
                    fill-rule="evenodd"
                    d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z"
                  />
                </svg>
                Rejestracja
              </a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="currentColor"
                  class="bi bi-arrow-down-circle menuIcon"
                  viewBox="0 0 16 16"
                >
                  <path
                    fill-rule="evenodd"
                    d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z"
                  />
                </svg>
                Dropdown
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li>
                  <a class="dropdown-item" href="../pages/login.php"
                    >Zaloguj<img
                      src="../images/product.jpg"
                      alt=""
                      srcset=""
                      style="width: 60px; height: 60px"
                  /></a>
                </li>
                <li>
                  <a class="dropdown-item" href="#"
                    >Another action<img
                      src="../images/product.jpg"
                      alt=""
                      srcset=""
                      style="width: 60px; height: 60px"
                  /></a>
                </li>
                <li><hr class="dropdown-divider" /></li>
                <li>
                  <a class="dropdown-item" href="#"
                    >Something else here<img
                      src="../images/product.jpg"
                      alt=""
                      srcset=""
                      style="width: 60px; height: 60px"
                  /></a>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="currentColor"
                  class="bi bi-arrow-down-circle menuIcon"
                  viewBox="0 0 16 16"
                >
                  <path
                    fill-rule="evenodd"
                    d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z"
                  />
                </svg>
                Dropdown
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li>
                  <a class="dropdown-item" href="#"
                    >Action<img
                      src="../images/product.jpg"
                      alt=""
                      srcset=""
                      style="width: 60px; height: 60px"
                  /></a>
                </li>
                <li>
                  <a class="dropdown-item" href="#"
                    >Another action<img
                      src="../images/product.jpg"
                      alt=""
                      srcset=""
                      style="width: 60px; height: 60px"
                  /></a>
                </li>
                <li><hr class="dropdown-divider" /></li>
                <li>
                  <a class="dropdown-item" href="#"
                    >Something else here<img
                      src="../images/product.jpg"
                      alt=""
                      srcset=""
                      style="width: 60px; height: 60px"
                  /></a>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="currentColor"
                  class="bi bi-arrow-down-circle menuIcon"
                  viewBox="0 0 16 16"
                >
                  <path
                    fill-rule="evenodd"
                    d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z"
                  />
                </svg>
                Dropdown
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li>
                  <a class="dropdown-item" href="#"
                    >Action<img
                      src="../images/product.jpg"
                      alt=""
                      srcset=""
                      style="width: 60px; height: 60px"
                  /></a>
                </li>
                <li>
                  <a class="dropdown-item" href="#"
                    >Another action<img
                      src="../images/product.jpg"
                      alt=""
                      srcset=""
                      style="width: 60px; height: 60px"
                  /></a>
                </li>
                <li><hr class="dropdown-divider" /></li>
                <li>
                  <a class="dropdown-item" href="#"
                    >Something else here<img
                      src="../images/product.jpg"
                      alt=""
                      srcset=""
                      style="width: 60px; height: 60px"
                  /></a>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="currentColor"
                  class="bi bi-arrow-down-circle menuIcon"
                  viewBox="0 0 16 16"
                >
                  <path
                    fill-rule="evenodd"
                    d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z"
                  />
                </svg>
                Dropdown
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li>
                  <a class="dropdown-item" href="#"
                    >Action<img
                      src="../images/product.jpg"
                      alt=""
                      srcset=""
                      style="width: 60px; height: 60px"
                  /></a>
                </li>
                <li>
                  <a class="dropdown-item" href="#"
                    >Another action<img
                      src="../images/product.jpg"
                      alt=""
                      srcset=""
                      style="width: 60px; height: 60px"
                  /></a>
                </li>
                <li><hr class="dropdown-divider" /></li>
                <li>
                  <a class="dropdown-item" href="#"
                    >Something else here<img
                      src="../images/product.jpg"
                      alt=""
                      srcset=""
                      style="width: 60px; height: 60px"
                  /></a>
                </li>
              </ul>
            </li>
          </ul>
          <form class="searchBar" action="#">
            <input
              class="searchBar-Input"
              type="search"
              placeholder="Wyszukaj produkt"
              aria-label="searchInput"
            />
            <button class="searchBar-Btn" type="submit" aria-label="searchBtn">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="16"
                height="16"
                fill="currentColor"
                class="bi bi-search"
                viewBox="0 0 16 16"
              >
                <path
                  d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"
                />
              </svg>
            </button>
          </form>
        </div>
        <!-- collapse navbar-collapse-->
      </div>
      <!-- container-fluid-->
    </nav>
NAV;
?>