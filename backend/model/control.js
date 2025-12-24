export const state = {
  bookmarks: [],
  list: [],
};

export const loadBookmarks = function () {
  try {
    const data = JSON.parse(localStorage.getItem("bookmarks"));
    const dataList = JSON.parse(localStorage.getItem("list"));
    state.bookmarks = Array.isArray(data) ? data : [];
    state.list = Array.isArray(dataList) ? dataList : [];
  } catch (err) {
    console.warn("Error al parsear bookmarks:", err);
    state.bookmarks = [];
    state.list = [];
  }
};

export const addBookmark = function (list) {
  if (!list || !list.id || !list.title || !list.day || !list.image) {
    console.warn("Bookmark inválido:", list);
    return;
  }

  try {
    const exists = state.bookmarks.some((b) => b.id === list.id);
    if (!exists) return;

    state.bookmarks.push(list);
    localStorage.setItem("bookmarks", JSON.stringify(state.bookmarks));
    localStorage.setItem("list", JSON.stringify(state.list));
  } catch (err) {
    console.warn("Error al agregar bookmark:", err);
  }
};

export const toggleBookmarks = function (list) {
  const id = String(list.id);
  const index = state.bookmarks.findIndex((b) => b.id === list.id);

  if (index === -1) {
    state.bookmarks.push(list);
    localStorage.setItem("bookmarks", JSON.stringify(state.bookmarks));
    localStorage.setItem("list", JSON.stringify(state.list));
    return "added";
  } else {
    state.bookmarks.splice(index, 1);
    localStorage.setItem("bookmarks", JSON.stringify(state.bookmarks));
    localStorage.setItem("list", JSON.stringify(state.list));
    return "removed";
  }
};

export const btnPatient = function (list) {
  const buttons = document.querySelectorAll(".btn--patient");

  buttons.forEach((btn) => {
    btn.addEventListener("click", () => {
      // Delete the class 'active' from all
      if (btn.classList.contains("active")) {
        buttons.forEach((b) => b.classList.remove("active"));
      } else {
        buttons.forEach((b) => b.classList.add("active"));
      }

      // Add class 'active' only to clicked!
      btn.classList.add("active");
    });
  });
};
