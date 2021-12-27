
/* Esta função que chama a Modal para visualização da foto*/

function iniciaModal(modalID) {

    var modal = document.getElementById(modalID);
    if (modal) {
        modal.classList.add('mostrar');
        modal.addEventListener('click', (e) => {
            if (e.target.id == modalID || e.target.className == 'fechar') {
                modal.classList.remove('mostrar');
            }
        });
    }
}
var logo = document.querySelector('.parte02');
logo.addEventListener('click', () => iniciaModal('modal-controlador'));

document.addEventListener('scroll', () => {
    if (window.pageYOffset > 2800) {
        iniciaModal('modal-controlador')
    }
})




/* Esta função que chama a Modal Telefone para mudança de Theme */

function iniciaModal2(modalID) {

    var modal = document.getElementById(modalID);
    if (modal) {
        modal.classList.add('mostrar2');
        modal.addEventListener('click', (e) => {
            if (e.target.id == modalID || e.target.className == 'fechar2') {
                modal.classList.remove('mostrar2');
            }
        });
    }
}
var logo = document.querySelector('.ThemeColor');
logo.addEventListener('click', () => iniciaModal2('modal-controlador2'));

document.addEventListener('scroll', () => {
    if (window.pageYOffset > 2800) {
        iniciaModal2('modal-controlador2')
    }
})