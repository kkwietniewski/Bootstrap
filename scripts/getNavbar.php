<?php
  session_start();
  $name = "category";
  $subName = "subcategory"; 
  $cat1 = "Peryferia komputerowe";
  $sub1 = "Skanery i drukarki"; 
  $sub2 = "Monitory";
  $sub3 = "Tablety graficzne"; 
  $cat2 = "Komputery i laptopy";
  $sub4 = "Gamingowe";
  $sub5 = "Notebooki"; 
  $sub6 = "Biurowe"; 
  $cat3 = "Smartfony i gadżety";
  $sub7 = "Smartfony";
  $sub8 = "Smartwatche"; 
  $sub9 = "Akcesoria"; 
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
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="./searchProducts.php?$name=$cat1"
                id="navbarDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
                name=$name
                value=$cat1
                
              >
              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-mouse" viewBox="0 0 16 16">
                <path d="M8 3a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 3zm4 8a4 4 0 0 1-8 0V5a4 4 0 1 1 8 0v6zM8 0a5 5 0 0 0-5 5v6a5 5 0 0 0 10 0V5a5 5 0 0 0-5-5z"/>
              </svg>
                $cat1
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li>
                  <a class="dropdown-item" href="./searchProducts.php?$subName=$sub1"
                  name = $subName
                  value = $sub1
                    >$sub1
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="./searchProducts.php?$subName=$sub2"
                  name = $subName
                  value = $sub2
                    >$sub2
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="./searchProducts.php?$subName=$sub3"
                  name = $subName
                  value = $sub3
                    >$sub3
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="./searchProducts.php?$name=$cat2"
                id="navbarDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
                name = $name
                value = $cat2
              >
              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-display" viewBox="0 0 16 16">
                <path d="M0 4s0-2 2-2h12s2 0 2 2v6s0 2-2 2h-4c0 .667.083 1.167.25 1.5H11a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1h.75c.167-.333.25-.833.25-1.5H2s-2 0-2-2V4zm1.398-.855a.758.758 0 0 0-.254.302A1.46 1.46 0 0 0 1 4.01V10c0 .325.078.502.145.602.07.105.17.188.302.254a1.464 1.464 0 0 0 .538.143L2.01 11H14c.325 0 .502-.078.602-.145a.758.758 0 0 0 .254-.302 1.464 1.464 0 0 0 .143-.538L15 9.99V4c0-.325-.078-.502-.145-.602a.757.757 0 0 0-.302-.254A1.46 1.46 0 0 0 13.99 3H2c-.325 0-.502.078-.602.145z"/>
              </svg>
                $cat2
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li>
                  <a class="dropdown-item" href="./searchProducts.php?$subName=$sub4"
                  name = $subName
                  value = $sub4
                    >$sub4
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="./searchProducts.php?$subName=$sub5"
                  name = $subName
                  value = $sub5
                    >$sub5
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="./searchProducts.php?$subName=$sub6"
                  name = $subName
                  value = $sub6
                    >$sub6
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="./searchProducts.php?$name=$cat3"
                id="navbarDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
                name = $name
                value = $cat3
              >
              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-phone" viewBox="0 0 16 16">
                <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z"/>
                <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
              </svg>
                $cat3
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li>
                  <a class="dropdown-item" href="./searchProducts.php?$subName=$sub7"
                  name = $subName
                  value = $sub7
                    >$sub7
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="./searchProducts.php?$subName=$sub8"
                  name = $subName 
                  value = $sub8
                    >$sub8
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="./searchProducts.php?$subName=$sub9"
                  name = $subName
                  value = $sub9
                    >$sub9
                  </a>
                </li>
              </ul>
            </li>
          </ul>
          <form class="searchBar" action="./product.php" method="GET">
            <input
              class="searchBar-Input"
              type="search"
              placeholder="Wyszukaj produkt"
              aria-label="searchInput"
              name = "productName"
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
          
          <a
              class="nav-link active"
              aria-current="page"
              href="./cart.php"
              style="position: relative;"
            >
           <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16">
            <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
          </svg>
          <span class="badge badge-light">$_SESSION[product_counter]</span>
          </a>
          
NAV;
if (isset($_SESSION['logged'])) {
  echo<<<NAV
  <a
      class="nav-link active"
      aria-current="page"
      href="../scripts/logout.php"
    >
    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
      <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
    </svg>
    Wyloguj
  </a>
NAV;
}else{
  echo<<<NAV
  <a
      class="nav-link active"
      aria-current="page"
      href="./login.php"
    >
    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
      <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
    </svg>
    Zaloguj
  </a>
NAV;
}
echo<<<NAV
        </div>
        <!-- collapse navbar-collapse-->
      </div>
      <!-- container-fluid-->
    </nav>
NAV;
?>