const inputDate = document.getElementById("date");

inputDate.addEventListener("click",function (evt) {
  if (this.getAttribute("type")==="date") {
    this.showPicker();
  }
});

inputDate.addEventListener("focus",function (evt) {
    if (this.getAttribute("type")==="date") {
      this.showPicker();
    }
  });