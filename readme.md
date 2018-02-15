# UFBA Fácil
 
O UFBA Fácil é um software para facilitar a solução de dependências de disciplinas para alunos da UFBA migrando de outros cursos. Inicialmente, ele está sendo desenvolvido para atender os cursos de Sistemas de Informação e Ciência da Computação.
 
Este software será desenvolvido utilizando tecnologias Web (PHP, HTML, CSS e JavaScript). O nome "UFBA Fácil" é um nome temporário e não corresponde ao projeto final.
 
## Como este repositório está organizado?
 
* Artefatos de documentação encontram-se na pasta `/docs`
* O código-fonte encontra-se na pasta raiz e é composto por todos os arquivos e diretórios, exceto a pasta `/docs`
* Scripts auxiliares estão localizados na pasta `/scripts_auxiliares`
 
## Quem pode editar este repositório?
 
Alunos da disciplina de Linguagens para Aplicações Comerciais do semestre 2017.1.

## Configuração do ambiente (CodeAnywhere)

Abra o editor do CodeAnywhere.
Escolha `File` > `New Connection` > `Container` > `Laravel 5 (Ubuntu 14.04)`.
Esse container já vem com o PHP e o Laravel instalados, no entanto
são versões antigas. Instalaremos versões mais novas. Para isso, abra o Terminal e digite os seguintes comandos:
  
```bash
cd
/bin/bash -c "$(curl -L https://raw.githubusercontent.com/ufbafacil/colegiado/master/scripts/instala-codeanywhere.sh)"
/bin/bash -c "$(curl -L https://raw.githubusercontent.com/ufbafacil/colegiado/master/scripts/instala-projeto.sh)"
```

Atenção: o último comando apaga o diretório `workspace` e substitui pelo conteúdo deste repositório.

## Links auxiliares
 
* [Trello do projeto](https://trello.com/b/ydTDkJfZ/lac-colegiado)
* [Página do Moodle com o plano de desenvolvimento do projeto](https://www.moodle.ufba.br/mod/page/view.php?id=195213)
