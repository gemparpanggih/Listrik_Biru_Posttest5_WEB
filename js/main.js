function result() {
    let darkDiv = document.querySelectorAll('.mode');
    for(let x of darkDiv) {
        x.classList.toggle('dark')
    }
    alert("Mengganti Tema. Klik OK untuk melanjutkan");
}