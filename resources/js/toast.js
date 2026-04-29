document.addEventListener('DOMContentLoaded', () => {

    const form = document.getElementById('form-contato');
    const btnEnviar = form.querySelector('button');
    const toastContainer = document.getElementById('toast-container');

    form.addEventListener('submit', async function (e) {
        e.preventDefault(); // 🔥 impede redirecionamento

        btnEnviar.disabled = true;
        btnEnviar.innerHTML = `
            <svg class="animate-spin h-5 w-5 text-white" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8z"></path>
            </svg>
            Enviando...
        `;

        const formData = new FormData(form);

        try {
            const response = await fetch(form.action, {
                method: 'POST',
                headers: {
                    'Accept': 'application/json'
                },
                body: formData
            });

            const data = await response.json();

            if (response.ok) {
                showToast(data.message || 'Mensagem enviada!', 'success');
                form.reset();
            } else if (response.status === 422) {
                Object.values(data.errors).flat().forEach(msg => showToast(msg, 'error'));
            } else {
                showToast(data.message || 'Erro ao enviar.', 'error');
            }

        } catch (err) {
            showToast('Erro de conexão.', 'error');
        } finally {
            btnEnviar.disabled = false;
            btnEnviar.innerHTML = `
                Enviar mensagem
                <i class="fa-solid fa-envelope"></i>
            `;
        }
    });

    function showToast(message, type = 'success') {
        const icons = { success: '✓', error: '✕' };
        const colors = {
            success: 'bg-green-600',
            error: 'bg-red-600'
        };

        if (toastContainer.children.length >= 4) {
            toastContainer.firstChild.remove();
        }

        const toast = document.createElement('div');
        toast.className = `
            flex items-center gap-3 px-5 py-3 rounded-lg text-white text-sm shadow-lg
            transform translate-y-4 opacity-0 transition-all duration-300
            ${colors[type]}
        `;

        toast.innerHTML = `
            <span class="font-bold">${icons[type]}</span>
            <span>${message}</span>
        `;

        toastContainer.appendChild(toast);

        requestAnimationFrame(() => {
            toast.classList.remove('translate-y-4', 'opacity-0');
        });

        setTimeout(() => {
            toast.classList.add('opacity-0', 'translate-y-4');
            setTimeout(() => toast.remove(), 300);
        }, 3500);
    }

});