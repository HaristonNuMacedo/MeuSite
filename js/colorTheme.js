const colors = document.getElementsByClassName('colors');

let i;
for(i = 0; colors.length; i++) {
    colors[i].addEventListener('click', changecolor)
}

function changecolor() {
    let color = this.getAttribute('data-color');
    let color2 = this.getAttribute('data-color2');
    document.documentElement.style.setProperty('--color', color);
    document.documentElement.style.setProperty('--color2', color2);
}