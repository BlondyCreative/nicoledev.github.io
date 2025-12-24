import * as model from "../model/movs.js";
import * as view from "../view/movementsView.js";

const containerMovements = document.querySelector(".movements");
const balanceEl = document.querySelector(".balance__value");

document.querySelector(".form__btn--loan").addEventListener("click", function (e) {
  e.preventDefault();
  const amount = Number(document.querySelector(".form__input--loan-amount").value);
  const date = new Date().toISOString();

  model.addLoan(amount, date);
  view.renderMovements(model.getAllMov(), containerMovements);
  view.renderBalance(model.getBalance(), balanceEl);
});


document.querySelector(".form__btn--transfer").addEventListener("click", function (e) {
  e.preventDefault();
  const amount = Number(document.querySelector(".form__input--amount").value);
  const date = new Date().toISOString();

  model.addTransfer(amount, date);
  view.renderMovements(model.getAllMov(), containerMovements);
  view.renderBalance(model.getBalance(), balanceEl);
})

