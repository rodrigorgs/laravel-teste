# Descritivo da página "Cadastrar Reunião de Colegiado"

Esta página poderá ser acessada através do menu lateral, clicando em *"Cadastrar Reunião de Colegiado"*. Até o o dia 01/02/2018, este era o nome que linkava à esta página.

## Entrada do usuário

O usuário entrará com uma data e poderá escolher entre 4 opções:
* "Consultar"
* "Novo"
* "Limpar"*
* "Excluir"

\* *A opção de "limpar" é apenas para debug e não estará visível em versões de produção* 

### Consultar

Esta opção mostrará os processos para a data escolhida pelo usuário. Ao lado de cada processo, haverá o ícone de uma lixeira que, ao ser clicado, excluirá o processo daquela data.

É importante notar que os processos continuam no sistema após serem 'excluídos' por este botão. Eles apenas deixam de ser alocados para a data entrada pelo usuário (podendo ser realocados).

### Novo

Este botão move o usuário para uma nova página onde ele poderá criar uma nova reunião na data escolhida.

### Limpar (debug)
Este botão temporário, ao ser clicado, simplesmente limpa a tela após uma consulta que retornou resultados. Sua funcionalidade será incorporada nas outras funções (por exemplo, a tela será limpa quando o usuário consultar uma nova data).

### Excluir
Este botão serve para excluir **todos** os processos de uma determinada data.

É importante notar que os processos continuam no sistema após serem 'excluídos' por este botão. Eles apenas deixam de ser alocados para a data entrada pelo usuário (podendo ser realocados).