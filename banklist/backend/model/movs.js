export const state = {
  Amount: [],
  Transfer: [],
Deposit: [],
Withdraw: []
};



export const addLoan = function (amount, date) {
  if (!amount || amount <= 0) return; state.Deposit.push({ amount, date }); 
  state.Amount.push(amount)
};

  export const addTransfer = function (amount, date) {
    if (!amount || amount <= 0)
      return; state.Withdraw.push({ amount: amount, date });
    state.Amount.push(-amount);
  };

export const getBalance = function () {
  return state.Amount.reduce((sum, mov) => sum + mov, 0);
};


export const getAllMov = function () {
  return [
...state.Deposit.map(mov =>({ ...mov, type: 'deposit' })),
...state.Withdraw.map(mov =>({...mov, type: 'withdrawal' }))
  ]
};



