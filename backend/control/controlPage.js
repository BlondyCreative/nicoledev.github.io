const mriResults = [
  {
    id: "1",
    image: "../../public/assets/brain1.png",
    title: "Atrophy Mild ",
    day: "2025-11-27",
  },
  {
    id: "2",
    image: "../../public/assets/brain2.png",
    title: "Within Anomaly",
    day: "2025-11-27",
  },
  {
    id: "3",
    image: "../../public/assets/brain3.png",
    title: "Temporal Inflammation",
    day: "2025-11-29",
  },
  {
    id: "4",
    image: "../../public/assets/brain1.png",
    title: "Within Anomaly ",
    day: "2025-11-29",
  },
  {
    id: "5",
    image: "../../public/assets/brain2.png",
    title: "Atrophy ",
    day: "2025-12-02",
  },
  {
    id: "6",
    image: "../../public/assets/brain3.png",
    title: "Normal",
    day: "2025-12-02",
  },
];

export const init = function () {
  const leftContainer = document.querySelector(".column-left");
  const rightContainer = document.querySelector(".column-right");

  if (!leftContainer || !rightContainer) return;

  const uniqueResults = [];
  const seenTitles = new Set();

  mriResults.forEach((result) => {
    if (!seenTitles.has(result.title)) {
      seenTitles.add(result.title);
      uniqueResults.push(result);
    }
  });

  const leftColumn = uniqueResults.slice(0, 3);
  const rightColumn = uniqueResults.slice(3, 6);

  [leftColumn, rightColumn].forEach((group, index) => {
    const target = index === 0 ? leftContainer : rightContainer;

    group.forEach((result) => {
      const markup = `

                        <div class="mri_each" data-id="${result.id}">
                        <img src="${result.image}" alt="MRI 1" class="mri-results">
                          <div class="container2">
                           <div class="column">
     <p class="column__title"> ${result.title}</p>
     <p class="column__day"> ${result.day}</p>
 </div>
     <button class="btn--round btn--bookmark">
   <img src="../../public/assets/icons/save-instagram (4).png" alt="Bookmark icon" id="bookmarkIcon">
 </button>
  </div>

  </div>
  `;
      target.insertAdjacentHTML("beforeend", markup);
    });
  });
};
