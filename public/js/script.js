// Pagination

const pageNum = document.querySelectorAll('.page');
const before =  document.querySelector('.arrow-left');
const after =  document.querySelector('.arrow-right');

let currentValue = 1;

pageNum.forEach((number, numIndex) =>{
  number.addEventListener('click', () =>{
    currentValue = numIndex;

    document.querySelector('.active').classList.remove('active');

    number.classList.add('active');
  });
});

before.addEventListener('click', () =>{
  currentValue -= 1;

  pageNum.forEach((number, numIndex) => {
    number.classList.toggle('active', numIndex === currentValue);
  });
})

after.addEventListener('click', () =>{
  currentValue += 1;

  pageNum.forEach((number, numIndex) => {
    number.classList.toggle('active', numIndex === currentValue);
  });
})

// Dropdown Effect
const drop = document.querySelector('#dropdown');
const lists = document.querySelector('#lists');
const category = document.querySelector('#menu-category');

drop.addEventListener('mouseover', ()=>{
  lists.classList.add('over');
  category.classList.add('change-color');
});

drop.addEventListener('mouseout', ()=>{
  lists.classList.remove('over', 'change-color');
  category.classList.remove('change-color');
});

// Account Click
const boxAcc = document.querySelector('#box-acc');
const acc = document.querySelector('#acc');

boxAcc.addEventListener('click', ()=>{
  acc.classList.toggle('raise');
});

document.addEventListener('click', function(e){
  if (!boxAcc.contains(e.target) && !acc.contains(e.target)){
    acc.classList.remove('raise');
  }
})