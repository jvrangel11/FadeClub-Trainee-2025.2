// 1. Seleciona os elementos pelo ID
const campoSenha = document.getElementById('senha');
const botaoToggle = document.getElementById('toggleSenha');
const icone = botaoToggle.querySelector('i'); // Seleciona o ícone dentro do botão

// 2. Adiciona um "ouvinte de eventos" (event listener) ao botão
botaoToggle.addEventListener('click', function (e) {
    // 3. Verifica o tipo atual do campo: "password" ou "text"
    const type = campoSenha.getAttribute('type') === 'password' ? 'text' : 'password';
    
    // 4. Alterna o atributo 'type' do campo de entrada
    campoSenha.setAttribute('type', type);
    
    // 5. Opcional: Altera o ícone para refletir o novo estado
    if (type === 'text') {
        // Se a senha está visível (type="text"), muda o ícone para olho aberto
        icone.classList.remove('fa-eye-slash');
        icone.classList.add('fa-eye');
    } else {
        // Se a senha está oculta (type="password"), muda o ícone para olho riscado
        icone.classList.remove('fa-eye');
        icone.classList.add('fa-eye-slash');
    }
});