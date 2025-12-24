class viewPage {
  addHandlerAddBookmark(handler) {
    const gallery = document.querySelector(".mri-gallery");

    if (!gallery) return;

    gallery.addEventListener("click", function (e) {
      const btn = e.target.closest(".btn--bookmark");
      if (!btn) return;

      const resultEL = btn.closest(".mri_each");
      if (!resultEL) return;

      const id = resultEL.dataset.id;
      const titleEL = resultEL.querySelector(".column__title");
      const dayEL = resultEL.querySelector(".column__day");
      const imgEL = resultEL.querySelector(".mri-results");

      const list = {
        id: String(resultEL.dataset.id),
        title: titleEL?.textContent?.trim(),
        day: dayEL?.textContent?.trim(),
        image: imgEL?.getAttribute("src"),
      };

      if (!list.id || !list.title || !list.day || !list.image) {
        console.warn("Datos incompletos en list:", list);
        return;
      }

      handler(list, btn);
    });
  }
}

export const toggleBookmarkIcon = function (button, action) {
  const icon = button.querySelector("#bookmarkIcon");
  if (!icon) return;

  const srcAdded = "../../public/assets/icons/save-instagram (3).png";

  const srcRemoved = "../../public/assets/icons/save-instagram (4).png";

  icon.setAttribute("src", action === "added" ? srcAdded : srcRemoved);
};

export const syncBookmarkIcons = function (bookmarks) {
  document.querySelectorAll(".mri_each").forEach((card) => {
    const btn = card.querySelector(".btn--bookmark");
    const id = card.dataset.id;
    const saved = bookmarks.some((b) => String(b.id) === String(id));
    if (btn) toggleBookmarkIcon(btn, saved ? "added" : "removed");
  });
};

export default new viewPage();
