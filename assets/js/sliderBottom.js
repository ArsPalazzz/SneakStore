const carousel2 = document.querySelector(".carouselItemsDeal"),
firstImg2 = carousel2.querySelectorAll(".sneaker")[0],
arrowIcons2 = document.querySelectorAll(".dealOfTheDayBlock .wrapper i");

console.log(firstImg2)

let isDragStart2 = false, isDragging2 = false, prevPageX2, prevScrollLeft2, positionDiff2;

const showHideIcons2 = () => {
    // showing and hiding prev/next icon according to carousel scroll left value
    let scrollWidth2 = carousel2.scrollWidth - carousel2.clientWidth; // getting max scrollable width
    arrowIcons2[0].style.display = carousel2.scrollLeft == 0 ? "none" : "block";
    arrowIcons2[1].style.display = carousel2.scrollLeft == scrollWidth2 ? "none" : "block";
}

arrowIcons2.forEach(icon => {
    icon.addEventListener("click", () => {
        let firstImgWidth2 = firstImg2.clientWidth + 14; // getting first img width & adding 14 margin value
        // if clicked icon is left, reduce width value from the carousel scroll left else add to it
        carousel2.scrollLeft += icon.id == "leftBottom" ? -firstImgWidth2 : firstImgWidth2;
        setTimeout(() => showHideIcons2(), 60); // calling showHideIcons after 60ms
    });
});

const autoSlide2 = () => {
    // if there is no image left to scroll then return from here
    if(carousel2.scrollLeft - (carousel2.scrollWidth - carousel2.clientWidth) > -1 || carousel2.scrollLeft <= 0) return;

    positionDiff2 = Math.abs(positionDiff2); // making positionDiff value to positive
    let firstImgWidth2 = firstImg2.clientWidth + 14;
    // getting difference value that needs to add or reduce from carousel left to take middle img center
    let valDifference2 = firstImgWidth2 - positionDiff2;

    if(carousel2.scrollLeft > prevScrollLeft2) { // if user is scrolling to the right
        return carousel2.scrollLeft += positionDiff2 > firstImgWidth2 / 3 ? valDifference2 : -positionDiff2;
    }
    // if user is scrolling to the left
    carousel2.scrollLeft -= positionDiff2 > firstImgWidth2 / 3 ? valDifference2 : -positionDiff2;
}

const dragStart2 = (e) => {
    // updatating global variables value on mouse down event
    isDragStart2 = true;
    prevPageX2 = e.pageX || e.touches[0].pageX;
    prevScrollLeft2 = carousel2.scrollLeft;
}

const dragging2 = (e) => {
    // scrolling images/carousel to left according to mouse pointer
    if(!isDragStart2) return;
    e.preventDefault();
    isDragging2 = true;
    carousel2.classList.add("dragging");
    positionDiff2 = (e.pageX || e.touches[0].pageX) - prevPageX2;
    carousel2.scrollLeft = prevScrollLeft2 - positionDiff2;
    showHideIcons2();
}

const dragStop2 = () => {
    isDragStart2 = false;
    carousel2.classList.remove("dragging");

    if(!isDragging2) return;
    isDragging2 = false;
    autoSlide2();
}

carousel2.addEventListener("mousedown", dragStart2);
carousel2.addEventListener("touchstart", dragStart2);

document.addEventListener("mousemove", dragging2);
carousel2.addEventListener("touchmove", dragging2);

document.addEventListener("mouseup", dragStop2);
carousel2.addEventListener("touchend", dragStop2);