const form = document.getElementById('form-contato');
const btnEnviar = form.querySelector('button');
const toastContainer = document.getElementById('toast-container');

btnEnviar.addEventListener('click', async function () {

    // Estado de carregamento
    btnEnviar.disabled = true;
    btnEnviar.innerHTML = `
        <svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8z"></path>
        </svg>
        Enviando...
    `;

    const formData = new FormData();
    formData.append('nome', form.querySelector('[name="nome"]').value);
    formData.append('email', form.querySelector('[name="email"]').value);
    formData.append('assunto', form.querySelector('[name="assunto"]').value);
    formData.append('mensagem', form.querySelector('[name="mensagem"]').value);
    formData.append('_token', document.querySelector('meta[name="csrf-token"]').content);

   try {
    const url = document.getElementById('form-contato').dataset.action;
    const response = await fetch(url, {
        method: 'POST',
        headers: { 'Accept': 'application/json' },
        body: formData
    });

        const data = await response.json();

        if (response.ok) {
            showToast(data.message, 'success');
            form.querySelectorAll('input, textarea').forEach(el => el.value = '');
        } else if (response.status === 422) {
            Object.values(data.errors).flat().forEach(erro => showToast(erro, 'error'));
        } else {
            showToast(data.message ?? 'Erro ao enviar. Tente novamente.', 'error');
        }

    } catch (err) {
        showToast('Erro de conexão. Tente novamente.', 'error');
    } finally {
        btnEnviar.disabled = false;
        btnEnviar.innerHTML = `
            Enviar mensagem
            <i class="fa-solid fa-envelope relative top-0.5"></i>
        `;
    }
});

function showToast(message, type) {
    const icons = { success: '✓', error: '✕' };
    const colors = { success: 'bg-green-600', error: 'bg-red-600' };

    const toast = document.createElement('div');
    toast.className = `flex items-center gap-3 px-5 py-3 rounded-lg text-white font-opensans text-sm shadow-lg
        transform translate-y-2 opacity-0 transition-all duration-300 ${colors[type]}`;

    toast.innerHTML = `
        <span class="font-bold text-base">${icons[type]}</span>
        <span>${message}</span>
    `;

    toastContainer.appendChild(toast);

    requestAnimationFrame(() => {
        toast.classList.remove('translate-y-2', 'opacity-0');
    });

    setTimeout(() => {
        toast.classList.add('translate-y-2', 'opacity-0');
        setTimeout(() => toast.remove(), 300);
    }, 4000);
}