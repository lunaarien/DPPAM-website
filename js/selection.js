document.addEventListener("DOMContentLoaded", function () {
    const coordinators = [
        { name: "Juan Dela Cruz", position: "Coordinator", since: "2020", city: "Malabon", church: "St. Peter Parish", bio: "Committed to transparent elections.", img: "img/juan.jpg" },
        { name: "Maria Santos", position: "Assistant", since: "2019", city: "Navotas", church: "Sacred Heart Church", bio: "Passionate about voter education.", img: "img/maria.jpg" }
    ];

    const cityFilter = document.getElementById("cityFilter");
    const churchFilter = document.getElementById("churchFilter");
    const searchBar = document.getElementById("searchBar");
    const grid = document.getElementById("coordinatorsGrid");
    const modal = document.getElementById("modal");
    const closeModal = document.querySelector(".close-btn");

    function displayCoordinators() {
        grid.innerHTML = "";
        coordinators.forEach(coordinator => {
            let card = document.createElement("div");
            card.classList.add("coordinator-card");
            card.innerHTML = `
                <img src="${coordinator.img}" alt="${coordinator.name}">
                <h4>${coordinator.name}</h4>
                <p>${coordinator.position} at ${coordinator.church}</p>
            `;
            card.addEventListener("click", function () {
                document.getElementById("modalImg").src = coordinator.img;
                document.getElementById("modalName").textContent = coordinator.name;
                document.getElementById("modalPosition").textContent = coordinator.position;
                document.getElementById("modalChurch").textContent = "Church: " + coordinator.church;
                document.getElementById("modalCity").textContent = "City: " + coordinator.city;
                document.getElementById("modalSince").textContent = "Member Since: " + coordinator.since;
                document.getElementById("modalBio").textContent = coordinator.bio;
                modal.style.display = "block";
            });
            grid.appendChild(card);
        });
    }

    closeModal.addEventListener("click", () => modal.style.display = "none");
    displayCoordinators();
});