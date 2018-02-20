function submit_contenu() {
    document.forms['formModif'].editor.value = document.getElementById('snow-container').getElementsByClassName('ql-editor')[0].innerHTML;
    return true;
}