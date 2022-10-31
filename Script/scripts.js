
/* Surlignage des liens de la bonne couleur dans le HEADER */
document.querySelectorAll(".lienHeader").forEach((liens) => {
    liens.addEventListener("mouseover", (e) => {
        e.target.style.borderBottom = "2px solid black";
    });
    liens.addEventListener("mouseout", (e) => {
        e.target.style.borderBottom = "hidden";
    });
});

/* Surlignage des liens de la bonne couleur dans le FOOTER */
document.querySelectorAll(".lienFooter").forEach((liens) => {
    liens.addEventListener("mouseover", (e) => {
        e.target.style.borderBottom = "2px solid white";
    });
    liens.addEventListener("mouseout", (e) => {
        e.target.style.borderBottom = "hidden";
    });
});