
function appendHistory() {
  var newUrl;
  var url = window.location.href,
    separator = (url.indexOf("?") === -1) ? "?" : "&",
    newParam = separator + "appendHistory";
  newUrl = url.replace(newParam, "");
  newUrl += newParam;
  window.location.href = newUrl;
}