import BookPreview from "./bookPreview.js";

class BookmarksView {
  _parentElement = document.querySelector(".mri-panel");

  add(list) {
    if (!this._parentElement || !list || !list.id) return;

    const exists = this._parentElement.querySelector(
      `.list[data-id="${String(list.id)}"]`
    );
    if (exists) return;


     const markup = BookPreview.generateMarkup(list)
    this._parentElement.insertAdjacentHTML("beforeend", markup);
  }

  remove(id) {
    const item = this._parentElement.querySelector(`[data-id="${id}"]`);
    if (item) item.remove();
  }
}

export default new BookmarksView();