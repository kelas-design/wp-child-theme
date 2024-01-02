const submitButton = document.getElementById("btn-submit");

submitButton.addEventListener("click", (event) => {
  event.preventDefault();
  const form = submitButton.closest("form");

  if (form) {
    form.submit();
    submitButton.disabled = true;
  }
});
