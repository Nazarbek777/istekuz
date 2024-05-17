function languageDisplay(event) {
    let elementsHide = document.querySelectorAll('.uz, .ru, .en');
    let elementsShow = document.querySelectorAll(`.${event}`);
    console.log(elementsShow)

    elementsHide.forEach(element => {
        element.style.display = 'none';
    });

    elementsShow.forEach(element => {
        element.style.display = 'block';
    });

}

languageDisplay('uz')


