function closeHandler(){
    location.href = 'task';
}
function stopClosing(ev){
    ev.stopPropagation();
}
const modal = document.querySelector('.modal__contentBox');
modal.addEventListener('mousedown', stopClosing);
const backModal = document.querySelector('.modal__back', closeHandler);
backModal.addEventListener('mousedown', closeHandler);
const closingButton = document.querySelector('.modal__closingButton');
closingButton.addEventListener('mousedown', closeHandler);
