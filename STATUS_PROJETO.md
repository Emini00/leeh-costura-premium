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