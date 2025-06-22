document.addEventListener("DOMContentLoaded", function () {
  fetch("https://fakerapi.it/api/v2/images?_quantity=10")
    .then(res => res.json())
    .then(data => {
      const slider = document.getElementById("banner-slider");
      slider.innerHTML = ''; // limpiar por si acaso

      // Usamos las primeras 3 imágenes, pero forzamos que tengan URLs únicas con ?rand=
      const uniqueImages = data.data.slice(0, 3);

      uniqueImages.forEach((image, index) => {
        const slide = document.createElement("div");
        slide.className = "swiper-slide";

        // Forzamos imagen diferente agregando un número aleatorio como query string
        const imgSrc = image.url + `?rand=${Date.now()}${index}`;

        slide.innerHTML = `<img src="${imgSrc}" alt="${image.title}" style="width: 100%; height: auto;" />`;
        slider.appendChild(slide);
      });

      // Inicializar Swiper
      new Swiper(".mySwiper", {
        loop: true,
        effect: "fade",
        autoplay: {
          delay: 3000,
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        }
      });
    })
    .catch(error => {
      console.error("Error al cargar imágenes del banner:", error);
    });
});

