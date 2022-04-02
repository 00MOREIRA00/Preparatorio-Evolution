# Preparatorio-Evolution

<p>Repositória destinado a uma avalição da materia "Frameworks e Desenvolvimento de Aplicações Web" onde os requisitos eram:
  
<ul>
  <li>Haja pelo menos um processamento de dados</li>
  <li>Seja capaz de armazenar os dados inputados</li>
</ul>
</p>


<br>


<h3>Descrição da Situação</h3>
<hr>
<p>
Uma instituição de ensino está ofertando como sempre faz todo ano um provão com o objetivo de dar bolsas de estudo para estudantes de querem fazer um curso preparatório para o Enem. Porem seu método de inscrição anterior funcionava de forma arcaica. 
Anteriormente para realizar a inscrição de pessoas interessadas, ficavam atendentes da instituição na rua, com o objetivo de abordar futuros inscritos, as atendentes deveriam falar sobre a oportunidade de pegar os dados das pessoas para que o setor responsável pela inscrição pudesse entrar em contato e realizar o processo em seu Banco de Dados.
Com o objetivo de automatizar a situação, foi oferecido para a instituição de ensino que fosse criado um formulário de cadastro para que os interessados na prova do bolsão,pudessem preencher esse formulário de modo que os dados fossem enviados direto para o Banco de Dados e as pessoas do setor responsável pela inscrição pudessem entrar em contato. Esse processo também possibilita uma melhor forma de divulgação do evento através de mídias sociais, dessa forma melhorando o alcance de divulgação e cortando o intermediário que seriam pessoas tendo que divulgar e oferecer as ruas.
Resumidamente os interessados em participar da prova irão acessar o site e preencher o formulário, os funcionários do setor responsável através da área restrita poderão acessar a área restrita onde la terão acesso aos formulários enviados e entrar em contato com os futuros candidatos. 
</p>

<ul>
  <li>RQ01- Permitir que os usuários possam preencher suas informações no formulário;</li>
  <li>RQ02 – Conseguir enviar o formulário para o Banco de Dados;</li>
  <li>RQ03 – Fazer com que os dados sejam armazenados no sistema;</li>
  <li>RQ04- Possibilitar que o pessoal do setor responsável possa acessar os dados através da área restrita.</li>
  <li>RQ05 – Possibilitar que o pessoal do setor responsável possa tratar os dados, editando e excluindo se necessário.</li>
</lu>

<br>

<h3>Como Funciona?</h3>
<hr>
<p>Os interessados em fazer o bolsão podem entrar na página da instituição para ver além de ver as novidades, fazerem sua inscrição preenchendo o formulario com as informações basicas, informaçõés que serão salvas em nosso Banco de Dados.
</p>

![Cadastrando](https://user-images.githubusercontent.com/85044936/161387593-160e5999-3800-40fc-a1f0-9ac271ad08ca.gif)

<br>

<p>Os funcionarios responsaveis pelas inscrições tem acesso a Area Restrita pela página da instituição, onde conseguem ver as inscrições e proceder com o tramete de confirmação e de marcar data e horário para a avaliação</p>

![Consulta Cadastro](https://user-images.githubusercontent.com/85044936/161387937-8d193cff-1f5a-4548-b133-69158e96fc0d.gif)

<br>


<p>Ao estarem cadastrados os funcionarios poderão tratar os dados, os editando e excluindo se necessarios.</p>

![Tratando os dados](https://user-images.githubusercontent.com/85044936/161388059-7abdb1e9-3e27-4330-b20a-c4feffdfe416.gif)

<br>

<h3>Sobre o Bnaco de Dados</h3>
<hr>

O Bando de Dados foi feito com em Mysql utilizando MySQL Workbench utulizando o XAMP para dar start no Apache e no proprio Mysql.
<br>

![Banco de Dados](https://user-images.githubusercontent.com/85044936/161393920-0473e6ee-32d8-4a39-83be-ea80f447a67c.gif)

<h5>Usuários salvos da instituição</h5>

![Logins de Funcionarios](https://user-images.githubusercontent.com/85044936/161393766-db8e9003-759c-4c6f-876a-cee0717dbddd.png)

<h5>Fromulario Registrados no banco</h5>

![Formularios Enviados e Salvos](https://user-images.githubusercontent.com/85044936/161393775-1571533e-ca80-450d-a066-67c19e0f2650.png)


<h3>Considerações Finais</h3>
<p>A aplicação foi desenvolcida com Html, Css, PhP e utilizando o Xamp para o Banco de Dados, com a utilização do Apache e Mysql. Ao final dele consegui entregar o que foi solicitado e realizou as atividades pelo qual foi projetado. No desenvolvimento algumas deficuldades apareceram na parte do tratamento das informações, por exemplo a edição e exclusão dos dados de usuários por parte do funcionário da instituição, porem foi tudo resolvido.</p>
