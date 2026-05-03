function registerEvent(id) {
  fetch("/api/register", {
    method: "POST",
    headers: { "Content-Type": "application/json" },
    body: JSON.stringify({ event_id: id }),
  })
    .then((res) => res.json())
    .then((r) => alert(r.msg));
}
