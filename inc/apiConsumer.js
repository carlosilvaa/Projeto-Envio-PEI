async function register(user, password, email) {
    try {
        const response = await fetch('http://localhost:8000/api/usuarios/cadastrar', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                NOME_PROFIS: user,
                SENHA: password,
                EMAIL: email,
                STATUS: 'A'
            })
        });
        const result = await response.json();

        if (!response.ok || result.errors) {
            const errorMessage = result.errors
                ? Object.values(result.errors).flat().join(', ')
                : result.message || 'Erro desconhecido';
            throw new Error(errorMessage);
        }
        return { success: true, message: result.message || 'Usuário cadastrado com sucesso!' };
    } catch (error) {
        console.error('Erro ao registrar o usuário:', error);
        return { success: false, message: error.message || 'Erro desconhecido' };
    }
}
async function login(user, password) {
    try {
        const response = await fetch('http://localhost:8000/api/usuarios/login', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                NOME: user,
                SENHA: password
            })
        });

        const result = await response.json();
        if (!response.ok || result.errors) {
            const errorMessage = result.errors
                ? Object.values(result.errors).flat().join(', ')
                : result.message || 'Credenciais inválidas';
            throw new Error(errorMessage);
        }
        console.log('Usuário logado:', result.user);
        const username = result.user.NOME_PROFIS;
        sessionStorage.setItem("username", username);
        return { success: true, message: result.message || 'Login realizado com sucesso!', user: result.user, status: result.status };
    } catch (error) {
        console.error('Erro ao fazer login:', error);
        return { success: false, message: error.message || 'Erro desconhecido' };
    }
}

