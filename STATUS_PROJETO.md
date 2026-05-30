# STATUS PROJETO — Leeh Costura Premium

Última atualização:
20/05/2026


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


---

## Melhorias de UX

✔ labels no create

✔ labels no edit


Motivo:

placeholder desaparecia ao apagar


---

## Próximos passos

Finalizar serviços

Criar fechamento

Criar área funcionário

Criar pagamentos

Criar dashboard


---

## Backlog de melhorias

### Serviços

[ ] Confirmar salvamento de desconto

[ ] Confirmar salvamento de acréscimo

[ ] Confirmar salvamento de valor final

[ ] Remover definitivamente nome_sofa

[ ] Melhorar exibição da listagem

[ ] Adicionar área de detalhes com scroll interno


### Usabilidade

[ ] Adicionar botão voltar nas telas create

[ ] Adicionar botão voltar nas telas edit


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