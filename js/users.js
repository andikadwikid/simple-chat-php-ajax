const searchBar = document.querySelector(".users .search input");
const searchBtn = document.querySelector(".users .search button");
const span = document.querySelector(".users .search span");

span.onclick = () => {
  searchBar.classList.add("active");
  searchBar.focus();
  searchBtn.classList.add("active");
};

searchBtn.onclick = () => {
  searchBar.classList.toggle("active");
  //   searchBar.focus();
  searchBtn.classList.toggle("active");
};

searchBar.onblur = () => {
  searchBar.classList.remove("active");
  searchBtn.classList.remove("active");
};
