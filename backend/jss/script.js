import viewPage from "../control/viewPage.js";
import BookmarksView from "../control/bookmarksView.js";
import { toggleBookmarkIcon, syncBookmarkIcons } from "../control/viewPage.js";
import * as controlPage from "../control/controlPage.js";
import * as model from "../model/control.js";



const controlBookmarks = function (list, btn) {
  const action = model.toggleBookmarks(list);
  toggleBookmarkIcon(btn, action);

  if (action === "added") {
    BookmarksView.add(list);
  } else {
    BookmarksView.remove(list.id);
  }

  model.btnPatient();

};

const init = function (bookmark) {
  controlPage.init();

  model.loadBookmarks();
  syncBookmarkIcons(model.state.bookmarks);

  viewPage.addHandlerAddBookmark(controlBookmarks);
  model.state.bookmarks.forEach((bookmark) => {
    BookmarksView.add(bookmark);
  });
  model.btnPatient();
};
init();