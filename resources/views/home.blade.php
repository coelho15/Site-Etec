@extends('layout')

@section('content')

<h3>Quem somos?</h3>

<div class="row">
    <div class="col">
        <div class="card">
            <p>
                A Etec Zona Leste é uma instituição de ensino técnico reconhecida pela qualidade na formação de seus alunos. 
                Localizada na região leste da cidade de São Paulo, oferece cursos voltados ao desenvolvimento profissional 
                e preparação para o mercado de trabalho.
            </p>

            <p>
                A escola busca constantemente inovar seus métodos de ensino, proporcionando uma aprendizagem prática e dinâmica. 
                Os estudantes têm acesso a projetos, atividades extracurriculares e oportunidades que contribuem para o 
                crescimento pessoal e acadêmico.
            </p>
        </div>

        
    </div>

    <div class="col">
        <div class="card">
            <img src="{{ asset('img/etec.jpg') }}" class="img-box">
            <p>
                Endereço: Av. Águia de Haia, 2633 <br>
                Cidade Antônio Estêvão de Carvalho,<br>
                São Paulo - SP, 03694-000 <br><br>

                Telefone: (11) 2045-4000<br>
                Horário de funcionamento: 09:00 às 21:00
            </p>
        </div>
    </div>
</div>

<!-- DIFERENCIAIS -->

<h3>Diferenciais</h3>

<div class="row">
    <div class="col">
        <div class="card">
            <h4>Ensino de Qualidade</h4>
            <p>Oferecemos uma formação completa, com conteúdos atualizados e foco no aprendizado real do aluno.</p>
        </div>
    </div>

    <div class="col">
        <div class="card">
            <h4>Professores Capacitados</h4>
            <p>Contamos com profissionais experientes e preparados para orientar cada estudante em sua jornada.</p>
        </div>
    </div>

    <div class="col">
        <div class="card">
            <h4>Preparação para o Mercado</h4>
            <p>Desenvolvemos habilidades práticas e técnicas para facilitar sua entrada no mercado de trabalho.</p>
        </div>
    </div>
</div>
<!-- NÚMEROS -->

<h3>Nossos números</h3>

<div class="row">
    <div class="col">
        <div class="card">
            <h2>+10.000</h2>
            <p>Alunos formados</p>
        </div>
    </div>

    <div class="col">
    <div class="card">
        <h2>Diversas opções de cursos</h2>
        <p>
            Oferecemos cursos técnicos, técnicos integrados ao ensino médio 
            e também opções integradas ao ensino superior.
        </p>
    </div>
</div>

    <div class="col">
        <div class="card">
            <h2>15+</h2>
            <p>Anos de ensino</p>
        </div>
    </div>
</div>

<!-- CHAMADA FINAL -->

<div class="card">
    <h3>Quer fazer parte?</h3>
    <h4>
        A Etec Zona Leste prepara seus alunos para o mercado de trabalho com uma formação prática 
        e atualizada. Os estudantes desenvolvem habilidades técnicas e comportamentais que são 
        valorizadas pelas empresas.
    </h4>

    <p>
        Venha estudar na Etec Zona Leste e construa seu futuro profissional com qualidade e dedicação.
    </p>
    <a href="/cursos"><button>Começar agora</button></a>
</div>

@endsection