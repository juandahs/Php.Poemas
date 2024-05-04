const poemaTitle = document.getElementById('poemaTitulo');
const poemaAutor = document.getElementById('poemaAutor');
const poemaCuerpo = document.getElementById('poemaCuerpo');

document.querySelectorAll('[data-bs-toggle="modal"]').forEach((button) => {
    button.addEventListener('click', (e) => {
        const poema = e.target.dataset.bsPoema.split('*');
        poemaTitle.textContent = poema[0];
        poemaAutor.textContent = poema[1];
        poemaCuerpo.textContent = poema[2];
        });
});