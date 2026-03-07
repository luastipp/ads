<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="dash.css">
</head>
<body>
    <div class="dashboard-container">
        <nav>
            <ul>
                <li><a href="#">Início</a></li>
                <li><a href="#">Projetos</a></li>
                <li><a href="#">Relatórios</a></li>
                <li><a href="#">Configurações</a></li>
            </ul>
            <div class="perfil-usuario">
                <img src="https://ui-avatars.com/api/?name=Luan+Stipp&background-008080&color=fff" alt="Avatar">
                <span>Luan Stipp</span>
            </div>
        </nav>
        <main>
            <section class="container-card">
            
                <article>
                    <h2>Painel de Usuários</h2>
                    <p>Gerencie os acessos e permissões do sistema nessa área.</p>
                    <a href="#" class="btn">Acessar</a>
                </article>
                <article>
                    <h2>Gerenciar senha de Usuarios</h2>
                    <p>Gerencie e troque a senha do usuário</p>
                    <a href="#" class="btn">Acessar</a>
                </article>
                <article>
                    <h2>Fazer backup do sistema</h2>
                    <p>Gerenciar backup do sistema</p>
                    <a href="#" class="btn">Acessar</a>
                </article>
            </section>
        </main>
    </div>
    <footer>
    <p>&copy; <?php echo date('Y'); ?> - Desenvolvido na aula de Web I</p>
</footer>
</body>
</html>