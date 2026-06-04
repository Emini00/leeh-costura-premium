# STATUS PROJETO — Leeh Costura Premium

Última atualização:
03/06/2026


---

## Branch atual

feature/servicos-calculo-producao


---

## Concluído

### Funcionários

✔ CRUD

✔ Login


---

### Fábricas

✔ Cadastro

✔ Telefone

✔ Cidade


---

### Cargas

✔ Número da carga

✔ Relacionamento com fábrica

✔ Labels


Regras:

- carga pode repetir entre fábricas
- carga não define modelo


---

### Serviços

Status:

EM DESENVOLVIMENTO


Concluído:

✔ create

✔ edit

✔ labels

✔ cálculo automático

✔ valor unitário

✔ valor total

✔ desconto

✔ acréscimo

✔ motivo desconto

✔ motivo acréscimo


Regra:

valor_total =
quantidade × valor_unitario

valor_final =
valor_total
− desconto
+ acrescimo


Observações:

removido:
nome_sofa

modelo =
nome do sofá


---

### Fechamento

INICIADO

✔ model

✔ migration

✔ controller


Objetivo:

quantidade

valor bruto

desconto

acréscimo

valor final

status pagamento


---

## Regras do negócio

Cada funcionário normalmente produz:

1 sofá completo
Exceções:
produção emergencial
→ usar acréscimo

Pagamento:
valor por sofá
não usar:
valor por peça

Identificação do sofá:
✔ modelo identifica o sofá
✘ não existe mais campo nome_sofa

---

## Melhorias de UX

✔ labels no create
✔ labels no edit
✔ Botão de navegação por seta nas telas internas
✔ Padronização dos textos de cadastro
(Cadastrar Funcionário, Cliente, Fábrica e Carga)
✔ Correção dos submenus no desktop
✔ Seleção de fábrica por nome no cadastro de cargas
Motivo:
placeholder desaparecia ao apagar
✔ Exibição de serviços em cards responsivos
✔ Exibição do funcionário na listagem de serviços
✔ Formatação de moeda brasileira
✔ Formatação de data brasileira
✔ Área de detalhes recolhível nos serviços
✔ Indicador visual de progresso por status
✔ Seleção de fábrica por nome nas telas de cargas
✔ Seleção de fábrica por nome nas telas de cadastro e edição de cargas
✔ Identificação personalizada de cargas
(aceita números, letras e combinações alfanuméricas)
---
### Decisão de negócio

O módulo Clientes foi reaproveitado para Alunos.
Motivo:
As fábricas representam os clientes do negócio.
O módulo será utilizado para cadastro dos alunos de costura.


## Próximos passos

Finalizar serviços

Criar fechamento

Criar área funcionário

Criar pagamentos

Criar dashboard


---

## Backlog de melhorias

### Serviços

✔ Confirmar salvamento de desconto

✔ Confirmar salvamento de acréscimo

✔ Confirmar salvamento de valor final

✔ Remover definitivamente nome_sofa

✔ Utilizar modelo como identificador do sofá

✔ Melhorar exibição da listagem

✔ Adicionar área de detalhes recolhível

### Cargas

✔ Criar campo de identificação da carga

A identificação deve aceitar:
- números
- letras
- combinações alfanuméricas
Exemplos:
01
Carga A
Ferrari
Urgente


### Usabilidade

✔ Adicionar botão voltar em todos os edit e create


### Fechamento

[ ] Finalizar estrutura da tabela fechamentos

[ ] Criar cálculo automático do fechamento

[ ] Relacionar fechamento com serviços


### Funcionários

[ ] Criar área do funcionário

[ ] Mostrar produção individual

[ ] Mostrar valor acumulado

[ ] Mostrar descontos e acréscimos


### Administração

[ ] Criar dashboard principal

[ ] Criar indicadores de produção

## Em Desenvolvimento

⚙ Serviços

⚙ Fechamentos

⚙ Área do Funcionário

⚙ Pagamentos

⚙ Dashboard

---

## Pendências

### Mobile

[ ] Corrigir submenu Serviços no menu mobile

### Cargas

[ ] Criar campo de identificação da carga

A identificação deve aceitar:

* números
* letras
* combinações alfanuméricas

Exemplos:

01

Carga A

Ferrari

Urgente

### Modelos

[ ] Criar cadastro de modelos de sofá

Objetivo:

* evitar digitação livre
* padronizar nomes
* permitir seleção por lista

### Usabilidade

[ ] Adicionar botão voltar em todos os create

[ ] Adicionar botão voltar em todos os edit

### Fechamento

[ ] Finalizar estrutura da tabela fechamentos

[ ] Criar cálculo automático do fechamento

[ ] Relacionar fechamento com serviços

### Funcionários

[ ] Criar área do funcionário

[ ] Mostrar produção individual

[ ] Mostrar valor acumulado

[ ] Mostrar descontos e acréscimos

### Administração

[ ] Criar dashboard principal

[ ] Criar indicadores de produção
