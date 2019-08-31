# API Funcionários Carriers

Essa API tem como objetivo fazer operações CRUD (create, read, update e delete) de uma base de dados de funcionários.
Além dos **endpoints** de CRUD, existe também um **endpoint** para extrair um relatório de quantidade de funcionários do sexo Masculino, quantidade de funcionários do sexo Feminino, média de idade de funcionários, idade do funcionário mais novo e idade do funcionário mais velho.


# Endpoints
## Relatório
**URL**
`GET`: /api/funcionarios/relatorio
Esse **endpoint** tem como objetivo retornar o relatório de quantidade de funcionários do sexo Masculino, quantidade de funcionários do sexo Feminino, média de idade de funcionários, idade do funcionário mais novo e idade do funcionário mais velho.

**Exemplo:** 

>http://localhost:8000/api/funcionarios/relatorio

* **Retorno**
**Status Code** : `200`
**Body** :
  `{
     "qtdMasc": 3,
     "qtdFem": 2,
     "mediaIdade": "35.0",
     "maximaIdade": "68",
     "minimaIdade": "21"
 }`
 

## Visualizar Todos (Read)
**URL**
`GET`: /api/funcionarios/visualizar
Esse **endpoint** tem como objetivo retornar todos os funcionários cadastrados.

**Exemplo:** 

>http://localhost:8000/api/funcionarios/visualizar

* **Retorno**
**Status Code** : `200`
**Body** :
    ` [
    {
        "id": 1,
        "nome": "Maria",
        "sobrenome": "Josefa",
        "idade": "59",
        "sexo": "Feminino"
    },
    {
        "id": 2,
        "nome": "João",
        "sobrenome": "Silva",
        "idade": "23",
        "sexo": "Masculino"
    }]`


## Visualizar Individual (Read)
**URL**
`GET`:  /api/funcionarios/visualizar/{id}
Esse **endpoint** tem como objetivo retornar um funcionário cadastrado.

**Exemplo:** 

>http://localhost:8000/api/funcionarios/visualizar/1

* **Retorno**
**Status Code** : `200`
**Body** :
    ` {
    "id": 1,
    "nome": "Maria",
    "sobrenome": "Josefa",
    "idade": "59",
    "sexo": "Feminino" }`

## Criar (Create)
**URL**
`POST`: /api/funcionarios/criar
Esse **endpoint** tem como objetivo inserir um funcionário na base de dados.

**Exemplo:** 

>http://localhost:8000/api/funcionarios/criar
* **Parâmetros**
* `nome`: Nome do funcionário (String de no mínimo 1 caractere)
* `sobrenome`: Sobrenome do funcionário (String de no mínimo 1 caractere)
* `idade`: Idade do funcionário (Maior que 0 e menor que 120)
* `sexo`: Sexo do funcionário (Masculino/Feminino)

* **Retorno**
**Status Code** : `200`
**Body** :
    `{
    "nome": "José",
    "sobrenome": "Borges",
    "idade": "35",
    "sexo": "Masculino",
    "id": 3
}`

## Atualizar (Update)
**URL**
`PUT`: /api/funcionarios/atualizar/{id}
Esse **endpoint** tem como objetivo atualizar os dados do funcionário na base de dados.

**Exemplo:** 

>http://localhost:8000/api/funcionarios/atualizar/3
* **Parâmetros**
* `nome`*(opcional)*: Nome do funcionário (String de no mínimo 1 caractere)
* `sobrenome`*(opcional)*: Sobrenome do funcionário (String de no mínimo 1 caractere)
* `idade`*(opcional)*: Idade do funcionário (Maior que 0 e menor que 120)
* `sexo`*(opcional)*: Sexo do funcionário (Masculino/Feminino)

>É requerido ao menos um parâmetro.

* **Retorno**
**Status Code** : `200`
**Body** :
 `1`

## Deletar (Delete)
**URL**
`DELETE`: /api/funcionarios/deletar/{id}
Esse **endpoint** tem como objetivo deletar o funcionário da base de dados.

**Exemplo:** 

>http://localhost:8000/api/funcionarios/deletar/3

* **Retorno**
**Status Code** : `200`
**Body** :
 `1`