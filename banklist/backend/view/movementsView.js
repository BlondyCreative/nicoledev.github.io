export const formatMovementDate = function (dateStr) {
  const date = new Date(dateStr);
  const day = String(date.getDate()).padStart(2, "0");
  const month = String(date.getMonth() + 1).padStart(2, "0");
  const year = String(date.getFullYear()).slice(-2);

  return `${day}/${month}/${year}`; 
};

export const renderMovements = function (movements, container, acc) {
  container.innerHTML = "";

  movements.forEach((mov, i) => {
    const formattedDate = formatMovementDate(mov.date);
const formattedAmount = `${mov.amount}€`;

    const html = `
      <div class="movements__row">
        <div class="movements__type movements__type--${mov.type}">${i + 1} ${mov.type}</div>
        <div class="movements__date">${formattedDate}</div>
        <div class="movements__value">${mov.amount > 0 ? formattedAmount : "-" + formattedAmount}</div>
      </div>
    `;
    container.insertAdjacentHTML("afterbegin", html);
  });
};

export const renderBalance = function (balance) {
const container = document.querySelector('.balance__value')
  container.textContent = `${balance}€`;
};
