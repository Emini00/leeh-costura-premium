# STATUS PROJETO — Leeh Costura Premium
## Versão Atual

🏆 Versão atual: v1.0.0

Data da versão:
05/06/2026

Primeira versão estável do Leeh Costura Premium.

---

## Branch atual

feature/servicos-calculo-producao


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
✔ Adicionar botão voltar em todos os edit e create
---
### Decisão de negócio

O módulo Clientes foi reaproveitado para Alunos.
Motivo:
As fábricas representam os clientes do negócio.
O módulo será utilizado para cadastro dos alunos de costura.

## Backlog de melhorias

### Serviços

✔ Confirmar salvamento de desconto

✔ Confirmar salvamento de acréscimo

✔ Confirmar salvamento de valor final

✔ Remover definitivamente nome_sofa

✔ Utilizar modelo como identificador do sofá

✔ Melhorar exibição da listagem

✔ Adicionar área de detalhes recolhível

✔ Corrigir submenu Serviços no menu mobile

✔ Corrigir exibição dos links do submenu

✔ Corrigir abertura do menu sanduíche

✔ Adicionar coluna módulo em serviços

✔ Mostrar select no Create e Edit

✔ Salvar módulo

✔ Atualizar módulo

✔ Exibir módulo na listagem de serviços

✔ Exibir módulo nos detalhes visíveis



### Cargas

✔ Criar campo de identificação da carga

✔ Adicionar coluna módulo

✔ Mostrar select no Create

✔ Mostrar select no Edit

✔ Salvar módulo

✔ Atualizar módulo

✔ Exibir módulo na listagem
  ---

  ### Versão 2.0.0

[ ] Revisar visualização da lista de serviços

[ ] Criar produção por funcionário

[ ] Criar resumo diário de produção

[ ] Criar controle de entregas

[ ] Melhorar rastreabilidade por carga

## Próximos passos

Finalizar serviços

Criar fechamento

Criar área funcionário

Criar pagamentos

Criar dashboard


---
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


⚙ Fechamentos

⚙ Área do Funcionário

⚙ Pagamentos

⚙ Dashboard

---

## Pendências

### Alta Prioridade

[ ] Criar controle de entregas por fábrica

Objetivo:
- acompanhar cronograma das fábricas
- controlar prazos de entrega
- evitar atrasos
- visualizar serviços pendentes por data


### Modelos

[ ] Criar cadastro de modelos de sofá
Objetivo:

* evitar digitação livre
* padronizar nomes
* permitir seleção por lista

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
