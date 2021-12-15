(window.onload = function (event) {
  const body = document.querySelector("body");
  const header = document.querySelector("#header");
  const sticky = header.offsetTop;
  const togglerNav = document.querySelector(".toggler-nav");
  const headerNav = document.querySelector(".header-nav");
  let navFlag = false;
  const goToTop = document.querySelector("#go-to-top");
  const ornmentFooter = document.querySelector("#ornament-footer");

  // Add ornament in footer
  setTimeout(() => {
    ornmentFooter.innerHTML = ` <svg xml:space="preserve" viewBox="0 0 248 222">
        <path d="M116.8 118.6 145.3 90l-90-90L0 55.3v57.1l55.3-55.3zM248 192.8l-90-90.1-28.6 28.6 61.5 61.5-29.2 29.2h57.1z" class="st0"/>
    </svg>`;
  }, 1500);

  // Go to Top
  goToTop.addEventListener("click", () => {
    document.documentElement.scrollTop = 0;
  });
  document.addEventListener("scroll", () => {
    if (window.pageYOffset >= 200) {
      goToTop.classList.add("go-to-to-active");
    } else {
      goToTop.classList.remove("go-to-to-active");
    }
  });

  // sticky header
  document.addEventListener("scroll", () => {
    if (window.pageYOffset >= sticky) {
      header.classList.add("header-sticky");
      body.style.paddingTop = `${header.clientHeight}px`;
    } else {
      header.classList.remove("header-sticky");
      body.style.paddingTop = "0px";
    }

    if (window.pageYOffset >= 400) {
      header.classList.add("off-disturb");
    } else {
      header.classList.remove("off-disturb");
    }
  });

  // Toggle Nav
  togglerNav.addEventListener("click", () => {
    if (navFlag == false) {
      headerNav.classList.add("header-nav-active");
      togglerNav.classList.add("toggler-nav-active");
      header.classList.add("header-active");
      navFlag = true;
    } else {
      headerNav.classList.remove("header-nav-active");
      togglerNav.classList.remove("toggler-nav-active");
      header.classList.remove("header-active");
      navFlag = false;
    }
  });
})();
