class BookPreview {
  generateMarkup(list) {
    return `
   <div class="list" data-id="${list.id}">
      <img src="${list.image}" alt="${list.title}" class="img-result">
      <div class="container">
    <p class="title">${list.title}</p>
    <p class="day">${list.day}</p>
      </div>
   </div>
`;
  }
}

export default new BookPreview();